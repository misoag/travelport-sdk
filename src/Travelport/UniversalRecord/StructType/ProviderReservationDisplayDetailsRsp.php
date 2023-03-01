<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProviderReservationDisplayDetailsRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Response to display the addtional details of provider reservation information .
 * @subpackage Structs
 */
class ProviderReservationDisplayDetailsRsp extends BaseRsp
{
    /**
     * The DisplayDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: DisplayDetails
     * @var \Travelport\UniversalRecord\StructType\DisplayDetails[]
     */
    public ?array $DisplayDetails = null;
    /**
     * Constructor method for ProviderReservationDisplayDetailsRsp
     * @uses ProviderReservationDisplayDetailsRsp::setDisplayDetails()
     * @param \Travelport\UniversalRecord\StructType\DisplayDetails[] $displayDetails
     */
    public function __construct(?array $displayDetails = null)
    {
        $this
            ->setDisplayDetails($displayDetails);
    }
    /**
     * Get DisplayDetails value
     * @return \Travelport\UniversalRecord\StructType\DisplayDetails[]
     */
    public function getDisplayDetails(): ?array
    {
        return $this->DisplayDetails;
    }
    /**
     * Set DisplayDetails value
     * @param \Travelport\UniversalRecord\StructType\DisplayDetails[] $displayDetails
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsRsp
     */
    public function setDisplayDetails(?array $displayDetails = null): self
    {
        $this->DisplayDetails = $displayDetails;
        
        return $this;
    }
    /**
     * Add item to DisplayDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\DisplayDetails $item
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsRsp
     */
    public function addToDisplayDetails(\Travelport\UniversalRecord\StructType\DisplayDetails $item): self
    {
        $this->DisplayDetails[] = $item;
        
        return $this;
    }
}
