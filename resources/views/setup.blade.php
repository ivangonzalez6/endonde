<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>

<body class="bodyClass">
    <section class=" col-12 col-lg-12 col-md-12 col-sm-12  vertical-center mx-auto">

        <div class=" container ">
            <div class="row no-gutters rowClass">
                <div class="col-lg-6 text-center logobackground">

                    <img src="/images/image1.jpeg" class="img-fluid logobackground" alt="">
                </div>

                <div class="col-lg-6 px-5 pt-3">
                    <h2 class="font-weight-bold py-3 brandText text-center">¡Hola {{$name}}!</h2>
                    <h4>Cuéntanos sobre tu negocio.</h4>
                    <form method="POST" action="{{route('shop.store')}}">
                        @csrf
                        <div class="form-row">

                            <div class="col-lg-12 mx-auto d-none  ">

                                <input type="text" class="form-control my-1 p-3 hidden" placeholder="User_id" name="user_id" value=" {{$id}}">

                            </div>
                        </div>
                        <div class="form-row">

                            <div class="col-lg-12 mx-auto ">

                                <input type="text" class="form-control my-1 p-3" placeholder="Nombre de tu negocio" name="businessName">

                            </div>
                        </div>
                        <div class="form-row">

                            <div class="col-lg-12 mx-auto ">

                                <textarea type="textarea" class="form-control my-2 p-3" placeholder="Describe tu negocio" name="businessDescription"></textarea>

                            </div>
                        </div>
                        <div class="form-row">

                            <div class="col-lg-12 mx-auto ">

                                <input type="text" class="form-control my-2 p-3" placeholder="Dirección de tu negocio (calle y número)" name="businessAddress">

                            </div>
                        </div>
                        <div class="form-row">

                            <div class="col-lg-12 mx-auto ">

                                <input type="text" class="form-control my-2 p-3" placeholder="Ciudad" name="businessCity">

                            </div>
                        </div>
                        <div class="form-row">

                            <div class="col-lg-12 mx-auto ">

                                <input type="text" class="form-control my-2 p-3" placeholder="Estado" name="businessState">

                            </div>
                        </div>
                        <div class="form-row text-center">

                            <div class="col-lg-12 mx-auto ">

                                <input type="phone" class="form-control my-2 p-3" placeholder="WhatsApp" name="businessWhatsapp">

                            </div>
                        </div>
                        <div class="form-row text-center">

                            <div class="col-lg-12 mx-auto ">

                                <input type="telephone" class="form-control my-2 p-3" placeholder="Facebook (opcional)" name="businessFacebook">

                            </div>
                        </div>
                        <div class="form-row text-center">

                            <div class="col-lg-12 mx-auto ">

                                <input type="telephone" class="form-control my-2 p-3" placeholder="Instragram (opcional)" name="businessInstagram">

                            </div>
                        </div>
                        <div class="form-row text-center">

                            <div class="col-lg-12 mx-auto ">

                                <input type="file" class="form-control my-2 pt-1 pb-1" placeholder="Logo (opcional)" name="shopImage">

                            </div>
                        </div>
                        <div class="form-row ">

                            <div class="col-lg-12 mx-auto ">

                                <button type="submit" name="submit" class="btn1 mt-3 mb-4">Registrarse</button>

                            </div>
                        </div>
                        <div class="text-center">
                            <a href="#">¿Olvidaste tu contraseña?</a>
                            <p>¿No tienes una cuenta? <a href="#">¡Crea una cuenta gratis!</a></p>
                        </div>
                    </form>


                </div>
            </div>

        </div>

    </section>
</body>

</html>
