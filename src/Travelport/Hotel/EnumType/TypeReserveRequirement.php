<?php

declare(strict_types=1);

namespace Travelport\Hotel\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeReserveRequirement EnumType
 * Meta information extracted from the WSDL
 * - documentation: Type of payment required to reserve travel i.e. Hotel Reservation requirement
 * @subpackage Enumerations
 */
class TypeReserveRequirement extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Deposit'
     * @return string 'Deposit'
     */
    const VALUE_DEPOSIT = 'Deposit';
    /**
     * Constant for value 'Guarantee'
     * @return string 'Guarantee'
     */
    const VALUE_GUARANTEE = 'Guarantee';
    /**
     * Constant for value 'Prepayment'
     * @return string 'Prepayment'
     */
    const VALUE_PREPAYMENT = 'Prepayment';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Return allowed values
     * @uses self::VALUE_DEPOSIT
     * @uses self::VALUE_GUARANTEE
     * @uses self::VALUE_PREPAYMENT
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DEPOSIT,
            self::VALUE_GUARANTEE,
            self::VALUE_PREPAYMENT,
            self::VALUE_OTHER,
        ];
    }
}
