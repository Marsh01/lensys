@extends('layouts.app')

@section('template_title')
    Volunteer
@endsection

@section('content')
<section class="lista-voluntario">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>VOLUNTARIOS</p>
                    <a href="{{ route('volunteers.create') }}" class="crear-voluntario"><i class="fa fa-plus"></i>CREAR VOLUNTARIO</a>
                    <div class="row cabecera">
                        <div class="col-5">
                            NOMBRE
                        </div>
                        <div class="col-3">
                           CIUDAD
                        </div>
                        <div class="col-3">
                            CREADOR
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <ul class="resultado">
                    @php $i=1; @endphp
                        @foreach ($volunteers as $volunteer)

                            <li class="row">
                                <div class="col-5">
                                    <a class="nombre-campana">{{ $volunteer->name }}</a>
                                </div>
                                <div class="col-3">
                                    <p class="pais">{{ $volunteer->city }}</p>
                                </div>
                                <div class="col-3">
                                    <p class="user">{{ $volunteer->user_name }}</p>
                                </div>
                                <div class="col-1">
                                    <a href=""#><img src="{{ asset('assets/images/dots.png') }}"></a>
                                </div>
                            </li>

                                    
                        @endforeach

                    </ul>
                </div>
             
            </div>
        </div>
    </section>
  
@endsection
