<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareTicketDesignator StructType
 * Meta information extracted from the WSDL
 * - documentation: Ticket Designator used to further qualify a Fare
 * @subpackage Structs
 */
class FareTicketDesignator extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: Ticket Designator type.Size can be up to 20 characters
     * - base: xs:string
     * - maxLength: 20
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    public ?string $Value = null;
    /**
     * Constructor method for FareTicketDesignator
     * @uses FareTicketDesignator::setValue()
     * @param string $value
     */
    public function __construct(?string $value = null)
    {
        $this
            ->setValue($value);
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \Travelport\Air\StructType\FareTicketDesignator
     */
    public function setValue(?string $value = null): self
    {
        $this->Value = $value;
        
        return $this;
    }
}
