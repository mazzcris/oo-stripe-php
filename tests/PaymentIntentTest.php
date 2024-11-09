<?php

use Mazzcris\OoStripePhp\PaymentIntent;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Stripe\StripeObject;

class PaymentIntentTest extends TestCase
{
    #[Test]
    public function testGetters()
    {
        $paymentIntent = PaymentIntent::constructFrom(json_decode(file_get_contents(__DIR__ . '/fixtures/paymentIntent.json'), true));

        $this->assertEquals('pi_3MtwBwLkdIwHu7ix28a3t123', $paymentIntent->getId());
        $this->assertEquals('payment_intent', $paymentIntent->getObject());
        $this->assertEquals(2000, $paymentIntent->getAmount());
        $this->assertEquals(0, $paymentIntent->getAmountCapturable());
        $this->assertEquals(StripeObject::constructFrom(['tip' => []]), $paymentIntent->getAmountDetails());
        $this->assertEquals(0, $paymentIntent->getAmountReceived());
        $this->assertNull($paymentIntent->getApplication());
        $this->assertNull($paymentIntent->getApplicationFeeAmount());
        $this->assertEquals(StripeObject::constructFrom(['enabled' => true]), $paymentIntent->getAutomaticPaymentMethods());
        $this->assertNull($paymentIntent->getCanceledAt());
        $this->assertNull($paymentIntent->getCancellationReason());
        $this->assertEquals('automatic', $paymentIntent->getCaptureMethod());
        $this->assertEquals('pi_3MtwBwLkdIwHu7ix28a3t123_secret_YrKJUKribcBjcG8HVhfZlu123', $paymentIntent->getClientSecret());
        $this->assertEquals('automatic', $paymentIntent->getConfirmationMethod());
        $this->assertEquals((new \DateTime())->setTimestamp(1680800504), $paymentIntent->getCreated());
        $this->assertEquals('usd', $paymentIntent->getCurrency());
        $this->assertNull($paymentIntent->getCustomer());
        $this->assertNull($paymentIntent->getDescription());
        $this->assertNull($paymentIntent->getInvoice());
        $this->assertNull($paymentIntent->getLastPaymentError());
        $this->assertNull($paymentIntent->getLatestCharge());
        $this->assertFalse($paymentIntent->getLivemode());
        $this->assertEquals(new StripeObject(), $paymentIntent->getMetadata());
        $this->assertNull($paymentIntent->getNextAction());
        $this->assertNull($paymentIntent->getOnBehalfOf());
        $this->assertNull($paymentIntent->getPaymentMethod());
        $this->assertEquals(StripeObject::constructFrom([
            'card' => [
                'installments'           => null,
                'mandate_options'        => null,
                'network'                => null,
                'request_three_d_secure' => "automatic"
            ],
            'link' => [
                'persistent_token' => null
            ]
        ]), $paymentIntent->getPaymentMethodOptions());

        $this->assertEquals(['card', 'link'], $paymentIntent->getPaymentMethodTypes());
        $this->assertNull($paymentIntent->getProcessing());
        $this->assertNull($paymentIntent->getReceiptEmail());
        $this->assertNull($paymentIntent->getReview());
        $this->assertNull($paymentIntent->getSetupFutureUsage());
        $this->assertNull($paymentIntent->getShipping());
        $this->assertNull($paymentIntent->getSource());
        $this->assertNull($paymentIntent->getStatementDescriptor());
        $this->assertNull($paymentIntent->getStatementDescriptorSuffix());
        $this->assertEquals('requires_payment_method', $paymentIntent->getStatus());
        $this->assertTrue($paymentIntent->requiresPaymentMethod());
        $this->assertNull($paymentIntent->getTransferData());
        $this->assertNull($paymentIntent->getTransferGroup());

    }
}