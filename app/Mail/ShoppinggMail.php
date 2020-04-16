<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Order;

class ShoppinggMail extends Mailable
{
    use Queueable, SerializesModels;
    public $bills;
    public $bill_detail = [];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $bills, $bill_detail )
    {
        $this->bills = $bills;
        $this->bill_detail = $bill_detail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.shopping');
    }
}
