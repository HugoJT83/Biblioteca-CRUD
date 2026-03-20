<x-layouts-basic.layout>

    <div
    class="hero min-h-120 bg-linear-to-b from-sky to-gray-700"
    >
    <div class="hero-overlay"></div>
    <div class="hero-content text-neutral-content ">
        <div class="max-w-md">
            <h1 class="mb-5 text-5xl italic font-Jacquard">Te has perdido broder...</h1>
            <h3 class="font-Poppins text-2xl ml-10">Intentaste acceder a:</h3> <br>
                <p class="mb-5 font-Poppins ml-10">
                    <label class="text-2xl font-bold" >URL :</label>  {{ $url }} <br>
                    <label class="text-2xl font-bold" >Path :</label>  {{ $path }} <br>
                </p>
        </div>
    </div>
    </div>


</x-layouts-basic.layout>

