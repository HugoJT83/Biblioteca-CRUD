<x-layouts-basic.layout>

    @php
        $frases_error = collect(["¿Estás segur@ de que se llamaba así?","Tranquil@, le pasa a l@s mejores.", "Emm... Aquí no hay nada.","Ha debido ser el viento."])->random();
    @endphp
    
    <div 
        class="bg-cover"
        style="background-image:url({{ asset("imgs/books-library.jpg") }})"
    >
        <div class="bg-black/50 flex justify-center p-5">

            {{--Añadir libro (solo en la version por defecto de index)--}}
            @if (!request('search'))    
                <a href="{{route("libros.create")}}">
                    <button class="btn rounded-2xl hover:cursor-pointer hover:text-sky font-Poppins"><i class="fa-solid fa-plus"></i>Añadir Libro</button>
                </a>
            @endif

            {{--Buscar libro--}}
            <form action="{{route("libros.index")}}" method="GET" class="shadow-sm shadow-sky bg-sky text-white rounded-2xl ml-2">
                <i class="fa-solid fa-magnifying-glass ml-3"></i>
                <input 
                    type="text"
                    name="search"
                    class="w-30 bg-transparent border-none"
                    placeholder="Título..."
                    value="{{request('search')}}"
                >
                <button type="submit" class="shadow-sm shadow-gray-600/50 bg-white text-black rounded-xl p-1 pl-2 pr-2 m-1 font-Poppins hover:cursor-pointer hover:text-sky">Buscar</button>
            </form>

            {{--Limpiar lista (solo cuando se busca libro)--}}
            @if (request('search'))
                <a href="{{route('libros.index')}}">
                    <button class=" ml-2 btn rounded-2xl hover:cursor-pointer hover:text-sky font-Poppins">Limpiar</button>
                </a>
            @endif
        </div>

        {{--Grid de libros--}}
        <div class="grid grid-cols-3 bg-black/50">
            @foreach ($libros as $libro)
                <div class="card card-side bg-base-100 shadow-sm p-5 m-5 text-justify">
                <figure>
                    <img
                    src="{{ $libro->imagen }}"
                    class="h-50 w-full"
                    />
                </figure>
                <div class="card-body w-60 relative">
                    <h2 class="card-title font-Poppins text-xl">{{$libro->titulo}}</h2>
                    <h3 class=" font-Jacquard text-2xl">{{$libro->autor}}</h3>
                    <h4 class="font-Poppins text-blue-800">{{$libro->anio}}</h4>
                    <div class="card-actions justify-end">
                        <a href="{{route("libros.show", $libro)}}" class="absolute bottom-0">
                            <button class="btn btn-primary bg-gray-800 ">Ver más</button>
                        </a>
                    
                    </div>
                </div>
                </div>
            @endforeach
        </div>

        @if (count($libros) == 0)
            <div
                class="hero min-h-100"
            >
                <div class="hero-overlay bg-black/50"></div>
                <div class="hero-content text-neutral-content ">
                    <div class="max-w-md text-center">
                        <h1 class="mb-5 text-6xl italic font-Jacquard">No hemos encontrado nada...</h1>
                        <h2 class="font-Poppins text-xl">{{$frases_error}}</h2>
                    </div>
            </div>
        @endif
        
        {{--Paginación--}}
        @if (count($libros)!=0)
            <div class="p-5 font-Poppins font-bold bg-black/50">
                {{$libros->links()}}
            </div>
        @endif
        
    </div>
    
    
</x-layouts-basic.layout>
