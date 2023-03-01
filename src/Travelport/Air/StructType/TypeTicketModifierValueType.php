<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeTicketModifierValueType StructType
 * Meta information extracted from the WSDL
 * - documentation: Ticketing Modifier used to add value discount information.
 * @subpackage Structs
 */
class TypeTicketModifierValueType extends AbstractStructBase
{
    /**
     * The Value
     * @var string|null
     */
    public ?string $Value = null;
    /**
     * The NetFareValue
     * Meta information extracted from the WSDL
     * - documentation: Treat the value as net fare discount information
     * - use: optional
     * @var bool|null
     */
    public ?bool $NetFareValue = null;
    /**
     * Constructor method for typeTicketModifierValueType
     * @uses TypeTicketModifierValueType::setValue()
     * @uses TypeTicketModifierValueType::setNetFareValue()
     * @param string $value
     * @param bool $netFareValue
     */
    public function __construct(?string $value = null, ?bool $netFareValue = null)
    {
        $this
            ->setValue($value)
            ->setNetFareValue($netFareValue);
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
     * @return \Travelport\Air\StructType\TypeTicketModifierValueType
     */
    public function setValue(?string $value = null): self
    {
        $this->Value = $value;
        
        return $this;
    }
    /**
     * Get NetFareValue value
     * @return bool|null
     */
    public function getNetFareValue(): ?bool
    {
        return $this->NetFareValue;
    }
    /**
     * Set NetFareValue value
     * @param bool $netFareValue
     * @return \Travelport\Air\StructType\TypeTicketModifierValueType
     */
    public function setNetFareValue(?bool $netFareValue = null): self
    {
        $this->NetFareValue = $netFareValue;
        
        return $this;
    }
}
