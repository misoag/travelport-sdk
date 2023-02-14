<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $TravelerType;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: The monetary amount of the commission. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: typeMoney
     * - use: optional
     * @var string|null
     */
    protected ?string $Amount = null;
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
    protected ?string $Percentage = null;
    /**
     * The CommissionCap
     * Meta information extracted from the WSDL
     * - documentation: Commission cap for the Airline. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: typeMoney
     * - use: optional
     * @var string|null
     */
    protected ?string $CommissionCap = null;
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
        // validation for constraint: string
        if (!is_null($travelerType) && !is_string($travelerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelerType, true), gettype($travelerType)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($travelerType) && mb_strlen((string) $travelerType) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $travelerType)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($travelerType) && mb_strlen((string) $travelerType) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $travelerType)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($percentage) && !is_string($percentage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($percentage, true), gettype($percentage)), __LINE__);
        }
        // validation for constraint: pattern(([0-9]{1,2}|100)\.[0-9]{1,2})
        if (!is_null($percentage) && !preg_match('/([0-9]{1,2}|100)\\.[0-9]{1,2}/', $percentage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /([0-9]{1,2}|100)\\.[0-9]{1,2}/', var_export($percentage, true)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($commissionCap) && !is_string($commissionCap)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commissionCap, true), gettype($commissionCap)), __LINE__);
        }
        $this->CommissionCap = $commissionCap;
        
        return $this;
    }
}
