<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class ContactController extends Controller
{
    public function index(){

        return view('contact', [
            'categories' => Categories::all(),
        ]);
    }
}
