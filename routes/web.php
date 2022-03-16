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

//define('')
Route::get('/', function () {
    $data=[];
    $data['id']=5;
    $data['name'] = 'Amjad Adel Alhakimi';


});

Route::get('index','Front\UserController@getIndex');

Route::get('indexes','Front\UserController@getIndexes');

Route::get('test1',function (){
    return 'welcome';
});

//route parameter
Route::get('show-number/{id}',function ($id){
    return $id;
})-> name('a');

Route::get('show-string/{id?}',function (){
    return 'welcome';
})-> name('b');


//route name

//Route::namespace('Front')->group(function (){
//    //all route only access controller or methods in folder name Front
//    Route::get('users','UserController@showUserName');
//});

//Route::prefix('users')-> group(function (){
//   Route::get('show','UserController@showUserName');
//   Route::delete('delete','UserController@showUserName');
//    Route::get('edit','UserController@showUserName');
//    Route::put('update','UserController@showUserName');
//});

//Route::group(['prefix' => 'users','middleware' => 'auth'],function(){
//    Route::get('/',function (){
//        return 'work';
//    });
//    Route::get('show','UserController@showUserName');
//    Route::delete('delete','UserController@showUserName');
//    Route::get('edit','UserController@showUserName');
//    Route::put('update','UserController@showUserName');
//});

//Route::get('check',function (){
//    return 'middleware';
//}) -> middleware('auth');
//Route::get('offers/show','UserController@showUserName');
//Route::delete('offers/delete','UserController@showUserName');
//Route::get('offers/edit','UserController@showUserName');
//Route::put('offers/update','UserController@showUserName');

Route::group(['namespace'=> 'Admin'],function (){
Route::get('second','SecondController@showString0')->middleware('auth');
    Route::get('second1','SecondController@showString1');
    Route::get('second2','SecondController@showString2');
    Route::get('second3','SecondController@showString3');
});

Route::get('login',function (){
   return 'Must Be login To access this Route';
})-> name('login');
//middleware
//Route::get('users','UserController@index');

//Route::group(['middleware'=>'auth'],function (){
//    Route::get('users','UserController@index');
//
//});

Route::resource('news','NewsController');

//Route::get('news','NewsController@show');
//Route::post('news','NewsController@store');
//Route::get('news/create','NewsController@create');
//Route::get('news/{id}/edit','NewsController@edit');
//Route::post('update/{id }','NewsController@update');
//Route::delete('delete/{id }','NewsController@delete');

//Route::get('create', 'controller@method');
Route::get('/about',function (){
   return view('about');
});
