<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Amenity StructType
 * @subpackage Structs
 */
class Amenity extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: The 1 – 3 byte Open Travel Alliance amenity code.
     * - base: xs:positiveInteger
     * - maxInclusive: 999
     * - minInclusive: 1
     * - use: required
     * @var int
     */
    protected int $Code;
    /**
     * The AmenityType
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $AmenityType = null;
    /**
     * Constructor method for Amenity
     * @uses Amenity::setCode()
     * @uses Amenity::setAmenityType()
     * @param int $code
     * @param string $amenityType
     */
    public function __construct(int $code, ?string $amenityType = null)
    {
        $this
            ->setCode($code)
            ->setAmenityType($amenityType);
    }
    /**
     * Get Code value
     * @return int
     */
    public function getCode(): int
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param int $code
     * @return \StructType\Amenity
     */
    public function setCode(int $code): self
    {
        // validation for constraint: int
        if (!is_null($code) && !(is_int($code) || ctype_digit($code))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        // validation for constraint: maxInclusive(999)
        if (!is_null($code) && $code > 999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 999', var_export($code, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($code) && $code < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($code, true)), __LINE__);
        }
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get AmenityType value
     * @return string|null
     */
    public function getAmenityType(): ?string
    {
        return $this->AmenityType;
    }
    /**
     * Set AmenityType value
     * @param string $amenityType
     * @return \StructType\Amenity
     */
    public function setAmenityType(?string $amenityType = null): self
    {
        // validation for constraint: string
        if (!is_null($amenityType) && !is_string($amenityType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amenityType, true), gettype($amenityType)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($amenityType) && mb_strlen((string) $amenityType) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $amenityType)), __LINE__);
        }
        $this->AmenityType = $amenityType;
        
        return $this;
    }
}
