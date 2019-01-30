<?php

namespace Elhebert\LaravelPreset;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;

class LaravelPresetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        PresetCommand::macro('elhebert', function ($command) {
            Preset::install($command);
        });
    }
}
