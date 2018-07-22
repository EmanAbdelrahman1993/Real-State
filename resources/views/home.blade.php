@extends('user.authpage')
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
                    <a href="{{url('admin/routes')}}"><h2>Go To Admin Dashboard</h2></a>
                </div>
				</div>
				</div>
			
			@else
			
				<div class="panel panel-default">
                <div class="panel-heading">
				
                <div class="panel-body">
                    <a href="{{url('user/routes')}}"><h2>Go To Home Page</h2></a>
                </div>
				</div>
				</div>
					
			
			@endif
			
			
        </div>
    </div>
    </div>
@endsection