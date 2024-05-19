<?php

use App\Models\Book;
use App\Models\Writer;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\QueryException;

Route::get('/', function () {
    return view('index', ['books' => Book::all()]);
    
});


Route::get('/detail', function () {
    return view('detail', ['writers' => Writer::all()]);
});
