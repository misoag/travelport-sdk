<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightOption StructType
 * Meta information extracted from the WSDL
 * - documentation: List of BookingInfo available for the search air leg. | List of Options available for any search air leg.
 * @subpackage Structs
 */
class FlightOption extends AbstractStructBase
{
    /**
     * The Option
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 1
     * - ref: Option
     * @var \Travelport\UniversalRecord\StructType\Option[]
     */
    public array $Option;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: The IATA location code for this origination of this entity. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    public string $Origin;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: The IATA location code for this destination of this entity. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    public string $Destination;
    /**
     * The LegRef
     * Meta information extracted from the WSDL
     * - documentation: Identifies the Leg Reference for this Flight Option. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $LegRef = null;
    /**
     * Constructor method for FlightOption
     * @uses FlightOption::setOption()
     * @uses FlightOption::setOrigin()
     * @uses FlightOption::setDestination()
     * @uses FlightOption::setLegRef()
     * @param \Travelport\UniversalRecord\StructType\Option[] $option
     * @param string $origin
     * @param string $destination
     * @param string $legRef
     */
    public function __construct(array $option, string $origin, string $destination, ?string $legRef = null)
    {
        $this
            ->setOption($option)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setLegRef($legRef);
    }
    /**
     * Get Option value
     * @return \Travelport\UniversalRecord\StructType\Option[]
     */
    public function getOption(): array
    {
        return $this->Option;
    }
    /**
     * Set Option value
     * @param \Travelport\UniversalRecord\StructType\Option[] $option
     * @return \Travelport\UniversalRecord\StructType\FlightOption
     */
    public function setOption(array $option): self
    {
        $this->Option = $option;
        
        return $this;
    }
    /**
     * Add item to Option value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Option $item
     * @return \Travelport\UniversalRecord\StructType\FlightOption
     */
    public function addToOption(\Travelport\UniversalRecord\StructType\Option $item): self
    {
        $this->Option[] = $item;
        
        return $this;
    }
    /**
     * Get Origin value
     * @return string
     */
    public function getOrigin(): string
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param string $origin
     * @return \Travelport\UniversalRecord\StructType\FlightOption
     */
    public function setOrigin(string $origin): self
    {
        $this->Origin = $origin;
        
        return $this;
    }
    /**
     * Get Destination value
     * @return string
     */
    public function getDestination(): string
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param string $destination
     * @return \Travelport\UniversalRecord\StructType\FlightOption
     */
    public function setDestination(string $destination): self
    {
        $this->Destination = $destination;
        
        return $this;
    }
    /**
     * Get LegRef value
     * @return string|null
     */
    public function getLegRef(): ?string
    {
        return $this->LegRef;
    }
    /**
     * Set LegRef value
     * @param string $legRef
     * @return \Travelport\UniversalRecord\StructType\FlightOption
     */
    public function setLegRef(?string $legRef = null): self
    {
        $this->LegRef = $legRef;
        
        return $this;
    }
}
