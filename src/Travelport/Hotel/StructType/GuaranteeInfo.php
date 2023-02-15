<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuaranteeInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Accepted payment types | Amount required for deposit/prepayment
 * @subpackage Structs
 */
class GuaranteeInfo extends AbstractStructBase
{
    /**
     * The DepositAmount
     * Meta information extracted from the WSDL
     * - choice: DepositAmount | DepositNights | DepositPercent
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * - minOccurs: 0
     * - ref: DepositAmount
     * @var \Travelport\Hotel\StructType\DepositAmount|null
     */
    protected ?\Travelport\Hotel\StructType\DepositAmount $DepositAmount = null;
    /**
     * The DepositNights
     * Meta information extracted from the WSDL
     * - documentation: Number of Nights required for deposit/prepayment
     * - choice: DepositAmount | DepositNights | DepositPercent
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var int|null
     */
    protected ?int $DepositNights = null;
    /**
     * The DepositPercent
     * Meta information extracted from the WSDL
     * - documentation: Percentage of stay required for deposit/prepayment
     * - choice: DepositAmount | DepositNights | DepositPercent
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var int|null
     */
    protected ?int $DepositPercent = null;
    /**
     * The GuaranteePaymentType
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: GuaranteePaymentType
     * @var \Travelport\Hotel\StructType\GuaranteePaymentType[]
     */
    protected ?array $GuaranteePaymentType = null;
    /**
     * The AbsoluteDeadline
     * Meta information extracted from the WSDL
     * - documentation: Latest date/time when deposit/payment/guarantee is required.
     * - use: optional
     * @var string|null
     */
    protected ?string $AbsoluteDeadline = null;
    /**
     * The CredentialsRequired
     * Meta information extracted from the WSDL
     * - documentation: Identification required at booking/checkin. Not supported by 1P,1J.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $CredentialsRequired = null;
    /**
     * The HoldTime
     * Meta information extracted from the WSDL
     * - documentation: Expiration time for room reservation held without deposit/guarantee.
     * - use: optional
     * @var string|null
     */
    protected ?string $HoldTime = null;
    /**
     * The GuaranteeType
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $GuaranteeType = null;
    /**
     * The OffsetTimeUnit
     * Meta information extracted from the WSDL
     * - documentation: The units of time, e.g: days, hours, etc that apply to the deadline. Enumerated values are “Year”, “Month”, “Day”, and “Hour”. | Used for Character Strings, length 1 to 16.
     * - base: xs:string
     * - maxLength: 16
     * - minLength: 1
     * - type: common:StringLength1to16
     * - use: optional
     * @var string|null
     */
    protected ?string $OffsetTimeUnit = null;
    /**
     * The OffsetUnitMultiplier
     * Meta information extracted from the WSDL
     * - documentation: The number of units of DeadlineTimeUnit. | Used for Numeric values, from 0 to 999 inclusive.
     * - base: xs:integer
     * - maxInclusive: 999
     * - minInclusive: 0
     * - type: common:Numeric0to999
     * - use: optional
     * @var int|null
     */
    protected ?int $OffsetUnitMultiplier = null;
    /**
     * The OffsetDropTime
     * Meta information extracted from the WSDL
     * - documentation: An enumerated type indicating when the deadline drop time goes into effect. Enumerated values are “AfterBooking” and “BeforeArrival”. | Used for Character Strings, length 1 to 20.
     * - base: xs:string
     * - maxLength: 20
     * - minLength: 1
     * - type: common:StringLength1to20
     * - use: optional
     * @var string|null
     */
    protected ?string $OffsetDropTime = null;
    /**
     * Constructor method for GuaranteeInfo
     * @uses GuaranteeInfo::setDepositAmount()
     * @uses GuaranteeInfo::setDepositNights()
     * @uses GuaranteeInfo::setDepositPercent()
     * @uses GuaranteeInfo::setGuaranteePaymentType()
     * @uses GuaranteeInfo::setAbsoluteDeadline()
     * @uses GuaranteeInfo::setCredentialsRequired()
     * @uses GuaranteeInfo::setHoldTime()
     * @uses GuaranteeInfo::setGuaranteeType()
     * @uses GuaranteeInfo::setOffsetTimeUnit()
     * @uses GuaranteeInfo::setOffsetUnitMultiplier()
     * @uses GuaranteeInfo::setOffsetDropTime()
     * @param \Travelport\Hotel\StructType\DepositAmount $depositAmount
     * @param int $depositNights
     * @param int $depositPercent
     * @param \Travelport\Hotel\StructType\GuaranteePaymentType[] $guaranteePaymentType
     * @param string $absoluteDeadline
     * @param bool $credentialsRequired
     * @param string $holdTime
     * @param string $guaranteeType
     * @param string $offsetTimeUnit
     * @param int $offsetUnitMultiplier
     * @param string $offsetDropTime
     */
    public function __construct(?\Travelport\Hotel\StructType\DepositAmount $depositAmount = null, ?int $depositNights = null, ?int $depositPercent = null, ?array $guaranteePaymentType = null, ?string $absoluteDeadline = null, ?bool $credentialsRequired = null, ?string $holdTime = null, ?string $guaranteeType = null, ?string $offsetTimeUnit = null, ?int $offsetUnitMultiplier = null, ?string $offsetDropTime = null)
    {
        $this
            ->setDepositAmount($depositAmount)
            ->setDepositNights($depositNights)
            ->setDepositPercent($depositPercent)
            ->setGuaranteePaymentType($guaranteePaymentType)
            ->setAbsoluteDeadline($absoluteDeadline)
            ->setCredentialsRequired($credentialsRequired)
            ->setHoldTime($holdTime)
            ->setGuaranteeType($guaranteeType)
            ->setOffsetTimeUnit($offsetTimeUnit)
            ->setOffsetUnitMultiplier($offsetUnitMultiplier)
            ->setOffsetDropTime($offsetDropTime);
    }
    /**
     * Get DepositAmount value
     * @return \Travelport\Hotel\StructType\DepositAmount|null
     */
    public function getDepositAmount(): ?\Travelport\Hotel\StructType\DepositAmount
    {
        return isset($this->DepositAmount) ? $this->DepositAmount : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDepositAmount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDepositAmount method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDepositAmountForChoiceConstraintsFromSetDepositAmount($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DepositNights',
            'DepositPercent',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property DepositAmount can\'t be set as the property %s is already set. Only one property must be set among these properties: DepositAmount, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set DepositAmount value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\DepositAmount $depositAmount
     * @return \Travelport\Hotel\StructType\GuaranteeInfo
     */
    public function setDepositAmount(?\Travelport\Hotel\StructType\DepositAmount $depositAmount = null): self
    {
        // validation for constraint: choice(DepositAmount, DepositNights, DepositPercent)
        if ('' !== ($depositAmountChoiceErrorMessage = self::validateDepositAmountForChoiceConstraintsFromSetDepositAmount($depositAmount))) {
            throw new InvalidArgumentException($depositAmountChoiceErrorMessage, __LINE__);
        }
        if (is_null($depositAmount) || (is_array($depositAmount) && empty($depositAmount))) {
            unset($this->DepositAmount);
        } else {
            $this->DepositAmount = $depositAmount;
        }
        
        return $this;
    }
    /**
     * Get DepositNights value
     * @return int|null
     */
    public function getDepositNights(): ?int
    {
        return isset($this->DepositNights) ? $this->DepositNights : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDepositNights method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDepositNights method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDepositNightsForChoiceConstraintsFromSetDepositNights($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DepositAmount',
            'DepositPercent',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property DepositNights can\'t be set as the property %s is already set. Only one property must be set among these properties: DepositNights, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set DepositNights value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param int $depositNights
     * @return \Travelport\Hotel\StructType\GuaranteeInfo
     */
    public function setDepositNights(?int $depositNights = null): self
    {
        // validation for constraint: int
        if (!is_null($depositNights) && !(is_int($depositNights) || ctype_digit($depositNights))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($depositNights, true), gettype($depositNights)), __LINE__);
        }
        // validation for constraint: choice(DepositAmount, DepositNights, DepositPercent)
        if ('' !== ($depositNightsChoiceErrorMessage = self::validateDepositNightsForChoiceConstraintsFromSetDepositNights($depositNights))) {
            throw new InvalidArgumentException($depositNightsChoiceErrorMessage, __LINE__);
        }
        if (is_null($depositNights) || (is_array($depositNights) && empty($depositNights))) {
            unset($this->DepositNights);
        } else {
            $this->DepositNights = $depositNights;
        }
        
        return $this;
    }
    /**
     * Get DepositPercent value
     * @return int|null
     */
    public function getDepositPercent(): ?int
    {
        return isset($this->DepositPercent) ? $this->DepositPercent : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDepositPercent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDepositPercent method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDepositPercentForChoiceConstraintsFromSetDepositPercent($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DepositAmount',
            'DepositNights',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property DepositPercent can\'t be set as the property %s is already set. Only one property must be set among these properties: DepositPercent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set DepositPercent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param int $depositPercent
     * @return \Travelport\Hotel\StructType\GuaranteeInfo
     */
    public function setDepositPercent(?int $depositPercent = null): self
    {
        // validation for constraint: int
        if (!is_null($depositPercent) && !(is_int($depositPercent) || ctype_digit($depositPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($depositPercent, true), gettype($depositPercent)), __LINE__);
        }
        // validation for constraint: choice(DepositAmount, DepositNights, DepositPercent)
        if ('' !== ($depositPercentChoiceErrorMessage = self::validateDepositPercentForChoiceConstraintsFromSetDepositPercent($depositPercent))) {
            throw new InvalidArgumentException($depositPercentChoiceErrorMessage, __LINE__);
        }
        if (is_null($depositPercent) || (is_array($depositPercent) && empty($depositPercent))) {
            unset($this->DepositPercent);
        } else {
            $this->DepositPercent = $depositPercent;
        }
        
        return $this;
    }
    /**
     * Get GuaranteePaymentType value
     * @return \Travelport\Hotel\StructType\GuaranteePaymentType[]
     */
    public function getGuaranteePaymentType(): ?array
    {
        return $this->GuaranteePaymentType;
    }
    /**
     * This method is responsible for validating the values passed to the setGuaranteePaymentType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGuaranteePaymentType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGuaranteePaymentTypeForArrayConstraintsFromSetGuaranteePaymentType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $guaranteeInfoGuaranteePaymentTypeItem) {
            // validation for constraint: itemType
            if (!$guaranteeInfoGuaranteePaymentTypeItem instanceof \Travelport\Hotel\StructType\GuaranteePaymentType) {
                $invalidValues[] = is_object($guaranteeInfoGuaranteePaymentTypeItem) ? get_class($guaranteeInfoGuaranteePaymentTypeItem) : sprintf('%s(%s)', gettype($guaranteeInfoGuaranteePaymentTypeItem), var_export($guaranteeInfoGuaranteePaymentTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GuaranteePaymentType property can only contain items of type \Travelport\Hotel\StructType\GuaranteePaymentType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set GuaranteePaymentType value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\GuaranteePaymentType[] $guaranteePaymentType
     * @return \Travelport\Hotel\StructType\GuaranteeInfo
     */
    public function setGuaranteePaymentType(?array $guaranteePaymentType = null): self
    {
        // validation for constraint: array
        if ('' !== ($guaranteePaymentTypeArrayErrorMessage = self::validateGuaranteePaymentTypeForArrayConstraintsFromSetGuaranteePaymentType($guaranteePaymentType))) {
            throw new InvalidArgumentException($guaranteePaymentTypeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($guaranteePaymentType) && count($guaranteePaymentType) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($guaranteePaymentType)), __LINE__);
        }
        $this->GuaranteePaymentType = $guaranteePaymentType;
        
        return $this;
    }
    /**
     * Add item to GuaranteePaymentType value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\GuaranteePaymentType $item
     * @return \Travelport\Hotel\StructType\GuaranteeInfo
     */
    public function addToGuaranteePaymentType(\Travelport\Hotel\StructType\GuaranteePaymentType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\GuaranteePaymentType) {
            throw new InvalidArgumentException(sprintf('The GuaranteePaymentType property can only contain items of type \Travelport\Hotel\StructType\GuaranteePaymentType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->GuaranteePaymentType) && count($this->GuaranteePaymentType) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->GuaranteePaymentType)), __LINE__);
        }
        $this->GuaranteePaymentType[] = $item;
        
        return $this;
    }
    /**
     * Get AbsoluteDeadline value
     * @return string|null
     */
    public function getAbsoluteDeadline(): ?string
    {
        return $this->AbsoluteDeadline;
    }
    /**
     * Set AbsoluteDeadline value
     * @param string $absoluteDeadline
     * @return \Travelport\Hotel\StructType\GuaranteeInfo
     */
    public function setAbsoluteDeadline(?string $absoluteDeadline = null): self
    {
        // validation for constraint: string
        if (!is_null($absoluteDeadline) && !is_string($absoluteDeadline)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($absoluteDeadline, true), gettype($absoluteDeadline)), __LINE__);
        }
        $this->AbsoluteDeadline = $absoluteDeadline;
        
        return $this;
    }
    /**
     * Get CredentialsRequired value
     * @return bool|null
     */
    public function getCredentialsRequired(): ?bool
    {
        return $this->CredentialsRequired;
    }
    /**
     * Set CredentialsRequired value
     * @param bool $credentialsRequired
     * @return \Travelport\Hotel\StructType\GuaranteeInfo
     */
    public function setCredentialsRequired(?bool $credentialsRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($credentialsRequired) && !is_bool($credentialsRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($credentialsRequired, true), gettype($credentialsRequired)), __LINE__);
        }
        $this->CredentialsRequired = $credentialsRequired;
        
        return $this;
    }
    /**
     * Get HoldTime value
     * @return string|null
     */
    public function getHoldTime(): ?string
    {
        return $this->HoldTime;
    }
    /**
     * Set HoldTime value
     * @param string $holdTime
     * @return \Travelport\Hotel\StructType\GuaranteeInfo
     */
    public function setHoldTime(?string $holdTime = null): self
    {
        // validation for constraint: string
        if (!is_null($holdTime) && !is_string($holdTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($holdTime, true), gettype($holdTime)), __LINE__);
        }
        $this->HoldTime = $holdTime;
        
