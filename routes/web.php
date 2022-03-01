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

route::get('/location',function(){
    $data=App\models\Location::all();

    return view('location')->with('locations',$data);
});

route::get('/admin',function(){
          return view('Adminlogin');
});

route::post('/adminlog','Lcontroller@login');
route::post("/savetask",'Lcontroller@store');
route::post("/deletelocation/{id}",'Lcontroller@deleteL');
route::get("/updatelocation/{id}",'Lcontroller@updateview');
route::post("/updatelocationview",'Lcontroller@updateL');

