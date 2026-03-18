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
        Muy bien estas registrado!
    @endauth


</x-layouts-basic.layout>