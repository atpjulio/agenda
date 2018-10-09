<div class="col-md-6">
    <div class="card">
        <div class="card-block">
            <div class="form-group  @if($errors->has('title')) has-error @endif">
                {!! Form::label('title', 'Título del proyecto', ['class' => 'control-label']) !!}
                {!! Form::text('title', old('title', isset($project) ? $project->title : ''), ['class' => 'form-control underlined', 'placeholder' => 'Nombre de la compañía']) !!}
                @if($errors->has('title'))
                    <span class="has-error">{!! $errors->first('title') !!}</span>
                @endif
            </div>
            <div class="form-group  @if($errors->has('contact')) has-error @endif">
                {!! Form::label('contact', 'Persona de contacto', ['class' => 'control-label']) !!}
                {!! Form::text('contact', old('contact', isset($project) ? $project->contact : ''), ['class' => 'form-control underlined', 'placeholder' => 'Persona de contacto']) !!}
                @if($errors->has('contact'))
                    <span class="has-error">{!! $errors->first('contact') !!}</span>
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
                {!! Form::textarea('notes', old('notes', isset($project) ? $project->notes : ''), ['class' => 'form-control underlined', 'placeholder' => 'Notas', 'rows' => 5]) !!}                
                @if($errors->has('notes'))
                    <span class="has-error">{!! $errors->first('notes') !!}</span>
                @endif
            </div>
        </div>
    </div>
</div>

