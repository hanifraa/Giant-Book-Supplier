<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book_category;
use App\Models\Categories;


class BookCategoryController extends Controller
{
    public function index(){

        return view('categories', [
            'categories' => Categories::all(),
            'books' => Book_category::all(),
        ]);
    }
}
