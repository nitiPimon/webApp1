<x-app-layout>
    <x-slot name="header">
    <div class="flex">
    
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 19 16" transform="translate(10,1)">
  <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
</svg>
      <div>
    </x-slot>
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
              @foreach($restaurants as $restaurant)
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
