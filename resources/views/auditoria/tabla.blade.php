<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Usuario</title>
</head>
<body>
<!--crear respaldo de una tabla de un schema-->

<div class="container">

    <div class="row">

        <div class="col-md-12">

            <div class="card">

                <div class="card-header">

                    <h3 class="card-title">Auditoria para una tabla</h3>

                </div>

                <div class="card-body">

                    <form action="auditoria/columnOfATableOfASchema" method="POST">

                        @csrf

                        <div class="form-group">

                            <label for="backuptable">Seleccione un esquema</label>

                            <select class="form-control" id="schemas" name="schemas">

                                @foreach($schemas as $schema)

                                    <option value="{{ $schema->schema_name }}">{{ $schema->schema_name }}</option>

                                @endforeach

                            </select>

                        </div>

                        <!-- segun el schema que se elija, se muestran las tablas de ese schema -->


                        <div class="form-group">

                            <label for="backuptable">Ingrese el nombre de la tabla a consultar</label>

                            <input type="text-uppercase" class="form-control text-uppercase"  id="tables" name="tables" placeholder="Ingrese el nombre de la tabla">
                            
                        </div>



                        <button type="submit" class="btn btn-primary">Motrar</button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>



<!--borrar respaldo de una tabla de un schema por medio de un input-->


</body>
</html>

