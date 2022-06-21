@extends('layouts.app')

@section('template_title')
    Semester
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Semester') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('semesters.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Cantidad Creditos</th>
										<th>Nombre Docente</th>
										<th>Asignatura Prerrequisito</th>
										<th>Horas Trabajo Autonomo</th>
										<th>Horas Trabajo Dirigido</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($semesters as $semester)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $semester->nombre }}</td>
											<td>{{ $semester->cantidad_creditos }}</td>
											<td>{{ $semester->nombre_docente }}</td>
											<td>{{ $semester->asignatura_prerrequisito }}</td>
											<td>{{ $semester->horas_trabajo_autonomo }}</td>
											<td>{{ $semester->horas_trabajo_dirigido }}</td>

                                            <td>
                                                <form action="{{ route('semesters.destroy',$semester->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('semesters.show',$semester->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('semesters.edit',$semester->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $semesters->links() !!}
            </div>
        </div>
    </div>
@endsection
