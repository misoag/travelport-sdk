<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeMCOType EnumType
 * Meta information extracted from the WSDL
 * - documentation: The available types for an MCO
 * @subpackage Enumerations
 */
class TypeMCOType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AgencyServiceFee'
     * @return string 'AgencyServiceFee'
     */
    const VALUE_AGENCY_SERVICE_FEE = 'AgencyServiceFee';
    /**
     * Constant for value 'ExchangeResidual'
     * @return string 'ExchangeResidual'
     */
    const VALUE_EXCHANGE_RESIDUAL = 'ExchangeResidual';
    /**
     * Constant for value 'AirlineServiceFee'
     * @return string 'AirlineServiceFee'
     */
    const VALUE_AIRLINE_SERVICE_FEE = 'AirlineServiceFee';
    /**
     * Return allowed values
     * @uses self::VALUE_AGENCY_SERVICE_FEE
     * @uses self::VALUE_EXCHANGE_RESIDUAL
     * @uses self::VALUE_AIRLINE_SERVICE_FEE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AGENCY_SERVICE_FEE,
            self::VALUE_EXCHANGE_RESIDUAL,
            self::VALUE_AIRLINE_SERVICE_FEE,
        ];
    }
}
