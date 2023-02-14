<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
     * @var \StructType\Provider|null
     */
    protected ?\StructType\Provider $Provider = null;
    /**
     * Constructor method for PermittedProviders
     * @uses PermittedProviders::setProvider()
     * @param \StructType\Provider $provider
     */
    public function __construct(?\StructType\Provider $provider = null)
    {
        $this
            ->setProvider($provider);
    }
    /**
     * Get Provider value
     * @return \StructType\Provider|null
     */
    public function getProvider(): ?\StructType\Provider
    {
        return $this->Provider;
    }
    /**
     * Set Provider value
     * @param \StructType\Provider $provider
     * @return \StructType\PermittedProviders
     */
    public function setProvider(?\StructType\Provider $provider = null): self
    {
        $this->Provider = $provider;
        
        return $this;
    }
}
