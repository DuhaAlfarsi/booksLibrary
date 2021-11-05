<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<body>
  <div class="container mt-5">
      <form action="{{url('categories/store')}}" method="POST">
          @csrf
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
                          <h4 class="card-title font-weight-bold">{{__('Add New Categore')}} </h4>
                      </div>

                    <div class="card-body ">
                        <div class="form-group mb-2">
                            <label for="category_name"> {{__('Name')}} <span class="text-danger"> * </span> </label>
                                <input type="text" name="category_name" class="form-control" value="{{old('category_name')}}" />
                                {!!$errors->first("category_name", "<span class='text-danger'>:message</span>")!!}
                        </div>

                         <div class="card-footer">
                          <button type="submit" class="btn btn-success"> {{__('ADD Category')}} </button>

                         </div>
                    </div>
              </div>
          </div>
      </form>
  </div>
  </body>
    


