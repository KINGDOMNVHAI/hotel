<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgotPasswordEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $password;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ps)
    {
        $this->password = $ps;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // từ phần controller dẫn qua
        return $this->from("sarangthunguyen@gmail.com") // từ email của admin để trả password mới về 
        ->subject("Mật khẩu mới")
        ->view('feHotel.email.forgot-password-email') //dẫn tới template của người dùng
        ->with(['password' => $this->password]);
    }
}
