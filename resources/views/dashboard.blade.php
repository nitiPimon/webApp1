<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

  <div class="container flex flex-wrap pt-4 pb-10 m-auto mt-6 md:mt-15 lg:px-12 xl:px-16">
    <div class="w-full px-0 lg:px-4">
      <div class="flex flex-wrap items-center justify-center py-4 pt-0">
        <div class="w-full p-4 md:w-1/2 lg:w-1/4 plan-card">
          <label class="flex flex-col rounded-lg shadow-lg group relative cursor-pointer hover:shadow-2xl">
            <div class="w-full rounded-t-lg">
            
              <img src="/image/1.jpg" alt="panda">

            </div>
            <div class="flex flex-col items-center justify-center w-full h-full py-6 rounded-b-lg bg-blue-500">
              <p class="text-xl text-white">
                1 month
              </p>
              <button class="w-5/6 py-2 mt-2 font-semibold text-center uppercase bg-white border border-transparent rounded text-blue-500">
                Get Started
              </button>
            </div>
          </label>
        </div>

        <div class="w-full p-4 md:w-1/2 lg:w-1/4">
          <label class="flex flex-col rounded-lg shadow-lg relative cursor-pointer hover:shadow-2xl">
            <div class="w-full rounded-t-lg">
              
              <img src="/image/1.jpg" alt="panda">

            </div>
            <div
              class="flex flex-col items-center justify-center w-full h-full py-6 rounded-b-lg bg-blue-700"
            >
              <p class="text-xl text-white">
                3 months
              </p>
              <button class="w-5/6 py-2 mt-2 font-semibold text-center uppercase bg-white border border-transparent rounded text-blue-500">
                Save 15%
              </button>
            </div>
          </label>
        </div>

        <div class="w-full p-4 md:w-1/2 lg:w-1/4 plan-card">
          <label class="flex flex-col rounded-lg shadow-lg group card-group relative hover:bg-jblue-secondary cursor-pointer hover:shadow-2xl">
            <div class="w-full rounded-t-lg card-section-1">
              
              <img src="/image/1.jpg" alt="panda">

            </div>
            <div
              class="flex flex-col items-center justify-center w-full h-full py-6 rounded-b-lg bg-blue-500"
            >
              <p class="text-xl text-white">
                6 months
              </p>
              <button class="w-5/6 py-2 mt-2 font-semibold text-center uppercase bg-white border border-transparent rounded text-blue-500">
                Save 25%
              </button>
            </div>
          </label>
        </div>

        <div class="w-full p-4 md:w-1/2 lg:w-1/4 plan-card">
          <label class="flex flex-col rounded-lg shadow-lg group relative cursor-pointer hover:shadow-2xl">
            <div class="w-full rounded-t-lg">
            
              <img src="/image/1.jpg" alt="panda">

            </div>
            <div class="flex flex-col items-center justify-center w-full h-full py-6 rounded-b-lg bg-blue-500">
              <p class="text-xl text-white">
                1 month
              </p>
              <button class="w-5/6 py-2 mt-2 font-semibold text-center uppercase bg-white border border-transparent rounded text-blue-500">
                Get Started
              </button>
            </div>
          </label>
        </div>

             
      </div>
    </div>
  </div>
</x-app-layout>
