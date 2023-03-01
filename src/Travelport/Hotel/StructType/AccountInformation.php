<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
     * @var \Travelport\Hotel\StructType\TypeStructuredAddress|null
     */
    public ?\Travelport\Hotel\StructType\TypeStructuredAddress $Address = null;
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
     * The AccountName
     * @var string|null
     */
    public ?string $AccountName = null;
    /**
     * Constructor method for AccountInformation
     * @uses AccountInformation::setAddress()
     * @uses AccountInformation::setPhoneNumber()
     * @uses AccountInformation::setAccountName()
     * @param \Travelport\Hotel\StructType\TypeStructuredAddress $address
     * @param \Travelport\Hotel\StructType\PhoneNumber[] $phoneNumber
     * @param string $accountName
     */
    public function __construct(?\Travelport\Hotel\StructType\TypeStructuredAddress $address = null, ?array $phoneNumber = null, ?string $accountName = null)
    {
        $this
            ->setAddress($address)
            ->setPhoneNumber($phoneNumber)
            ->setAccountName($accountName);
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
     * @return \Travelport\Hotel\StructType\AccountInformation
     */
    public function setAddress(?\Travelport\Hotel\StructType\TypeStructuredAddress $address = null): self
    {
        $this->Address = $address;
        
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
     * @return \Travelport\Hotel\StructType\AccountInformation
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
     * @return \Travelport\Hotel\StructType\AccountInformation
     */
    public function addToPhoneNumber(\Travelport\Hotel\StructType\PhoneNumber $item): self
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
     * @return \Travelport\Hotel\StructType\AccountInformation
     */
    public function setAccountName(?string $accountName = null): self
    {
        $this->AccountName = $accountName;
        
        return $this;
    }
}
