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

//Recipe Api Calls
Route::get('/recipe/{id}', 'RecipeController@getRecipe');
Route::get('/recipe_cuisine/{cuisine}', 'RecipeController@getRecipesByCuisine');
Route::put('/recipe/{id}/update', 'RecipeController@updateRecipe');
Route::post('/recipe/create', 'RecipeController@addRecipe');

//Rate System
Route::post('/rate/add', 'StarController@addStar');
