<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CollectionAddress StructType
 * Meta information extracted from the WSDL
 * - documentation: An address from which a rental car should be picked up at the end of a rental period and a phone number associated with the address.
 * @subpackage Structs
 */
class CollectionAddress extends TypeStructuredAddress
{
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:PhoneNumber
     * @var \Travelport\UniversalRecord\StructType\PhoneNumber|null
     */
    public ?\Travelport\UniversalRecord\StructType\PhoneNumber $PhoneNumber = null;
    /**
     * Constructor method for CollectionAddress
     * @uses CollectionAddress::setPhoneNumber()
     * @param \Travelport\UniversalRecord\StructType\PhoneNumber $phoneNumber
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\PhoneNumber $phoneNumber = null)
    {
        $this
            ->setPhoneNumber($phoneNumber);
    }
    /**
     * Get PhoneNumber value
     * @return \Travelport\UniversalRecord\StructType\PhoneNumber|null
     */
    public function getPhoneNumber(): ?\Travelport\UniversalRecord\StructType\PhoneNumber
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param \Travelport\UniversalRecord\StructType\PhoneNumber $phoneNumber
     * @return \Travelport\UniversalRecord\StructType\CollectionAddress
     */
    public function setPhoneNumber(?\Travelport\UniversalRecord\StructType\PhoneNumber $phoneNumber = null): self
    {
        $this->PhoneNumber = $phoneNumber;
        
        return $this;
    }
}
