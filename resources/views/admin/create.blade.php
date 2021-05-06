<x-admin-layout>
<x-slot name="header">
       <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Create Restaurant') }}
      </h2>
</x-slot>
@section('content')
 
@if ($errors->any())
	<div class="alert alert-danger">
		<strong>Whoops!</strong>
		There were some problems with your input. <br><br>
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
            @endforeach
		</ul>
	</div>
@endif
<form action="{{ route('store.store') }}" method="post">
	@csrf
	<div class="row">

    <div class="col-md-12">
			<div class="form-group">
				<strong>UserID:</strong>
				<input type="text" name="userID" class="form-control" placeholder="Enter user id">
			</div>
		</div>


		<div class="col-md-12">
			<div class="form-group">
				<strong>Name:</strong>
				<input type="text" name="name" class="form-control my-2 md-12" placeholder="Enter Name">
			</div>
		</div>

		<div class="col-md-12">
			<div class="form-group">
				<strong>Description:</strong>
				<input type="text" name="body" class="form-control my-2" placeholder="Enter Description">
			</div>
		</div>


		<div class="col-md-12">
			<div class="form-group">
				<strong>Location:</strong>
				<input type="text" name="location" class="form-control my-2" placeholder="Enter Location">
			</div>
		</div>
      
		<div class="col-md-12">
			<div class="form-group">
				<strong>Rating:</strong>
				<input type="text" name="rating" class="form-control" placeholder="Enter rating">
			</div>
		</div> 
        
        <div class="col-md-12">
	        <button type="sumbit" class="btn btn-primary my-3">Submit</button>
			<a href="{{ route('adminDashboard')}}" class="btn btn-danger my-3 ">Cancel</a>
        </div>
		

	</div>


    @endsection
</x-admin-layout>