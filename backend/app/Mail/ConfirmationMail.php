<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\RequestForm;

class ConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $form;

    public function __construct(RequestForm $form)
    {
        $this->form = $form;
    }

    public function build()
    {
        return $this->view('emails.confirmation')
                    ->with(['form' => $this->form]);
    }
}
