<?php

namespace App\Model;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class FuncionariosTerritorios extends Model
{
    protected $table = 'funcionarios_territorios';
    protected $fillable = array('IDFuncionario', 'IDTerritorio');

    public function todosFuncionariosTerritorios() {
        return DB::table($this->table)
            ->join('funcionarios', 'funcionarios_territorios.IDFuncionario', '=', 'funcionarios.IDFuncionario')
            ->join('territorios', 'funcionarios_territorios.IDTerritorio', '=', 'territorios.IDTerritorio')
            ->select('Nome', 'Sobrenome', 'DescricaoTerritorio')
            ->get();
    }

    public function getFuncionarioTerritorio($idFuncionario, $idTerritorio) {
        $funcionarioTerritorio = DB::table($this->table)
            ->join('funcionarios', 'funcionarios_territorios.IDFuncionario', '=', 'funcionarios.IDFuncionario')
            ->join('territorios', 'funcionarios_territorios.IDTerritorio', '=', 'territorios.IDTerritorio')
            ->select('Nome', 'Sobrenome', 'DescricaoTerritorio')
            ->where([
                ['funcionarios_territorios.IDFuncionario', '=', $idFuncionario],
                ['funcionarios_territorios.IDTerritorio', '=', $idTerritorio],
            ])
            ->get();
        if (is_null($funcionarioTerritorio)) {
            return false;
        }
        return $funcionarioTerritorio;
    }

    public function salvarFuncionarioTerritorio() {
        $input = Input::all();

        DB::table('funcionarios_territorios')->insert($input);

        $funcionarioTerritorio = new FuncionariosTerritorios($input);

        return $funcionarioTerritorio;
    }

    public function atualizarFuncionarioTerritorio($id) {
        $funcionarioTerritorio = self::find($id);
        if (is_null($funcionarioTerritorio)) {
            return false;
        }
        $input = Input::all();
        $funcionarioTerritorio->fill($input);
        $funcionarioTerritorio->save();
        return $funcionarioTerritorio;
    }

    public function deletarFuncionarioTerritorio($id) {
        $funcionarioTerritorio = self::find($id);
        if (is_null($funcionarioTerritorio)) {
            return false;
        }
        return $funcionarioTerritorio->delete();
    }

}
