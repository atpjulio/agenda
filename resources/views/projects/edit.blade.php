@extends('layouts.backend.template')

@section('content')
    <div class="title-block">
        <div class="float-left">
            <h3 class="title"> Actualizar Proyecto </h3>
            <p class="title-description"> Actualizando un proyecto del sistema </p>
        </div>
        <div class="float-right animated fadeInRight">
            <a href="{{ route('project.index') }}" class="btn btn-pill-left btn-secondary btn-lg">
                <i class="fas fa-list"></i>
                Listado
            </a>
        </div>
    </div>

    {!! Form::open(['route' => ['project.update', $project->id], 'method' => 'PUT']) !!}
    <section class="section">
        <div class="row">
            @include('projects.fields')
            <div class="col-md-12">
                <div class="text-center">
                    {!! Form::submit('Actualizar', ['class' => 'btn btn-oval btn-warning']) !!}
                </div>
            </div>
        </div>
    </section>
    {!! Form::close() !!}
@endsection

@push('scripts')
    <script language="javascript" type="text/javascript">
        $(document).ready(function() {
        });
    </script>
@endpush
