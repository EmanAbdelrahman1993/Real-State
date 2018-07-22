@extends('user.master')
@section('content')
    <!-- content -->
    <div class="body2">
        <div class="main">
            <section id="content">
                <div class="wrapper">
                    <article class="col1">
                        <div id="slider"> <img src="../../../frontend-design/images/img1.jpg" alt="" title="<strong>Villa Neverland, 2006</strong><span>9 rooms, 3 baths, 6 beds, building size: 5000 sq. ft. &nbsp; &nbsp; &nbsp; Price: $ 600 000 &nbsp; &nbsp; &nbsp; <a href='#'>Read more</a></span>"> <img src="../../../frontend-design/images/img2.jpg" alt="" title="<strong>Villa Lipsum, 2008</strong><span>8 rooms, 4 baths, 4 beds, building size: 4500 sq. ft. &nbsp; &nbsp; &nbsp; Price: $ 500 000 &nbsp; &nbsp; &nbsp; <a href='#'>Read more</a></span>"> <img src="../../../frontend-design/images/img3.jpg" alt="" title="<strong>Villa Dolor Sid, 2007</strong><span>11 rooms, 3 baths, 5 beds, building size: 6000 sq. ft. &nbsp; &nbsp; &nbsp; Price: $ 650 000 &nbsp; &nbsp; &nbsp; <a href='#'>Read more</a></span>"> <img src="../../../frontend-design/images/img4.jpg" alt="" title="<strong>Villa Nemo Enim, 2010</strong><span>5 rooms, 2 baths, 4 beds, building size: 3000 sq. ft. &nbsp; &nbsp; &nbsp; Price: $ 400 000 &nbsp; &nbsp; &nbsp; <a href='#'>Read more</a></span>"> <img src="../../../frontend-design/images/img5.jpg" alt="" title="<strong>Villa Nam Libero, 2003</strong><span>7 rooms, 4 baths, 6 beds, building size: 7000 sq. ft. &nbsp; &nbsp; &nbsp; Price: $ 700 000 &nbsp; &nbsp; &nbsp; <a href='#'>Read more</a></span>"> </div>
                    </article>
                    <article class="col2">
                        <form id="form_1" action="#" method="post">
                            <div class="pad1">
                                <h3>Find Your Property</h3>
                                <div class="row"> City &amp; State, or Zip:<br>
                                    <input type="text" class="input">
                                </div>
                                <div class="row_select"> Search Area:<br>
                                    <select>
                                        <option>&nbsp;</option>
                                        <option>...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="row_select">
                                    <div class="cols"> Price Range:<br>
                                        <select>
                                            <option>&nbsp;</option>
                                            <option>...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="cols pad_left1"> to:<br>
                                        <select>
                                            <option>&nbsp;</option>
                                            <option>...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row_select">
                                    <div class="cols"> Bedroom(s):<br>
                                        <select>
                                            <option>&nbsp;</option>
                                            <option>...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="cols pad_left1"> Bathroom(s):<br>
                                        <select>
                                            <option>&nbsp;</option>
                                            <option>...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row_select pad_bot1">
                                    <div class="cols"> Radius:<br>
                                        <select>
                                            <option>&nbsp;</option>
                                            <option>...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="cols pad_left1"> <a href="#" class="button">Proposals</a> </div>
                                </div>
                                Know exactly what you want? <br>
                                Try our <a href="#">Advanced Search</a> </div>
                        </form>
                    </article>
                </div>

            </section>
        </div>
    </div>
    <div class="body3">
        <div class="main">
            <section id="content2">
                <div class="wrapper">
                    <article class="col1">
                        <div class="pad2">
                            <h2>Remodeling Rooms</h2>
                            @foreach($many_property  as $property)
                            <div class="wrapper pad_bot3">
                                <figure class="left marg_right1"><img src="{{url('/images/'.$property->image)}}" style="height: 300px; width:400px;" alt=""></figure>
                                <p class="pad_bot1"><strong class="color2">{{$property->name}}<br>
                                        Price: <span class="color1">{{$property->price}}</span></strong></p>
                                <p class="pad_bot2">{{$property->description}}</p>
                                <a href="{{url('property_show/'.$property->id)}}" class="button">Show</a>

                            </div>


                            @endforeach
                            <center>
                                {{$many_property->links()}}
                            </center>
                        </div>

                    </article>
                    <article class="col2">
                        <div class="pad1">
                            <h3>Recent News</h3>
                            <div class="wrapper"> <span class="date"><strong>28</strong><span>may</span></span>
                                <p><a href="#" class="color2">Donec consequat risus</a><br>
                                    Hendrerit conghdim entum diam metus fringilla nisl, in porta sapien purus quis odiosem... <a href="#">more</a></p>
                            </div>
                            <div class="wrapper"> <span class="date"><strong>25</strong><span>may</span></span>
                                <p><a href="#" class="color2">Nullam dignissim</a><br>
                                    Laoreet neque, quis sollicitudin orci tempus etiam viverra leo euismod pulvinar accumsan... <a href="#">more</a></p>
                            </div>
                            <div class="wrapper"> <span class="date"><strong>22</strong><span>may</span></span>
                                <p><a href="#" class="color2">Quisque nunc lorem</a><br>
                                    Feugiat nec sodales quis, iaculis sed libero. Cras vel nisl justo, ac posuere est nulla facilisi... <a href="#">more</a></p>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
        </div>
    </div>
    <!-- / content -->
@endsection