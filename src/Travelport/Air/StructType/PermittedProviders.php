<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PermittedProviders StructType
 * @subpackage Structs
 */
class PermittedProviders extends AbstractStructBase
{
    /**
     * The Provider
     * Meta information extracted from the WSDL
     * - ref: Provider
     * @var \Travelport\Air\StructType\Provider|null
     */
    public ?\Travelport\Air\StructType\Provider $Provider = null;
    /**
     * Constructor method for PermittedProviders
     * @uses PermittedProviders::setProvider()
     * @param \Travelport\Air\StructType\Provider $provider
     */
    public function __construct(?\Travelport\Air\StructType\Provider $provider = null)
    {
        $this
            ->setProvider($provider);
    }
    /**
     * Get Provider value
     * @return \Travelport\Air\StructType\Provider|null
     */
    public function getProvider(): ?\Travelport\Air\StructType\Provider
    {
        return $this->Provider;
    }
    /**
     * Set Provider value
     * @param \Travelport\Air\StructType\Provider $provider
     * @return \Travelport\Air\StructType\PermittedProviders
     */
    public function setProvider(?\Travelport\Air\StructType\Provider $provider = null): self
    {
        $this->Provider = $provider;
        
        return $this;
    }
}
