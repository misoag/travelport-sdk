<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
    protected ?string $RateSupplier = null;
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
     * @return \StructType\HotelSearchError
     */
    public function setRateSupplier(?string $rateSupplier = null): self
    {
        // validation for constraint: string
        if (!is_null($rateSupplier) && !is_string($rateSupplier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rateSupplier, true), gettype($rateSupplier)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($rateSupplier) && mb_strlen((string) $rateSupplier) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $rateSupplier)), __LINE__);
        }
        $this->RateSupplier = $rateSupplier;
        
        return $this;
    }
}
