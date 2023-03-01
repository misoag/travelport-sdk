<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
     * @var \Travelport\Hotel\StructType\Provider|null
     */
    public ?\Travelport\Hotel\StructType\Provider $Provider = null;
    /**
     * Constructor method for PermittedProviders
     * @uses PermittedProviders::setProvider()
     * @param \Travelport\Hotel\StructType\Provider $provider
     */
    public function __construct(?\Travelport\Hotel\StructType\Provider $provider = null)
    {
        $this
            ->setProvider($provider);
    }
    /**
     * Get Provider value
     * @return \Travelport\Hotel\StructType\Provider|null
     */
    public function getProvider(): ?\Travelport\Hotel\StructType\Provider
    {
        return $this->Provider;
    }
    /**
     * Set Provider value
     * @param \Travelport\Hotel\StructType\Provider $provider
     * @return \Travelport\Hotel\StructType\PermittedProviders
     */
    public function setProvider(?\Travelport\Hotel\StructType\Provider $provider = null): self
    {
        $this->Provider = $provider;
        
        return $this;
    }
}
