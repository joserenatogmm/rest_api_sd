<?php

namespace App\Models;

use App\Traits\HasPrimaryKeyUuid;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasPrimaryKeyUuid;

    public $timestamps = false;

    protected $table = 'aluno';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nome',
        'curso',
        'semestre',
        'registro_academico',
        'cpf',
        'cidade',
    ];

}
