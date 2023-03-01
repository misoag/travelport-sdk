<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeTicketingModifiersRef StructType
 * @subpackage Structs
 */
class TypeTicketingModifiersRef extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Key;
    /**
     * The AirPricingInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirPricingInfoRef
     * @var \Travelport\UniversalRecord\StructType\AirPricingInfoRef[]
     */
    public ?array $AirPricingInfoRef = null;
    /**
     * Constructor method for typeTicketingModifiersRef
     * @uses TypeTicketingModifiersRef::setKey()
     * @uses TypeTicketingModifiersRef::setAirPricingInfoRef()
     * @param string $key
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef[] $airPricingInfoRef
     */
    public function __construct(string $key, ?array $airPricingInfoRef = null)
    {
        $this
            ->setKey($key)
            ->setAirPricingInfoRef($airPricingInfoRef);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\TypeTicketingModifiersRef
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get AirPricingInfoRef value
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfoRef[]
     */
    public function getAirPricingInfoRef(): ?array
    {
        return $this->AirPricingInfoRef;
    }
    /**
     * Set AirPricingInfoRef value
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @return \Travelport\UniversalRecord\StructType\TypeTicketingModifiersRef
     */
    public function setAirPricingInfoRef(?array $airPricingInfoRef = null): self
    {
        $this->AirPricingInfoRef = $airPricingInfoRef;
        
        return $this;
    }
    /**
     * Add item to AirPricingInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef $item
     * @return \Travelport\UniversalRecord\StructType\TypeTicketingModifiersRef
     */
    public function addToAirPricingInfoRef(\Travelport\UniversalRecord\StructType\AirPricingInfoRef $item): self
    {
        $this->AirPricingInfoRef[] = $item;
        
        return $this;
    }
}
