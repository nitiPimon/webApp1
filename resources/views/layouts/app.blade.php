<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <style>
                        @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

                fieldset, label { margin: 0; padding: 0; }
                body{ margin: 20px; }
                h1 { font-size: 1.5em; margin: 10px; }

                /****** Style Star Rating Widget *****/

                .rating { 
                border: none;
                float: left;
                }

                .rating > input { display: none; } 
                .rating > label:before { 
                margin: 5px;
                font-size: 1.25em;
                font-family: FontAwesome;
                display: inline-block;
                content: "\f005";
                }

                .rating > .half:before { 
                content: "\f089";
                position: absolute;
                }

                .rating > label { 
                color: #ddd; 
                float: right; 
                }

                /***** CSS Magic to Highlight Stars on Hover *****/

                            .rating > input:checked ~ label, /* show gold star when clicked */
                            .rating:not(:checked) > label:hover, /* hover current star */
                            .rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

                            .rating > input:checked + label:hover, /* hover current star when changing rating */
                            .rating > input:checked ~ label:hover,
                            .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
                            .rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 

                            .gradient {
                                    background-image: linear-gradient(-225deg, #cbbacc 0%, #2580b3 100%);
        </style>
        
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
