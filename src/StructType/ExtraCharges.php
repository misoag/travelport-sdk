<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
    protected ?string $ExtraAdultAmount = null;
    /**
     * The ExtraChildAmount
     * Meta information extracted from the WSDL
     * - documentation: dditional charge for an extra child guest. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $ExtraChildAmount = null;
    /**
     * The CribAmount
     * Meta information extracted from the WSDL
     * - documentation: Additional charge for a crib. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $CribAmount = null;
    /**
     * The AdultRollawayCharge
     * Meta information extracted from the WSDL
     * - documentation: Additional charge for an extra rollaway bed provided for an adult guest. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $AdultRollawayCharge = null;
    /**
     * The ChildRollawayCharge
     * Meta information extracted from the WSDL
     * - documentation: Additional charge for an extra rollaway bed provided for a child guest. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $ChildRollawayCharge = null;
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
     * @return \StructType\ExtraCharges
     */
    public function setExtraAdultAmount(?string $extraAdultAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($extraAdultAmount) && !is_string($extraAdultAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extraAdultAmount, true), gettype($extraAdultAmount)), __LINE__);
        }
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
     * @return \StructType\ExtraCharges
     */
    public function setExtraChildAmount(?string $extraChildAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($extraChildAmount) && !is_string($extraChildAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extraChildAmount, true), gettype($extraChildAmount)), __LINE__);
        }
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
     * @return \StructType\ExtraCharges
     */
    public function setCribAmount(?string $cribAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($cribAmount) && !is_string($cribAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cribAmount, true), gettype($cribAmount)), __LINE__);
        }
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
     * @return \StructType\ExtraCharges
     */
    public function setAdultRollawayCharge(?string $adultRollawayCharge = null): self
    {
        // validation for constraint: string
        if (!is_null($adultRollawayCharge) && !is_string($adultRollawayCharge)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adultRollawayCharge, true), gettype($adultRollawayCharge)), __LINE__);
        }
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
     * @return \StructType\ExtraCharges
     */
    public function setChildRollawayCharge(?string $childRollawayCharge = null): self
    {
        // validation for constraint: string
        if (!is_null($childRollawayCharge) && !is_string($childRollawayCharge)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($childRollawayCharge, true), gettype($childRollawayCharge)), __LINE__);
        }
        $this->ChildRollawayCharge = $childRollawayCharge;
        
        return $this;
    }
}
