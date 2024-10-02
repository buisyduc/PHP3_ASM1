<?php 
// app/Http/Controllers/HomeController.php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $books = DB::table('books')->get();
        return view('book.home', compact('books'));
    }
}
