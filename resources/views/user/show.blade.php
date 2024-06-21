<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>halaman user {{$name}}</h1>
    @if ($name == 'admin')
    <h1>Status anda admin</h1>
    @else
    <h1>Status anda user</h1>
    @endif
    
</body>
</html>