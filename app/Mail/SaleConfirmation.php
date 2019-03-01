<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SaleConfirmation extends Mailable
{
    use Queueable, SerializesModels;
    protected $cart;
    protected $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($cart, $data)
    {
      $this->cart = $cart;
      $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      $request = $this->data;
      $cart = $this->cart;
      return $this->from('upemorshop@gmail.com', 'UPEMOR SHOP')
                ->subject('Confirmacion de compra')
                ->view('store.emails.saleConfirmation',compact('request','cart'));
    }
}
