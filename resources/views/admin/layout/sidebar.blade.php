<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/areas') }}"><i class="nav-icon icon-umbrella"></i> {{ trans('admin.area.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/turnos') }}"><i class="nav-icon icon-book-open"></i> {{ trans('admin.turno.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/biometricos') }}"><i class="nav-icon icon-umbrella"></i> {{ trans('admin.biometrico.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/departamentos') }}"><i class="nav-icon icon-magnet"></i> {{ trans('admin.departamento.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/empleados') }}"><i class="nav-icon icon-compass"></i> {{ trans('admin.empleado.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/permisos') }}"><i class="nav-icon icon-diamond"></i> {{ trans('admin.permiso.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/registros') }}"><i class="nav-icon icon-diamond"></i> {{ trans('admin.registro.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/retrasos') }}"><i class="nav-icon icon-umbrella"></i> {{ trans('admin.retraso.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/multas') }}"><i class="nav-icon icon-magnet"></i> {{ trans('admin.multa.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/horas-extras') }}"><i class="nav-icon icon-energy"></i> {{ trans('admin.horas-extra.title') }}</a></li>
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-user"></i> {{ __('Manage access') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
