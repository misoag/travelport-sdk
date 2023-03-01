<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeRateInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Additional information for extra days or hours.
 * @subpackage Structs
 */
class TypeRateInfo extends AbstractStructBase
{
    /**
     * The RateForPeriod
     * Meta information extracted from the WSDL
     * - documentation: The rate for the period | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $RateForPeriod = null;
    /**
     * The NumberOfPeriods
     * Meta information extracted from the WSDL
     * - documentation: Define how many periods (e.g. number of days or weeks)
     * @var int|null
     */
    public ?int $NumberOfPeriods = null;
    /**
     * The UnlimitedMileage
     * Meta information extracted from the WSDL
     * - documentation: True if unlimited miles allowed. Not set if unknown
     * - use: optional
     * @var bool|null
     */
    public ?bool $UnlimitedMileage = null;
    /**
     * The MileageAllowance
     * Meta information extracted from the WSDL
     * - documentation: Number of miles or kilometers allowed for rate if not unlimited
     * - use: optional
     * @var int|null
     */
    public ?int $MileageAllowance = null;
    /**
     * The Units
     * Meta information extracted from the WSDL
     * - documentation: Describes distance units for MileageAllowance or ExtraMileageCharge
     * - use: optional
     * @var string|null
     */
    public ?string $Units = null;
    /**
     * The ExtraMileageCharge
     * Meta information extracted from the WSDL
     * - documentation: Cost per mile or kilometer over allowance for rate | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ExtraMileageCharge = null;
    /**
     * Constructor method for typeRateInfo
     * @uses TypeRateInfo::setRateForPeriod()
     * @uses TypeRateInfo::setNumberOfPeriods()
     * @uses TypeRateInfo::setUnlimitedMileage()
     * @uses TypeRateInfo::setMileageAllowance()
     * @uses TypeRateInfo::setUnits()
     * @uses TypeRateInfo::setExtraMileageCharge()
     * @param string $rateForPeriod
     * @param int $numberOfPeriods
     * @param bool $unlimitedMileage
     * @param int $mileageAllowance
     * @param string $units
     * @param string $extraMileageCharge
     */
    public function __construct(?string $rateForPeriod = null, ?int $numberOfPeriods = null, ?bool $unlimitedMileage = null, ?int $mileageAllowance = null, ?string $units = null, ?string $extraMileageCharge = null)
    {
        $this
            ->setRateForPeriod($rateForPeriod)
            ->setNumberOfPeriods($numberOfPeriods)
            ->setUnlimitedMileage($unlimitedMileage)
            ->setMileageAllowance($mileageAllowance)
            ->setUnits($units)
            ->setExtraMileageCharge($extraMileageCharge);
    }
    /**
     * Get RateForPeriod value
     * @return string|null
     */
    public function getRateForPeriod(): ?string
    {
        return $this->RateForPeriod;
    }
    /**
     * Set RateForPeriod value
     * @param string $rateForPeriod
     * @return \Travelport\UniversalRecord\StructType\TypeRateInfo
     */
    public function setRateForPeriod(?string $rateForPeriod = null): self
    {
        $this->RateForPeriod = $rateForPeriod;
        
        return $this;
    }
    /**
     * Get NumberOfPeriods value
     * @return int|null
     */
    public function getNumberOfPeriods(): ?int
    {
        return $this->NumberOfPeriods;
    }
    /**
     * Set NumberOfPeriods value
     * @param int $numberOfPeriods
     * @return \Travelport\UniversalRecord\StructType\TypeRateInfo
     */
    public function setNumberOfPeriods(?int $numberOfPeriods = null): self
    {
        $this->NumberOfPeriods = $numberOfPeriods;
        
        return $this;
    }
    /**
     * Get UnlimitedMileage value
     * @return bool|null
     */
    public function getUnlimitedMileage(): ?bool
    {
        return $this->UnlimitedMileage;
    }
    /**
     * Set UnlimitedMileage value
     * @param bool $unlimitedMileage
     * @return \Travelport\UniversalRecord\StructType\TypeRateInfo
     */
    public function setUnlimitedMileage(?bool $unlimitedMileage = null): self
    {
        $this->UnlimitedMileage = $unlimitedMileage;
        
        return $this;
    }
    /**
     * Get MileageAllowance value
     * @return int|null
     */
    public function getMileageAllowance(): ?int
    {
        return $this->MileageAllowance;
    }
    /**
     * Set MileageAllowance value
     * @param int $mileageAllowance
     * @return \Travelport\UniversalRecord\StructType\TypeRateInfo
     */
    public function setMileageAllowance(?int $mileageAllowance = null): self
    {
        $this->MileageAllowance = $mileageAllowance;
        
        return $this;
    }
    /**
     * Get Units value
     * @return string|null
     */
    public function getUnits(): ?string
    {
        return $this->Units;
    }
    /**
     * Set Units value
     * @param string $units
     * @return \Travelport\UniversalRecord\StructType\TypeRateInfo
     */
    public function setUnits(?string $units = null): self
    {
        $this->Units = $units;
        
        return $this;
    }
    /**
     * Get ExtraMileageCharge value
     * @return string|null
     */
    public function getExtraMileageCharge(): ?string
    {
        return $this->ExtraMileageCharge;
    }
    /**
     * Set ExtraMileageCharge value
     * @param string $extraMileageCharge
     * @return \Travelport\UniversalRecord\StructType\TypeRateInfo
     */
    public function setExtraMileageCharge(?string $extraMileageCharge = null): self
    {
        $this->ExtraMileageCharge = $extraMileageCharge;
        
        return $this;
    }
}
