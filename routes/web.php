<?php
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

//Route::get('/', [WebController::class, "index"]);
//Route::view("/{path?}", "welcome");

Route::any( "/", function(){
    return view("welcome");
});