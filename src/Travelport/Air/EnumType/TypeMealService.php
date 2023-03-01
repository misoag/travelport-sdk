<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeMealService EnumType
 * Meta information extracted from the WSDL
 * - documentation: Available Meal Service
 * @subpackage Enumerations
 */
class TypeMealService extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Meal'
     * @return string 'Meal'
     */
    const VALUE_MEAL = 'Meal';
    /**
     * Constant for value 'ColdMeal'
     * @return string 'ColdMeal'
     */
    const VALUE_COLD_MEAL = 'ColdMeal';
    /**
     * Constant for value 'HotMeal'
     * @return string 'HotMeal'
     */
    const VALUE_HOT_MEAL = 'HotMeal';
    /**
     * Constant for value 'Breakfast'
     * @return string 'Breakfast'
     */
    const VALUE_BREAKFAST = 'Breakfast';
    /**
     * Constant for value 'ContinentalBreakfast'
     * @return string 'ContinentalBreakfast'
     */
    const VALUE_CONTINENTAL_BREAKFAST = 'ContinentalBreakfast';
    /**
     * Constant for value 'Lunch'
     * @return string 'Lunch'
     */
    const VALUE_LUNCH = 'Lunch';
    /**
     * Constant for value 'Dinner'
     * @return string 'Dinner'
     */
    const VALUE_DINNER = 'Dinner';
    /**
     * Constant for value 'SnackOrBrunch'
     * @return string 'SnackOrBrunch'
     */
    const VALUE_SNACK_OR_BRUNCH = 'SnackOrBrunch';
    /**
     * Constant for value 'FoodForPurchase'
     * @return string 'FoodForPurchase'
     */
    const VALUE_FOOD_FOR_PURCHASE = 'FoodForPurchase';
    /**
     * Constant for value 'ComplimentaryRefreshments'
     * @return string 'ComplimentaryRefreshments'
     */
    const VALUE_COMPLIMENTARY_REFRESHMENTS = 'ComplimentaryRefreshments';
    /**
     * Constant for value 'AlcoholicBeveragesForPurchase'
     * @return string 'AlcoholicBeveragesForPurchase'
     */
    const VALUE_ALCOHOLIC_BEVERAGES_FOR_PURCHASE = 'AlcoholicBeveragesForPurchase';
    /**
     * Constant for value 'ComplimentaryAlcoholicBeverages'
     * @return string 'ComplimentaryAlcoholicBeverages'
     */
    const VALUE_COMPLIMENTARY_ALCOHOLIC_BEVERAGES = 'ComplimentaryAlcoholicBeverages';
    /**
     * Constant for value 'FoodAndBeveragesForPurchase'
     * @return string 'FoodAndBeveragesForPurchase'
     */
    const VALUE_FOOD_AND_BEVERAGES_FOR_PURCHASE = 'FoodAndBeveragesForPurchase';
    /**
     * Constant for value 'NoMealService'
     * @return string 'NoMealService'
     */
    const VALUE_NO_MEAL_SERVICE = 'NoMealService';
    /**
     * Constant for value 'RefreshmentsForPurchase'
     * @return string 'RefreshmentsForPurchase'
     */
    const VALUE_REFRESHMENTS_FOR_PURCHASE = 'RefreshmentsForPurchase';
    /**
     * Return allowed values
     * @uses self::VALUE_MEAL
     * @uses self::VALUE_COLD_MEAL
     * @uses self::VALUE_HOT_MEAL
     * @uses self::VALUE_BREAKFAST
     * @uses self::VALUE_CONTINENTAL_BREAKFAST
     * @uses self::VALUE_LUNCH
     * @uses self::VALUE_DINNER
     * @uses self::VALUE_SNACK_OR_BRUNCH
     * @uses self::VALUE_FOOD_FOR_PURCHASE
     * @uses self::VALUE_COMPLIMENTARY_REFRESHMENTS
     * @uses self::VALUE_ALCOHOLIC_BEVERAGES_FOR_PURCHASE
     * @uses self::VALUE_COMPLIMENTARY_ALCOHOLIC_BEVERAGES
     * @uses self::VALUE_FOOD_AND_BEVERAGES_FOR_PURCHASE
     * @uses self::VALUE_NO_MEAL_SERVICE
     * @uses self::VALUE_REFRESHMENTS_FOR_PURCHASE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MEAL,
            self::VALUE_COLD_MEAL,
            self::VALUE_HOT_MEAL,
            self::VALUE_BREAKFAST,
            self::VALUE_CONTINENTAL_BREAKFAST,
            self::VALUE_LUNCH,
            self::VALUE_DINNER,
            self::VALUE_SNACK_OR_BRUNCH,
            self::VALUE_FOOD_FOR_PURCHASE,
            self::VALUE_COMPLIMENTARY_REFRESHMENTS,
            self::VALUE_ALCOHOLIC_BEVERAGES_FOR_PURCHASE,
            self::VALUE_COMPLIMENTARY_ALCOHOLIC_BEVERAGES,
            self::VALUE_FOOD_AND_BEVERAGES_FOR_PURCHASE,
            self::VALUE_NO_MEAL_SERVICE,
            self::VALUE_REFRESHMENTS_FOR_PURCHASE,
        ];
    }
}
