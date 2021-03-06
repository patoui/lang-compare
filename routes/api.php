<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/search', 'ComparisonSearchController@index')
    ->name('api.comparison-search.index');

Route::get('/suggestion', 'ComparisonSuggestionController@index')
    ->name('api.comparison-suggestion.index');
