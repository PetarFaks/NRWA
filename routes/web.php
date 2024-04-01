<?php
namespace App\Http\Controllers;
use App\Http\Controllers\AliasesController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('aliases', 'AliasesController');




Route::get('/aliases', [AliasesController::class, 'index']);




Route::get('/aliases/create', [AliasesController::class, 'create'])->name('aliases.create');



Route::post('/aliases', 'aliasesController@store');

Route::get('/aliases/{id}', 'aliasesController@show');


Route::get('/aliases/{id}/edit', 'aliasesController@edit');


Route::put('/aliases/{id}', 'aliasesController@update');


Route::delete('/aliases/{id}', 'aliasesController@destroy');
