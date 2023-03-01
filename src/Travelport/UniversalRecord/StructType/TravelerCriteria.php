<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelerCriteria StructType
 * Meta information extracted from the WSDL
 * - documentation: Specifies Search Criteria as either Travler Name Details or Traveler Applied Profile Id | Criteria for Searching misc traveler information
 * @subpackage Structs
 */
class TravelerCriteria extends AbstractStructBase
{
    /**
     * The NameCriteria
     * Meta information extracted from the WSDL
     * - choice: NameCriteria | AppliedProfileCriteria
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: NameCriteria
     * @var \Travelport\UniversalRecord\StructType\NameCriteria|null
     */
    public ?\Travelport\UniversalRecord\StructType\NameCriteria $NameCriteria = null;
    /**
     * The AppliedProfileCriteria
     * Meta information extracted from the WSDL
     * - choice: NameCriteria | AppliedProfileCriteria
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: AppliedProfileCriteria
     * @var \Travelport\UniversalRecord\StructType\AppliedProfileCriteria|null
     */
    public ?\Travelport\UniversalRecord\StructType\AppliedProfileCriteria $AppliedProfileCriteria = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - documentation: To Search for Phone Number match
     * - use: optional
     * @var string|null
     */
    public ?string $PhoneNumber = null;
    /**
     * The VIPOnly
     * Meta information extracted from the WSDL
     * - documentation: To Search for VIP traveler
     * - use: optional
     * @var bool|null
     */
    public ?bool $VIPOnly = null;
    /**
     * Constructor method for TravelerCriteria
     * @uses TravelerCriteria::setNameCriteria()
     * @uses TravelerCriteria::setAppliedProfileCriteria()
     * @uses TravelerCriteria::setPhoneNumber()
     * @uses TravelerCriteria::setVIPOnly()
     * @param \Travelport\UniversalRecord\StructType\NameCriteria $nameCriteria
     * @param \Travelport\UniversalRecord\StructType\AppliedProfileCriteria $appliedProfileCriteria
     * @param string $phoneNumber
     * @param bool $vIPOnly
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\NameCriteria $nameCriteria = null, ?\Travelport\UniversalRecord\StructType\AppliedProfileCriteria $appliedProfileCriteria = null, ?string $phoneNumber = null, ?bool $vIPOnly = null)
    {
        $this
            ->setNameCriteria($nameCriteria)
            ->setAppliedProfileCriteria($appliedProfileCriteria)
            ->setPhoneNumber($phoneNumber)
            ->setVIPOnly($vIPOnly);
    }
    /**
     * Get NameCriteria value
     * @return \Travelport\UniversalRecord\StructType\NameCriteria|null
     */
    public function getNameCriteria(): ?\Travelport\UniversalRecord\StructType\NameCriteria
    {
        return $this->NameCriteria ?? null;
    }
    /**
     * Set NameCriteria value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\NameCriteria $nameCriteria
     * @return \Travelport\UniversalRecord\StructType\TravelerCriteria
     */
    public function setNameCriteria(?\Travelport\UniversalRecord\StructType\NameCriteria $nameCriteria = null): self
    {
        if (is_null($nameCriteria) || (is_array($nameCriteria) && empty($nameCriteria))) {
            unset($this->NameCriteria);
        } else {
            $this->NameCriteria = $nameCriteria;
        }
        
        return $this;
    }
    /**
     * Get AppliedProfileCriteria value
     * @return \Travelport\UniversalRecord\StructType\AppliedProfileCriteria|null
     */
    public function getAppliedProfileCriteria(): ?\Travelport\UniversalRecord\StructType\AppliedProfileCriteria
    {
        return $this->AppliedProfileCriteria ?? null;
    }
    /**
     * Set AppliedProfileCriteria value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\AppliedProfileCriteria $appliedProfileCriteria
     * @return \Travelport\UniversalRecord\StructType\TravelerCriteria
     */
    public function setAppliedProfileCriteria(?\Travelport\UniversalRecord\StructType\AppliedProfileCriteria $appliedProfileCriteria = null): self
    {
        if (is_null($appliedProfileCriteria) || (is_array($appliedProfileCriteria) && empty($appliedProfileCriteria))) {
            unset($this->AppliedProfileCriteria);
        } else {
            $this->AppliedProfileCriteria = $appliedProfileCriteria;
        }
        
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param string $phoneNumber
     * @return \Travelport\UniversalRecord\StructType\TravelerCriteria
     */
    public function setPhoneNumber(?string $phoneNumber = null): self
    {
        $this->PhoneNumber = $phoneNumber;
        
        return $this;
    }
    /**
     * Get VIPOnly value
     * @return bool|null
     */
    public function getVIPOnly(): ?bool
    {
        return $this->VIPOnly;
    }
    /**
     * Set VIPOnly value
     * @param bool $vIPOnly
     * @return \Travelport\UniversalRecord\StructType\TravelerCriteria
     */
    public function setVIPOnly(?bool $vIPOnly = null): self
    {
        $this->VIPOnly = $vIPOnly;
        
        return $this;
    }
}
