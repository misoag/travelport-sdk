<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProhibitedPointOfSales StructType
 * @subpackage Structs
 */
class ProhibitedPointOfSales extends AbstractStructBase
{
    /**
     * The PointOfSale
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: common:PointOfSale
     * @var \Travelport\Air\StructType\PointOfSale[]
     */
    public ?array $PointOfSale = null;
    /**
     * Constructor method for ProhibitedPointOfSales
     * @uses ProhibitedPointOfSales::setPointOfSale()
     * @param \Travelport\Air\StructType\PointOfSale[] $pointOfSale
     */
    public function __construct(?array $pointOfSale = null)
    {
        $this
            ->setPointOfSale($pointOfSale);
    }
    /**
     * Get PointOfSale value
     * @return \Travelport\Air\StructType\PointOfSale[]
     */
    public function getPointOfSale(): ?array
    {
        return $this->PointOfSale;
    }
    /**
     * Set PointOfSale value
     * @param \Travelport\Air\StructType\PointOfSale[] $pointOfSale
     * @return \Travelport\Air\StructType\ProhibitedPointOfSales
     */
    public function setPointOfSale(?array $pointOfSale = null): self
    {
        $this->PointOfSale = $pointOfSale;
        
        return $this;
    }
    /**
     * Add item to PointOfSale value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\PointOfSale $item
     * @return \Travelport\Air\StructType\ProhibitedPointOfSales
     */
    public function addToPointOfSale(\Travelport\Air\StructType\PointOfSale $item): self
    {
        $this->PointOfSale[] = $item;
        
        return $this;
    }
}
