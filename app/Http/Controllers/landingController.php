<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Landing;
use App\Mail\landingMail;
use Mail;

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

            $data = 0;

        }else{

            $landing = new Landing();
            $landing->email = $email;
            $landing->pais = $pais;
            $landing->save();
                
                Mail::to($email)->send(new landingMail());

           $data = 1;
        }


    	return $data;


    }

    public function verifica(Request $request){

        $email = $request['email'];

        $verifica = Landing::where('email',$email)->count();

        return $verifica;
    }
}
