<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<body>
<div class="container mt-4">
    {{--<form action="{{url('pricing/show')}}" method="POST">
        @csrf--}}
        <div class="row">
          <div class="col-xl-10 m-auto">
                    <div class="card-header">
                        <h4 class="card-title font-weight-bold">{{__('Show all Books')}} </h4>
                        {{-- <button type="submit" class="btn btn-success"><a class="btn btn-success" href="/pricings/create"> {{__('ADD')}}</a> </button> --}}

                    </div>
                    <table class="table table-bordered">
                        <tr>
                          <th>#</th>
                          <th>{{__('Book Name')}}</th>
                          <th>{{__('Author Name')}}</th>
                          <th>{{__('Quantity')}}</th>
                          <th>{{__('Category')}}</th>
                          <th>{{__('Price')}}</th>
                          <th>{{__('Edit')}}</th>
                          <th>{{__('Delete')}}</th>
                          

                        
                        </tr>

                        @foreach ($books as $book)
                        <tr>
                            <td>{{__($book->id)}} </td>
                            <td>{{__($book->name)}} </td>
                            <td>{{__($book->author)}} </td>
                            <td>{{__($book->quantity)}} </td>
                            <td>{{ __(\App\Category::findOrFail($book->category_id)->category_name) }}</td>
                            <td>{{ __($book->price) }}</td>
                            <td>
                                <a href="{{ url('books/edit/'.$book->id) }}" class="btn btn-primary btn-sm">{{__('Edit')}}</a>
                            </td>
                            <td>
                                <form action="{{ url('/books/delete/'.$book->id) }}" method="POST">
                                    {{-- @method('delete') --}}
                                    @csrf
                                    {{-- <a href="{{ url('clients/delete/'.$client->id) }}" class="btn btn-primary btn-sm">Delete</a> --}}
                                    <button class="btn btn-primary btn-sm">{{__('Delete')}}</button>
                                </form>
                            </td>
                        
                            
                        @endforeach
                        </tr>
                       
                    </table>

                     {{-- Pagination --}}
                        <div class="d-flex justify-content-center">
                        {!! $books->appends(['sort' => 'votes'])->links() !!}
                        </div>
                                           
          </div>
       </div>
    </form>
         
</div>    
<div class="continer">
    <a href="{{ url('/maneger') }}" class="btn btn-primary btn-sm">Back</a>
    </div>
</body>

