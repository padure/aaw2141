<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Book extends Model
    {
        protected $tabel = "books";
        protected $fillable = [
            'title', 'description', 'pages', 'price', 'author'
        ];
    }