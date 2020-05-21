
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
<h1>Calculator</h1>
<form action="" method="POST">

    <p>
        Mô tả sản phẩm
        <input type="text" name="name" value="{{$name}}">
    </p>
    <p>
        Giá sản phẩm
        <input type="number" name="price" value="{{$price}}" >
    </p>
    <p>
        chiết khấu
        <input type="number" name="percent" value="{{$percent}}" >
    </p>
    <p>
        <p>Ket qua :</p> {{$discount}}
    </p>
</form>
</body>
</html>


