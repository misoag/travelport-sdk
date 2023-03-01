<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeDisplayCategory EnumType
 * Meta information extracted from the WSDL
 * - documentation: Type of booking
 * @subpackage Enumerations
 */
class TypeDisplayCategory extends AbstractStructEnumBase
{
    /**
     * Constant for value 'With Itinerary Pricing'
     * @return string 'With Itinerary Pricing'
     */
    const VALUE_WITH_ITINERARY_PRICING = 'With Itinerary Pricing';
    /**
     * Constant for value 'Store'
     * @return string 'Store'
     */
    const VALUE_STORE = 'Store';
    /**
     * Constant for value 'SpecialService'
     * @return string 'SpecialService'
     */
    const VALUE_SPECIAL_SERVICE = 'SpecialService';
    /**
     * Return allowed values
     * @uses self::VALUE_WITH_ITINERARY_PRICING
     * @uses self::VALUE_STORE
     * @uses self::VALUE_SPECIAL_SERVICE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_WITH_ITINERARY_PRICING,
            self::VALUE_STORE,
            self::VALUE_SPECIAL_SERVICE,
        ];
    }
}
