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
use Yudican\LaravelCrudGenerator\Livewire\Table\LivewireDatatable;

class LaravelCrudGeneratorServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap the application services.
   *
   * @return void
   */
  public function boot()
  {
    // dd('ok');
    Livewire::component('crud-generator', CrudGenerator::class);
    Livewire::component('datatable', LivewireDatatable::class);

    $this->loadViewsFrom(__DIR__ . '/../resources/views/livewire/', 'crud-generator-views');
    $this->loadViewsFrom(__DIR__ . '/../resources/views/livewire/datatables', 'datatable-views');
    $this->loadViewsFrom(__DIR__ . '/../resources/components', 'crud-generator-components');
    $this->loadViewsFrom(__DIR__ . '/../resources/views/livewire/datatables/icons', 'icon-views');
    $this->loadRoutesFrom(__DIR__ . '/../routes/routes.php');


    // databel
    Blade::component('icon-views::arrow-left', 'icons.arrow-left');
    Blade::component('icon-views::arrow-right', 'icons.arrow-right');
    Blade::component('icon-views::arrow-circle-left', 'icons.arrow-circle-left');
    Blade::component('icon-views::chevron-up', 'icons.chevron-up');
    Blade::component('icon-views::chevron-down', 'icons.chevron-down');
    Blade::component('icon-views::cog', 'icons.cog');
    Blade::component('icon-views::trash', 'icons.trash');
    Blade::component('icon-views::copy', 'icons.copy');
    Blade::component('icon-views::excel', 'icons.excel');
    Blade::component('icon-views::x-circle', 'icons.x-circle');
    Blade::component('icon-views::check-circle', 'icons.check-circle');

    // components
    Blade::component('text-field', TextField::class);
    Blade::component('text-date', TextDate::class);
    Blade::component('texarea', Textarea::class);
    Blade::component('select', Select::class);
    Blade::component('input-file', InputFile::class);
    Blade::component('input-image', InputImage::class);

    $this->publishes([
      __DIR__ . '/../config/crud-generator.php' => config_path('crud-generator.php'),
    ], 'config');
  }

  public function register()
  {
    $this->mergeConfigFrom(
      __DIR__ . '/../config/crud-generator.php',
      'crud-generator'
    );
  }
}
