@extends('dashboard.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Area Show
                <a href="{{url('Area')}}" class="btn btn-primary for pull-right">Back</a>


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

                                <td>Area Name</td>
                                <td>Description</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$area->name}}</td>
                                <td>{{$area->description}}</td>

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
