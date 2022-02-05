<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/main.css">

</head>
{{-- 
<body class="bg-gradient-to-r from-blue-400 via-purple-500 to-red-400">

</body> --}}

<body class="">
    <div class="container mx-auto ">
        {{--  --}}

        @yield('content')

        {{-- <footer class="footer bg-white relative border-b-2 border-blue-700">
            <div class="container mx-auto px-6">
                <div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center">
            <div class="sm:w-2/3 text-center py-6">
                <p class="text-sm text-blue-700 font-bold mb-2">
                    © 2021 by PissaHouse
                </p>
            </div>
        </div>
            </div>
        </footer> --}}
    </div>
</body>

</html>