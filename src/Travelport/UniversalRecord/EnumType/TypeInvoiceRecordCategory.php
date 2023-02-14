<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeInvoiceRecordCategory EnumType
 * Meta information extracted from the WSDL
 * - documentation: Invoice record type: Invoice, Void, Refund, Manual
 * @subpackage Enumerations
 */
class TypeInvoiceRecordCategory extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Invoice'
     * @return string 'Invoice'
     */
    const VALUE_INVOICE = 'Invoice';
    /**
     * Constant for value 'Void'
     * @return string 'Void'
     */
    const VALUE_VOID = 'Void';
    /**
     * Constant for value 'Refund'
     * @return string 'Refund'
     */
    const VALUE_REFUND = 'Refund';
    /**
     * Constant for value 'Manual'
     * @return string 'Manual'
     */
    const VALUE_MANUAL = 'Manual';
    /**
     * Return allowed values
     * @uses self::VALUE_INVOICE
     * @uses self::VALUE_VOID
     * @uses self::VALUE_REFUND
     * @uses self::VALUE_MANUAL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_INVOICE,
            self::VALUE_VOID,
            self::VALUE_REFUND,
            self::VALUE_MANUAL,
        ];
    }
}
