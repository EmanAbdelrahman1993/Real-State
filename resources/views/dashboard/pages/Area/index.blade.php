@extends('dashboard.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Area Index
                <a href="{{url('Area/create')}}" class="btn btn-primary for pull-right">Add New Area</a>


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
                            <td>Action</td>
                        </tr>
                        </thead>
                        <tbody>
                        @if($all_areas)
                        @foreach($all_areas as $area)
                            <tr>

                                <td>{{$area->name}}</td>
                                <td> {{ str_limit($area->description, $limit = 25, $end = '...') }}</td>
                                <td>
                                    <a href="{{url('Area/'.$area->id)}}" class="btn btn-success">Show</a>
                                    <a href="{{url('Area/'.$area->id.'/edit')}}" class="btn btn-primary">Edit</a>
                                    <form method="post" action="{{url('Area/'.$area->id)}}"
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
                                <strong>Oh snap! No Area To Show </strong> <a href="url{{'Area/create'}}" class="alert-link">Add New Area </a> and try  again.
                            </div>
                        @endif
                        </tbody>
                    </table>
                </div>
                     <center>
                         {{$all_areas->links()}}
                     </center>

            </div>

        </div>

            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@stop