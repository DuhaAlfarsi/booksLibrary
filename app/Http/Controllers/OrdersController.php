<?php

namespace App\Http\Controllers;
use App\Order;
use App\Book;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\OrderStatusMail;
use Illuminate\Support\Facades\Mail;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['orders'] = Order::all();
        return view('orders.create',$data);
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
            'user_name' => 'required',
            'book_name' => 'required',
            'address' => 'required',
            'quantity' => 'required',
            

        ]);

        $order = new Order;
        $order->book_name     =  $request->book_name;
        $order->user_name    =  $request->user_name;
        $order->quantity     =  $request->quantity;
        $order->address =  $request->address;
        $order->status = null;
        $order->save();

        return redirect()->back()->with('success','Order Succefully Add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $orders = Order::paginate(2);
        $data['orders'] = Order::paginate(2);
        return view('orders.show')->with($data);
    }

    public function complete($id){
        $order = Order::findOrFail($id);
        $order->status = 1;
        $order->save();
        Mail::to('email@mail.com')->send(new OrderStatusMail($order));
        return back();
    }
    public function cancel($id){
        $order = Order::findOrFail($id);
        $order->status = 0;
        $order->save();
        Mail::to('email@mail.com')->send(new OrderStatusMail($order));
        return back();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
