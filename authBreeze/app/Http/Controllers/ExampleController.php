<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index ()
    {
        $user = Auth::user();
        return view("example", compact("user"));
    }
}
