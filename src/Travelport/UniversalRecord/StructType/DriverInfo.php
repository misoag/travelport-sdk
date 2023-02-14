<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DriverInfo StructType
 * @subpackage Structs
 */
class DriverInfo extends AbstractStructBase
{
    /**
     * The Age
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - maxInclusive: 99
     * - minInclusive: 0
     * - use: optional
     * @var int|null
     */
    protected ?int $Age = null;
    /**
     * Constructor method for DriverInfo
     * @uses DriverInfo::setAge()
     * @param int $age
     */
    public function __construct(?int $age = null)
    {
        $this
            ->setAge($age);
    }
    /**
     * Get Age value
     * @return int|null
     */
    public function getAge(): ?int
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @param int $age
     * @return \Travelport\UniversalRecord\StructType\DriverInfo
     */
    public function setAge(?int $age = null): self
    {
        // validation for constraint: int
        if (!is_null($age) && !(is_int($age) || ctype_digit($age))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($age, true), gettype($age)), __LINE__);
        }
        // validation for constraint: maxInclusive(99)
        if (!is_null($age) && $age > 99) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 99', var_export($age, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($age) && $age < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($age, true)), __LINE__);
        }
        $this->Age = $age;
        
        return $this;
    }
}
