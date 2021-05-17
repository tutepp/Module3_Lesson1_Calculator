<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hoa don cua ban</title>
</head>
<body>
<h3>Hoa don cua ban</h3>
<form action="/bill_final" method="post">
    @csrf
    <p>
      <input type = "text" name="productDescription" placeholder="Mo ta san pham">
    </p>
    <p>
        <input type = "text" name="listPrice" placeholder="Gia san pham">
    </p>
    <p>
        <input type = "text" name="discount" placeholder="Giam gia %">
    </p>
    <button>Tinh tien</button>
</form>

</body>
</html>
