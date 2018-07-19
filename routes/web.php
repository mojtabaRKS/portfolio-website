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

# ------------- front routes --------------

Route::get('/', function () {
    return view('front.index');
})->name('index');

# ---------- end of front routes ----------




#----------- panel routes --------------

Route::group([
    'prefix' => 'panel' ,
    'namespace' => 'Panel' ,
    'middleware' => ['auth' , 'checkAdmin']
] , function () {
   Route::get('/' , 'IndexController@index')->name('dashboard');

   Route::resources([
       'skills' => 'SkillController' ,
       'portfolios' => 'PortfolioController' ,
       'attributes' => 'AttributeController'
   ]);
   Route::get('skills/{skill}/changeStatus' , 'SkillController@changeSkillActivation')->name('skills.change.activation');
});
# ---------end of panel routes ------------


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
