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
       
       $paises = Paises::where('pais_active', 1)->get();

      if (isset($_SERVER["HTTP_CLIENT_IP"]))
       {
           $dip = $_SERVER["HTTP_CLIENT_IP"];
           $dip2 = '1'.$dip;
       }
       elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
       {
           $dip = $_SERVER["HTTP_X_FORWARDED_FOR"];
           $dip2 = '2'.$dip;
       }
       elseif (isset($_SERVER["HTTP_X_FORWARDED"]))
       {
           $dip = $_SERVER["HTTP_X_FORWARDED"];
           $dip2 = '3'.$dip;
       }
       elseif (isset($_SERVER["HTTP_FORWARDED_FOR"]))
       {
           $dip = $_SERVER["HTTP_FORWARDED_FOR"];
           $dip2 = '4'.$dip;
       }
       elseif (isset($_SERVER["HTTP_FORWARDED"]))
       {
           $dip = $_SERVER["HTTP_FORWARDED"];
           $dip2 = '5'.$dip;
       }
       else
       {
           $dip = $_SERVER["REMOTE_ADDR"];
           $dip2 = '6'.$dip;
       }
     
     $TOKEN = "2fa61aa67d6a6f";
     $city="";
     $region="";
     $country="";
     $loc="";
     $org="";
     // $json = file_get_contents("https://ipinfo.io?token=$TOKEN".$dip);
     // $details = json_decode($json,true);
     // if(array_key_exists("ip",$details)) $dip.=$details["ip"];
     // if(array_key_exists("city",$details)) $city.=$details["city"];
     // if(array_key_exists("region",$details)) $region.=$details["region"];
     // if(array_key_exists("country",$details)) $country.=$details["country"];
     // if(array_key_exists("loc",$details)) $loc.=$details["loc"];
     // if(array_key_exists("org",$details)) $org.=$details["org"];

     $key = "9dcde915a1a065fbaf14165f00fcc0461b8d0a6b43889614e8acdb8343e2cf15"; $ip = $dip;
     $url = "http://api.ipinfodb.com/v3/ip-city/?key=$key&ip=$ip&format=xml";

// carga el archivo xml
      $xml = simplexml_load_file($url); // imprime el nombre del primer elemento
       //echo $xml->getName() .  "";  // crea un bucle para imprimir el nombre y los datos del elemento para cada nodo

      foreach ($xml->children() as $child)

      {

       //echo $child->getName() . ": " . $child . "<br>";
        if($child->getName() == 'ipAddress') $dip2= $child;
        if($child->getName() == 'countryCode') $country= $child;    
        if($child->getName() == 'countryName') $npais= $child;       
        if($child->getName() == 'cityName') $city= $child;
         if($child->getName() == 'regionName') $region= $child;
        

      }
     if($country=='AR' || $country=='BO' || $country=='CL' || $country=='BR' || $country=='CO' || $country=='CR' || $country=='CU' || $country=='DO' || $country=='EC' || $country=='GT' || $country=='CO' || $country=='HN' || $country=='PA' || $country=='PE' || $country=='PR' || $country=='PY' || $country=='SV' || $country=='UY' || $country=='VE' || $country=='ES'){
         $locale = 'es';

     }else{
        $locale = 'en';
     }
      \Session::put('locale', $locale);
          //return redirect()->back();


     return view('frontend.index')->with('pais',$country)->with('region',$region)->with('ciudad',$city)->with('paises',$paises);

   }

   public function privacity(){
     $paises = Paises::where('pais_active', 1)->get();
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {

      $dip = $_SERVER['HTTP_CLIENT_IP'];

  } else {

      if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

          $dip = $_SERVER['HTTP_X_FORWARDED_FOR'];

      } else {

          $dip = $_SERVER['REMOTE_ADDR'];
      }
  }
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

    return view('frontend.privacity')->with('pais',$country)->with('region',$region)->with('ciudad',$city)->with('paises',$paises);

   }

   public function preguntas(){
     $paises = Paises::where('pais_active', 1)->get();
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {

      $dip = $_SERVER['HTTP_CLIENT_IP'];

  } else {

      if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

          $dip = $_SERVER['HTTP_X_FORWARDED_FOR'];

      } else {

          $dip = $_SERVER['REMOTE_ADDR'];
      }
  }
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

    return view('frontend.preguntas')->with('pais',$country)->with('region',$region)->with('ciudad',$city)->with('paises',$paises);

   }



}
