<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class BooksController extends Controller
{
    public function index($categoryId){

        return view('categories', [
            'categories' => Categories::all(),
            'books' => Categories::find($categoryId),
        ]);
    }
}
