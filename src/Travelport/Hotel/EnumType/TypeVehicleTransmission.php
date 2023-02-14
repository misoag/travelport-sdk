<?php

declare(strict_types=1);

namespace Travelport\Hotel\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeVehicleTransmission EnumType
 * @subpackage Enumerations
 */
class TypeVehicleTransmission extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Automatic'
     * @return string 'Automatic'
     */
    const VALUE_AUTOMATIC = 'Automatic';
    /**
     * Constant for value 'Automatic4WD'
     * @return string 'Automatic4WD'
     */
    const VALUE_AUTOMATIC_4_WD = 'Automatic4WD';
    /**
     * Constant for value 'AutomaticAWD'
     * @return string 'AutomaticAWD'
     */
    const VALUE_AUTOMATIC_AWD = 'AutomaticAWD';
    /**
     * Constant for value 'Manual'
     * @return string 'Manual'
     */
    const VALUE_MANUAL = 'Manual';
    /**
     * Constant for value 'Manual4WD'
     * @return string 'Manual4WD'
     */
    const VALUE_MANUAL_4_WD = 'Manual4WD';
    /**
     * Constant for value 'ManualAWD'
     * @return string 'ManualAWD'
     */
    const VALUE_MANUAL_AWD = 'ManualAWD';
    /**
     * Return allowed values
     * @uses self::VALUE_AUTOMATIC
     * @uses self::VALUE_AUTOMATIC_4_WD
     * @uses self::VALUE_AUTOMATIC_AWD
     * @uses self::VALUE_MANUAL
     * @uses self::VALUE_MANUAL_4_WD
     * @uses self::VALUE_MANUAL_AWD
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AUTOMATIC,
            self::VALUE_AUTOMATIC_4_WD,
            self::VALUE_AUTOMATIC_AWD,
            self::VALUE_MANUAL,
            self::VALUE_MANUAL_4_WD,
            self::VALUE_MANUAL_AWD,
        ];
    }
}
