@extends('dashboard.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Area Update
                <a href="{{url('Area')}}" class="btn btn-primary for pull-right">Back</a>


            </h1>


        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">

                        <!-- /.box-header -->
                        <!-- form start -->
                        <form  class="col-md-12" method="post" action="{{url('Area/'.$area->id)}}">
                            @csrf
                            <input type="hidden" name="_method" value="PUT"/>
                            <div class="box-body">
                                <div class="form-group col-md-4">
                                    <label>Area Name</label>
                                    <input type="text" class="form-control" name="name"
                                           value="{{$area->name}}"
                                           required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description" required>
                                        {{$area->description}}</textarea>
                                </div>

                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer"><center>
                                    <button type="submit" class="btn btn-primary">Update</button></center>
                            </div>
                        </form>
                    </div>


                    <!--/.col (right) -->
                </div>
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>


@stop