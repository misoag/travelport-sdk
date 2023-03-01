<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuestInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: The information like number of rooms ,number of adults,children to be provided while booking the hotel
 * @subpackage Structs
 */
class GuestInformation extends AbstractStructBase
{
    /**
     * The NumberOfAdults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: NumberOfAdults
     * @var \Travelport\UniversalRecord\StructType\NumberOfAdults|null
     */
    public ?\Travelport\UniversalRecord\StructType\NumberOfAdults $NumberOfAdults = null;
    /**
     * The NumberOfChildren
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: NumberOfChildren
     * @var \Travelport\UniversalRecord\StructType\NumberOfChildren|null
     */
    public ?\Travelport\UniversalRecord\StructType\NumberOfChildren $NumberOfChildren = null;
    /**
     * The ExtraChild
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\ExtraChild|null
     */
    public ?\Travelport\UniversalRecord\StructType\ExtraChild $ExtraChild = null;
    /**
     * The NumberOfRooms
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    public ?int $NumberOfRooms = null;
    /**
     * Constructor method for GuestInformation
     * @uses GuestInformation::setNumberOfAdults()
     * @uses GuestInformation::setNumberOfChildren()
     * @uses GuestInformation::setExtraChild()
     * @uses GuestInformation::setNumberOfRooms()
     * @param \Travelport\UniversalRecord\StructType\NumberOfAdults $numberOfAdults
     * @param \Travelport\UniversalRecord\StructType\NumberOfChildren $numberOfChildren
     * @param \Travelport\UniversalRecord\StructType\ExtraChild $extraChild
     * @param int $numberOfRooms
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\NumberOfAdults $numberOfAdults = null, ?\Travelport\UniversalRecord\StructType\NumberOfChildren $numberOfChildren = null, ?\Travelport\UniversalRecord\StructType\ExtraChild $extraChild = null, ?int $numberOfRooms = null)
    {
        $this
            ->setNumberOfAdults($numberOfAdults)
            ->setNumberOfChildren($numberOfChildren)
            ->setExtraChild($extraChild)
            ->setNumberOfRooms($numberOfRooms);
    }
    /**
     * Get NumberOfAdults value
     * @return \Travelport\UniversalRecord\StructType\NumberOfAdults|null
     */
    public function getNumberOfAdults(): ?\Travelport\UniversalRecord\StructType\NumberOfAdults
    {
        return $this->NumberOfAdults;
    }
    /**
     * Set NumberOfAdults value
     * @param \Travelport\UniversalRecord\StructType\NumberOfAdults $numberOfAdults
     * @return \Travelport\UniversalRecord\StructType\GuestInformation
     */
    public function setNumberOfAdults(?\Travelport\UniversalRecord\StructType\NumberOfAdults $numberOfAdults = null): self
    {
        $this->NumberOfAdults = $numberOfAdults;
        
        return $this;
    }
    /**
     * Get NumberOfChildren value
     * @return \Travelport\UniversalRecord\StructType\NumberOfChildren|null
     */
    public function getNumberOfChildren(): ?\Travelport\UniversalRecord\StructType\NumberOfChildren
    {
        return $this->NumberOfChildren;
    }
    /**
     * Set NumberOfChildren value
     * @param \Travelport\UniversalRecord\StructType\NumberOfChildren $numberOfChildren
     * @return \Travelport\UniversalRecord\StructType\GuestInformation
     */
    public function setNumberOfChildren(?\Travelport\UniversalRecord\StructType\NumberOfChildren $numberOfChildren = null): self
    {
        $this->NumberOfChildren = $numberOfChildren;
        
        return $this;
    }
    /**
     * Get ExtraChild value
     * @return \Travelport\UniversalRecord\StructType\ExtraChild|null
     */
    public function getExtraChild(): ?\Travelport\UniversalRecord\StructType\ExtraChild
    {
        return $this->ExtraChild;
    }
    /**
     * Set ExtraChild value
     * @param \Travelport\UniversalRecord\StructType\ExtraChild $extraChild
     * @return \Travelport\UniversalRecord\StructType\GuestInformation
     */
    public function setExtraChild(?\Travelport\UniversalRecord\StructType\ExtraChild $extraChild = null): self
    {
        $this->ExtraChild = $extraChild;
        
        return $this;
    }
    /**
     * Get NumberOfRooms value
     * @return int|null
     */
    public function getNumberOfRooms(): ?int
    {
        return $this->NumberOfRooms;
    }
    /**
     * Set NumberOfRooms value
     * @param int $numberOfRooms
     * @return \Travelport\UniversalRecord\StructType\GuestInformation
     */
    public function setNumberOfRooms(?int $numberOfRooms = null): self
    {
        $this->NumberOfRooms = $numberOfRooms;
        
        return $this;
    }
}
