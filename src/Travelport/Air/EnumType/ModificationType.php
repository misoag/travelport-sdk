<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ModificationType EnumType
 * Meta information extracted from the WSDL
 * - documentation: The modification types supported
 * @subpackage Enumerations
 */
class ModificationType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AddSegment'
     * Meta information extracted from the WSDL
     * - documentation: Add a segment to the itinerary
     * @return string 'AddSegment'
     */
    const VALUE_ADD_SEGMENT = 'AddSegment';
    /**
     * Constant for value 'RemoveSegment'
     * Meta information extracted from the WSDL
     * - documentation: Delete a segment from the itinerary
     * @return string 'RemoveSegment'
     */
    const VALUE_REMOVE_SEGMENT = 'RemoveSegment';
    /**
     * Constant for value 'ReplaceSegment'
     * Meta information extracted from the WSDL
     * - documentation: Replace a segment in the itinerary with a new segment
     * @return string 'ReplaceSegment'
     */
    const VALUE_REPLACE_SEGMENT = 'ReplaceSegment';
    /**
     * Constant for value 'AddPassenger'
     * Meta information extracted from the WSDL
     * - documentation: Add a passenger to the itinerary
     * @return string 'AddPassenger'
     */
    const VALUE_ADD_PASSENGER = 'AddPassenger';
    /**
     * Constant for value 'RemovePassenger'
     * Meta information extracted from the WSDL
     * - documentation: Remove a passenger from the itinerary
     * @return string 'RemovePassenger'
     */
    const VALUE_REMOVE_PASSENGER = 'RemovePassenger';
    /**
     * Constant for value 'OptionsOnly'
     * Meta information extracted from the WSDL
     * - documentation: Modification where only options are added / removed from the itinerary
     * @return string 'OptionsOnly'
     */
    const VALUE_OPTIONS_ONLY = 'OptionsOnly';
    /**
     * Constant for value 'Other'
     * Meta information extracted from the WSDL
     * - documentation: Other modification types
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Return allowed values
     * @uses self::VALUE_ADD_SEGMENT
     * @uses self::VALUE_REMOVE_SEGMENT
     * @uses self::VALUE_REPLACE_SEGMENT
     * @uses self::VALUE_ADD_PASSENGER
     * @uses self::VALUE_REMOVE_PASSENGER
     * @uses self::VALUE_OPTIONS_ONLY
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ADD_SEGMENT,
            self::VALUE_REMOVE_SEGMENT,
            self::VALUE_REPLACE_SEGMENT,
            self::VALUE_ADD_PASSENGER,
            self::VALUE_REMOVE_PASSENGER,
            self::VALUE_OPTIONS_ONLY,
            self::VALUE_OTHER,
        ];
    }
}
