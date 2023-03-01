<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreferredConnectionPoints StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the container to specify all preferred connection points. Applicable for 1G/1V only.
 * @subpackage Structs
 */
class PreferredConnectionPoints extends AbstractStructBase
{
    /**
     * The ConnectionPoint
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - ref: common:ConnectionPoint
     * @var \Travelport\UniversalRecord\StructType\TypeLocation[]
     */
    public ?array $ConnectionPoint = null;
    /**
     * Constructor method for PreferredConnectionPoints
     * @uses PreferredConnectionPoints::setConnectionPoint()
     * @param \Travelport\UniversalRecord\StructType\TypeLocation[] $connectionPoint
     */
    public function __construct(?array $connectionPoint = null)
    {
        $this
            ->setConnectionPoint($connectionPoint);
    }
    /**
     * Get ConnectionPoint value
     * @return \Travelport\UniversalRecord\StructType\TypeLocation[]
     */
    public function getConnectionPoint(): ?array
    {
        return $this->ConnectionPoint;
    }
    /**
     * Set ConnectionPoint value
     * @param \Travelport\UniversalRecord\StructType\TypeLocation[] $connectionPoint
     * @return \Travelport\UniversalRecord\StructType\PreferredConnectionPoints
     */
    public function setConnectionPoint(?array $connectionPoint = null): self
    {
        $this->ConnectionPoint = $connectionPoint;
        
        return $this;
    }
    /**
     * Add item to ConnectionPoint value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeLocation $item
     * @return \Travelport\UniversalRecord\StructType\PreferredConnectionPoints
     */
    public function addToConnectionPoint(\Travelport\UniversalRecord\StructType\TypeLocation $item): self
    {
        $this->ConnectionPoint[] = $item;
        
        return $this;
    }
}
