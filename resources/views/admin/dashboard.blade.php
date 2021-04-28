<x-admin-layout>
  <x-slot name="header">
       <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard For admin') }}
      </h2>
  </x-slot>
  @section('content')
	<div class="row mt-5">
		<div class="col-md-12">
		<h2>CRUD Create Delete Edit Restaurant</h2>
		<a href="{{ route('adminCreate')}}" class="btn btn-success my-3">Create New Restaurant</a>
		</div>
	</div>
  @if ($message = Session::get('success'))
		<div class="alert alert-success">
			{{ $message }}
		</div>
	@endif

	<table class="table table-bordered">
		<tr>
			<th>No.</th>
			<th>Name</th>
			<th>Body</th>
			<th>Location</th>
      <th>Rating</th>
			<th width="280px">Action</th>
		</tr>
	

  @foreach ($data as $key => $value)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $value->name }}</td>	
		<td>{{ $value->body }}</td>
		<td>{{ $value->location }}</td>
    <td>{{ $value->rating }}</td>
    
		<td> 
			  <form action="{{ route('store.destroy', $value->id )}}" method="POST">
			  <a href="{{ route('store.edit', $value->id) }}" class="btn btn-primary">Edit</a>
			  @csrf
				@method('DELETE')
				<button type="submit" class="btn btn-danger">Delete</button>
			</form>
		</td>
	<tr>
  @endforeach
  </table>
  {!! $data->links() !!}
  @endsection
 
</x-admin-layout>
