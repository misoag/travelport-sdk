<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Inclusions StructType
 * Meta information extracted from the WSDL
 * - documentation: The view from the hotel room. | Additional items included in the hotel rate plan.
 * @subpackage Structs
 */
class Inclusions extends AbstractStructBase
{
    /**
     * The BedTypes
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\BedTypes[]
     */
    protected ?array $BedTypes = null;
    /**
     * The MealPlans
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\MealPlans|null
     */
    protected ?\Travelport\UniversalRecord\StructType\MealPlans $MealPlans = null;
    /**
     * The RoomView
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: RoomView
     * @var \Travelport\UniversalRecord\StructType\RoomView|null
     */
    protected ?\Travelport\UniversalRecord\StructType\RoomView $RoomView = null;
    /**
     * The SmokingRoomIndicator
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the room is designated as nonsmoking or smoking. true = Smoking false = NonSmoking unknown = Information is not returned by the hotel supplier (chain or property).
     * @var string|null
     */
    protected ?string $SmokingRoomIndicator = null;
    /**
     * Constructor method for Inclusions
     * @uses Inclusions::setBedTypes()
     * @uses Inclusions::setMealPlans()
     * @uses Inclusions::setRoomView()
     * @uses Inclusions::setSmokingRoomIndicator()
     * @param \Travelport\UniversalRecord\StructType\BedTypes[] $bedTypes
     * @param \Travelport\UniversalRecord\StructType\MealPlans $mealPlans
     * @param \Travelport\UniversalRecord\StructType\RoomView $roomView
     * @param string $smokingRoomIndicator
     */
    public function __construct(?array $bedTypes = null, ?\Travelport\UniversalRecord\StructType\MealPlans $mealPlans = null, ?\Travelport\UniversalRecord\StructType\RoomView $roomView = null, ?string $smokingRoomIndicator = null)
    {
        $this
            ->setBedTypes($bedTypes)
            ->setMealPlans($mealPlans)
            ->setRoomView($roomView)
            ->setSmokingRoomIndicator($smokingRoomIndicator);
    }
    /**
     * Get BedTypes value
     * @return \Travelport\UniversalRecord\StructType\BedTypes[]
     */
    public function getBedTypes(): ?array
    {
        return $this->BedTypes;
    }
    /**
     * This method is responsible for validating the values passed to the setBedTypes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBedTypes method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBedTypesForArrayConstraintsFromSetBedTypes(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $inclusionsBedTypesItem) {
            // validation for constraint: itemType
            if (!$inclusionsBedTypesItem instanceof \Travelport\UniversalRecord\StructType\BedTypes) {
                $invalidValues[] = is_object($inclusionsBedTypesItem) ? get_class($inclusionsBedTypesItem) : sprintf('%s(%s)', gettype($inclusionsBedTypesItem), var_export($inclusionsBedTypesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BedTypes property can only contain items of type \Travelport\UniversalRecord\StructType\BedTypes, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BedTypes value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BedTypes[] $bedTypes
     * @return \Travelport\UniversalRecord\StructType\Inclusions
     */
    public function setBedTypes(?array $bedTypes = null): self
    {
        // validation for constraint: array
        if ('' !== ($bedTypesArrayErrorMessage = self::validateBedTypesForArrayConstraintsFromSetBedTypes($bedTypes))) {
            throw new InvalidArgumentException($bedTypesArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($bedTypes) && count($bedTypes) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($bedTypes)), __LINE__);
        }
        $this->BedTypes = $bedTypes;
        
        return $this;
    }
    /**
     * Add item to BedTypes value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BedTypes $item
     * @return \Travelport\UniversalRecord\StructType\Inclusions
     */
    public function addToBedTypes(\Travelport\UniversalRecord\StructType\BedTypes $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\BedTypes) {
            throw new InvalidArgumentException(sprintf('The BedTypes property can only contain items of type \Travelport\UniversalRecord\StructType\BedTypes, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->BedTypes) && count($this->BedTypes) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->BedTypes)), __LINE__);
        }
        $this->BedTypes[] = $item;
        
        return $this;
    }
    /**
     * Get MealPlans value
     * @return \Travelport\UniversalRecord\StructType\MealPlans|null
     */
    public function getMealPlans(): ?\Travelport\UniversalRecord\StructType\MealPlans
    {
        return $this->MealPlans;
    }
    /**
     * Set MealPlans value
     * @param \Travelport\UniversalRecord\StructType\MealPlans $mealPlans
     * @return \Travelport\UniversalRecord\StructType\Inclusions
     */
    public function setMealPlans(?\Travelport\UniversalRecord\StructType\MealPlans $mealPlans = null): self
    {
        $this->MealPlans = $mealPlans;
        
        return $this;
    }
    /**
     * Get RoomView value
     * @return \Travelport\UniversalRecord\StructType\RoomView|null
     */
    public function getRoomView(): ?\Travelport\UniversalRecord\StructType\RoomView
    {
        return $this->RoomView;
    }
    /**
     * Set RoomView value
     * @param \Travelport\UniversalRecord\StructType\RoomView $roomView
     * @return \Travelport\UniversalRecord\StructType\Inclusions
     */
    public function setRoomView(?\Travelport\UniversalRecord\StructType\RoomView $roomView = null): self
    {
        $this->RoomView = $roomView;
        
        return $this;
    }
    /**
     * Get SmokingRoomIndicator value
     * @return string|null
     */
    public function getSmokingRoomIndicator(): ?string
    {
        return $this->SmokingRoomIndicator;
    }
    /**
     * Set SmokingRoomIndicator value
     * @uses \Travelport\UniversalRecord\EnumType\TypeTrinary::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeTrinary::getValidValues()
     * @throws InvalidArgumentException
     * @param string $smokingRoomIndicator
     * @return \Travelport\UniversalRecord\StructType\Inclusions
     */
    public function setSmokingRoomIndicator(?string $smokingRoomIndicator = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeTrinary::valueIsValid($smokingRoomIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeTrinary', is_array($smokingRoomIndicator) ? implode(', ', $smokingRoomIndicator) : var_export($smokingRoomIndicator, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeTrinary::getValidValues())), __LINE__);
        }
        $this->SmokingRoomIndicator = $smokingRoomIndicator;
        
        return $this;
    }
}
