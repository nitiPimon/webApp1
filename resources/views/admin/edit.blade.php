<x-admin-layout>
<x-slot name="header">
       <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Edit Restaurant') }}
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

<form action="{{ route('store.update', $data->id) }}" method="post">
	@csrf
    @method('PUT')
	<div class="row">
    <div class="col-md-12">
			<div class="form-group">
				<strong>UserID:</strong>
				<input type="text" name="userID" class="form-control"  placeholder="Enter user id" value="{{ $data->userID }}">
			</div>
		</div>


		<div class="col-md-12">
			<div class="form-group">
				<strong>Name:</strong>
				<input type="text" name="name" class="form-control my-2 md-12" value="{{ $data->name }}"  placeholder="Enter Name">
			</div>
		</div>

		<div class="col-md-12">
			<div class="form-group">
				<strong>Body:</strong>
				<input type="text" name="body" class="form-control my-2" value="{{$data->body}}"  placeholder="Enter body">
			</div>
		</div>


		<div class="col-md-12">
			<div class="form-group">
				<strong>Location:</strong>
				<input type="text" name="location" class="form-control my-2" value="{{$data->location}}"  placeholder="Enter Location">
			</div>
		</div>
      
		<div class="col-md-12">
			<div class="form-group">
				<strong>Rating:</strong>
				<input type="text" name="rating" class="form-control" value="{{$data->rating}}"  placeholder="Enter rating">
			</div>
		</div> 
        
        <div class="col-md-12">
	        <button type="sumbit" class="btn btn-primary my-3">Update</button>
			<a href="{{ route('adminDashboard')}}" class="btn btn-danger my-3">Cancel</a>
        </div>

	</div>


@endsection

</x-admin-layout>