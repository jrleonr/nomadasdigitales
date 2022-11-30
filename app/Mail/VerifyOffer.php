<?php

namespace App\Mail;

use App\Models\Offer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class VerifyOffer extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    public $offer;
    public $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Offer $offer, $url)
    {
        $this->offer = $offer;
        $this->url = $url;
    }


    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {        
        return new Envelope(
            from: new Address('no-reply@linkform.io', 'José León'),
            subject: 'Verifica tu oferta',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            markdown: 'emails.verify-offer',
            with: [
                'url' => $this->url,
            ],

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
