@extends('layouts.app')

@section('template_title')
    {{ $volunteer->name ?? 'Show Volunteer' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Volunteer</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('volunteers.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fullname:</strong>
                            {{ $volunteer->fullname }}
                        </div>
                        <div class="form-group">
                            <strong>Firstname:</strong>
                            {{ $volunteer->firstname }}
                        </div>
                        <div class="form-group">
                            <strong>Lastname:</strong>
                            {{ $volunteer->lastname }}
                        </div>
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $volunteer->dni }}
                        </div>
                        <div class="form-group">
                            <strong>Cellphone:</strong>
                            {{ $volunteer->cellphone }}
                        </div>
                        <div class="form-group">
                            <strong>Profession:</strong>
                            {{ $volunteer->profession }}
                        </div>
                        <div class="form-group">
                            <strong>Age:</strong>
                            {{ $volunteer->age }}
                        </div>
                        <div class="form-group">
                            <strong>Gender:</strong>
                            {{ $volunteer->gender }}
                        </div>
                        <div class="form-group">
                            <strong>City:</strong>
                            {{ $volunteer->city }}
                        </div>
                        <div class="form-group">
                            <strong>Leader Id:</strong>
                            {{ $volunteer->leader_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
