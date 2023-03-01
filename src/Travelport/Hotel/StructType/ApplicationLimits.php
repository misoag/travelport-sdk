<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
     * @var \Travelport\Hotel\StructType\OptionalServiceApplicationLimitType[]
     */
    public ?array $ApplicationLimit = null;
    /**
     * Constructor method for ApplicationLimits
     * @uses ApplicationLimits::setApplicationLimit()
     * @param \Travelport\Hotel\StructType\OptionalServiceApplicationLimitType[] $applicationLimit
     */
    public function __construct(?array $applicationLimit = null)
    {
        $this
            ->setApplicationLimit($applicationLimit);
    }
    /**
     * Get ApplicationLimit value
     * @return \Travelport\Hotel\StructType\OptionalServiceApplicationLimitType[]
     */
    public function getApplicationLimit(): ?array
    {
        return $this->ApplicationLimit;
    }
    /**
     * Set ApplicationLimit value
     * @param \Travelport\Hotel\StructType\OptionalServiceApplicationLimitType[] $applicationLimit
     * @return \Travelport\Hotel\StructType\ApplicationLimits
     */
    public function setApplicationLimit(?array $applicationLimit = null): self
    {
        $this->ApplicationLimit = $applicationLimit;
        
        return $this;
    }
    /**
     * Add item to ApplicationLimit value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\OptionalServiceApplicationLimitType $item
     * @return \Travelport\Hotel\StructType\ApplicationLimits
     */
    public function addToApplicationLimit(\Travelport\Hotel\StructType\OptionalServiceApplicationLimitType $item): self
    {
        $this->ApplicationLimit[] = $item;
        
        return $this;
    }
}
