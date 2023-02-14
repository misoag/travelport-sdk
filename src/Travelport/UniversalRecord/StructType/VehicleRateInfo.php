<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleRateInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for adding and modifying Vehicle Rate related information. For Modify operation : If a value is passed in any of the attributes they will be updated, If an empty string is passed then the attributed's value will be deleted,
 * If the attribute is not passed no action will be taken.
 * @subpackage Structs
 */
class VehicleRateInfo extends AbstractStructBase
{
    /**
     * The TourCode
     * Meta information extracted from the WSDL
     * - documentation: Tour Number for the Vehicle Booking
     * - use: optional
     * @var string|null
     */
    protected ?string $TourCode = null;
    /**
     * The DiscountNumber
     * Meta information extracted from the WSDL
     * - documentation: Corporate Discount Number for the Vehicle Booking | A supplier-specific number which may identify a special rate associated with a traveler's organization
     * - base: xs:string
     * - maxLength: 25
     * - use: optional
     * @var string|null
     */
    protected ?string $DiscountNumber = null;
    /**
     * The PromotionalCode
     * Meta information extracted from the WSDL
     * - documentation: Promotional Code for the Vehicle Booking
     * - use: optional
     * @var string|null
     */
    protected ?string $PromotionalCode = null;
    /**
     * Constructor method for VehicleRateInfo
     * @uses VehicleRateInfo::setTourCode()
     * @uses VehicleRateInfo::setDiscountNumber()
     * @uses VehicleRateInfo::setPromotionalCode()
     * @param string $tourCode
     * @param string $discountNumber
     * @param string $promotionalCode
     */
    public function __construct(?string $tourCode = null, ?string $discountNumber = null, ?string $promotionalCode = null)
    {
        $this
            ->setTourCode($tourCode)
            ->setDiscountNumber($discountNumber)
            ->setPromotionalCode($promotionalCode);
    }
    /**
     * Get TourCode value
     * @return string|null
     */
    public function getTourCode(): ?string
    {
        return $this->TourCode;
    }
    /**
     * Set TourCode value
     * @param string $tourCode
     * @return \Travelport\UniversalRecord\StructType\VehicleRateInfo
     */
    public function setTourCode(?string $tourCode = null): self
    {
        // validation for constraint: string
        if (!is_null($tourCode) && !is_string($tourCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tourCode, true), gettype($tourCode)), __LINE__);
        }
        $this->TourCode = $tourCode;
        
        return $this;
    }
    /**
     * Get DiscountNumber value
     * @return string|null
     */
    public function getDiscountNumber(): ?string
    {
        return $this->DiscountNumber;
    }
    /**
     * Set DiscountNumber value
     * @param string $discountNumber
     * @return \Travelport\UniversalRecord\StructType\VehicleRateInfo
     */
    public function setDiscountNumber(?string $discountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($discountNumber) && !is_string($discountNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($discountNumber, true), gettype($discountNumber)), __LINE__);
        }
        // validation for constraint: maxLength(25)
        if (!is_null($discountNumber) && mb_strlen((string) $discountNumber) > 25) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 25', mb_strlen((string) $discountNumber)), __LINE__);
        }
        $this->DiscountNumber = $discountNumber;
        
        return $this;
    }
    /**
     * Get PromotionalCode value
     * @return string|null
     */
    public function getPromotionalCode(): ?string
    {
        return $this->PromotionalCode;
    }
    /**
     * Set PromotionalCode value
     * @param string $promotionalCode
     * @return \Travelport\UniversalRecord\StructType\VehicleRateInfo
     */
    public function setPromotionalCode(?string $promotionalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($promotionalCode) && !is_string($promotionalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotionalCode, true), gettype($promotionalCode)), __LINE__);
        }
        $this->PromotionalCode = $promotionalCode;
        
        return $this;
    }
}
