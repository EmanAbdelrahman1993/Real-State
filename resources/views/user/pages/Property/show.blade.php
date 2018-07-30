@extends('user.master')
@section('content')
    <!-- content -->

    <div class="body3">
        <div class="main">
            <section id="content2">
                <div class="wrapper">
                    <article class="col1">
                        <div class="pad2">
                            <h2>{{$property->name}}</h2>
                            <figure class="left marg_right1"><img src="{{url('/images/'.$property->image)}}" style="height: 400px; width:900px;" alt=""></figure>
                            <p class="pad_bot1"><strong class="color2">{{$property->name}}<br>
                                    Price: <span class="color1">{{$property->price}}</span>-
                                    Size: <span class="color1">{{$property->size}}</span>-

                                    No of Bedrooms: <span class="color1">{{$property->rooms_no}}</span>-
                                    No of Pathroom: <span class="color1">{{$property->pathroom_no}}</span>-
                                    No of Floors: <span class="color1">{{$property->floors_no}}</span>-
                                    Area: <span class="color1">{{$area->name}}</span>-

                                </strong></p>
                            <p class="pad_bot2">{{$property->description}}</p>


                            <a href="{{url('wishlist/add/'.$property->id)}}" class="btn btn-success">Add To Wishlist <i class="fa fa-heart"></i></a>

                            <a href="#" class="btn btn-info">Owner Phone: {{$property->phone}}<i class="fa fa-phone"></i>

                                </a>


                        </div>

                    </article>

                </div>
            </section>
        </div>
    </div>
    <!-- / content -->
@endsection