<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Fare StructType
 * Meta information extracted from the WSDL
 * - documentation: Cruise Fare info.
 * @subpackage Structs
 */
class Fare extends AbstractStructBase
{
    /**
     * The FareSpecific
     * Meta information extracted from the WSDL
     * - documentation: Category is fare specific or not
     * - use: optional
     * @var bool|null
     */
    public ?bool $FareSpecific = null;
    /**
     * The MultipleFareIndicator
     * Meta information extracted from the WSDL
     * - documentation: Multiple fare are used or not
     * - use: optional
     * @var bool|null
     */
    public ?bool $MultipleFareIndicator = null;
    /**
     * The RateCode
     * Meta information extracted from the WSDL
     * - documentation: Vendor defined rate code | Used for Character Strings, length 1 to 8.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $RateCode = null;
    /**
     * Constructor method for Fare
     * @uses Fare::setFareSpecific()
     * @uses Fare::setMultipleFareIndicator()
     * @uses Fare::setRateCode()
     * @param bool $fareSpecific
     * @param bool $multipleFareIndicator
     * @param string $rateCode
     */
    public function __construct(?bool $fareSpecific = null, ?bool $multipleFareIndicator = null, ?string $rateCode = null)
    {
        $this
            ->setFareSpecific($fareSpecific)
            ->setMultipleFareIndicator($multipleFareIndicator)
            ->setRateCode($rateCode);
    }
    /**
     * Get FareSpecific value
     * @return bool|null
     */
    public function getFareSpecific(): ?bool
    {
        return $this->FareSpecific;
    }
    /**
     * Set FareSpecific value
     * @param bool $fareSpecific
     * @return \Travelport\UniversalRecord\StructType\Fare
     */
    public function setFareSpecific(?bool $fareSpecific = null): self
    {
        $this->FareSpecific = $fareSpecific;
        
        return $this;
    }
    /**
     * Get MultipleFareIndicator value
     * @return bool|null
     */
    public function getMultipleFareIndicator(): ?bool
    {
        return $this->MultipleFareIndicator;
    }
    /**
     * Set MultipleFareIndicator value
     * @param bool $multipleFareIndicator
     * @return \Travelport\UniversalRecord\StructType\Fare
     */
    public function setMultipleFareIndicator(?bool $multipleFareIndicator = null): self
    {
        $this->MultipleFareIndicator = $multipleFareIndicator;
        
        return $this;
    }
    /**
     * Get RateCode value
     * @return string|null
     */
    public function getRateCode(): ?string
    {
        return $this->RateCode;
    }
    /**
     * Set RateCode value
     * @param string $rateCode
     * @return \Travelport\UniversalRecord\StructType\Fare
     */
    public function setRateCode(?string $rateCode = null): self
    {
        $this->RateCode = $rateCode;
        
        return $this;
    }
}
