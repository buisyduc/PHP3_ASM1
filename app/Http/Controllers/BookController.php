<?php 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        
     
        $books = DB::table('books')->get();
        $categories = DB::table('categories')->get(); // Lấy danh sách danh mục
        
      
    return view('book.list', compact('books', 'categories')); // Truyền cả $books và $categories
    }

    public function show($id)
    {
        $book = DB::table('books')->where('id', $id)->first();
         // Lấy danh mục của sách
        $category = DB::table('categories')->where('id', $book->category_id)->first();
        return view('book.detail', compact('book', 'category'));
    }
    public function category($id,$name)
    {
        $categories = DB::table('categories')->get(); // Lấy danh sách danh mục
        $books = DB::table('books')->where('category_id', $id)->get();
        $categories = DB::table('categories')->get(); // Lấy danh sách danh mục
        return view('book.list', compact('books', 'categories','name')); // Truyền cả $books và $categories
    }
    
    
}
