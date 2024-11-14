<?php

namespace Mazzcris\OoStripePhp;

/**
 * @method getId()
 * @method getObject()
 * @method getApplication()
 * @method getApplicationFeePercent()
 * @method getAutomaticTax()
 * @method getBillingCycleAnchor()
 * @method getBillingThresholds()
 * @method getCancelAt()
 * @method getCancelAtPeriodEnd()
 * @method getCanceledAt()
 * @method getCancellationDetails()
 * @method getCollectionMethod()
 * @method getCreated()
 * @method getCurrency()
 * @method getCurrentPeriodEnd()
 * @method getCurrentPeriodStart()
 * @method getCustomer()
 * @method getDaysUntilDue()
 * @method getDefaultPaymentMethod()
 * @method getDefaultSource()
 * @method getDefaultTaxRates()
 * @method getDescription()
 * @method getDiscount()
 * @method getDiscounts()
 * @method getEndedAt()
 * @method getInvoiceSettings()
 */
class Subscription extends \Stripe\Subscription
{
    use DynamicGetterTrait;
}