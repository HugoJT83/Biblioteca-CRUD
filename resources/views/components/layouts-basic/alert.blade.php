{{-- Genera una variable con el mismo nombre --}}
@props(['type'])

@php
    switch ($type) {
        case 'success':
            # code...
            $class = 'alert alert-success';
            $icon = "fa-solid fa-circle-check";
            $message = "¡Libro añadido/modificado/borrado correctamente!";
            break;

        case 'error':
            $class = 'alert alert-error';
            $icon = 'fa-solid fa-circle-xmark';
            $message = "Error al añadir/modificar/borrar un libro...";
            # code...
            break;
    }
@endphp

<div role="alert" class="{{ $class }}">
    <i class="text-xl {{ $icon }}"></i>
  <span class="font-bold text-lg">{{ $message }}</span>
</div>