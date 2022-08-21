<?php

namespace Yudicandra\LaravelCrudGenerator;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LaravelCrudGeneratorServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap the application services.
   *
   * @return void
   */
  public function boot()
  {
    $this->loadViewsFrom(__DIR__ . '../../resources/views/livewire', 'laravel-crud-generator');
    $this->loadRoutesFrom(__DIR__ . '../../routes/routes.php');

    $this->publishes([
      __DIR__ . '../../config/crud-generator.php' => config_path('crud-generator.php'),
    ], 'config');
  }
}
