<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardContoller extends Controller
{
    //
    function dashboard(){
        return view('/dasbord');
    }
    
}