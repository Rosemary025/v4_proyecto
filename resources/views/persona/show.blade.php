@extends('layouts.app')

@section('template_title')
    {{ $persona->nombre ?? 'Mostrar Persona' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Persona</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('persona.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $persona->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $persona->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>CI:</strong>
                            {{ $persona->ci }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Nacimiento:</strong>
                            {{ $persona->fecha_nac }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $persona->telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
