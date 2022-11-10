<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<!--crear un form para crear un tablespace--->
    <form action="{{ url('tablespaces/createTablespace') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nombre del tablespace">
        <button type="submit">Crear</button>
        @METHOD('POST')
    </form>
    
    <br>
<!--crear un form para crear un tablespace--->
|
</body>
</html>