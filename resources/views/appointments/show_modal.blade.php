<div class="modal-header">
    <h4 class="modal-title"><i class="fas fa-glasses"></i> Información de la Cita</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="card">
        <div class="card-block">
            @if ($appointment->importance)
			<div class="form-group text-{{ config('constants.importance.color')[$appointment->importance] }}">
                <i class="fas fa-circle"></i> &nbsp;
                {!! config('constants.importance.level')[$appointment->importance] !!}
            </div>            
            @endif
            <div class="form-group">
                {!! Form::label('description', 'Descripción', ['class' => 'control-label']) !!}
                {!! Form::text('description', $appointment->description, ['class' => 'form-control underlined', 'readonly']) !!}
            </div>
            @if ($appointment->date)
            <div class="form-group">
                {!! Form::label('date', 'Fecha de la cita', ['class' => 'control-label']) !!}
                {!! Form::text('date', $appointment->formated_date, ['class' => 'form-control underlined', 'readonly']) !!}
            </div>
            @endif
            @if ($appointment->notes)
            <div class="form-group">
                {!! Form::label('notes', 'Notas adicionales', ['class' => 'control-label']) !!}
                {!! Form::textarea('notes', $appointment->notes, ['class' => 'form-control underlined', 'readonly', 'rows' => 3]) !!}                
            </div>
            @endif
        </div>
    </div>		
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
</div>
