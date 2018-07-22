@extends('layouts.app')
@section('content')
    <div class="container">
        @if(\Session::has('error'))
            <div class="alert alert-danger">
                {{\Session::get('error')}}
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
			@if(auth()->user()->is_admin == 1)
			<div class="panel panel-default">
                <div class="panel-heading">
				
                <div class="panel-body">
                    <a href="{{url('admin/routes')}}">Admin</a>
                </div>
				</div>
				</div>
			
			@else
			
				<div class="panel panel-default">
                <div class="panel-heading">
				
                <div class="panel-body">
                    <a href="{{url('user/routes')}}">User</a>
                </div>
				</div>
				</div>
					
			
			@endif
			
			
        </div>
    </div>
    </div>
@endsection