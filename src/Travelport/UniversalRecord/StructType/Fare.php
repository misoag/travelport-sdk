<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?bool $FareSpecific = null;
    /**
     * The MultipleFareIndicator
     * Meta information extracted from the WSDL
     * - documentation: Multiple fare are used or not
     * - use: optional
     * @var bool|null
     */
    protected ?bool $MultipleFareIndicator = null;
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
    protected ?string $RateCode = null;
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
        // validation for constraint: boolean
        if (!is_null($fareSpecific) && !is_bool($fareSpecific)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($fareSpecific, true), gettype($fareSpecific)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($multipleFareIndicator) && !is_bool($multipleFareIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($multipleFareIndicator, true), gettype($multipleFareIndicator)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($rateCode) && !is_string($rateCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rateCode, true), gettype($rateCode)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($rateCode) && mb_strlen((string) $rateCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $rateCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($rateCode) && mb_strlen((string) $rateCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $rateCode)), __LINE__);
        }
        $this->RateCode = $rateCode;
        
        return $this;
    }
}
