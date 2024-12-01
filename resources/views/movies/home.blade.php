<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<header class="bg-gray-800 text-white py-4 px-6 flex justify-between items-center">
    <div class="text-xl font-bold">Movies</div>
    <div class="flex gap-4">
        <button class="bg-gray-600 hover:bg-gray-500 text-white py-2 px-4 rounded">English</button>
        <button class="bg-gray-600 hover:bg-gray-500 text-white py-2 px-4 rounded">Українська</button>
    </div>
</header>

<main class="p-6">
    <div class="flex flex-wrap gap-6 justify-center">
        @foreach($movies as $movie)
            <div class="w-1/5 bg-white shadow-md rounded overflow-hidden">
                <img src="{{ asset('storage/img/' . $movie->poster) }}" alt="Movie Poster" class="w-full h-96 object-contain">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">{{$movie->title}}</h3>
                </div>
            </div>
        @endforeach
    </div>

    <div class="flex justify-center mt-8 gap-4">
        {{$movies->links()}}
    </div>
</main>

</body>
</html>
