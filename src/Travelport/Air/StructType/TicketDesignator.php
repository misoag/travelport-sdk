<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketDesignator StructType
 * Meta information extracted from the WSDL
 * - documentation: Ticket Designator used to further qualify a Fare Basis Code.
 * @subpackage Structs
 */
class TicketDesignator extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: Ticket Designator type.Size can be up to 20 characters
     * - base: xs:string
     * - maxLength: 20
     * - minLength: 0
     * - use: required
     * @var string
     */
    public string $Value;
    /**
     * Constructor method for TicketDesignator
     * @uses TicketDesignator::setValue()
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
     * @return \Travelport\Air\StructType\TicketDesignator
     */
    public function setValue(string $value): self
    {
        $this->Value = $value;
        
        return $this;
    }
}
