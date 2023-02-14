<?php

declare(strict_types=1);

namespace Travelport\Util\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeUnitWeight EnumType
 * Meta information extracted from the WSDL
 * - documentation: The available units of weight
 * @subpackage Enumerations
 */
class TypeUnitWeight extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Kilograms'
     * @return string 'Kilograms'
     */
    const VALUE_KILOGRAMS = 'Kilograms';
    /**
     * Constant for value 'Pounds'
     * @return string 'Pounds'
     */
    const VALUE_POUNDS = 'Pounds';
    /**
     * Return allowed values
     * @uses self::VALUE_KILOGRAMS
     * @uses self::VALUE_POUNDS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_KILOGRAMS,
            self::VALUE_POUNDS,
        ];
    }
}
