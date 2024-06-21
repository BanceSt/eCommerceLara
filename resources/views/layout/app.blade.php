<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>@yield("title","Home")</title>
</head>
<body class="bg-blue-200">
    <p class="text-green-500 text-8xl mb-8 text-center font-extrabold">
        {{config("app.name")}}
    </p>
    @yield("content")
</body>
</html>