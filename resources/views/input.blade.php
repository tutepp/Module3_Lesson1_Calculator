<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Discount Calculator</title>
</head>
<body>
<form action="/display_discount" method="POST">
    @csrf
    <label for="">Product Description</label>
    <input type="text" name="product_description">

    <label for="">List Price</label>
    <input type="number" name="list_price">

    <label for="">Discount Percent</label>
    <input type="text" name="discount_percent">

    <button>Discount</button>
</form>
</body>
</html>
