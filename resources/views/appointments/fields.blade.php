<div class="col-md-6">
    <div class="card">
        <div class="card-block">
            <div class="form-group  @if($errors->has('description')) has-error @endif">
                {!! Form::label('description', 'Descripción de la cita', ['class' => 'control-label']) !!}
                {!! Form::text('description', old('description', isset($appointment) ? $appointment->description : ''), ['class' => 'form-control underlined', 'placeholder' => 'Nombre de la compañía']) !!}
                @if($errors->has('description'))
                    <span class="has-error">{!! $errors->first('description') !!}</span>
                @endif
            </div>
            <div class="form-group  @if($errors->has('date')) has-error @endif">
                {!! Form::label('date', 'Fecha de la cita', ['class' => 'control-label']) !!}
                {!! Form::date('date', old('date', isset($appointment) ? substr($appointment->date, 0, 10) : \Carbon\Carbon::now()), ['class' => 'form-control underlined', 'id' => 'date', 'placeholder' => 'dd/mm/aaaa']) !!}
                @if($errors->has('date'))
                    <span class="has-error">{!! $errors->first('date') !!}</span>
                @endif
            </div>
            <div class="form-group  @if($errors->has('importance')) has-error @endif">
                {!! Form::label('importance', 'Nivel de importancia', ['class' => 'control-label']) !!}
                <select name="importance" id="importance" class="form-control">
                    @foreach (config('constants.importance.level') as $key => $val)
                        <option value="{{ $key }}" 
                            @if (isset($appointment) and $appointment->importance == $key) selected @endif>
                            {!! $val !!}
                        </option>
                    @endforeach
                </select>
                @if($errors->has('importance'))
                    <span class="has-error">{!! $errors->first('importance') !!}</span>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card">
        <div class="card-block">
            <div class="form-group @if($errors->has('notes')) has-error @endif">
                {!! Form::label('notes', 'Notas adicionales', ['class' => 'control-label']) !!}
                {!! Form::textarea('notes', old('notes', isset($appointment) ? $appointment->notes : ''), ['class' => 'form-control underlined', 'placeholder' => 'Notas', 'rows' => 8]) !!}                
                @if($errors->has('notes'))
                    <span class="has-error">{!! $errors->first('notes') !!}</span>
                @endif
            </div>
        </div>
    </div>
</div>

