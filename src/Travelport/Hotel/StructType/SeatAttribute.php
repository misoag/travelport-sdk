<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatAttribute StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifies the seat attribute of the service.
 * @subpackage Structs
 */
class SeatAttribute extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $Value;
    /**
     * Constructor method for SeatAttribute
     * @uses SeatAttribute::setValue()
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this
            ->setValue($value);
    }
    /**
     * Get Value value
     * @return string
     */
    public function getValue(): string
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \Travelport\Hotel\StructType\SeatAttribute
     */
    public function setValue(string $value): self
    {
        $this->Value = $value;
        
        return $this;
    }
}
