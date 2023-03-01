<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BrandList StructType
 * @subpackage Structs
 */
class BrandList extends AbstractStructBase
{
    /**
     * The Brand
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: Brand
     * @var \Travelport\Air\StructType\Brand[]
     */
    public ?array $Brand = null;
    /**
     * Constructor method for BrandList
     * @uses BrandList::setBrand()
     * @param \Travelport\Air\StructType\Brand[] $brand
     */
    public function __construct(?array $brand = null)
    {
        $this
            ->setBrand($brand);
    }
    /**
     * Get Brand value
     * @return \Travelport\Air\StructType\Brand[]
     */
    public function getBrand(): ?array
    {
        return $this->Brand;
    }
    /**
     * Set Brand value
     * @param \Travelport\Air\StructType\Brand[] $brand
     * @return \Travelport\Air\StructType\BrandList
     */
    public function setBrand(?array $brand = null): self
    {
        $this->Brand = $brand;
        
        return $this;
    }
    /**
     * Add item to Brand value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Brand $item
     * @return \Travelport\Air\StructType\BrandList
     */
    public function addToBrand(\Travelport\Air\StructType\Brand $item): self
    {
        $this->Brand[] = $item;
        
        return $this;
    }
}
