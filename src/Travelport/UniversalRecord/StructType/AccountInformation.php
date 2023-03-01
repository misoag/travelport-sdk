<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: Account Information required for File Finishing
 * @subpackage Structs
 */
class AccountInformation extends AbstractStructBase
{
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeStructuredAddress|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeStructuredAddress $Address = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: PhoneNumber
     * @var \Travelport\UniversalRecord\StructType\PhoneNumber[]
     */
    public ?array $PhoneNumber = null;
    /**
     * The AccountName
     * @var string|null
     */
    public ?string $AccountName = null;
    /**
     * Constructor method for AccountInformation
     * @uses AccountInformation::setAddress()
     * @uses AccountInformation::setPhoneNumber()
     * @uses AccountInformation::setAccountName()
     * @param \Travelport\UniversalRecord\StructType\TypeStructuredAddress $address
     * @param \Travelport\UniversalRecord\StructType\PhoneNumber[] $phoneNumber
     * @param string $accountName
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\TypeStructuredAddress $address = null, ?array $phoneNumber = null, ?string $accountName = null)
    {
        $this
            ->setAddress($address)
            ->setPhoneNumber($phoneNumber)
            ->setAccountName($accountName);
    }
    /**
     * Get Address value
     * @return \Travelport\UniversalRecord\StructType\TypeStructuredAddress|null
     */
    public function getAddress(): ?\Travelport\UniversalRecord\StructType\TypeStructuredAddress
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \Travelport\UniversalRecord\StructType\TypeStructuredAddress $address
     * @return \Travelport\UniversalRecord\StructType\AccountInformation
     */
    public function setAddress(?\Travelport\UniversalRecord\StructType\TypeStructuredAddress $address = null): self
    {
        $this->Address = $address;
        
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return \Travelport\UniversalRecord\StructType\PhoneNumber[]
     */
    public function getPhoneNumber(): ?array
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param \Travelport\UniversalRecord\StructType\PhoneNumber[] $phoneNumber
     * @return \Travelport\UniversalRecord\StructType\AccountInformation
     */
    public function setPhoneNumber(?array $phoneNumber = null): self
    {
        $this->PhoneNumber = $phoneNumber;
        
        return $this;
    }
    /**
     * Add item to PhoneNumber value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PhoneNumber $item
     * @return \Travelport\UniversalRecord\StructType\AccountInformation
     */
    public function addToPhoneNumber(\Travelport\UniversalRecord\StructType\PhoneNumber $item): self
    {
        $this->PhoneNumber[] = $item;
        
        return $this;
    }
    /**
     * Get AccountName value
     * @return string|null
     */
    public function getAccountName(): ?string
    {
        return $this->AccountName;
    }
    /**
     * Set AccountName value
     * @param string $accountName
     * @return \Travelport\UniversalRecord\StructType\AccountInformation
     */
    public function setAccountName(?string $accountName = null): self
    {
        $this->AccountName = $accountName;
        
        return $this;
    }
}
