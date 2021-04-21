<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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

                <div class="col-lg-6 px-5 pt-3">
                    <h1 class="font-weight-bold py-3 brandText text-center">Crea una cuenta gratis.</h1>
                    <form method="POST" action="{{route('user.store')}}">
                        @csrf
                        <div class="form-row">

                            <div class="col-lg-12 mx-auto ">

                                <input type="text" class="form-control my-1 p-3" placeholder="Nombre" name="name">

                            </div>
                        </div>
                        <div class="form-row">

                            <div class="col-lg-12 mx-auto ">

                                <input type="text" class="form-control my-2 p-3" placeholder="Apellido Paterno" name="fatherLastName">

                            </div>
                        </div>
                        <div class="form-row">

                            <div class="col-lg-12 mx-auto ">

                                <input type="text" class="form-control my-2 p-3" placeholder="Apellido Materno" name="motherLastName">

                            </div>
                        </div>
                        <div class="form-row">

                            <div class="col-lg-12 mx-auto ">

                                <input type="telephone" class="form-control my-2 p-3" placeholder="Teléfono" name="phone">

                            </div>
                        </div>
                        <div class="form-row">

                            <div class="col-lg-12 mx-auto ">

                                <input type="email" class="form-control my-2 p-3" placeholder="Email" name="email">

                            </div>
                        </div>
                        <div class="form-row text-center">

                            <div class="col-lg-12 mx-auto ">

                                <input type="password" class="form-control my-2 p-3" placeholder="Contraseña" name="password">

                            </div>
                        </div>
                        <div class="form-row ">

                            <div class="col-lg-12 mx-auto ">

                                <button type="submit" name="submit" class="btn1 mt-3 mb-4">Registrarse</button>

                            </div>
                        </div>
                        <div class="text-center">

                            <p>¿Ya tienes una cuenta? <a href="{{route('user.login')}}">¡Ingresa ahora!</a></p>
                        </div>
                    </form>


                </div>
            </div>

        </div>

    </section>
</body>

</html>
