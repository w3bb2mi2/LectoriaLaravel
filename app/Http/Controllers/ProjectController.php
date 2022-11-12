<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Continent;
use App\Models\Country;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index (){
        $countries = Continent::find(1)->get();
        return  response()->json($countries);        
    }
}
