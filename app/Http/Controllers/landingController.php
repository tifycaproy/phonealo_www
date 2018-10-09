<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Landing;

class landingController extends Controller
{
    public function ecuador(){

    	return view('frontend.landing.ec');
    }
    public function cuba(){
    	return view('frontend.landing.cu');
    }

    public function email(Request $request){

    	$email =$request['email'];
    	$pais  =$request['pais'];

        $verifica = Landing::where('email',$email)->count();

        if ($verifica > 0) {

            $respuesta = 0;

        }else{

            $landing = new Landing();
            $landing->email = $email;
            $landing->pais = $pais;
            $landing->save();

            $respuesta = 1;

            Mail::to($email)->send(new landingMail());
        }


    	return $respuesta;


    }

    public function verifica(Request $request){

        $email = $request['email'];

        $verifica = Landing::where('email',$email)->count();

        return $verifica;
    }
}
