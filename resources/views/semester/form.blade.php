<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $semester->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad_creditos') }}
            {{ Form::text('cantidad_creditos', $semester->cantidad_creditos, ['class' => 'form-control' . ($errors->has('cantidad_creditos') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad Creditos']) }}
            {!! $errors->first('cantidad_creditos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_docente') }}
            {{ Form::text('nombre_docente', $semester->nombre_docente, ['class' => 'form-control' . ($errors->has('nombre_docente') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Docente']) }}
            {!! $errors->first('nombre_docente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('asignatura_prerrequisito') }}
            {{ Form::text('asignatura_prerrequisito', $semester->asignatura_prerrequisito, ['class' => 'form-control' . ($errors->has('asignatura_prerrequisito') ? ' is-invalid' : ''), 'placeholder' => 'Asignatura Prerrequisito']) }}
            {!! $errors->first('asignatura_prerrequisito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horas_trabajo_autonomo') }}
            {{ Form::text('horas_trabajo_autonomo', $semester->horas_trabajo_autonomo, ['class' => 'form-control' . ($errors->has('horas_trabajo_autonomo') ? ' is-invalid' : ''), 'placeholder' => 'Horas Trabajo Autonomo']) }}
            {!! $errors->first('horas_trabajo_autonomo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horas_trabajo_dirigido') }}
            {{ Form::text('horas_trabajo_dirigido', $semester->horas_trabajo_dirigido, ['class' => 'form-control' . ($errors->has('horas_trabajo_dirigido') ? ' is-invalid' : ''), 'placeholder' => 'Horas Trabajo Dirigido']) }}
            {!! $errors->first('horas_trabajo_dirigido', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>