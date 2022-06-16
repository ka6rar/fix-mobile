<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Cairo', sans-serif;text-align: center;">
    <h3 style="color: rgb(0, 0, 0)">شكرا لك على الشراء </h3>
    <h4 style="color:green">تم الشحن بنجاح </h4>
    <p>
        <span>{{ $playerid }}</span> Player ID
        <br>
        <br>
         <span>{{ $deal }}</span> UC
        <br>
        <br>
         <span style="color: green;font-weight: bold"> {{ $price }}  </span> USD
         <br>
         <br>
         تسلسل المنتج
         <br>
         <span style="font-weight: bold">{{ $product_id }}</span>
        <br>
    </p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

</body>
</html>
