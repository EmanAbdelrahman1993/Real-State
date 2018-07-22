@extends('user.master')
@section('content')
    <!-- content -->



   {{--{{ dd($no_of_wishes)}}--}}
    @if($wishes)
        {{--{{dd($wishlist)}}--}}
        <table class="table table-bordered table-responsive table-hover">

            <thead>
            <tr>

                <td>Property Id</td>
                <td>Name</td>
                <td>Size</td>
                <td>Price</td>
                <td>Image</td>
            </tr>
            </thead>
            <tbody>

<?php $size = count($wishes);?>
{{--{{dd($size)}}--}}
            {{--{{dd($wishes)}}--}}
            @foreach($wishes as $wish)
                <tr>
                {{--@for($i=0; $i<$size; $i++)--}}


                {{dd($wish[0]->id)}}

                    {{--<td>{{$wish[0]->id}}</td>--}}
                    <td> {{($wish[0]->name)}}</td>
                    {{--<td>{{$wish[0]->size}}</td>--}}
                    {{--<td>{{$wish[0]->price}}</td>--}}
                    {{--<td>{{$wish[0]->image}}</td>--}}


                </tr>
                {{--@endfor--}}
            @endforeach



            </tbody>

        </table>
        <div align="center">
            <button><a href="" class="btn btn-primary">Go To Property</a></button>
            <button><a href="" class="btn btn-danger">Call Us Now!</a></button>
        </div>

    @else
        <p>NO Property found in wishlist</p>
    @endif

    <!-- / content -->
@endsection