@extends('layouts.app')

@section('template_title')
    Create Volunteer
@endsection

@section('content')
    <section class="campana">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @includeif('partials.errors')
                    <p>CREAR VOLUNTARIO</p>
                    <form method="POST" action="{{ route('volunteers.store') }}"  role="form" enctype="multipart/form-data">
                        @csrf

                        @include('volunteer.form')

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
