<?php

namespace Yudican\LaravelCrudGenerator;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Yudican\LaravelCrudGenerator\Livewire\CrudGenerator;

class LaravelCrudGeneratorServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap the application services.
   *
   * @return void
   */
  public function boot()
  {
    Livewire::component('crud-generator', CrudGenerator::class);
    $this->loadViewsFrom(__DIR__ . '/resources/views/livewire/', 'crud-generator-views');
    $this->loadRoutesFrom(__DIR__ . '/routes/routes.php');

    $this->loadViewsFrom(__DIR__ . '/resources/components', 'crud-generator-components');

    // components
    Blade::component('components::text-field');
    Blade::component('components::text-date');
    Blade::component('components::textarea');
    Blade::component('components::input-file');
    Blade::component('components::input-photo');
    Blade::component('components::select');

    $this->publishes([
      __DIR__ . '/config/crud-generator.php' => config_path('crud-generator.php'),
    ], 'config');
  }
}
