<?php

declare(strict_types=1);

namespace Travelport\Hotel\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeFuel EnumType
 * @subpackage Enumerations
 */
class TypeFuel extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Petrol'
     * @return string 'Petrol'
     */
    const VALUE_PETROL = 'Petrol';
    /**
     * Constant for value 'Diesel'
     * @return string 'Diesel'
     */
    const VALUE_DIESEL = 'Diesel';
    /**
     * Constant for value 'Hybrid'
     * @return string 'Hybrid'
     */
    const VALUE_HYBRID = 'Hybrid';
    /**
     * Constant for value 'Electric'
     * @return string 'Electric'
     */
    const VALUE_ELECTRIC = 'Electric';
    /**
     * Constant for value 'LPGCNG'
     * @return string 'LPGCNG'
     */
    const VALUE_LPGCNG = 'LPGCNG';
    /**
     * Constant for value 'Hydrogen'
     * @return string 'Hydrogen'
     */
    const VALUE_HYDROGEN = 'Hydrogen';
    /**
     * Constant for value 'MultiFuel'
     * @return string 'MultiFuel'
     */
    const VALUE_MULTI_FUEL = 'MultiFuel';
    /**
     * Constant for value 'Ethanol'
     * @return string 'Ethanol'
     */
    const VALUE_ETHANOL = 'Ethanol';
    /**
     * Return allowed values
     * @uses self::VALUE_PETROL
     * @uses self::VALUE_DIESEL
     * @uses self::VALUE_HYBRID
     * @uses self::VALUE_ELECTRIC
     * @uses self::VALUE_LPGCNG
     * @uses self::VALUE_HYDROGEN
     * @uses self::VALUE_MULTI_FUEL
     * @uses self::VALUE_ETHANOL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PETROL,
            self::VALUE_DIESEL,
            self::VALUE_HYBRID,
            self::VALUE_ELECTRIC,
            self::VALUE_LPGCNG,
            self::VALUE_HYDROGEN,
            self::VALUE_MULTI_FUEL,
            self::VALUE_ETHANOL,
        ];
    }
}
