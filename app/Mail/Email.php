<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Email extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    private $fromEmail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data,$fromEmail, $subject)
    {
        $this->data = $data;
        $this->subject = $subject;
        $this->fromEmail = $fromEmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->fromEmail)->subject($this->subject)->view('email-template')->with('data',$this->data,'fromEmail',$this->fromEmail,'subject',$this->subject);
    }
}
