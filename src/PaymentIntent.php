<?php

namespace Mazzcris\OoStripePhp;

use Stripe\StripeClient;

class Invoice
{
    private StripeClient $stripeClient;

    public function __construct(string $apiKey)
    {
        $this->stripeClient = new StripeClient($apiKey);
    }

    // Example method to get an invoice with structured getters
    public function getInvoice(string $invoiceId): Invoice
    {
        $stripeInvoice = $this->stripeClient->invoices->retrieve($invoiceId);
        return new Invoice($stripeInvoice);
    }
}