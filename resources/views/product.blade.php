<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{$product->name . " - " . $product->id}} </title>
</head>
<body>
    <h1>{{$product->name}}</h1>
    <h2> {{$product->price}} € </h2>
    <p>
        {{$product->description}}
    </p>
</body>
</html>