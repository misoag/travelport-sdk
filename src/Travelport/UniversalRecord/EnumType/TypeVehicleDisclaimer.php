<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeVehicleDisclaimer EnumType
 * @subpackage Enumerations
 */
class TypeVehicleDisclaimer extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Vehicles'
     * @return string 'Vehicles'
     */
    const VALUE_VEHICLES = 'Vehicles';
    /**
     * Constant for value 'Shuttle'
     * @return string 'Shuttle'
     */
    const VALUE_SHUTTLE = 'Shuttle';
    /**
     * Constant for value 'AgeRequirements'
     * @return string 'AgeRequirements'
     */
    const VALUE_AGE_REQUIREMENTS = 'AgeRequirements';
    /**
     * Constant for value 'AddlDriverInfo'
     * @return string 'AddlDriverInfo'
     */
    const VALUE_ADDL_DRIVER_INFO = 'AddlDriverInfo';
    /**
     * Constant for value 'AddlDriverFees'
     * @return string 'AddlDriverFees'
     */
    const VALUE_ADDL_DRIVER_FEES = 'AddlDriverFees';
    /**
     * Constant for value 'Payment'
     * @return string 'Payment'
     */
    const VALUE_PAYMENT = 'Payment';
    /**
     * Constant for value 'Guarantee'
     * @return string 'Guarantee'
     */
    const VALUE_GUARANTEE = 'Guarantee';
    /**
     * Constant for value 'Deposit'
     * @return string 'Deposit'
     */
    const VALUE_DEPOSIT = 'Deposit';
    /**
     * Constant for value 'Voucher'
     * @return string 'Voucher'
     */
    const VALUE_VOUCHER = 'Voucher';
    /**
     * Constant for value 'License'
     * @return string 'License'
     */
    const VALUE_LICENSE = 'License';
    /**
     * Constant for value 'Pickup'
     * @return string 'Pickup'
     */
    const VALUE_PICKUP = 'Pickup';
    /**
     * Constant for value 'DropOff'
     * @return string 'DropOff'
     */
    const VALUE_DROP_OFF = 'DropOff';
    /**
     * Constant for value 'Fuel'
     * @return string 'Fuel'
     */
    const VALUE_FUEL = 'Fuel';
    /**
     * Constant for value 'Geographic'
     * @return string 'Geographic'
     */
    const VALUE_GEOGRAPHIC = 'Geographic';
    /**
     * Constant for value 'Liabilities'
     * @return string 'Liabilities'
     */
    const VALUE_LIABILITIES = 'Liabilities';
    /**
     * Constant for value 'SpecialEquipment'
     * @return string 'SpecialEquipment'
     */
    const VALUE_SPECIAL_EQUIPMENT = 'SpecialEquipment';
    /**
     * Constant for value 'Insurance'
     * @return string 'Insurance'
     */
    const VALUE_INSURANCE = 'Insurance';
    /**
     * Constant for value 'Eligibility'
     * @return string 'Eligibility'
     */
    const VALUE_ELIGIBILITY = 'Eligibility';
    /**
     * Constant for value 'Fees'
     * @return string 'Fees'
     */
    const VALUE_FEES = 'Fees';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Return allowed values
     * @uses self::VALUE_VEHICLES
     * @uses self::VALUE_SHUTTLE
     * @uses self::VALUE_AGE_REQUIREMENTS
     * @uses self::VALUE_ADDL_DRIVER_INFO
     * @uses self::VALUE_ADDL_DRIVER_FEES
     * @uses self::VALUE_PAYMENT
     * @uses self::VALUE_GUARANTEE
     * @uses self::VALUE_DEPOSIT
     * @uses self::VALUE_VOUCHER
     * @uses self::VALUE_LICENSE
     * @uses self::VALUE_PICKUP
     * @uses self::VALUE_DROP_OFF
     * @uses self::VALUE_FUEL
     * @uses self::VALUE_GEOGRAPHIC
     * @uses self::VALUE_LIABILITIES
     * @uses self::VALUE_SPECIAL_EQUIPMENT
     * @uses self::VALUE_INSURANCE
     * @uses self::VALUE_ELIGIBILITY
     * @uses self::VALUE_FEES
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_VEHICLES,
            self::VALUE_SHUTTLE,
            self::VALUE_AGE_REQUIREMENTS,
            self::VALUE_ADDL_DRIVER_INFO,
            self::VALUE_ADDL_DRIVER_FEES,
            self::VALUE_PAYMENT,
            self::VALUE_GUARANTEE,
            self::VALUE_DEPOSIT,
            self::VALUE_VOUCHER,
            self::VALUE_LICENSE,
            self::VALUE_PICKUP,
            self::VALUE_DROP_OFF,
            self::VALUE_FUEL,
            self::VALUE_GEOGRAPHIC,
            self::VALUE_LIABILITIES,
            self::VALUE_SPECIAL_EQUIPMENT,
            self::VALUE_INSURANCE,
            self::VALUE_ELIGIBILITY,
            self::VALUE_FEES,
            self::VALUE_OTHER,
        ];
    }
}
