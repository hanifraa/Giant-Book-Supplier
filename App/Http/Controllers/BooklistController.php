<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Books;

class BooklistController extends Controller
{
    public function index($bookId){

        return view('booklist', [
            'categories' => Categories::all(),
            'bookDetail' => Books::find($bookId)
        ]);
    }
}
