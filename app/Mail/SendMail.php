<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $listBillDetail;
    public $name;
    public $phoneNumber;
    public $address;
    public $create_at;
    public $total;
    public $mail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($listBillDetail,$name,$phoneNumber,$address,$create_at,$total,$mail)
    {
        $this->listBillDetail = $listBillDetail;
        $this->name = $name;
        $this->phoneNumber = $phoneNumber;
        $this->address = $address;
        $this->create_at = $create_at;
        $this->total = $total;
        $this->mail = $mail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //print_r($this->listBillDetail);
        //die();
        return $this->view('Page.mail',compact('listBillDetail','name','phoneNumber','address','create_at','total'))->to($this->mail)->from('datnguyenctk40@gmail.com','Yasuo')->subject('Đơn đặt hàng của bạn');
    }
}
