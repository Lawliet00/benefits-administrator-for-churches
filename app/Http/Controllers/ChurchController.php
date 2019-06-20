<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ChurchController extends Controller
{
    public function index()
    {
    	return view('app.churches.index');
    }
}
