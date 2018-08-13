<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Paises;
use App\Tarifas;
use APP\geoiploc;
@session_start();

class FrontendController extends Controller
{
    public function index(Request $request)
    {
    	
    	//$paises = Paises::where('pais_active', 1)->get();

    	//return view('frontend.index')->with('paises',$paises);
     if (empty($_POST['checkip']))
       {
        $ip = $_SERVER["REMOTE_ADDR"]; 
       }
       else
       {
         $ip = $_POST['checkip']; 
       }
        
        $pais =getCountryFromIP($ip, " NamE");
        $code = getCountryFromIP($ip, "code");        
        return view('frontend.index');

    }

    public function recarga(Request $request){

    	$pais = $request['pais'];
    	$tel = $request['tel'];
    	$valor = $request['valor'];

    	dd($pais." ".$tel." ".$valor);
    }

    public function tarifas(Request $request){

    	$pais = $request['pais'];

    	$tarifas = Tarifas::where('tar_pais_cod', $pais)->first();

    	return $tarifas;
    }


}
