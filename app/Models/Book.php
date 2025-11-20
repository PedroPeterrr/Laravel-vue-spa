<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $primaryKey = 'isbn';
    public $incrementing = false;
    protected $keyType = 'string';

    public $timestamps = false;   // ← ADD THIS

    protected $fillable = [
        'isbn',
        'title',
        'author_id',
        'publisher_id',
        'year_pub',
        'description',
    ];
}
