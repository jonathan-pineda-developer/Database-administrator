<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver</title>
</head>
<body>
    <h1>Mostrar</h1>

    <select id = "dee" name = "dee">
        @foreach($data as $table)
            <option value="{{ $table->tablespace_name }}">{{ $table->tablespace_name }}</option>
        @endforeach
    </select>
    

   
</body>
</html>