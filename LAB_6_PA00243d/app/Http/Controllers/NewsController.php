<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Middleware;

class NewsController extends Controller
{
    public function __construct()
    {   
        $this->middleware('auth');
    }

    public function index(){
        echo "<h1>Danh sách tin</h1>";
    }
}