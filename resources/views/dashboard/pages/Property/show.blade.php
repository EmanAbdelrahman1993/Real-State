@extends('dashboard.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Property Show
                <a href="{{url('Property')}}" class="btn btn-primary for pull-right">Back</a>


            </h1>


        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="box box-primary">



                        <table class="table table-bordered table-responsive-sm table-hover">

                            <thead>
                            <tr>

                                <td>Property Name</td>
                                <td>Description</td>
                                <td>Price</td>
                                <td>Size</td>
                                <td>rooms_no</td>
                                <td>floors_no</td>
                                <td>pathroom_no</td>
                                <td>Area</td>
                                <td>image</td>

                            </tr>
                            </thead>

                            <tbody>
                            <tr>

                                <td>{{$property->name}}</td>
                                <td> {{$property->description}}</td>
                                <td> {{$property->price}}</td>
                                <td>{{$property->size}}</td>
                                <td> {{$property->rooms_no}}</td>
                                <td> {{$property->floors_no}}</td>
                                <td>{{$property->pathroom_no}}</td>
                                <td>{{$area->name}}</td>
                                <td><img src="{{url('/images/'.$property->image)}}"  height="50px" width="50px" /></td>







                            </tr>


                            </tbody>
                        </table>


                    </div>

                </div>
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@stop
