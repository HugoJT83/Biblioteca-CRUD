<footer class="footer footer-horizontal footer-center bg-gray-800 text-primary-content p-10">
  <aside>
    <a href="{{route("main")}}">
    <img 
        src="{{ asset('imgs/book_icon_pixel_alt.png') }}" 
        alt="Logo Biblioteca" 
        class="w-15 hover:cursor-pointer"
    >    
    </a>   
    
    <h3 class="font-Jacquard text-2xl">
      Biblioteca Azulona
      
    </h3>
    <p class="font-bold font-Poppins">
        Libros por y para lectores desde 2026
    </p>
    <p class="font-Poppins">Copyright © {{ date('Y') }} - <label class="font-Poppins italic">Algún derecho reservado me imagino</label></p>
    
  </aside>
  <nav>
    <h4 class="p-2 font-bold font-Poppins">Checkea mi github!</h4>
    <div class="grid grid-flow-col gap-4">
      <a href="https://github.com/HugoJT83/">
        <i class="fa-brands fa-github fa-2xl hover:cursor-pointer"></i>
      </a>
    </div>
  </nav>
</footer>