<x-layouts-basic.layout>
    @guest
        <div 
        class="min-h-150 hero"
        style="background-image: url({{ asset("imgs/books-library.jpg") }})"
        >
            <div class="hero-overlay"></div>
            <div class="hero-content text-white text-center">
                    <div class="max-w-md">
                        <h1 class="mb-5 text-6xl  font-Jacquard">Gestiona tus libros.</h1>
                        <p class="mb-5 text-lg font-Poppins">
                            En Biblioteca Azulona podrás controlar qué libros tienes: Desde 
                            añadir a borrar libros, así como editar sus detalles, todo en el mismo sitio. 
                        </p>
                        <a href="{{ route("register") }}">
                            <button class="rounded-3xl btn font-bold font-Poppins hover:text-sky"><i class="fa-solid fa-book"></i> Empieza ya</button>
                        </a>
                        
                    </div>
                </div>

        </div>  
    @endguest
    @auth
        <div 
        class="min-h-150 hero"
        style="background-image: url({{ asset("imgs/books-library.jpg") }})"
        >
            <div class="hero-overlay"></div>
            <div class="hero-content  text-white text-center">
                    <div class="min-h-120 min-w-80">
                        <img src="{{ asset('imgs/books_transparent.png') }}" alt="" class="animate-grow">
                    </div>
                    <div class="  max-w-120  rounded-2xl p-5 bg-black/40">
                        <h1 class="font-Jacquard text-5xl mb-2">Comienza a gestionar tus libros ya</h1>
                        <p class="font-Poppins text-xl">Tu biblioteca virtual, al alcance de un click.</p>
                        <a href="{{ route("libros.index") }}">
                            <button class="btn m-3 rounded-2xl hover:cursor-pointer hover:text-sky">Acceder</button>
                        </a>
                    </div>
                </div>

        </div> 
    @endauth


</x-layouts-basic.layout>