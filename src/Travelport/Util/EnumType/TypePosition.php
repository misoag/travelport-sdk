<?php

declare(strict_types=1);

namespace Travelport\Util\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typePosition EnumType
 * Meta information extracted from the WSDL
 * - documentation: Facility position with respect to position within the aircraft cabin. Possible values are – Left, Right, Center, Left Center, Right Center
 * @subpackage Enumerations
 */
class TypePosition extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Left'
     * @return string 'Left'
     */
    const VALUE_LEFT = 'Left';
    /**
     * Constant for value 'Right'
     * @return string 'Right'
     */
    const VALUE_RIGHT = 'Right';
    /**
     * Constant for value 'Center'
     * @return string 'Center'
     */
    const VALUE_CENTER = 'Center';
    /**
     * Constant for value 'LeftCenter'
     * @return string 'LeftCenter'
     */
    const VALUE_LEFT_CENTER = 'LeftCenter';
    /**
     * Constant for value 'RightCenter'
     * @return string 'RightCenter'
     */
    const VALUE_RIGHT_CENTER = 'RightCenter';
    /**
     * Return allowed values
     * @uses self::VALUE_LEFT
     * @uses self::VALUE_RIGHT
     * @uses self::VALUE_CENTER
     * @uses self::VALUE_LEFT_CENTER
     * @uses self::VALUE_RIGHT_CENTER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_LEFT,
            self::VALUE_RIGHT,
            self::VALUE_CENTER,
            self::VALUE_LEFT_CENTER,
            self::VALUE_RIGHT_CENTER,
        ];
    }
}
