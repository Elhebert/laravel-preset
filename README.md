# Elhebert Laravel preset

A Laravel preset to bootstrap a Laravel application with everything I need.

This preset is based on [adamwathan/laravel-preset](https://github.com/adamwathan/laravel-preset) and [sixlive/laravel-preset](https://github.com/sixlive/laravel-preset).

## What is included

**Composer packages**
- [bensampo/laravel-enum](https://github.com/BenSampo/laravel-enum)
- [beyondcode/laravel-self-diagnosis](https://github.com/beyondcode/laravel-self-diagnosis)
- [sentry/sentry-laravel](https://github.com/sentry/sentry-laravel)
- [beyondcode/laravel-query-detector](https://github.com/beyondcode/laravel-query-detector) (dev)
- [friendsofphp/php-cs-fixer](https://github.com/friendsofphp/php-cs-fixer) (dev)
- [nunomaduro/larastan](https://github.com/nunomaduro/larastan) (dev)

**NPM packages**
- [BrowserSync](https://www.browsersync.io/)
- [Tailwind CSS](https://tailwindcss.com)
- [postcss-nesting](https://github.com/jonathantneal/postcss-nesting) for nested CSS support
- [Purgecss](https://www.purgecss.com/), via [spatie/laravel-mix-purgecss](https://github.com/spatie/laravel-mix-purgecss)
- [Prettier](https://prettier.io/)
- removes axios, bootstrap, lodash, jquery, popper.js and vue

**Configuration files**
- [Browserlist](/src/stubs/.browserslistrc) for Belgium
- [EditorConfig](/src/stubs/.editorconfig)
- [gitignore](/src/stubs/.gitignore.stub)
- [PHP-CS-Fixer](/src/stubs/.php_cs.dist)
- [Prettier](/src/stubs/.prettierrc)
- [docker-compose](/src/stubs/docker-compose.yml) to create a development environment
- [PHPUnit](/src/stubs/phpunit.xml) with sqlite in memory as database
- [Laravel Mix](/src/stubs/webpack.mix.js)

**Resources**
- Adds a simple Tailwind-tuned default layout template
- Replaces the welcome.blade.php template with one that extends the main layout
- Add `meta.php` to the language files

## Installation

This package isn't on Packagist, so to get started, add it as a repository to your `composer.json` file:

```json
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/elhebert/laravel-preset"
    }
]
```

Next, run this command to add the preset to your project:

```
composer require elhebert/laravel-preset --dev
```

## Usage

```
php artisan preset elhebert
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for more details.

## License

This preset is licensed under the [MIT license](http://opensource.org/licenses/MIT).
