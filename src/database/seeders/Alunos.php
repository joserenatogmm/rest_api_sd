<?php

namespace Database\Seeders;

use App\Models\Aluno;
use Illuminate\Database\Seeder;

class Alunos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->alunos() as $aluno) {
            $novoAluno = New Aluno();
            foreach ($aluno as $campo => $valor) {
                $novoAluno->{$campo} = $valor;
            }
            $novoAluno->save();
        }
    }

    public function alunos() {
        return [
            [
                'nome' => 'Everton Martins dos Santos',
                'curso' => 'Ciência da Computação',
                'semestre' => '8',
                'registro_academico' => '57765-0',
                'cpf' => '11111111111',
                'cidade' => 'Marília',
            ],
            [
                'nome' => 'Gabriel Fernando de Carvalho Silva',
                'curso' => 'Ciência da Computação',
                'semestre' => '8',
                'registro_academico' => '58196-8',
                'cpf' => '22222222222',
                'cidade' => 'Marília',
            ],
            [
                'nome' => 'José Renato Garcia Martinez Martins',
                'curso' => 'Ciência da Computação',
                'semestre' => '8',
                'registro_academico' => '57928-9',
                'cpf' => '33333333333',
                'cidade' => 'Marília',
            ],
            [
                'nome' => 'Lucas Felipe de Oliveira Dias',
                'curso' => 'Ciência da Computação',
                'semestre' => '8',
                'registro_academico' => '58138-0',
                'cpf' => '44444444444',
                'cidade' => 'Garça',
            ],
        ];
    }
}
