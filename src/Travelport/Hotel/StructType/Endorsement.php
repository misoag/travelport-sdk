<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Endorsement StructType
 * Meta information extracted from the WSDL
 * - documentation: Restrictions or instructions about the fare or ticket
 * @subpackage Structs
 */
class Endorsement extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: Endorsement type.Size can be up to 256 characters
     * - base: xs:string
     * - maxLength: 256
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $Value;
    /**
     * Constructor method for Endorsement
     * @uses Endorsement::setValue()
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
     * @return \Travelport\Hotel\StructType\Endorsement
     */
    public function setValue(string $value): self
    {
        $this->Value = $value;
        
        return $this;
    }
}
