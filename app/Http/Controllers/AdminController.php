<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public  function adminDashboard(){


        return view('admin.includes.Dashboard');
    }
    public  function adminList(){


        return view('admin.includes.list');
    }




}
