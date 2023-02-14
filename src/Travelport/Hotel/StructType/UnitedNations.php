<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
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
    protected string $Number;
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
     * @return \Travelport\Hotel\StructType\UnitedNations
     */
    public function setNumber(string $number): self
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->Number = $number;
        
        return $this;
    }
}
