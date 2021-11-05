
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="container mt-4">
        {{--<form action="{{url('categories/show')}}" method="POST">
            @csrf--}}
            
            <div class="row">
              <div class="col-xl-10 m-auto">
                        <div class="card-header">
                            <h4 class="card-title font-weight-bold">{{__('Show all categories')}} </h4>
                            <button type="submit" class="btn btn-success"><a class="btn btn-success" href="/categories/create"> {{__('ADD')}}</a> </button>

                        </div>

                        <table class="table table-bordered">
                            <tr>
                              <th>#</th>
                              <th>{{__('Name')}}</th>
                              <th>{{__('Edit')}}</th>
                              <th>{{__('Delete')}}</th>

                            
                            </tr>

                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }} </td>
                                <td>{{ $category->category_name }}</td>
                                
                                <td>
                                    <a href="{{ url('categories/edit/'.$category->id) }}" class="btn btn-primary btn-sm">{{__('Edit')}}</a>
                                </td>
                                <td>
                                    <form action="{{ url('/categories/delete/'.$category->id) }}" method="POST">
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
                            {!! $categories->appends(['sort' => 'votes'])->links() !!}
                            </div>
                                               
              </div>
           </div>
        </form>
             
    </div>    


