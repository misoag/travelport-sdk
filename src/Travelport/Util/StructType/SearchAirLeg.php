<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchAirLeg StructType
 * Meta information extracted from the WSDL
 * - documentation: Search version of AirLeg used to specify search criteria
 * @subpackage Structs
 */
class SearchAirLeg extends AbstractStructBase
{
    /**
     * The SearchOrigin
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * @var \Travelport\Util\StructType\TypeSearchLocation[]
     */
    protected ?array $SearchOrigin = null;
    /**
     * The SearchDestination
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeSearchLocation[]
     */
    protected ?array $SearchDestination = null;
    /**
     * The SearchDepTime
     * Meta information extracted from the WSDL
     * - choice: SearchDepTime | SearchArvTime
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * @var \Travelport\Util\StructType\TypeFlexibleTimeSpec[]
     */
    protected ?array $SearchDepTime = null;
    /**
     * The SearchArvTime
     * Meta information extracted from the WSDL
     * - documentation: Specifies the preferred time within the time range. For 1G, 1V, 1P, it is supported for AvailabilitySearchReq (TimeRange must also be specified) and not supported for LowFareSearchReq. ACH does not support search by arrival time.
     * - choice: SearchDepTime | SearchArvTime
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * @var \Travelport\Util\StructType\TypeTimeSpec[]
     */
    protected ?array $SearchArvTime = null;
    /**
     * The AirLegModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AirLegModifiers
     * @var \Travelport\Util\StructType\AirLegModifiers|null
     */
    protected ?\Travelport\Util\StructType\AirLegModifiers $AirLegModifiers = null;
    /**
     * Constructor method for SearchAirLeg
     * @uses SearchAirLeg::setSearchOrigin()
     * @uses SearchAirLeg::setSearchDestination()
     * @uses SearchAirLeg::setSearchDepTime()
     * @uses SearchAirLeg::setSearchArvTime()
     * @uses SearchAirLeg::setAirLegModifiers()
     * @param \Travelport\Util\StructType\TypeSearchLocation[] $searchOrigin
     * @param \Travelport\Util\StructType\TypeSearchLocation[] $searchDestination
     * @param \Travelport\Util\StructType\TypeFlexibleTimeSpec[] $searchDepTime
     * @param \Travelport\Util\StructType\TypeTimeSpec[] $searchArvTime
     * @param \Travelport\Util\StructType\AirLegModifiers $airLegModifiers
     */
    public function __construct(?array $searchOrigin = null, ?array $searchDestination = null, ?array $searchDepTime = null, ?array $searchArvTime = null, ?\Travelport\Util\StructType\AirLegModifiers $airLegModifiers = null)
    {
        $this
            ->setSearchOrigin($searchOrigin)
            ->setSearchDestination($searchDestination)
            ->setSearchDepTime($searchDepTime)
            ->setSearchArvTime($searchArvTime)
            ->setAirLegModifiers($airLegModifiers);
    }
    /**
     * Get SearchOrigin value
     * @return \Travelport\Util\StructType\TypeSearchLocation[]
     */
    public function getSearchOrigin(): ?array
    {
        return $this->SearchOrigin;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSearchOrigin method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchOrigin method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSearchOriginForArrayConstraintFromSetSearchOrigin(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchAirLegSearchOriginItem) {
            // validation for constraint: itemType
            if (!$searchAirLegSearchOriginItem instanceof \Travelport\Util\StructType\TypeSearchLocation) {
                $invalidValues[] = is_object($searchAirLegSearchOriginItem) ? get_class($searchAirLegSearchOriginItem) : sprintf('%s(%s)', gettype($searchAirLegSearchOriginItem), var_export($searchAirLegSearchOriginItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SearchOrigin property can only contain items of type \Travelport\Util\StructType\TypeSearchLocation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SearchOrigin value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeSearchLocation[] $searchOrigin
     * @return \Travelport\Util\StructType\SearchAirLeg
     */
    public function setSearchOrigin(?array $searchOrigin = null): self
    {
        // validation for constraint: array
        if ('' !== ($searchOriginArrayErrorMessage = self::validateSearchOriginForArrayConstraintFromSetSearchOrigin($searchOrigin))) {
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
     * @param \Travelport\Util\StructType\TypeSearchLocation $item
     * @return \Travelport\Util\StructType\SearchAirLeg
     */
    public function addToSearchOrigin(\Travelport\Util\StructType\TypeSearchLocation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeSearchLocation) {
            throw new InvalidArgumentException(sprintf('The SearchOrigin property can only contain items of type \Travelport\Util\StructType\TypeSearchLocation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \Travelport\Util\StructType\TypeSearchLocation[]
     */
    public function getSearchDestination(): ?array
    {
        return $this->SearchDestination;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSearchDestination method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchDestination method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSearchDestinationForArrayConstraintFromSetSearchDestination(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchAirLegSearchDestinationItem) {
            // validation for constraint: itemType
            if (!$searchAirLegSearchDestinationItem instanceof \Travelport\Util\StructType\TypeSearchLocation) {
                $invalidValues[] = is_object($searchAirLegSearchDestinationItem) ? get_class($searchAirLegSearchDestinationItem) : sprintf('%s(%s)', gettype($searchAirLegSearchDestinationItem), var_export($searchAirLegSearchDestinationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SearchDestination property can only contain items of type \Travelport\Util\StructType\TypeSearchLocation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SearchDestination value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeSearchLocation[] $searchDestination
     * @return \Travelport\Util\StructType\SearchAirLeg
     */
    public function setSearchDestination(?array $searchDestination = null): self
    {
        // validation for constraint: array
        if ('' !== ($searchDestinationArrayErrorMessage = self::validateSearchDestinationForArrayConstraintFromSetSearchDestination($searchDestination))) {
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
     * @param \Travelport\Util\StructType\TypeSearchLocation $item
     * @return \Travelport\Util\StructType\SearchAirLeg
     */
    public function addToSearchDestination(\Travelport\Util\StructType\TypeSearchLocation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeSearchLocation) {
            throw new InvalidArgumentException(sprintf('The SearchDestination property can only contain items of type \Travelport\Util\StructType\TypeSearchLocation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SearchDestination) && count($this->SearchDestination) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SearchDestination)), __LINE__);
        }
        $this->SearchDestination[] = $item;
        
        return $this;
    }
    /**
     * Get SearchDepTime value
     * @return \Travelport\Util\StructType\TypeFlexibleTimeSpec[]|null
     */
    public function getSearchDepTime(): ?array
    {
        return $this->SearchDepTime ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSearchDepTime method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchDepTime method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSearchDepTimeForArrayConstraintFromSetSearchDepTime(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchAirLegSearchDepTimeItem) {
            // validation for constraint: itemType
            if (!$searchAirLegSearchDepTimeItem instanceof \Travelport\Util\StructType\TypeFlexibleTimeSpec) {
                $invalidValues[] = is_object($searchAirLegSearchDepTimeItem) ? get_class($searchAirLegSearchDepTimeItem) : sprintf('%s(%s)', gettype($searchAirLegSearchDepTimeItem), var_export($searchAirLegSearchDepTimeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SearchDepTime property can only contain items of type \Travelport\Util\StructType\TypeFlexibleTimeSpec, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSearchDepTime method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchDepTime method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSearchDepTimeForChoiceConstraintFromSetSearchDepTime($value): string
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
     * @param \Travelport\Util\StructType\TypeFlexibleTimeSpec[] $searchDepTime
     * @return \Travelport\Util\StructType\SearchAirLeg
     */
    public function setSearchDepTime(?array $searchDepTime = null): self
    {
        // validation for constraint: array
        if ('' !== ($searchDepTimeArrayErrorMessage = self::validateSearchDepTimeForArrayConstraintFromSetSearchDepTime($searchDepTime))) {
            throw new InvalidArgumentException($searchDepTimeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(SearchDepTime, SearchArvTime)
        if ('' !== ($searchDepTimeChoiceErrorMessage = self::validateSearchDepTimeForChoiceConstraintFromSetSearchDepTime($searchDepTime))) {
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
     * This method is responsible for validating the value(s) passed to the addToSearchDepTime method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToSearchDepTime method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToSearchDepTime($value): string
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
     * @param \Travelport\Util\StructType\TypeFlexibleTimeSpec $item
     * @return \Travelport\Util\StructType\SearchAirLeg
     */
    public function addToSearchDepTime(\Travelport\Util\StructType\TypeFlexibleTimeSpec $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeFlexibleTimeSpec) {
            throw new InvalidArgumentException(sprintf('The SearchDepTime property can only contain items of type \Travelport\Util\StructType\TypeFlexibleTimeSpec, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(SearchDepTime, SearchArvTime)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToSearchDepTime($item))) {
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
     * @return \Travelport\Util\StructType\TypeTimeSpec[]|null
     */
    public function getSearchArvTime(): ?array
    {
        return $this->SearchArvTime ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSearchArvTime method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchArvTime method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSearchArvTimeForArrayConstraintFromSetSearchArvTime(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchAirLegSearchArvTimeItem) {
            // validation for constraint: itemType
            if (!$searchAirLegSearchArvTimeItem instanceof \Travelport\Util\StructType\TypeTimeSpec) {
                $invalidValues[] = is_object($searchAirLegSearchArvTimeItem) ? get_class($searchAirLegSearchArvTimeItem) : sprintf('%s(%s)', gettype($searchAirLegSearchArvTimeItem), var_export($searchAirLegSearchArvTimeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SearchArvTime property can only contain items of type \Travelport\Util\StructType\TypeTimeSpec, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSearchArvTime method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchArvTime method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSearchArvTimeForChoiceConstraintFromSetSearchArvTime($value): string
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
     * @param \Travelport\Util\StructType\TypeTimeSpec[] $searchArvTime
     * @return \Travelport\Util\StructType\SearchAirLeg
     */
    public function setSearchArvTime(?array $searchArvTime = null): self
    {
        // validation for constraint: array
        if ('' !== ($searchArvTimeArrayErrorMessage = self::validateSearchArvTimeForArrayConstraintFromSetSearchArvTime($searchArvTime))) {
            throw new InvalidArgumentException($searchArvTimeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(SearchDepTime, SearchArvTime)
        if ('' !== ($searchArvTimeChoiceErrorMessage = self::validateSearchArvTimeForChoiceConstraintFromSetSearchArvTime($searchArvTime))) {
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
     * This method is responsible for validating the value(s) passed to the addToSearchArvTime method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToSearchArvTime method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToSearchArvTime($value): string
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
     * @param \Travelport\Util\StructType\TypeTimeSpec $item
     * @return \Travelport\Util\StructType\SearchAirLeg
     */
    public function addToSearchArvTime(\Travelport\Util\StructType\TypeTimeSpec $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeTimeSpec) {
            throw new InvalidArgumentException(sprintf('The SearchArvTime property can only contain items of type \Travelport\Util\StructType\TypeTimeSpec, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(SearchDepTime, SearchArvTime)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToSearchArvTime($item))) {
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
     * Get AirLegModifiers value
     * @return \Travelport\Util\StructType\AirLegModifiers|null
     */
    public function getAirLegModifiers(): ?\Travelport\Util\StructType\AirLegModifiers
    {
        return $this->AirLegModifiers;
    }
    /**
     * Set AirLegModifiers value
     * @param \Travelport\Util\StructType\AirLegModifiers $airLegModifiers
     * @return \Travelport\Util\StructType\SearchAirLeg
     */
    public function setAirLegModifiers(?\Travelport\Util\StructType\AirLegModifiers $airLegModifiers = null): self
    {
        $this->AirLegModifiers = $airLegModifiers;
        
        return $this;
    }
}
