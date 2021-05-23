<x-app-layout>
    <x-slot name="header">
    <div class="flex">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Search restaurant') }}
        </h2>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-zoom-in" viewBox="0 0 19 16" transform="translate(10,1)">
  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
  <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
  <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
</svg>
        </div>
    </x-slot>
    <!DOCTYPE html>
      <head>
        <style>

                            .c-card {
                            img {    
                              transition: transform .3s ease-in-out; 
                            }
                            
                            &:hover {
                              img {
                                transform: scale(1.05)
                              }
                            }
                          }
        </style>
      </head>
      <body class="antialiased bg-gray-200 text-gray-900 font-sans p-6">
  <div class=" container mx-auto">
  
    <div class="flex flex-wrap -mx-4">
    @foreach($searchRestaurant as $restaurant)
      <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-4">
        <a href="restaurant/{{$restaurant->id}}" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
        
        <div class="relative pb-48 overflow-hidden">
          <img class="absolute inset-0 h-full w-full object-cover" src="{{$restaurant->image}}" alt="">
        </div>
        <div class="p-4">
          <span class="inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">BRAND NAME
          </span>
          <h2 class="mt-2 mb-2  font-bold">{{$restaurant->name}}</h2>
          <p class="text-sm">{{$restaurant->body}}</p>
          <div class="mt-3 flex items-center">
            
            <span class="text-sm font-semibold">Review</span>&nbsp;<span class="font-bold text-xl">{{count($restaurant->reviews)}}</span>&nbsp;<span class="text-sm font-semibold"></span>
          </div>
        </div>
        <div class="p-4 border-t border-b text-xs text-gray-700">
          <span class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
</svg>Time: {{$restaurant->timeOC}}</span>        
        </div>
        <div class="p-4 flex items-center text-sm text-gray-600">
        @for ($i = 0; $i < $restaurant->rating; $i++)
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                </svg>
            @endfor
            @for ($i = $restaurant->rating; $i < 5; $i++)
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                </svg>
            @endfor
        </div>
      </a>
      </div>
      @endforeach
    </div>
   
  </div>
 
</body>
     
</x-app-layout>
