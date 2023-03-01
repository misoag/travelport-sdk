<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeInventoryRequest EnumType
 * Meta information extracted from the WSDL
 * - documentation: The valid inventory types are Seamless - A, DirectAccess - B, Basic - C
 * @subpackage Enumerations
 */
class TypeInventoryRequest extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Seamless'
     * @return string 'Seamless'
     */
    const VALUE_SEAMLESS = 'Seamless';
    /**
     * Constant for value 'DirectAccess'
     * @return string 'DirectAccess'
     */
    const VALUE_DIRECT_ACCESS = 'DirectAccess';
    /**
     * Constant for value 'Basic'
     * @return string 'Basic'
     */
    const VALUE_BASIC = 'Basic';
    /**
     * Return allowed values
     * @uses self::VALUE_SEAMLESS
     * @uses self::VALUE_DIRECT_ACCESS
     * @uses self::VALUE_BASIC
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SEAMLESS,
            self::VALUE_DIRECT_ACCESS,
            self::VALUE_BASIC,
        ];
    }
}
