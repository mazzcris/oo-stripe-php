<?php

namespace Mazzcris\OoStripePhp;

/**
 * @method getId()
 * @method getObject()
 * @method getAmount()
 * @method getAmountCapturable()
 * @method getAmountDetails()
 * @method getAmountReceived()
 * @method getApplication()
 * @method getApplicationFeeAmount()
 * @method getAutomaticPaymentMethods()
 * @method getCanceledAt()
 * @method getCancellationReason()
 * @method getCaptureMethod()
 * @method getClientSecret()
 * @method getConfirmationMethod()
 * @method getCreated()
 * @method getCurrency()
 * @method getCustomer()
 * @method getDescription()
 * @method getInvoice()
 * @method getLastPaymentError()
 * @method getLatestCharge()
 * @method getLivemode()
 * @method getMetadata()
 * @method getNextAction()
 * @method getOnBehalfOf()
 * @method getPaymentMethod()
 * @method getPaymentMethodOptions()
 * @method getPaymentMethodTypes()
 * @method getProcessing()
 * @method getReceiptEmail()
 * @method getReview()
 * @method getSetupFutureUsage()
 * @method getShipping()
 * @method getSource()
 * @method getStatementDescriptor()
 * @method getStatementDescriptorSuffix()
 * @method getStatus()
 * @method getTransferData()
 * @method getTransferGroup()
 */
class OoPaymentIntent extends \Stripe\PaymentIntent
{
    use DynamicGetterTrait;

    public function requiresPaymentMethod(): bool
    {
        return 'requires_payment_method' == $this->getStatus();
    }
}