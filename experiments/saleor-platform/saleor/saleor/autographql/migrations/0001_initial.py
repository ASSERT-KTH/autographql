# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from decimal import Decimal

import django.core.validators
import versatileimagefield.fields
from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = []

    operations = [
        migrations.CreateModel(
            name="QueryLogging",
            fields=[
                (
                    "id",
                    models.AutoField(
                        verbose_name="ID",
                        serialize=False,
                        auto_created=True,
                        primary_key=True,
                    ),
                ),
                (
                    "query",
                    models.CharField(max_length=1000, verbose_name="query"),
                ),
                (
                    "variables",
                    models.CharField(
                        max_length=1000,
                        verbose_name="variables",
                    ),
                ),
                (
                    "operation_name",
                    models.CharField(
                        max_length=100,
                        verbose_name="operation name",
                    ),
                ),
                (
                    "created_at",
                    models.DateTimeField(
                        max_length=100,
                        verbose_name="created at",
                    ),
                ),
                (
                    "updated_at",
                    models.DateTimeField(
                        max_length=100,
                        verbose_name="updated at",
                    ),
                ),
                (
                    "times_called",
                    models.IntegerField(
                        verbose_name="times called",
                    ),
                ),
            ],
        ),
    ]
