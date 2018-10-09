<div class="modal-header">
    <h4 class="modal-title"><i class="fas fa-glasses"></i> Información del Cliente</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="card">
        <div class="card-block">
            <div class="form-group">
                {!! Form::label('company', 'Compañía', ['class' => 'control-label']) !!}
                {!! Form::text('company', $contact->company, ['class' => 'form-control underlined', 'readonly']) !!}
            </div>
            @if ($contact->person)
            <div class="form-group">
                {!! Form::label('person', 'Persona de contacto', ['class' => 'control-label']) !!}
                {!! Form::text('person', $contact->person, ['class' => 'form-control underlined', 'readonly']) !!}
            </div>
            @endif
            @if ($contact->email)
            <div class="form-group">
                {!! Form::label('email', 'Correo de contacto', ['class' => 'control-label']) !!}
                {!! Form::email('email', $contact->email, ['class' => 'form-control underlined', 'readonly']) !!}
            </div>
            @endif
            @if ($contact->phones)
            <div class="form-group">
                {!! Form::label('phones', 'Teléfono(s)', ['class' => 'control-label']) !!}
                {!! Form::text('phones', $contact->phones, ['class' => 'form-control underlined', 'readonly']) !!}                
            </div>
            @endif
            @if ($contact->addresses)
            <div class="form-group">
                {!! Form::label('addresses', 'Dirección', ['class' => 'control-label']) !!}
                {!! Form::text('addresses', $contact->addresses, ['class' => 'form-control underlined', 'readonly']) !!}
            </div>
            @endif
            @if ($contact->state)
            <div class="form-group">
                {!! Form::label('state', 'Departamento', ['class' => 'control-label']) !!}
                {!! Form::select('state', \App\State::getStates(), $contact->state, ['class' => 'form-control', 'disabled']) !!}
            </div>
            @endif
            @if ($contact->notes)
            <div class="form-group">
                {!! Form::label('notes', 'Notas adicionales', ['class' => 'control-label']) !!}
                {!! Form::textarea('notes', $contact->notes, ['class' => 'form-control underlined', 'readonly', 'rows' => 3]) !!}                
            </div>
            @endif
        </div>
    </div>		
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
</div>
