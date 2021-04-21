<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
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
                        <a class="navbar-brand text-white" href="{{url('welcome')}}">Salir</a>
                    </ul>
                </nav>
            </div>
        </div>
        </div>

    </section>
    <section>
        <h2 class="font-weight-bold py-3 brandText text-center mt-5">¡Bienvenidos a {{$storeName}}!</h2>
    </section>

    <section>
        <div class="container col-10">
            <div class="col-lg-4 mx-auto ">

                <button type="submit" class="btn1 mt-3 mb-4">Agregar producto</button>

            </div>

        </div>
    </section>

    <section>
        <div class="container col-10">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

</body>

</html>
