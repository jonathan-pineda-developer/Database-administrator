<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>tablespace-show</title>
</head>
<body>
    <!-- mostrar los tablespaces en una tabla-->

    <div class="container mt-3">
  <h2>Mostrar tablespaces</h2>
  <p>Tablespaces en registrados en la base de datos de Oracle 21c</p>            
  <table class="table table-hover table-secondary">
    <thead>
      <tr>
        <th value=""></th>
        <th value="">Tablespaces en el sistema</th>
        <th value=""></th>
      </tr>
    </thead>
    <tbody>
    @foreach($data as $table)
      <tr>
        <td value=""></td>
        <th scope="row">{{ $table->tablespace_name }}</th>
        <td value="">Oracle Tablespace</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<!--<div class="container mt-3">
<table class=" table table-bordered">
  <thead>
    <tr>
      <th scope="col-cen">Nombre del tablespace</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $table)
    <tr>
      <th scope="row">{{ $table->tablespace_name }}</th>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
--->
   
</body>
</html>