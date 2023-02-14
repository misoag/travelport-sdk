<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeAllImageSize EnumType
 * Meta information extracted from the WSDL
 * - documentation: All image sizes
 * @subpackage Enumerations
 */
class TypeAllImageSize extends AbstractStructEnumBase
{
    /**
     * Constant for value 'A'
     * @return string 'A'
     */
    const VALUE_A = 'A';
    /**
     * Return allowed values
     * @uses self::VALUE_A
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_A,
        ];
    }
}
