<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected ?string $Value = null;
    /**
     * The NetFareValue
     * Meta information extracted from the WSDL
     * - documentation: Treat the value as net fare discount information
     * - use: optional
     * @var bool|null
     */
    protected ?bool $NetFareValue = null;
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
     * @return \Travelport\Util\StructType\TypeTicketModifierValueType
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
     * @return \Travelport\Util\StructType\TypeTicketModifierValueType
     */
    public function setNetFareValue(?bool $netFareValue = null): self
    {
        // validation for constraint: boolean
        if (!is_null($netFareValue) && !is_bool($netFareValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($netFareValue, true), gettype($netFareValue)), __LINE__);
        }
        $this->NetFareValue = $netFareValue;
        
        return $this;
    }
}
