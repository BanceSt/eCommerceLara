<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nouveau produit</title>
</head>
<body>
    <form action="{{ route("add_product") }}" method="POST">
    @csrf <!-- {{ csrf_field() }} -->
    <input type="text" name="name" id="" placeholder="Name product" required>
    <input type="number" name="price" step="0.01" id="" placeholder="Price" required>
    <textarea name="description" id="" cols="30" rows="10" placeholder="Description" required></textarea>
    <input type="submit" value="Ajouter">
    </form>
</body>
</html>
