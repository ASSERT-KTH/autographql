# Generated by Django 2.1.4 on 2019-02-21 01:28

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [("page", "0005_auto_20190208_0456")]

    operations = [
        migrations.AlterField(
            model_name="page",
            name="is_published",
            field=models.BooleanField(default=True),
        )
    ]
