<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirPricingCommand StructType
 * Meta information extracted from the WSDL
 * - documentation: A containter to identify individual pricing events. A pricing result will be returned for each pricing command according to its parameters.
 * @subpackage Structs
 */
class AirPricingCommand extends AbstractStructBase
{
    /**
     * The AirPricingModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AirPricingModifiers
     * @var \Travelport\Air\StructType\AirPricingModifiers|null
     */
    public ?\Travelport\Air\StructType\AirPricingModifiers $AirPricingModifiers = null;
    /**
     * The AirSegmentPricingModifiers
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirSegmentPricingModifiers
     * @var \Travelport\Air\StructType\AirSegmentPricingModifiers[]
     */
    public ?array $AirSegmentPricingModifiers = null;
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
     * The CabinClass
     * Meta information extracted from the WSDL
     * - documentation: Specify the cabin type to price the entire itinerary in. If segment level cabin selection is required, this attribute should not be used.
     * - use: optional
     * @var string|null
     */
    public ?string $CabinClass = null;
    /**
     * Constructor method for AirPricingCommand
     * @uses AirPricingCommand::setAirPricingModifiers()
     * @uses AirPricingCommand::setAirSegmentPricingModifiers()
     * @uses AirPricingCommand::setCommandKey()
     * @uses AirPricingCommand::setCabinClass()
     * @param \Travelport\Air\StructType\AirPricingModifiers $airPricingModifiers
     * @param \Travelport\Air\StructType\AirSegmentPricingModifiers[] $airSegmentPricingModifiers
     * @param string $commandKey
     * @param string $cabinClass
     */
    public function __construct(?\Travelport\Air\StructType\AirPricingModifiers $airPricingModifiers = null, ?array $airSegmentPricingModifiers = null, ?string $commandKey = null, ?string $cabinClass = null)
    {
        $this
            ->setAirPricingModifiers($airPricingModifiers)
            ->setAirSegmentPricingModifiers($airSegmentPricingModifiers)
            ->setCommandKey($commandKey)
            ->setCabinClass($cabinClass);
    }
    /**
     * Get AirPricingModifiers value
     * @return \Travelport\Air\StructType\AirPricingModifiers|null
     */
    public function getAirPricingModifiers(): ?\Travelport\Air\StructType\AirPricingModifiers
    {
        return $this->AirPricingModifiers;
    }
    /**
     * Set AirPricingModifiers value
     * @param \Travelport\Air\StructType\AirPricingModifiers $airPricingModifiers
     * @return \Travelport\Air\StructType\AirPricingCommand
     */
    public function setAirPricingModifiers(?\Travelport\Air\StructType\AirPricingModifiers $airPricingModifiers = null): self
    {
        $this->AirPricingModifiers = $airPricingModifiers;
        
        return $this;
    }
    /**
     * Get AirSegmentPricingModifiers value
     * @return \Travelport\Air\StructType\AirSegmentPricingModifiers[]
     */
    public function getAirSegmentPricingModifiers(): ?array
    {
        return $this->AirSegmentPricingModifiers;
    }
    /**
     * Set AirSegmentPricingModifiers value
     * @param \Travelport\Air\StructType\AirSegmentPricingModifiers[] $airSegmentPricingModifiers
     * @return \Travelport\Air\StructType\AirPricingCommand
     */
    public function setAirSegmentPricingModifiers(?array $airSegmentPricingModifiers = null): self
    {
        $this->AirSegmentPricingModifiers = $airSegmentPricingModifiers;
        
        return $this;
    }
    /**
     * Add item to AirSegmentPricingModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirSegmentPricingModifiers $item
     * @return \Travelport\Air\StructType\AirPricingCommand
     */
    public function addToAirSegmentPricingModifiers(\Travelport\Air\StructType\AirSegmentPricingModifiers $item): self
    {
        $this->AirSegmentPricingModifiers[] = $item;
        
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
     * @return \Travelport\Air\StructType\AirPricingCommand
     */
    public function setCommandKey(?string $commandKey = null): self
    {
        $this->CommandKey = $commandKey;
        
        return $this;
    }
    /**
     * Get CabinClass value
     * @return string|null
     */
    public function getCabinClass(): ?string
    {
        return $this->CabinClass;
    }
    /**
     * Set CabinClass value
     * @param string $cabinClass
     * @return \Travelport\Air\StructType\AirPricingCommand
     */
    public function setCabinClass(?string $cabinClass = null): self
    {
        $this->CabinClass = $cabinClass;
        
        return $this;
    }
}
