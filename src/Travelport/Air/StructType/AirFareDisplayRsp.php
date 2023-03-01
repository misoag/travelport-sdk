<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirFareDisplayRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Response to an AirFareDisplayReq
 * @subpackage Structs
 */
class AirFareDisplayRsp extends BaseRsp
{
    /**
     * The FareDisplay
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareDisplay
     * @var \Travelport\Air\StructType\FareDisplay[]
     */
    public ?array $FareDisplay = null;
    /**
     * Constructor method for AirFareDisplayRsp
     * @uses AirFareDisplayRsp::setFareDisplay()
     * @param \Travelport\Air\StructType\FareDisplay[] $fareDisplay
     */
    public function __construct(?array $fareDisplay = null)
    {
        $this
            ->setFareDisplay($fareDisplay);
    }
    /**
     * Get FareDisplay value
     * @return \Travelport\Air\StructType\FareDisplay[]
     */
    public function getFareDisplay(): ?array
    {
        return $this->FareDisplay;
    }
    /**
     * Set FareDisplay value
     * @param \Travelport\Air\StructType\FareDisplay[] $fareDisplay
     * @return \Travelport\Air\StructType\AirFareDisplayRsp
     */
    public function setFareDisplay(?array $fareDisplay = null): self
    {
        $this->FareDisplay = $fareDisplay;
        
        return $this;
    }
    /**
     * Add item to FareDisplay value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\FareDisplay $item
     * @return \Travelport\Air\StructType\AirFareDisplayRsp
     */
    public function addToFareDisplay(\Travelport\Air\StructType\FareDisplay $item): self
    {
        $this->FareDisplay[] = $item;
        
        return $this;
    }
}
