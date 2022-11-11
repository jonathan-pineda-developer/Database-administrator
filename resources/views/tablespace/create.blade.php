<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Tablespace-create</title>
</head>
<body>

    Formulario de crear tablespace mediante get method
    <form action="{{ url('tablespace/createtable') }}" method="POST" class="was-validated">
        @csrf
       <!-- <div class="mb-3 mt-3">
            <label for ="nombre">Nombre del tablespace: </label>
            <input type="text" name="uname" id="uname" class="form-control" require>
            <div class="valid-feedback">Valid.</div>
             <div class="invalid-feedback">Please fill out this field.</div>
        </div>-->
        <div class="mb-3 mt-3">
      <label for="uname" class="form-label">Tablespace:</label>
      <input type="text" class="form-control" id="uname" placeholder="Nombre del tablespace" name="uname" required>
      <div class="valid-feedback">Formato correcto</div>
      <div class="invalid-feedback">Este espacio es requerido.</div>
    </div>
                <br>
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Crear</button>
                </div>
    </form>

</body>
</html>

