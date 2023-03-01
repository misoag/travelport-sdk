<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?int $Age = null;
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
        $this->Age = $age;
        
        return $this;
    }
}
