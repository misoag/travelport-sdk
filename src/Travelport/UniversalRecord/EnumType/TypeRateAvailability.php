<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeRateAvailability EnumType
 * @subpackage Enumerations
 */
class TypeRateAvailability extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Available'
     * @return string 'Available'
     */
    const VALUE_AVAILABLE = 'Available';
    /**
     * Constant for value 'Call'
     * @return string 'Call'
     */
    const VALUE_CALL = 'Call';
    /**
     * Constant for value 'Closed'
     * @return string 'Closed'
     */
    const VALUE_CLOSED = 'Closed';
    /**
     * Return allowed values
     * @uses self::VALUE_AVAILABLE
     * @uses self::VALUE_CALL
     * @uses self::VALUE_CLOSED
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AVAILABLE,
            self::VALUE_CALL,
            self::VALUE_CLOSED,
        ];
    }
}
