<x-layouts-form.layout-form>

    @php
        $imagen = collect(["book_cover_1.jpg","book_cover_2.jpg","book_cover_3.jpg","book_cover_4.jpg"])->random();
    @endphp
    
    <div class="flex flex-col justify-center pt-10 bg-linear-to-t from-gray-800 to-sky ">
        
        <a href="{{route("libros.show",$libro)}}" class="flex justify-center">
            <button class="btn mb-10">Volver</button>
        </a>

        <form action="{{route("libros.update",$libro->id)}}" method="POST" class="flex justify-center">
            
            @csrf
            @method("PUT")
            <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-5">
                <label class="label font-Poppins text-xl">Nombre del libro</label>
                <input type="text"
                        value="{{$libro->titulo}}"
                       id="titulo"
                       name="titulo"
                       class="input font-Poppins font-light"
                       placeholder="Indica aquí el libro..."
                       required
                />
                <br>

                <label class="label font-Poppins text-lg">Autor</label>
                <input type="text"
                        value="{{$libro->autor}}"
                       id="autor"
                       name="autor"
                       class="input font-Poppins font-light"
                       placeholder="Indica aquí el autor..."
                       required
                />

                <br>

                <label class="label font-Poppins text-lg">Año</label>
                <input type="number"
                        value="{{$libro->anio}}"
                       id="anio"
                       name="anio"
                       class="input font-Poppins font-light"
                       placeholder="Indica aquí el año..."
                       min="1900"
                       max="{{date('Y')}}"
                       required
                />

                <br>
                <label class="label font-Poppins text-lg">Género</label>
                <input type="text"
                        value="{{$libro->genero}}"
                       id="genero"
                       name="genero"
                       class="input font-Poppins font-light"
                       placeholder="Indica aquí el genéro..."
                       required
                />

                <br>
                <label class="label font-Poppins text-lg">Resumen</label>
                
                <textarea 
                    name="resumen" 
                    id="resumen"  
                    cols="10" 
                    rows="5"
                    placeholder="Describe la obra aquí..." 
                    required
                    class="font-Poppins rounded-lg border-gray-300">{{$libro->resumen}}</textarea>

                <input 
                    type="text"
                    name="imagen"
                    id="imagen"
                    value="{{"imgs/".$imagen}}"
                    hidden
                    >
                
                <button class="btn bg-dnd m-3">Confirmar cambios</button>

                
            </fieldset>
        </form>
    </div>
    
</x-layouts-form.layout-form>