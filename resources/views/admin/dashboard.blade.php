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
			<th class="py-3 px-6 text-center">Description</th>
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
  <button class="modal-open bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full">Create New Restaurant</button>
  
  <!--Modal-->
  <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
    
    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
      
      <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
          <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
        </svg>
        <span class="text-sm">(Esc)</span>
      </div>

      <!-- Add margin if you want to see some of the overlay behind the modal-->
      <div class="modal-content py-4 text-left px-6">
        <!--Title-->
        <div class="flex justify-between items-center pb-3">
          <p class="text-2xl font-bold">Create Restaurant</p>
          <div class="modal-close cursor-pointer z-50">
            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
          </div>
        </div>

        <!--Body-->
        
 
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


    

        <!--Footer-->
        
        
      </div>
    </div>
  </div>

  <script>
    var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
      openmodal[i].addEventListener('click', function(event){
    	event.preventDefault()
    	toggleModal()
      })
    }
    
    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)
    
    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
      closemodal[i].addEventListener('click', toggleModal)
    }
    
    document.onkeydown = function(evt) {
      evt = evt || window.event
      var isEscape = false
      if ("key" in evt) {
    	isEscape = (evt.key === "Escape" || evt.key === "Esc")
      } else {
    	isEscape = (evt.keyCode === 27)
      }
      if (isEscape && document.body.classList.contains('modal-active')) {
    	toggleModal()
      }
    };
    
    
    function toggleModal () {
      const body = document.querySelector('body')
      const modal = document.querySelector('.modal')
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }
    
     
  </script>
  
  {!! $data->links() !!}
  @endsection
 
</x-admin-layout>
