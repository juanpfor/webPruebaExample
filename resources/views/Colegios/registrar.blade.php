<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>


    <div class="container">

        @if(Session::has('alertMensaje'))
            <div class="row">
                <div class="col">
                    <div class="alert alert-success" role="alert">
                        hola
                      </div>
                </div>
            </div>
        @endif

        <div class="row">
          <div class="col">
            <h1>Registrar Colegios</h1>
            <br>
            <form action="{{route('almacenarcolegio')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nombre</label>
                  <input type="text" class="form-control" id="exampleInputEmail1"  name="nombre">
                  <div id="emailHelp" class="form-text">Coloca tu nombre </div>
                </div>

                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Direcion</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="direccion">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Telefono</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="telefono">
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Convenio</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="id_convenio">
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Secretaria</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="id_secretaria">
                  </div>

                <button type="submit" class="btn btn-primary" name="sumit" id="id_sumit">Submit</button>
              </form>
          </div>

        </div>
      </div>


</body>
</html>
