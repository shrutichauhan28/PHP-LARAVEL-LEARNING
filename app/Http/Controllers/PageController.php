<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
{
    return view('about'); // Assumes an 'about.blade.php' exists in 'resources/views'
}
    //
}
