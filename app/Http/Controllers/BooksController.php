<?php

namespace App\Http\Controllers;
use App\Book;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::paginate(2);
        $data['books'] = Book::paginate(2);
        return view('books.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['books'] = Book::all();
        $data['categories'] = Category::all();
        return view('books.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'author' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'category_name' => 'required',

        ]);

        $book = new Book;
        $book->name     =  $request->name;
        $book->author     =  $request->author;
        $book->price     =  $request->price;
        $book->quantity     =  $request->quantity;
        $book->category_id =  $request->category_name;
        $book->save();

        return redirect()->back()->with('success','Book Succefully Add');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $data['book']=Book::findOrfail($id);
        $data['categories'] = Category::select('id','category_name')->get(); 
        return view('books.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::findOrfail($id);
        $book->name = $request->input('name');
        $book->author = $request->input('author');
        $book->price = $request->input('price');
        $book->quantity = $request->input('quantity');
        $book->save();
        return redirect()->back()->with('success','Book Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->back()->with('success','Book Deleted Successfully');
    }
}
