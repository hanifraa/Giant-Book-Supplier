<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Publishers;

class PublishersController extends Controller
{
    public function index(){

        return view('publisher',  [
            'categories' => Categories::all(),
            'publishers' => Publishers::all()
        ]);
    }
}
