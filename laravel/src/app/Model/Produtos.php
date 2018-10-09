<?php
//William Goebel
namespace App\Model;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model {
    protected $table = 'produtos';
    protected $fillable = array('IDProduto','NomeProduto','IDFornecedor','IDCategoria', 'QuantidadePorUnidade', 'PrecoUnitario',  'UnidadesEmEstoque', 'UnidadesEmOrdem', 'NivelDeReposicao', 'Descontinuado');
    protected $primaryKey = 'IDProduto';
    public $timestamp = false;

    public function getProdutos(){
        return self::all();
    }

    public function addProduto(){
        $input = Input::all();
        //dd($input);
        $produto = new Produtos($input); // mass assingment
        $produto->save();
        return $produto;
        
        //$primeiro_nome = $input["primeiro_nome"];
        //$segundo_nome  = $input["segundo_nome"];
    }

    public function getProduto($id){
        $produto = self::find($id);
        if(is_null($produto)){
            return false;
        }
        return $produto;
    }

    public function deletaProduto($id){
        $produto = self::find($id);
        if(is_null($produto)){
            return false;
        }
        return $produto->delete();
    }

    public function atualizaProduto($id){
        $produto = self::find($id);
        if(is_null($produto)){
            return false;
        }
        $input = Input::all();
        $produto->fill($input);
        $produto->save();
        return $produto;
    }
}