<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $BrandID;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Brand Key | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The AirPricingInfoRef
     * Meta information extracted from the WSDL
     * - documentation: A reference to a AirPricing. Providers: ACH, 1G, 1V, 1P. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $AirPricingInfoRef = null;
    /**
     * The FareInfoRef
     * Meta information extracted from the WSDL
     * - documentation: A reference to a FareInfo. Providers: ACH, 1G, 1V, 1P. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $FareInfoRef = null;
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
     * @return \Travelport\UniversalRecord\StructType\BrandInfo
     */
    public function setBrandID(string $brandID): self
    {
        // validation for constraint: string
        if (!is_null($brandID) && !is_string($brandID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brandID, true), gettype($brandID)), __LINE__);
        }
        // validation for constraint: maxLength(19)
        if (!is_null($brandID) && mb_strlen((string) $brandID) > 19) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 19', mb_strlen((string) $brandID)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($brandID) && mb_strlen((string) $brandID) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $brandID)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\BrandInfo
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\BrandInfo
     */
    public function setAirPricingInfoRef(?string $airPricingInfoRef = null): self
    {
        // validation for constraint: string
        if (!is_null($airPricingInfoRef) && !is_string($airPricingInfoRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airPricingInfoRef, true), gettype($airPricingInfoRef)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\BrandInfo
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
