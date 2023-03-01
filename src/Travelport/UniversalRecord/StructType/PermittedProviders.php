<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
     * @var \Travelport\UniversalRecord\StructType\Provider|null
     */
    public ?\Travelport\UniversalRecord\StructType\Provider $Provider = null;
    /**
     * Constructor method for PermittedProviders
     * @uses PermittedProviders::setProvider()
     * @param \Travelport\UniversalRecord\StructType\Provider $provider
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\Provider $provider = null)
    {
        $this
            ->setProvider($provider);
    }
    /**
     * Get Provider value
     * @return \Travelport\UniversalRecord\StructType\Provider|null
     */
    public function getProvider(): ?\Travelport\UniversalRecord\StructType\Provider
    {
        return $this->Provider;
    }
    /**
     * Set Provider value
     * @param \Travelport\UniversalRecord\StructType\Provider $provider
     * @return \Travelport\UniversalRecord\StructType\PermittedProviders
     */
    public function setProvider(?\Travelport\UniversalRecord\StructType\Provider $provider = null): self
    {
        $this->Provider = $provider;
        
        return $this;
    }
}
