<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PermittedConnectionPoints StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the container to specify all permitted connection points. Applicable for 1G/1V/1P.
 * @subpackage Structs
 */
class PermittedConnectionPoints extends AbstractStructBase
{
    /**
     * The ConnectionPoint
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: common:ConnectionPoint
     * @var \Travelport\Air\StructType\TypeLocation[]
     */
    public ?array $ConnectionPoint = null;
    /**
     * Constructor method for PermittedConnectionPoints
     * @uses PermittedConnectionPoints::setConnectionPoint()
     * @param \Travelport\Air\StructType\TypeLocation[] $connectionPoint
     */
    public function __construct(?array $connectionPoint = null)
    {
        $this
            ->setConnectionPoint($connectionPoint);
    }
    /**
     * Get ConnectionPoint value
     * @return \Travelport\Air\StructType\TypeLocation[]
     */
    public function getConnectionPoint(): ?array
    {
        return $this->ConnectionPoint;
    }
    /**
     * Set ConnectionPoint value
     * @param \Travelport\Air\StructType\TypeLocation[] $connectionPoint
     * @return \Travelport\Air\StructType\PermittedConnectionPoints
     */
    public function setConnectionPoint(?array $connectionPoint = null): self
    {
        $this->ConnectionPoint = $connectionPoint;
        
        return $this;
    }
    /**
     * Add item to ConnectionPoint value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TypeLocation $item
     * @return \Travelport\Air\StructType\PermittedConnectionPoints
     */
    public function addToConnectionPoint(\Travelport\Air\StructType\TypeLocation $item): self
    {
        $this->ConnectionPoint[] = $item;
        
        return $this;
    }
}
