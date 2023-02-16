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
                        @foreach ($volunteers as $volunteer)

                            <li class="row">
                                <div class="col-5">
                                    <a class="nombre-campana">{{ $volunteer->fullname }}</a>
                                </div>
                                <div class="col-3">
                                    <p class="pais">{{ $volunteer->city }}</p>
                                </div>
                                <div class="col-3">
                                    <p class="user">{{ $volunteer->leader_id }}</p>
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Volunteer') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('volunteers.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Fullname</th>
										<th>Firstname</th>
										<th>Lastname</th>
										<th>Dni</th>
										<th>Cellphone</th>
										<th>Profession</th>
										<th>Age</th>
										<th>Gender</th>
										<th>City</th>
										<th>Leader Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($volunteers as $volunteer)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $volunteer->fullname }}</td>
											<td>{{ $volunteer->firstname }}</td>
											<td>{{ $volunteer->lastname }}</td>
											<td>{{ $volunteer->dni }}</td>
											<td>{{ $volunteer->cellphone }}</td>
											<td>{{ $volunteer->profession }}</td>
											<td>{{ $volunteer->age }}</td>
											<td>{{ $volunteer->gender }}</td>
											<td>{{ $volunteer->city }}</td>
											<td>{{ $volunteer->leader_id }}</td>

                                            <td>
                                                <form action="{{ route('volunteers.destroy',$volunteer->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('volunteers.show',$volunteer->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('volunteers.edit',$volunteer->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $volunteers->links() !!}
            </div>
        </div>
    </div>
@endsection
