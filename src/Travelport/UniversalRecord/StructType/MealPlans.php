<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MealPlans StructType
 * Meta information extracted from the WSDL
 * - documentation: Meal options available for the rate plan.
 * @subpackage Structs
 */
class MealPlans extends AbstractStructBase
{
    /**
     * The MealPlan
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\MealPlan[]
     */
    public ?array $MealPlan = null;
    /**
     * The Breakfast
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether a daily breakfast is included in the meal plan. true = Breakfast is included false = Breakfast is not included unknown = Information is not returned by the hotel supplier (chain or property).
     * @var string|null
     */
    public ?string $Breakfast = null;
    /**
     * The Lunch
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether a daily lunch is included in the meal plan. true = Lunch is included false = Lunch is not included unknown = Information is not returned by the hotel supplier (chain or property).
     * @var string|null
     */
    public ?string $Lunch = null;
    /**
     * The Dinner
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether a daily dinner is included in the meal plan. true = Dinner is included false = Dinner is not included unknown = Information is not returned by the hotel supplier (chain or property).
     * @var string|null
     */
    public ?string $Dinner = null;
    /**
     * Constructor method for MealPlans
     * @uses MealPlans::setMealPlan()
     * @uses MealPlans::setBreakfast()
     * @uses MealPlans::setLunch()
     * @uses MealPlans::setDinner()
     * @param \Travelport\UniversalRecord\StructType\MealPlan[] $mealPlan
     * @param string $breakfast
     * @param string $lunch
     * @param string $dinner
     */
    public function __construct(?array $mealPlan = null, ?string $breakfast = null, ?string $lunch = null, ?string $dinner = null)
    {
        $this
            ->setMealPlan($mealPlan)
            ->setBreakfast($breakfast)
            ->setLunch($lunch)
            ->setDinner($dinner);
    }
    /**
     * Get MealPlan value
     * @return \Travelport\UniversalRecord\StructType\MealPlan[]
     */
    public function getMealPlan(): ?array
    {
        return $this->MealPlan;
    }
    /**
     * Set MealPlan value
     * @param \Travelport\UniversalRecord\StructType\MealPlan[] $mealPlan
     * @return \Travelport\UniversalRecord\StructType\MealPlans
     */
    public function setMealPlan(?array $mealPlan = null): self
    {
        $this->MealPlan = $mealPlan;
        
        return $this;
    }
    /**
     * Add item to MealPlan value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\MealPlan $item
     * @return \Travelport\UniversalRecord\StructType\MealPlans
     */
    public function addToMealPlan(\Travelport\UniversalRecord\StructType\MealPlan $item): self
    {
        $this->MealPlan[] = $item;
        
        return $this;
    }
    /**
     * Get Breakfast value
     * @return string|null
     */
    public function getBreakfast(): ?string
    {
        return $this->Breakfast;
    }
    /**
     * Set Breakfast value
     * @param string $breakfast
     * @return \Travelport\UniversalRecord\StructType\MealPlans
     */
    public function setBreakfast(?string $breakfast = null): self
    {
        $this->Breakfast = $breakfast;
        
        return $this;
    }
    /**
     * Get Lunch value
     * @return string|null
     */
    public function getLunch(): ?string
    {
        return $this->Lunch;
    }
    /**
     * Set Lunch value
     * @param string $lunch
     * @return \Travelport\UniversalRecord\StructType\MealPlans
     */
    public function setLunch(?string $lunch = null): self
    {
        $this->Lunch = $lunch;
        
        return $this;
    }
    /**
     * Get Dinner value
     * @return string|null
     */
    public function getDinner(): ?string
    {
        return $this->Dinner;
    }
    /**
     * Set Dinner value
     * @param string $dinner
     * @return \Travelport\UniversalRecord\StructType\MealPlans
     */
    public function setDinner(?string $dinner = null): self
    {
        $this->Dinner = $dinner;
        
        return $this;
    }
}
