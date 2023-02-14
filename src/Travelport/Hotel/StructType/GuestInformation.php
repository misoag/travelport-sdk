<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\Hotel\StructType\NumberOfAdults|null
     */
    protected ?\Travelport\Hotel\StructType\NumberOfAdults $NumberOfAdults = null;
    /**
     * The NumberOfChildren
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: NumberOfChildren
     * @var \Travelport\Hotel\StructType\NumberOfChildren|null
     */
    protected ?\Travelport\Hotel\StructType\NumberOfChildren $NumberOfChildren = null;
    /**
     * The ExtraChild
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\ExtraChild|null
     */
    protected ?\Travelport\Hotel\StructType\ExtraChild $ExtraChild = null;
    /**
     * The NumberOfRooms
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $NumberOfRooms = null;
    /**
     * Constructor method for GuestInformation
     * @uses GuestInformation::setNumberOfAdults()
     * @uses GuestInformation::setNumberOfChildren()
     * @uses GuestInformation::setExtraChild()
     * @uses GuestInformation::setNumberOfRooms()
     * @param \Travelport\Hotel\StructType\NumberOfAdults $numberOfAdults
     * @param \Travelport\Hotel\StructType\NumberOfChildren $numberOfChildren
     * @param \Travelport\Hotel\StructType\ExtraChild $extraChild
     * @param int $numberOfRooms
     */
    public function __construct(?\Travelport\Hotel\StructType\NumberOfAdults $numberOfAdults = null, ?\Travelport\Hotel\StructType\NumberOfChildren $numberOfChildren = null, ?\Travelport\Hotel\StructType\ExtraChild $extraChild = null, ?int $numberOfRooms = null)
    {
        $this
            ->setNumberOfAdults($numberOfAdults)
            ->setNumberOfChildren($numberOfChildren)
            ->setExtraChild($extraChild)
            ->setNumberOfRooms($numberOfRooms);
    }
    /**
     * Get NumberOfAdults value
     * @return \Travelport\Hotel\StructType\NumberOfAdults|null
     */
    public function getNumberOfAdults(): ?\Travelport\Hotel\StructType\NumberOfAdults
    {
        return $this->NumberOfAdults;
    }
    /**
     * Set NumberOfAdults value
     * @param \Travelport\Hotel\StructType\NumberOfAdults $numberOfAdults
     * @return \Travelport\Hotel\StructType\GuestInformation
     */
    public function setNumberOfAdults(?\Travelport\Hotel\StructType\NumberOfAdults $numberOfAdults = null): self
    {
        $this->NumberOfAdults = $numberOfAdults;
        
        return $this;
    }
    /**
     * Get NumberOfChildren value
     * @return \Travelport\Hotel\StructType\NumberOfChildren|null
     */
    public function getNumberOfChildren(): ?\Travelport\Hotel\StructType\NumberOfChildren
    {
        return $this->NumberOfChildren;
    }
    /**
     * Set NumberOfChildren value
     * @param \Travelport\Hotel\StructType\NumberOfChildren $numberOfChildren
     * @return \Travelport\Hotel\StructType\GuestInformation
     */
    public function setNumberOfChildren(?\Travelport\Hotel\StructType\NumberOfChildren $numberOfChildren = null): self
    {
        $this->NumberOfChildren = $numberOfChildren;
        
        return $this;
    }
    /**
     * Get ExtraChild value
     * @return \Travelport\Hotel\StructType\ExtraChild|null
     */
    public function getExtraChild(): ?\Travelport\Hotel\StructType\ExtraChild
    {
        return $this->ExtraChild;
    }
    /**
     * Set ExtraChild value
     * @param \Travelport\Hotel\StructType\ExtraChild $extraChild
     * @return \Travelport\Hotel\StructType\GuestInformation
     */
    public function setExtraChild(?\Travelport\Hotel\StructType\ExtraChild $extraChild = null): self
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
     * @return \Travelport\Hotel\StructType\GuestInformation
     */
    public function setNumberOfRooms(?int $numberOfRooms = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfRooms) && !(is_int($numberOfRooms) || ctype_digit($numberOfRooms))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfRooms, true), gettype($numberOfRooms)), __LINE__);
        }
        $this->NumberOfRooms = $numberOfRooms;
        
        return $this;
    }
}
