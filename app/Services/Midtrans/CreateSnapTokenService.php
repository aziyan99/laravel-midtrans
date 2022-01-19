<?php

namespace App\Services\Midtrans;

use Midtrans\Snap;

class CreateSnapTokenService extends Midtrans
{
    protected $order;

    public function __construct($order)
    {
        parent::__construct();

        $this->order = $order;
    }

    public function getSnapToken()
    {
        $params = [
            'transaction_details' => [
                'order_id' => $this->order->number,
                'gross_amount' => $this->order->total_price,
            ],
            'item_details' => [
                [
                    'id' => 1,
                    'price' => $this->order->total_price,
                    'quantity' => 1,
                    'name' => 'Bill',
                ],
            ],
            'customer_details' => [
                'first_name' => 'Raja Azian',
                'email' => 'rajaazian@sample.test',
                'phone' => '081234567890',
            ]
        ];

        $snapToken = Snap::getSnapToken($params);

        return $snapToken;
    }
}
