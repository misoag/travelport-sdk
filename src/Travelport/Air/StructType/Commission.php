<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Commission StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifies the agency commission
 * @subpackage Structs
 */
class Commission extends AbstractStructBase
{
    /**
     * The Level
     * Meta information extracted from the WSDL
     * - documentation: The commission percentage level.
     * - use: required
     * @var string
     */
    public string $Level;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: The commission type.
     * - use: required
     * @var string
     */
    public string $Type;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The Modifier
     * Meta information extracted from the WSDL
     * - documentation: Optional commission modifier.
     * - use: optional
     * @var string|null
     */
    public ?string $Modifier = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: The monetary amount. | The monetary amount of the commission. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: typeMoney
     * - use: optional
     * @var string|null
     */
    public ?string $Amount = null;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 15
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    public ?string $Value = null;
    /**
     * The Percentage
     * Meta information extracted from the WSDL
     * - documentation: The percentage. | The percent of the commission. | A percentage that can include up to two decimal places
     * - base: xs:string
     * - pattern: ([0-9]{1,2}|100)\.[0-9]{1,2}
     * - type: typePercentageWithDecimal
     * - use: optional
     * @var string|null
     */
    public ?string $Percentage = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: A reference to a passenger. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $BookingTravelerRef = null;
    /**
     * The CommissionOverride
     * Meta information extracted from the WSDL
     * - documentation: This is enabled to override CAT-35 commission error during air ticketing. PROVIDER SUPPORTED:Worldspan
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $CommissionOverride = null;
    /**
     * Constructor method for Commission
     * @uses Commission::setLevel()
     * @uses Commission::setType()
     * @uses Commission::setKey()
     * @uses Commission::setModifier()
     * @uses Commission::setAmount()
     * @uses Commission::setValue()
     * @uses Commission::setPercentage()
     * @uses Commission::setBookingTravelerRef()
     * @uses Commission::setCommissionOverride()
     * @param string $level
     * @param string $type
     * @param string $key
     * @param string $modifier
     * @param string $amount
     * @param string $value
     * @param string $percentage
     * @param string $bookingTravelerRef
     * @param bool $commissionOverride
     */
    public function __construct(string $level, string $type, ?string $key = null, ?string $modifier = null, ?string $amount = null, ?string $value = null, ?string $percentage = null, ?string $bookingTravelerRef = null, ?bool $commissionOverride = false)
    {
        $this
            ->setLevel($level)
            ->setType($type)
            ->setKey($key)
            ->setModifier($modifier)
            ->setAmount($amount)
            ->setValue($value)
            ->setPercentage($percentage)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setCommissionOverride($commissionOverride);
    }
    /**
     * Get Level value
     * @return string
     */
    public function getLevel(): string
    {
        return $this->Level;
    }
    /**
     * Set Level value
     * @param string $level
     * @return \Travelport\Air\StructType\Commission
     */
    public function setLevel(string $level): self
    {
        $this->Level = $level;
        
        return $this;
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\Air\StructType\Commission
     */
    public function setType(string $type): self
    {
        $this->Type = $type;
        
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
     * @return \Travelport\Air\StructType\Commission
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get Modifier value
     * @return string|null
     */
    public function getModifier(): ?string
    {
        return $this->Modifier;
    }
    /**
     * Set Modifier value
     * @param string $modifier
     * @return \Travelport\Air\StructType\Commission
     */
    public function setModifier(?string $modifier = null): self
    {
        $this->Modifier = $modifier;
        
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
     * @return \Travelport\Air\StructType\Commission
     */
    public function setAmount(?string $amount = null): self
    {
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \Travelport\Air\StructType\Commission
     */
    public function setValue(?string $value = null): self
    {
        $this->Value = $value;
        
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
     * @return \Travelport\Air\StructType\Commission
     */
    public function setPercentage(?string $percentage = null): self
    {
        $this->Percentage = $percentage;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return string|null
     */
    public function getBookingTravelerRef(): ?string
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param string $bookingTravelerRef
     * @return \Travelport\Air\StructType\Commission
     */
    public function setBookingTravelerRef(?string $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Get CommissionOverride value
     * @return bool|null
     */
    public function getCommissionOverride(): ?bool
    {
        return $this->CommissionOverride;
    }
    /**
     * Set CommissionOverride value
     * @param bool $commissionOverride
     * @return \Travelport\Air\StructType\Commission
     */
    public function setCommissionOverride(?bool $commissionOverride = false): self
    {
        $this->CommissionOverride = $commissionOverride;
        
        return $this;
    }
}
