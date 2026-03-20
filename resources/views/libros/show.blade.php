<x-layouts-basic.layout>
@php
    $fondo_aleatorio = collect(['fondo_1.jpg','fondo_2.jpg','fondo_3.jpg'])->random();
@endphp


<div class="min-h-150 bg-cover content-center modal-middle" style="background-image: url({{asset("imgs/".$fondo_aleatorio)}})" >
    
    <div class="card lg:card-side min-w-100 max-w-300 min-h-120 m-10 bg-black/50">
        <figure class="m-10 max-w-100 h-auto ">
            <img
            src="{{asset($libro->imagen)}}"
            alt="Album" />
        </figure>
        <div class="card-body  m-5 pb-30 text-white relative">
            <h1 class="card-title font-normal font-Jacquard text-5xl ">{{$libro->titulo}}</h1>
            <hr class="border-2 rounded-2xl">
            
            <div class="flex justify-between">
                <h2 class="text-2xl font-Poppins">Autor: {{$libro->autor}}</h2>
                <h2 class="text-2xl font-Poppins">Año: {{$libro->anio}}</h2>
            </div>
            <div>
                <h3 class="text-2xl font-Poppins mb-10">Género: {{$libro->genero}}</h3>
                <p class="text-xl font-Poppins text-justify">{{$libro->resumen}}</p>
            </div>

            
            <div class="card-actions bottom-10 right-10 absolute">

                {{--Volver--}}
                <a href="{{route("libros.index")}}">
                    <button class="btn"><i class="fa-solid fa-arrow-left"></i> Volver</button>
                </a>

                {{--Borrar--}}
                <button onclick="modal.showModal()" class="btn bg-red-600 border-red-600 shadow-none text-white"><i class="fa-solid fa-trash"></i>Borrar</button>
                
                <dialog id="modal" class="modal">
                    <div class="modal-box">
                        <h3 class="text-lg font-bold font-Poppins text-black">¿Estas seguro de que quieres borrar el libro?</h3>
                        <p class="py-4 text-red-500 font-Poppins">¡Esta acción es permanente!</p>
                        <form action="{{route("libros.destroy",$libro->id)}}" method="POST">

                            @csrf
                            @method('DELETE')
                            <button class="btn" type="button" onclick="modal.close()">Cancelar</button>
                            <button class="btn bg-red-600 border-red-600 shadow-none text-white"><i class="fa-solid fa-trash"></i>Borrar</button>
                            
                        </form>
                    </div>

                </dialog>
                

                {{--Editar--}}
                <a href="">
                    <button type="submit" class="btn btn-primary shadow-none"><i class="fa-solid fa-pen-to-square"></i>Editar</button>
                </a>    
            </div>
        </div>
    </div>
</div>
    
</x-layouts-basic.layout>