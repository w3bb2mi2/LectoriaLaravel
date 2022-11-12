<?php

use App\Http\Controllers\ProjectController;
use App\Http\Middleware\JsonResponseMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// Route::middleware([JsonResponseMiddleware::class])->group(function(){

//     Route::get('/projects', [ProjectController::class, "index"]); 
// });


Route::get('/projects', [ProjectController::class, "index"])->middleware("jsonPritty::true"); 
