<?php

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
    return view('index');
    Route::view('index', 'index', ['name' => 'Home']);
    Route::view('login', 'login', ['name' => 'Login']);
    Route::post('register', 'RegCon@store');
    Route::post('skills', 'SCon@index');
});
Route::view('/index', 'index', ['name' => 'Home']);
Route::view('/login', 'login', ['name' => 'Login']);
Route::post('login', 'LoginCon@login');
Route::view('/contact','contact')->name('contact');
Route::post('contact', 'CCon@send');
Route::get('logout', 'lCon@lo');
Route::view('/register', 'register', ['name' => 'Register']);
Route::view('/recommendation', 'recommendation');
//Route::resource('loginc','LoginCon');
//Route::resource('loginc','RegCon');
Route::post('register', 'RegCon@store');
Route::get('skills', 'SCon@index');
Route::get('myworks', 'PrCon@index');
Route::post('/myworks/all', 'PrCon@all');
Route::post('/myworks/web', 'PrCon@web');
Route::post('myworks/app', 'PrCon@app');
Route::post('myworks/res', 'PrCon@res');
Route::get('amyworks', 'AmwCon@index');
Route::post('/amyworks/all', 'AmwCon@all');
Route::post('/amyworks/web', 'AmwCon@web');
Route::post('amyworks/app', 'AmwCon@app');
Route::post('amyworks/res', 'AmwCon@res');
Route::post('amyworks/edit', 'AmwCon@edit');
Route::post('amyworks/delete', 'AmwCon@destroy');
Route::view('/mwedit','mwedit')->name('mwedi');
Route::post('/mwedit/post', 'MweCon@update');
Route::get('hire', 'HCon@index');
Route::get('ahire', 'AhCon@index');
Route::post('ahire/edit', 'AhCon@edit');
Route::post('ahire/delete', 'AhCon@destroy');
Route::view('/hadd','hadd')->name('hadd');
Route::post('/hadd','HaCon@store');
Route::post('/hedit','HeCon@update');
Route::get('askills', 'AskillCon@index');
Route::post('askills/edit', 'AskillCon@edit')->name('eed');
Route::post('askills/edite', 'AskillCon@wedit')->name('eet');
Route::post('eedit', 'EeCon@update')->name('e');
Route::post('wedit', 'WeCon@update')->name('wwedit');
Route::view('/wadd','wadd')->name('wadd');
Route::post('/wadd', 'WaCon@store');
Route::view('/mwadd','mwadd')->name('wadd');
Route::post('/mwadd', 'AdmwCon@store');
Route::view('/eadd','eadd')->name('eadd');
Route::post('/eadd', 'EaCon@store');



Route::post('/askills/destory', 'AskillCon@destroy')->name('dele');
Route::post('/askills/destorye', 'AskillCon@wdel')->name('profile');
//Route::get('askills', 'AskillCon@eedit');

//Route::resource('Auth', 'LoginCon@login');
