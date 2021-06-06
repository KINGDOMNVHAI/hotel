<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FirstEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build($password)
    {
        return $this->from("nvhai2306@gmail.com")->view('feHotel.email.forgot-password-email')->compact(['password' => $password]);
    }

    /**
     * Email forgot password
     *
     * @return $this
     */
    public function forgotpassword($password)
    {
        return $this->from("nvhai2306@gmail.com")->view('feHotel.email.forgot-password-email')->compact(['password' => $password]);
    }
}
