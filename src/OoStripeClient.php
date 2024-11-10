<?php

namespace Mazzcris\OoStripePhp;

use Stripe\PaymentIntent;

#[\AllowDynamicProperties]
class OoStripeClient extends \Stripe\StripeClient
{
    public function getInvoice(string $invoiceId, ?array $expand = null): Invoice
    {
        $params = [];

        if ($expand) {
            $params = ['expand' => $expand];
        }

        $stripeInvoice = $this->invoices->retrieve($invoiceId, $params);

        return new Invoice($stripeInvoice);
    }

    public function getPaymentIntent(string $paymentIntentId, ?array $expand = null): PaymentIntent
    {
        $params = [];

        if ($expand) {
            $params = ['expand' => $expand];
        }

        $stripeInvoice = $this->paymentIntents->retrieve($paymentIntentId, $params);

        return new PaymentIntent($stripeInvoice);
    }
}