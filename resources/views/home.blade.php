@extends('layouts.app')

@section('content')
    @role('volunteer')
    <p>solo volunteer</p>
    @endrole
    @role('admin')
    <p>solo admin</p>
    @endrole
    @role('leader')
    <section class="inicio">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>Bienvenid@<br>
                    {{ Auth::user()->name }}</p>
                </div>
            <div class="col-6">
                    <a class="box">
                        <img src="{{ asset('assets/images/ico-campana.png') }}">
                        Crear Campaña
                    </a>
            </div>
            <div class="col-6">
                <a class="box">
                    <img src="{{ asset('assets/images/ico-ver-campana.png') }}">
                    Ver Campañas
                </a>
            </div>
            <div class="col-6">
                <a class="box">
                    <img src="{{ asset('assets/images/ico-inventario.png') }}">
                    Inventarios
                </a>
            </div>
            <div class="col-6">
                <a href="{{ route('volunteers.index') }}" class="box">
                    <img src="{{ asset('assets/images/ico-voluntarios.png') }}">
                    VOLUNTARIOS
                </a>
            </div>
            <div class="col-6">
                <a class="box">
                    <img src="{{ asset('assets/images/ico-resultados.png') }}">
                    Resultados
                </a>
            </div>
            <div class="col-6">
                <a class="box">
                    <img src="{{ asset('assets/images/ico-pacientes.png') }}">
                    Pacientes
                </a>
            </div>
            <div class="col-6">
                <a class="box">
                    <img src="{{ asset('assets/images/ico-settings.png') }}">
                    settings
                </a>
            </div>
            <div class="col-6 d-flex align-items-center justify-content-center">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
            </div>
        </div>
    </section>
    @endrole

@endsection
