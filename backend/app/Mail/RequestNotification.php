<?php 

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RequestNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $form;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($form)
    {
        $this->form = $form;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.request_notification')
                    ->with(['form' => $this->form]);
    }
}
