<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected ?string $Value = null;
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
     * @return \Travelport\Util\StructType\FareTicketDesignator
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($value) && mb_strlen((string) $value) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $value)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($value) && mb_strlen((string) $value) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $value)), __LINE__);
        }
        $this->Value = $value;
        
        return $this;
    }
}
