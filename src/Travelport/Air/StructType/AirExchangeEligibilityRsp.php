<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirExchangeEligibilityRsp StructType
 * @subpackage Structs
 */
class AirExchangeEligibilityRsp extends BaseRsp
{
    /**
     * The ExchangeEligibilityInfo
     * Meta information extracted from the WSDL
     * - ref: ExchangeEligibilityInfo
     * @var \Travelport\Air\StructType\ExchangeEligibilityInfo|null
     */
    public ?\Travelport\Air\StructType\ExchangeEligibilityInfo $ExchangeEligibilityInfo = null;
    /**
     * Constructor method for AirExchangeEligibilityRsp
     * @uses AirExchangeEligibilityRsp::setExchangeEligibilityInfo()
     * @param \Travelport\Air\StructType\ExchangeEligibilityInfo $exchangeEligibilityInfo
     */
    public function __construct(?\Travelport\Air\StructType\ExchangeEligibilityInfo $exchangeEligibilityInfo = null)
    {
        $this
            ->setExchangeEligibilityInfo($exchangeEligibilityInfo);
    }
    /**
     * Get ExchangeEligibilityInfo value
     * @return \Travelport\Air\StructType\ExchangeEligibilityInfo|null
     */
    public function getExchangeEligibilityInfo(): ?\Travelport\Air\StructType\ExchangeEligibilityInfo
    {
        return $this->ExchangeEligibilityInfo;
    }
    /**
     * Set ExchangeEligibilityInfo value
     * @param \Travelport\Air\StructType\ExchangeEligibilityInfo $exchangeEligibilityInfo
     * @return \Travelport\Air\StructType\AirExchangeEligibilityRsp
     */
    public function setExchangeEligibilityInfo(?\Travelport\Air\StructType\ExchangeEligibilityInfo $exchangeEligibilityInfo = null): self
    {
        $this->ExchangeEligibilityInfo = $exchangeEligibilityInfo;
        
        return $this;
    }
}
