<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmergencyContact StructType
 * @subpackage Structs
 */
class EmergencyContact extends AbstractStructBase
{
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PhoneNumber
     * @var \Travelport\Hotel\StructType\PhoneNumber|null
     */
    public ?\Travelport\Hotel\StructType\PhoneNumber $PhoneNumber = null;
    /**
     * The Name
     * @var string|null
     */
    public ?string $Name = null;
    /**
     * The Relationship
     * @var string|null
     */
    public ?string $Relationship = null;
    /**
     * Constructor method for EmergencyContact
     * @uses EmergencyContact::setPhoneNumber()
     * @uses EmergencyContact::setName()
     * @uses EmergencyContact::setRelationship()
     * @param \Travelport\Hotel\StructType\PhoneNumber $phoneNumber
     * @param string $name
     * @param string $relationship
     */
    public function __construct(?\Travelport\Hotel\StructType\PhoneNumber $phoneNumber = null, ?string $name = null, ?string $relationship = null)
    {
        $this
            ->setPhoneNumber($phoneNumber)
            ->setName($name)
            ->setRelationship($relationship);
    }
    /**
     * Get PhoneNumber value
     * @return \Travelport\Hotel\StructType\PhoneNumber|null
     */
    public function getPhoneNumber(): ?\Travelport\Hotel\StructType\PhoneNumber
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param \Travelport\Hotel\StructType\PhoneNumber $phoneNumber
     * @return \Travelport\Hotel\StructType\EmergencyContact
     */
    public function setPhoneNumber(?\Travelport\Hotel\StructType\PhoneNumber $phoneNumber = null): self
    {
        $this->PhoneNumber = $phoneNumber;
        
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Travelport\Hotel\StructType\EmergencyContact
     */
    public function setName(?string $name = null): self
    {
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get Relationship value
     * @return string|null
     */
    public function getRelationship(): ?string
    {
        return $this->Relationship;
    }
    /**
     * Set Relationship value
     * @param string $relationship
     * @return \Travelport\Hotel\StructType\EmergencyContact
     */
    public function setRelationship(?string $relationship = null): self
    {
        $this->Relationship = $relationship;
        
        return $this;
    }
}
