<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SecondaryTypeRules StructType
 * Meta information extracted from the WSDL
 * - documentation: Lists the supported Secondary Codes for the optional / additional service.
 * @subpackage Structs
 */
class SecondaryTypeRules extends AbstractStructBase
{
    /**
     * The SecondaryTypeRule
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * @var \Travelport\Hotel\StructType\SecondaryTypeRule[]
     */
    public ?array $SecondaryTypeRule = null;
    /**
     * Constructor method for SecondaryTypeRules
     * @uses SecondaryTypeRules::setSecondaryTypeRule()
     * @param \Travelport\Hotel\StructType\SecondaryTypeRule[] $secondaryTypeRule
     */
    public function __construct(?array $secondaryTypeRule = null)
    {
        $this
            ->setSecondaryTypeRule($secondaryTypeRule);
    }
    /**
     * Get SecondaryTypeRule value
     * @return \Travelport\Hotel\StructType\SecondaryTypeRule[]
     */
    public function getSecondaryTypeRule(): ?array
    {
        return $this->SecondaryTypeRule;
    }
    /**
     * Set SecondaryTypeRule value
     * @param \Travelport\Hotel\StructType\SecondaryTypeRule[] $secondaryTypeRule
     * @return \Travelport\Hotel\StructType\SecondaryTypeRules
     */
    public function setSecondaryTypeRule(?array $secondaryTypeRule = null): self
    {
        $this->SecondaryTypeRule = $secondaryTypeRule;
        
        return $this;
    }
    /**
     * Add item to SecondaryTypeRule value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\SecondaryTypeRule $item
     * @return \Travelport\Hotel\StructType\SecondaryTypeRules
     */
    public function addToSecondaryTypeRule(\Travelport\Hotel\StructType\SecondaryTypeRule $item): self
    {
        $this->SecondaryTypeRule[] = $item;
        
        return $this;
    }
}
