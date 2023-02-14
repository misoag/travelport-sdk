<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $CardNumber;
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
    protected string $SupplierCode;
    /**
     * The ProviderReservationSpecificInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeProviderReservationSpecificInfo[]
     */
    protected ?array $ProviderReservationSpecificInfo = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The MembershipStatus
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $MembershipStatus = null;
    /**
     * The FreeText
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $FreeText = null;
    /**
     * The SupplierType
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $SupplierType = null;
    /**
     * The Level
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [a-zA-Z0-9]{1,1}
     * - use: optional
     * @var string|null
     */
    protected ?string $Level = null;
    /**
     * The PriorityCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [a-zA-Z0-9]{1,1}
     * - use: optional
     * @var string|null
     */
    protected ?string $PriorityCode = null;
    /**
     * The VendorLocationRef
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $VendorLocationRef = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - type: typeRef
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The AllianceLevel
     * Meta information extracted from the WSDL
     * - type: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $AllianceLevel = null;
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
    protected ?string $MembershipProgram = null;
    /**
     * The ElStat
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to show the action results of an element. Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
     * - type: typeElementStatus
     * - use: optional
     * @var string|null
     */
    protected ?string $ElStat = null;
    /**
     * The KeyOverride
     * Meta information extracted from the WSDL
     * - documentation: If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
     * - type: xs:boolean
     * @var bool|null
     */
    protected ?bool $KeyOverride = null;
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
     * @param \Travelport\UniversalRecord\StructType\TypeProviderReservationSpecificInfo[] $providerReservationSpecificInfo
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
     * @return \Travelport\UniversalRecord\StructType\LoyaltyCard
     */
    public function setCardNumber(string $cardNumber): self
    {
        // validation for constraint: string
        if (!is_null($cardNumber) && !is_string($cardNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardNumber, true), gettype($cardNumber)), __LINE__);
        }
        // validation for constraint: maxLength(36)
        if (!is_null($cardNumber) && mb_strlen((string) $cardNumber) > 36) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 36', mb_strlen((string) $cardNumber)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($cardNumber) && mb_strlen((string) $cardNumber) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $cardNumber)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\LoyaltyCard
     */
    public function setSupplierCode(string $supplierCode): self
    {
        // validation for constraint: string
        if (!is_null($supplierCode) && !is_string($supplierCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierCode, true), gettype($supplierCode)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($supplierCode) && mb_strlen((string) $supplierCode) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $supplierCode)), __LINE__);
        }
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
    /**
     * Get ProviderReservationSpecificInfo value
     * @return \Travelport\UniversalRecord\StructType\TypeProviderReservationSpecificInfo[]
     */
    public function getProviderReservationSpecificInfo(): ?array
    {
        return $this->ProviderReservationSpecificInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setProviderReservationSpecificInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProviderReservationSpecificInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProviderReservationSpecificInfoForArrayConstraintsFromSetProviderReservationSpecificInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $loyaltyCardProviderReservationSpecificInfoItem) {
            // validation for constraint: itemType
            if (!$loyaltyCardProviderReservationSpecificInfoItem instanceof \Travelport\UniversalRecord\StructType\TypeProviderReservationSpecificInfo) {
                $invalidValues[] = is_object($loyaltyCardProviderReservationSpecificInfoItem) ? get_class($loyaltyCardProviderReservationSpecificInfoItem) : sprintf('%s(%s)', gettype($loyaltyCardProviderReservationSpecificInfoItem), var_export($loyaltyCardProviderReservationSpecificInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProviderReservationSpecificInfo property can only contain items of type \Travelport\UniversalRecord\StructType\TypeProviderReservationSpecificInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ProviderReservationSpecificInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeProviderReservationSpecificInfo[] $providerReservationSpecificInfo
     * @return \Travelport\UniversalRecord\StructType\LoyaltyCard
     */
    public function setProviderReservationSpecificInfo(?array $providerReservationSpecificInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($providerReservationSpecificInfoArrayErrorMessage = self::validateProviderReservationSpecificInfoForArrayConstraintsFromSetProviderReservationSpecificInfo($providerReservationSpecificInfo))) {
            throw new InvalidArgumentException($providerReservationSpecificInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($providerReservationSpecificInfo) && count($providerReservationSpecificInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($providerReservationSpecificInfo)), __LINE__);
        }
        $this->ProviderReservationSpecificInfo = $providerReservationSpecificInfo;
        
        return $this;
    }
    /**
     * Add item to ProviderReservationSpecificInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeProviderReservationSpecificInfo $item
     * @return \Travelport\UniversalRecord\StructType\LoyaltyCard
     */
    public function addToProviderReservationSpecificInfo(\Travelport\UniversalRecord\StructType\TypeProviderReservationSpecificInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeProviderReservationSpecificInfo) {
            throw new InvalidArgumentException(sprintf('The ProviderReservationSpecificInfo property can only contain items of type \Travelport\UniversalRecord\StructType\TypeProviderReservationSpecificInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ProviderReservationSpecificInfo) && count($this->ProviderReservationSpecificInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ProviderReservationSpecificInfo)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\LoyaltyCard
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\LoyaltyCard
     */
    public function setMembershipStatus(?string $membershipStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($membershipStatus) && !is_string($membershipStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($membershipStatus, true), gettype($membershipStatus)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\LoyaltyCard
     */
    public function setFreeText(?string $freeText = null): self
    {
        // validation for constraint: string
        if (!is_null($freeText) && !is_string($freeText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($freeText, true), gettype($freeText)), __LINE__);
        }
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeProduct::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeProduct::getValidValues()
     * @throws InvalidArgumentException
     * @param string $supplierType
     * @return \Travelport\UniversalRecord\StructType\LoyaltyCard
     */
    public function setSupplierType(?string $supplierType = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeProduct::valueIsValid($supplierType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeProduct', is_array($supplierType) ? implode(', ', $supplierType) : var_export($supplierType, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeProduct::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\LoyaltyCard
     */
    public function setLevel(?string $level = null): self
    {
        // validation for constraint: string
        if (!is_null($level) && !is_string($level)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($level, true), gettype($level)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{1,1})
        if (!is_null($level) && !preg_match('/[a-zA-Z0-9]{1,1}/', $level)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[a-zA-Z0-9]{1,1}/', var_export($level, true)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\LoyaltyCard
     */
    public function setPriorityCode(?string $priorityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($priorityCode) && !is_string($priorityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($priorityCode, true), gettype($priorityCode)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{1,1})
        if (!is_null($priorityCode) && !preg_match('/[a-zA-Z0-9]{1,1}/', $priorityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[a-zA-Z0-9]{1,1}/', var_export($priorityCode, true)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\LoyaltyCard
     */
    public function setVendorLocationRef(?string $vendorLocationRef = null): self
    {
        // validation for constraint: string
        if (!is_null($vendorLocationRef) && !is_string($vendorLocationRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vendorLocationRef, true), gettype($vendorLocationRef)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\LoyaltyCard
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\LoyaltyCard
     */
    public function setAllianceLevel(?string $allianceLevel = null): self
    {
        // validation for constraint: string
        if (!is_null($allianceLevel) && !is_string($allianceLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($allianceLevel, true), gettype($allianceLevel)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\LoyaltyCard
     */
    public function setMembershipProgram(?string $membershipProgram = null): self
    {
        // validation for constraint: string
        if (!is_null($membershipProgram) && !is_string($membershipProgram)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($membershipProgram, true), gettype($membershipProgram)), __LINE__);
        }
        // validation for constraint: maxLength(32)
        if (!is_null($membershipProgram) && mb_strlen((string) $membershipProgram) > 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 32', mb_strlen((string) $membershipProgram)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($membershipProgram) && mb_strlen((string) $membershipProgram) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $membershipProgram)), __LINE__);
        }
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\UniversalRecord\StructType\LoyaltyCard
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeElementStatus::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\LoyaltyCard
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        // validation for constraint: boolean
        if (!is_null($keyOverride) && !is_bool($keyOverride)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keyOverride, true), gettype($keyOverride)), __LINE__);
        }
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
