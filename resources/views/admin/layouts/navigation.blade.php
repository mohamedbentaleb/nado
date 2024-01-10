<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
<div class="sidebar-header position-relative">
<div class="d-flex justify-content-between align-items-center">
    <div class="logo">
        <a href="{{route('dashboard')}}"><img src="{{ asset('assets/images/logo.png')}}" alt="Logo" srcset=""></a>
    </div>
    <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
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
    <li
        class="sidebar-item ">
        <a href="{{route('dashboard')}}" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>Dashboard</span>
        </a>
    </li>

</ul>
</div>
</div>
</div>
