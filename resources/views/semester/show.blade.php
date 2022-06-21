@extends('layouts.app')

@section('template_title')
    {{ $semester->name ?? 'Show Semester' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Semester</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('semesters.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $semester->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad Creditos:</strong>
                            {{ $semester->cantidad_creditos }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Docente:</strong>
                            {{ $semester->nombre_docente }}
                        </div>
                        <div class="form-group">
                            <strong>Asignatura Prerrequisito:</strong>
                            {{ $semester->asignatura_prerrequisito }}
                        </div>
                        <div class="form-group">
                            <strong>Horas Trabajo Autonomo:</strong>
                            {{ $semester->horas_trabajo_autonomo }}
                        </div>
                        <div class="form-group">
                            <strong>Horas Trabajo Dirigido:</strong>
                            {{ $semester->horas_trabajo_dirigido }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
