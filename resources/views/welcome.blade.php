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
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
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
                    Laravel
                </div>

                <div>
                   <form action="{{ url('guardar') }}" method="POST">
                       {{ csrf_field() }}
                       <br>Primer nombre <br>
                       <input type="text" name="txt_nombre">
                       <br>Apellido<br>
                       <input type="text" name="txt_apellido">
                       <br>Cedula<br>
                       <input type="text" name="txt_cedula">
                       <br>Edad<br>
                       <input type="text" name="txt_edad">
                       <br>Sexo<br>
                       <input type="text" name="txt_sexo">
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
