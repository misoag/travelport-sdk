<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\Util\StructType\PhoneNumber|null
     */
    protected ?\Travelport\Util\StructType\PhoneNumber $PhoneNumber = null;
    /**
     * The Name
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Relationship
     * @var string|null
     */
    protected ?string $Relationship = null;
    /**
     * Constructor method for EmergencyContact
     * @uses EmergencyContact::setPhoneNumber()
     * @uses EmergencyContact::setName()
     * @uses EmergencyContact::setRelationship()
     * @param \Travelport\Util\StructType\PhoneNumber $phoneNumber
     * @param string $name
     * @param string $relationship
     */
    public function __construct(?\Travelport\Util\StructType\PhoneNumber $phoneNumber = null, ?string $name = null, ?string $relationship = null)
    {
        $this
            ->setPhoneNumber($phoneNumber)
            ->setName($name)
            ->setRelationship($relationship);
    }
    /**
     * Get PhoneNumber value
     * @return \Travelport\Util\StructType\PhoneNumber|null
     */
    public function getPhoneNumber(): ?\Travelport\Util\StructType\PhoneNumber
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param \Travelport\Util\StructType\PhoneNumber $phoneNumber
     * @return \Travelport\Util\StructType\EmergencyContact
     */
    public function setPhoneNumber(?\Travelport\Util\StructType\PhoneNumber $phoneNumber = null): self
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
     * @return \Travelport\Util\StructType\EmergencyContact
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\EmergencyContact
     */
    public function setRelationship(?string $relationship = null): self
    {
        // validation for constraint: string
        if (!is_null($relationship) && !is_string($relationship)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($relationship, true), gettype($relationship)), __LINE__);
        }
        $this->Relationship = $relationship;
        
        return $this;
    }
}
