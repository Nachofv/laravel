@extends('layout.master')
@section('content')
<hr class="featurette-divider">
<style>
    body {background-color: aquamarine;}
    h4,form {text-align: center;  }
</style>
</head>
<body>
    <h4>Introduce Usuario y contraseña ⬊</h4>
    </br>
    <form action="comprueba_usuario.php" method="post" name="form">
        Usuario: <input type="text" name="usuario" placeholder="Introduce usuario..." required>
        Contraseña <input type="password" name="pass" placeholder="contraseña..." required>
        Repite Contraseña <input type="password" name="Rpass" placeholder="contraseña..." required>
    </form>
    <form action="{{url('registro')}}" method="post">
        </br>
        <input type="submit" id="envio" value="Registrarse" name="" class=" btn btn-outline-primary"></br>
    </form>
    <hr class="featurette-divider">
</body>


@stop