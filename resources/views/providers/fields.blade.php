<div class="col-md-6">
    <div class="card">
        <div class="card-block">
            <div class="form-group  @if($errors->has('company')) has-error @endif">
                {!! Form::label('company', 'Compañía', ['class' => 'control-label']) !!}
                {!! Form::text('company', old('company', isset($provider) ? $provider->company : ''), ['class' => 'form-control underlined', 'placeholder' => 'Nombre de la compañía']) !!}
                @if($errors->has('company'))
                    <span class="has-error">{!! $errors->first('company') !!}</span>
                @endif
            </div>
            <div class="form-group  @if($errors->has('person')) has-error @endif">
                {!! Form::label('person', 'Persona de contacto', ['class' => 'control-label']) !!}
                {!! Form::text('person', old('person', isset($provider) ? $provider->person : ''), ['class' => 'form-control underlined', 'placeholder' => 'Persona de contacto']) !!}
                @if($errors->has('person'))
                    <span class="has-error">{!! $errors->first('person') !!}</span>
                @endif
            </div>
            <div class="form-group  @if($errors->has('email')) has-error @endif">
                {!! Form::label('email', 'Correo de contacto', ['class' => 'control-label']) !!}
                {!! Form::email('email', old('email', isset($provider) ? $provider->email : ''), ['class' => 'form-control underlined', 'placeholder' => 'Correo de contacto']) !!}
                @if($errors->has('email'))
                    <span class="has-error">{!! $errors->first('email') !!}</span>
                @endif
            </div>
            <div class="form-group @if($errors->has('phone_1')) has-error @endif">
                {!! Form::label('phone_1', 'Teléfono principal', ['class' => 'control-label']) !!}
                {!! Form::text('phone_1', old('phone_1', isset($provider) ? $provider->phone_1 : ''), ['class' => 'form-control underlined', 'placeholder' => 'Teléfono principal']) !!}                
                @if($errors->has('phone_1'))
                    <span class="has-error">{!! $errors->first('phone_1') !!}</span>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card">
        <div class="card-block">
            <div class="form-group @if($errors->has('phone_2')) has-error @endif">
                {!! Form::label('phone_2', 'Otro teléfono (opcional)', ['class' => 'control-label']) !!}
                {!! Form::text('phone_2', old('phone_2', isset($provider) ? $provider->phone_2 : ''), ['class' => 'form-control underlined', 'placeholder' => 'Otro teléfono']) !!}                
                @if($errors->has('phone_2'))
                    <span class="has-error">{!! $errors->first('phone_2') !!}</span>
                @endif
            </div>
            <div class="form-group @if($errors->has('notes')) has-error @endif">
                {!! Form::label('notes', 'Notas adicionales', ['class' => 'control-label']) !!}
                {!! Form::textarea('notes', old('notes', isset($provider) ? $provider->notes : ''), ['class' => 'form-control underlined', 'placeholder' => 'Notas', 'rows' => 8]) !!}                
                @if($errors->has('notes'))
                    <span class="has-error">{!! $errors->first('notes') !!}</span>
                @endif
            </div>
        </div>
    </div>
</div>

