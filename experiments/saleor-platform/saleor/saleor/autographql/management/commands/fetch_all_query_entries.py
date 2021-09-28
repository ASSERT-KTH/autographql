
from django.conf import settings
from django.core.management.base import BaseCommand, CommandError
from django.db.models import Q

from ...models import Autographql

import json
import os


class Command(BaseCommand):
    help = "Extracts all entries from database table Autographql and saves them into JSON files"

    def handle(self, *args, **options):

        allEntries = Autographql.objects.all()

        decoder = json.JSONDecoder()

        for entry in allEntries:
            try:
                dict = {'query': entry.query, 'variables': decoder.decode(entry.variables), 'operationName': entry.operationName }
                jsonString = json.dumps(dict)
                jsonFile = open('queries/' + entry.id + '.json', 'w+')
                jsonFile.write(jsonString)
            except Exception as e:
                print(e)
                print('id: ' + entry.id)
                print('variables: ' + entry.variables)


