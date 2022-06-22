<?php

use Illuminate\Support\Facades\Route;
use Illuminate\http\Request;

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
    return 'welcome';
});


//  Route::get('/search',function(Request $request){
//         return $request->all();
//  });

// Route::get('/hello/{name?}/{actions}', function ($name=null , $actions=null) {
//     return 'hello,'.$name.'   '.$actions ;
// });




 
 
 Route::group(['prefix'=> 'dashboard'],function(){

    Route::get('/users',function(){
        return 'users dashboard';
    });


    Route::get('/statictic',function(){
        return 'users statictic';
    });
    
    Route::get('/chat',function(){
        return 'users chat';
    });
 });



