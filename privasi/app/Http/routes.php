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
    return view('home');
});
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
if (Request::is('admin/*') or Request::is('admin'))
{
    require__DIR__.'/routes_admin.php';
}

if (Request::is('operator/*') or Request::is('operator'))
{
    require__DIR__.'/routes_operator.php';
}

if (Request::is('verificator/*') or Request::is('verificator'))
{
    require__DIR__.'/routes_verificator.php';
}

Route::post('cruddata','Crudcontroller@entrydata');

Route::get('/', function () {
    return view('home');
});
