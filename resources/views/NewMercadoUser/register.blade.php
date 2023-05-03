<!DOCTYPE html>
<html lang="es_MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Integrador</title>
    <script src="{{asset('js/app.js')}}"></script>
</head>

<body>
    <button class="btn btn-primary">Button</button>
    <div class="drawer drawer-mobile">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col items-center justify-center">
            <!-- Page content here -->
            <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">Open drawer</label>
        </div>
        <div class="drawer-side">
            <label for="my-drawer-2" class="drawer-overlay"></label>
            <ul class="menu p-4 w-80 bg-base-100 text-base-content">
                <!-- Sidebar content here -->
                <li><a>Sidebar Item 1</a></li>
                <li><a>Sidebar Item 2</a></li>
            </ul>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Integrador</h1>
                <h2>Registro de usuario</h2>
                <h4>¡Estás registrando un nuevo usuario!</h4>                
                <form action="{{route('StoreNewMercadoUser')}}" method="post">       
                    @csrf
                    <input type="hidden" name="code" value="{{$code}}">
                    <input type="text" name="name" id="name" placeholder="Nombre de la cuenta">
                    <input type="text" name="client_id" id="client_id" placeholder="client_id">
                    <input type="text" name="client_secret" id="client_secret" placeholder="client_secret">
                    <button type="submit">Registar</button>
                </form>
            </div>
        </div>

</body>

</html>