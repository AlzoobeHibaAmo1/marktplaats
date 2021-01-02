@extends('products.layout')
@section('content')
    <div>
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
        </div>
   <div class="container-fluid">
           <div class="pull-right">
               <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
           </div>
       </div>

       <div class="container">
           <div class="pull-left">
               <h2>{{ $product->name }}</h2>
               <img src="">
               <p>{{ $product->detail }}</p>
               <strong>{{ $product->price }}</strong>
               <br>
               <a href="{{ $product->link }}">{{ $product->link }}</a>
           </div>

       </div>

       {{--    <div class="row">--}}
       {{--        <div class="col-xs-12 col-sm-12 col-md-12">--}}
       {{--            <div class="form-group">--}}
       {{--                <strong>Name:</strong>--}}
       {{--                {{ $product->name }}--}}
       {{--            </div>--}}
       {{--        </div>--}}
       {{--        <div class="col-xs-12 col-sm-12 col-md-12">--}}
       {{--            <div class="form-group">--}}
       {{--                <strong>Details:</strong>--}}
       {{--                {{ $product->detail }}--}}
       {{--            </div>--}}
       {{--        </div>--}}
       {{--    </div>--}}
   </div>

@endsection
