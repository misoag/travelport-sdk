<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirPricePointList StructType
 * Meta information extracted from the WSDL
 * - documentation: The container which holds the Non Solutioned result. Different options for each search leg requested will be returned and one option for each search leg can be selected. | Provides the list of AirPricePoint (Non Solutioned Result)
 * @subpackage Structs
 */
class AirPricePointList extends AbstractStructBase
{
    /**
     * The AirPricePoint
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirPricePoint
     * @var \Travelport\UniversalRecord\StructType\AirPricePoint[]
     */
    public ?array $AirPricePoint = null;
    /**
     * Constructor method for AirPricePointList
     * @uses AirPricePointList::setAirPricePoint()
     * @param \Travelport\UniversalRecord\StructType\AirPricePoint[] $airPricePoint
     */
    public function __construct(?array $airPricePoint = null)
    {
        $this
            ->setAirPricePoint($airPricePoint);
    }
    /**
     * Get AirPricePoint value
     * @return \Travelport\UniversalRecord\StructType\AirPricePoint[]
     */
    public function getAirPricePoint(): ?array
    {
        return $this->AirPricePoint;
    }
    /**
     * Set AirPricePoint value
     * @param \Travelport\UniversalRecord\StructType\AirPricePoint[] $airPricePoint
     * @return \Travelport\UniversalRecord\StructType\AirPricePointList
     */
    public function setAirPricePoint(?array $airPricePoint = null): self
    {
        $this->AirPricePoint = $airPricePoint;
        
        return $this;
    }
    /**
     * Add item to AirPricePoint value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricePoint $item
     * @return \Travelport\UniversalRecord\StructType\AirPricePointList
     */
    public function addToAirPricePoint(\Travelport\UniversalRecord\StructType\AirPricePoint $item): self
    {
        $this->AirPricePoint[] = $item;
        
        return $this;
    }
}
