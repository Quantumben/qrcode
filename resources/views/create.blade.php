<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Qrcode Dynamic</title>
</head>
<body>
<form action="{{ route('store')}}" method="post">
    @csrf
    <input type="text" name="btc" id="" placeholder="Input Your BTC Address Here">
    <input type="text" name="usdt" id="" placeholder="Input Your USDT Address Here">

    <input type="submit" value="Save">
</form>
</body>
</html>
