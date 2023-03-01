<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
     * @var \Travelport\UniversalRecord\StructType\Provider[]
     */
    public ?array $Provider = null;
    /**
     * Constructor method for PreferredProviders
     * @uses PreferredProviders::setProvider()
     * @param \Travelport\UniversalRecord\StructType\Provider[] $provider
     */
    public function __construct(?array $provider = null)
    {
        $this
            ->setProvider($provider);
    }
    /**
     * Get Provider value
     * @return \Travelport\UniversalRecord\StructType\Provider[]
     */
    public function getProvider(): ?array
    {
        return $this->Provider;
    }
    /**
     * Set Provider value
     * @param \Travelport\UniversalRecord\StructType\Provider[] $provider
     * @return \Travelport\UniversalRecord\StructType\PreferredProviders
     */
    public function setProvider(?array $provider = null): self
    {
        $this->Provider = $provider;
        
        return $this;
    }
    /**
     * Add item to Provider value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Provider $item
     * @return \Travelport\UniversalRecord\StructType\PreferredProviders
     */
    public function addToProvider(\Travelport\UniversalRecord\StructType\Provider $item): self
    {
        $this->Provider[] = $item;
        
        return $this;
    }
}
