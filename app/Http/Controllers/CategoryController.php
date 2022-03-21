<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function find() {
        return view('categories', [
            'title' => 'All Categories',
            'categories' => Category::all()
        ]);
    }

    public function findSlug(Category $category) {
        return view('article', [
            'title' => "Post By Category: $category->name",
            "name" => "Nur Hidayati",
            "email" => "nurhidayati@gmail.com",
            'articles' => $category->articles->load('category', 'author')
        ]);
    }
}
