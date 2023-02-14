<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeOtherImageSize EnumType
 * Meta information extracted from the WSDL
 * - documentation: Other unknown image sizes
 * @subpackage Enumerations
 */
class TypeOtherImageSize extends AbstractStructEnumBase
{
    /**
     * Constant for value 'X'
     * @return string 'X'
     */
    const VALUE_X = 'X';
    /**
     * Return allowed values
     * @uses self::VALUE_X
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_X,
        ];
    }
}
