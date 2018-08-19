<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;


class pamigosMail extends Mailable
{
    use Queueable, SerializesModels;

   

    /**
     * Create a new message instance.
     *
     * @return Data $data
     */
    public function __construct()
    {
        //
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

       //dd($amigo." ".$referente." ".$pais." ".$tela." ".$emailamigo);

        return $this->from('contact@phonealo.com')
                    ->view('frontend.mail.mailPamigo')
                    ->with(
                      [
                            'nom_amigo' => $nom_amigo,
                            'referente' => $referente,
                            'pais_amigo' => $pais_amigo,
                            'email_amigo' => $email_amigo,
                            'num_amigo' => $num_amigo,
                      ])
                    ->subject('¡Participa Conmigo!');  
    }
}
