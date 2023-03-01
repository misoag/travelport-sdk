<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TourCode StructType
 * Meta information extracted from the WSDL
 * - documentation: Tour Code Fare Basis
 * @subpackage Structs
 */
class TourCode extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: Tour code value. Maximum 15 characters
     * - base: xs:string
     * - maxLength: 15
     * - use: required
     * @var string
     */
    public string $Value;
    /**
     * Constructor method for TourCode
     * @uses TourCode::setValue()
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
     * @return \Travelport\UniversalRecord\StructType\TourCode
     */
    public function setValue(string $value): self
    {
        $this->Value = $value;
        
        return $this;
    }
}
