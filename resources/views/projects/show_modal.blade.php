<div class="modal-header">
    <h4 class="modal-title"><i class="fas fa-glasses"></i> Información del Proyecto</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="card">
        <div class="card-block">
            <div class="form-group">
                {!! Form::label('title', 'Título del proyecto', ['class' => 'control-label']) !!}
                {!! Form::text('title', $project->title, ['class' => 'form-control underlined', 'readonly']) !!}
            </div>
            @if ($project->contact)
            <div class="form-group">
                {!! Form::label('contact', 'Persona de contacto', ['class' => 'control-label']) !!}
                {!! Form::text('contact', $project->contact, ['class' => 'form-control underlined', 'readonly']) !!}
            </div>
            @endif
            @if ($project->notes)
            <div class="form-group">
                {!! Form::label('notes', 'Notas adicionales', ['class' => 'control-label']) !!}
                {!! Form::textarea('notes', $project->notes, ['class' => 'form-control underlined', 'readonly', 'rows' => 3]) !!}                
            </div>
            @endif
        </div>
    </div>		
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
</div>
