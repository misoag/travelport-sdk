<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeFaresIndicator EnumType
 * Meta information extracted from the WSDL
 * - documentation: Defines the type of fares to return (Only public fares, Only private fares, Only agency private fares, Only airline private fares or all fares)
 * @subpackage Enumerations
 */
class TypeFaresIndicator extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PublicFaresOnly'
     * @return string 'PublicFaresOnly'
     */
    const VALUE_PUBLIC_FARES_ONLY = 'PublicFaresOnly';
    /**
     * Constant for value 'PrivateFaresOnly'
     * @return string 'PrivateFaresOnly'
     */
    const VALUE_PRIVATE_FARES_ONLY = 'PrivateFaresOnly';
    /**
     * Constant for value 'AgencyPrivateFaresOnly'
     * @return string 'AgencyPrivateFaresOnly'
     */
    const VALUE_AGENCY_PRIVATE_FARES_ONLY = 'AgencyPrivateFaresOnly';
    /**
     * Constant for value 'AirlinePrivateFaresOnly'
     * @return string 'AirlinePrivateFaresOnly'
     */
    const VALUE_AIRLINE_PRIVATE_FARES_ONLY = 'AirlinePrivateFaresOnly';
    /**
     * Constant for value 'PublicAndPrivateFares'
     * @return string 'PublicAndPrivateFares'
     */
    const VALUE_PUBLIC_AND_PRIVATE_FARES = 'PublicAndPrivateFares';
    /**
     * Constant for value 'NetFaresOnly'
     * @return string 'NetFaresOnly'
     */
    const VALUE_NET_FARES_ONLY = 'NetFaresOnly';
    /**
     * Constant for value 'AllFares'
     * Meta information extracted from the WSDL
     * - documentation: Applicable for 1G/1V air shop only
     * @return string 'AllFares'
     */
    const VALUE_ALL_FARES = 'AllFares';
    /**
     * Return allowed values
     * @uses self::VALUE_PUBLIC_FARES_ONLY
     * @uses self::VALUE_PRIVATE_FARES_ONLY
     * @uses self::VALUE_AGENCY_PRIVATE_FARES_ONLY
     * @uses self::VALUE_AIRLINE_PRIVATE_FARES_ONLY
     * @uses self::VALUE_PUBLIC_AND_PRIVATE_FARES
     * @uses self::VALUE_NET_FARES_ONLY
     * @uses self::VALUE_ALL_FARES
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PUBLIC_FARES_ONLY,
            self::VALUE_PRIVATE_FARES_ONLY,
            self::VALUE_AGENCY_PRIVATE_FARES_ONLY,
            self::VALUE_AIRLINE_PRIVATE_FARES_ONLY,
            self::VALUE_PUBLIC_AND_PRIVATE_FARES,
            self::VALUE_NET_FARES_ONLY,
            self::VALUE_ALL_FARES,
        ];
    }
}
