<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailSend extends Mailable
{
    use Queueable;
    use SerializesModels;

    public $data;
    public $route;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $route)
    {
        $this->data = $data;
        $this->route = $route;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'no-reply@home-university.com';
        $subject = $this->data['subject'];
        $name = 'Home University';

        return $this->view($this->route)
            ->from($address, $name)
            ->cc($address, $name)
            ->bcc($address, $name)
            ->replyTo($address, $name)
            ->subject($subject)
            ->with($this->data);
    }
}
