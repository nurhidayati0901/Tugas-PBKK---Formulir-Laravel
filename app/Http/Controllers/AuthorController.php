<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthorController extends Controller
{
    //
    public function findUsername(User $author) {
        return view('Article', [
            "title" => "Post By Author: $author->name",
            "name" => "Nur Hidayati",
            "email" => "nurhidayati@gmail.com",
            "articles" => $author->articles->load('category', 'author')
        ]);
    }
}
