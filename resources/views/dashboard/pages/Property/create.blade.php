@extends('dashboard.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Property Create
                <a href="{{url('Property')}}" class="btn btn-primary for pull-right">Back</a>


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
                        <form  class="col-md-12" method="post" action="{{url('Property')}}"  enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="form-group col-md-4">
                                    <label>Property Name</label>
                                    <input type="text" class="form-control" name="name" value="{{old('name')}}" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label> Price</label>
                                    <input type="number" class="form-control" name="price" value="{{old('price')}}" required>
                                </div>

                                <div class="form-group col-md-4">
                                    <label> Size</label>
                                    <input type="number" class="form-control" name="size" value="{{old('size')}}" required>
                                </div>





                                <div class="form-group col-md-4">
                                    <label>No. Of rooms</label>
                                    <input type="number" class="form-control" name="rooms_no" value="{{old('rooms_no')}}" required>
                                </div>

                                <div class="form-group col-md-4">
                                    <label>No. of Floors</label>
                                    <input type="number" class="form-control" name="floors_no" value="{{old('floors_no')}}" required>
                                </div>

                                <div class="form-group col-md-4">
                                    <label>No. of Pathroom</label>
                                    <input type="number" class="form-control" name="pathroom_no" value="{{old('pathroom_no')}}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Property Image</label>
                                    <input type="file" class="form-control" name="image" value="{{old('image')}}" required>
                                </div>


                                <div class="form-group col-md-6">
                                    <label>Property Owner Phone</label>
                                    <input type="number" class="form-control" name="phone" value="{{old('phone')}}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description" required>{{old('description')}}</textarea>
                                </div>


                                <div class="form-group col-md-6">
                                    <label>Select Area</label>
                                    <select name="area_name">

                                        @foreach($all_areas as $area)

                                            {{--{{dd($area)}}--}}

                                            {{--<option>{{$property->Area->name}}</option>--}}
                                            <option>{{$area->name}}</option>
                                        @endforeach
                                    </select>
                                </div>





                            </div>



                            <!-- /.box-body -->

                            <div class="box-footer"><center>
                                <button type="submit" class="btn btn-primary">Submit</button></center>
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