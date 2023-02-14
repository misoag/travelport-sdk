<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
    protected string $Level;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: The commission type.
     * - use: required
     * @var string
     */
    protected string $Type;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The Modifier
     * Meta information extracted from the WSDL
     * - documentation: Optional commission modifier.
     * - use: optional
     * @var string|null
     */
    protected ?string $Modifier = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: The monetary amount. | The monetary amount of the commission. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: typeMoney
     * - use: optional
     * @var string|null
     */
    protected ?string $Amount = null;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 15
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    protected ?string $Value = null;
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
    protected ?string $Percentage = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: A reference to a passenger. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $BookingTravelerRef = null;
    /**
     * The CommissionOverride
     * Meta information extracted from the WSDL
     * - documentation: This is enabled to override CAT-35 commission error during air ticketing. PROVIDER SUPPORTED:Worldspan
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $CommissionOverride = null;
    /**
     * The Indicator
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Rate Plan is commissionable.True: Rate is commissionable.False: Rate is not commissionable.Unknown: Commission indicator is not returned by the hotel supplier (chain or property).
     * @var string|null
     */
    protected ?string $Indicator = null;
    /**
     * The Percent
     * Meta information extracted from the WSDL
     * - documentation: The percentage applied to the commissionable amount to determine the payable commission amount.
     * @var string|null
     */
    protected ?string $Percent = null;
    /**
     * The CommissionAmount
     * Meta information extracted from the WSDL
     * - documentation: The commission amount in the aggregator’s or supplier’s currency. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $CommissionAmount = null;
    /**
     * The ApproxCommissionAmount
     * Meta information extracted from the WSDL
     * - documentation: The approximate commission amount in the agency’s provisioned or requested currency. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $ApproxCommissionAmount = null;
    /**
     * The CommissionOnSurcharges
     * Meta information extracted from the WSDL
     * - documentation: Commission on surcharges in the aggregator’s or supplier’s currency. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $CommissionOnSurcharges = null;
    /**
     * The ApproxCommissionOnSurcharges
     * Meta information extracted from the WSDL
     * - documentation: The approximate commission on surcharges in the agency’s provisioned or requested currency. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $ApproxCommissionOnSurcharges = null;
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
     * @uses \EnumType\TypeCommissionLevel::valueIsValid()
     * @uses \EnumType\TypeCommissionLevel::getValidValues()
     * @throws InvalidArgumentException
     * @param string $level
     * @return \StructType\Commission
     */
    public function setLevel(string $level): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\TypeCommissionLevel::valueIsValid($level)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TypeCommissionLevel', is_array($level) ? implode(', ', $level) : var_export($level, true), implode(', ', \EnumType\TypeCommissionLevel::getValidValues())), __LINE__);
        }
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
     * @uses \EnumType\TypeCommissionType::valueIsValid()
     * @uses \EnumType\TypeCommissionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \StructType\Commission
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\TypeCommissionType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TypeCommissionType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\TypeCommissionType::getValidValues())), __LINE__);
        }
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
     * @return \StructType\Commission
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
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
     * @uses \EnumType\TypeCommissionModifier::valueIsValid()
     * @uses \EnumType\TypeCommissionModifier::getValidValues()
     * @throws InvalidArgumentException
     * @param string $modifier
     * @return \StructType\Commission
     */
    public function setModifier(?string $modifier = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\TypeCommissionModifier::valueIsValid($modifier)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TypeCommissionModifier', is_array($modifier) ? implode(', ', $modifier) : var_export($modifier, true), implode(', ', \EnumType\TypeCommissionModifier::getValidValues())), __LINE__);
        }
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
     * @return \StructType\Commission
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
     * @return \StructType\Commission
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($value) && mb_strlen((string) $value) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen((string) $value)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($value) && mb_strlen((string) $value) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $value)), __LINE__);
        }
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
     * @return \StructType\Commission
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
     * @return \StructType\Commission
     */
    public function setBookingTravelerRef(?string $bookingTravelerRef = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingTravelerRef) && !is_string($bookingTravelerRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingTravelerRef, true), gettype($bookingTravelerRef)), __LINE__);
        }
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
     * @return \StructType\Commission
     */
    public function setCommissionOverride(?bool $commissionOverride = false): self
    {
        // validation for constraint: boolean
        if (!is_null($commissionOverride) && !is_bool($commissionOverride)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($commissionOverride, true), gettype($commissionOverride)), __LINE__);
        }
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
     * @uses \EnumType\TypeTrinary::valueIsValid()
     * @uses \EnumType\TypeTrinary::getValidValues()
     * @throws InvalidArgumentException
     * @param string $indicator
     * @return \StructType\Commission
     */
    public function setIndicator(?string $indicator = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\TypeTrinary::valueIsValid($indicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TypeTrinary', is_array($indicator) ? implode(', ', $indicator) : var_export($indicator, true), implode(', ', \EnumType\TypeTrinary::getValidValues())), __LINE__);
        }
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
     * @return \StructType\Commission
     */
    public function setPercent(?string $percent = null): self
    {
        // validation for constraint: string
        if (!is_null($percent) && !is_string($percent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($percent, true), gettype($percent)), __LINE__);
        }
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
     * @return \StructType\Commission
     */
    public function setCommissionAmount(?string $commissionAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($commissionAmount) && !is_string($commissionAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commissionAmount, true), gettype($commissionAmount)), __LINE__);
        }
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
     * @return \StructType\Commission
     */
    public function setApproxCommissionAmount(?string $approxCommissionAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($approxCommissionAmount) && !is_string($approxCommissionAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approxCommissionAmount, true), gettype($approxCommissionAmount)), __LINE__);
        }
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
     * @return \StructType\Commission
     */
    public function setCommissionOnSurcharges(?string $commissionOnSurcharges = null): self
    {
        // validation for constraint: string
        if (!is_null($commissionOnSurcharges) && !is_string($commissionOnSurcharges)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commissionOnSurcharges, true), gettype($commissionOnSurcharges)), __LINE__);
        }
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
     * @return \StructType\Commission
     */
    public function setApproxCommissionOnSurcharges(?string $approxCommissionOnSurcharges = null): self
    {
        // validation for constraint: string
        if (!is_null($approxCommissionOnSurcharges) && !is_string($approxCommissionOnSurcharges)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approxCommissionOnSurcharges, true), gettype($approxCommissionOnSurcharges)), __LINE__);
        }
        $this->ApproxCommissionOnSurcharges = $approxCommissionOnSurcharges;
        
        return $this;
    }
}
