<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?\Travelport\UniversalRecord\StructType\NameCriteria $NameCriteria = null;
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
    protected ?\Travelport\UniversalRecord\StructType\AppliedProfileCriteria $AppliedProfileCriteria = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - documentation: To Search for Phone Number match
     * - use: optional
     * @var string|null
     */
    protected ?string $PhoneNumber = null;
    /**
     * The VIPOnly
     * Meta information extracted from the WSDL
     * - documentation: To Search for VIP traveler
     * - use: optional
     * @var bool|null
     */
    protected ?bool $VIPOnly = null;
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
        return isset($this->NameCriteria) ? $this->NameCriteria : null;
    }
    /**
     * This method is responsible for validating the value passed to the setNameCriteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNameCriteria method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateNameCriteriaForChoiceConstraintsFromSetNameCriteria($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AppliedProfileCriteria',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property NameCriteria can\'t be set as the property %s is already set. Only one property must be set among these properties: NameCriteria, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set NameCriteria value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\NameCriteria $nameCriteria
     * @return \Travelport\UniversalRecord\StructType\TravelerCriteria
     */
    public function setNameCriteria(?\Travelport\UniversalRecord\StructType\NameCriteria $nameCriteria = null): self
    {
        // validation for constraint: choice(NameCriteria, AppliedProfileCriteria)
        if ('' !== ($nameCriteriaChoiceErrorMessage = self::validateNameCriteriaForChoiceConstraintsFromSetNameCriteria($nameCriteria))) {
            throw new InvalidArgumentException($nameCriteriaChoiceErrorMessage, __LINE__);
        }
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
        return isset($this->AppliedProfileCriteria) ? $this->AppliedProfileCriteria : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAppliedProfileCriteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAppliedProfileCriteria method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAppliedProfileCriteriaForChoiceConstraintsFromSetAppliedProfileCriteria($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'NameCriteria',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AppliedProfileCriteria can\'t be set as the property %s is already set. Only one property must be set among these properties: AppliedProfileCriteria, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AppliedProfileCriteria value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AppliedProfileCriteria $appliedProfileCriteria
     * @return \Travelport\UniversalRecord\StructType\TravelerCriteria
     */
    public function setAppliedProfileCriteria(?\Travelport\UniversalRecord\StructType\AppliedProfileCriteria $appliedProfileCriteria = null): self
    {
        // validation for constraint: choice(NameCriteria, AppliedProfileCriteria)
        if ('' !== ($appliedProfileCriteriaChoiceErrorMessage = self::validateAppliedProfileCriteriaForChoiceConstraintsFromSetAppliedProfileCriteria($appliedProfileCriteria))) {
            throw new InvalidArgumentException($appliedProfileCriteriaChoiceErrorMessage, __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneNumber, true), gettype($phoneNumber)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($vIPOnly) && !is_bool($vIPOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vIPOnly, true), gettype($vIPOnly)), __LINE__);
        }
        $this->VIPOnly = $vIPOnly;
        
        return $this;
    }
}
