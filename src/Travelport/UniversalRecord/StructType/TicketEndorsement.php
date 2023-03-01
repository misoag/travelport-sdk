<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketEndorsement StructType
 * @subpackage Structs
 */
class TicketEndorsement extends AbstractStructBase
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
     * Constructor method for TicketEndorsement
     * @uses TicketEndorsement::setValue()
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
     * @return \Travelport\UniversalRecord\StructType\TicketEndorsement
     */
    public function setValue(string $value): self
    {
        $this->Value = $value;
        
        return $this;
    }
}
