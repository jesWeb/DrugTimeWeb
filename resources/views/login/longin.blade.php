<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container">

    <div class="row">
        <div class="col-6">
            <div class="">
                <form action="login"  action="{{route()" method="get">
                    {{csrf_field()}}

                    <div class="form-floating mb-3">

                    </div>
                    <div class="form-floating">
                        
                    </div>
                </form>
            </div>
        </div>
        <div class="col-6">
            <div class="">

            </div>
        </div>
    </div>






    </div>
</body>
</html>