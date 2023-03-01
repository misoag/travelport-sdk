<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirRepriceRsp StructType
 * @subpackage Structs
 */
class AirRepriceRsp extends BaseRsp
{
    /**
     * The AirPricingSolution
     * Meta information extracted from the WSDL
     * - ref: AirPricingSolution
     * @var \Travelport\Air\StructType\AirPricingSolution|null
     */
    public ?\Travelport\Air\StructType\AirPricingSolution $AirPricingSolution = null;
    /**
     * The FareRule
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareRule
     * @var \Travelport\Air\StructType\FareRule[]
     */
    public ?array $FareRule = null;
    /**
     * Constructor method for AirRepriceRsp
     * @uses AirRepriceRsp::setAirPricingSolution()
     * @uses AirRepriceRsp::setFareRule()
     * @param \Travelport\Air\StructType\AirPricingSolution $airPricingSolution
     * @param \Travelport\Air\StructType\FareRule[] $fareRule
     */
    public function __construct(?\Travelport\Air\StructType\AirPricingSolution $airPricingSolution = null, ?array $fareRule = null)
    {
        $this
            ->setAirPricingSolution($airPricingSolution)
            ->setFareRule($fareRule);
    }
    /**
     * Get AirPricingSolution value
     * @return \Travelport\Air\StructType\AirPricingSolution|null
     */
    public function getAirPricingSolution(): ?\Travelport\Air\StructType\AirPricingSolution
    {
        return $this->AirPricingSolution;
    }
    /**
     * Set AirPricingSolution value
     * @param \Travelport\Air\StructType\AirPricingSolution $airPricingSolution
     * @return \Travelport\Air\StructType\AirRepriceRsp
     */
    public function setAirPricingSolution(?\Travelport\Air\StructType\AirPricingSolution $airPricingSolution = null): self
    {
        $this->AirPricingSolution = $airPricingSolution;
        
        return $this;
    }
    /**
     * Get FareRule value
     * @return \Travelport\Air\StructType\FareRule[]
     */
    public function getFareRule(): ?array
    {
        return $this->FareRule;
    }
    /**
     * Set FareRule value
     * @param \Travelport\Air\StructType\FareRule[] $fareRule
     * @return \Travelport\Air\StructType\AirRepriceRsp
     */
    public function setFareRule(?array $fareRule = null): self
    {
        $this->FareRule = $fareRule;
        
        return $this;
    }
    /**
     * Add item to FareRule value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\FareRule $item
     * @return \Travelport\Air\StructType\AirRepriceRsp
     */
    public function addToFareRule(\Travelport\Air\StructType\FareRule $item): self
    {
        $this->FareRule[] = $item;
        
        return $this;
    }
}
