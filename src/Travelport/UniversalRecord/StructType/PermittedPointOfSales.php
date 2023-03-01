<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PermittedPointOfSales StructType
 * @subpackage Structs
 */
class PermittedPointOfSales extends AbstractStructBase
{
    /**
     * The PointOfSale
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: common:PointOfSale
     * @var \Travelport\UniversalRecord\StructType\PointOfSale[]
     */
    public ?array $PointOfSale = null;
    /**
     * Constructor method for PermittedPointOfSales
     * @uses PermittedPointOfSales::setPointOfSale()
     * @param \Travelport\UniversalRecord\StructType\PointOfSale[] $pointOfSale
     */
    public function __construct(?array $pointOfSale = null)
    {
        $this
            ->setPointOfSale($pointOfSale);
    }
    /**
     * Get PointOfSale value
     * @return \Travelport\UniversalRecord\StructType\PointOfSale[]
     */
    public function getPointOfSale(): ?array
    {
        return $this->PointOfSale;
    }
    /**
     * Set PointOfSale value
     * @param \Travelport\UniversalRecord\StructType\PointOfSale[] $pointOfSale
     * @return \Travelport\UniversalRecord\StructType\PermittedPointOfSales
     */
    public function setPointOfSale(?array $pointOfSale = null): self
    {
        $this->PointOfSale = $pointOfSale;
        
        return $this;
    }
    /**
     * Add item to PointOfSale value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PointOfSale $item
     * @return \Travelport\UniversalRecord\StructType\PermittedPointOfSales
     */
    public function addToPointOfSale(\Travelport\UniversalRecord\StructType\PointOfSale $item): self
    {
        $this->PointOfSale[] = $item;
        
        return $this;
    }
}
