<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Books;

class HomeController extends Controller
{
    public function index(){

        return view('home', [
            'categories' => Categories::all(),
            'books' => Books::all()
        ]);
    }

}
