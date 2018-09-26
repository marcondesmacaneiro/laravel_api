<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\Regiao;
use Illuminate\Http\Request;

class RegiaoController extends BaseController
{
    protected $regiao = null;

    public function __construct(Regiao $regiao)
    {
        $this->regiao = $regiao;
    }

    public function todasRegioes()
    {
        return response()->json($this->regiao->todasRegioes(), 200)
            ->header('Content-Type', 'application/json');
    }

}
