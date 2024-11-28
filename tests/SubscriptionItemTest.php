<?php

use Mazzcris\OoStripePhp\OoSubscriptionItem;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Stripe\StripeObject;

class SubscriptionItemTest extends TestCase
{
    #[Test]
    public function testGetters()
    {
        $subscriptionItem = OoSubscriptionItem::constructFrom(json_decode(file_get_contents(__DIR__ . '/fixtures/subscriptionItem.json'), true));

        $this->assertEquals('si_Na6dzxczY5f123', $subscriptionItem->getId());
        $this->assertEquals('subscription_item', $subscriptionItem->getObject());
        $this->assertNull($subscriptionItem->getBillingThresholds());
        $this->assertEquals((new \DateTime())->setTimestamp(1679609768), $subscriptionItem->getCreated());
        $this->assertEquals(new StripeObject(), $subscriptionItem->getMetadata());
        $this->assertEquals(\Stripe\Plan::constructFrom(
            [
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
            ]
        ), $subscriptionItem->getPlan());

        $this->assertEquals(\Stripe\Price::constructFrom(
            [
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
                "recurring"           =>
                    [
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
            ]
        ), $subscriptionItem->getPrice());

        $this->assertEquals(1, $subscriptionItem->getQuantity());
        $this->assertEquals('sub_1MowQVLkdIwHu7ixeRlqH123', $subscriptionItem->getSubscription());
        $this->assertEquals([], $subscriptionItem->getTaxRates());
    }
}