<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <h1 align="center">Registro Usuario</h1>
                </div>

                <div>







                   <form action="{{ url('guardar') }}" method="POST">
                       {{ csrf_field() }}
                       <br>Primer nombre <br>
                       <input type="text" name="txt_nombre" class="form-control">
                       <br>Apellido<br>
                       <input type="text" name="txt_apellido" class="form-control">
                       <br>Cedula<br>
                       <input type="text" name="txt_cedula" class="form-control">
                       <br>Edad<br>
                       <input type="text" name="txt_edad" class="form-control">
                       <br>Sexo<br>
                       <input type="text" name="txt_sexo" class="form-control">
                       <br><br>
                       <input type="submit" value="Ingresar">
                   </form>
                   <table class="table table-hover">

                              <tr>
                                <th >Nombre</th>
                                <th >Apellido</th>

                                <th >Edad</th>

                               
                              </tr>

                             @foreach($usuarios as $user)
                              <tr>
                                <td>{{$user->nombre}}</td>
                                <td>{{$user->apellido}}</td>
                                <td>{{$user->edad}}</td>
                            

                              </tr>
                              @endforeach



                            </table>
                </div>
            </div>
        </div>


        







    </body>
</html>
