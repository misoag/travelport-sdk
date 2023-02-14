<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected ?string $FareBasis = null;
    /**
     * The FareInfoRef
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $FareInfoRef = null;
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
     * @return \Travelport\Util\StructType\UpsellBrand
     */
    public function setFareBasis(?string $fareBasis = null): self
    {
        // validation for constraint: string
        if (!is_null($fareBasis) && !is_string($fareBasis)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareBasis, true), gettype($fareBasis)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\UpsellBrand
     */
    public function setFareInfoRef(?string $fareInfoRef = null): self
    {
        // validation for constraint: string
        if (!is_null($fareInfoRef) && !is_string($fareInfoRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareInfoRef, true), gettype($fareInfoRef)), __LINE__);
        }
        $this->FareInfoRef = $fareInfoRef;
        
        return $this;
    }
}
