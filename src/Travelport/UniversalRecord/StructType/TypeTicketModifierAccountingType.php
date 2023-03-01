<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?string $Value = null;
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
     * @return \Travelport\UniversalRecord\StructType\TypeTicketModifierAccountingType
     */
    public function setValue(?string $value = null): self
    {
        $this->Value = $value;
        
        return $this;
    }
}
