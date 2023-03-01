<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelSearchError StructType
 * @subpackage Structs
 */
class HotelSearchError extends TypeResultMessage
{
    /**
     * The RateSupplier
     * Meta information extracted from the WSDL
     * - documentation: Indicates the supplier of the rate. | Third Party Content Provider name.
     * - base: xs:string
     * - maxLength: 64
     * - use: optional
     * @var string|null
     */
    public ?string $RateSupplier = null;
    /**
     * Constructor method for HotelSearchError
     * @uses HotelSearchError::setRateSupplier()
     * @param string $rateSupplier
     */
    public function __construct(?string $rateSupplier = null)
    {
        $this
            ->setRateSupplier($rateSupplier);
    }
    /**
     * Get RateSupplier value
     * @return string|null
     */
    public function getRateSupplier(): ?string
    {
        return $this->RateSupplier;
    }
    /**
     * Set RateSupplier value
     * @param string $rateSupplier
     * @return \Travelport\UniversalRecord\StructType\HotelSearchError
     */
    public function setRateSupplier(?string $rateSupplier = null): self
    {
        $this->RateSupplier = $rateSupplier;
        
        return $this;
    }
}
