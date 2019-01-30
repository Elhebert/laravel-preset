<?php

namespace Elhebert\LaravelPreset;

use Illuminate\Foundation\Console\Presets\Preset as BasePreset;

class Preset extends BasePreset
{
    public static function install()
    {
        static::updatePackages();
        static::updateStyles();
        static::updateWebpackConfiguration();
        static::updateJavaScript();
        static::updateTemplates();
        static::updateLocaleFiles();
        static::removeNodeModules();
        static::updateGitignore();
        static::addToolingConfigurationFiles();
        static::updateComposerPackages();
        static::updateComposerDevPackages();
    }

    protected static function updatePackageArray(array $packages)
    {
        return array_merge([
            'browser-sync' => '^2.24.7',
            'browser-sync-webpack-plugin' => '^2.2.2',
            'laravel-mix-purgecss' => '^2.2.0',
            'postcss-nesting' => '^5.0.0',
            'postcss-import' => '^11.1.0',
            'prettier' => '^1.14.0',
            'tailwindcss' => '>=0.5.3',
        ], Arr::except($packages, [
            'axios',
            'bootstrap',
            'bootstrap-sass',
            'lodash',
            'jquery',
            'popper.js',
            'vue',
        ]));
    }

    protected static function installJavascriptDependencies()
    {
        static::runCommand('npm install');
    }

    protected static function updateStyles()
    {
        tap(new Filesystem, function ($files) {
            $files->deleteDirectory(resource_path('sass'));
            $files->delete(public_path('css/app.css'));

            if (!$files->isDirectory($directory = resource_path('css'))) {
                $files->makeDirectory($directory, 0755, true);
            }
        });

        static::runCommand('./node_modules/.bin/tailwind init tailwind.js');

        copy(__DIR__ . '/stubs/resources/css/app.css', resource_path('css/app.css'));
    }

    protected static function updateWebpackConfiguration()
    {
        copy(__DIR__ . '/stubs/webpack.mix.js', base_path('webpack.mix.js'));
    }

    protected static function updateJavaScript()
    {
        tap(new Filesystem, function ($files) {
            $files->cleanDirectory(resource_path('js'));
            $files->put(resource_path('js/app.js'), '');
        });
    }

    protected static function updateTemplates()
    {
        tap(new Filesystem, function ($files) {
            $files->delete(resource_path('views/home.blade.php'));
            $files->delete(resource_path('views/welcome.blade.php'));
            $files->copyDirectory(__DIR__ . '/stubs/resources/views', resource_path('views'));
        });
    }

    protected static function updateLocaleFiles()
    {
        copy(__DIR__ . '/stubs/resources/lang/en/meta.php', resource_path('lang/en/meta.php'));
    }

    protected static function updateGitignore()
    {
        copy(__DIR__ . '/stubs/.gitignore.stub', base_path('.gitignore'));
    }

    protected static function addToolingConfigurationFiles()
    {
        copy(__DIR__ . '/stubs/.browserslistrc', base_path('.browserslistrc'));
        copy(__DIR__ . '/stubs/.editorconfig', base_path('.editorconfig'));
        copy(__DIR__ . '/stubs/.prettierrc', base_path('.prettierrc'));
        copy(__DIR__ . '/stubs/.php_cs.dist', base_path('.php_cs.dist'));
        copy(__DIR__ . '/stubs/docker-compose.yml', base_path('docker-compose.yml'));
        copy(__DIR__ . '/stubs/phpunit.xml', base_path('phpunit.xml'));
    }

    public static function updateComposerPackages()
    {
        $packages = [
            'bensampo/laravel-enum',
            'beyondcode/laravel-self-diagnosis',
            'sentry/sentry-laravel',
        ];

        static::runCommand('composer require ' . implode(' ', $packages));
    }

    public static function updateComposerDevPackages()
    {
        $packages = [
            'beyondcode/laravel-query-detector',
            'friendsofphp/php-cs-fixer',
            'nunomaduro/larastan',
        ];

        static::runCommand('composer require --dev ' . implode(' ', $packages));
    }

    /** @see https://github.com/sixlive/laravel-preset/blob/master/src/Preset.php#L89 */
    private static function runCommand($command)
    {
        return exec(sprintf('%s 2>&1', $command));
    }
}
