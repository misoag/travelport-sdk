<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseAirPriceRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Provider: 1G,1V,1P,ACH.
 * @subpackage Structs
 */
class BaseAirPriceRsp extends BaseRsp
{
    /**
     * The AirItinerary
     * Meta information extracted from the WSDL
     * - ref: AirItinerary
     * @var \Travelport\Air\StructType\AirItinerary|null
     */
    public ?\Travelport\Air\StructType\AirItinerary $AirItinerary = null;
    /**
     * The AirPriceResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 16
     * - ref: AirPriceResult
     * @var \Travelport\Air\StructType\AirPriceResult[]
     */
    public ?array $AirPriceResult = null;
    /**
     * Constructor method for BaseAirPriceRsp
     * @uses BaseAirPriceRsp::setAirItinerary()
     * @uses BaseAirPriceRsp::setAirPriceResult()
     * @param \Travelport\Air\StructType\AirItinerary $airItinerary
     * @param \Travelport\Air\StructType\AirPriceResult[] $airPriceResult
     */
    public function __construct(?\Travelport\Air\StructType\AirItinerary $airItinerary = null, ?array $airPriceResult = null)
    {
        $this
            ->setAirItinerary($airItinerary)
            ->setAirPriceResult($airPriceResult);
    }
    /**
     * Get AirItinerary value
     * @return \Travelport\Air\StructType\AirItinerary|null
     */
    public function getAirItinerary(): ?\Travelport\Air\StructType\AirItinerary
    {
        return $this->AirItinerary;
    }
    /**
     * Set AirItinerary value
     * @param \Travelport\Air\StructType\AirItinerary $airItinerary
     * @return \Travelport\Air\StructType\BaseAirPriceRsp
     */
    public function setAirItinerary(?\Travelport\Air\StructType\AirItinerary $airItinerary = null): self
    {
        $this->AirItinerary = $airItinerary;
        
        return $this;
    }
    /**
     * Get AirPriceResult value
     * @return \Travelport\Air\StructType\AirPriceResult[]
     */
    public function getAirPriceResult(): ?array
    {
        return $this->AirPriceResult;
    }
    /**
     * Set AirPriceResult value
     * @param \Travelport\Air\StructType\AirPriceResult[] $airPriceResult
     * @return \Travelport\Air\StructType\BaseAirPriceRsp
     */
    public function setAirPriceResult(?array $airPriceResult = null): self
    {
        $this->AirPriceResult = $airPriceResult;
        
        return $this;
    }
    /**
     * Add item to AirPriceResult value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirPriceResult $item
     * @return \Travelport\Air\StructType\BaseAirPriceRsp
     */
    public function addToAirPriceResult(\Travelport\Air\StructType\AirPriceResult $item): self
    {
        $this->AirPriceResult[] = $item;
        
        return $this;
    }
}
