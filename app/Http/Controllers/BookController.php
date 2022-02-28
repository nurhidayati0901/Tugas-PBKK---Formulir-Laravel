<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
        return view('index', [
            "books" => Book::all()
        ]);
    }

    public function showInputForm() {
        return view('input');
    }

    public function create(Request $request) {
        $validateData = $request->validate([
            'image' => 'required | image | mimes:jpeg,png,jpg | max:2048',
            'judul' => 'required | min:5 | max:255',
            'penulis' => 'required | min:5 | max:255',
            'penerbit' => 'required | min:5 | max:255',
            'isbn' => 'required | min:13',
            'berat' => 'required | numeric | between:2.50,99.99',
            'harga' => 'required'
        ]);

        if($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('images-store');
        }
        
        Book::create($validateData);

        return redirect('/buku')->with('status', 'Stok buku berhasil ditambah!');
    }
}
