<?php

use Illuminate\Support\Facades\Route;
use LaravelCrudGenerator\Livewire\CrudGenerator;

Route::group(['middleware' => config('crud-generator.middleware'), 'prefix' => config('crud-generator.prefix')], function () {
    Route::get('/crud-generator', CrudGenerator::class)->name('crud.generator');
});
