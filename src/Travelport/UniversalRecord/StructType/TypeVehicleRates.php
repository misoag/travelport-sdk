<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeVehicleRates StructType
 * @subpackage Structs
 */
class TypeVehicleRates extends AbstractStructBase
{
    /**
     * The EstimatedTotalAmount
     * Meta information extracted from the WSDL
     * - documentation: The estimated total amount | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $EstimatedTotalAmount = null;
    /**
     * The BaseRate
     * Meta information extracted from the WSDL
     * - documentation: Rate for the entire rent without the required charges | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $BaseRate = null;
    /**
     * The RateForPeriod
     * Meta information extracted from the WSDL
     * - documentation: The rate for the period | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $RateForPeriod = null;
    /**
     * The DropOffCharge
     * Meta information extracted from the WSDL
     * - documentation: The additional fee for dropping off a vehicle at a different location. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $DropOffCharge = null;
    /**
     * The YoungDriverCharge
     * Meta information extracted from the WSDL
     * - documentation: The additional amount charged for young drivers | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $YoungDriverCharge = null;
    /**
     * The SeniorDriverCharge
     * Meta information extracted from the WSDL
     * - documentation: The additional amount charged for senior drivers | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $SeniorDriverCharge = null;
    /**
     * The FuelSurcharge
     * Meta information extracted from the WSDL
     * - documentation: The additional amount charged for fuel | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $FuelSurcharge = null;
    /**
     * The ExtraMileageCharge
     * Meta information extracted from the WSDL
     * - documentation: Cost per mile over allowance for rate | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ExtraMileageCharge = null;
    /**
     * The PayNow
     * Meta information extracted from the WSDL
     * - documentation: Pay Now is added for Future Functionality | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $PayNow = null;
    /**
     * The PayLater
     * Meta information extracted from the WSDL
     * - documentation: Pay later is added for Future Functionality | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $PayLater = null;
    /**
     * Constructor method for typeVehicleRates
     * @uses TypeVehicleRates::setEstimatedTotalAmount()
     * @uses TypeVehicleRates::setBaseRate()
     * @uses TypeVehicleRates::setRateForPeriod()
     * @uses TypeVehicleRates::setDropOffCharge()
     * @uses TypeVehicleRates::setYoungDriverCharge()
     * @uses TypeVehicleRates::setSeniorDriverCharge()
     * @uses TypeVehicleRates::setFuelSurcharge()
     * @uses TypeVehicleRates::setExtraMileageCharge()
     * @uses TypeVehicleRates::setPayNow()
     * @uses TypeVehicleRates::setPayLater()
     * @param string $estimatedTotalAmount
     * @param string $baseRate
     * @param string $rateForPeriod
     * @param string $dropOffCharge
     * @param string $youngDriverCharge
     * @param string $seniorDriverCharge
     * @param string $fuelSurcharge
     * @param string $extraMileageCharge
     * @param string $payNow
     * @param string $payLater
     */
    public function __construct(?string $estimatedTotalAmount = null, ?string $baseRate = null, ?string $rateForPeriod = null, ?string $dropOffCharge = null, ?string $youngDriverCharge = null, ?string $seniorDriverCharge = null, ?string $fuelSurcharge = null, ?string $extraMileageCharge = null, ?string $payNow = null, ?string $payLater = null)
    {
        $this
            ->setEstimatedTotalAmount($estimatedTotalAmount)
            ->setBaseRate($baseRate)
            ->setRateForPeriod($rateForPeriod)
            ->setDropOffCharge($dropOffCharge)
            ->setYoungDriverCharge($youngDriverCharge)
            ->setSeniorDriverCharge($seniorDriverCharge)
            ->setFuelSurcharge($fuelSurcharge)
            ->setExtraMileageCharge($extraMileageCharge)
            ->setPayNow($payNow)
            ->setPayLater($payLater);
    }
    /**
     * Get EstimatedTotalAmount value
     * @return string|null
     */
    public function getEstimatedTotalAmount(): ?string
    {
        return $this->EstimatedTotalAmount;
    }
    /**
     * Set EstimatedTotalAmount value
     * @param string $estimatedTotalAmount
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleRates
     */
    public function setEstimatedTotalAmount(?string $estimatedTotalAmount = null): self
    {
        $this->EstimatedTotalAmount = $estimatedTotalAmount;
        
        return $this;
    }
    /**
     * Get BaseRate value
     * @return string|null
     */
    public function getBaseRate(): ?string
    {
        return $this->BaseRate;
    }
    /**
     * Set BaseRate value
     * @param string $baseRate
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleRates
     */
    public function setBaseRate(?string $baseRate = null): self
    {
        $this->BaseRate = $baseRate;
        
        return $this;
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
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleRates
     */
    public function setRateForPeriod(?string $rateForPeriod = null): self
    {
        $this->RateForPeriod = $rateForPeriod;
        
        return $this;
    }
    /**
     * Get DropOffCharge value
     * @return string|null
     */
    public function getDropOffCharge(): ?string
    {
        return $this->DropOffCharge;
    }
    /**
     * Set DropOffCharge value
     * @param string $dropOffCharge
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleRates
     */
    public function setDropOffCharge(?string $dropOffCharge = null): self
    {
        $this->DropOffCharge = $dropOffCharge;
        
        return $this;
    }
    /**
     * Get YoungDriverCharge value
     * @return string|null
     */
    public function getYoungDriverCharge(): ?string
    {
        return $this->YoungDriverCharge;
    }
    /**
     * Set YoungDriverCharge value
     * @param string $youngDriverCharge
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleRates
     */
    public function setYoungDriverCharge(?string $youngDriverCharge = null): self
    {
        $this->YoungDriverCharge = $youngDriverCharge;
        
        return $this;
    }
    /**
     * Get SeniorDriverCharge value
     * @return string|null
     */
    public function getSeniorDriverCharge(): ?string
    {
        return $this->SeniorDriverCharge;
    }
    /**
     * Set SeniorDriverCharge value
     * @param string $seniorDriverCharge
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleRates
     */
    public function setSeniorDriverCharge(?string $seniorDriverCharge = null): self
    {
        $this->SeniorDriverCharge = $seniorDriverCharge;
        
        return $this;
    }
    /**
     * Get FuelSurcharge value
     * @return string|null
     */
    public function getFuelSurcharge(): ?string
    {
        return $this->FuelSurcharge;
    }
    /**
     * Set FuelSurcharge value
     * @param string $fuelSurcharge
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleRates
     */
    public function setFuelSurcharge(?string $fuelSurcharge = null): self
    {
        $this->FuelSurcharge = $fuelSurcharge;
        
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
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleRates
     */
    public function setExtraMileageCharge(?string $extraMileageCharge = null): self
    {
        $this->ExtraMileageCharge = $extraMileageCharge;
        
        return $this;
    }
    /**
     * Get PayNow value
     * @return string|null
     */
    public function getPayNow(): ?string
    {
        return $this->PayNow;
    }
    /**
     * Set PayNow value
     * @param string $payNow
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleRates
     */
    public function setPayNow(?string $payNow = null): self
    {
        $this->PayNow = $payNow;
        
        return $this;
    }
    /**
     * Get PayLater value
     * @return string|null
     */
    public function getPayLater(): ?string
    {
        return $this->PayLater;
    }
    /**
     * Set PayLater value
     * @param string $payLater
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleRates
     */
    public function setPayLater(?string $payLater = null): self
    {
        $this->PayLater = $payLater;
        
        return $this;
    }
}
