<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Usuario</title>
    
</head>
<body>
@include('sweetalert::alert')
<!--
    Formulario de crear tablespace mediante get method
    <form action="{{ url('tablespace/createtable') }}" method="POST" class="was-validated">
        @csrf
        <div class="mb-3 mt-3">
            <label for ="nombre">Nombre del tablespace: </label>
            <input type="text" name="uname" id="uname" class="form-control" require>
            <div class="valid-feedback">Valid.</div>
             <div class="invalid-feedback">Please fill out this field.</div>
        </div>
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
--->
<!--end breadcrumb-->
<br>
<br>
<div class="row">
	<div class="col-xl-7 mx-auto">
		<h6 class="mb-0 text-uppercase">Administración de Tablespaces - Usuarios - Crear</h6>
		<hr>
		<div class="card border-top border-0 border-4 border-danger">
			<div class="card-body p-5">
				<div class="card-title d-flex align-items-center">
					<div><i class="bx bxs-user me-1 font-22 text-danger"></i>
					</div>
					<h5 class="mb-0 text-danger">[ Oracle 21c ]</h5>
				</div>
				<hr>
				<form class="row g-3 was-validated"form action="{{ url('esquemas/createUser') }}" method="POST">
        @csrf
					<div class="col-md-6">
						<label for="uname" class="form-label">Nombre del Usuario</label>
						<div class="input-group"> <span class="input-group-text bg-transparent"><i class="bx bxs-user"></i></span>
							<input type="text" class="form-control " id="uname" placeholder="Nombre del tablespace" name="uname" required>
                               <div class="valid-feedback">Formato Válido!</div>
                               <div class="invalid-feedback">Debe de ingresar un nombre</div>
						</div>
					</div>
                      <div class="col-md-6">
						<label for="uname" class="form-label">Contraseña</label>
						<div class="input-group"> <span class="input-group-text bg-transparent"><i class="bx bxs-user"></i></span>
                       <input class="form-control" name="password" id="password" type="password" placeholder=" * * * *" aria-label="Disabled input example" required>
						</div>
					</div>
          <br>
          <br>
          <div class="d-grid gap-2 d-md-block">
          <button type="submit" class="btn btn-danger px-5">Crear</button>
					<a href="{{ url('/home') }}" class="btn btn-danger px-5">Volver</a>
					</div>
				</form>
			</div>
		</div>
</div>
<!--end row-->
</div>
<!--end row-->
  
<!---en una etiqueta Mostrar el response de laravel la creación del tablespace--->






</body>
</html>

