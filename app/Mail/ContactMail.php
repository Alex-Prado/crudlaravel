<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $datos;
    public function __construct($datos)
    {
        $this->datos = $datos;
    }


    public function envelope()
    {
        return new Envelope(
            subject: 'area creada: ' . $this->datos['nombrearea'],
        );
    }


    public function content()
    {
        return new Content(
            view: 'correo.index',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
