<x-app-layout>
<x-slot name="header">
  <div class="flex">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Search') }}
        </h2>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-zoom-in" viewBox="0 0 19 16" transform="translate(10,1)">
  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
  <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
  <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
</svg>
        
        <div>
    </x-slot>
    <!DOCTYPE html>
    <head>

    <link
      href="https://unpkg.com/tailwindcss/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <!--Replace with your tailwind.css once created-->
    <link
      href="https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!--Tailwind Custom Forms - use to standardise form fields - https://github.com/tailwindcss/custom-forms-->

    <Style>
	* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}



html,
body {
  font-family: 'Fira Code', monospace;
  width: 100%;
  height: 100%;
  font-size: 16px;
}

main {
  display: flex;
  height: 100%;
  align-items: center;
  justify-content: center;
}

p {
  cursor: pointer;
  position: relative;
  display: inline-block;
  font-size: 3rem;
  background: linear-gradient(to bottom, #000, #000 60%, #fff 60%, #fff 100%);
  background-clip: text;
  -webkit-background-clip: text;
  color: transparent;
  background-repeat: no-repeat;
  transition: background 0.2s ease-out;
  white-space: nowrap;
}

span {
  position: relative;
}

span:before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  height: 15px;
  background: #000;
  bottom: 9px;
  transition: all 0.2s ease-out;
}

p:hover {
  background-position: 0 11px;
}

span:hover:before {
  transform: translateY(10px)
}

* {
	border: 0;
	box-sizing: border-box;
	margin: 0;
	padding: 0;
}

 button, input {
	font: 1em Hind, sans-serif;
	line-height: 1.5em;
}
 input {
	color: #171717;
}
 .search-bar {
	display: flex;
}

.search-bar input,
.search-btn, 
.search-btn:before, 
.search-btn:after {
	transition: all 0.25s ease-out;
}
.search-bar input,
.search-btn {
	width: 3em;
	height: 3em;
}
.search-bar input:invalid:not(:focus),
.search-btn {
	cursor: pointer;
}
.search-bar,
.search-bar input:focus,
.search-bar input:valid  {
	width: 100%;
}
.search-bar input:focus,
.search-bar input:not(:focus) + .search-btn:focus {
	outline: transparent;
}
.search-bar {
	margin: auto;
	padding: 1.5em;
	justify-content: center;
	max-width: 30em;
}
.search-bar input {
	background: transparent;
	border-radius: 1.5em;
	box-shadow: 0 0 0 0.4em #171717 inset;
	padding: 0.75em;
	transform: translate(0.5em,0.5em) scale(0.5);
	transform-origin: 100% 0;
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
}
.search-bar input::-webkit-search-decoration {
	-webkit-appearance: none;
}
.search-bar input:focus,
.search-bar input:valid {
	background: #fff;
	border-radius: 0.375em 0 0 0.375em;
	box-shadow: 0 0 0 0.1em #d9d9d9 inset;
	transform: scale(1);
}
.search-btn {
	background: #171717;
	border-radius: 0 0.75em 0.75em 0 / 0 1.5em 1.5em 0;
	padding: 0.75em;
	position: relative;
	transform: translate(0.25em,0.25em) rotate(45deg) scale(0.25,0.125);
	transform-origin: 0 50%;
}
.search-btn:before, 
.search-btn:after {
	content: "";
	display: block;
	opacity: 0;
	position: absolute;
}
.search-btn:before {
	border-radius: 50%;
	box-shadow: 0 0 0 0.2em #f1f1f1 inset;
	top: 0.75em;
	left: 0.75em;
	width: 1.2em;
	height: 1.2em;
}
.search-btn:after {
	background: #f1f1f1;
	border-radius: 0 0.25em 0.25em 0;
	top: 51%;
	left: 51%;
	width: 0.75em;
	height: 0.25em;
	transform: translate(0.2em,0) rotate(45deg);
	transform-origin: 0 50%;
}
.search-btn span {
	display: inline-block;
	overflow: hidden;
	width: 1px;
	height: 1px;
}

/* Active state */
.search-bar input:focus + .search-btn,
.search-bar input:valid + .search-btn {
	background: #2762f3;
	border-radius: 0 0.375em 0.375em 0;
	transform: scale(1);
}
.search-bar input:focus + .search-btn:before, 
.search-bar input:focus + .search-btn:after,
.search-bar input:valid + .search-btn:before, 
.search-bar input:valid + .search-btn:after {
	opacity: 1;
}
.search-bar input:focus + .search-btn:hover,
.search-bar input:valid + .search-btn:hover,
.search-bar input:valid:not(:focus) + .search-btn:focus {
	background: #0c48db;
}
.search-bar input:focus + .search-btn:active,
.search-bar input:valid + .search-btn:active {
	transform: translateY(1px);
}

@media screen and (prefers-color-scheme: dark) {
	 input {
		color: #f1f1f1;
	}
  
	.search-bar input {
		box-shadow: 0 0 0 0.4em #f1f1f1 inset;
	}
	.search-bar input:focus,
	.search-bar input:valid {
		background: #3d3d3d;
		box-shadow: 0 0 0 0.1em #3d3d3d inset;
	}
	.search-btn {
		background: #f1f1f1;
	}
}

            
            </Style>
    </head>
    <section>
   
    
        <form action="searchRes" class="search-bar">
		<input type="search" name="query" pattern=".*\S.*" required>
		<button class="search-btn" type="submit">
		<span>Search</span>
		</button>
		</form>
		<main>
  <span class="text-center"><p>New Restaurant</p></span>
</main><br>

		
		<div class="container flex flex-wrap items-center justify-center py-3 pt-0">
		
  			<div class="row">
			  @foreach($data as $datas)
   				 <div class="flex col">
							<div class="card text-white bg-dark" style="width: 20rem;">
							<img class="card-img-top" src="{{$datas->image}}" alt="Card image cap">
							<div class="card-body">
				
								<h5 class="card-title ">{{$datas->name}}</h5><br>
								<div class="flex items-center">
            <p1 class="mr-2">Rating</p1>
            @for ($i = 0; $i < $datas->rating; $i++)
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                </svg>
            @endfor
            @for ($i = $datas->rating; $i < 5; $i++)
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                </svg>
            @endfor
            
            </div>
								<p1 class="card-text">{{$datas->body}}</p1><br>
			

							</div>
							</div>
							
   	 			</div>
					@endforeach
    				
    			</div>
  			</div>
			
		</div>
            

       

        </section>
</x-app-layout>

