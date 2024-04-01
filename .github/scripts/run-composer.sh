#!/bin/sh
cp .env.ci .env
composer install --no-ansi --no-interaction --prefer-dist
