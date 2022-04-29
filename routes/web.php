<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->group(function()
{
    Route::resource('admin', 'adminController');
});

Route::namespace('Admin')->group(function()
{
    Route::resource('users', 'UsersController');
});

Route::namespace('Actualite')->group(function()
{
    Route::resource('actualite', 'ActualiteController');
});
Route::namespace('Article')->group(function()
{
    Route::resource('article', 'ArticleController');
});
Route::namespace('Discipline')->group(function()
{
    Route::resource('discipline', 'DisciplineController');
});

Route::namespace('These')->group(function()
{
    Route::resource('these', 'TheseController');
});
Route::namespace('Auteur')->group(function()
{
    Route::resource('auteur', 'AuteurController');
});
Route::namespace('Titre')->group(function()
{
    Route::resource('titre', 'TitreController');
});
Route::namespace('Specialite')->group(function()
{
    Route::resource('specialite', 'SpecialiteController');
});
Route::namespace('revue')->group(function()
{
    Route::resource('revue', 'revueController');
});
