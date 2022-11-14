<!DOCTYPE html>
<html lang="en">
<head>
  <title>Auditoria</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
@include('sweetalert::alert')
<div class="row">
  <div class="col-xl-7 mx-auto">
  <br>
    <br>
		<h6 class="mb-0 text-uppercase">Auditoria del sistema</h6>
		<hr>
		<div class="card border-top border-0 border-4 border-danger">
			<div class="card-body p-5">
				<div class="card-title d-flex align-items-center">
					<div><i class="bx bxs-user me-1 font-22 text-danger"></i>
					</div>
					<h5 class="mb-0 text-danger">[ Oracle 21c ]</h5>
                     </div>
                        <div class="container mt-3">
                        <h2>Activar auditorias</h2>
                        <div class="card">
                            <div class="card-header">

                                <div class="row">
                                    <div class="col">
                                            <div class="container mt-3">
                                                <a href="http://localhost/vscode21c/dbalocal/public/auditoria/auditoriaConexiones" class="btn btn-primary">Conexion</a>
                                            </div>
                                        </div>
                                    <div class = "col">
                                            <div class="container mt-3">
                                                <a href="#" class="btn btn-primary">Sesiones</a>
                                            </div>
                                        </div>
                                    <div class = "col">
                                            <div class="container mt-3">
                                                <a href="#" class="btn btn-primary">Usuarios</a>
                                            </div>
                                        </div>
                                        <div class = "col">
                                            <div class="container mt-3">
                                            <a href="{{ url('/home') }}" class="btn btn-danger px-5">Volver</a>
                                            </div>
                                        </div>
                                </div>
                            </div>

                            <div class="card-body">  
                    
                            </div>
                    
                            <div class="card-footer">
                                
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

</body>
</html>
