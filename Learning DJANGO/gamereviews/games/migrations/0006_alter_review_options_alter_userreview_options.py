# Generated by Django 4.1 on 2024-07-01 07:04

from django.db import migrations


class Migration(migrations.Migration):
    dependencies = [
        ("games", "0005_userreview"),
    ]

    operations = [
        migrations.AlterModelOptions(
            name="review",
            options={"managed": True},
        ),
        migrations.AlterModelOptions(
            name="userreview",
            options={"managed": True},
        ),
    ]
