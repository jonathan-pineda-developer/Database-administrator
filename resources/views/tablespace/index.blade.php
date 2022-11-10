<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{url('create-table/')}}"  method ="POST">
     @csrf
    <label for ="nombre">Nombre del tablespace: </label>
    <input type="text" name="name" id="name">
    <br>   
    <input type="submit" value="Enviar">
   @METHOD('POST')

   
</form>
</body>
</html>
