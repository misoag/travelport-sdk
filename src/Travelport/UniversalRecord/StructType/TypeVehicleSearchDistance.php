<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public int $MaxDistance;
    /**
     * The Units
     * Meta information extracted from the WSDL
     * - documentation: MI or KM. Defaults to miles
     * - use: optional
     * @var string|null
     */
    public ?string $Units = null;
    /**
     * The Direction
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - use: optional
     * @var string|null
     */
    public ?string $Direction = null;
    /**
     * The MinDistance
     * Meta information extracted from the WSDL
     * - base: xs:nonNegativeInteger
     * - maxInclusive: 999
     * - minInclusive: 0
     * - use: optional
     * @var int|null
     */
    public ?int $MinDistance = null;
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
     * @param string $units
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleSearchDistance
     */
    public function setUnits(?string $units = null): self
    {
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
        $this->MinDistance = $minDistance;
        
        return $this;
    }
}
