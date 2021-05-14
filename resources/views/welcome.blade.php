<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>GoodTest</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Font Awesome if you need it
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
  -->
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

    <style>
      @import url("https://rsms.me/inter/inter.css");
      html {
        font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI",
          Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif,
          "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
          "Noto Color Emoji";
      }

      .gradient {
        background-image: linear-gradient(-225deg, #cbbacc 0%, #2580b3 100%);
      }

      button,
      .gradient2 {
        background-color: #f39f86;
        background-image: linear-gradient(315deg, #f39f86 0%, #f9d976 74%);
      }

      

      /* Browser mockup code
 * Contribute: https://gist.github.com/jarthod/8719db9fef8deb937f4f
 * Live example: https://updown.io
 */

      .browser-mockup {
        border-top: 2em solid rgba(230, 230, 230, 0.7);
        position: relative;
        height: 60vh;
      }

      .browser-mockup:before {
        display: block;
        position: absolute;
        content: "";
        top: -1.25em;
        left: 1em;
        width: 0.5em;
        height: 0.5em;
        border-radius: 50%;
        background-color: #f44;
        box-shadow: 0 0 0 2px #f44, 1.5em 0 0 2px #9b3, 3em 0 0 2px #fb5;
      }

      .browser-mockup > * {
        display: block;
      }
      #top,#middle,#bottom{
      height: 700px;
      width: 800px;
    
}

    html {
      scroll-behavior: smooth;
    }

      

      /* Custom code for the demo */
    </style>
  </head>

  <body class="gradient leading-relaxed tracking-wide flex flex-col">
    <!--Nav-->
    <nav id="header" class="w-full z-30 top-0 text-white py-1 lg:py-6">
      <div
        class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-2 lg:py-6"
      >
        <div class="pl-4 flex items-center">
          <a
            class="text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
            href=""
          >
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill" viewBox="0 0 20 20">
            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
              <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
          </svg>
            GoodTest
          </a>
        </div>

        <div class="block lg:hidden pr-4">
          <button
            id="nav-toggle"
            class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-green-500 appearance-none focus:outline-none"
          >
            <svg
              class="fill-current h-3 w-3"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>

        <div
          class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 text-black p-4 lg:p-0 z-20"
          id="nav-content"
        >
          <ul class="list-reset lg:flex justify-end flex-1 items-center">
            <li class="mr-3">
              <a
                class="inline-block py-2 px-4 text-black font-bold no-underline"
                href="#middle"
                >วิธีการใช้งาน</a
              >
            </li>
            <li class="mr-3">
              <a href="{{ route('register') }}"
                class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                
                >Register</a
              >
            </li>
           
          </ul>
          <!-- <button
            id="navAction"
            class="mx-auto lg:mx-0 hover:underline text-gray-800 font-extrabold rounded mt-4 lg:mt-0 py-4 px-8 shadow opacity-75">
            Login
          </button> -->

          <a href="{{ route('login') }}" class="button gradient2 mx-auto lg:mx-0 hover:underline text-gray-800 font-extrabold rounded my-2 md:my-6 py-4 px-8 shadow-lg w-48">SIGN IN</a>
        
        </div>
      </div>
    </nav>

    <div class="container mx-auto h-screen">
      <div class="text-center px-3 lg:px-0">
        <h1
          class="my-4 text-2xl md:text-3xl lg:text-5xl font-black leading-tight"
        >
        Have fun with your favorite restaurant reviews.
        </h1>
        <p
          class="leading-normal text-gray-800 text-base md:text-xl lg:text-2xl mb-8"
        >
        Apply for membership and go to review the restaurant!
        </p>
        
        <!-- <button action="{{ route('register') }}" class="mx-auto lg:mx-0 hover:underline text-gray-800 font-extrabold rounded my-2 md:my-6 py-4 px-8 shadow-lg w-48">Sign Up</button> -->
        <a href="{{ route('register') }}" class="button gradient2 mx-auto lg:mx-0 hover:underline text-gray-800 font-extrabold rounded my-2 md:my-6 py-4 px-8 shadow-lg w-48">Sign up</a>
        <a
          href="#middle"
          class="inline-block mx-auto lg:mx-0 hover:underline bg-transparent text-gray-600 font-extrabold my-2 md:my-6 py-2 lg:py-4 px-8"
          >How to use this website?</a
        >
      </div>

      <div class="flex items-center w-full mx-auto content-end">
        <div class="browser-mockup flex flex-1 m-6 md:px-0 md:m-12 bg-white w-1/2 rounded shadow-xl">
        <img class="object-cover w-full h-full" src= "/image/3.jpg" alt="image">
        </div>
      </div>
    </div>

    <section class="bg-white border-b py-12 ">
      <div
        class="container mx-auto flex flex-wrap items-center justify-between pb-12"
      >
        <h2
          class="w-full my-2 text-xl font-black leading-tight text-center text-gray-800 lg:mt-8"
        >
          Our Customers / Featured in
        </h2>
        <div class="w-full mb-4">
          <div
            class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"
          ></div>
        </div>

        <div
          class="flex flex-1 flex-wrap max-w-4xl mx-auto items-center justify-between text-xl text-gray-500 font-bold opacity-75"
        >
          <span class="w-1/2 p-4 md:w-auto flex items-center"
            ><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-chat-right-text-fill" viewBox="0 0 16 16">
  <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM3.5 3h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1zm0 2.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1zm0 2.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1z"/>
</svg> :  Reviews</span
          >

          <span class="w-1/2 p-4 md:w-auto flex items-center"
            ><svg
              class="h-10 w-10 mr-4 fill-current text-gray-500 opacity-75"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
            >
              <path
                d="M15.75 8l-3.74-3.75a3.99 3.99 0 0 1 6.82-3.08A4 4 0 0 1 15.75 8zM1.85 15.3l9.2-9.19 2.83 2.83-9.2 9.2-2.82-2.84zm-1.4 2.83l2.11-2.12 1.42 1.42-2.12 2.12-1.42-1.42zM10 15l2-2v7h-2v-5z"
              /></svg>
            >Check Rating </span
          >

          <span class="w-1/2 p-4 md:w-auto flex items-center"
            ><svg
              class="h-10 w-10 mr-4 fill-current text-gray-500 opacity-75"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
            >
              <path
                d="M10 12a6 6 0 1 1 0-12 6 6 0 0 1 0 12zm0-3a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm4 2.75V20l-4-4-4 4v-8.25a6.97 6.97 0 0 0 8 0z"
              /></svg>
            >Top restaurant</span
          >

          <span class="w-1/2 p-4 md:w-auto flex items-center"
            ><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-shield-slash-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.093 3.093c-.465 4.275.885 7.46 2.513 9.589a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.32 11.32 0 0 0 1.733-1.525L1.093 3.093zm12.215 8.215L3.128 1.128A61.369 61.369 0 0 1 5.073.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.483 3.626-.332 6.491-1.551 8.616zm.338 3.046-13-13 .708-.708 13 13-.707.707z"/>
</svg>
            >Bugz 4 Life</span
          >
        </div>
      </div>
    </section>

    <section class="bg-gray-100 border-b py-8" id="test">
      <div class="container max-w-5xl mx-auto m-8" id="middle">
        <h2
          class="w-full my-2 text-5xl font-black leading-tight text-center text-gray-800"
        >
          How to use website
        </h2>
        <div class="w-full mb-4">
          <div
            class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"
          ></div>
        </div>

        <div class="flex flex-wrap">
          <div class="w-5/6 sm:w-1/2 p-6">
            <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
              First step
            </h3>
            <p class="text-gray-600 mb-8">
              register account next go to login and select restaurant of you need and comment reviews for restaurant.<br /><br />

              Images from:
              <a class="text-orange-500 underline" 
                >GoodTest</a
              >
            </p>
          </div>
          <div class="w-full sm:w-1/2 p-6">
          <img class="object-cover w-full h-full" src= "/image/5.jpg" alt="image">
          </div>
        </div>

        <div class="flex flex-wrap flex-col-reverse sm:flex-row">
          <div class="w-full sm:w-1/2 p-8 mt-6">
          <img class="object-cover w-full h-full" src= "/image/7.png" alt="image">
          </div>
          <div class="w-full sm:w-1/2 p-6 mt-6">
            <div class="align-middle">
              <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                Second step
              </h3>
              <p class="text-gray-600 mb-8">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                at ipsum eu nunc commodo posuere et sit amet ligula.<br /><br />
                Go to:
                <a class="text-orange-500 underline" href="{{ route('register') }}"
                  >Sign up</a
                >
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

  

   

    

    <script>
      /*Toggle dropdown list*/
      /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

      var navMenuDiv = document.getElementById("nav-content");
      var navMenu = document.getElementById("nav-toggle");

      document.onclick = check;
      function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
          // click NOT on the menu
          if (checkParent(target, navMenu)) {
            // click on the link
            if (navMenuDiv.classList.contains("hidden")) {
              navMenuDiv.classList.remove("hidden");
            } else {
              navMenuDiv.classList.add("hidden");
            }
          } else {
            // click both outside link and outside menu, hide menu
            navMenuDiv.classList.add("hidden");
          }
        }
      }
      function checkParent(t, elm) {
        while (t.parentNode) {
          if (t == elm) {
            return true;
          }
          t = t.parentNode;
        }
        return false;
      }
    </script>
  </body>
</html>