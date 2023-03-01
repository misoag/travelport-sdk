<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PermittedVendors StructType
 * Meta information extracted from the WSDL
 * - documentation: 1G/1V max 4 vendors, 1P max 99 vendors
 * @subpackage Structs
 */
class PermittedVendors extends AbstractStructBase
{
    /**
     * The Vendor
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: Vendor
     * @var \Travelport\UniversalRecord\StructType\Vendor[]
     */
    public ?array $Vendor = null;
    /**
     * Constructor method for PermittedVendors
     * @uses PermittedVendors::setVendor()
     * @param \Travelport\UniversalRecord\StructType\Vendor[] $vendor
     */
    public function __construct(?array $vendor = null)
    {
        $this
            ->setVendor($vendor);
    }
    /**
     * Get Vendor value
     * @return \Travelport\UniversalRecord\StructType\Vendor[]
     */
    public function getVendor(): ?array
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param \Travelport\UniversalRecord\StructType\Vendor[] $vendor
     * @return \Travelport\UniversalRecord\StructType\PermittedVendors
     */
    public function setVendor(?array $vendor = null): self
    {
        $this->Vendor = $vendor;
        
        return $this;
    }
    /**
     * Add item to Vendor value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Vendor $item
     * @return \Travelport\UniversalRecord\StructType\PermittedVendors
     */
    public function addToVendor(\Travelport\UniversalRecord\StructType\Vendor $item): self
    {
        $this->Vendor[] = $item;
        
        return $this;
    }
}
