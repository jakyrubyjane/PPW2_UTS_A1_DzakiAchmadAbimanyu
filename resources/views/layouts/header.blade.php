<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemain</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<header class="text-white p-2 text-center " style="background-color: black;" >
        <h1 class="text-2xl font-bold">Data Pemain bola</h1>

    </header>

    <div>
        @yield ('content') 
    </div>
</body>
<div class="absolute bottom-0 w-full">
@include('layouts.footer')
</div>