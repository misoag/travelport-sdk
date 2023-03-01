<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeDepositGuarantee StructType
 * Meta information extracted from the WSDL
 * - documentation: The deposit and guarantee information for a vehicle rental.
 * @subpackage Structs
 */
class TypeDepositGuarantee extends AbstractStructBase
{
    /**
     * The Purpose
     * Meta information extracted from the WSDL
     * - documentation: Specifies if this is guarantee, deposit and Prepayment information. Values: “Guarantee”, “Deposit”, “PrePayment” “Other”.
     * - use: required
     * @var string
     */
    public string $Purpose;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Type = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: The amount of money required for a guarantee or deposit. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Amount = null;
    /**
     * The Percent
     * Meta information extracted from the WSDL
     * - documentation: The percentage of the rental amount for the guarantee or deposit.
     * - use: optional
     * @var float|null
     */
    public ?float $Percent = null;
    /**
     * The DueDate
     * Meta information extracted from the WSDL
     * - documentation: The date a deposit is due.
     * - use: optional
     * @var string|null
     */
    public ?string $DueDate = null;
    /**
     * The NumberOfDays
     * Meta information extracted from the WSDL
     * - documentation: Specifies the number of days from booking or prior to pickup by which the deposit should be made.
     * - use: optional
     * @var int|null
     */
    public ?int $NumberOfDays = null;
    /**
     * The OptionType
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $OptionType = null;
    /**
     * The Required
     * Meta information extracted from the WSDL
     * - documentation: If “true” a Guarantee, Deposit or Prepayment is required. 1P, 1G, 1V only.
     * - use: optional
     * @var bool|null
     */
    public ?bool $Required = null;
    /**
     * The RequirementPassed
     * Meta information extracted from the WSDL
     * - documentation: If true, the rental information passes the guarantee or deposit requirements.
     * - use: optional
     * @var bool|null
     */
    public ?bool $RequirementPassed = null;
    /**
     * Constructor method for typeDepositGuarantee
     * @uses TypeDepositGuarantee::setPurpose()
     * @uses TypeDepositGuarantee::setType()
     * @uses TypeDepositGuarantee::setAmount()
     * @uses TypeDepositGuarantee::setPercent()
     * @uses TypeDepositGuarantee::setDueDate()
     * @uses TypeDepositGuarantee::setNumberOfDays()
     * @uses TypeDepositGuarantee::setOptionType()
     * @uses TypeDepositGuarantee::setRequired()
     * @uses TypeDepositGuarantee::setRequirementPassed()
     * @param string $purpose
     * @param string $type
     * @param string $amount
     * @param float $percent
     * @param string $dueDate
     * @param int $numberOfDays
     * @param string $optionType
     * @param bool $required
     * @param bool $requirementPassed
     */
    public function __construct(string $purpose, ?string $type = null, ?string $amount = null, ?float $percent = null, ?string $dueDate = null, ?int $numberOfDays = null, ?string $optionType = null, ?bool $required = null, ?bool $requirementPassed = null)
    {
        $this
            ->setPurpose($purpose)
            ->setType($type)
            ->setAmount($amount)
            ->setPercent($percent)
            ->setDueDate($dueDate)
            ->setNumberOfDays($numberOfDays)
            ->setOptionType($optionType)
            ->setRequired($required)
            ->setRequirementPassed($requirementPassed);
    }
    /**
     * Get Purpose value
     * @return string
     */
    public function getPurpose(): string
    {
        return $this->Purpose;
    }
    /**
     * Set Purpose value
     * @param string $purpose
     * @return \Travelport\UniversalRecord\StructType\TypeDepositGuarantee
     */
    public function setPurpose(string $purpose): self
    {
        $this->Purpose = $purpose;
        
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\TypeDepositGuarantee
     */
    public function setType(?string $type = null): self
    {
        $this->Type = $type;
        
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
     * @return \Travelport\UniversalRecord\StructType\TypeDepositGuarantee
     */
    public function setAmount(?string $amount = null): self
    {
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get Percent value
     * @return float|null
     */
    public function getPercent(): ?float
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param float $percent
     * @return \Travelport\UniversalRecord\StructType\TypeDepositGuarantee
     */
    public function setPercent(?float $percent = null): self
    {
        $this->Percent = $percent;
        
        return $this;
    }
    /**
     * Get DueDate value
     * @return string|null
     */
    public function getDueDate(): ?string
    {
        return $this->DueDate;
    }
    /**
     * Set DueDate value
     * @param string $dueDate
     * @return \Travelport\UniversalRecord\StructType\TypeDepositGuarantee
     */
    public function setDueDate(?string $dueDate = null): self
    {
        $this->DueDate = $dueDate;
        
        return $this;
    }
    /**
     * Get NumberOfDays value
     * @return int|null
     */
    public function getNumberOfDays(): ?int
    {
        return $this->NumberOfDays;
    }
    /**
     * Set NumberOfDays value
     * @param int $numberOfDays
     * @return \Travelport\UniversalRecord\StructType\TypeDepositGuarantee
     */
    public function setNumberOfDays(?int $numberOfDays = null): self
    {
        $this->NumberOfDays = $numberOfDays;
        
        return $this;
    }
    /**
     * Get OptionType value
     * @return string|null
     */
    public function getOptionType(): ?string
    {
        return $this->OptionType;
    }
    /**
     * Set OptionType value
     * @param string $optionType
     * @return \Travelport\UniversalRecord\StructType\TypeDepositGuarantee
     */
    public function setOptionType(?string $optionType = null): self
    {
        $this->OptionType = $optionType;
        
        return $this;
    }
    /**
     * Get Required value
     * @return bool|null
     */
    public function getRequired(): ?bool
    {
        return $this->Required;
    }
    /**
     * Set Required value
     * @param bool $required
     * @return \Travelport\UniversalRecord\StructType\TypeDepositGuarantee
     */
    public function setRequired(?bool $required = null): self
    {
        $this->Required = $required;
        
        return $this;
    }
    /**
     * Get RequirementPassed value
     * @return bool|null
     */
    public function getRequirementPassed(): ?bool
    {
        return $this->RequirementPassed;
    }
    /**
     * Set RequirementPassed value
     * @param bool $requirementPassed
     * @return \Travelport\UniversalRecord\StructType\TypeDepositGuarantee
     */
    public function setRequirementPassed(?bool $requirementPassed = null): self
    {
        $this->RequirementPassed = $requirementPassed;
        
        return $this;
    }
}
