<?php

namespace Mazzcris\OoStripePhp;

/**
 * @method getId()
 * @method getObject()
 * @method getBillingThresholds()
 * @method getCreated()
 * @method getMetadata()
 * @method getPlan()
 * @method getPrice()
 * @method getQuantity()
 * @method getSubscription()
 * @method getTaxRates()
 */
class OoSubscriptionItem extends \Stripe\SubscriptionItem
{
    use DynamicGetterTrait;
}