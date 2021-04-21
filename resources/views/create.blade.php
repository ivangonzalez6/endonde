<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>

<body>
    <section class="bodyClass"">
        <div class=" container mt-4">
        <div class="container-fluid text-right">
            <div class="container mt-3">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="ml-auto">
                        <a class="navbar-brand text-white" href="{{ url()->previous() }}">Regresar</a>
                    </ul>
                </nav>
            </div>
        </div>
        </div>

    </section>

    <section class="mt-5">
        <div class="container col-6">

            <form method="POST" action="{{route('shop.product')}}">
                @csrf

                <div class="form-row">

                    <div class="col-lg-12 mx-auto d-none  ">

                        <input type="text" class="form-control my-1 p-3 hidden" placeholder="shop_id" name="shop_id" value="1">

                    </div>
                </div>

                <div class="form-row">

                    <div class="col-lg-12 mx-auto ">

                        <input type="text" class="form-control my-1 p-3" placeholder="Nombre del Producto" name="productName">

                    </div>
                </div>

                <div class="form-row">

                    <div class="col-lg-12 mx-auto ">

                        <input type="text" class="form-control my-1 p-3" placeholder="Precio del Producto" name="productPrice">

                    </div>
                </div>
                <div class="form-row">

                    <div class="col-lg-12 mx-auto ">

                        <textarea type="textarea" class="form-control my-2 p-3" placeholder="Descripción" name="productDescription"></textarea>

                    </div>
                </div>

                <div class="form-row text-center">

                    <div class="col-lg-12 mx-auto ">

                        <input type="file" class="form-control my-2 pt-1 pb-1" placeholder="Imagen (opcional)" name="productImage">

                    </div>
                </div>
                <div class="form-row ">

                    <div class="col-lg-12 mx-auto ">

                        <button type="submit" name="submit" class="btn1 mt-3 mb-4">Agregar</button>

                    </div>
                </div>
                <div class="text-center">
                    <a href="#">¿Olvidaste tu contraseña?</a>
                    <p>¿No tienes una cuenta? <a href="#">¡Crea una cuenta gratis!</a></p>
                </div>
            </form>
    </section>
    </div>
</body>

</html>
