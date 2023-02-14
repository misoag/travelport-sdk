<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\Hotel\StructType\MealPlan[]
     */
    protected ?array $MealPlan = null;
    /**
     * The Breakfast
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether a daily breakfast is included in the meal plan. true = Breakfast is included false = Breakfast is not included unknown = Information is not returned by the hotel supplier (chain or property).
     * @var string|null
     */
    protected ?string $Breakfast = null;
    /**
     * The Lunch
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether a daily lunch is included in the meal plan. true = Lunch is included false = Lunch is not included unknown = Information is not returned by the hotel supplier (chain or property).
     * @var string|null
     */
    protected ?string $Lunch = null;
    /**
     * The Dinner
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether a daily dinner is included in the meal plan. true = Dinner is included false = Dinner is not included unknown = Information is not returned by the hotel supplier (chain or property).
     * @var string|null
     */
    protected ?string $Dinner = null;
    /**
     * Constructor method for MealPlans
     * @uses MealPlans::setMealPlan()
     * @uses MealPlans::setBreakfast()
     * @uses MealPlans::setLunch()
     * @uses MealPlans::setDinner()
     * @param \Travelport\Hotel\StructType\MealPlan[] $mealPlan
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
     * @return \Travelport\Hotel\StructType\MealPlan[]
     */
    public function getMealPlan(): ?array
    {
        return $this->MealPlan;
    }
    /**
     * This method is responsible for validating the values passed to the setMealPlan method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMealPlan method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMealPlanForArrayConstraintsFromSetMealPlan(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $mealPlansMealPlanItem) {
            // validation for constraint: itemType
            if (!$mealPlansMealPlanItem instanceof \Travelport\Hotel\StructType\MealPlan) {
                $invalidValues[] = is_object($mealPlansMealPlanItem) ? get_class($mealPlansMealPlanItem) : sprintf('%s(%s)', gettype($mealPlansMealPlanItem), var_export($mealPlansMealPlanItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MealPlan property can only contain items of type \Travelport\Hotel\StructType\MealPlan, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MealPlan value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\MealPlan[] $mealPlan
     * @return \Travelport\Hotel\StructType\MealPlans
     */
    public function setMealPlan(?array $mealPlan = null): self
    {
        // validation for constraint: array
        if ('' !== ($mealPlanArrayErrorMessage = self::validateMealPlanForArrayConstraintsFromSetMealPlan($mealPlan))) {
            throw new InvalidArgumentException($mealPlanArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($mealPlan) && count($mealPlan) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($mealPlan)), __LINE__);
        }
        $this->MealPlan = $mealPlan;
        
        return $this;
    }
    /**
     * Add item to MealPlan value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\MealPlan $item
     * @return \Travelport\Hotel\StructType\MealPlans
     */
    public function addToMealPlan(\Travelport\Hotel\StructType\MealPlan $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\MealPlan) {
            throw new InvalidArgumentException(sprintf('The MealPlan property can only contain items of type \Travelport\Hotel\StructType\MealPlan, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->MealPlan) && count($this->MealPlan) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->MealPlan)), __LINE__);
        }
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
     * @uses \Travelport\Hotel\EnumType\TypeTrinary::valueIsValid()
     * @uses \Travelport\Hotel\EnumType\TypeTrinary::getValidValues()
     * @throws InvalidArgumentException
     * @param string $breakfast
     * @return \Travelport\Hotel\StructType\MealPlans
     */
    public function setBreakfast(?string $breakfast = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Hotel\EnumType\TypeTrinary::valueIsValid($breakfast)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Hotel\EnumType\TypeTrinary', is_array($breakfast) ? implode(', ', $breakfast) : var_export($breakfast, true), implode(', ', \Travelport\Hotel\EnumType\TypeTrinary::getValidValues())), __LINE__);
        }
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
     * @uses \Travelport\Hotel\EnumType\TypeTrinary::valueIsValid()
     * @uses \Travelport\Hotel\EnumType\TypeTrinary::getValidValues()
     * @throws InvalidArgumentException
     * @param string $lunch
     * @return \Travelport\Hotel\StructType\MealPlans
     */
    public function setLunch(?string $lunch = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Hotel\EnumType\TypeTrinary::valueIsValid($lunch)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Hotel\EnumType\TypeTrinary', is_array($lunch) ? implode(', ', $lunch) : var_export($lunch, true), implode(', ', \Travelport\Hotel\EnumType\TypeTrinary::getValidValues())), __LINE__);
        }
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
     * @uses \Travelport\Hotel\EnumType\TypeTrinary::valueIsValid()
     * @uses \Travelport\Hotel\EnumType\TypeTrinary::getValidValues()
     * @throws InvalidArgumentException
     * @param string $dinner
     * @return \Travelport\Hotel\StructType\MealPlans
     */
    public function setDinner(?string $dinner = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Hotel\EnumType\TypeTrinary::valueIsValid($dinner)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Hotel\EnumType\TypeTrinary', is_array($dinner) ? implode(', ', $dinner) : var_export($dinner, true), implode(', ', \Travelport\Hotel\EnumType\TypeTrinary::getValidValues())), __LINE__);
        }
        $this->Dinner = $dinner;
        
        return $this;
    }
}
