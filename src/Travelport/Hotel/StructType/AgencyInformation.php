<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgencyInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: Agency Information required for File Finishing
 * @subpackage Structs
 */
class AgencyInformation extends AbstractStructBase
{
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\TypeStructuredAddress|null
     */
    public ?\Travelport\Hotel\StructType\TypeStructuredAddress $Address = null;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Email
     * @var \Travelport\Hotel\StructType\Email[]
     */
    public ?array $Email = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: PhoneNumber
     * @var \Travelport\Hotel\StructType\PhoneNumber[]
     */
    public ?array $PhoneNumber = null;
    /**
     * Constructor method for AgencyInformation
     * @uses AgencyInformation::setAddress()
     * @uses AgencyInformation::setEmail()
     * @uses AgencyInformation::setPhoneNumber()
     * @param \Travelport\Hotel\StructType\TypeStructuredAddress $address
     * @param \Travelport\Hotel\StructType\Email[] $email
     * @param \Travelport\Hotel\StructType\PhoneNumber[] $phoneNumber
     */
    public function __construct(?\Travelport\Hotel\StructType\TypeStructuredAddress $address = null, ?array $email = null, ?array $phoneNumber = null)
    {
        $this
            ->setAddress($address)
            ->setEmail($email)
            ->setPhoneNumber($phoneNumber);
    }
    /**
     * Get Address value
     * @return \Travelport\Hotel\StructType\TypeStructuredAddress|null
     */
    public function getAddress(): ?\Travelport\Hotel\StructType\TypeStructuredAddress
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \Travelport\Hotel\StructType\TypeStructuredAddress $address
     * @return \Travelport\Hotel\StructType\AgencyInformation
     */
    public function setAddress(?\Travelport\Hotel\StructType\TypeStructuredAddress $address = null): self
    {
        $this->Address = $address;
        
        return $this;
    }
    /**
     * Get Email value
     * @return \Travelport\Hotel\StructType\Email[]
     */
    public function getEmail(): ?array
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param \Travelport\Hotel\StructType\Email[] $email
     * @return \Travelport\Hotel\StructType\AgencyInformation
     */
    public function setEmail(?array $email = null): self
    {
        $this->Email = $email;
        
        return $this;
    }
    /**
     * Add item to Email value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\Email $item
     * @return \Travelport\Hotel\StructType\AgencyInformation
     */
    public function addToEmail(\Travelport\Hotel\StructType\Email $item): self
    {
        $this->Email[] = $item;
        
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return \Travelport\Hotel\StructType\PhoneNumber[]
     */
    public function getPhoneNumber(): ?array
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param \Travelport\Hotel\StructType\PhoneNumber[] $phoneNumber
     * @return \Travelport\Hotel\StructType\AgencyInformation
     */
    public function setPhoneNumber(?array $phoneNumber = null): self
    {
        $this->PhoneNumber = $phoneNumber;
        
        return $this;
    }
    /**
     * Add item to PhoneNumber value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\PhoneNumber $item
     * @return \Travelport\Hotel\StructType\AgencyInformation
     */
    public function addToPhoneNumber(\Travelport\Hotel\StructType\PhoneNumber $item): self
    {
        $this->PhoneNumber[] = $item;
        
        return $this;
    }
}
