<!DOCTYPE html>
<html lang="es_MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Integrador</title>
    <script src="{{asset('js/app.js')}}"></script>
    <!-- <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.6/dist/full.css" rel="stylesheet" type="text/css" /> -->
</head>

<body>
    <div class="drawer drawer-mobile">
        <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col">
            <!-- Navbar -->
            <div class="navbar bg-base-100">
                <div class="flex-none lg:hidden">
                    <button class="btn btn-ghost btn-square bg-base-100">
                        <label for="my-drawer-3" class="btn btn-square btn-ghost">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 stroke-current">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </label>
                    </button>
                </div>
                <div class="flex navbar bg-base-100 shadow-2xl rounded-lg">
                    <div class="flex-none mr-5 p-3">
                        <h3 class="font-semibold text-base bordered">Integrador Chapital</h3>
                    </div>

                    <div class="flex-auto justify-end pr-2">
                        <div class="form-control">
                            <select class="select select-bordered w-full max-w-xs">
                                <option selected>Cuenta Chapital 1</option>
                                <option>Agregar nueva cuenta</option>
                            </select>
                        </div>
                    </div>

                    <div class="justify-end flex-none">
                        <button class="btn btn-ghost btn-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                        </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="m-5">
                @yield('content')
            </div>
        </div>
        <div class="drawer-side">
            <label for="my-drawer-3" class="drawer-overlay"></label>
            <ul class="menu p-4 w-80 space-y-5 bg-base-100 lg:pt-20">
                <li>
                    <a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill-rule="evenodd" clip-rule="evenodd"><path fill="#625FED" d="M7 16.462l1.526-.723c1.792-.81 2.851-.344 4.349.232 1.716.661 2.365.883 3.077 1.164 1.278.506.688 2.177-.592 1.838-.778-.206-2.812-.795-3.38-.931-.64-.154-.93.602-.323.818 1.106.393 2.663.79 3.494 1.007.831.218 1.295-.145 1.881-.611.906-.72 2.968-2.909 2.968-2.909.842-.799 1.991-.135 1.991.72 0 .23-.083.474-.276.707-2.328 2.793-3.06 3.642-4.568 5.226-.623.655-1.342.974-2.204.974-.442 0-.922-.084-1.443-.25-1.825-.581-4.172-1.313-6.5-1.6v-5.662zm-1 6.538h-4v-8h4v8zm15-11.497l-6.5 3.468v-7.215l6.5-3.345v7.092zm-7.5-3.771v7.216l-6.458-3.445v-7.133l6.458 3.362zm-3.408-5.589l6.526 3.398-2.596 1.336-6.451-3.359 2.521-1.375zm10.381 1.415l-2.766 1.423-6.558-3.415 2.872-1.566 6.452 3.558z"/></svg>
                        <p class="font-normal text-base">Mis productos</p>
                    </a>
                </li>
                <li>
                    <a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill-rule="evenodd" clip-rule="evenodd"><path fill="#625FED" d="M7 16.462l1.526-.723c1.792-.81 2.851-.344 4.349.232 1.716.661 2.365.883 3.077 1.164 1.278.506.688 2.177-.592 1.838-.778-.206-2.812-.795-3.38-.931-.64-.154-.93.602-.323.818 1.106.393 2.663.79 3.494 1.007.831.218 1.295-.145 1.881-.611.906-.72 2.968-2.909 2.968-2.909.842-.799 1.991-.135 1.991.72 0 .23-.083.474-.276.707-2.328 2.793-3.06 3.642-4.568 5.226-.623.655-1.342.974-2.204.974-.442 0-.922-.084-1.443-.25-1.825-.581-4.172-1.313-6.5-1.6v-5.662zm-1 6.538h-4v-8h4v8zm15-11.497l-6.5 3.468v-7.215l6.5-3.345v7.092zm-7.5-3.771v7.216l-6.458-3.445v-7.133l6.458 3.362zm-3.408-5.589l6.526 3.398-2.596 1.336-6.451-3.359 2.521-1.375zm10.381 1.415l-2.766 1.423-6.558-3.415 2.872-1.566 6.452 3.558z"/></svg>
                        <p class="font-normal text-base">Actualizar productos</p>
                    </a>
                </li>
                <li>
                    <a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="#625FED" d="M12 1c-6.338 0-12 4.226-12 10.007 0 2.05.739 4.063 2.047 5.625.055 1.83-1.023 4.456-1.993 6.368 2.602-.47 6.301-1.508 7.978-2.536 9.236 2.247 15.968-3.405 15.968-9.457 0-5.812-5.701-10.007-12-10.007zm-5 11.5c-.829 0-1.5-.671-1.5-1.5s.671-1.5 1.5-1.5 1.5.671 1.5 1.5-.671 1.5-1.5 1.5zm5 0c-.829 0-1.5-.671-1.5-1.5s.671-1.5 1.5-1.5 1.5.671 1.5 1.5-.671 1.5-1.5 1.5zm5 0c-.828 0-1.5-.671-1.5-1.5s.672-1.5 1.5-1.5c.829 0 1.5.671 1.5 1.5s-.671 1.5-1.5 1.5z"/></svg>
                        <p class="font-normal text-base">Mensajes</p>
                    </a>
                </li>
                <li>
                    <a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="#625FED" d="M1.926 7l-.556-2.999h21.256l-.556 2.999h-20.144zm1.514-5l-.439-2h17.994l-.439 2h-17.116zm-3.44 7.001l2.035 14.999h19.868l2.097-14.999h-24zm3.782 13l-1.22-9.001h18.86l-1.259 9.001h-16.381zm8.317-1.284l.004.283h-5.939l-.048-.292c-.133-.779-.177-1.224.582-1.43.842-.227 1.684-.429 1.168-1.289-1.627-2.546-.848-3.989.634-3.989 1.454 0 2.516 1.39 1.355 3.99-.348.854.5 1.056 1.401 1.289.801.207.834.654.843 1.438zm6.628-4.717h-4.784l-.028 1h4.675l.137-1zm.273-2h-5l-.028 1h4.892l.136-1zm-.548 4h-4.566l-.029 1h4.459l.136-1zm-.273 2h-4.351l-.028 1h4.241l.138-1z"/></svg>
                        <p class="font-normal text-base">Mis cuentas Mercado Libre</p>
                    </a>
                </li>
                <li>
                    <a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="#625FED" d="M10.644 17.08c2.866-.662 4.539-1.241 3.246-3.682-3.932-7.427-1.042-11.398 3.111-11.398 4.235 0 7.054 4.124 3.11 11.398-1.332 2.455.437 3.034 3.242 3.682 2.483.574 2.647 1.787 2.647 3.889v1.031h-18c0-2.745-.22-4.258 2.644-4.92zm-12.644 4.92h7.809c-.035-8.177 3.436-5.313 3.436-11.127 0-2.511-1.639-3.873-3.748-3.873-3.115 0-5.282 2.979-2.333 8.549.969 1.83-1.031 2.265-3.181 2.761-1.862.43-1.983 1.34-1.983 2.917v.773z"/></svg>
                        <p class="font-normal text-base">Gestión de usuarios</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>