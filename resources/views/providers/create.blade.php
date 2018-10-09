@extends('layouts.backend.template')

@section('content')
    <div class="title-block">
        <div class="float-left">
            <h3 class="title"> Añadir Proveedor </h3>
            <p class="title-description"> Añadiendo un Proveedor al sistema </p>
        </div>
        <div class="float-right animated fadeInRight">
            <a href="{{ route('provider.index') }}" class="btn btn-pill-left btn-secondary btn-lg">
                <i class="fas fa-list"></i>
                Listado
            </a>
        </div>
    </div>

    {!! Form::open(['route' => 'provider.store', 'method' => 'POST']) !!}
    <section class="section">
        <div class="row">
            @include('providers.fields')
            <div class="col-md-12">
                <div class="text-center">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-oval btn-primary']) !!}
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
