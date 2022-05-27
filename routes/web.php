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
Route::get('acceuil','AcceuilController@index')->name('acceuil');

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
Route::get('actualiteview','Actualite\ActualiteController@actualiteview')->name('actualiteview');
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

Route::namespace('Congre')->group(function()
{
    Route::resource('congre', 'CongreController');
});
Route::get('/programcongre','Congre\CongreController@programcongre')->name('programcongre');
Route::get('/resumecongre','Congre\CongreController@resumecongre')->name('resumecongre');
Route::get('/instr','AcceuilController@instr')->name('instr');
Route::get('/archive','AcceuilController@archive')->name('archive');
Route::get('/articleview','Revue\RevueController@article')->name('articleview');
Route::get('/comite','AcceuilController@comite')->name('comite');
Route::get('/viewthese','These\TheseController@viewthese')->name('viewthese');
Route::namespace('Photo')->group(function(){
    Route::resource('photo','PhotoController');
});
