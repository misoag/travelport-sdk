<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerTypeLevel StructType
 * Meta information extracted from the WSDL
 * - documentation: Specify commission which is applicable to per PTC level.
 * @subpackage Structs
 */
class PassengerTypeLevel extends AbstractStructBase
{
    /**
     * The TravelerType
     * Meta information extracted from the WSDL
     * - documentation: Passenger Type Code (ADT, A2B5)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 3
     * - use: required
     * @var string
     */
    public string $TravelerType;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: The monetary amount of the commission. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: typeMoney
     * - use: optional
     * @var string|null
     */
    public ?string $Amount = null;
    /**
     * The Percentage
     * Meta information extracted from the WSDL
     * - documentation: The percent of the commission. | A percentage that can include up to two decimal places
     * - base: xs:string
     * - pattern: ([0-9]{1,2}|100)\.[0-9]{1,2}
     * - type: typePercentageWithDecimal
     * - use: optional
     * @var string|null
     */
    public ?string $Percentage = null;
    /**
     * The CommissionCap
     * Meta information extracted from the WSDL
     * - documentation: Commission cap for the Airline. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: typeMoney
     * - use: optional
     * @var string|null
     */
    public ?string $CommissionCap = null;
    /**
     * Constructor method for PassengerTypeLevel
     * @uses PassengerTypeLevel::setTravelerType()
     * @uses PassengerTypeLevel::setAmount()
     * @uses PassengerTypeLevel::setPercentage()
     * @uses PassengerTypeLevel::setCommissionCap()
     * @param string $travelerType
     * @param string $amount
     * @param string $percentage
     * @param string $commissionCap
     */
    public function __construct(string $travelerType, ?string $amount = null, ?string $percentage = null, ?string $commissionCap = null)
    {
        $this
            ->setTravelerType($travelerType)
            ->setAmount($amount)
            ->setPercentage($percentage)
            ->setCommissionCap($commissionCap);
    }
    /**
     * Get TravelerType value
     * @return string
     */
    public function getTravelerType(): string
    {
        return $this->TravelerType;
    }
    /**
     * Set TravelerType value
     * @param string $travelerType
     * @return \Travelport\UniversalRecord\StructType\PassengerTypeLevel
     */
    public function setTravelerType(string $travelerType): self
    {
        $this->TravelerType = $travelerType;
        
        return $this;
    }
    /**
     * Get Amount value
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Travelport\UniversalRecord\StructType\PassengerTypeLevel
     */
    public function setAmount(?string $amount = null): self
    {
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get Percentage value
     * @return string|null
     */
    public function getPercentage(): ?string
    {
        return $this->Percentage;
    }
    /**
     * Set Percentage value
     * @param string $percentage
     * @return \Travelport\UniversalRecord\StructType\PassengerTypeLevel
     */
    public function setPercentage(?string $percentage = null): self
    {
        $this->Percentage = $percentage;
        
        return $this;
    }
    /**
     * Get CommissionCap value
     * @return string|null
     */
    public function getCommissionCap(): ?string
    {
        return $this->CommissionCap;
    }
    /**
     * Set CommissionCap value
     * @param string $commissionCap
     * @return \Travelport\UniversalRecord\StructType\PassengerTypeLevel
     */
    public function setCommissionCap(?string $commissionCap = null): self
    {
        $this->CommissionCap = $commissionCap;
        
        return $this;
    }
}
