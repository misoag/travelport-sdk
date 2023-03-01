<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
     * @var \Travelport\Hotel\StructType\BedTypes[]
     */
    public ?array $BedTypes = null;
    /**
     * The MealPlans
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\MealPlans|null
     */
    public ?\Travelport\Hotel\StructType\MealPlans $MealPlans = null;
    /**
     * The RoomView
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: RoomView
     * @var \Travelport\Hotel\StructType\RoomView|null
     */
    public ?\Travelport\Hotel\StructType\RoomView $RoomView = null;
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
     * @param \Travelport\Hotel\StructType\BedTypes[] $bedTypes
     * @param \Travelport\Hotel\StructType\MealPlans $mealPlans
     * @param \Travelport\Hotel\StructType\RoomView $roomView
     * @param string $smokingRoomIndicator
     */
    public function __construct(?array $bedTypes = null, ?\Travelport\Hotel\StructType\MealPlans $mealPlans = null, ?\Travelport\Hotel\StructType\RoomView $roomView = null, ?string $smokingRoomIndicator = null)
    {
        $this
            ->setBedTypes($bedTypes)
            ->setMealPlans($mealPlans)
            ->setRoomView($roomView)
            ->setSmokingRoomIndicator($smokingRoomIndicator);
    }
    /**
     * Get BedTypes value
     * @return \Travelport\Hotel\StructType\BedTypes[]
     */
    public function getBedTypes(): ?array
    {
        return $this->BedTypes;
    }
    /**
     * Set BedTypes value
     * @param \Travelport\Hotel\StructType\BedTypes[] $bedTypes
     * @return \Travelport\Hotel\StructType\Inclusions
     */
    public function setBedTypes(?array $bedTypes = null): self
    {
        $this->BedTypes = $bedTypes;
        
        return $this;
    }
    /**
     * Add item to BedTypes value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\BedTypes $item
     * @return \Travelport\Hotel\StructType\Inclusions
     */
    public function addToBedTypes(\Travelport\Hotel\StructType\BedTypes $item): self
    {
        $this->BedTypes[] = $item;
        
        return $this;
    }
    /**
     * Get MealPlans value
     * @return \Travelport\Hotel\StructType\MealPlans|null
     */
    public function getMealPlans(): ?\Travelport\Hotel\StructType\MealPlans
    {
        return $this->MealPlans;
    }
    /**
     * Set MealPlans value
     * @param \Travelport\Hotel\StructType\MealPlans $mealPlans
     * @return \Travelport\Hotel\StructType\Inclusions
     */
    public function setMealPlans(?\Travelport\Hotel\StructType\MealPlans $mealPlans = null): self
    {
        $this->MealPlans = $mealPlans;
        
        return $this;
    }
    /**
     * Get RoomView value
     * @return \Travelport\Hotel\StructType\RoomView|null
     */
    public function getRoomView(): ?\Travelport\Hotel\StructType\RoomView
    {
        return $this->RoomView;
    }
    /**
     * Set RoomView value
     * @param \Travelport\Hotel\StructType\RoomView $roomView
     * @return \Travelport\Hotel\StructType\Inclusions
     */
    public function setRoomView(?\Travelport\Hotel\StructType\RoomView $roomView = null): self
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
     * @return \Travelport\Hotel\StructType\Inclusions
     */
    public function setSmokingRoomIndicator(?string $smokingRoomIndicator = null): self
    {
        $this->SmokingRoomIndicator = $smokingRoomIndicator;
        
        return $this;
    }
}
