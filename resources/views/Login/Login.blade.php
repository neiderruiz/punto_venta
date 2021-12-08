
<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('Content/Login/Login.css')}}" type="text/css">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css" id="theme-styles">
</head>
<body>
  <!-- <header class="header">
  <p class="titulo">PUNTO DE VENTA</p>
</header> -->

    <div class="container-fluid d-flex  login-container posision">
    <div class="m-auto col-12 col-md-4">
        <div class="card shadow color">
            <div class="card-body">
                <form action="{{ route('login.post') }}" method="post">
                    @csrf

                    <h3 class="mx-auto text-center">Inicio de sesión</h3>
                    <br>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" placeholder="Ingrese su email" id="email" name="email" required>
                      </div>
                      <div class="form-group">
                        <label for="pwd">Contraseña:</label>
                        <input type="password" class="form-control" placeholder="Ingrese su contraseña" id="pwd" name="pwd" required>
                      </div>
                      <br>
                      <button type="submit" class="btn btn-block bcolor"><i class="fas fa-sign-in-alt"></i> Iniciar sesión</button>
                      <br>
                </form>
            </div>
        </div>
    </div>
    </div>

     <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

     <!-- Popper JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

     <!-- Latest compiled JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>

    @if ($mensaje != null)
        <script>

            Swal.fire({
  icon: 'error',
  title: '',
  text: '{{$mensaje}}'
        })
        </script>
    @endif
    </body>

</html>
