<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AlternateRouteList StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifies the alternate routes for the request
 * @subpackage Structs
 */
class AlternateRouteList extends AbstractStructBase
{
    /**
     * The AlternateRoute
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: AlternateRoute
     * @var \Travelport\UniversalRecord\StructType\AlternateRoute[]
     */
    public ?array $AlternateRoute = null;
    /**
     * Constructor method for AlternateRouteList
     * @uses AlternateRouteList::setAlternateRoute()
     * @param \Travelport\UniversalRecord\StructType\AlternateRoute[] $alternateRoute
     */
    public function __construct(?array $alternateRoute = null)
    {
        $this
            ->setAlternateRoute($alternateRoute);
    }
    /**
     * Get AlternateRoute value
     * @return \Travelport\UniversalRecord\StructType\AlternateRoute[]
     */
    public function getAlternateRoute(): ?array
    {
        return $this->AlternateRoute;
    }
    /**
     * Set AlternateRoute value
     * @param \Travelport\UniversalRecord\StructType\AlternateRoute[] $alternateRoute
     * @return \Travelport\UniversalRecord\StructType\AlternateRouteList
     */
    public function setAlternateRoute(?array $alternateRoute = null): self
    {
        $this->AlternateRoute = $alternateRoute;
        
        return $this;
    }
    /**
     * Add item to AlternateRoute value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AlternateRoute $item
     * @return \Travelport\UniversalRecord\StructType\AlternateRouteList
     */
    public function addToAlternateRoute(\Travelport\UniversalRecord\StructType\AlternateRoute $item): self
    {
        $this->AlternateRoute[] = $item;
        
        return $this;
    }
}
