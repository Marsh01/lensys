@extends('layouts.app')

@section('content')

<section class="campana">
    <div class="container">
         <div class="row">
            <div class="col-12">
                <p>{{ __('CREAR REGISTRO') }}</p>
                   <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-outline mb-2">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="name" autofocus placeholder="Nombre de Usuario">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-outline mb-2">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus placeholder="Nombres Completos">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-outline mb-2">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autofocus placeholder="Apellido Paterno">

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-outline mb-2">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autofocus placeholder="Apellido Materno">

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                            <div class="form-outline">
                                <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" name="dni" value="{{ old('dni') }}" required autofocus placeholder="DNI">
                                @error('dni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input id="cellphone" type="text" class="form-control @error('cellphone') is-invalid @enderror" name="cellphone" value="{{ old('cellphone') }}" required autofocus placeholder="Teléfono">
                                    @error('cellphone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    
                                </div>
                            </div>
                        </div>
                        <div class="form-outline mb-2">
                            <select id="profession_id" name="profession_id" class="form-control @error('profession_id') is-invalid @enderror" required>
                                <option value="">Profesión</option>
                                @foreach ($profession as $pro)
                                    <option value="{{ $pro->id }}"> {{ $pro->name }}</option>
                                @endforeach
                              </select>
                                @error('profession_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        
                            
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                              <div class="form-outline">
                                <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autofocus placeholder="Edad">
                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-outline">
                                  <select id="gender" name="gender" class="form-control @error('gender') is-invalid @enderror" required>
                                    <option value="">Género</option>
                                    <option value="Femenino">Femenino</option>
                                     <option value="Masculino">Masculino</option>
                                </select>
                                @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                              </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                              <div class="form-outline">
                                     <select id="country_id" name="country_id" class="form-control @error('country_id') is-invalid @enderror"  required>
                                        <option value="">Asignar País</option>
                                        @foreach ($countries as $co)
                                            <option value="{{ $co->id }}"> {{ $co->name }}</option>
                                        @endforeach
                                    </select>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-outline">
                                   <select id="city_id" name="city_id" class="form-control @error('city_id') is-invalid @enderror"  required>
                                        <option value="">Asignar Ciudad</option>
                                      
                                    </select>
                              </div>
                            </div>
                        </div>
                        <div class="form-outline mb-2">
                            <select name="leader_id" class="form-control" required>
                                <option value="">Asignar Leader</option>
                                @foreach ($leader as $le)
                                            <option value="{{ $le->id }}"> {{ $le->name }}</option>
                                        @endforeach
                              </select>
                        </div>
                        <div class="form-outline mb-2">
                             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-outline mb-2">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-outline mb-2">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repetir contraseña">

                        </div>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary mb-2 btn-save" >
                                    <i class="fa fa-plus"></i>{{ __('CREAR') }}
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
         </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#country_id').change(function(event) {
            var idCountry = this.value;
            $('#city_id').html('');
 
            $.ajax({
            url: "/api/fetch-state",
            type: 'POST',
            dataType: 'json',
            data: {country_id: idCountry,_token:"{{ csrf_token() }}"},
            success:function(response){
                $('#city_id').html('<option value="">Asignar Ciudad</option>');
                $.each(response.cities,function(index, val){
                $('#city_id').append('<option value="'+val.id+'"> '+val.name+' </option>')
                });
                $('#city-id').html('<option value="">Asignar Ciudad</option>');
            }
            })
        });
})
</script>

@endsection
