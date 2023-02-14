<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeVehicleSearchDistance StructType
 * @subpackage Structs
 */
class TypeVehicleSearchDistance extends AbstractStructBase
{
    /**
     * The MaxDistance
     * Meta information extracted from the WSDL
     * - base: xs:nonNegativeInteger
     * - maxInclusive: 999
     * - use: required
     * @var int
     */
    protected int $MaxDistance;
    /**
     * The Units
     * Meta information extracted from the WSDL
     * - documentation: MI or KM. Defaults to miles
     * - use: optional
     * @var string|null
     */
    protected ?string $Units = null;
    /**
     * The Direction
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $Direction = null;
    /**
     * The MinDistance
     * Meta information extracted from the WSDL
     * - base: xs:nonNegativeInteger
     * - maxInclusive: 999
     * - minInclusive: 0
     * - use: optional
     * @var int|null
     */
    protected ?int $MinDistance = null;
    /**
     * Constructor method for typeVehicleSearchDistance
     * @uses TypeVehicleSearchDistance::setMaxDistance()
     * @uses TypeVehicleSearchDistance::setUnits()
     * @uses TypeVehicleSearchDistance::setDirection()
     * @uses TypeVehicleSearchDistance::setMinDistance()
     * @param int $maxDistance
     * @param string $units
     * @param string $direction
     * @param int $minDistance
     */
    public function __construct(int $maxDistance, ?string $units = null, ?string $direction = null, ?int $minDistance = null)
    {
        $this
            ->setMaxDistance($maxDistance)
            ->setUnits($units)
            ->setDirection($direction)
            ->setMinDistance($minDistance);
    }
    /**
     * Get MaxDistance value
     * @return int
     */
    public function getMaxDistance(): int
    {
        return $this->MaxDistance;
    }
    /**
     * Set MaxDistance value
     * @param int $maxDistance
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleSearchDistance
     */
    public function setMaxDistance(int $maxDistance): self
    {
        // validation for constraint: int
        if (!is_null($maxDistance) && !(is_int($maxDistance) || ctype_digit($maxDistance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxDistance, true), gettype($maxDistance)), __LINE__);
        }
        // validation for constraint: maxInclusive(999)
        if (!is_null($maxDistance) && $maxDistance > 999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 999', var_export($maxDistance, true)), __LINE__);
        }
        $this->MaxDistance = $maxDistance;
        
        return $this;
    }
    /**
     * Get Units value
     * @return string|null
     */
    public function getUnits(): ?string
    {
        return $this->Units;
    }
    /**
     * Set Units value
     * @uses \Travelport\UniversalRecord\EnumType\TypeDistance::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeDistance::getValidValues()
     * @throws InvalidArgumentException
     * @param string $units
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleSearchDistance
     */
    public function setUnits(?string $units = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeDistance::valueIsValid($units)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeDistance', is_array($units) ? implode(', ', $units) : var_export($units, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeDistance::getValidValues())), __LINE__);
        }
        $this->Units = $units;
        
        return $this;
    }
    /**
     * Get Direction value
     * @return string|null
     */
    public function getDirection(): ?string
    {
        return $this->Direction;
    }
    /**
     * Set Direction value
     * @param string $direction
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleSearchDistance
     */
    public function setDirection(?string $direction = null): self
    {
        // validation for constraint: string
        if (!is_null($direction) && !is_string($direction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($direction, true), gettype($direction)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($direction) && mb_strlen((string) $direction) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $direction)), __LINE__);
        }
        $this->Direction = $direction;
        
        return $this;
    }
    /**
     * Get MinDistance value
     * @return int|null
     */
    public function getMinDistance(): ?int
    {
        return $this->MinDistance;
    }
    /**
     * Set MinDistance value
     * @param int $minDistance
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleSearchDistance
     */
    public function setMinDistance(?int $minDistance = null): self
    {
        // validation for constraint: int
        if (!is_null($minDistance) && !(is_int($minDistance) || ctype_digit($minDistance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minDistance, true), gettype($minDistance)), __LINE__);
        }
        // validation for constraint: maxInclusive(999)
        if (!is_null($minDistance) && $minDistance > 999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 999', var_export($minDistance, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($minDistance) && $minDistance < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($minDistance, true)), __LINE__);
        }
        $this->MinDistance = $minDistance;
        
        return $this;
    }
}
