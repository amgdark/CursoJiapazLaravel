<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hola</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        h1{
            font-size: 30px;
            color:blue;
        }
    </style>
</head>
<body>
    <h1>Hola {{$mensaje['nombre']}} </h1>
    <p>Tu correo es: {{$mensaje['email']}}</p>
    <p>Mensaje: {{$mensaje['mensaje']}}</p>
</body>
</html>
