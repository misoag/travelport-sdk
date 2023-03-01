<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareTokenInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Associates Fare with HostToken
 * @subpackage Structs
 */
class FareTokenInfo extends AbstractStructBase
{
    /**
     * The FareInfoRef
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $FareInfoRef;
    /**
     * The HostTokenRef
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $HostTokenRef;
    /**
     * Constructor method for FareTokenInfo
     * @uses FareTokenInfo::setFareInfoRef()
     * @uses FareTokenInfo::setHostTokenRef()
     * @param string $fareInfoRef
     * @param string $hostTokenRef
     */
    public function __construct(string $fareInfoRef, string $hostTokenRef)
    {
        $this
            ->setFareInfoRef($fareInfoRef)
            ->setHostTokenRef($hostTokenRef);
    }
    /**
     * Get FareInfoRef value
     * @return string
     */
    public function getFareInfoRef(): string
    {
        return $this->FareInfoRef;
    }
    /**
     * Set FareInfoRef value
     * @param string $fareInfoRef
     * @return \Travelport\Air\StructType\FareTokenInfo
     */
    public function setFareInfoRef(string $fareInfoRef): self
    {
        $this->FareInfoRef = $fareInfoRef;
        
        return $this;
    }
    /**
     * Get HostTokenRef value
     * @return string
     */
    public function getHostTokenRef(): string
    {
        return $this->HostTokenRef;
    }
    /**
     * Set HostTokenRef value
     * @param string $hostTokenRef
     * @return \Travelport\Air\StructType\FareTokenInfo
     */
    public function setHostTokenRef(string $hostTokenRef): self
    {
        $this->HostTokenRef = $hostTokenRef;
        
        return $this;
    }
}
