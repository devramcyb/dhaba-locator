<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dhaba Positions</title>
    @vite(['resources/js/app.js','resources/css/app.css'])

</head>
<body class="bg-black text-white font-hanken-grotesk">
<div class="px-10">
    <nav class="flex justify-between items-center py-4 border-b border-b-white/10" >
        <a href="/">
            <img src="{{Vite::asset('resources/image/img.png')}}" alt="">
        </a>
        <div class="space-x-6 font-bold">
            <a href="/dhaba">Dhabas</a>
            <a href="/Dishes">Dishes</a>
            <a href="/stayin">Stay In</a>
            <a href="/restros">Restaurants</a>
        </div>

        <div>
            <a href="#">post a Dhaba</a>
        </div>
    </nav>
    <main class="mt-10 max-w-[986px] mx-auto">{{$slot}}</main>
</div>
</body>
</html>
