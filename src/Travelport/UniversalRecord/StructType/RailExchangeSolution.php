<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailExchangeSolution StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the fares and segments for a particular offer.
 * @subpackage Structs
 */
class RailExchangeSolution extends TypeRailPricingSolution
{
    /**
     * The RailExchangeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: RailExchangeInfo
     * @var \Travelport\UniversalRecord\StructType\RailExchangeInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\RailExchangeInfo $RailExchangeInfo = null;
    /**
     * Constructor method for RailExchangeSolution
     * @uses RailExchangeSolution::setRailExchangeInfo()
     * @param \Travelport\UniversalRecord\StructType\RailExchangeInfo $railExchangeInfo
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\RailExchangeInfo $railExchangeInfo = null)
    {
        $this
            ->setRailExchangeInfo($railExchangeInfo);
    }
    /**
     * Get RailExchangeInfo value
     * @return \Travelport\UniversalRecord\StructType\RailExchangeInfo|null
     */
    public function getRailExchangeInfo(): ?\Travelport\UniversalRecord\StructType\RailExchangeInfo
    {
        return $this->RailExchangeInfo;
    }
    /**
     * Set RailExchangeInfo value
     * @param \Travelport\UniversalRecord\StructType\RailExchangeInfo $railExchangeInfo
     * @return \Travelport\UniversalRecord\StructType\RailExchangeSolution
     */
    public function setRailExchangeInfo(?\Travelport\UniversalRecord\StructType\RailExchangeInfo $railExchangeInfo = null): self
    {
        $this->RailExchangeInfo = $railExchangeInfo;
        
        return $this;
    }
}
