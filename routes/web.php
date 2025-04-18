<?php

use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;


Route::controller(TarefaController::class)->group(function (){
    Route::name('tarefas.')->group(function (){
        Route::get('/index', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}', 'show')->name('show');
        Route::get('/{tarefa}/edit','edit')->name('edit');
        Route::put('/{tarefa}','update')->name('update');
        Route::delete('/{tarefa}','destroy')->name('destroy');
    });


});
