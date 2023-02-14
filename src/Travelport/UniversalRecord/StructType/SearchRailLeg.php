<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchRailLeg StructType
 * Meta information extracted from the WSDL
 * - documentation: Availability can be searched either on departure time or on arrival tome, but not on both. | Holds Origin, Destination, and Departure times for a Rail Leg to search for.
 * @subpackage Structs
 */
class SearchRailLeg extends AbstractStructBase
{
    /**
     * The SearchOrigin
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * @var \Travelport\UniversalRecord\StructType\TypeSearchLocation[]
     */
    protected ?array $SearchOrigin = null;
    /**
     * The SearchDestination
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * @var \Travelport\UniversalRecord\StructType\TypeSearchLocation[]
     */
    protected ?array $SearchDestination = null;
    /**
     * The RailSegmentList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: RailSegmentList
     * @var \Travelport\UniversalRecord\StructType\RailSegmentList|null
     */
    protected ?\Travelport\UniversalRecord\StructType\RailSegmentList $RailSegmentList = null;
    /**
     * The SearchDepTime
     * Meta information extracted from the WSDL
     * - choice: SearchDepTime | SearchArvTime
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * @var \Travelport\UniversalRecord\StructType\TypeFlexibleTimeSpec[]
     */
    protected ?array $SearchDepTime = null;
    /**
     * The SearchArvTime
     * Meta information extracted from the WSDL
     * - choice: SearchDepTime | SearchArvTime
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * @var \Travelport\UniversalRecord\StructType\TypeTimeSpec[]
     */
    protected ?array $SearchArvTime = null;
    /**
     * The RailLegModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: RailLegModifiers
     * @var \Travelport\UniversalRecord\StructType\RailLegModifiers|null
     */
    protected ?\Travelport\UniversalRecord\StructType\RailLegModifiers $RailLegModifiers = null;
    /**
     * Constructor method for SearchRailLeg
     * @uses SearchRailLeg::setSearchOrigin()
     * @uses SearchRailLeg::setSearchDestination()
     * @uses SearchRailLeg::setRailSegmentList()
     * @uses SearchRailLeg::setSearchDepTime()
     * @uses SearchRailLeg::setSearchArvTime()
     * @uses SearchRailLeg::setRailLegModifiers()
     * @param \Travelport\UniversalRecord\StructType\TypeSearchLocation[] $searchOrigin
     * @param \Travelport\UniversalRecord\StructType\TypeSearchLocation[] $searchDestination
     * @param \Travelport\UniversalRecord\StructType\RailSegmentList $railSegmentList
     * @param \Travelport\UniversalRecord\StructType\TypeFlexibleTimeSpec[] $searchDepTime
     * @param \Travelport\UniversalRecord\StructType\TypeTimeSpec[] $searchArvTime
     * @param \Travelport\UniversalRecord\StructType\RailLegModifiers $railLegModifiers
     */
    public function __construct(?array $searchOrigin = null, ?array $searchDestination = null, ?\Travelport\UniversalRecord\StructType\RailSegmentList $railSegmentList = null, ?array $searchDepTime = null, ?array $searchArvTime = null, ?\Travelport\UniversalRecord\StructType\RailLegModifiers $railLegModifiers = null)
    {
        $this
            ->setSearchOrigin($searchOrigin)
            ->setSearchDestination($searchDestination)
            ->setRailSegmentList($railSegmentList)
            ->setSearchDepTime($searchDepTime)
            ->setSearchArvTime($searchArvTime)
            ->setRailLegModifiers($railLegModifiers);
    }
    /**
     * Get SearchOrigin value
     * @return \Travelport\UniversalRecord\StructType\TypeSearchLocation[]
     */
    public function getSearchOrigin(): ?array
    {
        return $this->SearchOrigin;
    }
    /**
     * This method is responsible for validating the values passed to the setSearchOrigin method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchOrigin method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSearchOriginForArrayConstraintsFromSetSearchOrigin(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchRailLegSearchOriginItem) {
            // validation for constraint: itemType
            if (!$searchRailLegSearchOriginItem instanceof \Travelport\UniversalRecord\StructType\TypeSearchLocation) {
                $invalidValues[] = is_object($searchRailLegSearchOriginItem) ? get_class($searchRailLegSearchOriginItem) : sprintf('%s(%s)', gettype($searchRailLegSearchOriginItem), var_export($searchRailLegSearchOriginItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SearchOrigin property can only contain items of type \Travelport\UniversalRecord\StructType\TypeSearchLocation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SearchOrigin value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSearchLocation[] $searchOrigin
     * @return \Travelport\UniversalRecord\StructType\SearchRailLeg
     */
    public function setSearchOrigin(?array $searchOrigin = null): self
    {
        // validation for constraint: array
        if ('' !== ($searchOriginArrayErrorMessage = self::validateSearchOriginForArrayConstraintsFromSetSearchOrigin($searchOrigin))) {
            throw new InvalidArgumentException($searchOriginArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($searchOrigin) && count($searchOrigin) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($searchOrigin)), __LINE__);
        }
        $this->SearchOrigin = $searchOrigin;
        
