<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ArtEmail extends Mailable
{
    
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->subject('mail from stargazing')->view('emails.artMail');
        return $this->from('mpete.bataung8@gmail.com')->subject('New Customer Equiry')->view('emails.artMail')->with('data', $this->data);
    }
}