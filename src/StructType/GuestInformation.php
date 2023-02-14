<?php

declare(strict_types=1);

namespace StructType;

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
     * @var \StructType\NumberOfAdults|null
     */
    protected ?\StructType\NumberOfAdults $NumberOfAdults = null;
    /**
     * The NumberOfChildren
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: NumberOfChildren
     * @var \StructType\NumberOfChildren|null
     */
    protected ?\StructType\NumberOfChildren $NumberOfChildren = null;
    /**
     * The ExtraChild
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ExtraChild|null
     */
    protected ?\StructType\ExtraChild $ExtraChild = null;
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
     * @param \StructType\NumberOfAdults $numberOfAdults
     * @param \StructType\NumberOfChildren $numberOfChildren
     * @param \StructType\ExtraChild $extraChild
     * @param int $numberOfRooms
     */
    public function __construct(?\StructType\NumberOfAdults $numberOfAdults = null, ?\StructType\NumberOfChildren $numberOfChildren = null, ?\StructType\ExtraChild $extraChild = null, ?int $numberOfRooms = null)
    {
        $this
            ->setNumberOfAdults($numberOfAdults)
            ->setNumberOfChildren($numberOfChildren)
            ->setExtraChild($extraChild)
            ->setNumberOfRooms($numberOfRooms);
    }
    /**
     * Get NumberOfAdults value
     * @return \StructType\NumberOfAdults|null
     */
    public function getNumberOfAdults(): ?\StructType\NumberOfAdults
    {
        return $this->NumberOfAdults;
    }
    /**
     * Set NumberOfAdults value
     * @param \StructType\NumberOfAdults $numberOfAdults
     * @return \StructType\GuestInformation
     */
    public function setNumberOfAdults(?\StructType\NumberOfAdults $numberOfAdults = null): self
    {
        $this->NumberOfAdults = $numberOfAdults;
        
        return $this;
    }
    /**
     * Get NumberOfChildren value
     * @return \StructType\NumberOfChildren|null
     */
    public function getNumberOfChildren(): ?\StructType\NumberOfChildren
    {
        return $this->NumberOfChildren;
    }
    /**
     * Set NumberOfChildren value
     * @param \StructType\NumberOfChildren $numberOfChildren
     * @return \StructType\GuestInformation
     */
    public function setNumberOfChildren(?\StructType\NumberOfChildren $numberOfChildren = null): self
    {
        $this->NumberOfChildren = $numberOfChildren;
        
        return $this;
    }
    /**
     * Get ExtraChild value
     * @return \StructType\ExtraChild|null
     */
    public function getExtraChild(): ?\StructType\ExtraChild
    {
        return $this->ExtraChild;
    }
    /**
     * Set ExtraChild value
     * @param \StructType\ExtraChild $extraChild
     * @return \StructType\GuestInformation
     */
    public function setExtraChild(?\StructType\ExtraChild $extraChild = null): self
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
     * @return \StructType\GuestInformation
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
