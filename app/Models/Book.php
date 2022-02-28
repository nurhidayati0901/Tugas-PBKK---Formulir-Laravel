<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'Books';

    protected $fillable = [
        'id',
        'image',
        'judul',
        'penulis',
        'penerbit',
        'isbn',
        'berat',
        'harga',
    ];
}
