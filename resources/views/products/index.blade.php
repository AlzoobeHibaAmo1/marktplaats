@extends('products.layout')

@section('content')
   <div class="container">
       <div class="row">
           <div class="col-lg-12 margin-tb">
               <div class="pull-right">
                   <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
               </div>
           </div>
       </div>
   </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

   <div class="container">
       @foreach ($products as $product)
           <div class="row row-cols-1 row-cols-md-3 g-4">
               <div class="col">
                   <div class="card">
                       <img src="..." class="card-img-top" alt="...">
                       <div class="card-body">
                           <h5 class="card-title">{{ $product->name}}</h5>
                           <p class="card-text">{{ $product->details }}</p>
                       </div>
                       <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                           <a href="{{ route('products.edit',$product->id) }}" class="btn btn-primary">Edit</a>
                           <a href="{{ route('products.show',$product->id) }} " class="btn btn-success">Show</a>
                           @csrf
                           @method('DELETE')
                           <button type="submit" class="btn btn-danger">Delete</button>
                       </form>
                   </div>
               </div>
           </div>
       @endforeach
   </div>

{{--    <table class="table table-bordered">--}}
{{--        <tr>--}}
{{--            <th>No</th>--}}
{{--            <th>Name</th>--}}
{{--            <th>Details</th>--}}
{{--            <th width="280px">Action</th>--}}
{{--        </tr>--}}
{{--        @foreach ($products as $product)--}}
{{--            <tr>--}}
{{--                <td>{{ ++$i }}</td>--}}
{{--                <td>{{ $product->name }}</td>--}}
{{--                <td>{{ $product->detail }}</td>--}}
{{--                <td>--}}
{{--                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">--}}

{{--                        <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>--}}

{{--                        <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>--}}

{{--                        @csrf--}}
{{--                        @method('DELETE')--}}

{{--                        <button type="submit" class="btn btn-danger">Delete</button>--}}
{{--                    </form>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--    </table>--}}

    {!! $products->links() !!}

@endsection
