<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoyaltyCard StructType
 * Meta information extracted from the WSDL
 * - documentation: Provider loyalty card information
 * @subpackage Structs
 */
class LoyaltyCard extends AbstractStructBase
{
    /**
     * The CardNumber
     * Meta information extracted from the WSDL
     * - documentation: Loyalty Card number with maximum length as 36.
     * - base: xs:string
     * - maxLength: 36
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $CardNumber;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: The code used to identify the Loyalty supplier, e.g. AA, ZE, MC | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - type: typeCarrier
     * - use: required
     * @var string
     */
    public string $SupplierCode;
    /**
     * The ProviderReservationSpecificInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\TypeProviderReservationSpecificInfo[]
     */
    public ?array $ProviderReservationSpecificInfo = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Status = null;
    /**
     * The MembershipStatus
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $MembershipStatus = null;
    /**
     * The FreeText
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $FreeText = null;
    /**
     * The SupplierType
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $SupplierType = null;
    /**
     * The Level
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [a-zA-Z0-9]{1,1}
     * - use: optional
     * @var string|null
     */
    public ?string $Level = null;
    /**
     * The PriorityCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [a-zA-Z0-9]{1,1}
     * - use: optional
     * @var string|null
     */
    public ?string $PriorityCode = null;
    /**
     * The VendorLocationRef
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $VendorLocationRef = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - type: typeRef
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The AllianceLevel
     * Meta information extracted from the WSDL
     * - type: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $AllianceLevel = null;
    /**
     * The MembershipProgram
     * Meta information extracted from the WSDL
     * - documentation: Loyalty Program membership Id of the traveler specific to Amtrak(2V) Guest Rewards | Used for Character Strings, length 1 to 32.
     * - base: xs:string
     * - maxLength: 32
     * - minLength: 1
     * - type: StringLength1to32
     * - use: optional
     * @var string|null
     */
    public ?string $MembershipProgram = null;
    /**
     * The ElStat
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to show the action results of an element. Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
     * - type: typeElementStatus
     * - use: optional
     * @var string|null
     */
    public ?string $ElStat = null;
    /**
     * The KeyOverride
     * Meta information extracted from the WSDL
     * - documentation: If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
     * - type: xs:boolean
     * @var bool|null
     */
    public ?bool $KeyOverride = null;
    /**
     * Constructor method for LoyaltyCard
     * @uses LoyaltyCard::setCardNumber()
     * @uses LoyaltyCard::setSupplierCode()
     * @uses LoyaltyCard::setProviderReservationSpecificInfo()
     * @uses LoyaltyCard::setStatus()
     * @uses LoyaltyCard::setMembershipStatus()
     * @uses LoyaltyCard::setFreeText()
     * @uses LoyaltyCard::setSupplierType()
     * @uses LoyaltyCard::setLevel()
     * @uses LoyaltyCard::setPriorityCode()
     * @uses LoyaltyCard::setVendorLocationRef()
     * @uses LoyaltyCard::setKey()
     * @uses LoyaltyCard::setAllianceLevel()
     * @uses LoyaltyCard::setMembershipProgram()
     * @uses LoyaltyCard::setElStat()
     * @uses LoyaltyCard::setKeyOverride()
     * @param string $cardNumber
     * @param string $supplierCode
     * @param \Travelport\Hotel\StructType\TypeProviderReservationSpecificInfo[] $providerReservationSpecificInfo
     * @param string $status
     * @param string $membershipStatus
     * @param string $freeText
     * @param string $supplierType
     * @param string $level
     * @param string $priorityCode
     * @param string $vendorLocationRef
     * @param string $key
     * @param string $allianceLevel
     * @param string $membershipProgram
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $cardNumber, string $supplierCode, ?array $providerReservationSpecificInfo = null, ?string $status = null, ?string $membershipStatus = null, ?string $freeText = null, ?string $supplierType = null, ?string $level = null, ?string $priorityCode = null, ?string $vendorLocationRef = null, ?string $key = null, ?string $allianceLevel = null, ?string $membershipProgram = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setCardNumber($cardNumber)
            ->setSupplierCode($supplierCode)
            ->setProviderReservationSpecificInfo($providerReservationSpecificInfo)
            ->setStatus($status)
            ->setMembershipStatus($membershipStatus)
            ->setFreeText($freeText)
            ->setSupplierType($supplierType)
            ->setLevel($level)
            ->setPriorityCode($priorityCode)
            ->setVendorLocationRef($vendorLocationRef)
            ->setKey($key)
            ->setAllianceLevel($allianceLevel)
            ->setMembershipProgram($membershipProgram)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get CardNumber value
     * @return string
     */
    public function getCardNumber(): string
    {
        return $this->CardNumber;
    }
    /**
     * Set CardNumber value
     * @param string $cardNumber
     * @return \Travelport\Hotel\StructType\LoyaltyCard
     */
    public function setCardNumber(string $cardNumber): self
    {
        $this->CardNumber = $cardNumber;
        
        return $this;
    }
    /**
     * Get SupplierCode value
     * @return string
     */
    public function getSupplierCode(): string
    {
        return $this->SupplierCode;
    }
    /**
     * Set SupplierCode value
     * @param string $supplierCode
     * @return \Travelport\Hotel\StructType\LoyaltyCard
     */
    public function setSupplierCode(string $supplierCode): self
    {
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
    /**
     * Get ProviderReservationSpecificInfo value
     * @return \Travelport\Hotel\StructType\TypeProviderReservationSpecificInfo[]
     */
    public function getProviderReservationSpecificInfo(): ?array
    {
        return $this->ProviderReservationSpecificInfo;
    }
    /**
     * Set ProviderReservationSpecificInfo value
     * @param \Travelport\Hotel\StructType\TypeProviderReservationSpecificInfo[] $providerReservationSpecificInfo
     * @return \Travelport\Hotel\StructType\LoyaltyCard
     */
    public function setProviderReservationSpecificInfo(?array $providerReservationSpecificInfo = null): self
    {
        $this->ProviderReservationSpecificInfo = $providerReservationSpecificInfo;
        
        return $this;
    }
    /**
     * Add item to ProviderReservationSpecificInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\TypeProviderReservationSpecificInfo $item
     * @return \Travelport\Hotel\StructType\LoyaltyCard
     */
    public function addToProviderReservationSpecificInfo(\Travelport\Hotel\StructType\TypeProviderReservationSpecificInfo $item): self
    {
        $this->ProviderReservationSpecificInfo[] = $item;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Travelport\Hotel\StructType\LoyaltyCard
     */
    public function setStatus(?string $status = null): self
    {
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get MembershipStatus value
     * @return string|null
     */
    public function getMembershipStatus(): ?string
    {
        return $this->MembershipStatus;
    }
    /**
     * Set MembershipStatus value
     * @param string $membershipStatus
     * @return \Travelport\Hotel\StructType\LoyaltyCard
     */
    public function setMembershipStatus(?string $membershipStatus = null): self
    {
        $this->MembershipStatus = $membershipStatus;
        
        return $this;
    }
    /**
     * Get FreeText value
     * @return string|null
     */
    public function getFreeText(): ?string
    {
        return $this->FreeText;
    }
    /**
     * Set FreeText value
     * @param string $freeText
     * @return \Travelport\Hotel\StructType\LoyaltyCard
     */
    public function setFreeText(?string $freeText = null): self
    {
        $this->FreeText = $freeText;
        
        return $this;
    }
    /**
     * Get SupplierType value
     * @return string|null
     */
    public function getSupplierType(): ?string
    {
        return $this->SupplierType;
    }
    /**
     * Set SupplierType value
     * @param string $supplierType
     * @return \Travelport\Hotel\StructType\LoyaltyCard
     */
    public function setSupplierType(?string $supplierType = null): self
    {
        $this->SupplierType = $supplierType;
        
        return $this;
    }
    /**
     * Get Level value
     * @return string|null
     */
    public function getLevel(): ?string
    {
        return $this->Level;
    }
    /**
     * Set Level value
     * @param string $level
     * @return \Travelport\Hotel\StructType\LoyaltyCard
     */
    public function setLevel(?string $level = null): self
    {
        $this->Level = $level;
        
        return $this;
    }
    /**
     * Get PriorityCode value
     * @return string|null
     */
    public function getPriorityCode(): ?string
    {
        return $this->PriorityCode;
    }
    /**
     * Set PriorityCode value
     * @param string $priorityCode
     * @return \Travelport\Hotel\StructType\LoyaltyCard
     */
    public function setPriorityCode(?string $priorityCode = null): self
    {
        $this->PriorityCode = $priorityCode;
        
        return $this;
    }
    /**
     * Get VendorLocationRef value
     * @return string|null
     */
    public function getVendorLocationRef(): ?string
    {
        return $this->VendorLocationRef;
    }
    /**
     * Set VendorLocationRef value
     * @param string $vendorLocationRef
     * @return \Travelport\Hotel\StructType\LoyaltyCard
     */
    public function setVendorLocationRef(?string $vendorLocationRef = null): self
    {
        $this->VendorLocationRef = $vendorLocationRef;
        
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
     * @return \Travelport\Hotel\StructType\LoyaltyCard
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get AllianceLevel value
     * @return string|null
     */
    public function getAllianceLevel(): ?string
    {
        return $this->AllianceLevel;
    }
    /**
     * Set AllianceLevel value
     * @param string $allianceLevel
     * @return \Travelport\Hotel\StructType\LoyaltyCard
     */
    public function setAllianceLevel(?string $allianceLevel = null): self
    {
        $this->AllianceLevel = $allianceLevel;
        
        return $this;
    }
    /**
     * Get MembershipProgram value
     * @return string|null
     */
    public function getMembershipProgram(): ?string
    {
        return $this->MembershipProgram;
    }
    /**
     * Set MembershipProgram value
     * @param string $membershipProgram
     * @return \Travelport\Hotel\StructType\LoyaltyCard
     */
    public function setMembershipProgram(?string $membershipProgram = null): self
    {
        $this->MembershipProgram = $membershipProgram;
        
        return $this;
    }
    /**
     * Get ElStat value
     * @return string|null
     */
    public function getElStat(): ?string
    {
        return $this->ElStat;
    }
    /**
     * Set ElStat value
     * @param string $elStat
     * @return \Travelport\Hotel\StructType\LoyaltyCard
     */
    public function setElStat(?string $elStat = null): self
    {
        $this->ElStat = $elStat;
        
        return $this;
    }
    /**
     * Get KeyOverride value
     * @return bool|null
     */
    public function getKeyOverride(): ?bool
    {
        return $this->KeyOverride;
    }
    /**
     * Set KeyOverride value
     * @param bool $keyOverride
     * @return \Travelport\Hotel\StructType\LoyaltyCard
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
