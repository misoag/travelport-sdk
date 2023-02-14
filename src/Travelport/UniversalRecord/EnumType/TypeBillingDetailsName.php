<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeBillingDetailsName EnumType
 * @subpackage Enumerations
 */
class TypeBillingDetailsName extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PersonalId'
     * @return string 'PersonalId'
     */
    const VALUE_PERSONAL_ID = 'PersonalId';
    /**
     * Constant for value 'CostAccountNumber'
     * @return string 'CostAccountNumber'
     */
    const VALUE_COST_ACCOUNT_NUMBER = 'CostAccountNumber';
    /**
     * Constant for value 'AccountNumber'
     * @return string 'AccountNumber'
     */
    const VALUE_ACCOUNT_NUMBER = 'AccountNumber';
    /**
     * Constant for value 'ProjectNumber'
     * @return string 'ProjectNumber'
     */
    const VALUE_PROJECT_NUMBER = 'ProjectNumber';
    /**
     * Constant for value 'ActionCode'
     * @return string 'ActionCode'
     */
    const VALUE_ACTION_CODE = 'ActionCode';
    /**
     * Constant for value 'DepartmentCode'
     * @return string 'DepartmentCode'
     */
    const VALUE_DEPARTMENT_CODE = 'DepartmentCode';
    /**
     * Constant for value 'AccountingUnit'
     * @return string 'AccountingUnit'
     */
    const VALUE_ACCOUNTING_UNIT = 'AccountingUnit';
    /**
     * Constant for value 'OrderNumber'
     * @return string 'OrderNumber'
     */
    const VALUE_ORDER_NUMBER = 'OrderNumber';
    /**
     * Constant for value 'Destination'
     * @return string 'Destination'
     */
    const VALUE_DESTINATION = 'Destination';
    /**
     * Constant for value 'FileDate'
     * @return string 'FileDate'
     */
    const VALUE_FILE_DATE = 'FileDate';
    /**
     * Return allowed values
     * @uses self::VALUE_PERSONAL_ID
     * @uses self::VALUE_COST_ACCOUNT_NUMBER
     * @uses self::VALUE_ACCOUNT_NUMBER
     * @uses self::VALUE_PROJECT_NUMBER
     * @uses self::VALUE_ACTION_CODE
     * @uses self::VALUE_DEPARTMENT_CODE
     * @uses self::VALUE_ACCOUNTING_UNIT
     * @uses self::VALUE_ORDER_NUMBER
     * @uses self::VALUE_DESTINATION
     * @uses self::VALUE_FILE_DATE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PERSONAL_ID,
            self::VALUE_COST_ACCOUNT_NUMBER,
            self::VALUE_ACCOUNT_NUMBER,
            self::VALUE_PROJECT_NUMBER,
            self::VALUE_ACTION_CODE,
            self::VALUE_DEPARTMENT_CODE,
            self::VALUE_ACCOUNTING_UNIT,
            self::VALUE_ORDER_NUMBER,
            self::VALUE_DESTINATION,
            self::VALUE_FILE_DATE,
        ];
    }
}
