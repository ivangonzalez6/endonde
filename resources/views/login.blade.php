<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>

<body class="bodyClass">
    <section class=" col-12 col-lg-12 col-md-12 col-sm-12  vertical-center mx-auto">

        <div class=" container">
            <div class="row no-gutters rowClass">
                <div class="col-lg-6 text-center logobackground">

                    <img src="/images/image1.jpeg" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 px-5 pt-5">
                    <h1 class="font-weight-bold py-3 brandText text-center">¿En Dónde? Sólo aquí.</h1>
                    <h4 class="mt-4">Bienvenido. Ingresa a tu cuenta.</h4>
                    <form>
                        <div class="form-row">

                            <div class="col-lg-12 mx-auto ">

                                <input type="email" class="form-control my-3 p-4" placeholder="Ingresa tu email">

                            </div>
                        </div>
                        <div class="form-row text-center">

                            <div class="col-lg-12 mx-auto ">

                                <input type="password" class="form-control my-3 p-4" placeholder="Ingresa tu contraseña">

                            </div>
                        </div>
                        <div class="form-row ">

                            <div class="col-lg-12 mx-auto ">

                                <button type="submit" class="btn1 mt-3 mb-4">Ingresar</button>

                            </div>
                        </div>
                        <div class="text-center">
                        <a href="#">¿Olvidaste tu contraseña?</a>
                        <p>¿No tienes una cuenta? <a href="{{route('user.register')}}">¡Crea una cuenta gratis!</a></p></div>
                    </form>


                </div>
            </div>

        </div>

    </section>
</body>

</html>
