<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;

class ViewsController extends Controller
{
    public function index(){
        return view('index');
    }
    public function contact(){
        return view('contact');
    }
}
