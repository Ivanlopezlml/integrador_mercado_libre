@extends('app')

@section('content')
<div class="grid lg:grid-cols-2 lg:grid-flow-col gap-5 m-5">
    <div class="gap-5 row-span-2">

        <div class="col-span-2 row-span-1">
            <div class="card bg-green-500 shadow-xl">
                <div class="card-body mt-5">
                    <div class="p-5">
                        <p class="card-title justify-center text-white">Reputación Alta</p>
                    </div>
                    <div class="card-actions justify-center p-5">
                        <div class="justify-center text-white">Llevas un excelente desempeño, ¡sigue así!</div>
                    </div>
                    <div class="grid justify-items-center p-5">
                        <progress class="progress progress-info w-5/6 outline outline-offset-0 border" value="100" max="100"></progress>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gap-5 row-span-2">
        <div class="col-span-2 row-span">
            <div class="card bg-base-100 shadow-xl">
                <div class="card-body">
                    <div class="p-5">
                        <p class="card-title justify-center mt-5">2 mensajes no leídos</p>
                    </div>
                    <div class="card-title justify-center p-8">
                        <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 24 24"><path d="M12 1c-6.338 0-12 4.226-12 10.007 0 2.05.739 4.063 2.047 5.625.055 1.83-1.023 4.456-1.993 6.368 2.602-.47 6.301-1.508 7.978-2.536 9.236 2.247 15.968-3.405 15.968-9.457 0-5.812-5.701-10.007-12-10.007zm-5 11.5c-.829 0-1.5-.671-1.5-1.5s.671-1.5 1.5-1.5 1.5.671 1.5 1.5-.671 1.5-1.5 1.5zm5 0c-.829 0-1.5-.671-1.5-1.5s.671-1.5 1.5-1.5 1.5.671 1.5 1.5-.671 1.5-1.5 1.5zm5 0c-.828 0-1.5-.671-1.5-1.5s.672-1.5 1.5-1.5c.829 0 1.5.671 1.5 1.5s-.671 1.5-1.5 1.5z"/></svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</div>

<div class="grid lg:grid-flow-col gap-5 m-5">
    <div class="gap-5 row-span-2">
        <div class="col-span-2 row-span-2">
            <div class="card bg-base-100 shadow-xl">
                <div class="card-body">
                    <p class="card-title justify-center p-5">Grafica</p>
                    <div class="card-title justify-center p-5">
                        <svg width="55" height="55" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M0 22h1v-5h4v5h2v-10h4v10h2v-15h4v15h2v-21h4v21h1v1h-24v-1zm4-4h-2v4h2v-4zm6-5h-2v9h2v-9zm6-5h-2v14h2v-14zm6-6h-2v20h2v-20z"/></svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


