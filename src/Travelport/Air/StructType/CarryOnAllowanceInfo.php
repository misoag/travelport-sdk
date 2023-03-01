<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarryOnAllowanceInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Information related to Carry-On allowance like URL, pricing etc
 * @subpackage Structs
 */
class CarryOnAllowanceInfo extends BaseBaggageAllowanceInfo
{
    /**
     * The CarryOnDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\CarryOnDetails[]
     */
    public ?array $CarryOnDetails = null;
    /**
     * Constructor method for CarryOnAllowanceInfo
     * @uses CarryOnAllowanceInfo::setCarryOnDetails()
     * @param \Travelport\Air\StructType\CarryOnDetails[] $carryOnDetails
     */
    public function __construct(?array $carryOnDetails = null)
    {
        $this
            ->setCarryOnDetails($carryOnDetails);
    }
    /**
     * Get CarryOnDetails value
     * @return \Travelport\Air\StructType\CarryOnDetails[]
     */
    public function getCarryOnDetails(): ?array
    {
        return $this->CarryOnDetails;
    }
    /**
     * Set CarryOnDetails value
     * @param \Travelport\Air\StructType\CarryOnDetails[] $carryOnDetails
     * @return \Travelport\Air\StructType\CarryOnAllowanceInfo
     */
    public function setCarryOnDetails(?array $carryOnDetails = null): self
    {
        $this->CarryOnDetails = $carryOnDetails;
        
        return $this;
    }
    /**
     * Add item to CarryOnDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\CarryOnDetails $item
     * @return \Travelport\Air\StructType\CarryOnAllowanceInfo
     */
    public function addToCarryOnDetails(\Travelport\Air\StructType\CarryOnDetails $item): self
    {
        $this->CarryOnDetails[] = $item;
        
        return $this;
    }
}