        return $this;
    }
    /**
     * Add item to SearchOrigin value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSearchLocation $item
     * @return \Travelport\UniversalRecord\StructType\SearchRailLeg
     */
    public function addToSearchOrigin(\Travelport\UniversalRecord\StructType\TypeSearchLocation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeSearchLocation) {
            throw new InvalidArgumentException(sprintf('The SearchOrigin property can only contain items of type \Travelport\UniversalRecord\StructType\TypeSearchLocation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SearchOrigin) && count($this->SearchOrigin) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SearchOrigin)), __LINE__);
        }
        $this->SearchOrigin[] = $item;
        
        return $this;
    }
    /**
     * Get SearchDestination value
     * @return \Travelport\UniversalRecord\StructType\TypeSearchLocation[]
     */
    public function getSearchDestination(): ?array
    {
        return $this->SearchDestination;
    }
    /**
     * This method is responsible for validating the values passed to the setSearchDestination method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchDestination method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSearchDestinationForArrayConstraintsFromSetSearchDestination(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchRailLegSearchDestinationItem) {
            // validation for constraint: itemType
            if (!$searchRailLegSearchDestinationItem instanceof \Travelport\UniversalRecord\StructType\TypeSearchLocation) {
                $invalidValues[] = is_object($searchRailLegSearchDestinationItem) ? get_class($searchRailLegSearchDestinationItem) : sprintf('%s(%s)', gettype($searchRailLegSearchDestinationItem), var_export($searchRailLegSearchDestinationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SearchDestination property can only contain items of type \Travelport\UniversalRecord\StructType\TypeSearchLocation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SearchDestination value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSearchLocation[] $searchDestination
     * @return \Travelport\UniversalRecord\StructType\SearchRailLeg
     */
    public function setSearchDestination(?array $searchDestination = null): self
    {
        // validation for constraint: array
        if ('' !== ($searchDestinationArrayErrorMessage = self::validateSearchDestinationForArrayConstraintsFromSetSearchDestination($searchDestination))) {
            throw new InvalidArgumentException($searchDestinationArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($searchDestination) && count($searchDestination) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($searchDestination)), __LINE__);
        }
        $this->SearchDestination = $searchDestination;
        
        return $this;
    }
    /**
     * Add item to SearchDestination value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSearchLocation $item
     * @return \Travelport\UniversalRecord\StructType\SearchRailLeg
     */
    public function addToSearchDestination(\Travelport\UniversalRecord\StructType\TypeSearchLocation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeSearchLocation) {
            throw new InvalidArgumentException(sprintf('The SearchDestination property can only contain items of type \Travelport\UniversalRecord\StructType\TypeSearchLocation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SearchDestination) && count($this->SearchDestination) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SearchDestination)), __LINE__);
        }
        $this->SearchDestination[] = $item;
        
        return $this;
    }
    /**
     * Get RailSegmentList value
     * @return \Travelport\UniversalRecord\StructType\RailSegmentList|null
     */
    public function getRailSegmentList(): ?\Travelport\UniversalRecord\StructType\RailSegmentList
    {
        return $this->RailSegmentList;
    }
    /**
     * Set RailSegmentList value
     * @param \Travelport\UniversalRecord\StructType\RailSegmentList $railSegmentList
     * @return \Travelport\UniversalRecord\StructType\SearchRailLeg
     */
    public function setRailSegmentList(?\Travelport\UniversalRecord\StructType\RailSegmentList $railSegmentList = null): self
    {
        $this->RailSegmentList = $railSegmentList;
        
        return $this;
    }
    /**
     * Get SearchDepTime value
     * @return \Travelport\UniversalRecord\StructType\TypeFlexibleTimeSpec[]
     */
    public function getSearchDepTime(): ?array
    {
        return isset($this->SearchDepTime) ? $this->SearchDepTime : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSearchDepTime method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchDepTime method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSearchDepTimeForArrayConstraintsFromSetSearchDepTime(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchRailLegSearchDepTimeItem) {
            // validation for constraint: itemType
            if (!$searchRailLegSearchDepTimeItem instanceof \Travelport\UniversalRecord\StructType\TypeFlexibleTimeSpec) {
                $invalidValues[] = is_object($searchRailLegSearchDepTimeItem) ? get_class($searchRailLegSearchDepTimeItem) : sprintf('%s(%s)', gettype($searchRailLegSearchDepTimeItem), var_export($searchRailLegSearchDepTimeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SearchDepTime property can only contain items of type \Travelport\UniversalRecord\StructType\TypeFlexibleTimeSpec, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setSearchDepTime method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchDepTime method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSearchDepTimeForChoiceConstraintsFromSetSearchDepTime($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'SearchArvTime',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property SearchDepTime can\'t be set as the property %s is already set. Only one property must be set among these properties: SearchDepTime, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set SearchDepTime value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeFlexibleTimeSpec[] $searchDepTime
     * @return \Travelport\UniversalRecord\StructType\SearchRailLeg
     */
    public function setSearchDepTime(?array $searchDepTime = null): self
    {
        // validation for constraint: array
        if ('' !== ($searchDepTimeArrayErrorMessage = self::validateSearchDepTimeForArrayConstraintsFromSetSearchDepTime($searchDepTime))) {
            throw new InvalidArgumentException($searchDepTimeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(SearchDepTime, SearchArvTime)
        if ('' !== ($searchDepTimeChoiceErrorMessage = self::validateSearchDepTimeForChoiceConstraintsFromSetSearchDepTime($searchDepTime))) {
            throw new InvalidArgumentException($searchDepTimeChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($searchDepTime) && count($searchDepTime) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($searchDepTime)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($searchDepTime) && count($searchDepTime) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($searchDepTime)), __LINE__);
        }
        if (is_null($searchDepTime) || (is_array($searchDepTime) && empty($searchDepTime))) {
            unset($this->SearchDepTime);
        } else {
            $this->SearchDepTime = $searchDepTime;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToSearchDepTime method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToSearchDepTime method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToSearchDepTime($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'SearchArvTime',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property SearchDepTime can\'t be set as the property %s is already set. Only one property must be set among these properties: SearchDepTime, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to SearchDepTime value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeFlexibleTimeSpec $item
     * @return \Travelport\UniversalRecord\StructType\SearchRailLeg
     */
    public function addToSearchDepTime(\Travelport\UniversalRecord\StructType\TypeFlexibleTimeSpec $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeFlexibleTimeSpec) {
            throw new InvalidArgumentException(sprintf('The SearchDepTime property can only contain items of type \Travelport\UniversalRecord\StructType\TypeFlexibleTimeSpec, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(SearchDepTime, SearchArvTime)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToSearchDepTime($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->SearchDepTime) && count($this->SearchDepTime) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->SearchDepTime)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SearchDepTime) && count($this->SearchDepTime) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SearchDepTime)), __LINE__);
        }
        $this->SearchDepTime[] = $item;
        
        return $this;
    }
    /**
     * Get SearchArvTime value
     * @return \Travelport\UniversalRecord\StructType\TypeTimeSpec[]
     */
    public function getSearchArvTime(): ?array
    {
        return isset($this->SearchArvTime) ? $this->SearchArvTime : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSearchArvTime method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchArvTime method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSearchArvTimeForArrayConstraintsFromSetSearchArvTime(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchRailLegSearchArvTimeItem) {
            // validation for constraint: itemType
            if (!$searchRailLegSearchArvTimeItem instanceof \Travelport\UniversalRecord\StructType\TypeTimeSpec) {
                $invalidValues[] = is_object($searchRailLegSearchArvTimeItem) ? get_class($searchRailLegSearchArvTimeItem) : sprintf('%s(%s)', gettype($searchRailLegSearchArvTimeItem), var_export($searchRailLegSearchArvTimeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SearchArvTime property can only contain items of type \Travelport\UniversalRecord\StructType\TypeTimeSpec, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setSearchArvTime method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchArvTime method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSearchArvTimeForChoiceConstraintsFromSetSearchArvTime($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'SearchDepTime',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property SearchArvTime can\'t be set as the property %s is already set. Only one property must be set among these properties: SearchArvTime, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set SearchArvTime value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeTimeSpec[] $searchArvTime
     * @return \Travelport\UniversalRecord\StructType\SearchRailLeg
     */
    public function setSearchArvTime(?array $searchArvTime = null): self
    {
        // validation for constraint: array
        if ('' !== ($searchArvTimeArrayErrorMessage = self::validateSearchArvTimeForArrayConstraintsFromSetSearchArvTime($searchArvTime))) {
            throw new InvalidArgumentException($searchArvTimeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(SearchDepTime, SearchArvTime)
        if ('' !== ($searchArvTimeChoiceErrorMessage = self::validateSearchArvTimeForChoiceConstraintsFromSetSearchArvTime($searchArvTime))) {
            throw new InvalidArgumentException($searchArvTimeChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($searchArvTime) && count($searchArvTime) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($searchArvTime)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($searchArvTime) && count($searchArvTime) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($searchArvTime)), __LINE__);
        }
        if (is_null($searchArvTime) || (is_array($searchArvTime) && empty($searchArvTime))) {
            unset($this->SearchArvTime);
        } else {
            $this->SearchArvTime = $searchArvTime;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToSearchArvTime method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToSearchArvTime method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToSearchArvTime($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'SearchDepTime',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property SearchArvTime can\'t be set as the property %s is already set. Only one property must be set among these properties: SearchArvTime, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to SearchArvTime value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeTimeSpec $item
     * @return \Travelport\UniversalRecord\StructType\SearchRailLeg
     */
    public function addToSearchArvTime(\Travelport\UniversalRecord\StructType\TypeTimeSpec $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeTimeSpec) {
            throw new InvalidArgumentException(sprintf('The SearchArvTime property can only contain items of type \Travelport\UniversalRecord\StructType\TypeTimeSpec, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(SearchDepTime, SearchArvTime)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToSearchArvTime($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->SearchArvTime) && count($this->SearchArvTime) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->SearchArvTime)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SearchArvTime) && count($this->SearchArvTime) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SearchArvTime)), __LINE__);
        }
        $this->SearchArvTime[] = $item;
        
        return $this;
    }
    /**
     * Get RailLegModifiers value
     * @return \Travelport\UniversalRecord\StructType\RailLegModifiers|null
     */
    public function getRailLegModifiers(): ?\Travelport\UniversalRecord\StructType\RailLegModifiers
    {
        return $this->RailLegModifiers;
    }
    /**
     * Set RailLegModifiers value
     * @param \Travelport\UniversalRecord\StructType\RailLegModifiers $railLegModifiers
     * @return \Travelport\UniversalRecord\StructType\SearchRailLeg
     */
    public function setRailLegModifiers(?\Travelport\UniversalRecord\StructType\RailLegModifiers $railLegModifiers = null): self
    {
        $this->RailLegModifiers = $railLegModifiers;
        
        return $this;
    }
}
