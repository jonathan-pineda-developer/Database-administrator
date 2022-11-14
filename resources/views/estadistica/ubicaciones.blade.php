
<!DOCTYPE html>
<html lang="en">
<head>
  <title>control</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
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
                                        <h2>Estadistica y control del sistema</h2>
                                            <div class="card">
                                                <div class="card-body">  
                                                    <div class="row">
                                                        <table class="table table-hover table-bordered table-striped">
                                                            <thead> 
                                                                <tr>
                                                                    <th value="">USER</th>
                                                                    <th value="">PARAMETRO</th>
                                                                    <th value="">PC</th>
                                                                    <th value="">PROGRAMA</th>
                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                 @foreach($data16 as $table)
                                                                 <tr>
                                                                    <th scope="row" class="text-lowercase" value="{{$table->usuario}}">{{ $table->usuario}}</th>
                                                                    <th scope="row" class="text-lowercase" value="{{$table->parametro}}">{{ $table->parametro}}</th>
                                                                    <th scope="row" class="text-lowercase" value="{{$table->maquina}}">{{ $table->maquina}}</th>
                                                                    <th scope="row" class="text-lowercase" value="{{$table->programa}}">{{ $table->programa}}</th>
                                                          
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
</body>
</html>