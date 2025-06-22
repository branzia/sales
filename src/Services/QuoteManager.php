<?php

namespace Branzia\Sales\Services;

class QuoteManager
{
    public function applyDefaultPaymentAndShipping($quote)
    {
        $quote->paymentMethods()->create([
            'method_code' => 'cod',
            'label' => 'Cash on Delivery',
            'is_selected' => true,
        ]);

        $quote->shippingMethods()->create([
            'carrier_code' => 'free',
            'method_code' => 'free',
            'label' => 'Free Shipping',
            'price' => 0,
            'is_selected' => true,
        ]);
    }
}
