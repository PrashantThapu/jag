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
    return view('welcome');
});
Route::get('/tvs', function () {
    return view('tvs.welcome');
});
Route::get('/case', function () {
    return view('case.welcome');
});
Route::get('/jagcredits', function () {
    return view('jagcredits.welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([ 'prefix' => 'backend', 'middleware' => 'auth' ], function () {

     /*
    |--------------------------------------------------------------------------
    | Settings Routes
    |--------------------------------------------------------------------------
    */
    Route::group([ 'as' => 'setting.', 'prefix' => 'setting' ], function ()
    {
        Route::get('', 'SettingController@index')->name('index');
        Route::put('update', 'SettingController@update')->name('update');
    });
    /*
    |--------------------------------------------------------------------------
    | User CRUD Routes
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'user', 'as' => 'user.' ], function ()
    {
        Route::get('', 'UserController@index')->name('index');
        Route::get('create', 'UserController@create')->name('create');
        Route::post('', 'UserController@store')->name('store');
        Route::get('{user}', 'UserController@show')->name('show');
        Route::get('{user}/edit', 'UserController@edit')->name('edit');
        Route::put('{user}', 'UserController@update')->name('update');
        Route::delete('{user}', 'UserController@destroy')->name('destroy');

    });
    /*
    |--------------------------------------------------------------------------
    | Post CRUD Routes
    |--------------------------------------------------------------------------
    */
    Route::group([ 'as' => 'post.', 'prefix' => 'post' ], function ()

    {
        Route::get('', 'PostController@index')->name('index');
        Route::get('create', 'PostController@create')->name('create');
        Route::post('store', 'PostController@store')->name('store');
        Route::get('{post}/edit', 'PostController@edit')->name('edit');
        Route::put('{post}', 'PostController@update')->name('update');
        Route::delete('{post}', 'PostController@destroy')->name('destroy');
        Route::post('/datatable','PostController@datatable')->name('datatable');
    });
    /*
    |--------------------------------------------------------------------------
    | Team CRUD Routes
    |--------------------------------------------------------------------------
    */

    Route::group( [], function ()
    {
        Route::get('team', 'TeamController@index')->name('team.index');
        Route::get('team/create', 'TeamController@create')->name('team.create');
        Route::post('team', 'TeamController@store')->name('team.store');
        Route::get('team/{team}', 'TeamController@show')->name('team.show');
        Route::get('team/{team}/edit', 'TeamController@edit')->name('team.edit');
        Route::put('team/{team}', 'TeamController@update')->name('team.update');
        Route::delete('team/{team}', 'TeamController@destroy')->name('team.destroy');

    });
    /*
|--------------------------------------------------------------------------
| Menu CRUD Routes
|--------------------------------------------------------------------------
*/
    Route::group([ 'as' => 'menu.', 'prefix' => 'menu' ], function ()
    {
        Route::get('', 'MenuController@index')->name('index');
        Route::post('', 'MenuController@store')->name('store');
        Route::put('', 'MenuController@update')->name('update');
        Route::delete('{menu}', 'MenuController@destroy')->name('destroy');

        Route::group([ 'as' => 'subMenu.' ], function ()
        {
            Route::post('{menu}/sub-menu', 'MenuController@storeSubMenu')->name('store');
            Route::delete('{menu}/sub-menu/{subMenu}', 'MenuController@destroySubMenu')->name('destroy');

        });
    });
    /*
    |--------------------------------------------------------------------------
    | Page CRUD Routes
    |--------------------------------------------------------------------------
    */
    Route::group([ 'as' => 'page.', 'prefix' => 'page' ], function ()
    {
        Route::get('', 'PageController@index')->name('index');
        Route::get('create', 'PageController@create')->name('create');
        Route::post('', 'PageController@store')->name('store');
        Route::get('{page}/edit', 'PageController@edit')->name('edit');
        Route::put('{page}', 'PageController@update')->name('update');
        Route::delete('{page}', 'PageController@destroy')->name('destroy');
    });
});

