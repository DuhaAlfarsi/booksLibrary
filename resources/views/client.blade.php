@extends('layouts.app')

@section('title' , 'Client Dashboard')

@section('content')

<table>
    <tr>
        <h3 class="heading1"> Books Section </h3>
    </tr>
    <td>
        <div class="row ">
            <div class="col">
                <a href="{{ url('books') }}" class="btn_b btn-warning btn-lg btn-block">
                    Books</a>
            </div>
    </td>
    </div>
    </div>
</table>

<table>
    <tr>
        <h3> Orders Section </h3>
    </tr>
    <td>
        <div class="row ">
            <div class="col"><a href="{{ url('/requests') }}" class="btn_b btn-warning btn-lg btn-block">My Orders</a> </div>
    </td>
    </div>
    </div>
</table>

@endsection
