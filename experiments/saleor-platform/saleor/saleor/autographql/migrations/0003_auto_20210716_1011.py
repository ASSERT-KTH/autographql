# Generated by Django 3.1.2 on 2021-07-16 10:11

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('autographql', '0002_auto_20210716_1005'),
    ]

    operations = [
        migrations.AlterField(
            model_name='autographql',
            name='id',
            field=models.CharField(max_length=100, primary_key=True, serialize=False),
        ),
    ]