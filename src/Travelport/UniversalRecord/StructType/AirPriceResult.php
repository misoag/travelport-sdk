<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirPriceResult StructType
 * Meta information extracted from the WSDL
 * - documentation: A solution will be returned if one exists. Otherwise an error will be present
 * @subpackage Structs
 */
class AirPriceResult extends AbstractStructBase
{
    /**
     * The AirPricingSolution
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: AirPricingSolution
     * @var \Travelport\UniversalRecord\StructType\AirPricingSolution[]
     */
    public ?array $AirPricingSolution = null;
    /**
     * The FareRule
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareRule
     * @var \Travelport\UniversalRecord\StructType\FareRule[]
     */
    public ?array $FareRule = null;
    /**
     * The AirPriceError
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeResultMessage|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeResultMessage $AirPriceError = null;
    /**
     * The CommandKey
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - use: optional
     * @var string|null
     */
    public ?string $CommandKey = null;
    /**
     * Constructor method for AirPriceResult
     * @uses AirPriceResult::setAirPricingSolution()
     * @uses AirPriceResult::setFareRule()
     * @uses AirPriceResult::setAirPriceError()
     * @uses AirPriceResult::setCommandKey()
     * @param \Travelport\UniversalRecord\StructType\AirPricingSolution[] $airPricingSolution
     * @param \Travelport\UniversalRecord\StructType\FareRule[] $fareRule
     * @param \Travelport\UniversalRecord\StructType\TypeResultMessage $airPriceError
     * @param string $commandKey
     */
    public function __construct(?array $airPricingSolution = null, ?array $fareRule = null, ?\Travelport\UniversalRecord\StructType\TypeResultMessage $airPriceError = null, ?string $commandKey = null)
    {
        $this
            ->setAirPricingSolution($airPricingSolution)
            ->setFareRule($fareRule)
            ->setAirPriceError($airPriceError)
            ->setCommandKey($commandKey);
    }
    /**
     * Get AirPricingSolution value
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution[]
     */
    public function getAirPricingSolution(): ?array
    {
        return $this->AirPricingSolution;
    }
    /**
     * Set AirPricingSolution value
     * @param \Travelport\UniversalRecord\StructType\AirPricingSolution[] $airPricingSolution
     * @return \Travelport\UniversalRecord\StructType\AirPriceResult
     */
    public function setAirPricingSolution(?array $airPricingSolution = null): self
    {
        $this->AirPricingSolution = $airPricingSolution;
        
        return $this;
    }
    /**
     * Add item to AirPricingSolution value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingSolution $item
     * @return \Travelport\UniversalRecord\StructType\AirPriceResult
     */
    public function addToAirPricingSolution(\Travelport\UniversalRecord\StructType\AirPricingSolution $item): self
    {
        $this->AirPricingSolution[] = $item;
        
        return $this;
    }
    /**
     * Get FareRule value
     * @return \Travelport\UniversalRecord\StructType\FareRule[]
     */
    public function getFareRule(): ?array
    {
        return $this->FareRule;
    }
    /**
     * Set FareRule value
     * @param \Travelport\UniversalRecord\StructType\FareRule[] $fareRule
     * @return \Travelport\UniversalRecord\StructType\AirPriceResult
     */
    public function setFareRule(?array $fareRule = null): self
    {
        $this->FareRule = $fareRule;
        
        return $this;
    }
    /**
     * Add item to FareRule value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareRule $item
     * @return \Travelport\UniversalRecord\StructType\AirPriceResult
     */
    public function addToFareRule(\Travelport\UniversalRecord\StructType\FareRule $item): self
    {
        $this->FareRule[] = $item;
        
        return $this;
    }
    /**
     * Get AirPriceError value
     * @return \Travelport\UniversalRecord\StructType\TypeResultMessage|null
     */
    public function getAirPriceError(): ?\Travelport\UniversalRecord\StructType\TypeResultMessage
    {
        return $this->AirPriceError;
    }
    /**
     * Set AirPriceError value
     * @param \Travelport\UniversalRecord\StructType\TypeResultMessage $airPriceError
     * @return \Travelport\UniversalRecord\StructType\AirPriceResult
     */
    public function setAirPriceError(?\Travelport\UniversalRecord\StructType\TypeResultMessage $airPriceError = null): self
    {
        $this->AirPriceError = $airPriceError;
        
        return $this;
    }
    /**
     * Get CommandKey value
     * @return string|null
     */
    public function getCommandKey(): ?string
    {
        return $this->CommandKey;
    }
    /**
     * Set CommandKey value
     * @param string $commandKey
     * @return \Travelport\UniversalRecord\StructType\AirPriceResult
     */
    public function setCommandKey(?string $commandKey = null): self
    {
        $this->CommandKey = $commandKey;
        
        return $this;
    }
}
