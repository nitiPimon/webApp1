<x-admin-layout>
  <x-slot name="header">
  <div class="flex">
       <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Manage User') }}
      </h2>
	  <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16" transform="translate(10,1)">
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z"/>
</svg>
	  </div>
  </x-slot>
  @section('content')
	<div class="row mt-5">
		<div class="col-md-12">
		</div>
	</div>
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			{{ $message }}
		</div>
	@endif

	<table class="table">
	<thead class="table-dark">
		<tr>
			
			<th class="py-3 px-6 text-center">User ID</th>
			<th class="py-3 px-6 text-center">Username</th>
			<th class="py-3 px-6 text-center">Email</th>
			<th class="py-3 px-6 text-center">Role</th>
            <th class="py-3 px-6 text-center">CreateAt</th>
			<th width="280px" class="py-3 px-6 text-center">Action</th>
		</tr>
		</thead>

  @foreach ($data as $key => $value)
	<tr>
		
		<td class="py-3 px-6 text-center">{{ $value->id }}</td>
		<td class="py-3 px-6 text-center">{{ $value->name }}</td>	
		<td class="py-3 px-6 text-center">{{ $value->email }}</td>
		<td class="py-3 px-6 text-center">{{ $value->role->utype }}</td>
        <td class="py-3 px-6 text-center">{{ $value->created_at }}</td>

    
    
		<td class="py-3 px-6 text-center">
			@csrf
			@method('DELETE')
            <div class="w-6 mr-5 transform hover:text-purple-500 hover:scale-110">
                                         
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-x-fill" viewBox="0 0 16 16" transform="translate(126,1)" >
					<a xlink:href="{{ route('deleteUser', $value->id) }}" dominant-baseline="middle">
  					<path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
											  
				</svg>
				</a>
											
            </div>
        	
									
        </td>
	<tr>
  @endforeach
  </table>
 
  
  {!! $data->links() !!}
  @endsection
 
</x-admin-layout>
