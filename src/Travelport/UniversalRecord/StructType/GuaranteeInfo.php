<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
     * @var \Travelport\UniversalRecord\StructType\DepositAmount|null
     */
    public ?\Travelport\UniversalRecord\StructType\DepositAmount $DepositAmount = null;
    /**
     * The DepositNights
     * Meta information extracted from the WSDL
     * - documentation: Number of Nights required for deposit/prepayment
     * - choice: DepositAmount | DepositNights | DepositPercent
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var int|null
     */
    public ?int $DepositNights = null;
    /**
     * The DepositPercent
     * Meta information extracted from the WSDL
     * - documentation: Percentage of stay required for deposit/prepayment
     * - choice: DepositAmount | DepositNights | DepositPercent
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var int|null
     */
    public ?int $DepositPercent = null;
    /**
     * The GuaranteePaymentType
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: GuaranteePaymentType
     * @var \Travelport\UniversalRecord\StructType\GuaranteePaymentType[]
     */
    public ?array $GuaranteePaymentType = null;
    /**
     * The AbsoluteDeadline
     * Meta information extracted from the WSDL
     * - documentation: Latest date/time when deposit/payment/guarantee is required.
     * - use: optional
     * @var string|null
     */
    public ?string $AbsoluteDeadline = null;
    /**
     * The CredentialsRequired
     * Meta information extracted from the WSDL
     * - documentation: Identification required at booking/checkin. Not supported by 1P.
     * - use: optional
     * @var bool|null
     */
    public ?bool $CredentialsRequired = null;
    /**
     * The HoldTime
     * Meta information extracted from the WSDL
     * - documentation: Expiration time for room reservation held without deposit/guarantee.
     * - use: optional
     * @var string|null
     */
    public ?string $HoldTime = null;
    /**
     * The GuaranteeType
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $GuaranteeType = null;
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
    public ?string $OffsetTimeUnit = null;
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
    public ?int $OffsetUnitMultiplier = null;
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
    public ?string $OffsetDropTime = null;
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
     * @param \Travelport\UniversalRecord\StructType\DepositAmount $depositAmount
     * @param int $depositNights
     * @param int $depositPercent
     * @param \Travelport\UniversalRecord\StructType\GuaranteePaymentType[] $guaranteePaymentType
     * @param string $absoluteDeadline
     * @param bool $credentialsRequired
     * @param string $holdTime
     * @param string $guaranteeType
     * @param string $offsetTimeUnit
     * @param int $offsetUnitMultiplier
     * @param string $offsetDropTime
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\DepositAmount $depositAmount = null, ?int $depositNights = null, ?int $depositPercent = null, ?array $guaranteePaymentType = null, ?string $absoluteDeadline = null, ?bool $credentialsRequired = null, ?string $holdTime = null, ?string $guaranteeType = null, ?string $offsetTimeUnit = null, ?int $offsetUnitMultiplier = null, ?string $offsetDropTime = null)
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
     * @return \Travelport\UniversalRecord\StructType\DepositAmount|null
     */
    public function getDepositAmount(): ?\Travelport\UniversalRecord\StructType\DepositAmount
    {
        return $this->DepositAmount ?? null;
    }
    /**
     * Set DepositAmount value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\DepositAmount $depositAmount
     * @return \Travelport\UniversalRecord\StructType\GuaranteeInfo
     */
    public function setDepositAmount(?\Travelport\UniversalRecord\StructType\DepositAmount $depositAmount = null): self
    {
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
        return $this->DepositNights ?? null;
    }
    /**
     * Set DepositNights value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param int $depositNights
     * @return \Travelport\UniversalRecord\StructType\GuaranteeInfo
     */
    public function setDepositNights(?int $depositNights = null): self
    {
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
        return $this->DepositPercent ?? null;
    }
    /**
     * Set DepositPercent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param int $depositPercent
     * @return \Travelport\UniversalRecord\StructType\GuaranteeInfo
     */
    public function setDepositPercent(?int $depositPercent = null): self
    {
        if (is_null($depositPercent) || (is_array($depositPercent) && empty($depositPercent))) {
            unset($this->DepositPercent);
        } else {
            $this->DepositPercent = $depositPercent;
        }
        
        return $this;
    }
    /**
     * Get GuaranteePaymentType value
     * @return \Travelport\UniversalRecord\StructType\GuaranteePaymentType[]
     */
    public function getGuaranteePaymentType(): ?array
    {
        return $this->GuaranteePaymentType;
    }
    /**
     * Set GuaranteePaymentType value
     * @param \Travelport\UniversalRecord\StructType\GuaranteePaymentType[] $guaranteePaymentType
     * @return \Travelport\UniversalRecord\StructType\GuaranteeInfo
     */
    public function setGuaranteePaymentType(?array $guaranteePaymentType = null): self
    {
        $this->GuaranteePaymentType = $guaranteePaymentType;
        
        return $this;
    }
    /**
     * Add item to GuaranteePaymentType value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\GuaranteePaymentType $item
     * @return \Travelport\UniversalRecord\StructType\GuaranteeInfo
     */
    public function addToGuaranteePaymentType(\Travelport\UniversalRecord\StructType\GuaranteePaymentType $item): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\GuaranteeInfo
     */
    public function setAbsoluteDeadline(?string $absoluteDeadline = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\GuaranteeInfo
     */
    public function setCredentialsRequired(?bool $credentialsRequired = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\GuaranteeInfo
     */
    public function setHoldTime(?string $holdTime = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\GuaranteeInfo
     */
    public function setGuaranteeType(?string $guaranteeType = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\GuaranteeInfo
     */
    public function setOffsetTimeUnit(?string $offsetTimeUnit = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\GuaranteeInfo
     */
    public function setOffsetUnitMultiplier(?int $offsetUnitMultiplier = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\GuaranteeInfo
     */
    public function setOffsetDropTime(?string $offsetDropTime = null): self
    {
        $this->OffsetDropTime = $offsetDropTime;
        
        return $this;
    }
}
