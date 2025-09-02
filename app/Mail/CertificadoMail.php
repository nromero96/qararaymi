<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\Models\User;

class CertificadoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $inscription;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inscription)
    {
        $this->inscription = $inscription;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
{
    $user = User::find($this->inscription->user_id);

    $primerNombre = $user->name ?? '';
    $apellidos    = $user->lastname ?? '';

    $asunto = "{$primerNombre} {$apellidos} - CERTIFICADO DE PARTICIPACION CONGRESO QARA RAYMI 2025";

    $url = route('certificates.mycertificate', $this->inscription->id);

    return $this->view('emails.certificado')
        ->with([
            'nombre' => $primerNombre.' '.$apellidos,
            'link_certificado' => $url,
        ])
        ->subject($asunto)
        ->replyTo(config('services.correonotificacion.inscripcion')) // correo al que deben responder
        ->cc(config('services.correonotificacion.inscripcion')); // copia a otro correo
    }

}
