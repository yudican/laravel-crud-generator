<?php

use Illuminate\Support\Facades\Route;
use Yudicandra\LaravelCrudGenerator\Http\Livewire\CrudGenerator;

Route::group(['middleware' => config('crud-generator-middleware.middleware')], function () {
    Route::get('/crud-generator', CrudGenerator::class)->name('crud.generator');
});
