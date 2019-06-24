<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $request_params;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request_params)
    {
        $this->request_params = $request_params;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@lotus-base.com')
                    ->view('emails.contact')
                    ->subject('【Lotus Base】フォームにメッセージがありました！');
    }
}
