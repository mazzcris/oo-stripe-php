<?php

use Mazzcris\OoStripePhp\OoStripeClient;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Stripe\Service\InvoiceService;

class StripeClientTest extends TestCase
{
    private OoStripeClient $ooStripeClient;
    private InvoiceService $invoiceServiceMock;
    private \Stripe\Service\PaymentIntentService $paymentIntentServiceMock;

    protected function setUp(): void
    {
        parent::setUp();

        $this->ooStripeClient = new OoStripeClient();

        $this->invoiceServiceMock = $this->createMock(InvoiceService::class);
        $this->paymentIntentServiceMock = $this->createMock(\Stripe\Service\PaymentIntentService::class);

        $this->ooStripeClient->invoices = $this->invoiceServiceMock;
        $this->ooStripeClient->paymentIntents = $this->paymentIntentServiceMock;
    }

    #[Test]
    public function testGetInvoice()
    {
        $this->invoiceServiceMock->expects(static::once())
            ->method('retrieve')
            ->with('in_12345');

        $this->ooStripeClient->getInvoice('in_12345');
    }

    #[Test]
    public function testGetInvoiceWithParameters()
    {
        $this->invoiceServiceMock->expects(static::once())
            ->method('retrieve')
            ->with('in_12345');

        $this->ooStripeClient->getInvoice('in_12345', ['expand_field']);
    }

    #[Test]
    public function testGetPaymentIntent()
    {
        $this->paymentIntentServiceMock->expects(static::once())
            ->method('retrieve')
            ->with('pi_12345');

        $this->ooStripeClient->getPaymentIntent('pi_12345');
    }

    #[Test]
    public function testGetPaymentIntentWithParameters()
    {
        $this->paymentIntentServiceMock->expects(static::once())
            ->method('retrieve')
            ->with('pi_12345');

        $this->ooStripeClient->getPaymentIntent('pi_12345', ['expand_field']);
    }
}