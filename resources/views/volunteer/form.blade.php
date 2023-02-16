<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fullname') }}
            {{ Form::text('fullname', $volunteer->fullname, ['class' => 'form-control' . ($errors->has('fullname') ? ' is-invalid' : ''), 'placeholder' => 'Fullname']) }}
            {!! $errors->first('fullname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('firstname') }}
            {{ Form::text('firstname', $volunteer->firstname, ['class' => 'form-control' . ($errors->has('firstname') ? ' is-invalid' : ''), 'placeholder' => 'Firstname']) }}
            {!! $errors->first('firstname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lastname') }}
            {{ Form::text('lastname', $volunteer->lastname, ['class' => 'form-control' . ($errors->has('lastname') ? ' is-invalid' : ''), 'placeholder' => 'Lastname']) }}
            {!! $errors->first('lastname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dni') }}
            {{ Form::text('dni', $volunteer->dni, ['class' => 'form-control' . ($errors->has('dni') ? ' is-invalid' : ''), 'placeholder' => 'Dni']) }}
            {!! $errors->first('dni', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cellphone') }}
            {{ Form::text('cellphone', $volunteer->cellphone, ['class' => 'form-control' . ($errors->has('cellphone') ? ' is-invalid' : ''), 'placeholder' => 'Cellphone']) }}
            {!! $errors->first('cellphone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('profession') }}
            {{ Form::text('profession', $volunteer->profession, ['class' => 'form-control' . ($errors->has('profession') ? ' is-invalid' : ''), 'placeholder' => 'Profession']) }}
            {!! $errors->first('profession', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('age') }}
            {{ Form::text('age', $volunteer->age, ['class' => 'form-control' . ($errors->has('age') ? ' is-invalid' : ''), 'placeholder' => 'Age']) }}
            {!! $errors->first('age', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gender') }}
            {{ Form::text('gender', $volunteer->gender, ['class' => 'form-control' . ($errors->has('gender') ? ' is-invalid' : ''), 'placeholder' => 'Gender']) }}
            {!! $errors->first('gender', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('city') }}
            {{ Form::text('city', $volunteer->city, ['class' => 'form-control' . ($errors->has('city') ? ' is-invalid' : ''), 'placeholder' => 'City']) }}
            {!! $errors->first('city', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('leader_id') }}
            {{ Form::text('leader_id', $volunteer->leader_id, ['class' => 'form-control' . ($errors->has('leader_id') ? ' is-invalid' : ''), 'placeholder' => 'Leader Id']) }}
            {!! $errors->first('leader_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>