<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index(Request $request) {
        return response(Aluno::all(), 200);
    }

    public function insert(Request $request) {
        $aluno = New Aluno();

        $aluno->nome = $request->get('nome');
        $aluno->curso = $request->get('curso');
        $aluno->semestre = $request->get('semestre');
        $aluno->registro_academico = $request->get('registro_academico');
        $aluno->cpf = $request->get('cpf');
        $aluno->cidade = $request->get('cidade');

        if($aluno->save()) {
            return response([
                'success' => true,
                'message' => 'The student has been registered.'
            ], 201);
        } else {
            return response([
                'success' => false,
                'message' => 'There was an error saving the student.'
            ], 500);
        }
    }

    public function view(Request $request, $id) {
        $aluno = Aluno::find($id);

        if(empty($aluno)){
            return response([
                'success' => false,
                'message' => 'The student entered was not found.'
            ], 404);
        }

        return response()->json($aluno);
    }

    public function update(Request $request, $id) {
        $aluno = Aluno::find($id);

        if(empty($aluno)){
            return response([
                'success' => false,
                'message' => 'The student entered was not found.'
            ], 404);
        }

        $campos = ['nome', 'curso', 'semestre', 'registro_academico', 'cpf', 'cidade'];
        foreach ($campos as $campo) {
            if($request->get($campo)) {
                $aluno->{$campo} = $request->get($campo);
            }
        }

        if ($aluno->save()) {
            return response([
                'success' => true,
                'message' => 'The student has been updated.'
            ], 200);
        }
    }

    public function delete(Request $request, $id) {
        $aluno = Aluno::find($id);

        if(empty($aluno)){
            return response([
                'success' => false,
                'message' => 'The student entered was not found.'
            ], 404);
        }

        if ($aluno->delete()) {
            return response([
                'success' => true,
                'message' => 'The student has been deleted.'
            ], 200);
        }
    }
}
