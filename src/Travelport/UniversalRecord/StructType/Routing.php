<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Routing StructType
 * @subpackage Structs
 */
class Routing extends AbstractStructBase
{
    /**
     * The DirectionInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\DirectionInfo[]
     */
    public ?array $DirectionInfo = null;
    /**
     * The RoutingConstructedInd
     * @var bool|null
     */
    public ?bool $RoutingConstructedInd = null;
    /**
     * The Number
     * @var string|null
     */
    public ?string $Number = null;
    /**
     * The RoutingRestriction
     * @var string|null
     */
    public ?string $RoutingRestriction = null;
    /**
     * Constructor method for Routing
     * @uses Routing::setDirectionInfo()
     * @uses Routing::setRoutingConstructedInd()
     * @uses Routing::setNumber()
     * @uses Routing::setRoutingRestriction()
     * @param \Travelport\UniversalRecord\StructType\DirectionInfo[] $directionInfo
     * @param bool $routingConstructedInd
     * @param string $number
     * @param string $routingRestriction
     */
    public function __construct(?array $directionInfo = null, ?bool $routingConstructedInd = null, ?string $number = null, ?string $routingRestriction = null)
    {
        $this
            ->setDirectionInfo($directionInfo)
            ->setRoutingConstructedInd($routingConstructedInd)
            ->setNumber($number)
            ->setRoutingRestriction($routingRestriction);
    }
    /**
     * Get DirectionInfo value
     * @return \Travelport\UniversalRecord\StructType\DirectionInfo[]
     */
    public function getDirectionInfo(): ?array
    {
        return $this->DirectionInfo;
    }
    /**
     * Set DirectionInfo value
     * @param \Travelport\UniversalRecord\StructType\DirectionInfo[] $directionInfo
     * @return \Travelport\UniversalRecord\StructType\Routing
     */
    public function setDirectionInfo(?array $directionInfo = null): self
    {
        $this->DirectionInfo = $directionInfo;
        
        return $this;
    }
    /**
     * Add item to DirectionInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\DirectionInfo $item
     * @return \Travelport\UniversalRecord\StructType\Routing
     */
    public function addToDirectionInfo(\Travelport\UniversalRecord\StructType\DirectionInfo $item): self
    {
        $this->DirectionInfo[] = $item;
        
        return $this;
    }
    /**
     * Get RoutingConstructedInd value
     * @return bool|null
     */
    public function getRoutingConstructedInd(): ?bool
    {
        return $this->RoutingConstructedInd;
    }
    /**
     * Set RoutingConstructedInd value
     * @param bool $routingConstructedInd
     * @return \Travelport\UniversalRecord\StructType\Routing
     */
    public function setRoutingConstructedInd(?bool $routingConstructedInd = null): self
    {
        $this->RoutingConstructedInd = $routingConstructedInd;
        
        return $this;
    }
    /**
     * Get Number value
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Travelport\UniversalRecord\StructType\Routing
     */
    public function setNumber(?string $number = null): self
    {
        $this->Number = $number;
        
        return $this;
    }
    /**
     * Get RoutingRestriction value
     * @return string|null
     */
    public function getRoutingRestriction(): ?string
    {
        return $this->RoutingRestriction;
    }
    /**
     * Set RoutingRestriction value
     * @param string $routingRestriction
     * @return \Travelport\UniversalRecord\StructType\Routing
     */
    public function setRoutingRestriction(?string $routingRestriction = null): self
    {
        $this->RoutingRestriction = $routingRestriction;
        
        return $this;
    }
}
