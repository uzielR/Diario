<!DOCTYPE html>
<html lang="en">
<head>
     
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> @yield('titulo') </title>

    @vite(['resources/js/app.js'])

    <style>
        body {
            background-image: url('https://images.unsplash.com/photo-1585862705417-671ae64f0eb7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8YmxhY2slMjBib29rc3xlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>

</head>

<body>

   
    
    @include('partials.navbar')

        <br>
        <br>

    @yield('contenido')


</body>

</html>