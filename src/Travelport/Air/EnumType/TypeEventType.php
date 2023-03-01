<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeEventType EnumType
 * Meta information extracted from the WSDL
 * - documentation: The various reservation events (book, cancel, void, etc)
 * @subpackage Enumerations
 */
class TypeEventType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Create'
     * @return string 'Create'
     */
    const VALUE_CREATE = 'Create';
    /**
     * Constant for value 'Cancel'
     * @return string 'Cancel'
     */
    const VALUE_CANCEL = 'Cancel';
    /**
     * Constant for value 'Ticket'
     * @return string 'Ticket'
     */
    const VALUE_TICKET = 'Ticket';
    /**
     * Constant for value 'Refund'
     * @return string 'Refund'
     */
    const VALUE_REFUND = 'Refund';
    /**
     * Constant for value 'Exchange'
     * @return string 'Exchange'
     */
    const VALUE_EXCHANGE = 'Exchange';
    /**
     * Constant for value 'Void'
     * @return string 'Void'
     */
    const VALUE_VOID = 'Void';
    /**
     * Return allowed values
     * @uses self::VALUE_CREATE
     * @uses self::VALUE_CANCEL
     * @uses self::VALUE_TICKET
     * @uses self::VALUE_REFUND
     * @uses self::VALUE_EXCHANGE
     * @uses self::VALUE_VOID
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CREATE,
            self::VALUE_CANCEL,
            self::VALUE_TICKET,
            self::VALUE_REFUND,
            self::VALUE_EXCHANGE,
            self::VALUE_VOID,
        ];
    }
}
