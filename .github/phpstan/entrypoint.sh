#!/bin/sh

set -e

echo "📦 Install composer dep."
composer install -q

echo "🔍 Run larastan"
./vendor/bin/phpstan --error-format=table --no-progress --no-ansi
