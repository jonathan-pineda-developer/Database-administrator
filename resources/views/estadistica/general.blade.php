<!DOCTYPE html>
<html lang="en">
<head>
  <title>Auditoria</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
#container {
  position: relative;
  width: 100%;
  overflow: hidden;
  padding-top: 56.25%; /* 16:9 Aspect Ratio */
}

.responsive-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 75%;
  border: none;
}
</style>
</head>
<body>

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
                                        <h2>Versión actual del sistema</h2>
                                            <div class="card">
                                                <div class="card-body">  
                                                    <div class="row">
                                                        <table class="table table-hover table-bordered table-striped">
                                                            <thead> 
                                                                <tr>
                                                                    <th value="">version oracle</th>
                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                 @foreach($data13 as $table)
                                                                 <tr>
                                                                    <th scope="row" class="text-lowercase" value="{{$table->value}}">{{ $table->value}}</th>
                                                          
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                         </table>
                                                    </div>
                                                </div> 
                                            </div>
                                    </div>
                        </div>
                    </div>
    </div>
</div>


<div class="row">
  <div class="col-xl-7 mx-auto">
    <br>
        <br>
		    <h6 class="mb-0 text-uppercase"></h6>
		            <div class="card border-top border-0 border-4 border-danger">
			            <div class="card-body p-5">
			            	<div class="card-title d-flex align-items-center">
				            	<div><i class="bx bxs-user me-1 font-22 text-danger"></i>
                                </div>
                            </div>
                                  <div class="container mt-3">
                                        <h2>Ubicacion del archivo spfile()</h2>
                                            <div class="card">
                                                <div class="card-body">  
                                                    <div class="row">
                                                        <table class="table table-hover table-bordered table-striped">
                                                            <thead> 
                                                                <tr>
                                                                    <th value="">Archivo spfile</th>
                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                 @foreach($data14 as $table)
                                                                 <tr>
                                                                    <th scope="row" class="text-lowercase" value="{{$table->value}}">{{ $table->value}}</th>
                                                          
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                         </table>
                                                    </div>
                                                </div> 
                                            </div>
                                    </div>
                        </div>
                    </div>
    </div>
</div>
<iframe src="http://localhost/vscode21c/dbalocal/public/ubicacion-ctl" width="100%" height="300" style="border:none;">
</iframe>
</body>
</html>
