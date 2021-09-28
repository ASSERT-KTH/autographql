from typing import Optional

import opentracing
import opentracing.tags
import uuid
import json
import datetime
from django.conf import settings
from django.contrib.auth import authenticate
from django.contrib.auth.models import AnonymousUser
from django.utils.functional import SimpleLazyObject
from graphql import ResolveInfo

from ..app.models import App
from ..core.exceptions import ReadOnlyException
from ..core.tracing import should_trace
from .views import API_PATH, GraphQLView
from ..autographql import models


class AutoGraphQLMiddleware:
    @staticmethod
    def resolve(next_, root, info: ResolveInfo, **kwargs):


        byte_str = info.context._stream.read()
        decoder = json.JSONDecoder()

        if byte_str != b'':
            res_dict = json.loads(byte_str.decode('utf-8'))
            if isinstance(res_dict, list):
                res_dict = res_dict[0]
            query = str(res_dict['query'])
            if '__schema' in query:
                return next_(root, info, **kwargs)
            if 'variables' in res_dict:
                arguments = str(res_dict['variables']).replace("'", '"').replace("None", "null")
            else:
                arguments = ''
            if 'operationName' in res_dict:
                operationName = str(res_dict['operationName'])
            else:
                operationName = ''
            primaryKey = query + arguments + operationName

            uniqueKey = str(uuid.uuid5(uuid.UUID('863e89de-bfa7-44c5-bae4-3fc772b40ef3'), primaryKey))

            try:
                existingEntry = models.Autographql.objects.get(id=uniqueKey)
                existingEntry.timesCalled += 1
                existingEntry.updatedAt = datetime.datetime.now(tz=datetime.timezone.utc)
                existingEntry.save()
            except:
                loggedQuery = models.Autographql(id = uniqueKey, query = query, variables = arguments, operationName = operationName)
                loggedQuery.save()
                """try:
                    dict = {'query': query,
                            'variables': decoder.decode(arguments),
                            'operationName': operationName}

                except:
                    dict = {'query': query,
                            'variables': arguments,
                            'operationName': operationName}

                jsonString = json.dumps(dict)
                jsonFile = open('autographqltests/' + uniqueKey + '.json', 'w+')
                jsonFile.write(jsonString)
                jsonFile.close()"""

        return next_(root, info, **kwargs)

