<x-admin-layout>
  <x-slot name="header">
  <div class="flex">
       <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('All Comment') }}
      </h2>
	  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chat-left-text-fill" viewBox="0 0 16 16">
  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
</svg>
	</div>  
  </x-slot>
  @section('content')
	<div class="row mt-5">
		<div class="col-md-12">
			<label for="findMe">Field for search</label>
			<input id="findMe" type="search" class="form-control" placeholder="Search comment here.." onkeyup="findMe()">
		</div>
	</div>


	<table class="table" id="table">
	<thead class="table-dark">
		<tr>
			<th class="py-3 px-6 text-center">No.</th>
			<th class="py-3 px-6 text-center">userID</th>
			<th class="py-3 px-6 text-center">restaurantID</th>
			<th class="py-3 px-6 text-center">Comment</th>
			<th class="py-3 px-6 text-center">Crate At</th>
			<th width="280px" class="py-3 px-6 text-center">Action</th>
		</tr>
		</thead>

  @foreach ($data as $key => $value)
	<tr>
		<td class="py-3 px-6 text-center">{{ ++$i }}</td>
		<td class="py-3 px-6 text-center">{{ $value->userID }}</td>	
		<td class="py-3 px-6 text-center">{{ $value->restaurantID }}</td>
		<td class="py-3 px-6 text-center">{{ $value->reviews }}</td>
		<td class="py-3 px-6 text-center">{{ $value->created_at }}</td>
		

    
    
	<td class="py-3 px-6 text-center">
										@csrf
										@method('DELETE')
                                        <div class="w-6 mr-5 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 23 24" stroke="currentColor">
												<a xlink:href="{{ route('deleteComment', $value->id) }}">
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
