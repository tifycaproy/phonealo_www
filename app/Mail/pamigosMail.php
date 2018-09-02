<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use App\Usuarios;


class pamigosMail extends Mailable
{
    use Queueable, SerializesModels;

   
      /**
     * The order instance.
     *
     * @var Usuarios
     */
    
   /**
     * Create a new message instance.
     *
     * @return void
     */
    
    //protected $usuarios;

    public function __construct()
    {
        //$this->usuarios = $usuarios;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        $nom_amigo= $request['nom_amigo'];
        $referente= $request['referente'];
        $pais_amigo= $request['pais_amigo'];
        $email_amigo= $request['email_amigo'];
        $num_amigo= $request['num_amigo'];

        $nombreReferente = Usuarios::where('usu_mobile', $referente)->first();

        return $this->from('contact@phonealo.com')
                    ->view('frontend.mail.mailPamigo')
                    ->with(
                      [
                            'nom_amigo' => $nom_amigo,
                            'referente' => $referente,
                            'pais_amigo' => $pais_amigo,
                            'email_amigo' => $email_amigo,
                            'num_amigo' => $num_amigo,
                            'usu_name' => $nombreReferente->usu_name
                      ])
                    ->subject('Has sido recomendado');  
    }
}
