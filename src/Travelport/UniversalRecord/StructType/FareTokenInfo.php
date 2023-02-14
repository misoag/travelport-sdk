<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $FareInfoRef;
    /**
     * The HostTokenRef
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $HostTokenRef;
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
     * @return \Travelport\UniversalRecord\StructType\FareTokenInfo
     */
    public function setFareInfoRef(string $fareInfoRef): self
    {
        // validation for constraint: string
        if (!is_null($fareInfoRef) && !is_string($fareInfoRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareInfoRef, true), gettype($fareInfoRef)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\FareTokenInfo
     */
    public function setHostTokenRef(string $hostTokenRef): self
    {
        // validation for constraint: string
        if (!is_null($hostTokenRef) && !is_string($hostTokenRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hostTokenRef, true), gettype($hostTokenRef)), __LINE__);
        }
        $this->HostTokenRef = $hostTokenRef;
        
        return $this;
    }
}
