<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RouteList StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifies the routes and sub-routes that were requested
 * @subpackage Structs
 */
class RouteList extends AbstractStructBase
{
    /**
     * The Route
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: Route
     * @var \Travelport\UniversalRecord\StructType\Route[]
     */
    public ?array $Route = null;
    /**
     * Constructor method for RouteList
     * @uses RouteList::setRoute()
     * @param \Travelport\UniversalRecord\StructType\Route[] $route
     */
    public function __construct(?array $route = null)
    {
        $this
            ->setRoute($route);
    }
    /**
     * Get Route value
     * @return \Travelport\UniversalRecord\StructType\Route[]
     */
    public function getRoute(): ?array
    {
        return $this->Route;
    }
    /**
     * Set Route value
     * @param \Travelport\UniversalRecord\StructType\Route[] $route
     * @return \Travelport\UniversalRecord\StructType\RouteList
     */
    public function setRoute(?array $route = null): self
    {
        $this->Route = $route;
        
        return $this;
    }
    /**
     * Add item to Route value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Route $item
     * @return \Travelport\UniversalRecord\StructType\RouteList
     */
    public function addToRoute(\Travelport\UniversalRecord\StructType\Route $item): self
    {
        $this->Route[] = $item;
        
        return $this;
    }
}
