<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FirstEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $tenphong;
    public $gialoaiphong;
    public $fromdate;
    public $todate;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->tenphong = $data['tenphong'];
        $this->gialoaiphong = $data['gialoaiphong'];
        $this->fromdate = $data['fromdate'];
        $this->todate = $data['todate'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("sarangthunguyen@gmail.com")->view('feHotel.email.email-template')
            ->with([
                'tenphong' => $this->tenphong,
                'gialoaiphong' => $this->gialoaiphong,
                'fromdate' => $this->fromdate,
                'todate' => $this->todate
            ]);
    }
}
