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
    $this->loadViewsFrom(__DIR__ . '/views/livewire/', 'laravel-crud-generator');
    $this->loadRoutesFrom(__DIR__ . '/routes/routes.php');

    $this->publishes([
      __DIR__ . '/config/crud-generator.php' => config_path('crud-generator.php'),
    ], 'config');
  }
}
