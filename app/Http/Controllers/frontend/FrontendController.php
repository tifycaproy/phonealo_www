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

      $dip = $_SERVER['REMOTE_ADDR'];
      $TOKEN = "2fa61aa67d6a6f";
      $city="";
      $region="";
      $country="";
      $loc="";
      $org="";
      $json = file_get_contents("https://ipinfo.io??token=$TOKEN".$dip);
      $details = json_decode($json,true);
      if(array_key_exists("ip",$details)) $dip.=$details["ip"];  
      if(array_key_exists("city",$details)) $city.=$details["city"];
      if(array_key_exists("region",$details)) $region.=$details["region"];
      if(array_key_exists("country",$details)) $country.=$details["country"];
      if(array_key_exists("loc",$details)) $loc.=$details["loc"];
      if(array_key_exists("org",$details)) $org.=$details["org"];
      if($country=='AR' || $country=='BO' || $country=='CL' || $country=='BR' || $country=='CO' || $country=='CR' || $country=='CU' || $country=='DO' || $country=='EC' || $country=='GT' || $country=='CO' || $country=='HN' || $country=='PA' || $country=='PE' || $country=='PR' || $country=='PY' || $country=='SV' || $country=='UY' || $country=='VE' || $country=='ES'){
          $locale = 'es';
         
      }else{
         $locale = 'en';
      }
       \Session::put('locale', $locale);
           //return redirect()->back();
       
      return view('frontend.index')->with('pais',$country)->with('region',$region)->with('ciudad',$city);

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
