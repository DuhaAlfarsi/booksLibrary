<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
                                    {{-- <a href="" class="btn btn-primary btn-sm">{{__('New')}}</a> --}}
                                    <form action="{{ route('cancel',['id' => $order->id]) }}" method="post">
                                        @csrf
                                    
                                        <button class="btn btn-primary btn-sm">{{__('Cancel')}}</button>
                                    </form>

                                    <form action="{{ route('complete',['id' => $order->id]) }}" method="post">
                                        @csrf
                                    
                                        <button class="btn btn-primary btn-sm">{{__('Complete')}}</button>
                                    </form>
                                    
                                    @else
                                        <p>
                                            @if($order->status == 'completed')
                                            Complete
                                            
                                            @elseif('canceled')
                                               Cancel
                                            @endif
                                        </p>
                                    @endif
                                </td>
                                
                                
                            
                            
                            @endforeach
                            </tr>
                           
                        </table>

                         {{-- Pagination --}}
                            <div class="d-flex justify-content-center">
                            {!! $orders->appends(['sort' => 'votes'])->links() !!}
                            </div>
                                               
              </div>
           </div>
        </form>
             
    </div>    
    <div class="continer">
    <a href="{{ url('/maneger') }}" class="btn btn-primary btn-sm">Back</a>
    </div>


