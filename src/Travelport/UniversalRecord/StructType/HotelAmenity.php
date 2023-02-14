<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelAmenity StructType
 * @subpackage Structs
 */
class HotelAmenity extends AbstractStructBase
{
    /**
     * The Level
     * Meta information extracted from the WSDL
     * - documentation: Property or Room amenity
     * - use: required
     * @var string
     */
    protected string $Level;
    /**
     * The AmenityCode
     * Meta information extracted from the WSDL
     * - documentation: OTA amenity code
     * - base: xs:nonNegativeInteger
     * - totalDigits: 3
     * - use: required
     * @var int
     */
    protected int $AmenityCode;
    /**
     * Constructor method for HotelAmenity
     * @uses HotelAmenity::setLevel()
     * @uses HotelAmenity::setAmenityCode()
     * @param string $level
     * @param int $amenityCode
     */
    public function __construct(string $level, int $amenityCode)
    {
        $this
            ->setLevel($level)
            ->setAmenityCode($amenityCode);
    }
    /**
     * Get Level value
     * @return string
     */
    public function getLevel(): string
    {
        return $this->Level;
    }
    /**
     * Set Level value
     * @uses \Travelport\UniversalRecord\EnumType\TypeAmenityLevel::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeAmenityLevel::getValidValues()
     * @throws InvalidArgumentException
     * @param string $level
     * @return \Travelport\UniversalRecord\StructType\HotelAmenity
     */
    public function setLevel(string $level): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeAmenityLevel::valueIsValid($level)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeAmenityLevel', is_array($level) ? implode(', ', $level) : var_export($level, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeAmenityLevel::getValidValues())), __LINE__);
        }
        $this->Level = $level;
        
        return $this;
    }
    /**
     * Get AmenityCode value
     * @return int
     */
    public function getAmenityCode(): int
    {
        return $this->AmenityCode;
    }
    /**
     * Set AmenityCode value
     * @param int $amenityCode
     * @return \Travelport\UniversalRecord\StructType\HotelAmenity
     */
    public function setAmenityCode(int $amenityCode): self
    {
        // validation for constraint: int
        if (!is_null($amenityCode) && !(is_int($amenityCode) || ctype_digit($amenityCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($amenityCode, true), gettype($amenityCode)), __LINE__);
        }
        // validation for constraint: totalDigits(3)
        if (!is_null($amenityCode) && mb_strlen(preg_replace('/(\D)/', '', (string) $amenityCode)) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 3 digits, "%d" given', var_export($amenityCode, true), mb_strlen(preg_replace('/(\D)/', '', (string) $amenityCode))), __LINE__);
        }
        $this->AmenityCode = $amenityCode;
        
        return $this;
    }
}
