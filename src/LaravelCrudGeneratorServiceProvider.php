<?php

namespace Yudicandra\LaravelCrudGenerator;

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
    $this->loadViewsFrom(__DIR__ . '../../resources/views', 'laravel-crud-generator');
    $this->loadRoutesFrom(__DIR__ . '../../routes/routes.php');

    $this->publishes([
      __DIR__ . '../../config/crud-generator-middleware.php' => config_path('crud-generator-middleware.php'),
    ]);
  }
}
