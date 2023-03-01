<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreferredProviders StructType
 * @subpackage Structs
 */
class PreferredProviders extends AbstractStructBase
{
    /**
     * The Provider
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: common:Provider
     * @var \Travelport\Air\StructType\Provider[]
     */
    public ?array $Provider = null;
    /**
     * Constructor method for PreferredProviders
     * @uses PreferredProviders::setProvider()
     * @param \Travelport\Air\StructType\Provider[] $provider
     */
    public function __construct(?array $provider = null)
    {
        $this
            ->setProvider($provider);
    }
    /**
     * Get Provider value
     * @return \Travelport\Air\StructType\Provider[]
     */
    public function getProvider(): ?array
    {
        return $this->Provider;
    }
    /**
     * Set Provider value
     * @param \Travelport\Air\StructType\Provider[] $provider
     * @return \Travelport\Air\StructType\PreferredProviders
     */
    public function setProvider(?array $provider = null): self
    {
        $this->Provider = $provider;
        
        return $this;
    }
    /**
     * Add item to Provider value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Provider $item
     * @return \Travelport\Air\StructType\PreferredProviders
     */
    public function addToProvider(\Travelport\Air\StructType\Provider $item): self
    {
        $this->Provider[] = $item;
        
        return $this;
    }
}
