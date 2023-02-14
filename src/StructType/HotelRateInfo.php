<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRateInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: This is a wrapper element for updating Rate Modifiers
 * @subpackage Structs
 */
class HotelRateInfo extends AbstractStructBase
{
    /**
     * The RatePlanType
     * Meta information extracted from the WSDL
     * - documentation: Represents the rate plan code of room type for specified hotel property.
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $RatePlanType = null;
    /**
     * Constructor method for HotelRateInfo
     * @uses HotelRateInfo::setRatePlanType()
     * @param string $ratePlanType
     */
    public function __construct(?string $ratePlanType = null)
    {
        $this
            ->setRatePlanType($ratePlanType);
    }
    /**
     * Get RatePlanType value
     * @return string|null
     */
    public function getRatePlanType(): ?string
    {
        return $this->RatePlanType;
    }
    /**
     * Set RatePlanType value
     * @param string $ratePlanType
     * @return \StructType\HotelRateInfo
     */
    public function setRatePlanType(?string $ratePlanType = null): self
    {
        // validation for constraint: string
        if (!is_null($ratePlanType) && !is_string($ratePlanType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ratePlanType, true), gettype($ratePlanType)), __LINE__);
        }
        $this->RatePlanType = $ratePlanType;
        
        return $this;
    }
}
