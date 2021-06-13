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
        // Sửa chỗ này đi
        return $this->from("sarangthunguyen@gmail.com")
        ->subject("Mật khẩu mới")
        ->view('feHotel.email.forgot-password-email')
        ->with(['password' => $this->password]);
    }
}
