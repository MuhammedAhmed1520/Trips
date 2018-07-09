<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MyMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $title;
    public $price;
    public $description;
    public $include;
    public $not_include;
    public $note;
    public $program;


    public function __construct($title,$price,$description,$include,$not_include,$note,$program)
    {
        $this->title = $title;
        $this->price = $price;
        $this->description = $description;
        $this->include=$include;
        $this->not_include=$not_include;
        $this->note=$note;
        $this->program=$program;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('test@test.com')->view('admin.trip.mail');
    }
}
