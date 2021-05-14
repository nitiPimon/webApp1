<x-app-layout>
    <x-slot name="header">
    <div class="flex">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
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
          .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 8px 64px;
            border-radius: 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
          }
          .button1 {
            background-color: white;
            color: black;
            border: 2px solid #555555;
          }

          .button1:hover {
            background-color: #555555;
            color: white;
          }
        </style>
      </head>
      <body>
        <div class="container flex flex-wrap pt-4 pb-10 m-auto mt-6 md:mt-15 lg:px-12 xl:px-16">
          <div class="w-full px-0 lg:px-4">
            <div class="flex flex-wrap items-center justify-center py-4 pt-0">                 
              @foreach($searchRestaurant as $restaurant)
                <div class="w-full h-80 p-4 md:w-1/2 lg:w-1/4 plan-card">
                  <label class="flex flex-col rounded-lg shadow-lg group relative cursor-pointer hover:shadow-2xl">
                    <div class="w-full h-40 rounded-t-lg">
                    
                      <img class="object-cover w-full h-full" src= "{{$restaurant->image}}" alt="image">

                    </div>
                    <div class="flex flex-col items-center justify-center w-full h-full py-6 rounded-b-lg bg-black">
                      <p class="text-xl text-white">
                        {{$restaurant->name}}
                      </p>
                      <p class="text-xl text-white">
                        {{$restaurant->rating}}/5
                      </p>
                      <form action="restaurant/{{$restaurant->id}}" method="get"  >
                        <button class="button button1">
                          Choose
                        </button>
                        </form>
                    </div>                
                  </label>
                </div>    
              @endforeach
            </div>          
          </div>
        </div>
      </body>
</x-app-layout>
