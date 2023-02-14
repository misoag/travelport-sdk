<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeItineraryCode EnumType
 * @subpackage Enumerations
 */
class TypeItineraryCode extends AbstractStructEnumBase
{
    /**
     * Constant for value 'International'
     * Meta information extracted from the WSDL
     * - documentation: Indicates the itinerary is International
     * @return string 'International'
     */
    const VALUE_INTERNATIONAL = 'International';
    /**
     * Constant for value 'Domestic'
     * Meta information extracted from the WSDL
     * - documentation: Indicates the itinerary is domestic
     * @return string 'Domestic'
     */
    const VALUE_DOMESTIC = 'Domestic';
    /**
     * Return allowed values
     * @uses self::VALUE_INTERNATIONAL
     * @uses self::VALUE_DOMESTIC
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_INTERNATIONAL,
            self::VALUE_DOMESTIC,
        ];
    }
}
