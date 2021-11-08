@extends('layouts.app')

@section('title' , 'Manager Dashboard')

@section('content')

<table>
    <tr>
        <h3 class="heading1"> Books Section </h3>
    </tr>
    <td>
        <div class="row ">
            <div class="col">
                <a href="{{ url('books/create') }}" class="btn_b btn-warning btn-lg btn-block">Add
                    Books</a>
            </div>
    </td>
    </div>
    <td>
        <div class="row ">
            <div class="col"><a href="{{ url('books/index') }}" class="btn_b btn-warning btn-lg btn-block">show
                    Books</a> </div>
    </td>
    </div>
</table>

<table>
    <tr>
        <h3 class="heading2"> Category Section </h3>
    </tr>
    <td>
        <div class="row ">
            <div class="col"><a href="{{ url('categories/create') }}" class="btn_b btn-warning btn-lg btn-block">Add
                    Category</a> </div>
    </td>
    </div>
    <td>
        <div class="row ">
            <div class="col"><a href="{{ url('categories/show') }}" class="btn_b btn-warning btn-lg btn-block">show
                    Category</a></div>
    </td>
    </div>
</table>
<table>
    <tr>
        <h3> Orders Section </h3>
    </tr>
    <td>
        <div class="row ">
            <div class="col"><a href="{{ url('orders/create') }}" class="btn_b btn-warning btn-lg btn-block">Add
                    Oeders</a> </div>
    </td>
    </div>
    <td>
        <div class="row ">
            <div class="col"><a href="{{ url('orders/show') }}" class="btn_b btn-warning btn-lg btn-block">show
                    Orders</a></div>
    </td>
    </div>
</table>

@endsection
