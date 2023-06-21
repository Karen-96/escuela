@extends('layouts.app')
@section('content')
<div class="container mt-3">
    <div class="row">
        @include('components.menu.card_submenu', 
            [
                'titulo' => 'Estudiantes',
                'bg_color' => '#16213E',
                'clase_icono' => 'fas fa-users',
                'urls' => [
                    [
                        'nombre' => 'Cargar Estudiante',
                        'url' => route('estudiante.create'),
                    ],[
                        'nombre' => 'Estudiantes',
                        'url' => '#',
                    ],
                    [
                        'nombre' => 'Asistencias',
                        'url' => '#',
                    ],
                    [
                        'nombre' => 'Informes',
                        'url' => '#',
                    ]
                ]
            ])
             @include('components.menu.card_submenu', 
            [
                'titulo' => 'Aulas',
                'bg_color' => '#0F3460',
                'clase_icono' => 'fas fa-chalkboard',
                'urls' => [
                    [
                        'nombre' => 'Cargar Usuarios',
                        'url' => '#'
                    ],[
                        'nombre' => 'Usuarios',
                        'url' => '#',
                    ]
                ]
            ])
        
        {{-- @include('components.menu.card_submenu', ['url' => '#', 'bg_color' => '#16213E', 'class_icon' => 'bi bi-person-fill', 'title' =>'Estudiantes']) --}}

        {{-- Apartado para jefes --}}
        {{-- @can('supervisar') --}}

       {{--  @include('components.menu.card_menu', ['url' => '#', 'bg_color' => '#0F3460', 'class_icon' => 'bi bi-info', 'title' =>'Informes'])
        
        @include('components.menu.card_menu', ['url' => '#', 'bg_color' => '#533483', 'class_icon' => 'bi bi-activity', 'title' =>'Asistencias']) --}}
        
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
