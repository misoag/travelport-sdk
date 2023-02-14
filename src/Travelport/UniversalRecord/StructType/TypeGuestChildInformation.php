<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeGuestChildInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: Infomration about the Child guest.
 * @subpackage Structs
 */
class TypeGuestChildInformation extends AbstractStructBase
{
    /**
     * The Age
     * Meta information extracted from the WSDL
     * - documentation: Age of the Child.
     * - use: optional
     * @var int|null
     */
    protected ?int $Age = null;
    /**
     * Constructor method for typeGuestChildInformation
     * @uses TypeGuestChildInformation::setAge()
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
     * @return \Travelport\UniversalRecord\StructType\TypeGuestChildInformation
     */
    public function setAge(?int $age = null): self
    {
        // validation for constraint: int
        if (!is_null($age) && !(is_int($age) || ctype_digit($age))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($age, true), gettype($age)), __LINE__);
        }
        $this->Age = $age;
        
        return $this;
    }
}
