<div class="container mt-3">
    <div class="row">
        
        @include('components.menu.card_menu', ['url' => route('menu.administracion'), 'bg_color' => '#16213E', 'class_icon' => 'bi bi-collection-fill', 'title' =>'Administración'])

        {{-- Apartado para jefes --}}
        {{-- @can('supervisar') --}}

        @include('components.menu.card_menu', ['url' => route('menu.instructor'), 'bg_color' => '#0F3460', 'class_icon' => 'fas fa-chalkboard-teacher', 'title' =>'Instructor'])
        
        @include('components.menu.card_menu', ['url' => route('menu.director'), 'bg_color' => '#533483', 'class_icon' => 'bi bi-people', 'title' =>'Director'])
        
        {{-- Apartado para administradores del sistema --}}
        {{-- @can('administrar') --}}

        @include('components.menu.card_menu', ['url' => route('menu.estudiante'), 'bg_color' => '#E94560', 'class_icon' => 'bi bi-person', 'title' =>'Estudiante'])
        
        {{-- @include('components.menu.card_menu', ['url' => route('config.index'), 'bg_color' => '#816797', 'class_icon' => 'bi bi-gear-fill', 'title' =>'Configuraciones']) --}}
        
        
        {{-- @endcan --}}
        
        {{-- @endcan --}}
        
        {{-- @include('components.menu.card_menu', ['url' => route('export.index'), 'bg_color' => '#4C3A51', 'class_icon' => 'bi bi-clipboard2-data', 'title' =>'Exportable']) --}}

    </div>
</div>
