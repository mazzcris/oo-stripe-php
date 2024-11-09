<?php

namespace Mazzcris\OoStripePhp;

use Stripe\PaymentIntent;
use Stripe\StripeClient;

class StripeClient extends StripeClient
{
    public function getInvoice(string $invoiceId): Invoice
    {
        $stripeInvoice = $this->stripeClient->invoices->retrieve($invoiceId);

        return new Invoice($stripeInvoice);
    }

    public function getPaymentIntent(string $paymentIntentId): PaymentIntent
    {
        $stripeInvoice = $this->stripeClient->paymentIntents->retrieve($paymentIntentId);

        return new PaymentIntent($stripeInvoice);
    }
}