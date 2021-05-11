<x-app-layout>
<x-slot name="header">
  <div class="flex">
  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-zoom-in" viewBox="0 0 19 16">
  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
  <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
  <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
</svg>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Search') }}
        </h2>
        
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
    <!--Tailwind Custom Forms - use to standardise form fields - https://github.com/tailwindcss/custom-forms-->

    <Style>

@import url("https://rsms.me/inter/inter.css");
      html {
        font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI",
          Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif,
          "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
          "Noto Color Emoji";
      }
              h1{
                text-align:center;
                padding:20px
              }
              h5{
                text-align:center;
              }
              .box{
                  width: 100%;
                  text-align:center;
              }
              .button {
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
              }
              .button1 {background-color: #f76540;} 
              #myInput {
                background-image: url('/css/searchicon.png');
                background-position: 10px 12px;
                background-repeat: no-repeat;
                width: 30%;
                font-size: 16px;
                padding: 12px 20px 12px 40px;
                border: 1px solid #ddd;
                margin-bottom: 12px;
                }
              #myUL li a:hover:not(.header) {
                background-color: #eee;
              }


            
            </Style>
    </head>
    <section class="gradient">
        <body class="leading-relaxed tracking-wide flex flex-col">
        

            <div>
                <h1 style="font-family:verdana;" >Join for reviews</h2>
                <h5 style="font-family:verdana;" >เว็บสำหรับการรีวิวอาหารเเละร้าน เพื่อทำให้พึงพอใจในการเลือกร้านค้า
                  เเละทำให้มีความสุชในการรับประทานอาหาร</h5>
            </div>
            <form action="searchRes" type="get" >
              <div class="box" >
              
                <input  name="query" type="text" id="myInput" placeholder="Search.." title="Type in a name">
                <button class="button button1" type="submit">Seacrh</button>
              </div>
              <div class="progress-bar green"></div>
            </form>

        </body>

        </section>
</x-app-layout>

