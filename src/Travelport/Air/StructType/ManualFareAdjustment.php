<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public string $AppliedOn;
    /**
     * The AdjustmentType
     * Meta information extracted from the WSDL
     * - documentation: Represents process used for applying manual discount/increment. Presently supported values are Flat, Percentage.
     * - use: required
     * @var string
     */
    public string $AdjustmentType;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: Represents value of increment/discount applied. Negative value is considered as discount whereas positive value represents increment
     * - use: required
     * @var float
     */
    public float $Value;
    /**
     * The PassengerRef
     * Meta information extracted from the WSDL
     * - documentation: Represents passenger association. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $PassengerRef = null;
    /**
     * The TicketDesignator
     * Meta information extracted from the WSDL
     * - documentation: Providers: 1p | Ticket Designator type.Size can be up to 20 characters
     * - base: xs:string
     * - maxLength: 20
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    public ?string $TicketDesignator = null;
    /**
     * The FareType
     * Meta information extracted from the WSDL
     * - documentation: Providers: 1p | ATPCO fare type code (e.g. XPN)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $FareType = null;
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
     * @param string $appliedOn
     * @return \Travelport\Air\StructType\ManualFareAdjustment
     */
    public function setAppliedOn(string $appliedOn): self
    {
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
     * @param string $adjustmentType
     * @return \Travelport\Air\StructType\ManualFareAdjustment
     */
    public function setAdjustmentType(string $adjustmentType): self
    {
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
     * @return \Travelport\Air\StructType\ManualFareAdjustment
     */
    public function setValue(float $value): self
    {
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
     * @return \Travelport\Air\StructType\ManualFareAdjustment
     */
    public function setPassengerRef(?string $passengerRef = null): self
    {
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
     * @return \Travelport\Air\StructType\ManualFareAdjustment
     */
    public function setTicketDesignator(?string $ticketDesignator = null): self
    {
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
     * @return \Travelport\Air\StructType\ManualFareAdjustment
     */
    public function setFareType(?string $fareType = null): self
    {
        $this->FareType = $fareType;
        
        return $this;
    }
}
