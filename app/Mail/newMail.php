<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class newMail extends Mailable
{
    use Queueable, SerializesModels;
    public $listBillDetail;
    public $name;
    public $phoneNumber;
    public $address;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($listBillDetail,$name,$phoneNumber,$address)
    {
        $this->listBillDetail = $listBillDetail;
        $this->name = $name;
        $this->phoneNumber = $phoneNumber;
        $this->address = $address;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        return $this->markdown('email',compact('listBillDetail','name','phoneNumber','address'))->to('datnguyenctk40@gmail.com')->from('datnguyenctk40@gmail.com')->subject('Đơn đặt hàng của bạn');
    }
}
