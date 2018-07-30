@extends('user.master')
@section('content')

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Your Wishlist</h2></div>

                <div class="card-body">
                    @if($wishlist)
                      <table class="table table-bordered table-responsive-sm table-hover">

                        <thead>
                        <tr>

                            <td>Property Id</td>
                            <td>Property Name</td>
                            <td>Size</td>
                            <td>Price</td>
                            <td>Image</td>
                            <td>Owner Phone No.</td>
                        </tr>
                        </thead>
                        <tbody>


                        @foreach($wishlist as $wish)
                            {{--{{dd($wish)}}--}}
                            <tr>

                                <td>{{$wish[0]}}</td>
                                <td>{{$wish[1]}}</td>
                                <td>{{$wish[2]}}</td>
                                <td>{{$wish[3]}}</td>
                                <td><img src="{{url('/images/'.$wish[4])}}"  height="50px" width="50px" /></td>
                                <td>{{$wish[5]}}</td>


                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    @else
                    <div align="center">
                        <button><a href="/property_view" class="btn btn-primary">Continue Viewing Property</a></button>
                        {{--<button><a href="/order_details" class="btn btn-danger">Order Now!</a></button>--}}
                    </div>
                        @endif
                </div>

                </div>
            </div>
        </div>
        </div>

@endsection('content')