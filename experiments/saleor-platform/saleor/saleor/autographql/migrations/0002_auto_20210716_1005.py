# Generated by Django 3.1.2 on 2021-07-16 10:05

from django.db import migrations, models
import django.utils.timezone


class Migration(migrations.Migration):

    dependencies = [
        ('autographql', '0001_initial'),
    ]

    operations = [
        migrations.CreateModel(
            name='Autographql',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('createdAt', models.DateTimeField(default=django.utils.timezone.now, editable=False)),
                ('updatedAt', models.DateTimeField(default=django.utils.timezone.now)),
                ('timesCalled', models.IntegerField(default=1)),
                ('query', models.CharField(max_length=1000)),
                ('variables', models.CharField(max_length=1000)),
                ('operationName', models.CharField(max_length=100)),
            ],
        ),
        migrations.DeleteModel(
            name='QueryLogging',
        ),
    ]
