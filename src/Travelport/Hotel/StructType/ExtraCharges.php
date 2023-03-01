<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtraCharges StructType
 * Meta information extracted from the WSDL
 * - documentation: Additional charges applied to the hotel rate.
 * @subpackage Structs
 */
class ExtraCharges extends AbstractStructBase
{
    /**
     * The ExtraAdultAmount
     * Meta information extracted from the WSDL
     * - documentation: Additional charge for an extra guest. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ExtraAdultAmount = null;
    /**
     * The ExtraChildAmount
     * Meta information extracted from the WSDL
     * - documentation: dditional charge for an extra child guest. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ExtraChildAmount = null;
    /**
     * The CribAmount
     * Meta information extracted from the WSDL
     * - documentation: Additional charge for a crib. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $CribAmount = null;
    /**
     * The AdultRollawayCharge
     * Meta information extracted from the WSDL
     * - documentation: Additional charge for an extra rollaway bed provided for an adult guest. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $AdultRollawayCharge = null;
    /**
     * The ChildRollawayCharge
     * Meta information extracted from the WSDL
     * - documentation: Additional charge for an extra rollaway bed provided for a child guest. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ChildRollawayCharge = null;
    /**
     * Constructor method for ExtraCharges
     * @uses ExtraCharges::setExtraAdultAmount()
     * @uses ExtraCharges::setExtraChildAmount()
     * @uses ExtraCharges::setCribAmount()
     * @uses ExtraCharges::setAdultRollawayCharge()
     * @uses ExtraCharges::setChildRollawayCharge()
     * @param string $extraAdultAmount
     * @param string $extraChildAmount
     * @param string $cribAmount
     * @param string $adultRollawayCharge
     * @param string $childRollawayCharge
     */
    public function __construct(?string $extraAdultAmount = null, ?string $extraChildAmount = null, ?string $cribAmount = null, ?string $adultRollawayCharge = null, ?string $childRollawayCharge = null)
    {
        $this
            ->setExtraAdultAmount($extraAdultAmount)
            ->setExtraChildAmount($extraChildAmount)
            ->setCribAmount($cribAmount)
            ->setAdultRollawayCharge($adultRollawayCharge)
            ->setChildRollawayCharge($childRollawayCharge);
    }
    /**
     * Get ExtraAdultAmount value
     * @return string|null
     */
    public function getExtraAdultAmount(): ?string
    {
        return $this->ExtraAdultAmount;
    }
    /**
     * Set ExtraAdultAmount value
     * @param string $extraAdultAmount
     * @return \Travelport\Hotel\StructType\ExtraCharges
     */
    public function setExtraAdultAmount(?string $extraAdultAmount = null): self
    {
        $this->ExtraAdultAmount = $extraAdultAmount;
        
        return $this;
    }
    /**
     * Get ExtraChildAmount value
     * @return string|null
     */
    public function getExtraChildAmount(): ?string
    {
        return $this->ExtraChildAmount;
    }
    /**
     * Set ExtraChildAmount value
     * @param string $extraChildAmount
     * @return \Travelport\Hotel\StructType\ExtraCharges
     */
    public function setExtraChildAmount(?string $extraChildAmount = null): self
    {
        $this->ExtraChildAmount = $extraChildAmount;
        
        return $this;
    }
    /**
     * Get CribAmount value
     * @return string|null
     */
    public function getCribAmount(): ?string
    {
        return $this->CribAmount;
    }
    /**
     * Set CribAmount value
     * @param string $cribAmount
     * @return \Travelport\Hotel\StructType\ExtraCharges
     */
    public function setCribAmount(?string $cribAmount = null): self
    {
        $this->CribAmount = $cribAmount;
        
        return $this;
    }
    /**
     * Get AdultRollawayCharge value
     * @return string|null
     */
    public function getAdultRollawayCharge(): ?string
    {
        return $this->AdultRollawayCharge;
    }
    /**
     * Set AdultRollawayCharge value
     * @param string $adultRollawayCharge
     * @return \Travelport\Hotel\StructType\ExtraCharges
     */
    public function setAdultRollawayCharge(?string $adultRollawayCharge = null): self
    {
        $this->AdultRollawayCharge = $adultRollawayCharge;
        
        return $this;
    }
    /**
     * Get ChildRollawayCharge value
     * @return string|null
     */
    public function getChildRollawayCharge(): ?string
    {
        return $this->ChildRollawayCharge;
    }
    /**
     * Set ChildRollawayCharge value
     * @param string $childRollawayCharge
     * @return \Travelport\Hotel\StructType\ExtraCharges
     */
    public function setChildRollawayCharge(?string $childRollawayCharge = null): self
    {
        $this->ChildRollawayCharge = $childRollawayCharge;
        
        return $this;
    }
}
