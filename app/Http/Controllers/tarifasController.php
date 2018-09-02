<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paises;
use App\Tarifas;

class tarifasController extends Controller
{
    public function paises(Request $request){
    	$pais = $request['pais'];
    	$cadena = $pais.'%';

    	$paises = Paises::where('pais_desc', 'LIKE', $cadena)->get();

    	return $paises;
    }

    public function tarifa(Request $request){
    	$cod_pais = $request['value'];

    	$paises = Paises::where('pais_country_prefix', $cod_pais )->first();

    	$tarifas = Tarifas::where('tar_country_prefix',$cod_pais)->first();

    	$data['pais'] = $paises->pais_desc;

    	$data['tarifa'] = $tarifas->tar_price;



    	$replaced = str_replace_first('00', '+', $cod_pais);

    	$data['cod'] = $replaced;

    	return $data;

    }
}
