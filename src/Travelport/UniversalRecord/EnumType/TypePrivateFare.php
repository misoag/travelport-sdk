<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typePrivateFare EnumType
 * Meta information extracted from the WSDL
 * - documentation: List the types of private fares, Agency private fare, Airline private Fare and Unknown. Also, this enumaration list includes PrivateFare to indetify private fares for GDSs where we can not identify specific private fares.
 * @subpackage Enumerations
 */
class TypePrivateFare extends AbstractStructEnumBase
{
    /**
     * Constant for value 'UnknownType'
     * @return string 'UnknownType'
     */
    const VALUE_UNKNOWN_TYPE = 'UnknownType';
    /**
     * Constant for value 'PrivateFare'
     * @return string 'PrivateFare'
     */
    const VALUE_PRIVATE_FARE = 'PrivateFare';
    /**
     * Constant for value 'AgencyPrivateFare'
     * @return string 'AgencyPrivateFare'
     */
    const VALUE_AGENCY_PRIVATE_FARE = 'AgencyPrivateFare';
    /**
     * Constant for value 'AirlinePrivateFare'
     * @return string 'AirlinePrivateFare'
     */
    const VALUE_AIRLINE_PRIVATE_FARE = 'AirlinePrivateFare';
    /**
     * Return allowed values
     * @uses self::VALUE_UNKNOWN_TYPE
     * @uses self::VALUE_PRIVATE_FARE
     * @uses self::VALUE_AGENCY_PRIVATE_FARE
     * @uses self::VALUE_AIRLINE_PRIVATE_FARE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_UNKNOWN_TYPE,
            self::VALUE_PRIVATE_FARE,
            self::VALUE_AGENCY_PRIVATE_FARE,
            self::VALUE_AIRLINE_PRIVATE_FARE,
        ];
    }
}
