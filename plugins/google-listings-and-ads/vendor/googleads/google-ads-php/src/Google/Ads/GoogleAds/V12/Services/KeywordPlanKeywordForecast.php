<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/services/keyword_plan_service.proto

namespace Google\Ads\GoogleAds\V12\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A keyword forecast.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.services.KeywordPlanKeywordForecast</code>
 */
class KeywordPlanKeywordForecast extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the Keyword Plan keyword related to the forecast.
     * `customers/{customer_id}/keywordPlanAdGroupKeywords/{keyword_plan_ad_group_keyword_id}`
     *
     * Generated from protobuf field <code>optional string keyword_plan_ad_group_keyword = 3;</code>
     */
    protected $keyword_plan_ad_group_keyword = null;
    /**
     * The forecast for the Keyword Plan keyword.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.services.ForecastMetrics keyword_forecast = 2;</code>
     */
    protected $keyword_forecast = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $keyword_plan_ad_group_keyword
     *           The resource name of the Keyword Plan keyword related to the forecast.
     *           `customers/{customer_id}/keywordPlanAdGroupKeywords/{keyword_plan_ad_group_keyword_id}`
     *     @type \Google\Ads\GoogleAds\V12\Services\ForecastMetrics $keyword_forecast
     *           The forecast for the Keyword Plan keyword.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Services\KeywordPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the Keyword Plan keyword related to the forecast.
     * `customers/{customer_id}/keywordPlanAdGroupKeywords/{keyword_plan_ad_group_keyword_id}`
     *
     * Generated from protobuf field <code>optional string keyword_plan_ad_group_keyword = 3;</code>
     * @return string
     */
    public function getKeywordPlanAdGroupKeyword()
    {
        return isset($this->keyword_plan_ad_group_keyword) ? $this->keyword_plan_ad_group_keyword : '';
    }

    public function hasKeywordPlanAdGroupKeyword()
    {
        return isset($this->keyword_plan_ad_group_keyword);
    }

    public function clearKeywordPlanAdGroupKeyword()
    {
        unset($this->keyword_plan_ad_group_keyword);
    }

    /**
     * The resource name of the Keyword Plan keyword related to the forecast.
     * `customers/{customer_id}/keywordPlanAdGroupKeywords/{keyword_plan_ad_group_keyword_id}`
     *
     * Generated from protobuf field <code>optional string keyword_plan_ad_group_keyword = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setKeywordPlanAdGroupKeyword($var)
    {
        GPBUtil::checkString($var, True);
        $this->keyword_plan_ad_group_keyword = $var;

        return $this;
    }

    /**
     * The forecast for the Keyword Plan keyword.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.services.ForecastMetrics keyword_forecast = 2;</code>
     * @return \Google\Ads\GoogleAds\V12\Services\ForecastMetrics|null
     */
    public function getKeywordForecast()
    {
        return $this->keyword_forecast;
    }

    public function hasKeywordForecast()
    {
        return isset($this->keyword_forecast);
    }

    public function clearKeywordForecast()
    {
        unset($this->keyword_forecast);
    }

    /**
     * The forecast for the Keyword Plan keyword.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.services.ForecastMetrics keyword_forecast = 2;</code>
     * @param \Google\Ads\GoogleAds\V12\Services\ForecastMetrics $var
     * @return $this
     */
    public function setKeywordForecast($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V12\Services\ForecastMetrics::class);
        $this->keyword_forecast = $var;

        return $this;
    }

}

