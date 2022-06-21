<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Semester
 *
 * @property $id
 * @property $nombre
 * @property $cantidad_creditos
 * @property $nombre_docente
 * @property $asignatura_prerrequisito
 * @property $horas_trabajo_autonomo
 * @property $horas_trabajo_dirigido
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Semester extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'cantidad_creditos' => 'required',
		'nombre_docente' => 'required',
		'asignatura_prerrequisito' => 'required',
		'horas_trabajo_autonomo' => 'required',
		'horas_trabajo_dirigido' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','cantidad_creditos','nombre_docente','asignatura_prerrequisito','horas_trabajo_autonomo','horas_trabajo_dirigido'];



}
