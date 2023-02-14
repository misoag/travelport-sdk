<?php

declare(strict_types=1);

namespace Travelport\Util\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeMctConnection EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumeration of the types of MCT exceptions (domestic or international)
 * @subpackage Enumerations
 */
class TypeMctConnection extends AbstractStructEnumBase
{
    /**
     * Constant for value 'DD'
     * @return string 'DD'
     */
    const VALUE_DD = 'DD';
    /**
     * Constant for value 'DI'
     * @return string 'DI'
     */
    const VALUE_DI = 'DI';
    /**
     * Constant for value 'ID'
     * @return string 'ID'
     */
    const VALUE_ID = 'ID';
    /**
     * Constant for value 'II'
     * @return string 'II'
     */
    const VALUE_II = 'II';
    /**
     * Return allowed values
     * @uses self::VALUE_DD
     * @uses self::VALUE_DI
     * @uses self::VALUE_ID
     * @uses self::VALUE_II
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DD,
            self::VALUE_DI,
            self::VALUE_ID,
            self::VALUE_II,
        ];
    }
}
