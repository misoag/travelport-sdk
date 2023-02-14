<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeVoucherType EnumType
 * @subpackage Enumerations
 */
class TypeVoucherType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'FullCredit'
     * @return string 'FullCredit'
     */
    const VALUE_FULL_CREDIT = 'FullCredit';
    /**
     * Constant for value 'GroupOrDay'
     * @return string 'GroupOrDay'
     */
    const VALUE_GROUP_OR_DAY = 'GroupOrDay';
    /**
     * Constant for value 'SpecificValue'
     * @return string 'SpecificValue'
     */
    const VALUE_SPECIFIC_VALUE = 'SpecificValue';
    /**
     * Constant for value 'RegularVoucher'
     * @return string 'RegularVoucher'
     */
    const VALUE_REGULAR_VOUCHER = 'RegularVoucher';
    /**
     * Return allowed values
     * @uses self::VALUE_FULL_CREDIT
     * @uses self::VALUE_GROUP_OR_DAY
     * @uses self::VALUE_SPECIFIC_VALUE
     * @uses self::VALUE_REGULAR_VOUCHER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_FULL_CREDIT,
            self::VALUE_GROUP_OR_DAY,
            self::VALUE_SPECIFIC_VALUE,
            self::VALUE_REGULAR_VOUCHER,
        ];
    }
}
