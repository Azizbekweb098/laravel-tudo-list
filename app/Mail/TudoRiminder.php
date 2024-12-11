<?php

namespace App\Mail;

use App\Models\Tudo;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TudoRiminder extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $tudo;

    public function __construct(Tudo $tudo)
    {
        $this->tudo = $tudo;
    }

    public function build()
    {
        return $this->subject('TudoRimnder')->view('emails.tudoReminder');
    }
}
