<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>upmeal</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="css/app.css">

    </head>
    <body>
        <div class="container px-4 py-20 text-center">
            <h1 class="text-4xl py-4">upmeal</h1>
            <p class="py-10">An intelligent meal recommender and sharing application</p>
            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded" href="{{ route('home') }}" role="button">Get started</a>
        </div>
    </body>
</html>
