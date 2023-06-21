@extends('layouts.app')
@section('content')
<div class="container mt-3">
    <div class="row">
        
        @include('components.menu.card_menu', ['url' => '#', 'bg_color' => '#16213E', 'class_icon' => 'bi bi-geo-alt', 'title' =>'Bloque I'])

        {{-- Apartado para jefes --}}
        {{-- @can('supervisar') --}}

        @include('components.menu.card_menu', ['url' => '#', 'bg_color' => '#0F3460', 'class_icon' => 'bi bi-pin-map', 'title' =>'Bloque II'])
        
        @include('components.menu.card_menu', ['url' => '#', 'bg_color' => '#533483', 'class_icon' => 'bi bi-people', 'title' =>'Bloque III'])
        
        {{-- Apartado para administradores del sistema --}}
        {{-- @can('administrar') --}}

        {{-- @include('components.menu.card_menu', ['url' => '#', 'bg_color' => '#E94560', 'class_icon' => 'bi bi-building', 'title' =>'Estudiante']) --}}
        
        {{-- @include('components.menu.card_menu', ['url' => route('config.index'), 'bg_color' => '#816797', 'class_icon' => 'bi bi-gear-fill', 'title' =>'Configuraciones']) --}}
        
        
        {{-- @endcan --}}
        
        {{-- @endcan --}}
        
        {{-- @include('components.menu.card_menu', ['url' => route('export.index'), 'bg_color' => '#4C3A51', 'class_icon' => 'bi bi-clipboard2-data', 'title' =>'Exportable']) --}}

    </div>
</div>
@endsection
