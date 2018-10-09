<div class="col-md-6">
    <div class="card">
        <div class="card-block">
            <div class="form-group  @if($errors->has('company')) has-error @endif">
                {!! Form::label('company', 'Compañía', ['class' => 'control-label']) !!}
                {!! Form::text('company', old('company', isset($contact) ? $contact->company : ''), ['class' => 'form-control underlined', 'placeholder' => 'Nombre de la compañía']) !!}
                @if($errors->has('company'))
                    <span class="has-error">{!! $errors->first('company') !!}</span>
                @endif
            </div>
            <div class="form-group  @if($errors->has('person')) has-error @endif">
                {!! Form::label('person', 'Persona de contacto', ['class' => 'control-label']) !!}
                {!! Form::text('person', old('person', isset($contact) ? $contact->person : ''), ['class' => 'form-control underlined', 'placeholder' => 'Persona de contacto']) !!}
                @if($errors->has('person'))
                    <span class="has-error">{!! $errors->first('person') !!}</span>
                @endif
            </div>
            <div class="form-group  @if($errors->has('email')) has-error @endif">
                {!! Form::label('email', 'Correo de contacto', ['class' => 'control-label']) !!}
                {!! Form::email('email', old('email', isset($contact) ? $contact->email : ''), ['class' => 'form-control underlined', 'placeholder' => 'Correo de contacto']) !!}
                @if($errors->has('email'))
                    <span class="has-error">{!! $errors->first('email') !!}</span>
                @endif
            </div>
            <div class="form-group @if($errors->has('phone_1')) has-error @endif">
                {!! Form::label('phone_1', 'Teléfono principal', ['class' => 'control-label']) !!}
                {!! Form::text('phone_1', old('phone_1', isset($contact) ? $contact->phone_1 : ''), ['class' => 'form-control underlined', 'placeholder' => 'Teléfono principal']) !!}                
                @if($errors->has('phone_1'))
                    <span class="has-error">{!! $errors->first('phone_1') !!}</span>
                @endif
            </div>
            <div class="form-group @if($errors->has('phone_2')) has-error @endif">
                {!! Form::label('phone_2', 'Otro teléfono (opcional)', ['class' => 'control-label']) !!}
                {!! Form::text('phone_2', old('phone_2', isset($contact) ? $contact->phone_2 : ''), ['class' => 'form-control underlined', 'placeholder' => 'Otro teléfono']) !!}                
                @if($errors->has('phone_2'))
                    <span class="has-error">{!! $errors->first('phone_2') !!}</span>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card">
        <div class="card-block">
            <div class="form-group  @if($errors->has('address_1')) has-error @endif">
                {!! Form::label('address_1', 'Dirección', ['class' => 'control-label']) !!}
                {!! Form::text('address_1', old('address_1', isset($contact) ? $contact->address_1 : ''), ['class' => 'form-control underlined', 'placeholder' => 'Nombre de la compañía']) !!}
                @if($errors->has('address_1'))
                    <span class="has-error">{!! $errors->first('address_1') !!}</span>
                @endif
            </div>
            <div class="form-group  @if($errors->has('address_2')) has-error @endif">
                {!! Form::label('address_2', 'Dirección (continuación - opcional)', ['class' => 'control-label']) !!}
                {!! Form::text('address_2', old('address_2', isset($contact) ? $contact->address_2 : ''), ['class' => 'form-control underlined', 'placeholder' => 'Continuación de la dirección']) !!}
                @if($errors->has('address_2'))
                    <span class="has-error">{!! $errors->first('address_2') !!}</span>
                @endif
            </div>
            <div class="form-group  @if($errors->has('state')) has-error @endif">
                {!! Form::label('state', 'Departamento', ['class' => 'control-label']) !!}
                {!! Form::select('state', \App\State::getStates(), old('state', isset($contact) ? $contact->state_code : '08'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group @if($errors->has('notes')) has-error @endif">
                {!! Form::label('notes', 'Notas adicionales', ['class' => 'control-label']) !!}
                {!! Form::textarea('notes', old('notes', isset($contact) ? $contact->notes : ''), ['class' => 'form-control underlined', 'placeholder' => 'Notas', 'rows' => 5]) !!}                
                @if($errors->has('notes'))
                    <span class="has-error">{!! $errors->first('notes') !!}</span>
                @endif
            </div>
        </div>
    </div>
</div>

