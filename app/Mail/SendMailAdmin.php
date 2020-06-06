<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailAdmin extends Mailable
{
    use Queueable, SerializesModels;

    protected $nguoidung;

    public function __construct($nguoidung)
    {
        $this->nguoidung = $nguoidung;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config('mail.from'))
        ->subject('Đơn hàng từ Bookstore')
        ->view('nguoidung.send_mail_admin',['nguoidung' => $this->nguoidung]);
    }
}
