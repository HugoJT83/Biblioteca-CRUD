<x-layouts-basic.layout>
    
    <div 
        class=""
        style="background-image:url({{ asset("imgs/books-library.jpg") }})"
    >
        <div class="grid grid-cols-3 p-10">
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
                            <button class="btn btn-primary bg-gray-800">Ver más</button>
                        </a>
                    
                    </div>
                </div>
                </div>
            @endforeach

            
        </div>
        <div class="p-5 font-Poppins font-bold">
            {{$libros->links()}}
        </div>
    </div>
    
    
</x-layouts-basic.layout>
