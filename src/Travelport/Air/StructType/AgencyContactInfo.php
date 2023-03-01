<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgencyContactInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Generic agency contact information container. It must contain at least one phone number to be used by an agency
 * @subpackage Structs
 */
class AgencyContactInfo extends AbstractStructBase
{
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: PhoneNumber
     * @var \Travelport\Air\StructType\PhoneNumber[]
     */
    public ?array $PhoneNumber = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * Constructor method for AgencyContactInfo
     * @uses AgencyContactInfo::setPhoneNumber()
     * @uses AgencyContactInfo::setKey()
     * @param \Travelport\Air\StructType\PhoneNumber[] $phoneNumber
     * @param string $key
     */
    public function __construct(?array $phoneNumber = null, ?string $key = null)
    {
        $this
            ->setPhoneNumber($phoneNumber)
            ->setKey($key);
    }
    /**
     * Get PhoneNumber value
     * @return \Travelport\Air\StructType\PhoneNumber[]
     */
    public function getPhoneNumber(): ?array
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param \Travelport\Air\StructType\PhoneNumber[] $phoneNumber
     * @return \Travelport\Air\StructType\AgencyContactInfo
     */
    public function setPhoneNumber(?array $phoneNumber = null): self
    {
        $this->PhoneNumber = $phoneNumber;
        
        return $this;
    }
    /**
     * Add item to PhoneNumber value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\PhoneNumber $item
     * @return \Travelport\Air\StructType\AgencyContactInfo
     */
    public function addToPhoneNumber(\Travelport\Air\StructType\PhoneNumber $item): self
    {
        $this->PhoneNumber[] = $item;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Air\StructType\AgencyContactInfo
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
}
