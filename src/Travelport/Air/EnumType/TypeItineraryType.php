<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeItineraryType EnumType
 * @subpackage Enumerations
 */
class TypeItineraryType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'New'
     * Meta information extracted from the WSDL
     * - documentation: Indicates the itinerary is New
     * @return string 'New'
     */
    const VALUE_NEW = 'New';
    /**
     * Constant for value 'Original'
     * Meta information extracted from the WSDL
     * - documentation: Indicates the itinerary is Original
     * @return string 'Original'
     */
    const VALUE_ORIGINAL = 'Original';
    /**
     * Return allowed values
     * @uses self::VALUE_NEW
     * @uses self::VALUE_ORIGINAL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NEW,
            self::VALUE_ORIGINAL,
        ];
    }
}
