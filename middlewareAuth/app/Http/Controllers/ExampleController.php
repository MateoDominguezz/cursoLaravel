<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View as IlluminateView;
use Pest\Support\View;

class ExampleController extends Controller
{
    public function index(): IlluminateView
    {
        return view("index");
    }

    public function noAccess()
    {
        return view("noAccess");
    }
}
