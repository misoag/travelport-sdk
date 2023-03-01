<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\RailExchangeInfo|null
     */
    public ?\Travelport\Air\StructType\RailExchangeInfo $RailExchangeInfo = null;
    /**
     * Constructor method for RailExchangeSolution
     * @uses RailExchangeSolution::setRailExchangeInfo()
     * @param \Travelport\Air\StructType\RailExchangeInfo $railExchangeInfo
     */
    public function __construct(?\Travelport\Air\StructType\RailExchangeInfo $railExchangeInfo = null)
    {
        $this
            ->setRailExchangeInfo($railExchangeInfo);
    }
    /**
     * Get RailExchangeInfo value
     * @return \Travelport\Air\StructType\RailExchangeInfo|null
     */
    public function getRailExchangeInfo(): ?\Travelport\Air\StructType\RailExchangeInfo
    {
        return $this->RailExchangeInfo;
    }
    /**
     * Set RailExchangeInfo value
     * @param \Travelport\Air\StructType\RailExchangeInfo $railExchangeInfo
     * @return \Travelport\Air\StructType\RailExchangeSolution
     */
    public function setRailExchangeInfo(?\Travelport\Air\StructType\RailExchangeInfo $railExchangeInfo = null): self
    {
        $this->RailExchangeInfo = $railExchangeInfo;
        
        return $this;
    }
}
