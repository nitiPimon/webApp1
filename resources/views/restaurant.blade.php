<x-app-layout>
    <x-slot name="header">
    <div class="flex">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Restaurant') }}
        </h2>
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="21" height="21" viewBox="0 0 45.001 45.001" style="enable-background:new 0 0 45.001 45.001;"
	 xml:space="preserve" transform="translate(10,1)">
        <g>
	<path d="M43.604,41.146c0.703,0.64,0.945,2.207,0.037,3.107c-0.902,0.909-2.472,0.668-3.109-0.034
		c-5.893-6.328-11.783-12.659-17.676-18.989l-0.67-0.715c-6.164,6.618-12.326,13.239-18.488,19.86
		c-0.635,0.701-2.202,0.943-3.104,0.034c-0.91-0.901-0.67-2.472,0.032-3.109c6.642-6.178,13.279-12.358,19.92-18.539
		c0,0-3.214-3.467-4.6-4.955c-3.243,2.325-8.049,1.441-10.938-2.126C1.901,11.917-0.779,5.187,1.815,2.431
		c2.759-2.596,9.485,0.09,13.248,3.194c3.566,2.892,4.455,7.691,2.125,10.936c1.67,1.556,3.34,3.108,5.012,4.663
		c-0.004,0.003-0.006,0.005-0.01,0.008c0,0,0.104,0.082,0.01-0.008c1.562-1.455,3.125-2.909,4.688-4.364
		c-1.32-2.254-0.443-5.415,1.701-7.219c2.459-2.061,11.57-9.883,11.815-9.635c0.244,0.243-6.146,6.281-10.415,10.563l0.712,0.711
		c4.557-3.994,10.99-9.984,11.238-9.74c0.244,0.245-5.946,6.48-10.076,10.905l0.707,0.705C36.988,9.017,43.225,2.826,43.467,3.069
		c0.245,0.246-5.746,6.68-9.74,11.237l0.707,0.706c4.28-4.269,10.315-10.659,10.562-10.417c0.247,0.246-9.618,11.805-9.632,11.822
		c-0.002-0.002,2.094-2.462-0.008-0.006c-2.006,2.347-5.002,3.057-7.217,1.705c-1.438,1.543-2.873,3.086-4.309,4.629
		C23.704,22.626,37.014,35.013,43.604,41.146z"/>
        </g>
    </svg>
    </div>
    </x-slot>
    
    <section class="text-gray-700 body-font overflow-hidden">
    <head>
    <style>


    </style>
    </head>
    <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
        <img style="height:750px;" alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200" src="{{$restaurant->image}}">
        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
            <h2 class="text-sm title-font text-gray-500 tracking-widest">BRAND NAME</h2>
            <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{$restaurant->name}}</h1><br>
            <div class="flex">
            <h1>Description</h1>
            </div>
            <h2 class="text-sm title-font text-gray-500 tracking-widest">{{$restaurant->body}}</h2><br>
            <div class="flex">
                <h1>Location</h1>
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16" transform="translate(-5,10)" >
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>
            </div>
            <h2 class="text-sm title-font text-gray-500 tracking-widest">{{$restaurant->location}}</h2 >
            <div class="flex mb-4">
            <span class="flex items-center">
            <h1>Rating</h1>
            @for ($i = 0; $i < round($restaurant->reviews->avg('rating'),2); $i++)
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                </svg>
            @endfor
            @for ($i = round($restaurant->reviews->avg('rating'),2); $i < 5; $i++)
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                </svg>
            @endfor
            <span class="text-sm font-semibold"></span>&nbsp;<span class="font-bold text-xl">{{round($restaurant->reviews->avg('rating'))}}</span>&nbsp;<span class="text-sm font-semibold"></span>
            
            
            </span>
            <div class="flex mt-5 items-center pb-5 border-b-2 border-gray-200 mb-5">
            
            </div>
            
            </div>
            <!-- comment user card -->
            <h1>Reviews</h1>
            @foreach($review as $value)
            <div class="rounded border shadow p-3 my-2">
            <div class="flex justify-between my-2">
            
            <div>
                <p class="leading-relaxed">{{$value->user->name}} : {{$value->reviews}} </p>
                
                <div class="flex">	
                @for ($i = 0; $i < $value->rating; $i++)
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                </svg>
            @endfor
            @for ($i = $value->rating; $i < 5; $i++)
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                </svg>
            @endfor
                </div>
                <p class="leading-relaxed">{{$value->created_at}} </p>	
                						
            </div>
            </div>
            </div>
            @endforeach
          
            {{ $review->links() }}
           
            <!-- end comment card -->
            <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
            </div>
        
            <h4>Your review</h4><br>
            
            <form action="{{ route('storeComment.store') }}" method="post">
            @csrf
            <div class="flex">
                <textarea name='reviews' id='reviews' class="resize border rounded-md" require></textarea>
                <input name='restaurantID' id='restaurantID' type='hidden' value='{{$restaurant->id}}' >
                <button class=" text-white bg-red-400 border-0 py-3 px-5  bg-red-500 hover:bg-red-700  rounded" id="butsave" name="btnComment">Comment</button>
            
            </div>
            <div class="rate">
            <fieldset class="rating">
                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
            </div>
            </form>
        </div>
    </div>
</div>


    
    </section>
</x-app-layout>