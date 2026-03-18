<header class="bg-gray-800 w-full min-h-15 p-4 flex items-center justify-between">
    <div class="flex items-center">
        <a href="{{route("main")}}" class="p-2">
            <img src="{{ asset('imgs/book_icon_pixel_alt.png') }}" class="w-15">
        </a>
        <h1 class="p-2 text-6xl text-white font-Jacquard ">Biblioteca Azulona</h1>
    </div>

    @guest
        <nav class="mr-5">
            <a href="{{ route("login") }}">
                <button class="btn font-Poppins rounded-2xl hover:text-sky">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Iniciar sesión
                </button>
            </a>
            <a href="{{ route("register") }}">
                <button class="btn font-Poppins rounded-2xl hover:text-sky">
                    <i class="fa-solid fa-user-plus"></i>
                    Registrarse
                </button>
            </a>
        </nav>
    @endguest
    @auth
        <div class="mr-5">
            <h1 class="font-Poppins text-white font-bold text-2xl">Bienvenid@, {{ Auth::user()->name }} </h1>
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="btn mt-2 w-full font-Poppins  text-lg rounded-2xl hover:text-sky">
                    Salir
                    <i class="fa-solid fa-person-walking-arrow-loop-left ml-3"></i>
                </button>
            </form>
        </div>
    @endauth












</header>