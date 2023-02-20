<div class="form-outline mb-2">
    {{ Form::text('fullname', $volunteer->fullname, ['class' => 'form-control' . ($errors->has('fullname') ? ' is-invalid' : ''), 'placeholder' => 'Nombres completos']) }}
    {!! $errors->first('fullname', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-outline mb-2">
    {{ Form::text('firstname', $volunteer->firstname, ['class' => 'form-control' . ($errors->has('firstname') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Paterno']) }}
    {!! $errors->first('firstname', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-outline mb-2">
    {{ Form::text('lastname', $volunteer->lastname, ['class' => 'form-control' . ($errors->has('lastname') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Materno']) }}
    {!! $errors->first('lastname', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="row mb-2">
    <div class="col">
    <div class="form-outline">
        {{ Form::text('dni', $volunteer->dni, ['class' => 'form-control' . ($errors->has('dni') ? ' is-invalid' : ''), 'placeholder' => 'DNI']) }}
            {!! $errors->first('dni', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    </div>
    <div class="col">
    <div class="form-outline">
        {{ Form::text('cellphone', $volunteer->cellphone, ['class' => 'form-control' . ($errors->has('cellphone') ? ' is-invalid' : ''), 'placeholder' => 'Teléfono']) }}
            {!! $errors->first('cellphone', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    </div>
</div>
<div class="form-outline mb-2">
 {{ Form::select('profession_id', $profession ,$volunteer->profession_id, ['class' => 'form-control' . ($errors->has('profession_id') ? ' is-invalid' : ''), 'placeholder' => 'Profesión']) }}
            {!! $errors->first('profession_id', '<div class="invalid-feedback">:message</div>') !!}
   
</div>
<div class="row mb-2">
    <div class="col">
        <div class="form-outline">
        {{ Form::text('age', $volunteer->age, ['class' => 'form-control' . ($errors->has('age') ? ' is-invalid' : ''), 'placeholder' => 'Edad']) }}
        {!! $errors->first('age', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="col">
        <div class="form-outline">
         {{ Form::select('gender', $gender, $volunteer->gender, ['class' => 'form-control' . ($errors->has('gender') ? ' is-invalid' : ''), 'placeholder' => 'Género']) }}
        {!! $errors->first('gender', '<div class="invalid-feedback">:message</div>') !!}

        </div>
    </div>
 </div>

<div class="form-outline mb-2">
{{ Form::select('city', $city, $volunteer->city, ['class' => 'form-control' . ($errors->has('city') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad']) }}
        {!! $errors->first('city', '<div class="invalid-feedback">:message</div>') !!}

</div>
<div class="form-outline mb-2">
 {{ Form::select('leader_id', $leader ,$volunteer->leader_id, ['class' => 'form-control' . ($errors->has('leader_id') ? ' is-invalid' : ''), 'placeholder' => 'Leader']) }}
            {!! $errors->first('leader_id', '<div class="invalid-feedback">:message</div>') !!}

</div>

<!-- Submit button -->
<button type="submit" class="btn btn-primary btn-block mb-2 btn-save"><i class="fa fa-plus"></i>CREAR</button>

 