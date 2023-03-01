<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ApplicationLimits StructType
 * Meta information extracted from the WSDL
 * - documentation: Adds the limits on the number of options that can be selected for a particular type
 * @subpackage Structs
 */
class ApplicationLimits extends AbstractStructBase
{
    /**
     * The ApplicationLimit
     * Meta information extracted from the WSDL
     * - documentation: The application limits for a particular level
     * - maxOccurs: 10
     * @var \Travelport\UniversalRecord\StructType\OptionalServiceApplicationLimitType[]
     */
    public ?array $ApplicationLimit = null;
    /**
     * Constructor method for ApplicationLimits
     * @uses ApplicationLimits::setApplicationLimit()
     * @param \Travelport\UniversalRecord\StructType\OptionalServiceApplicationLimitType[] $applicationLimit
     */
    public function __construct(?array $applicationLimit = null)
    {
        $this
            ->setApplicationLimit($applicationLimit);
    }
    /**
     * Get ApplicationLimit value
     * @return \Travelport\UniversalRecord\StructType\OptionalServiceApplicationLimitType[]
     */
    public function getApplicationLimit(): ?array
    {
        return $this->ApplicationLimit;
    }
    /**
     * Set ApplicationLimit value
     * @param \Travelport\UniversalRecord\StructType\OptionalServiceApplicationLimitType[] $applicationLimit
     * @return \Travelport\UniversalRecord\StructType\ApplicationLimits
     */
    public function setApplicationLimit(?array $applicationLimit = null): self
    {
        $this->ApplicationLimit = $applicationLimit;
        
        return $this;
    }
    /**
     * Add item to ApplicationLimit value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\OptionalServiceApplicationLimitType $item
     * @return \Travelport\UniversalRecord\StructType\ApplicationLimits
     */
    public function addToApplicationLimit(\Travelport\UniversalRecord\StructType\OptionalServiceApplicationLimitType $item): self
    {
        $this->ApplicationLimit[] = $item;
        
        return $this;
    }
}
