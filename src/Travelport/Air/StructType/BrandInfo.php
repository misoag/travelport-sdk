<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BrandInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Commercially recognized product offered by an airline
 * @subpackage Structs
 */
class BrandInfo extends AbstractStructBase
{
    /**
     * The BrandID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the brand
     * - base: xs:string
     * - maxLength: 19
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $BrandID;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Brand Key | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The AirPricingInfoRef
     * Meta information extracted from the WSDL
     * - documentation: A reference to a AirPricing. Providers: ACH, 1G, 1V, 1P. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $AirPricingInfoRef = null;
    /**
     * The FareInfoRef
     * Meta information extracted from the WSDL
     * - documentation: A reference to a FareInfo. Providers: ACH, 1G, 1V, 1P. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $FareInfoRef = null;
    /**
     * Constructor method for BrandInfo
     * @uses BrandInfo::setBrandID()
     * @uses BrandInfo::setKey()
     * @uses BrandInfo::setAirPricingInfoRef()
     * @uses BrandInfo::setFareInfoRef()
     * @param string $brandID
     * @param string $key
     * @param string $airPricingInfoRef
     * @param string $fareInfoRef
     */
    public function __construct(string $brandID, ?string $key = null, ?string $airPricingInfoRef = null, ?string $fareInfoRef = null)
    {
        $this
            ->setBrandID($brandID)
            ->setKey($key)
            ->setAirPricingInfoRef($airPricingInfoRef)
            ->setFareInfoRef($fareInfoRef);
    }
    /**
     * Get BrandID value
     * @return string
     */
    public function getBrandID(): string
    {
        return $this->BrandID;
    }
    /**
     * Set BrandID value
     * @param string $brandID
     * @return \Travelport\Air\StructType\BrandInfo
     */
    public function setBrandID(string $brandID): self
    {
        $this->BrandID = $brandID;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Air\StructType\BrandInfo
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get AirPricingInfoRef value
     * @return string|null
     */
    public function getAirPricingInfoRef(): ?string
    {
        return $this->AirPricingInfoRef;
    }
    /**
     * Set AirPricingInfoRef value
     * @param string $airPricingInfoRef
     * @return \Travelport\Air\StructType\BrandInfo
     */
    public function setAirPricingInfoRef(?string $airPricingInfoRef = null): self
    {
        $this->AirPricingInfoRef = $airPricingInfoRef;
        
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
     * @return \Travelport\Air\StructType\BrandInfo
     */
    public function setFareInfoRef(?string $fareInfoRef = null): self
    {
        $this->FareInfoRef = $fareInfoRef;
        
        return $this;
    }
}
