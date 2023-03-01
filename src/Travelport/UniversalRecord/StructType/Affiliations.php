<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Affiliations StructType
 * Meta information extracted from the WSDL
 * - documentation: Affiliations related for pre pay profiles
 * @subpackage Structs
 */
class Affiliations extends AbstractStructBase
{
    /**
     * The TravelArranger
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TravelArranger
     * @var \Travelport\UniversalRecord\StructType\TravelArranger[]
     */
    public ?array $TravelArranger = null;
    /**
     * Constructor method for Affiliations
     * @uses Affiliations::setTravelArranger()
     * @param \Travelport\UniversalRecord\StructType\TravelArranger[] $travelArranger
     */
    public function __construct(?array $travelArranger = null)
    {
        $this
            ->setTravelArranger($travelArranger);
    }
    /**
     * Get TravelArranger value
     * @return \Travelport\UniversalRecord\StructType\TravelArranger[]
     */
    public function getTravelArranger(): ?array
    {
        return $this->TravelArranger;
    }
    /**
     * Set TravelArranger value
     * @param \Travelport\UniversalRecord\StructType\TravelArranger[] $travelArranger
     * @return \Travelport\UniversalRecord\StructType\Affiliations
     */
    public function setTravelArranger(?array $travelArranger = null): self
    {
        $this->TravelArranger = $travelArranger;
        
        return $this;
    }
    /**
     * Add item to TravelArranger value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TravelArranger $item
     * @return \Travelport\UniversalRecord\StructType\Affiliations
     */
    public function addToTravelArranger(\Travelport\UniversalRecord\StructType\TravelArranger $item): self
    {
        $this->TravelArranger[] = $item;
        
        return $this;
    }
}
