<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
<h1>Calculator</h1>
<form action="/calculator" method="POST">
    @csrf
    <p>
        <input type="text" name="name" placeholder="Mo ta san pham">
    </p>
    <p>
        <input type="number" name="price" placeholder="Gia san pham">
    </p>
    <p>
        <input type="number" name="percent" placeholder="Gia chiet khau">
    </p>
    <p>
        <button type="submit">submit</button>
    </p>
</form>
</body>
</html>

