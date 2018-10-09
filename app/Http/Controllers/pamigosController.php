<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pamigos;
use App\Usuarios;
use App\Mail\pamigosMail;
use Mail;

class pamigosController extends Controller
{
    public function registroAmigo(Request $request){

		$referente_form = $request['referente'];
		$pais_amigo 	= $request['pais_amigo'];
		$nombre_amigo 	= $request['nom_amigo'];
		$email_amigo 	= $request['email_amigo'];
		$tel_amigo 		= $request['num_amigo'];



		$referente = Usuarios::where('usu_mobile', $referente_form)->first();
		$nombreReferente = $referente->usu_name;

		if ($referente == NULL) {

			$datas = 0;

		}else{

			$validaAmigo = pamigos::where('usu_cod', $referente->usu_cod)->where('tel_amigo',$tel_amigo )->count();

			if ($validaAmigo == 0) {
		
				
				$amigo               = new pamigos();
				$amigo->usu_cod      = $referente->usu_cod;
				$amigo->pais_amigo   = $pais_amigo;
				$amigo->nombre_amigo = $nombre_amigo;
				$amigo->email_amigo  = $email_amigo;
				$amigo->tel_amigo    = $tel_amigo;
				$amigo->save();

				
				

				Mail::to($email_amigo)->send(new pamigosMail());

				$sms_path = fullpath('api.smsarena.es/http/sms.php', array (
				          'auth_key' => 'dLVik8N5OGgFYlOR219aZqlFE9pFXsv0',
				          'from' => 'Phonealo',
				          'to' => $pais_amigo.$tel_amigo,
				          'text' => 'Tu amigo '.$nombreReferente.' te ha recomendado para que uses Phonealo tu app para llamar barato, te dejamos el enlace https://app.phonealo.net/getNow',
				          'id' => time()
				      ), 'https');

				$envio = file_get_contents($sms_path);

			        if (strpos($envio, 'ERROR') > 0) {
			        $sms_path = fullpath('services.premiumnumbers.es:8080/push/sendPush', array (
			                'idCliente' => 81,
			                'clave' => 'b1gi6g14t8584ro',
			                'remitente' => 'Phonealo',
			                'destinatarios' => $pais_amigo.$tel_amigo,
			                'texto' => 'Tu amigo '.$nombreReferente.' te ha recomendado para que uses Phonealo tu app para llamar barato, te dejamos el enlace https://app.phonealo.net/getNow',
			                'ruta' => 5,
			                'alfabeto' => 0
			            ));

			            getapi($sms_path);
			        }

			        $datas = 1;
				  
			}else{
				$datas = 0;
			}

			return $datas;

			
		}
    }

    public function verifica(Request $request){

    	$referente_form = $request['referente'];

    	$referente = Usuarios::where('usu_mobile', $referente_form)->count();

    	return $referente;

    }
}
