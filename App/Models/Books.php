<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $fillable = ['title', 'author', 'year', 'synopsis', 'image'];

    public function publishers(){
        return $this->belongsTo('App\Models\Publishers','publisher_id');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Models\Categories', 'book_category', 'book_id', 'category_id');
    }
}
