<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
     
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  
</head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')
           

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
            <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-3 gap-6 mx-auto">
                <div class="flex place-content-start">
               
          <nav class="px-2 space-y-1">
          
            <a href="/categories" class="bg-gray-100 text-black group flex items-center px-2 py-2 text-base font-medium rounded-md">
              categories
            </a>

            <a href="/products" class="text-gray-600 hover:bg-gray-50 hover:text-black group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/users -->
             
              Products
            </a>

            <a href="/variants" class="text-gray-600 hover:bg-gray-50 hover:text-black group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/folder -->
          
              Variants
            </a>

          </nav>
        
                </div>
            <div class=" col-span-2 bg-white overflow-hidden shadow-sm sm:rounded-lg">
               
            @include('message')
                {{ $slot }}
            </div>
            </div>
        </div>
    </div>

            </main>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script>
            $(document).ready(function() {
                $('.select2').select2();
            });

     
            $('#select3').select2({
        
                templateSelection: function (data, container) {
                   
                    $(data.element).attr('data-custom-attribute', data.customValue);
                    return data.text;
                }
                });

                $('#select3').find(':selected').data('custom-attribute');
        </script>
    </body>
</html>
