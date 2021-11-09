<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<body>
    <div class="container mt-5">
        <form action="{{url('books/update/'.$book->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="col-xl-8 m-auto">
                <div class="card shadow">
                        @if(Session::has('success'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">✔</button>
                                {{Session::get('success')}}
                            </div>
                        @elseif(Session::has('failed'))
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{Session::get('failed')}}
                            </div>
                        @endif
  
                        <div class="card-header">
                            <h4 class="card-title font-weight-bold">{{__('Add New Book')}} </h4>
                        </div>
  
                      <div class="card-body ">
                        <div class="form-group mb-2">
                            <label for="name"> {{__('Book Name')}} <span class="text-danger"> * </span></label>
                                <input type="text" name="name" class="form-control" value="{{$book->name}}" />
                                {!!$errors->first("name", "<span class='text-danger'>:message</span>")!!}
                        </div>


                        <div class="form-group mb-2">
                            <label for="author"> {{__('Author Name')}} <span class="text-danger"> * </span></label>
                                <input type="text" name="author" class="form-control" value="{{$book->author}}" />
                                {!!$errors->first("author", "<span class='text-danger'>:message</span>")!!}
                        </div>


                        <div class="form-group mb-2">
                            <label for="price"> {{__('Price')}} <span class="text-danger"> * </span></label>
                                <input type="decimal" name="price" class="form-control" value="{{$book->price}}" />
                                {!!$errors->first("price", "<span class='text-danger'>:message</span>")!!}
                        </div>

                        <div class="form-group mb-2">
                            <label for="quantity"> {{__('Quantity')}} <span class="text-danger"> * </span></label>
                                <input type="number" name="quantity" class="form-control" value="{{$book->quantity}}" />
                                {!!$errors->first("quantity", "<span class='text-danger'>:message</span>")!!}
                        </div>

                              <div class="form-group mb-2">
                                  <label for="category_name"> {{__('Category Name')}} <span class="text-danger"> * </span> </label>
                                      <select name="category_name" class="form-control" id="">
                                          @foreach ($categories as $category)
                                              <option value="{{$category->id}}">{{$category->category_name}}</option>
                                          @endforeach
                                      </select>
                                      {!!$errors->first("category_name", "<span class='text-danger'>:message</span>")!!}
                              </div>
  
  
                           <div class="card-footer">
                            <button type="submit" class="btn btn-success"> {{__('Update')}} </button>
                            {{-- <a class="btn btn-success" href="/pricings/show"> {{__('Go Back')}}</a> --}}
  
                           </div>
                      </div>
                </div>
            </div>
        </form>
    </div>
    <div class="continer">
    <a href="{{ url('/books/create') }}" class="btn btn-primary btn-sm">Back</a>
    </div>
     </body>
