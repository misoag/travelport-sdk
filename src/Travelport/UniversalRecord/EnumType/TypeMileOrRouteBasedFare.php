<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeMileOrRouteBasedFare EnumType
 * Meta information extracted from the WSDL
 * - documentation: Whether the fare is Mile or Route based
 * @subpackage Enumerations
 */
class TypeMileOrRouteBasedFare extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Mile'
     * @return string 'Mile'
     */
    const VALUE_MILE = 'Mile';
    /**
     * Constant for value 'Route'
     * @return string 'Route'
     */
    const VALUE_ROUTE = 'Route';
    /**
     * Constant for value 'Both'
     * @return string 'Both'
     */
    const VALUE_BOTH = 'Both';
    /**
     * Return allowed values
     * @uses self::VALUE_MILE
     * @uses self::VALUE_ROUTE
     * @uses self::VALUE_BOTH
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MILE,
            self::VALUE_ROUTE,
            self::VALUE_BOTH,
        ];
    }
}
