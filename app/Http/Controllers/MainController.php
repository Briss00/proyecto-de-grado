<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $title = 'Inicio';
        return view('dashboard', compact('title'));
    }
}
