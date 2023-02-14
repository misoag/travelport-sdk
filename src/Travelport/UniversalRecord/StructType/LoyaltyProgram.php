<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoyaltyProgram StructType
 * @subpackage Structs
 */
class LoyaltyProgram extends AbstractStructBase
{
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
     * The Level
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Level = null;
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
     * Constructor method for LoyaltyProgram
     * @uses LoyaltyProgram::setSupplierCode()
     * @uses LoyaltyProgram::setLevel()
     * @uses LoyaltyProgram::setKey()
     * @uses LoyaltyProgram::setAllianceLevel()
     * @uses LoyaltyProgram::setMembershipProgram()
     * @uses LoyaltyProgram::setElStat()
     * @uses LoyaltyProgram::setKeyOverride()
     * @param string $supplierCode
     * @param string $level
     * @param string $key
     * @param string $allianceLevel
     * @param string $membershipProgram
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $supplierCode, ?string $level = null, ?string $key = null, ?string $allianceLevel = null, ?string $membershipProgram = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setSupplierCode($supplierCode)
            ->setLevel($level)
            ->setKey($key)
            ->setAllianceLevel($allianceLevel)
            ->setMembershipProgram($membershipProgram)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
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
     * @return \Travelport\UniversalRecord\StructType\LoyaltyProgram
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
     * @return \Travelport\UniversalRecord\StructType\LoyaltyProgram
     */
    public function setLevel(?string $level = null): self
    {
        // validation for constraint: string
        if (!is_null($level) && !is_string($level)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($level, true), gettype($level)), __LINE__);
        }
        $this->Level = $level;
        
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
     * @return \Travelport\UniversalRecord\StructType\LoyaltyProgram
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
     * @return \Travelport\UniversalRecord\StructType\LoyaltyProgram
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
     * @return \Travelport\UniversalRecord\StructType\LoyaltyProgram
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
     * @return \Travelport\UniversalRecord\StructType\LoyaltyProgram
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
     * @return \Travelport\UniversalRecord\StructType\LoyaltyProgram
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
