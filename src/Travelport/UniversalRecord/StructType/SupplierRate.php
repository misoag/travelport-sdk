<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierRate StructType
 * @subpackage Structs
 */
class SupplierRate extends TypeVehicleRates
{
    /**
     * The DiscountAmount
     * Meta information extracted from the WSDL
     * - documentation: Discount Amount 1P only | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $DiscountAmount = null;
    /**
     * The MandatoryChargeTotal
     * Meta information extracted from the WSDL
     * - documentation: Total Mandatory Charges, which may include taxes, surcharges, and fees. 1P only. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $MandatoryChargeTotal = null;
    /**
     * The ApproximateTotal
     * Meta information extracted from the WSDL
     * - documentation: The total sum of all mandatory, optional and conditional charges | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ApproximateTotal = null;
    /**
     * Constructor method for SupplierRate
     * @uses SupplierRate::setDiscountAmount()
     * @uses SupplierRate::setMandatoryChargeTotal()
     * @uses SupplierRate::setApproximateTotal()
     * @param string $discountAmount
     * @param string $mandatoryChargeTotal
     * @param string $approximateTotal
     */
    public function __construct(?string $discountAmount = null, ?string $mandatoryChargeTotal = null, ?string $approximateTotal = null)
    {
        $this
            ->setDiscountAmount($discountAmount)
            ->setMandatoryChargeTotal($mandatoryChargeTotal)
            ->setApproximateTotal($approximateTotal);
    }
    /**
     * Get DiscountAmount value
     * @return string|null
     */
    public function getDiscountAmount(): ?string
    {
        return $this->DiscountAmount;
    }
    /**
     * Set DiscountAmount value
     * @param string $discountAmount
     * @return \Travelport\UniversalRecord\StructType\SupplierRate
     */
    public function setDiscountAmount(?string $discountAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($discountAmount) && !is_string($discountAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($discountAmount, true), gettype($discountAmount)), __LINE__);
        }
        $this->DiscountAmount = $discountAmount;
        
        return $this;
    }
    /**
     * Get MandatoryChargeTotal value
     * @return string|null
     */
    public function getMandatoryChargeTotal(): ?string
    {
        return $this->MandatoryChargeTotal;
    }
    /**
     * Set MandatoryChargeTotal value
     * @param string $mandatoryChargeTotal
     * @return \Travelport\UniversalRecord\StructType\SupplierRate
     */
    public function setMandatoryChargeTotal(?string $mandatoryChargeTotal = null): self
    {
        // validation for constraint: string
        if (!is_null($mandatoryChargeTotal) && !is_string($mandatoryChargeTotal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mandatoryChargeTotal, true), gettype($mandatoryChargeTotal)), __LINE__);
        }
        $this->MandatoryChargeTotal = $mandatoryChargeTotal;
        
        return $this;
    }
    /**
     * Get ApproximateTotal value
     * @return string|null
     */
    public function getApproximateTotal(): ?string
    {
        return $this->ApproximateTotal;
    }
    /**
     * Set ApproximateTotal value
     * @param string $approximateTotal
     * @return \Travelport\UniversalRecord\StructType\SupplierRate
     */
    public function setApproximateTotal(?string $approximateTotal = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateTotal) && !is_string($approximateTotal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateTotal, true), gettype($approximateTotal)), __LINE__);
        }
        $this->ApproximateTotal = $approximateTotal;
        
        return $this;
    }
}
