<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

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
     * @var \Travelport\Util\StructType\Provider|null
     */
    protected ?\Travelport\Util\StructType\Provider $Provider = null;
    /**
     * Constructor method for PermittedProviders
     * @uses PermittedProviders::setProvider()
     * @param \Travelport\Util\StructType\Provider $provider
     */
    public function __construct(?\Travelport\Util\StructType\Provider $provider = null)
    {
        $this
            ->setProvider($provider);
    }
    /**
     * Get Provider value
     * @return \Travelport\Util\StructType\Provider|null
     */
    public function getProvider(): ?\Travelport\Util\StructType\Provider
    {
        return $this->Provider;
    }
    /**
     * Set Provider value
     * @param \Travelport\Util\StructType\Provider $provider
     * @return \Travelport\Util\StructType\PermittedProviders
     */
    public function setProvider(?\Travelport\Util\StructType\Provider $provider = null): self
    {
        $this->Provider = $provider;
        
        return $this;
    }
}
