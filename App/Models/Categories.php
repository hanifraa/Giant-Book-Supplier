<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = ['name'];

    public function books()
    {
        return $this->belongsToMany('App\Models\Books', 'book_category', 'category_id', 'book_id');
    }
}
