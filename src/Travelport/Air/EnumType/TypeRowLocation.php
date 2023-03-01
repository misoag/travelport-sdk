<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeRowLocation EnumType
 * Meta information extracted from the WSDL
 * - documentation: Facility Position with respect to a Row. Possible values are Rear, Front
 * @subpackage Enumerations
 */
class TypeRowLocation extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Rear'
     * @return string 'Rear'
     */
    const VALUE_REAR = 'Rear';
    /**
     * Constant for value 'Front'
     * @return string 'Front'
     */
    const VALUE_FRONT = 'Front';
    /**
     * Return allowed values
     * @uses self::VALUE_REAR
     * @uses self::VALUE_FRONT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_REAR,
            self::VALUE_FRONT,
        ];
    }
}
