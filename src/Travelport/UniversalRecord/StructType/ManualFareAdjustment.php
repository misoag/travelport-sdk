<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManualFareAdjustment StructType
 * @subpackage Structs
 */
class ManualFareAdjustment extends AbstractStructBase
{
    /**
     * The AppliedOn
     * Meta information extracted from the WSDL
     * - documentation: Represents pricing component upon which manual increment/discount to be applied. Presently supported values are Base and Total. Other is present as a future place holder but presently no request processing logic is available for
     * value Other
     * - use: required
     * @var string
     */
    protected string $AppliedOn;
    /**
     * The AdjustmentType
     * Meta information extracted from the WSDL
     * - documentation: Represents process used for applying manual discount/increment. Presently supported values are Flat, Percentage.
     * - use: required
     * @var string
     */
    protected string $AdjustmentType;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: Represents value of increment/discount applied. Negative value is considered as discount whereas positive value represents increment
     * - use: required
     * @var float
     */
    protected float $Value;
    /**
     * The PassengerRef
     * Meta information extracted from the WSDL
     * - documentation: Represents passenger association. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $PassengerRef = null;
    /**
     * The TicketDesignator
     * Meta information extracted from the WSDL
     * - documentation: Providers: 1p/1j | Ticket Designator type.Size can be up to 20 characters
     * - base: xs:string
     * - maxLength: 20
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    protected ?string $TicketDesignator = null;
    /**
     * The FareType
     * Meta information extracted from the WSDL
     * - documentation: Providers: 1p/1j | ATPCO fare type code (e.g. XPN)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $FareType = null;
    /**
     * Constructor method for ManualFareAdjustment
     * @uses ManualFareAdjustment::setAppliedOn()
     * @uses ManualFareAdjustment::setAdjustmentType()
     * @uses ManualFareAdjustment::setValue()
     * @uses ManualFareAdjustment::setPassengerRef()
     * @uses ManualFareAdjustment::setTicketDesignator()
     * @uses ManualFareAdjustment::setFareType()
     * @param string $appliedOn
     * @param string $adjustmentType
     * @param float $value
     * @param string $passengerRef
     * @param string $ticketDesignator
     * @param string $fareType
     */
    public function __construct(string $appliedOn, string $adjustmentType, float $value, ?string $passengerRef = null, ?string $ticketDesignator = null, ?string $fareType = null)
    {
        $this
            ->setAppliedOn($appliedOn)
            ->setAdjustmentType($adjustmentType)
            ->setValue($value)
            ->setPassengerRef($passengerRef)
            ->setTicketDesignator($ticketDesignator)
            ->setFareType($fareType);
    }
    /**
     * Get AppliedOn value
     * @return string
     */
    public function getAppliedOn(): string
    {
        return $this->AppliedOn;
    }
    /**
     * Set AppliedOn value
     * @uses \Travelport\UniversalRecord\EnumType\TypeAdjustmentTarget::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeAdjustmentTarget::getValidValues()
     * @throws InvalidArgumentException
     * @param string $appliedOn
     * @return \Travelport\UniversalRecord\StructType\ManualFareAdjustment
     */
    public function setAppliedOn(string $appliedOn): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeAdjustmentTarget::valueIsValid($appliedOn)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeAdjustmentTarget', is_array($appliedOn) ? implode(', ', $appliedOn) : var_export($appliedOn, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeAdjustmentTarget::getValidValues())), __LINE__);
        }
        $this->AppliedOn = $appliedOn;
        
        return $this;
    }
    /**
     * Get AdjustmentType value
     * @return string
     */
    public function getAdjustmentType(): string
    {
        return $this->AdjustmentType;
    }
    /**
     * Set AdjustmentType value
     * @uses \Travelport\UniversalRecord\EnumType\TypeAdjustmentType::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeAdjustmentType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $adjustmentType
     * @return \Travelport\UniversalRecord\StructType\ManualFareAdjustment
     */
    public function setAdjustmentType(string $adjustmentType): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeAdjustmentType::valueIsValid($adjustmentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeAdjustmentType', is_array($adjustmentType) ? implode(', ', $adjustmentType) : var_export($adjustmentType, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeAdjustmentType::getValidValues())), __LINE__);
        }
        $this->AdjustmentType = $adjustmentType;
        
        return $this;
    }
    /**
     * Get Value value
     * @return float
     */
    public function getValue(): float
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param float $value
     * @return \Travelport\UniversalRecord\StructType\ManualFareAdjustment
     */
    public function setValue(float $value): self
    {
        // validation for constraint: float
        if (!is_null($value) && !(is_float($value) || is_numeric($value))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
        
        return $this;
    }
    /**
     * Get PassengerRef value
     * @return string|null
     */
    public function getPassengerRef(): ?string
    {
        return $this->PassengerRef;
    }
    /**
     * Set PassengerRef value
     * @param string $passengerRef
     * @return \Travelport\UniversalRecord\StructType\ManualFareAdjustment
     */
    public function setPassengerRef(?string $passengerRef = null): self
    {
        // validation for constraint: string
        if (!is_null($passengerRef) && !is_string($passengerRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passengerRef, true), gettype($passengerRef)), __LINE__);
        }
        $this->PassengerRef = $passengerRef;
        
        return $this;
    }
    /**
     * Get TicketDesignator value
     * @return string|null
     */
    public function getTicketDesignator(): ?string
    {
        return $this->TicketDesignator;
    }
    /**
     * Set TicketDesignator value
     * @param string $ticketDesignator
     * @return \Travelport\UniversalRecord\StructType\ManualFareAdjustment
     */
    public function setTicketDesignator(?string $ticketDesignator = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketDesignator) && !is_string($ticketDesignator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketDesignator, true), gettype($ticketDesignator)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($ticketDesignator) && mb_strlen((string) $ticketDesignator) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $ticketDesignator)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($ticketDesignator) && mb_strlen((string) $ticketDesignator) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $ticketDesignator)), __LINE__);
        }
        $this->TicketDesignator = $ticketDesignator;
        
        return $this;
    }
    /**
     * Get FareType value
     * @return string|null
     */
    public function getFareType(): ?string
    {
        return $this->FareType;
    }
    /**
     * Set FareType value
     * @param string $fareType
     * @return \Travelport\UniversalRecord\StructType\ManualFareAdjustment
     */
    public function setFareType(?string $fareType = null): self
    {
        // validation for constraint: string
        if (!is_null($fareType) && !is_string($fareType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareType, true), gettype($fareType)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($fareType) && mb_strlen((string) $fareType) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $fareType)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($fareType) && mb_strlen((string) $fareType) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $fareType)), __LINE__);
        }
        $this->FareType = $fareType;
        
        return $this;
    }
}
