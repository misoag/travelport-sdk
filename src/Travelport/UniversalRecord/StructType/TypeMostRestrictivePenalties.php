<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeMostRestrictivePenalties StructType
 * Meta information extracted from the WSDL
 * - documentation: Most Restrictive Penalties
 * @subpackage Structs
 */
class TypeMostRestrictivePenalties extends AbstractStructBase
{
    /**
     * The RestrictionType
     * Meta information extracted from the WSDL
     * - documentation: Contain the type of restriction applicable
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeRestrictionData[]
     */
    public ?array $RestrictionType = null;
    /**
     * Constructor method for typeMostRestrictivePenalties
     * @uses TypeMostRestrictivePenalties::setRestrictionType()
     * @param \Travelport\UniversalRecord\StructType\TypeRestrictionData[] $restrictionType
     */
    public function __construct(?array $restrictionType = null)
    {
        $this
            ->setRestrictionType($restrictionType);
    }
    /**
     * Get RestrictionType value
     * @return \Travelport\UniversalRecord\StructType\TypeRestrictionData[]
     */
    public function getRestrictionType(): ?array
    {
        return $this->RestrictionType;
    }
    /**
     * Set RestrictionType value
     * @param \Travelport\UniversalRecord\StructType\TypeRestrictionData[] $restrictionType
     * @return \Travelport\UniversalRecord\StructType\TypeMostRestrictivePenalties
     */
    public function setRestrictionType(?array $restrictionType = null): self
    {
        $this->RestrictionType = $restrictionType;
        
        return $this;
    }
    /**
     * Add item to RestrictionType value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeRestrictionData $item
     * @return \Travelport\UniversalRecord\StructType\TypeMostRestrictivePenalties
     */
    public function addToRestrictionType(\Travelport\UniversalRecord\StructType\TypeRestrictionData $item): self
    {
        $this->RestrictionType[] = $item;
        
        return $this;
    }
}
