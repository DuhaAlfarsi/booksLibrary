<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function books(Request $request){
        return view('client.books',[
            'books' => Book::search($request->q)
        ]);
    }

    public function requests(){
        $orders = Order::where('user_name' , Auth::user()->name)->paginate(10);
        return view('client.requests',[
            'orders' => $orders
        ]);
    }

    public function details($id){
        $book = Book::findOrFail($id);
        return view('client.details',[
            'book' => $book
        ]);
    }
    public function order($id){
        $book = Book::findOrFail($id);
         return view('client.order',[
            'book' => $book
        ]);
    }
    public function buy(Request $request , $id){
        $request->validate([
            'quantity' => 'required',
            'address' => 'required'
        ]);
        $book = Book::findOrFail($id);
        $order = new Order();
        $order->book_name = $book->name;
        $order->user_name = Auth::user()->name;
        $order->quantity  = $request->quantity;
        $order->address  = $request->address;
        $order->save();
        return back()->with('success','Order Succefully Submited !');
    }
}
