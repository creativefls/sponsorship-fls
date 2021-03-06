<?php

namespace App\Mail;

use App\Sponsor;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Thankyou extends Mailable
{
    use Queueable, SerializesModels;

    public $sponsor;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Sponsor $sponsor)
    {
        //
        $this->sponsor = $sponsor;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.thankyou')
            ->from('ayana@futureleadersummit.org', 'Ayana dari Marketing Future Leader Summit')
            ->subject('Follow-up Partnership with FLS 2018 '. $this->sponsor->company_name);
    }
}
