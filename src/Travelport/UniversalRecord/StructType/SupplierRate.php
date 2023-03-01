<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?string $DiscountAmount = null;
    /**
     * The MandatoryChargeTotal
     * Meta information extracted from the WSDL
     * - documentation: Total Mandatory Charges, which may include taxes, surcharges, and fees. 1P only. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $MandatoryChargeTotal = null;
    /**
     * The ApproximateTotal
     * Meta information extracted from the WSDL
     * - documentation: The total sum of all mandatory, optional and conditional charges | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ApproximateTotal = null;
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
        $this->ApproximateTotal = $approximateTotal;
        
        return $this;
    }
}
