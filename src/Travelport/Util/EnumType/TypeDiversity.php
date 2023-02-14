<?php

declare(strict_types=1);

namespace Travelport\Util\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeDiversity EnumType
 * Meta information extracted from the WSDL
 * - documentation: Used in Low Fare Search to better promote unique results
 * @subpackage Enumerations
 */
class TypeDiversity extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Blend'
     * @return string 'Blend'
     */
    const VALUE_BLEND = 'Blend';
    /**
     * Constant for value 'Airports'
     * @return string 'Airports'
     */
    const VALUE_AIRPORTS = 'Airports';
    /**
     * Constant for value 'Carrier'
     * @return string 'Carrier'
     */
    const VALUE_CARRIER = 'Carrier';
    /**
     * Constant for value 'Origin'
     * @return string 'Origin'
     */
    const VALUE_ORIGIN = 'Origin';
    /**
     * Constant for value 'Destination'
     * @return string 'Destination'
     */
    const VALUE_DESTINATION = 'Destination';
    /**
     * Constant for value 'DateCombination'
     * @return string 'DateCombination'
     */
    const VALUE_DATE_COMBINATION = 'DateCombination';
    /**
     * Constant for value 'FirstODDate'
     * @return string 'FirstODDate'
     */
    const VALUE_FIRST_ODDATE = 'FirstODDate';
    /**
     * Constant for value 'SecondODDate'
     * @return string 'SecondODDate'
     */
    const VALUE_SECOND_ODDATE = 'SecondODDate';
    /**
     * Constant for value 'FirstOD'
     * @return string 'FirstOD'
     */
    const VALUE_FIRST_OD = 'FirstOD';
    /**
     * Constant for value 'SecondOD'
     * @return string 'SecondOD'
     */
    const VALUE_SECOND_OD = 'SecondOD';
    /**
     * Return allowed values
     * @uses self::VALUE_BLEND
     * @uses self::VALUE_AIRPORTS
     * @uses self::VALUE_CARRIER
     * @uses self::VALUE_ORIGIN
     * @uses self::VALUE_DESTINATION
     * @uses self::VALUE_DATE_COMBINATION
     * @uses self::VALUE_FIRST_ODDATE
     * @uses self::VALUE_SECOND_ODDATE
     * @uses self::VALUE_FIRST_OD
     * @uses self::VALUE_SECOND_OD
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_BLEND,
            self::VALUE_AIRPORTS,
            self::VALUE_CARRIER,
            self::VALUE_ORIGIN,
            self::VALUE_DESTINATION,
            self::VALUE_DATE_COMBINATION,
            self::VALUE_FIRST_ODDATE,
            self::VALUE_SECOND_ODDATE,
            self::VALUE_FIRST_OD,
            self::VALUE_SECOND_OD,
        ];
    }
}
