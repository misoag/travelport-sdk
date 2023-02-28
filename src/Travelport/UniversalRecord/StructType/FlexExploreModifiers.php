<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $Type;
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
    protected ?array $Destination = null;
    /**
     * The Radius
     * Meta information extracted from the WSDL
     * - documentation: Radius around the destination of actual itinerary in which the search would be performed. Supported only with types - DistanceInMiles and DistanceInKilometers
     * - use: optional
     * @var int|null
     */
    protected ?int $Radius = null;
    /**
     * The GroupName
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 15
     * @var string|null
     */
    protected ?string $GroupName = null;
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
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setDestination method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDestination method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDestinationForArrayConstraintFromSetDestination(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $flexExploreModifiersDestinationItem) {
            // validation for constraint: itemType
            if (!is_string($flexExploreModifiersDestinationItem)) {
                $invalidValues[] = is_object($flexExploreModifiersDestinationItem) ? get_class($flexExploreModifiersDestinationItem) : sprintf('%s(%s)', gettype($flexExploreModifiersDestinationItem), var_export($flexExploreModifiersDestinationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Destination property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDestination method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDestination method
     * This has to validate that the items contained by the array match the length constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDestinationForLengthConstraintFromSetDestination(?array $values = null): string
    {
        $message = '';
        $invalidValues = [];
        foreach (($values ?? []) as $flexExploreModifiersDestinationItem) {
            // validation for constraint: length(3)
            if (mb_strlen((string) $flexExploreModifiersDestinationItem) !== 3) {
                $invalidValues[] = var_export($flexExploreModifiersDestinationItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be equal to 3', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Destination value
     * @throws InvalidArgumentException
     * @param string[] $destination
     * @return \Travelport\UniversalRecord\StructType\FlexExploreModifiers
     */
    public function setDestination(?array $destination = null): self
    {
        // validation for constraint: array
        if ('' !== ($destinationArrayErrorMessage = self::validateDestinationForArrayConstraintFromSetDestination($destination))) {
            throw new InvalidArgumentException($destinationArrayErrorMessage, __LINE__);
        }
        // validation for constraint: length(3)
        if ('' !== ($destinationLengthErrorMessage = self::validateDestinationForLengthConstraintFromSetDestination($destination))) {
            throw new InvalidArgumentException($destinationLengthErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(59)
        if (is_array($destination) && count($destination) > 59) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 59', count($destination)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Destination property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: length(3)
        if (mb_strlen((string) $item) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $item)), __LINE__);
        }
        // validation for constraint: maxOccurs(59)
        if (is_array($this->Destination) && count($this->Destination) >= 59) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 59', count($this->Destination)), __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($radius) && !(is_int($radius) || ctype_digit($radius))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($radius, true), gettype($radius)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($groupName) && !is_string($groupName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupName, true), gettype($groupName)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($groupName) && mb_strlen((string) $groupName) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen((string) $groupName)), __LINE__);
        }
        $this->GroupName = $groupName;
        
        return $this;
    }
}
