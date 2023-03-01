<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductInfo StructType
 * @subpackage Structs
 */
class ProductInfo extends TypeSavedTripProductInfo
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Name
     * @var \Travelport\UniversalRecord\StructType\Name[]
     */
    public ?array $Name = null;
    /**
     * Constructor method for ProductInfo
     * @uses ProductInfo::setName()
     * @param \Travelport\UniversalRecord\StructType\Name[] $name
     */
    public function __construct(?array $name = null)
    {
        $this
            ->setName($name);
    }
    /**
     * Get Name value
     * @return \Travelport\UniversalRecord\StructType\Name[]
     */
    public function getName(): ?array
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param \Travelport\UniversalRecord\StructType\Name[] $name
     * @return \Travelport\UniversalRecord\StructType\ProductInfo
     */
    public function setName(?array $name = null): self
    {
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Add item to Name value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Name $item
     * @return \Travelport\UniversalRecord\StructType\ProductInfo
     */
    public function addToName(\Travelport\UniversalRecord\StructType\Name $item): self
    {
        $this->Name[] = $item;
        
        return $this;
    }
}
