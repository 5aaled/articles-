<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\sitecontroller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get("login",[UserController::class,"login"])->name("login");
Route::post("login",[UserController::class,"loginrequest"]);

route::controller(CategoryController::class)->middleware("auth")->group(function(){

    Route::get("/admin/category","index");
    Route::get("/admin/category/create","create");
    Route::post("/admin/category/store","store");
    Route::get("/admin/category/delete/{id}","destroy");
    Route::get("/admin/category/edit/{id}","edit");
    Route::post("/admin/category/update","update");
});
route::controller(ArticleController::class)->group(function(){
route::get("articles","index");
route::get("articles/create","create");
route::post("article/store","store");
route::get("article/edit/{id}","edit");
route::post("article/update","update");
route::get("article/delete/{id}","destroy");
});
######################## the site   the front end 
Route::controller(sitecontroller::class)->group(function (){

    route::get("site","index");
    route::get("blog/{id}","blog_details");
    route::get("category/{id}","category");
    route::get("comment","comment");
});