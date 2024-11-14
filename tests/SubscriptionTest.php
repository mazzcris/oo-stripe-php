<?php

use Mazzcris\OoStripePhp\Subscription;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Stripe\StripeObject;

class SubscriptionTest extends TestCase
{
    #[Test]
    public function testGetters()
    {
        $subscription = Subscription::constructFrom(json_decode(file_get_contents(__DIR__ . '/fixtures/subscription.json'), true));

        $this->assertEquals('sub_1MowQVLkdIwHu7ixeRlqH123', $subscription->getId());
        $this->assertEquals('subscription', $subscription->getObject());
        $this->assertNull($subscription->getApplication());
        $this->assertNull($subscription->getApplicationFeePercent());
        $this->assertEquals(StripeObject::constructFrom([
            'enabled'   => false,
            'liability' => null
        ]), $subscription->getAutomaticTax());
        $this->assertEquals((new \DateTime())->setTimestamp(1679609767), $subscription->getBillingCycleAnchor());
        $this->assertNull($subscription->getBillingThresholds());
        $this->assertNull($subscription->getCancelAt());
        $this->assertFalse($subscription->getCancelAtPeriodEnd());
        $this->assertNull($subscription->getCanceledAt());
        $this->assertEquals(StripeObject::constructFrom([
            'comment'  => null,
            'feedback' => null,
            'reason'   => null
        ]), $subscription->getCancellationDetails());
        $this->assertEquals('charge_automatically', $subscription->getCollectionMethod());
        $this->assertEquals((new \DateTime())->setTimestamp(1679609767), $subscription->getCreated());
        $this->assertEquals('usd', $subscription->getCurrency());
        $this->assertEquals((new \DateTime())->setTimestamp(1682288167), $subscription->getCurrentPeriodEnd());
        $this->assertEquals((new \DateTime())->setTimestamp(1679609767), $subscription->getCurrentPeriodStart());
        $this->assertEquals('cus_Na6dX7aXxi1123', $subscription->getCustomer());
        $this->assertNull($subscription->getDaysUntilDue());
        $this->assertNull($subscription->getDefaultPaymentMethod());
        $this->assertNull($subscription->getDefaultSource());
        $this->assertEquals([], $subscription->getDefaultTaxRates());
        $this->assertNull($subscription->getDescription());
        $this->assertNull($subscription->getDiscount());
        $this->assertNull($subscription->getDiscounts());
        $this->assertNull($subscription->getEndedAt());
        $this->assertEquals(StripeObject::constructFrom([
            'issuer' => [
                'type' => 'self'
            ]
        ]), $subscription->getInvoiceSettings());
        $this->assertEquals(\Stripe\Collection::constructFrom(
            [
                "object"      => "list",
                "data"        => [[
                    "id"                 => "si_Na6dzxczY5f123",
                    "object"             => "subscription_item",
                    "billing_thresholds" => null,
                    "created"            => 1679609768,
                    "metadata"           => [],
                    "plan"               => [
                        "id"                => "price_1MowQULkdIwHu7ixraBm8123",
                        "object"            => "plan",
                        "active"            => true,
                        "aggregate_usage"   => null,
                        "amount"            => 1000,
                        "amount_decimal"    => "1000",
                        "billing_scheme"    => "per_unit",
                        "created"           => 1679609766,
                        "currency"          => "usd",
                        "discounts"         => null,
                        "interval"          => "month",
                        "interval_count"    => 1,
                        "livemode"          => false,
                        "metadata"          => [],
                        "nickname"          => null,
                        "product"           => "prod_Na6dGcTsmU0123",
                        "tiers_mode"        => null,
                        "transform_usage"   => null,
                        "trial_period_days" => null,
                        "usage_type"        => "licensed"
                    ],
                    "price"              => [
                        "id"                  => "price_1MowQULkdIwHu7ixraBm8123",
                        "object"              => "price",
                        "active"              => true,
                        "billing_scheme"      => "per_unit",
                        "created"             => 1679609766,
                        "currency"            => "usd",
                        "custom_unit_amount"  => null,
                        "livemode"            => false,
                        "lookup_key"          => null,
                        "metadata"            => [],
                        "nickname"            => null,
                        "product"             => "prod_Na6dGcTsmU0123",
                        "recurring"           => [
                            "aggregate_usage"   => null,
                            "interval"          => "month",
                            "interval_count"    => 1,
                            "trial_period_days" => null,
                            "usage_type"        => "licensed"
                        ],
                        "tax_behavior"        => "unspecified",
                        "tiers_mode"          => null,
                        "transform_quantity"  => null,
                        "type"                => "recurring",
                        "unit_amount"         => 1000,
                        "unit_amount_decimal" => "1000"
                    ],
                    "quantity"           => 1,
                    "subscription"       => "sub_1MowQVLkdIwHu7ixeRlqH123",
                    "tax_rates"          => []
                ]],
                "has_more"    => false,
                "total_count" => 1,
                "url"         => "/v1/subscription_items?subscription=sub_1MowQVLkdIwHu7ixeRlqH123"
            ]), $subscription->getItems());
        $this->assertEquals('in_1MowQWLkdIwHu7ixuzkSP123', $subscription->getLatestInvoice());
        $this->assertFalse($subscription->getLivemode());
        $this->assertEquals(StripeObject::constructFrom([]), $subscription->getMetadata());
        $this->assertNull($subscription->getNextPendingInvoiceItemInvoice());
        $this->assertNull($subscription->getOnBehalfOf());
        $this->assertNull($subscription->getPauseCollection());
        $this->assertEquals(StripeObject::constructFrom([
            'payment_method_options'      => null,
            'payment_method_types'        => null,
            'save_default_payment_method' => 'off'
        ]), $subscription->getPaymentSettings());
        $this->assertNull($subscription->getPendingInvoiceItemInterval());
        $this->assertNull($subscription->getPendingSetupIntent());
        $this->assertNull($subscription->getPendingUpdate());
        $this->assertNull($subscription->getSchedule());
        $this->assertEquals((new \DateTime())->setTimestamp(1679609767), $subscription->getStartDate());
        $this->assertEquals('active', $subscription->getStatus());
        $this->assertNull($subscription->getTestClock());
        $this->assertNull($subscription->getTransferData());
        $this->assertNull($subscription->getTrialEnd());
        $this->assertEquals(StripeObject::constructFrom([
            'end_behavior' => [
                'missing_payment_method' => 'create_invoice'
            ]
        ]), $subscription->getTrialSettings());
        $this->assertNull($subscription->getTrialStart());
    }
}