<?php

namespace Yudicandra\LaravelCrudGenerator;

use Illuminate\Support\ServiceProvider;

class LcgServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap the application services.
   *
   * @return void
   */
  public function boot()
  {
    $this->loadRoutesFrom(__DIR__ . '/routes/routes.php');
  }
}
