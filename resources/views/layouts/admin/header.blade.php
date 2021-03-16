<!-- Topbar Start -->
<div class="navbar navbar-expand flex-column flex-md-row navbar-custom">
    <div class="container-fluid">
        <!-- LOGO -->
        <a href="{{ url('home') }}" class="navbar-brand mr-0 mr-md-2 logo">
            <span class="logo-lg">
                <img src="{{ asset('assets/images/logo.jpg') }}" alt="" height="70" />
                <!-- <span class="d-inline h5 ml-1 text-logo">EICHE - Control App</span> -->
            </span>
            <span class="logo-sm">
                <img src="{{ asset('assets/images/logo.jpg') }}" alt="" height="70">
            </span>
        </a>
        @if (Request::url() == url('pagos'))
            <div class="container" id="container">
                <input type="hidden" id="colorView" value="#25c2e3 !important">
                <div class="row page-title">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb" class="float-right mt-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gastos</li>
                                <li class="breadcrumb-item active" aria-current="page">Gastos Comunes</li>
                            </ol>
                        </nav>
                        <div class="row">
                            <a class="btn btn-success btn-xs" href="{{ url('home')}}">Volver</a> <h4 class="mb-1 mt-0">Gastos - Gastos Comunes</h4>
                        </div>
                    </div>
                </div>
            </div>
        @elseif(Request::url() == url('estados_pagos'))
            <div class="container" id="container">
                <input type="hidden" id="colorView" value="#25c2e3 !important">
                <div class="row page-title">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb" class="float-right mt-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Pagos</li>
                                <li class="breadcrumb-item active" aria-current="page">Estados de Pagos</li>
                            </ol>
                        </nav>
                        <div class="row">
                            <a class="btn btn-success btn-xs" href="{{ url('home')}}">Volver</a> <h4 class="mb-1 mt-0">Pagos - Estados de Pagos</h4>
                        </div>
                    </div>
                </div>
            </div>
        @elseif(Request::route()->getName() == 'consultas')
            <h4 class="mb-1 mt-0">Consulta - Pagos de Condominio</h4>
            <div class="row page-title">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb" class="float-right mt-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Consulta</li>
                            <li class="breadcrumb-item active" aria-current="page">Pagos de Condominio</li>
                        </ol>
                    </nav>
                </div>
            </div>
        @endif

        <ul class="navbar-nav bd-navbar-nav flex-row list-unstyled menu-left mb-0">
            <li class="">
                <button class="button-menu-mobile open-left disable-btn">
                    <i data-feather="menu" class="menu-icon"></i>
                    <i data-feather="x" class="close-icon"></i>
                </button>
            </li>
        </ul>
    </div>
</div>
<!-- end Topbar -->