<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeFarePull EnumType
 * @subpackage Enumerations
 */
class TypeFarePull extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ReverseOfOriginDestination'
     * @return string 'ReverseOfOriginDestination'
     */
    const VALUE_REVERSE_OF_ORIGIN_DESTINATION = 'ReverseOfOriginDestination';
    /**
     * Constant for value 'SameAsOriginDestination'
     * @return string 'SameAsOriginDestination'
     */
    const VALUE_SAME_AS_ORIGIN_DESTINATION = 'SameAsOriginDestination';
    /**
     * Return allowed values
     * @uses self::VALUE_REVERSE_OF_ORIGIN_DESTINATION
     * @uses self::VALUE_SAME_AS_ORIGIN_DESTINATION
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_REVERSE_OF_ORIGIN_DESTINATION,
            self::VALUE_SAME_AS_ORIGIN_DESTINATION,
        ];
    }
}
