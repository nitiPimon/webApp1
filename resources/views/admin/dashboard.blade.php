<x-admin-layout>
  <x-slot name="header">
       <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard For admin') }}
      </h2>
  </x-slot>
  @section('content')
	<div class="row mt-5">
		<div class="col-md-12">
		<a href="{{ route('adminCreate')}}" class="btn btn-dark my-3">Create New Restaurant</a>
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
			<th class="py-3 px-6 text-center">No.</th>
			<th class="py-3 px-6 text-center">Name</th>
			<th class="py-3 px-6 text-center">Body</th>
			<th class="py-3 px-6 text-center">Location</th>
      		<th class="py-3 px-6 text-center">Rating</th>
			<th width="280px" class="py-3 px-6 text-center">Action</th>
		</tr>
		</thead>

  @foreach ($data as $key => $value)
	<tr>
		<td class="py-3 px-6 text-center">{{ ++$i }}</td>
		<td class="py-3 px-6 text-center">{{ $value->name }}</td>	
		<td class="py-3 px-6 text-center">{{ $value->body }}</td>
		<td class="py-3 px-6 text-center">{{ $value->location }}</td>
    <td class="py-3 px-6 text-center">{{ $value->rating }}</td>
    
	<td class="py-3 px-6 text-center">
	
                                    <div class="flex item-center justify-center">
                                        <div class="w-6 mr-2 transform hover:text-purple-500 hover:scale-110" >
                                            <svg  xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke="currentColor" >
												<a xlink:href="{{ route('store.edit', $value->id) }}">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"  />
												</a>
                                            </svg>
                                        </div>
										@csrf
										@method('DELETE')
                                        <div class="w-6 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
												<a xlink:href="{{ route('adminDelete', $value->id) }}">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
												</a>
                                            </svg>
											
                                        </div>
										

                                    </div>
									
                                </td>
	<tr>
  @endforeach
  </table>

  
  {!! $data->links() !!}
  @endsection
 
</x-admin-layout>
