<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <ul>
        @foreach ($products as $product)
        <li> <a href="{{ route('product', ['id' => $product->id]) }}"> 
            {{$product->name}} </a>  {{ " - " . $product->price . "€"}} 
            <button  onclick="window.location= '{{route('update_r_product', ['id' => $product->id]);}}'"> Edit </button>
        </li>
        @endforeach
    </ul>
    <button  onclick="window.location= '{{route('new_product');}}'"> Ajouter nouveau produit </button>
</body>
</html>