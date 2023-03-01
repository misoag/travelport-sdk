<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeFareTripType EnumType
 * Meta information extracted from the WSDL
 * - documentation: RoundTheWorld -- round the world fare | CircleTrip -- circle trip fare | HalfReturn - Half roundtrip fare | ReturnOnly -- Round Trip fare only. Cannot be divided for use in half Round Trip | Return - round trip fare | OneWayOnly -
 * one way fare only. Do not double | OneWay - one way fare | Type of trip for this fare ( One-way, Return, etc..)
 * @subpackage Enumerations
 */
class TypeFareTripType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'OneWay'
     * @return string 'OneWay'
     */
    const VALUE_ONE_WAY = 'OneWay';
    /**
     * Constant for value 'OneWayOnly'
     * @return string 'OneWayOnly'
     */
    const VALUE_ONE_WAY_ONLY = 'OneWayOnly';
    /**
     * Constant for value 'Return'
     * @return string 'Return'
     */
    const VALUE_RETURN = 'Return';
    /**
     * Constant for value 'ReturnOnly'
     * @return string 'ReturnOnly'
     */
    const VALUE_RETURN_ONLY = 'ReturnOnly';
    /**
     * Constant for value 'HalfReturn'
     * @return string 'HalfReturn'
     */
    const VALUE_HALF_RETURN = 'HalfReturn';
    /**
     * Constant for value 'CircleTrip'
     * @return string 'CircleTrip'
     */
    const VALUE_CIRCLE_TRIP = 'CircleTrip';
    /**
     * Constant for value 'RoundTheWorld'
     * @return string 'RoundTheWorld'
     */
    const VALUE_ROUND_THE_WORLD = 'RoundTheWorld';
    /**
     * Return allowed values
     * @uses self::VALUE_ONE_WAY
     * @uses self::VALUE_ONE_WAY_ONLY
     * @uses self::VALUE_RETURN
     * @uses self::VALUE_RETURN_ONLY
     * @uses self::VALUE_HALF_RETURN
     * @uses self::VALUE_CIRCLE_TRIP
     * @uses self::VALUE_ROUND_THE_WORLD
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ONE_WAY,
            self::VALUE_ONE_WAY_ONLY,
            self::VALUE_RETURN,
            self::VALUE_RETURN_ONLY,
            self::VALUE_HALF_RETURN,
            self::VALUE_CIRCLE_TRIP,
            self::VALUE_ROUND_THE_WORLD,
        ];
    }
}
