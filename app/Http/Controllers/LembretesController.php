<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Boleto;
use App\Models\Data_Comemorativa;
use App\Models\Nota_Academica;
use App\Models\Nota_Geral;
use App\Models\Remedio;

class LembretesController extends Controller
{
    //exibe todos os lembretes 
    public function showLembretes()
    {
        $user = auth()->user();
        $boletos = Boleto::where('id_user', $user->id)->orderBy('created_at', 'desc')->get();
        $datas_comemorativas = Data_Comemorativa::where('id_user', $user->id)->orderBy('created_at', 'desc')->get();
        $notas_academicas = Nota_Academica::where('id_user', $user->id)->orderBy('created_at', 'desc')->get();
        $notas_gerais = Nota_Geral::where('id_user', $user->id)->orderBy('created_at', 'desc')->get();
        $remedios = Remedio::where('id_user', $user->id)->orderBy('created_at', 'desc')->get();
        
        $parametros = [
            'boletos'=> $boletos,
            'datas_comemorativas'=>$datas_comemorativas,
            'notas_academicas'=>$notas_academicas,
            'notas_gerais'=>$notas_gerais,
            'remedios'=>$remedios
        ];

        return view('principal', $parametros);

    }
    
    public function cadastra_lembrete(Request $request)
    {
        dd($request->categoria);
    }

}
