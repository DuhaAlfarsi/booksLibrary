<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="container mt-4">

    <div class="row">
        <div class="col-xl-10 m-auto">
            <div class="card-header">
                <h4 class="card-title font-weight-bold">{{__('Show all Orders')}} </h4>

            </div>

            <table class="table table-bordered">
                <tr>
                    <th>#</th>
                    <th>{{__('User Name')}}</th>
                    <th>{{__('Book Name')}}</th>
                    <th>{{__('Quantity')}}</th>
                    <th>{{__('Address')}}</th>
                    <th>{{__('Statue')}}</th>


                </tr>

                @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }} </td>
                    <td>{{ $order->user_name }}</td>
                    <td>{{ $order->book_name }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ $order->address }}</td>

                    <td>
                        @if($order->status == 'new')
                            <span class="badge bg-warning rounded p-2 text-white">New</span>
                            @else
                            @if($order->status == 'completed')
                            <span class="badge bg-success rounded p-2 text-white">Completed</span>
                            @else
                            <span class="badge bg-danger rounded p-2 text-white">Cancled</span>
                            @endif
                        @endif
                    </td>




                    @endforeach
                </tr>

            </table>

            {{-- Pagination --}}
            <div class="d-flex justify-content-center">
                {!! $orders->links() !!}
            </div>

        </div>
    </div>
    </form>

</div>

<div class="continer">
    <a href="{{ url('/client') }}" class="btn btn-primary btn-sm">Back</a>
    </div>
