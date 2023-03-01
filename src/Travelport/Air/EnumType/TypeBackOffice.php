<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeBackOffice EnumType
 * @subpackage Enumerations
 */
class TypeBackOffice extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Accounting'
     * @return string 'Accounting'
     */
    const VALUE_ACCOUNTING = 'Accounting';
    /**
     * Constant for value 'Global'
     * @return string 'Global'
     */
    const VALUE_GLOBAL = 'Global';
    /**
     * Constant for value 'NonAccounting'
     * @return string 'NonAccounting'
     */
    const VALUE_NON_ACCOUNTING = 'NonAccounting';
    /**
     * Constant for value 'NonAccountingRemote'
     * @return string 'NonAccountingRemote'
     */
    const VALUE_NON_ACCOUNTING_REMOTE = 'NonAccountingRemote';
    /**
     * Constant for value 'Dual'
     * @return string 'Dual'
     */
    const VALUE_DUAL = 'Dual';
    /**
     * Return allowed values
     * @uses self::VALUE_ACCOUNTING
     * @uses self::VALUE_GLOBAL
     * @uses self::VALUE_NON_ACCOUNTING
     * @uses self::VALUE_NON_ACCOUNTING_REMOTE
     * @uses self::VALUE_DUAL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ACCOUNTING,
            self::VALUE_GLOBAL,
            self::VALUE_NON_ACCOUNTING,
            self::VALUE_NON_ACCOUNTING_REMOTE,
            self::VALUE_DUAL,
        ];
    }
}
