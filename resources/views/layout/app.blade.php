<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>@yield("title","Home")</title>
</head>
<body>
    <p class="text-green-500 text-4xl font-extrabold dark:text-white">
        {{config("app.name")}}
    </p>
    @yield("content")
</body>
</html>