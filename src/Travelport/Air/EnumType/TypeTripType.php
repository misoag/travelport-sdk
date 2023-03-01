<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeTripType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Used in Low Fare Search to better target the results
 * @subpackage Enumerations
 */
class TypeTripType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Cheapest'
     * @return string 'Cheapest'
     */
    const VALUE_CHEAPEST = 'Cheapest';
    /**
     * Constant for value 'Quickest'
     * @return string 'Quickest'
     */
    const VALUE_QUICKEST = 'Quickest';
    /**
     * Constant for value 'MostConvenient'
     * @return string 'MostConvenient'
     */
    const VALUE_MOST_CONVENIENT = 'MostConvenient';
    /**
     * Constant for value 'Leisure'
     * @return string 'Leisure'
     */
    const VALUE_LEISURE = 'Leisure';
    /**
     * Constant for value 'Business'
     * @return string 'Business'
     */
    const VALUE_BUSINESS = 'Business';
    /**
     * Constant for value 'Luxury'
     * @return string 'Luxury'
     */
    const VALUE_LUXURY = 'Luxury';
    /**
     * Constant for value 'PreferFirst'
     * @return string 'PreferFirst'
     */
    const VALUE_PREFER_FIRST = 'PreferFirst';
    /**
     * Constant for value 'BusinessOrFirst'
     * @return string 'BusinessOrFirst'
     */
    const VALUE_BUSINESS_OR_FIRST = 'BusinessOrFirst';
    /**
     * Constant for value 'NoPenalty'
     * @return string 'NoPenalty'
     */
    const VALUE_NO_PENALTY = 'NoPenalty';
    /**
     * Return allowed values
     * @uses self::VALUE_CHEAPEST
     * @uses self::VALUE_QUICKEST
     * @uses self::VALUE_MOST_CONVENIENT
     * @uses self::VALUE_LEISURE
     * @uses self::VALUE_BUSINESS
     * @uses self::VALUE_LUXURY
     * @uses self::VALUE_PREFER_FIRST
     * @uses self::VALUE_BUSINESS_OR_FIRST
     * @uses self::VALUE_NO_PENALTY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CHEAPEST,
            self::VALUE_QUICKEST,
            self::VALUE_MOST_CONVENIENT,
            self::VALUE_LEISURE,
            self::VALUE_BUSINESS,
            self::VALUE_LUXURY,
            self::VALUE_PREFER_FIRST,
            self::VALUE_BUSINESS_OR_FIRST,
            self::VALUE_NO_PENALTY,
        ];
    }
}
