#!/bin/sh

set -e

echo "📦 Install composer dep."
composer install -q

echo "🔍 Run larastan"
./vendor/bin/phpstan analyse --error-format table --no-progress --no-ansi
