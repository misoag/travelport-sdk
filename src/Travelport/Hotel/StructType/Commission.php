<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
     * The Indicator
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Rate Plan is commissionable.True: Rate is commissionable.False: Rate is not commissionable.Unknown: Commission indicator is not returned by the hotel supplier (chain or property).
     * @var string|null
     */
    public ?string $Indicator = null;
    /**
     * The Percent
     * Meta information extracted from the WSDL
     * - documentation: The percentage applied to the commissionable amount to determine the payable commission amount.
     * @var string|null
     */
    public ?string $Percent = null;
    /**
     * The CommissionAmount
     * Meta information extracted from the WSDL
     * - documentation: The commission amount in the aggregator’s or supplier’s currency. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $CommissionAmount = null;
    /**
     * The ApproxCommissionAmount
     * Meta information extracted from the WSDL
     * - documentation: The approximate commission amount in the agency’s provisioned or requested currency. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ApproxCommissionAmount = null;
    /**
     * The CommissionOnSurcharges
     * Meta information extracted from the WSDL
     * - documentation: Commission on surcharges in the aggregator’s or supplier’s currency. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $CommissionOnSurcharges = null;
    /**
     * The ApproxCommissionOnSurcharges
     * Meta information extracted from the WSDL
     * - documentation: The approximate commission on surcharges in the agency’s provisioned or requested currency. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ApproxCommissionOnSurcharges = null;
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
     * @uses Commission::setIndicator()
     * @uses Commission::setPercent()
     * @uses Commission::setCommissionAmount()
     * @uses Commission::setApproxCommissionAmount()
     * @uses Commission::setCommissionOnSurcharges()
     * @uses Commission::setApproxCommissionOnSurcharges()
     * @param string $level
     * @param string $type
     * @param string $key
     * @param string $modifier
     * @param string $amount
     * @param string $value
     * @param string $percentage
     * @param string $bookingTravelerRef
     * @param bool $commissionOverride
     * @param string $indicator
     * @param string $percent
     * @param string $commissionAmount
     * @param string $approxCommissionAmount
     * @param string $commissionOnSurcharges
     * @param string $approxCommissionOnSurcharges
     */
    public function __construct(string $level, string $type, ?string $key = null, ?string $modifier = null, ?string $amount = null, ?string $value = null, ?string $percentage = null, ?string $bookingTravelerRef = null, ?bool $commissionOverride = false, ?string $indicator = null, ?string $percent = null, ?string $commissionAmount = null, ?string $approxCommissionAmount = null, ?string $commissionOnSurcharges = null, ?string $approxCommissionOnSurcharges = null)
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
            ->setCommissionOverride($commissionOverride)
            ->setIndicator($indicator)
            ->setPercent($percent)
            ->setCommissionAmount($commissionAmount)
            ->setApproxCommissionAmount($approxCommissionAmount)
            ->setCommissionOnSurcharges($commissionOnSurcharges)
            ->setApproxCommissionOnSurcharges($approxCommissionOnSurcharges);
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
     * @return \Travelport\Hotel\StructType\Commission
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
     * @return \Travelport\Hotel\StructType\Commission
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
     * @return \Travelport\Hotel\StructType\Commission
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
     * @return \Travelport\Hotel\StructType\Commission
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
     * @return \Travelport\Hotel\StructType\Commission
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
     * @return \Travelport\Hotel\StructType\Commission
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
     * @return \Travelport\Hotel\StructType\Commission
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
     * @return \Travelport\Hotel\StructType\Commission
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
     * @return \Travelport\Hotel\StructType\Commission
     */
    public function setCommissionOverride(?bool $commissionOverride = false): self
    {
        $this->CommissionOverride = $commissionOverride;
        
        return $this;
    }
    /**
     * Get Indicator value
     * @return string|null
     */
    public function getIndicator(): ?string
    {
        return $this->Indicator;
    }
    /**
     * Set Indicator value
     * @param string $indicator
     * @return \Travelport\Hotel\StructType\Commission
     */
    public function setIndicator(?string $indicator = null): self
    {
        $this->Indicator = $indicator;
        
        return $this;
    }
    /**
     * Get Percent value
     * @return string|null
     */
    public function getPercent(): ?string
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param string $percent
     * @return \Travelport\Hotel\StructType\Commission
     */
    public function setPercent(?string $percent = null): self
    {
        $this->Percent = $percent;
        
        return $this;
    }
    /**
     * Get CommissionAmount value
     * @return string|null
     */
    public function getCommissionAmount(): ?string
    {
        return $this->CommissionAmount;
    }
    /**
     * Set CommissionAmount value
     * @param string $commissionAmount
     * @return \Travelport\Hotel\StructType\Commission
     */
    public function setCommissionAmount(?string $commissionAmount = null): self
    {
        $this->CommissionAmount = $commissionAmount;
        
        return $this;
    }
    /**
     * Get ApproxCommissionAmount value
     * @return string|null
     */
    public function getApproxCommissionAmount(): ?string
    {
        return $this->ApproxCommissionAmount;
    }
    /**
     * Set ApproxCommissionAmount value
     * @param string $approxCommissionAmount
     * @return \Travelport\Hotel\StructType\Commission
     */
    public function setApproxCommissionAmount(?string $approxCommissionAmount = null): self
    {
        $this->ApproxCommissionAmount = $approxCommissionAmount;
        
        return $this;
    }
    /**
     * Get CommissionOnSurcharges value
     * @return string|null
     */
    public function getCommissionOnSurcharges(): ?string
    {
        return $this->CommissionOnSurcharges;
    }
    /**
     * Set CommissionOnSurcharges value
     * @param string $commissionOnSurcharges
     * @return \Travelport\Hotel\StructType\Commission
     */
    public function setCommissionOnSurcharges(?string $commissionOnSurcharges = null): self
    {
        $this->CommissionOnSurcharges = $commissionOnSurcharges;
        
        return $this;
    }
    /**
     * Get ApproxCommissionOnSurcharges value
     * @return string|null
     */
    public function getApproxCommissionOnSurcharges(): ?string
    {
        return $this->ApproxCommissionOnSurcharges;
    }
    /**
     * Set ApproxCommissionOnSurcharges value
     * @param string $approxCommissionOnSurcharges
     * @return \Travelport\Hotel\StructType\Commission
     */
    public function setApproxCommissionOnSurcharges(?string $approxCommissionOnSurcharges = null): self
    {
        $this->ApproxCommissionOnSurcharges = $approxCommissionOnSurcharges;
        
        return $this;
    }
}
