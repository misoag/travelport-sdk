<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoutingRules StructType
 * Meta information extracted from the WSDL
 * - documentation: Rules related to routing
 * @subpackage Structs
 */
class RoutingRules extends AbstractStructBase
{
    /**
     * The Routing
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\Routing[]
     */
    public ?array $Routing = null;
    /**
     * Constructor method for RoutingRules
     * @uses RoutingRules::setRouting()
     * @param \Travelport\UniversalRecord\StructType\Routing[] $routing
     */
    public function __construct(?array $routing = null)
    {
        $this
            ->setRouting($routing);
    }
    /**
     * Get Routing value
     * @return \Travelport\UniversalRecord\StructType\Routing[]
     */
    public function getRouting(): ?array
    {
        return $this->Routing;
    }
    /**
     * Set Routing value
     * @param \Travelport\UniversalRecord\StructType\Routing[] $routing
     * @return \Travelport\UniversalRecord\StructType\RoutingRules
     */
    public function setRouting(?array $routing = null): self
    {
        $this->Routing = $routing;
        
        return $this;
    }
    /**
     * Add item to Routing value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Routing $item
     * @return \Travelport\UniversalRecord\StructType\RoutingRules
     */
    public function addToRouting(\Travelport\UniversalRecord\StructType\Routing $item): self
    {
        $this->Routing[] = $item;
        
        return $this;
    }
}
