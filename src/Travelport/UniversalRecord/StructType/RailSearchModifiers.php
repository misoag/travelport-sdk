<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailSearchModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Controls and switches for the Rail Availability Search request
 * @subpackage Structs
 */
class RailSearchModifiers extends AbstractStructBase
{
    /**
     * The PreferredSuppliers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\PreferredSuppliers|null
     */
    protected ?\Travelport\UniversalRecord\StructType\PreferredSuppliers $PreferredSuppliers = null;
    /**
     * The MaxChanges
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - default: 2
     * - maxInclusive: 3
     * - minInclusive: 0
     * - use: optional
     * @var int|null
     */
    protected ?int $MaxChanges = null;
    /**
     * The Direction
     * Meta information extracted from the WSDL
     * - documentation: The direction of travel.
     * - use: optional
     * @var string|null
     */
    protected ?string $Direction = null;
    /**
     * The Class
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Class = null;
    /**
     * The MaxSolutions
     * Meta information extracted from the WSDL
     * - documentation: The maximum number of solutions to return. Decreasing this number
     * - default: 300
     * - use: optional
     * @var int|null
     */
    protected ?int $MaxSolutions = null;
    /**
     * Constructor method for RailSearchModifiers
     * @uses RailSearchModifiers::setPreferredSuppliers()
     * @uses RailSearchModifiers::setMaxChanges()
     * @uses RailSearchModifiers::setDirection()
     * @uses RailSearchModifiers::setClass()
     * @uses RailSearchModifiers::setMaxSolutions()
     * @param \Travelport\UniversalRecord\StructType\PreferredSuppliers $preferredSuppliers
     * @param int $maxChanges
     * @param string $direction
     * @param string $class
     * @param int $maxSolutions
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\PreferredSuppliers $preferredSuppliers = null, ?int $maxChanges = 2, ?string $direction = null, ?string $class = null, ?int $maxSolutions = 300)
    {
        $this
            ->setPreferredSuppliers($preferredSuppliers)
            ->setMaxChanges($maxChanges)
            ->setDirection($direction)
            ->setClass($class)
            ->setMaxSolutions($maxSolutions);
    }
    /**
     * Get PreferredSuppliers value
     * @return \Travelport\UniversalRecord\StructType\PreferredSuppliers|null
     */
    public function getPreferredSuppliers(): ?\Travelport\UniversalRecord\StructType\PreferredSuppliers
    {
        return $this->PreferredSuppliers;
    }
    /**
     * Set PreferredSuppliers value
     * @param \Travelport\UniversalRecord\StructType\PreferredSuppliers $preferredSuppliers
     * @return \Travelport\UniversalRecord\StructType\RailSearchModifiers
     */
    public function setPreferredSuppliers(?\Travelport\UniversalRecord\StructType\PreferredSuppliers $preferredSuppliers = null): self
    {
        $this->PreferredSuppliers = $preferredSuppliers;
        
        return $this;
    }
    /**
     * Get MaxChanges value
     * @return int|null
     */
    public function getMaxChanges(): ?int
    {
        return $this->MaxChanges;
    }
    /**
     * Set MaxChanges value
     * @param int $maxChanges
     * @return \Travelport\UniversalRecord\StructType\RailSearchModifiers
     */
    public function setMaxChanges(?int $maxChanges = 2): self
    {
        // validation for constraint: int
        if (!is_null($maxChanges) && !(is_int($maxChanges) || ctype_digit($maxChanges))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxChanges, true), gettype($maxChanges)), __LINE__);
        }
        // validation for constraint: maxInclusive(3)
        if (!is_null($maxChanges) && $maxChanges > 3) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 3', var_export($maxChanges, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($maxChanges) && $maxChanges < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($maxChanges, true)), __LINE__);
        }
        $this->MaxChanges = $maxChanges;
        
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeRailDirection::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeRailDirection::getValidValues()
     * @throws InvalidArgumentException
     * @param string $direction
     * @return \Travelport\UniversalRecord\StructType\RailSearchModifiers
     */
    public function setDirection(?string $direction = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeRailDirection::valueIsValid($direction)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeRailDirection', is_array($direction) ? implode(', ', $direction) : var_export($direction, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeRailDirection::getValidValues())), __LINE__);
        }
        $this->Direction = $direction;
        
        return $this;
    }
    /**
     * Get Class value
     * @return string|null
     */
    public function getClass(): ?string
    {
        return $this->Class;
    }
    /**
     * Set Class value
     * @param string $class
     * @return \Travelport\UniversalRecord\StructType\RailSearchModifiers
     */
    public function setClass(?string $class = null): self
    {
        // validation for constraint: string
        if (!is_null($class) && !is_string($class)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($class, true), gettype($class)), __LINE__);
        }
        $this->Class = $class;
        
        return $this;
    }
    /**
     * Get MaxSolutions value
     * @return int|null
     */
    public function getMaxSolutions(): ?int
    {
        return $this->MaxSolutions;
    }
    /**
     * Set MaxSolutions value
     * @param int $maxSolutions
     * @return \Travelport\UniversalRecord\StructType\RailSearchModifiers
     */
    public function setMaxSolutions(?int $maxSolutions = 300): self
    {
        // validation for constraint: int
        if (!is_null($maxSolutions) && !(is_int($maxSolutions) || ctype_digit($maxSolutions))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxSolutions, true), gettype($maxSolutions)), __LINE__);
        }
        $this->MaxSolutions = $maxSolutions;
        
        return $this;
    }
}
