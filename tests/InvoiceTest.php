<?php

use Mazzcris\OoStripePhp\Invoice;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Stripe\Collection as StripeCollection;
use Stripe\StripeObject;

class InvoiceTest extends TestCase
{
    #[Test]
    public function testGetters()
    {
        $invoice = Invoice::constructFrom(json_decode(file_get_contents(__DIR__ . '/fixtures/invoice.json'), true));

        $this->assertEquals('in_2MtHbALkdIwHu7ixl4Ozz123', $invoice->getId());
        $this->assertEquals('jennyrosen@example.com', $invoice->getCustomerEmail());
        $this->assertEquals('invoice', $invoice->getObject());
        $this->assertEquals('US', $invoice->getAccountCountry());
        $this->assertEquals('Stripe Docs', $invoice->getAccountName());
        $this->assertNull($invoice->getAccountTaxIds());
        $this->assertEquals(0, $invoice->getAmountDue());
        $this->assertEquals(0, $invoice->getAmountPaid());
        $this->assertEquals(0, $invoice->getAmountRemaining());
        $this->assertEquals(0, $invoice->getAmountShipping());
        $this->assertNull($invoice->getApplication());
        $this->assertNull($invoice->getApplicationFeeAmount());
        $this->assertEquals(0, $invoice->getAttemptCount());
        $this->assertFalse($invoice->getAttempted());
        $this->assertFalse($invoice->getAutoAdvance());
        $this->assertEquals("manual", $invoice->getBillingReason());
        $this->assertNull($invoice->getCharge());
        $this->assertEquals("charge_automatically", $invoice->getCollectionMethod());
        $this->assertEquals((new \Datetime())->setTimestamp(1680644467), $invoice->getCreated());
        $this->assertEquals((new \Datetime())->setTimestamp(1680644467), $invoice->getCreatedAt());
        $this->assertEquals("usd", $invoice->getCurrency());
        $this->assertNull($invoice->getCustomFields());
        $this->assertEquals("cus_AaZwdNtLEOXuaA", $invoice->getCustomer());
        $this->assertNull($invoice->getCustomerAddress());
        $this->assertEquals("jennyrosen@example.com", $invoice->getCustomerEmail());
        $this->assertEquals("Jenny Rosen", $invoice->getCustomerName());
        $this->assertNull($invoice->getCustomerPhone());
        $this->assertNull($invoice->getCustomerShipping());
        $this->assertEquals("none", $invoice->getCustomerTaxExempt());
        $this->assertEquals([], $invoice->getCustomerTaxIds());
        $this->assertNull($invoice->getDefaultPaymentMethod());
        $this->assertNull($invoice->getDefaultSource());
        $this->assertEquals([], $invoice->getDefaultTaxRates());
        $this->assertNull($invoice->getDescription());
        $this->assertNull($invoice->getDiscount());
        $this->assertEquals([], $invoice->getDiscounts());
        $this->assertNull($invoice->getDueDate());
        $this->assertNull($invoice->getEndingBalance());
        $this->assertNull($invoice->getFooter());
        $this->assertNull($invoice->getFromInvoice());
        $this->assertNull($invoice->getHostedInvoiceUrl());
        $this->assertNull($invoice->getInvoicePdf());
        $this->assertNull($invoice->getLastFinalizationError());
        $this->assertNull($invoice->getLatestRevision());
        $this->assertFalse($invoice->getLivemode());
        $this->assertEquals(new StripeObject(), $invoice->getMetadata());
        $this->assertNull($invoice->getNextPaymentAttempt());
        $this->assertNull($invoice->getNumber());
        $this->assertNull($invoice->getOnBehalfOf());
        $this->assertFalse($invoice->getPaid());
        $this->assertFalse($invoice->getPaidOutOfBand());
        $this->assertNull($invoice->getPaymentIntent());
        $this->assertEquals((new \Datetime())->setTimestamp(1680644467), $invoice->getPeriodEnd());
        $this->assertEquals((new \Datetime())->setTimestamp(1680644467), $invoice->getPeriodStart());
        $this->assertEquals(0, $invoice->getPostPaymentCreditNotesAmount());
        $this->assertEquals(0, $invoice->getPrePaymentCreditNotesAmount());
        $this->assertNull($invoice->getQuote());
        $this->assertNull($invoice->getReceiptNumber());
        $this->assertNull($invoice->getRenderingOptions());
        $this->assertNull($invoice->getShippingCost());
        $this->assertNull($invoice->getShippingDetails());
        $this->assertEquals(0, $invoice->getStartingBalance());
        $this->assertNull($invoice->getStatementDescriptor());
        $this->assertEquals("draft", $invoice->getStatus());
        $this->assertNull($invoice->getSubscription());
        $this->assertEquals(0, $invoice->getSubtotal());
        $this->assertEquals(0, $invoice->getSubtotalExcludingTax());
        $this->assertNull($invoice->getTax());
        $this->assertNull($invoice->getTestClock());
        $this->assertEquals(0, $invoice->getTotal());
        $this->assertEquals([], $invoice->getTotalDiscountAmounts());
        $this->assertEquals(0, $invoice->getTotalExcludingTax());
        $this->assertEquals([], $invoice->getTotalTaxAmounts());
        $this->assertNull($invoice->getTransferData());
        $this->assertEquals((new \Datetime())->setTimestamp(1680644467), $invoice->getWebhooksDeliveredAt());
        $this->assertEquals(StripeObject::constructFrom([
            'enabled'   => false,
            'liability' => null,
            'status'    => null
        ]), $invoice->getAutomaticTax());
        $this->assertEquals(StripeObject::constructFrom(['type' => 'self']), $invoice->getIssuer());
        $this->assertEquals(StripeCollection::constructFrom([
            "object"      => "list",
            "data"        => [],
            "has_more"    => false,
            "total_count" => 0,
            "url"         => "/v1/invoices/in_2MtHbALkdIwHu7ixl4Ozz123/lines"
        ]), $invoice->getLines());
        $this->assertEquals(StripeObject::constructFrom([
            "default_mandate"        => null,
            "payment_method_options" => null,
            "payment_method_types"   => null,
        ]), $invoice->getPaymentSettings());
        $this->assertEquals(StripeObject::constructFrom([
            "finalized_at"            => null,
            "marked_uncollectible_at" => null,
            "paid_at"                 => null,
            "voided_at"               => null,
        ]), $invoice->getStatusTransitions());
    }
}