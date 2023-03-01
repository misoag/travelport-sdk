<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?array $BedTypes = null;
    /**
     * The MealPlans
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\MealPlans|null
     */
    public ?\Travelport\UniversalRecord\StructType\MealPlans $MealPlans = null;
    /**
     * The RoomView
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: RoomView
     * @var \Travelport\UniversalRecord\StructType\RoomView|null
     */
    public ?\Travelport\UniversalRecord\StructType\RoomView $RoomView = null;
    /**
     * The SmokingRoomIndicator
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the room is designated as nonsmoking or smoking. true = Smoking false = NonSmoking unknown = Information is not returned by the hotel supplier (chain or property).
     * @var string|null
     */
    public ?string $SmokingRoomIndicator = null;
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
     * Set BedTypes value
     * @param \Travelport\UniversalRecord\StructType\BedTypes[] $bedTypes
     * @return \Travelport\UniversalRecord\StructType\Inclusions
     */
    public function setBedTypes(?array $bedTypes = null): self
    {
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
     * @param string $smokingRoomIndicator
     * @return \Travelport\UniversalRecord\StructType\Inclusions
     */
    public function setSmokingRoomIndicator(?string $smokingRoomIndicator = null): self
    {
        $this->SmokingRoomIndicator = $smokingRoomIndicator;
        
        return $this;
    }
}
