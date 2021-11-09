@extends('layouts.app')

@section('title' , 'Show')

@section('content')

        
<div class="container mt-4">
   
        <div class="row">
          <div class="col-xl-10 m-auto">
                    <div class="card-header">
                        <h4 class="card-title font-weight-bold">{{__('Show all Books')}} </h4>

                    </div>
                    <div class="form-group">
                        <label for="search">
                            {{__('Book Name Or Category:')}}
                        </label>
                        <input type="search" name="search">
                        <button class="btn btn-primary"> {{__('Search')}}</button>
                    </div>

                 

                    <table class="table table-bordered">
                        <tr>
                          <th>#</th>
                          <th>{{__('Book Name')}}</th>
                          <th>{{__('Author Name')}}</th>
                          <th>{{__('Quantity')}}</th>
                          <th>{{__('Category')}}</th>
                          <th>{{__('Price')}}</th>
                          

                        
                        </tr>

                        @foreach ($books as $book)
                        <tr>
                            <td>{{__($book->id)}} </td>
                            <td>{{__($book->name)}} </td>
                            <td>{{__($book->author)}} </td>
                            <td>{{__($book->quantity)}} </td>
                            <td>{{ __(\App\Category::findOrFail($book->category_id)->category_name) }}</td>
                            <td>{{ __($book->price) }}</td>
                         
                        
                            
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

@endsection

