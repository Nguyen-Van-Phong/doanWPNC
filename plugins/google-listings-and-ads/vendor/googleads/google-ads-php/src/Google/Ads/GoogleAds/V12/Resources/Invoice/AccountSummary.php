<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/resources/invoice.proto

namespace Google\Ads\GoogleAds\V12\Resources\Invoice;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a summarized view at account level.
 * AccountSummary fields are accessible only to customers on the allow-list.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.resources.Invoice.AccountSummary</code>
 */
class AccountSummary extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The account associated with the account summary.
     *
     * Generated from protobuf field <code>optional string customer = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $customer = null;
    /**
     * Output only. Pretax billing correction subtotal amount, in micros.
     *
     * Generated from protobuf field <code>optional int64 billing_correction_subtotal_amount_micros = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $billing_correction_subtotal_amount_micros = null;
    /**
     * Output only. Tax on billing correction, in micros.
     *
     * Generated from protobuf field <code>optional int64 billing_correction_tax_amount_micros = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $billing_correction_tax_amount_micros = null;
    /**
     * Output only. Total billing correction amount, in micros.
     *
     * Generated from protobuf field <code>optional int64 billing_correction_total_amount_micros = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $billing_correction_total_amount_micros = null;
    /**
     * Output only. Pretax coupon adjustment subtotal amount, in micros.
     *
     * Generated from protobuf field <code>optional int64 coupon_adjustment_subtotal_amount_micros = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $coupon_adjustment_subtotal_amount_micros = null;
    /**
     * Output only. Tax on coupon adjustment, in micros.
     *
     * Generated from protobuf field <code>optional int64 coupon_adjustment_tax_amount_micros = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $coupon_adjustment_tax_amount_micros = null;
    /**
     * Output only. Total coupon adjustment amount, in micros.
     *
     * Generated from protobuf field <code>optional int64 coupon_adjustment_total_amount_micros = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $coupon_adjustment_total_amount_micros = null;
    /**
     * Output only. Pretax excess credit adjustment subtotal amount, in micros.
     *
     * Generated from protobuf field <code>optional int64 excess_credit_adjustment_subtotal_amount_micros = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $excess_credit_adjustment_subtotal_amount_micros = null;
    /**
     * Output only. Tax on excess credit adjustment, in micros.
     *
     * Generated from protobuf field <code>optional int64 excess_credit_adjustment_tax_amount_micros = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $excess_credit_adjustment_tax_amount_micros = null;
    /**
     * Output only. Total excess credit adjustment amount, in micros.
     *
     * Generated from protobuf field <code>optional int64 excess_credit_adjustment_total_amount_micros = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $excess_credit_adjustment_total_amount_micros = null;
    /**
     * Output only. Pretax regulatory costs subtotal amount, in micros.
     *
     * Generated from protobuf field <code>optional int64 regulatory_costs_subtotal_amount_micros = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $regulatory_costs_subtotal_amount_micros = null;
    /**
     * Output only. Tax on regulatory costs, in micros.
     *
     * Generated from protobuf field <code>optional int64 regulatory_costs_tax_amount_micros = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $regulatory_costs_tax_amount_micros = null;
    /**
     * Output only. Total regulatory costs amount, in micros.
     *
     * Generated from protobuf field <code>optional int64 regulatory_costs_total_amount_micros = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $regulatory_costs_total_amount_micros = null;
    /**
     * Output only. Total pretax subtotal amount attributable to the account during the
     * service period, in micros.
     *
     * Generated from protobuf field <code>optional int64 subtotal_amount_micros = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $subtotal_amount_micros = null;
    /**
     * Output only. Total tax amount attributable to the account during the service period,
     * in micros.
     *
     * Generated from protobuf field <code>optional int64 tax_amount_micros = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $tax_amount_micros = null;
    /**
     * Output only. Total amount attributable to the account during the service period, in
     * micros. This equals the sum of the subtotal_amount_micros and
     * tax_amount_micros.
     *
     * Generated from protobuf field <code>optional int64 total_amount_micros = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $total_amount_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer
     *           Output only. The account associated with the account summary.
     *     @type int|string $billing_correction_subtotal_amount_micros
     *           Output only. Pretax billing correction subtotal amount, in micros.
     *     @type int|string $billing_correction_tax_amount_micros
     *           Output only. Tax on billing correction, in micros.
     *     @type int|string $billing_correction_total_amount_micros
     *           Output only. Total billing correction amount, in micros.
     *     @type int|string $coupon_adjustment_subtotal_amount_micros
     *           Output only. Pretax coupon adjustment subtotal amount, in micros.
     *     @type int|string $coupon_adjustment_tax_amount_micros
     *           Output only. Tax on coupon adjustment, in micros.
     *     @type int|string $coupon_adjustment_total_amount_micros
     *           Output only. Total coupon adjustment amount, in micros.
     *     @type int|string $excess_credit_adjustment_subtotal_amount_micros
     *           Output only. Pretax excess credit adjustment subtotal amount, in micros.
     *     @type int|string $excess_credit_adjustment_tax_amount_micros
     *           Output only. Tax on excess credit adjustment, in micros.
     *     @type int|string $excess_credit_adjustment_total_amount_micros
     *           Output only. Total excess credit adjustment amount, in micros.
     *     @type int|string $regulatory_costs_subtotal_amount_micros
     *           Output only. Pretax regulatory costs subtotal amount, in micros.
     *     @type int|string $regulatory_costs_tax_amount_micros
     *           Output only. Tax on regulatory costs, in micros.
     *     @type int|string $regulatory_costs_total_amount_micros
     *           Output only. Total regulatory costs amount, in micros.
     *     @type int|string $subtotal_amount_micros
     *           Output only. Total pretax subtotal amount attributable to the account during the
     *           service period, in micros.
     *     @type int|string $tax_amount_micros
     *           Output only. Total tax amount attributable to the account during the service period,
     *           in micros.
     *     @type int|string $total_amount_micros
     *           Output only. Total amount attributable to the account during the service period, in
     *           micros. This equals the sum of the subtotal_amount_micros and
     *           tax_amount_micros.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Resources\Invoice::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The account associated with the account summary.
     *
     * Generated from protobuf field <code>optional string customer = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getCustomer()
    {
        return isset($this->customer) ? $this->customer : '';
    }

    public function hasCustomer()
    {
        return isset($this->customer);
    }

    public function clearCustomer()
    {
        unset($this->customer);
    }

    /**
     * Output only. The account associated with the account summary.
     *
     * Generated from protobuf field <code>optional string customer = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setCustomer($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer = $var;

        return $this;
    }

    /**
     * Output only. Pretax billing correction subtotal amount, in micros.
     *
     * Generated from protobuf field <code>optional int64 billing_correction_subtotal_amount_micros = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getBillingCorrectionSubtotalAmountMicros()
    {
        return isset($this->billing_correction_subtotal_amount_micros) ? $this->billing_correction_subtotal_amount_micros : 0;
    }

    public function hasBillingCorrectionSubtotalAmountMicros()
    {
        return isset($this->billing_correction_subtotal_amount_micros);
    }

    public function clearBillingCorrectionSubtotalAmountMicros()
    {
        unset($this->billing_correction_subtotal_amount_micros);
    }

    /**
     * Output only. Pretax billing correction subtotal amount, in micros.
     *
     * Generated from protobuf field <code>optional int64 billing_correction_subtotal_amount_micros = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setBillingCorrectionSubtotalAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->billing_correction_subtotal_amount_micros = $var;

        return $this;
    }

    /**
     * Output only. Tax on billing correction, in micros.
     *
     * Generated from protobuf field <code>optional int64 billing_correction_tax_amount_micros = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getBillingCorrectionTaxAmountMicros()
    {
        return isset($this->billing_correction_tax_amount_micros) ? $this->billing_correction_tax_amount_micros : 0;
    }

    public function hasBillingCorrectionTaxAmountMicros()
    {
        return isset($this->billing_correction_tax_amount_micros);
    }

    public function clearBillingCorrectionTaxAmountMicros()
    {
        unset($this->billing_correction_tax_amount_micros);
    }

    /**
     * Output only. Tax on billing correction, in micros.
     *
     * Generated from protobuf field <code>optional int64 billing_correction_tax_amount_micros = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setBillingCorrectionTaxAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->billing_correction_tax_amount_micros = $var;

        return $this;
    }

    /**
     * Output only. Total billing correction amount, in micros.
     *
     * Generated from protobuf field <code>optional int64 billing_correction_total_amount_micros = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getBillingCorrectionTotalAmountMicros()
    {
        return isset($this->billing_correction_total_amount_micros) ? $this->billing_correction_total_amount_micros : 0;
    }

    public function hasBillingCorrectionTotalAmountMicros()
    {
        return isset($this->billing_correction_total_amount_micros);
    }

    public function clearBillingCorrectionTotalAmountMicros()
    {
        unset($this->billing_correction_total_amount_micros);
    }

    /**
     * Output only. Total billing correction amount, in micros.
     *
     * Generated from protobuf field <code>optional int64 billing_correction_total_amount_micros = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setBillingCorrectionTotalAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->billing_correction_total_amount_micros = $var;

        return $this;
    }

    /**
     * Output only. Pretax coupon adjustment subtotal amount, in micros.
     *
     * Generated from protobuf field <code>optional int64 coupon_adjustment_subtotal_amount_micros = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getCouponAdjustmentSubtotalAmountMicros()
    {
        return isset($this->coupon_adjustment_subtotal_amount_micros) ? $this->coupon_adjustment_subtotal_amount_micros : 0;
    }

    public function hasCouponAdjustmentSubtotalAmountMicros()
    {
        return isset($this->coupon_adjustment_subtotal_amount_micros);
    }

    public function clearCouponAdjustmentSubtotalAmountMicros()
    {
        unset($this->coupon_adjustment_subtotal_amount_micros);
    }

    /**
     * Output only. Pretax coupon adjustment subtotal amount, in micros.
     *
     * Generated from protobuf field <code>optional int64 coupon_adjustment_subtotal_amount_micros = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCouponAdjustmentSubtotalAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->coupon_adjustment_subtotal_amount_micros = $var;

        return $this;
    }

    /**
     * Output only. Tax on coupon adjustment, in micros.
     *
     * Generated from protobuf field <code>optional int64 coupon_adjustment_tax_amount_micros = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getCouponAdjustmentTaxAmountMicros()
    {
        return isset($this->coupon_adjustment_tax_amount_micros) ? $this->coupon_adjustment_tax_amount_micros : 0;
    }

    public function hasCouponAdjustmentTaxAmountMicros()
    {
        return isset($this->coupon_adjustment_tax_amount_micros);
    }

    public function clearCouponAdjustmentTaxAmountMicros()
    {
        unset($this->coupon_adjustment_tax_amount_micros);
    }

    /**
     * Output only. Tax on coupon adjustment, in micros.
     *
     * Generated from protobuf field <code>optional int64 coupon_adjustment_tax_amount_micros = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCouponAdjustmentTaxAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->coupon_adjustment_tax_amount_micros = $var;

        return $this;
    }

    /**
     * Output only. Total coupon adjustment amount, in micros.
     *
     * Generated from protobuf field <code>optional int64 coupon_adjustment_total_amount_micros = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getCouponAdjustmentTotalAmountMicros()
    {
        return isset($this->coupon_adjustment_total_amount_micros) ? $this->coupon_adjustment_total_amount_micros : 0;
    }

    public function hasCouponAdjustmentTotalAmountMicros()
    {
        return isset($this->coupon_adjustment_total_amount_micros);
    }

    public function clearCouponAdjustmentTotalAmountMicros()
    {
        unset($this->coupon_adjustment_total_amount_micros);
    }

    /**
     * Output only. Total coupon adjustment amount, in micros.
     *
     * Generated from protobuf field <code>optional int64 coupon_adjustment_total_amount_micros = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCouponAdjustmentTotalAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->coupon_adjustment_total_amount_micros = $var;

        return $this;
    }

    /**
     * Output only. Pretax excess credit adjustment subtotal amount, in micros.
     *
     * Generated from protobuf field <code>optional int64 excess_credit_adjustment_subtotal_amount_micros = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getExcessCreditAdjustmentSubtotalAmountMicros()
    {
        return isset($this->excess_credit_adjustment_subtotal_amount_micros) ? $this->excess_credit_adjustment_subtotal_amount_micros : 0;
    }

    public function hasExcessCreditAdjustmentSubtotalAmountMicros()
    {
        return isset($this->excess_credit_adjustment_subtotal_amount_micros);
    }

    public function clearExcessCreditAdjustmentSubtotalAmountMicros()
    {
        unset($this->excess_credit_adjustment_subtotal_amount_micros);
    }

    /**
     * Output only. Pretax excess credit adjustment subtotal amount, in micros.
     *
     * Generated from protobuf field <code>optional int64 excess_credit_adjustment_subtotal_amount_micros = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setExcessCreditAdjustmentSubtotalAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->excess_credit_adjustment_subtotal_amount_micros = $var;

        return $this;
    }

    /**
     * Output only. Tax on excess credit adjustment, in micros.
     *
     * Generated from protobuf field <code>optional int64 excess_credit_adjustment_tax_amount_micros = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getExcessCreditAdjustmentTaxAmountMicros()
    {
        return isset($this->excess_credit_adjustment_tax_amount_micros) ? $this->excess_credit_adjustment_tax_amount_micros : 0;
    }

    public function hasExcessCreditAdjustmentTaxAmountMicros()
    {
        return isset($this->excess_credit_adjustment_tax_amount_micros);
    }

    public function clearExcessCreditAdjustmentTaxAmountMicros()
    {
        unset($this->excess_credit_adjustment_tax_amount_micros);
    }

    /**
     * Output only. Tax on excess credit adjustment, in micros.
     *
     * Generated from protobuf field <code>optional int64 excess_credit_adjustment_tax_amount_micros = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setExcessCreditAdjustmentTaxAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->excess_credit_adjustment_tax_amount_micros = $var;

        return $this;
    }

    /**
     * Output only. Total excess credit adjustment amount, in micros.
     *
     * Generated from protobuf field <code>optional int64 excess_credit_adjustment_total_amount_micros = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getExcessCreditAdjustmentTotalAmountMicros()
    {
        return isset($this->excess_credit_adjustment_total_amount_micros) ? $this->excess_credit_adjustment_total_amount_micros : 0;
    }

    public function hasExcessCreditAdjustmentTotalAmountMicros()
    {
        return isset($this->excess_credit_adjustment_total_amount_micros);
    }

    public function clearExcessCreditAdjustmentTotalAmountMicros()
    {
        unset($this->excess_credit_adjustment_total_amount_micros);
    }

    /**
     * Output only. Total excess credit adjustment amount, in micros.
     *
     * Generated from protobuf field <code>optional int64 excess_credit_adjustment_total_amount_micros = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setExcessCreditAdjustmentTotalAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->excess_credit_adjustment_total_amount_micros = $var;

        return $this;
    }

    /**
     * Output only. Pretax regulatory costs subtotal amount, in micros.
     *
     * Generated from protobuf field <code>optional int64 regulatory_costs_subtotal_amount_micros = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getRegulatoryCostsSubtotalAmountMicros()
    {
        return isset($this->regulatory_costs_subtotal_amount_micros) ? $this->regulatory_costs_subtotal_amount_micros : 0;
    }

    public function hasRegulatoryCostsSubtotalAmountMicros()
    {
        return isset($this->regulatory_costs_subtotal_amount_micros);
    }

    public function clearRegulatoryCostsSubtotalAmountMicros()
    {
        unset($this->regulatory_costs_subtotal_amount_micros);
    }

    /**
     * Output only. Pretax regulatory costs subtotal amount, in micros.
     *
     * Generated from protobuf field <code>optional int64 regulatory_costs_subtotal_amount_micros = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setRegulatoryCostsSubtotalAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->regulatory_costs_subtotal_amount_micros = $var;

        return $this;
    }

    /**
     * Output only. Tax on regulatory costs, in micros.
     *
     * Generated from protobuf field <code>optional int64 regulatory_costs_tax_amount_micros = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getRegulatoryCostsTaxAmountMicros()
    {
        return isset($this->regulatory_costs_tax_amount_micros) ? $this->regulatory_costs_tax_amount_micros : 0;
    }

    public function hasRegulatoryCostsTaxAmountMicros()
    {
        return isset($this->regulatory_costs_tax_amount_micros);
    }

    public function clearRegulatoryCostsTaxAmountMicros()
    {
        unset($this->regulatory_costs_tax_amount_micros);
    }

    /**
     * Output only. Tax on regulatory costs, in micros.
     *
     * Generated from protobuf field <code>optional int64 regulatory_costs_tax_amount_micros = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setRegulatoryCostsTaxAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->regulatory_costs_tax_amount_micros = $var;

        return $this;
    }

    /**
     * Output only. Total regulatory costs amount, in micros.
     *
     * Generated from protobuf field <code>optional int64 regulatory_costs_total_amount_micros = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getRegulatoryCostsTotalAmountMicros()
    {
        return isset($this->regulatory_costs_total_amount_micros) ? $this->regulatory_costs_total_amount_micros : 0;
    }

    public function hasRegulatoryCostsTotalAmountMicros()
    {
        return isset($this->regulatory_costs_total_amount_micros);
    }

    public function clearRegulatoryCostsTotalAmountMicros()
    {
        unset($this->regulatory_costs_total_amount_micros);
    }

    /**
     * Output only. Total regulatory costs amount, in micros.
     *
     * Generated from protobuf field <code>optional int64 regulatory_costs_total_amount_micros = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setRegulatoryCostsTotalAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->regulatory_costs_total_amount_micros = $var;

        return $this;
    }

    /**
     * Output only. Total pretax subtotal amount attributable to the account during the
     * service period, in micros.
     *
     * Generated from protobuf field <code>optional int64 subtotal_amount_micros = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getSubtotalAmountMicros()
    {
        return isset($this->subtotal_amount_micros) ? $this->subtotal_amount_micros : 0;
    }

    public function hasSubtotalAmountMicros()
    {
        return isset($this->subtotal_amount_micros);
    }

    public function clearSubtotalAmountMicros()
    {
        unset($this->subtotal_amount_micros);
    }

    /**
     * Output only. Total pretax subtotal amount attributable to the account during the
     * service period, in micros.
     *
     * Generated from protobuf field <code>optional int64 subtotal_amount_micros = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSubtotalAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->subtotal_amount_micros = $var;

        return $this;
    }

    /**
     * Output only. Total tax amount attributable to the account during the service period,
     * in micros.
     *
     * Generated from protobuf field <code>optional int64 tax_amount_micros = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getTaxAmountMicros()
    {
        return isset($this->tax_amount_micros) ? $this->tax_amount_micros : 0;
    }

    public function hasTaxAmountMicros()
    {
        return isset($this->tax_amount_micros);
    }

    public function clearTaxAmountMicros()
    {
        unset($this->tax_amount_micros);
    }

    /**
     * Output only. Total tax amount attributable to the account during the service period,
     * in micros.
     *
     * Generated from protobuf field <code>optional int64 tax_amount_micros = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTaxAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->tax_amount_micros = $var;

        return $this;
    }

    /**
     * Output only. Total amount attributable to the account during the service period, in
     * micros. This equals the sum of the subtotal_amount_micros and
     * tax_amount_micros.
     *
     * Generated from protobuf field <code>optional int64 total_amount_micros = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getTotalAmountMicros()
    {
        return isset($this->total_amount_micros) ? $this->total_amount_micros : 0;
    }

    public function hasTotalAmountMicros()
    {
        return isset($this->total_amount_micros);
    }

    public function clearTotalAmountMicros()
    {
        unset($this->total_amount_micros);
    }

    /**
     * Output only. Total amount attributable to the account during the service period, in
     * micros. This equals the sum of the subtotal_amount_micros and
     * tax_amount_micros.
     *
     * Generated from protobuf field <code>optional int64 total_amount_micros = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_amount_micros = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccountSummary::class, \Google\Ads\GoogleAds\V12\Resources\Invoice_AccountSummary::class);