        return $this;
    }
    /**
     * Get GuaranteeType value
     * @return string|null
     */
    public function getGuaranteeType(): ?string
    {
        return $this->GuaranteeType;
    }
    /**
     * Set GuaranteeType value
     * @param string $guaranteeType
     * @return \Travelport\Hotel\StructType\GuaranteeInfo
     */
    public function setGuaranteeType(?string $guaranteeType = null): self
    {
        // validation for constraint: string
        if (!is_null($guaranteeType) && !is_string($guaranteeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guaranteeType, true), gettype($guaranteeType)), __LINE__);
        }
        $this->GuaranteeType = $guaranteeType;
        
        return $this;
    }
    /**
     * Get OffsetTimeUnit value
     * @return string|null
     */
    public function getOffsetTimeUnit(): ?string
    {
        return $this->OffsetTimeUnit;
    }
    /**
     * Set OffsetTimeUnit value
     * @param string $offsetTimeUnit
     * @return \Travelport\Hotel\StructType\GuaranteeInfo
     */
    public function setOffsetTimeUnit(?string $offsetTimeUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($offsetTimeUnit) && !is_string($offsetTimeUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($offsetTimeUnit, true), gettype($offsetTimeUnit)), __LINE__);
        }
        // validation for constraint: maxLength(16)
        if (!is_null($offsetTimeUnit) && mb_strlen((string) $offsetTimeUnit) > 16) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 16', mb_strlen((string) $offsetTimeUnit)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($offsetTimeUnit) && mb_strlen((string) $offsetTimeUnit) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $offsetTimeUnit)), __LINE__);
        }
        $this->OffsetTimeUnit = $offsetTimeUnit;
        
        return $this;
    }
    /**
     * Get OffsetUnitMultiplier value
     * @return int|null
     */
    public function getOffsetUnitMultiplier(): ?int
    {
        return $this->OffsetUnitMultiplier;
    }
    /**
     * Set OffsetUnitMultiplier value
     * @param int $offsetUnitMultiplier
     * @return \Travelport\Hotel\StructType\GuaranteeInfo
     */
    public function setOffsetUnitMultiplier(?int $offsetUnitMultiplier = null): self
    {
        // validation for constraint: int
        if (!is_null($offsetUnitMultiplier) && !(is_int($offsetUnitMultiplier) || ctype_digit($offsetUnitMultiplier))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($offsetUnitMultiplier, true), gettype($offsetUnitMultiplier)), __LINE__);
        }
        // validation for constraint: maxInclusive(999)
        if (!is_null($offsetUnitMultiplier) && $offsetUnitMultiplier > 999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 999', var_export($offsetUnitMultiplier, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($offsetUnitMultiplier) && $offsetUnitMultiplier < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($offsetUnitMultiplier, true)), __LINE__);
        }
        $this->OffsetUnitMultiplier = $offsetUnitMultiplier;
        
        return $this;
    }
    /**
     * Get OffsetDropTime value
     * @return string|null
     */
    public function getOffsetDropTime(): ?string
    {
        return $this->OffsetDropTime;
    }
    /**
     * Set OffsetDropTime value
     * @param string $offsetDropTime
     * @return \Travelport\Hotel\StructType\GuaranteeInfo
     */
    public function setOffsetDropTime(?string $offsetDropTime = null): self
    {
        // validation for constraint: string
        if (!is_null($offsetDropTime) && !is_string($offsetDropTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($offsetDropTime, true), gettype($offsetDropTime)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($offsetDropTime) && mb_strlen((string) $offsetDropTime) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $offsetDropTime)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($offsetDropTime) && mb_strlen((string) $offsetDropTime) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $offsetDropTime)), __LINE__);
        }
        $this->OffsetDropTime = $offsetDropTime;
        
        return $this;
    }
}
