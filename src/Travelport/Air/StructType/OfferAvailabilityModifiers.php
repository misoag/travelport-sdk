<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferAvailabilityModifiers StructType
 * @subpackage Structs
 */
class OfferAvailabilityModifiers extends AbstractStructBase
{
    /**
     * The ServiceType
     * Meta information extracted from the WSDL
     * - documentation: To restrict offers to only this type. | An identifier that labels this Merchandising Service (Baggage, Nomiles,GroundTransportation etc)
     * - base: xs:string
     * - maxLength: 128
     * - maxOccurs: 999
     * - minLength: 1
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $ServiceType = null;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: The carrier whose paid seat optional services is to be returned by uAPI. | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $Carrier = null;
    /**
     * The CurrencyType
     * Meta information extracted from the WSDL
     * - documentation: Currency code override. Providers: ACH, 1G, 1V, 1P | 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * @var string|null
     */
    public ?string $CurrencyType = null;
    /**
     * Constructor method for OfferAvailabilityModifiers
     * @uses OfferAvailabilityModifiers::setServiceType()
     * @uses OfferAvailabilityModifiers::setCarrier()
     * @uses OfferAvailabilityModifiers::setCurrencyType()
     * @param string[] $serviceType
     * @param string[] $carrier
     * @param string $currencyType
     */
    public function __construct(?array $serviceType = null, ?array $carrier = null, ?string $currencyType = null)
    {
        $this
            ->setServiceType($serviceType)
            ->setCarrier($carrier)
            ->setCurrencyType($currencyType);
    }
    /**
     * Get ServiceType value
     * @return string[]
     */
    public function getServiceType(): ?array
    {
        return $this->ServiceType;
    }
    /**
     * Set ServiceType value
     * @param string[] $serviceType
     * @return \Travelport\Air\StructType\OfferAvailabilityModifiers
     */
    public function setServiceType(?array $serviceType = null): self
    {
        $this->ServiceType = $serviceType;
        
        return $this;
    }
    /**
     * Add item to ServiceType value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Air\StructType\OfferAvailabilityModifiers
     */
    public function addToServiceType(string $item): self
    {
        $this->ServiceType[] = $item;
        
        return $this;
    }
    /**
     * Get Carrier value
     * @return string[]
     */
    public function getCarrier(): ?array
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @param string[] $carrier
     * @return \Travelport\Air\StructType\OfferAvailabilityModifiers
     */
    public function setCarrier(?array $carrier = null): self
    {
        $this->Carrier = $carrier;
        
        return $this;
    }
    /**
     * Add item to Carrier value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Air\StructType\OfferAvailabilityModifiers
     */
    public function addToCarrier(string $item): self
    {
        $this->Carrier[] = $item;
        
        return $this;
    }
    /**
     * Get CurrencyType value
     * @return string|null
     */
    public function getCurrencyType(): ?string
    {
        return $this->CurrencyType;
    }
    /**
     * Set CurrencyType value
     * @param string $currencyType
     * @return \Travelport\Air\StructType\OfferAvailabilityModifiers
     */
    public function setCurrencyType(?string $currencyType = null): self
    {
        $this->CurrencyType = $currencyType;
        
        return $this;
    }
}
