<?php

declare(strict_types=1);

namespace Travelport\Hotel\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeAmenityLevel EnumType
 * @subpackage Enumerations
 */
class TypeAmenityLevel extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Property'
     * @return string 'Property'
     */
    const VALUE_PROPERTY = 'Property';
    /**
     * Constant for value 'Room'
     * @return string 'Room'
     */
    const VALUE_ROOM = 'Room';
    /**
     * Return allowed values
     * @uses self::VALUE_PROPERTY
     * @uses self::VALUE_ROOM
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PROPERTY,
            self::VALUE_ROOM,
        ];
    }
}
