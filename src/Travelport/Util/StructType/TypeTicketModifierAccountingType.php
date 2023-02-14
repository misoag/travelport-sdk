<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeTicketModifierAccountingType StructType
 * Meta information extracted from the WSDL
 * - documentation: Ticketing Modifier used to add accounting - discount information.
 * @subpackage Structs
 */
class TypeTicketModifierAccountingType extends AbstractStructBase
{
    /**
     * The Value
     * @var string|null
     */
    protected ?string $Value = null;
    /**
     * Constructor method for typeTicketModifierAccountingType
     * @uses TypeTicketModifierAccountingType::setValue()
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
     * @return \Travelport\Util\StructType\TypeTicketModifierAccountingType
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
        
        return $this;
    }
}
