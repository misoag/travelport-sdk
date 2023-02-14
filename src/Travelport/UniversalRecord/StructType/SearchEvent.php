<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchEvent StructType
 * Meta information extracted from the WSDL
 * - documentation: Search for various reservation events
 * @subpackage Structs
 */
class SearchEvent extends TypeTimeRange
{
    /**
     * The Type
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * Constructor method for SearchEvent
     * @uses SearchEvent::setType()
     * @param string $type
     */
    public function __construct(?string $type = null)
    {
        $this
            ->setType($type);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Travelport\UniversalRecord\EnumType\TypeEventType::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeEventType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\SearchEvent
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeEventType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeEventType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeEventType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
}
