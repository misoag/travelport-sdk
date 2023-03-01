<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OptionalServiceModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Rich Content and Branding for an optional service
 * @subpackage Structs
 */
class OptionalServiceModifiers extends AbstractStructBase
{
    /**
     * The OptionalServiceModifier
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - ref: OptionalServiceModifier
     * @var \Travelport\UniversalRecord\StructType\OptionalServiceModifier[]
     */
    public ?array $OptionalServiceModifier = null;
    /**
     * Constructor method for OptionalServiceModifiers
     * @uses OptionalServiceModifiers::setOptionalServiceModifier()
     * @param \Travelport\UniversalRecord\StructType\OptionalServiceModifier[] $optionalServiceModifier
     */
    public function __construct(?array $optionalServiceModifier = null)
    {
        $this
            ->setOptionalServiceModifier($optionalServiceModifier);
    }
    /**
     * Get OptionalServiceModifier value
     * @return \Travelport\UniversalRecord\StructType\OptionalServiceModifier[]
     */
    public function getOptionalServiceModifier(): ?array
    {
        return $this->OptionalServiceModifier;
    }
    /**
     * Set OptionalServiceModifier value
     * @param \Travelport\UniversalRecord\StructType\OptionalServiceModifier[] $optionalServiceModifier
     * @return \Travelport\UniversalRecord\StructType\OptionalServiceModifiers
     */
    public function setOptionalServiceModifier(?array $optionalServiceModifier = null): self
    {
        $this->OptionalServiceModifier = $optionalServiceModifier;
        
        return $this;
    }
    /**
     * Add item to OptionalServiceModifier value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\OptionalServiceModifier $item
     * @return \Travelport\UniversalRecord\StructType\OptionalServiceModifiers
     */
    public function addToOptionalServiceModifier(\Travelport\UniversalRecord\StructType\OptionalServiceModifier $item): self
    {
        $this->OptionalServiceModifier[] = $item;
        
        return $this;
    }
}
