<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Distance StructType
 * Meta information extracted from the WSDL
 * - documentation: Container to encapsulate the a distance value with its unit of measure.
 * - type: xs:integer
 * - use: optional
 * @subpackage Structs
 */
class Distance extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $Value;
    /**
     * The Units
     * Meta information extracted from the WSDL
     * - default: MI
     * - use: optional
     * @var string|null
     */
    protected ?string $Units = null;
    /**
     * The Direction
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * @var string|null
     */
    protected ?string $Direction = null;
    /**
     * Constructor method for Distance
     * @uses Distance::setValue()
     * @uses Distance::setUnits()
     * @uses Distance::setDirection()
     * @param int $value
     * @param string $units
     * @param string $direction
     */
    public function __construct(int $value, ?string $units = 'MI', ?string $direction = null)
    {
        $this
            ->setValue($value)
            ->setUnits($units)
            ->setDirection($direction);
    }
    /**
     * Get Value value
     * @return int
     */
    public function getValue(): int
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param int $value
     * @return \Travelport\Hotel\StructType\Distance
     */
    public function setValue(int $value): self
    {
        // validation for constraint: int
        if (!is_null($value) && !(is_int($value) || ctype_digit($value))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
        
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
     * @return \Travelport\Hotel\StructType\Distance
     */
    public function setUnits(?string $units = 'MI'): self
    {
        // validation for constraint: string
        if (!is_null($units) && !is_string($units)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($units, true), gettype($units)), __LINE__);
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
     * @return \Travelport\Hotel\StructType\Distance
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
}
