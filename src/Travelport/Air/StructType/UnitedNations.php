<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnitedNations StructType
 * Meta information extracted from the WSDL
 * - documentation: United Nations Form of Payments
 * @subpackage Structs
 */
class UnitedNations extends AbstractStructBase
{
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Number;
    /**
     * Constructor method for UnitedNations
     * @uses UnitedNations::setNumber()
     * @param string $number
     */
    public function __construct(string $number)
    {
        $this
            ->setNumber($number);
    }
    /**
     * Get Number value
     * @return string
     */
    public function getNumber(): string
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Travelport\Air\StructType\UnitedNations
     */
    public function setNumber(string $number): self
    {
        $this->Number = $number;
        
        return $this;
    }
}
