<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use App\Models\Cidade;
use App\Http\Requests;
use App\Models\Pessoa;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class CadastroController extends Controller
{

    private $estadoModel;

    public function __construct(Estado $estado)
    {
        $this->estadoModel = $estado;
    }

    public function index()
    {
        $estados = $this->estadoModel->lists('estado', 'id');

        return view('cidade', compact('estados'));
    }

    public function getCadastro()
    {
        return view('cadastro');
    }

    public function getCidades($idEstado)
    {
        $estado = $this->estadoModel->find($idEstado);
        $cidades = $estado->cidades()->getQuery()->get(['id', 'cidade']);
        return Response::json($cidades);
    }
}
