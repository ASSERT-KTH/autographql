from django.conf import settings
from django.db import models
from django.utils.timezone import now


class Autographql(models.Model):
    id = models.CharField(max_length=100, primary_key=True)
    createdAt = models.DateTimeField(default=now, editable=False)
    updatedAt = models.DateTimeField(default=now, editable=True)
    timesCalled = models.IntegerField(default=1, editable=True)
    query = models.TextField()
    variables = models.CharField(max_length=1000)
    operationName = models.CharField(max_length=100)
