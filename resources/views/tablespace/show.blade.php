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
    @section('content')
    <ul>
        @forelse ($data as $tablespace)
        <li> {{ $tablespace->tablespace_name }}</li>
        @empty
        <p>No users</p>
        @endforelse
    </ul>
   
    @endsection

   
</body>
</html>