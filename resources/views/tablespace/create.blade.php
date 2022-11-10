<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablespace-create</title>
</head>
<body>
    Formulario de crear tablespace mediante get method
    <form action="{{ url('tablespace/createtable') }}" method="POST">
        @csrf
            <label for ="nombre">Nombre del tablespace: </label>
            <input type="text" name="name" id="name">
                <br>
            <input type="submit" value="createtable">
     
    </form>
</body>
</html>

