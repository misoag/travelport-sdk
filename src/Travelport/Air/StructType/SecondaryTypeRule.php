<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SecondaryTypeRule StructType
 * Meta information extracted from the WSDL
 * - documentation: Lists a single secondary code for the optional / additional service.
 * @subpackage Structs
 */
class SecondaryTypeRule extends AbstractStructBase
{
    /**
     * The SecondaryType
     * Meta information extracted from the WSDL
     * - documentation: The unique type to associate a secondary type in an optional service | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $SecondaryType;
    /**
     * The ApplicationLimit
     * Meta information extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\OptionalServiceApplicationLimitType[]
     */
    public ?array $ApplicationLimit = null;
    /**
     * Constructor method for SecondaryTypeRule
     * @uses SecondaryTypeRule::setSecondaryType()
     * @uses SecondaryTypeRule::setApplicationLimit()
     * @param string $secondaryType
     * @param \Travelport\Air\StructType\OptionalServiceApplicationLimitType[] $applicationLimit
     */
    public function __construct(string $secondaryType, ?array $applicationLimit = null)
    {
        $this
            ->setSecondaryType($secondaryType)
            ->setApplicationLimit($applicationLimit);
    }
    /**
     * Get SecondaryType value
     * @return string
     */
    public function getSecondaryType(): string
    {
        return $this->SecondaryType;
    }
    /**
     * Set SecondaryType value
     * @param string $secondaryType
     * @return \Travelport\Air\StructType\SecondaryTypeRule
     */
    public function setSecondaryType(string $secondaryType): self
    {
        $this->SecondaryType = $secondaryType;
        
        return $this;
    }
    /**
     * Get ApplicationLimit value
     * @return \Travelport\Air\StructType\OptionalServiceApplicationLimitType[]
     */
    public function getApplicationLimit(): ?array
    {
        return $this->ApplicationLimit;
    }
    /**
     * Set ApplicationLimit value
     * @param \Travelport\Air\StructType\OptionalServiceApplicationLimitType[] $applicationLimit
     * @return \Travelport\Air\StructType\SecondaryTypeRule
     */
    public function setApplicationLimit(?array $applicationLimit = null): self
    {
        $this->ApplicationLimit = $applicationLimit;
        
        return $this;
    }
    /**
     * Add item to ApplicationLimit value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\OptionalServiceApplicationLimitType $item
     * @return \Travelport\Air\StructType\SecondaryTypeRule
     */
    public function addToApplicationLimit(\Travelport\Air\StructType\OptionalServiceApplicationLimitType $item): self
    {
        $this->ApplicationLimit[] = $item;
        
        return $this;
    }
}
