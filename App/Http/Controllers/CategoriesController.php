<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Books;

class CategoriesController extends Controller
{
    public function index($catgoryName){

        return view('categories', [
            'categories' => Categories::all(),
        ]);
    }
}
