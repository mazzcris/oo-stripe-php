<?php

namespace Mazzcris\OoStripePhp;

/**
 * @method getId()
 * @method getObject()
 * @method getAccountCountry()
 * @method getAccountName()
 * @method getAccountTaxIds()
 * @method getAmountDue()
 * @method getAmountPaid()
 * @method getAmountRemaining()
 * @method getAmountShipping()
 * @method getApplication()
 * @method getApplicationFeeAmount()
 * @method getAttemptCount()
 * @method getAttempted()
 * @method getAutoAdvance()
 * @method getBillingReason()
 * @method getCharge()
 * @method getCollectionMethod()
 * @method getCreated()
 * @method getCurrency()
 * @method getCustomFields()
 * @method getCustomer()
 * @method getCustomerAddress()
 * @method getCustomerEmail()
 * @method getCustomerName()
 * @method getCustomerPhone()
 * @method getCustomerShipping()
 * @method getCustomerTaxExempt()
 * @method getCustomerTaxIds()
 * @method getDefaultPaymentMethod()
 * @method getDefaultSource()
 * @method getDefaultTaxRates()
 * @method getDescription()
 * @method getDiscount()
 * @method getDiscounts()
 * @method getDueDate()
 * @method getEndingBalance()
 * @method getFooter()
 * @method getFromInvoice()
 * @method getHostedInvoiceUrl()
 * @method getInvoicePdf()
 * @method getLastFinalizationError()
 * @method getLatestRevision()
 * @method getLivemode()
 * @method getMetadata()
 * @method getNextPaymentAttempt()
 * @method getNumber()
 * @method getOnBehalfOf()
 * @method getPaid()
 * @method getPaidOutOfBand()
 * @method getPaymentIntent()
 * @method getPeriodEnd()
 * @method getPeriodStart()
 * @method getPostPaymentCreditNotesAmount()
 * @method getPrePaymentCreditNotesAmount()
 * @method getQuote()
 * @method getReceiptNumber()
 * @method getRenderingOptions()
 * @method getShippingCost()
 * @method getShippingDetails()
 * @method getStartingBalance()
 * @method getStatementDescriptor()
 * @method getStatus()
 * @method getSubscription()
 * @method getSubtotal()
 * @method getSubtotalExcludingTax()
 * @method getTax()
 * @method getTestClock()
 * @method getTotal()
 * @method getTotalDiscountAmounts()
 * @method getTotalExcludingTax()
 * @method getTotalTaxAmounts()
 * @method getTransferData()
 * @method getWebhooksDeliveredAt()
 * @method getAutomaticTax()
 * @method getIssuer()
 * @method getLines()
 * @method getPaymentSettings()
 * @method getStatusTransitions()
 */
class OoInvoice extends \Stripe\Invoice
{
    use DynamicGetterTrait;

    public function getCreatedAt()
    {
        return $this->getCreated();
    }
}