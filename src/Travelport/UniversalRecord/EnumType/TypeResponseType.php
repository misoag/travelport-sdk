<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeResponseType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Indicates the type of information to be returned in RailShopModifyAPIResponse. Values are “Schedules” or “Availability” or “Fares”. If not sent, “Fares” will be mapped if the request is for a specific rail segments,
 * otherwise “Availability” will be mapped. Provider Supported RCH.
 * @subpackage Enumerations
 */
class TypeResponseType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Availability'
     * @return string 'Availability'
     */
    const VALUE_AVAILABILITY = 'Availability';
    /**
     * Constant for value 'Schedules'
     * @return string 'Schedules'
     */
    const VALUE_SCHEDULES = 'Schedules';
    /**
     * Constant for value 'Fares'
     * @return string 'Fares'
     */
    const VALUE_FARES = 'Fares';
    /**
     * Return allowed values
     * @uses self::VALUE_AVAILABILITY
     * @uses self::VALUE_SCHEDULES
     * @uses self::VALUE_FARES
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AVAILABILITY,
            self::VALUE_SCHEDULES,
            self::VALUE_FARES,
        ];
    }
}
