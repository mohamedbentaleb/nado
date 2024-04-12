<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
<div class="sidebar-header position-relative">
<div class="d-flex justify-content-between align-items-center">
    <div class="logo">
        <a href="{{route('users.index')}}"><img src="{{ asset('assets/images/logo.png')}}" alt="Logo" srcset=""></a>
    </div>
    <div class="theme-toggle d-flex gap-2  align-items-center mt-2 d-none">
        <div class="form-check form-switch fs-6">
            <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" >
            <label class="form-check-label" ></label>
        </div>
    </div>
    <div class="sidebar-toggler  x">
        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
    </div>
</div>
</div>
<div class="sidebar-menu">
@php
    $current_route = "";
    if(request()->route()){
        $current_route = request()->route()->getName();
    }
@endphp
<ul class="menu">
    @role('admin')
    <li
        class="sidebar-item d-none">
        <a href="{{route('dashboard')}}" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>Dashboard</span>
        </a>
    </li>
    @endrole
    <li @class(['sidebar-item','has-sub', 'active' => str_contains( $current_route , "annonces.")]) >
        <a href="#" class='sidebar-link'>
            <i class="bi bi-box"></i>
            <span>Annonces</span>
        </a>
        <ul @class(['submenu', 'active' => str_contains( $current_route , "annonces.")]) >
            <li  @class(['submenu-item', 'active' => request()->routeIs('annonces.index')])>
                <a href="{{ route("annonces.index") }}">List</a>
            </li>
            <li @class(['submenu-item', 'active' => request()->routeIs('annonces.create')])>
                <a href="{{ route("annonces.create") }}">New</a>
            </li>
        </ul>
    </li>

    <li @class(['sidebar-item','has-sub', 'active' => str_contains( $current_route , "brands.")]) >
        <a href="#" class='sidebar-link'>
            <i class="bi bi-inbox"></i>
            <span>Brands</span>
        </a>
        <ul @class(['submenu', 'active' => str_contains( $current_route , "brands.")]) >
            <li  @class(['submenu-item', 'active' => request()->routeIs('brands.index')])>
                <a href="{{ route("brands.index") }}">List</a>
            </li>
            <li @class(['submenu-item', 'active' => request()->routeIs('brands.create')])>
                <a href="{{ route("brands.create") }}">New</a>
            </li>
        </ul>
    </li>

    <li @class(['sidebar-item','has-sub', 'active' => str_contains( $current_route , "models.")]) >
        <a href="#" class='sidebar-link'>
            <i class="bi bi-diagram-3"></i>
            <span>Models</span>
        </a>
        <ul @class(['submenu', 'active' => str_contains( $current_route , "models.")]) >
            <li  @class(['submenu-item', 'active' => request()->routeIs('models.index')])>
                <a href="{{ route("models.index") }}">List</a>
            </li>
            <li @class(['submenu-item', 'active' => request()->routeIs('models.create')])>
                <a href="{{ route("models.create") }}">New</a>
            </li>
        </ul>
    </li>

    <li @class(['sidebar-item','has-sub', 'active' => str_contains( $current_route , "v.")]) >
        <a href="#" class='sidebar-link'>
            <i class="bi bi-pin-map"></i>
            <span>Ville</span>
        </a>
        <ul @class(['submenu', 'active' => str_contains( $current_route , "ville.")]) >
            <li  @class(['submenu-item', 'active' => request()->routeIs('ville.index')])>
                <a href="{{ route("ville.index") }}">List</a>
            </li>
            <li @class(['submenu-item', 'active' => request()->routeIs('ville.create')])>
                <a href="{{ route("ville.create") }}">New</a>
            </li>
        </ul>
    </li>

    <li @class(['sidebar-item','has-sub', 'active' => str_contains( $current_route , "videoads.")]) >
        <a href="#" class='sidebar-link'>
            <i class="bi bi-film"></i>
            <span>Video ads</span>
        </a>
        <ul @class(['submenu', 'active' => str_contains( $current_route , "videoads.")]) >
            <li  @class(['submenu-item', 'active' => request()->routeIs('videoads.index')])>
                <a href="{{ route("videoads.index") }}">List</a>
            </li>
            <li @class(['submenu-item', 'active' => request()->routeIs('videoads.create')])>
                <a href="{{ route("videoads.create") }}">New</a>
            </li>
        </ul>
    </li>

    <li @class(['sidebar-item','has-sub', 'active' => str_contains( $current_route , "imgslider.")]) >
        <a href="#" class='sidebar-link'>
            <i class="bi bi-file-easel"></i>
            <span>Image slider</span>
        </a>
        <ul @class(['submenu', 'active' => str_contains( $current_route , "imgslider.")]) >
            <li  @class(['submenu-item', 'active' => request()->routeIs('imgslider.index')])>
                <a href="{{ route("imgslider.index") }}">List</a>
            </li>
            <li @class(['submenu-item', 'active' => request()->routeIs('imgslider.create')])>
                <a href="{{ route("imgslider.create") }}">New</a>
            </li>
        </ul>
    </li>

    <li @class(['sidebar-item','has-sub', 'active' => str_contains( $current_route , "avistext.")]) >
        <a href="#" class='sidebar-link'>
            <i class="bi bi-file-earmark-font"></i>
            <span>Avis text</span>
        </a>
        <ul @class(['submenu', 'active' => str_contains( $current_route , "avistext.")]) >
            <li  @class(['submenu-item', 'active' => request()->routeIs('avistext.index')])>
                <a href="{{ route("avistext.index") }}">List</a>
            </li>
            <li @class(['submenu-item', 'active' => request()->routeIs('avistext.create')])>
                <a href="{{ route("avistext.create") }}">New</a>
            </li>
        </ul>
    </li>

    <li @class(['sidebar-item','has-sub', 'active' => str_contains( $current_route , "avisvideos.")]) >
        <a href="#" class='sidebar-link'>
            <i class="bi bi-file-earmark-play"></i>
            <span>Avis video</span>
        </a>
        <ul @class(['submenu', 'active' => str_contains( $current_route , "avisvideos.")]) >
            <li  @class(['submenu-item', 'active' => request()->routeIs('avisvideos.index')])>
                <a href="{{ route("avisvideos.index") }}">List</a>
            </li>
            <li @class(['submenu-item', 'active' => request()->routeIs('avisvideos.create')])>
                <a href="{{ route("avisvideos.create") }}">New</a>
            </li>
        </ul>
    </li>
    <li @class(['sidebar-item','has-sub', 'active' => str_contains( $current_route , "users.")]) >
        <a href="#" class='sidebar-link'>
            <i class="bi bi-people"></i>
            <span>Users</span>
        </a>
        <ul @class(['submenu', 'active' => str_contains( $current_route , "users.")]) >
            <li  @class(['submenu-item', 'active' => request()->routeIs('users.index')])>
                <a href="{{ route("users.index") }}">List</a>
            </li>
            <li @class(['submenu-item', 'active' => request()->routeIs('users.create')])>
                <a href="{{ route("users.create") }}">New</a>
            </li>
        </ul>
    </li>



</ul>
</div>
</div>
</div>
