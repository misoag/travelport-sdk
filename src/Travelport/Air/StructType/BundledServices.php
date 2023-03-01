<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\BundledService[]
     */
    public ?array $BundledService = null;
    /**
     * Constructor method for BundledServices
     * @uses BundledServices::setBundledService()
     * @param \Travelport\Air\StructType\BundledService[] $bundledService
     */
    public function __construct(?array $bundledService = null)
    {
        $this
            ->setBundledService($bundledService);
    }
    /**
     * Get BundledService value
     * @return \Travelport\Air\StructType\BundledService[]
     */
    public function getBundledService(): ?array
    {
        return $this->BundledService;
    }
    /**
     * Set BundledService value
     * @param \Travelport\Air\StructType\BundledService[] $bundledService
     * @return \Travelport\Air\StructType\BundledServices
     */
    public function setBundledService(?array $bundledService = null): self
    {
        $this->BundledService = $bundledService;
        
        return $this;
    }
    /**
     * Add item to BundledService value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\BundledService $item
     * @return \Travelport\Air\StructType\BundledServices
     */
    public function addToBundledService(\Travelport\Air\StructType\BundledService $item): self
    {
        $this->BundledService[] = $item;
        
        return $this;
    }
}
