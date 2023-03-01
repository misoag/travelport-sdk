<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?int $Age = null;
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
        $this->Age = $age;
        
        return $this;
    }
}
