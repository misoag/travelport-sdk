<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeDoorCount EnumType
 * @subpackage Enumerations
 */
class TypeDoorCount extends AbstractStructEnumBase
{
    /**
     * Constant for value 'TwoToThreeDoors'
     * @return string 'TwoToThreeDoors'
     */
    const VALUE_TWO_TO_THREE_DOORS = 'TwoToThreeDoors';
    /**
     * Constant for value 'TwoToFourDoors'
     * @return string 'TwoToFourDoors'
     */
    const VALUE_TWO_TO_FOUR_DOORS = 'TwoToFourDoors';
    /**
     * Constant for value 'FourToFiveDoors'
     * @return string 'FourToFiveDoors'
     */
    const VALUE_FOUR_TO_FIVE_DOORS = 'FourToFiveDoors';
    /**
     * Return allowed values
     * @uses self::VALUE_TWO_TO_THREE_DOORS
     * @uses self::VALUE_TWO_TO_FOUR_DOORS
     * @uses self::VALUE_FOUR_TO_FIVE_DOORS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_TWO_TO_THREE_DOORS,
            self::VALUE_TWO_TO_FOUR_DOORS,
            self::VALUE_FOUR_TO_FIVE_DOORS,
        ];
    }
}
