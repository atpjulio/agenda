<div class="modal-header">
    <h4 class="modal-title"><i class="fas fa-glasses"></i> Información del Proveedor</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="card">
        <div class="card-block">
            <div class="form-group">
                {!! Form::label('company', 'Compañía', ['class' => 'control-label']) !!}
                {!! Form::text('company', $provider->company, ['class' => 'form-control underlined', 'readonly']) !!}
            </div>
            @if ($provider->person)
            <div class="form-group">
                {!! Form::label('person', 'Persona de contacto', ['class' => 'control-label']) !!}
                {!! Form::text('person', $provider->person, ['class' => 'form-control underlined', 'readonly']) !!}
            </div>
            @endif
            @if ($provider->email)
            <div class="form-group">
                {!! Form::label('email', 'Correo de contacto', ['class' => 'control-label']) !!}
                {!! Form::email('email', $provider->email, ['class' => 'form-control underlined', 'readonly']) !!}
            </div>
            @endif
            @if ($provider->phones)
            <div class="form-group">
                {!! Form::label('phones', 'Teléfono(s)', ['class' => 'control-label']) !!}
                {!! Form::text('phones', $provider->phones, ['class' => 'form-control underlined', 'readonly']) !!}                
            </div>
            @endif
            @if ($provider->notes)
            <div class="form-group">
                {!! Form::label('notes', 'Notas adicionales', ['class' => 'control-label']) !!}
                {!! Form::textarea('notes', $provider->notes, ['class' => 'form-control underlined', 'readonly', 'rows' => 3]) !!}                
            </div>
            @endif
        </div>
    </div>
</div>


<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
</div>
