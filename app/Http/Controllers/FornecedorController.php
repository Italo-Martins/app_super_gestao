<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        // $fornecedores = ['Fornecedor 1'];
        $fornecedores = [
            0=>[
                    'nome' => 'Fornecedor 1',
                    'status' => 'N',
                    'CNPJ' => '0',
                    'dd' => '11', // São paulo
                    'Telefone' => '0000-0000'
            ],
            1=>[
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'CNPJ' => '000.000.000-00',
                'dd' => '85', // Forteleza
                'Telefone' => '0000-0000'
            ],
            2=>[
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'CNPJ' => '000.000.000-00',
                'dd' => '32', // Juiz de Fora
                'Telefone' => '0000-0000'
            ]
        ];

        // $fornecedores = [];

        // Operador ternario

        // condição ? se verdade : se falso;
        $msg = isset($fornecedores[1]['CNPJ']) ? 'CNPJ informado':'CNPJ não informado';
        echo $msg;

        return view('site.fornecedor.index', compact('fornecedores'));
        // return view('site.fornecedor.index');

    }
}
