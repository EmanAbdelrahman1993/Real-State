@extends('dashboard.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Property Index
                <a href="{{url('Property/create')}}" class="btn btn-primary for pull-right">Add New Property</a>


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
                            <td>Action</td>
                        </tr>
                        </thead>
                        <tbody>
                        @if($many_property)
                        @foreach($many_property as $property)
                            {{--@if($danger == 1)--}}
                            <tr>

                                <td>{{$property->name}}</td>
                                <td> {{ str_limit($property->description, $limit = 25, $end = '...') }}</td>
                                <td> {{$property->price}}</td>
                                <td>{{$property->size}}</td>



                                <td>
                                    <a href="{{url('Property/'.$property->id)}}" class="btn btn-success">Show</a>
                                    <a href="{{url('Property/'.$property->id.'/edit')}}" class="btn btn-primary">Edit</a>
                                    <form method="post" action="{{url('Property/'.$property->id)}}"
                                          style="display: inline;">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE"/>
                                        <input type="submit" value="delete" class="btn btn-danger"/>
                                    </form>

                                </td>
                            </tr>

                            @endforeach
                            @else
                            <div class="alert alert-dismissible alert-primary">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Oh snap! No Property For You</strong> <a href="url{{'Property/create'}}" class="alert-link">Add New Property </a> and try  again.
                            </div>
                        @endif
                        </tbody>
                    </table>
                </div>
                <center>
                    {{$many_property->links()}}
                </center>

            </div>

        </div>

            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@stop