<?php

namespace Services\PaymentGateway;

use Omnipay\Omnipay;

class Mpesa
{

    CONST GATEWAY_NAME = 'Mpesa';

    private $transaction_data;

    private $gateway;

    public function __construct($gateway)
    {
        $this->gateway = $gateway;
        $this->options = [];
    }

    private function createTransactionData($order_total, $order_email, $event)
    {
        $this->transaction_data = [
            'amount' => $order_total,
            'phone_number' => $event->phone_number,
            'description' => 'Order for customer: ' . $order_email,
            'account' => $order_email,
            'callback_url' => 'https://grafitto.xyz'
        ];

        return $this->transaction_data;
    }

    public function startTransaction($order_total, $order_email, $event)
    {

        $this->createTransactionData($order_total, $order_email, $event);
        $transaction = $this->gateway->purchase($this->transaction_data);
        // $response = $transaction->send();

        // return $response;
    }

    public function getTransactionData() {
        return $this->transaction_data;
    }

    public function extractRequestParameters($request) {}

    public function completeTransaction($data) {}

    public function getAdditionalData() {}

    public function storeAdditionalData() {
        return false;
    }

    public function refundTransaction($order, $refund_amount, $refund_application_fee) {

        // $request = $this->gateway->refund([
        //     'transactionReference' => $order->transaction_id,
        //     'amount'               => $refund_amount,
        //     'refundApplicationFee' => $refund_application_fee
        // ]);

        // $response = $request->send();

        // if ($response->isSuccessful()) {
        //     $refundResponse['successful'] = true;
        // } else {
        //     $refundResponse['successful'] = false;
        //     $refundResponse['error_message'] = $response->getMessage();
        // }

        // return $refundResponse;
    }

}