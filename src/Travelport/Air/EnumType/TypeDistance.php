<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeDistance EnumType
 * Meta information extracted from the WSDL
 * - documentation: 2 Letter distance unit code
 * @subpackage Enumerations
 */
class TypeDistance extends AbstractStructEnumBase
{
    /**
     * Constant for value 'MI'
     * @return string 'MI'
     */
    const VALUE_MI = 'MI';
    /**
     * Constant for value 'KM'
     * @return string 'KM'
     */
    const VALUE_KM = 'KM';
    /**
     * Return allowed values
     * @uses self::VALUE_MI
     * @uses self::VALUE_KM
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MI,
            self::VALUE_KM,
        ];
    }
}
