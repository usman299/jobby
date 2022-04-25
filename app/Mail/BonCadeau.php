<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BonCadeau extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($new, $cards)
    {
        $this->card = $new;
        $this->cards = $cards;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@ikaedigital.com', 'Mister Jobby')
            ->view('front.mail.boncadeau')
            ->with([
                'card' => $this->card,
                'cards' => $this->cards,
            ]);
    }
}
