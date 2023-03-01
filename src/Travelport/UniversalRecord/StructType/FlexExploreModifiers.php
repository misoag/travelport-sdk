<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlexExploreModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the container for a set of modifiers which allow the user to perform a special kind of low fare search, depicted as flex explore, based on different parameters like Area, Zone, Country, State, Specific locations, Distance
 * around the actual destination of the itinerary. Applicable for providers 1G,1V,1P
 * @subpackage Structs
 */
class FlexExploreModifiers extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Type;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: List of specific destinations for performing flex explore. Applicable only with flex explore type - Destination | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - maxOccurs: 59
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string[]
     */
    public ?array $Destination = null;
    /**
     * The Radius
     * Meta information extracted from the WSDL
     * - documentation: Radius around the destination of actual itinerary in which the search would be performed. Supported only with types - DistanceInMiles and DistanceInKilometers
     * - use: optional
     * @var int|null
     */
    public ?int $Radius = null;
    /**
     * The GroupName
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 15
     * @var string|null
     */
    public ?string $GroupName = null;
    /**
     * Constructor method for FlexExploreModifiers
     * @uses FlexExploreModifiers::setType()
     * @uses FlexExploreModifiers::setDestination()
     * @uses FlexExploreModifiers::setRadius()
     * @uses FlexExploreModifiers::setGroupName()
     * @param string $type
     * @param string[] $destination
     * @param int $radius
     * @param string $groupName
     */
    public function __construct(string $type, ?array $destination = null, ?int $radius = null, ?string $groupName = null)
    {
        $this
            ->setType($type)
            ->setDestination($destination)
            ->setRadius($radius)
            ->setGroupName($groupName);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\FlexExploreModifiers
     */
    public function setType(string $type): self
    {
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Destination value
     * @return string[]
     */
    public function getDestination(): ?array
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param string[] $destination
     * @return \Travelport\UniversalRecord\StructType\FlexExploreModifiers
     */
    public function setDestination(?array $destination = null): self
    {
        $this->Destination = $destination;
        
        return $this;
    }
    /**
     * Add item to Destination value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\FlexExploreModifiers
     */
    public function addToDestination(string $item): self
    {
        $this->Destination[] = $item;
        
        return $this;
    }
    /**
     * Get Radius value
     * @return int|null
     */
    public function getRadius(): ?int
    {
        return $this->Radius;
    }
    /**
     * Set Radius value
     * @param int $radius
     * @return \Travelport\UniversalRecord\StructType\FlexExploreModifiers
     */
    public function setRadius(?int $radius = null): self
    {
        $this->Radius = $radius;
        
        return $this;
    }
    /**
     * Get GroupName value
     * @return string|null
     */
    public function getGroupName(): ?string
    {
        return $this->GroupName;
    }
    /**
     * Set GroupName value
     * @param string $groupName
     * @return \Travelport\UniversalRecord\StructType\FlexExploreModifiers
     */
    public function setGroupName(?string $groupName = null): self
    {
        $this->GroupName = $groupName;
        
        return $this;
    }
}
