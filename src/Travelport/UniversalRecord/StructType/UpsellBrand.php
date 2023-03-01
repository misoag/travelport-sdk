<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpsellBrand StructType
 * Meta information extracted from the WSDL
 * - documentation: Upsell brand reference
 * @subpackage Structs
 */
class UpsellBrand extends AbstractStructBase
{
    /**
     * The FareBasis
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $FareBasis = null;
    /**
     * The FareInfoRef
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $FareInfoRef = null;
    /**
     * Constructor method for UpsellBrand
     * @uses UpsellBrand::setFareBasis()
     * @uses UpsellBrand::setFareInfoRef()
     * @param string $fareBasis
     * @param string $fareInfoRef
     */
    public function __construct(?string $fareBasis = null, ?string $fareInfoRef = null)
    {
        $this
            ->setFareBasis($fareBasis)
            ->setFareInfoRef($fareInfoRef);
    }
    /**
     * Get FareBasis value
     * @return string|null
     */
    public function getFareBasis(): ?string
    {
        return $this->FareBasis;
    }
    /**
     * Set FareBasis value
     * @param string $fareBasis
     * @return \Travelport\UniversalRecord\StructType\UpsellBrand
     */
    public function setFareBasis(?string $fareBasis = null): self
    {
        $this->FareBasis = $fareBasis;
        
        return $this;
    }
    /**
     * Get FareInfoRef value
     * @return string|null
     */
    public function getFareInfoRef(): ?string
    {
        return $this->FareInfoRef;
    }
    /**
     * Set FareInfoRef value
     * @param string $fareInfoRef
     * @return \Travelport\UniversalRecord\StructType\UpsellBrand
     */
    public function setFareInfoRef(?string $fareInfoRef = null): self
    {
        $this->FareInfoRef = $fareInfoRef;
        
        return $this;
    }
}
