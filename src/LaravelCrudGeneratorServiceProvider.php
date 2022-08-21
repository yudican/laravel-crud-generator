<?php

namespace Yudican\LaravelCrudGenerator;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Yudican\LaravelCrudGenerator\Components\InputFile;
use Yudican\LaravelCrudGenerator\Components\InputImage;
use Yudican\LaravelCrudGenerator\Components\Select;
use Yudican\LaravelCrudGenerator\Components\Textarea;
use Yudican\LaravelCrudGenerator\Components\TextDate;
use Yudican\LaravelCrudGenerator\Components\TextField;
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
    Blade::component('text-field', TextField::class);
    Blade::component('text-date', TextDate::class);
    Blade::component('texarea', Textarea::class);
    Blade::component('select', Select::class);
    Blade::component('input-file', InputFile::class);
    Blade::component('input-image', InputImage::class);

    $this->publishes([
      __DIR__ . '/config/crud-generator.php' => config_path('crud-generator.php'),
    ], 'config');
  }
}
