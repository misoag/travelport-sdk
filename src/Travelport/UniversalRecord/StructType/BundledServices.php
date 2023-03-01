<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BundledServices StructType
 * @subpackage Structs
 */
class BundledServices extends AbstractStructBase
{
    /**
     * The BundledService
     * Meta information extracted from the WSDL
     * - maxOccurs: 16
     * - minOccurs: 0
     * - ref: BundledService
     * @var \Travelport\UniversalRecord\StructType\BundledService[]
     */
    public ?array $BundledService = null;
    /**
     * Constructor method for BundledServices
     * @uses BundledServices::setBundledService()
     * @param \Travelport\UniversalRecord\StructType\BundledService[] $bundledService
     */
    public function __construct(?array $bundledService = null)
    {
        $this
            ->setBundledService($bundledService);
    }
    /**
     * Get BundledService value
     * @return \Travelport\UniversalRecord\StructType\BundledService[]
     */
    public function getBundledService(): ?array
    {
        return $this->BundledService;
    }
    /**
     * Set BundledService value
     * @param \Travelport\UniversalRecord\StructType\BundledService[] $bundledService
     * @return \Travelport\UniversalRecord\StructType\BundledServices
     */
    public function setBundledService(?array $bundledService = null): self
    {
        $this->BundledService = $bundledService;
        
        return $this;
    }
    /**
     * Add item to BundledService value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BundledService $item
     * @return \Travelport\UniversalRecord\StructType\BundledServices
     */
    public function addToBundledService(\Travelport\UniversalRecord\StructType\BundledService $item): self
    {
        $this->BundledService[] = $item;
        
        return $this;
    }
}
