<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeRailTicketStatus EnumType
 * Meta information extracted from the WSDL
 * - documentation: Status Types for Ticket Info.
 * @subpackage Enumerations
 */
class TypeRailTicketStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Not Print Ready'
     * @return string 'Not Print Ready'
     */
    const VALUE_NOT_PRINT_READY = 'Not Print Ready';
    /**
     * Constant for value 'Can Be Printed'
     * @return string 'Can Be Printed'
     */
    const VALUE_CAN_BE_PRINTED = 'Can Be Printed';
    /**
     * Constant for value 'Queued (sent to print module)'
     * @return string 'Queued (sent to print module)'
     */
    const VALUE_QUEUED_SENT_TO_PRINT_MODULE = 'Queued (sent to print module)';
    /**
     * Constant for value 'Printed'
     * @return string 'Printed'
     */
    const VALUE_PRINTED = 'Printed';
    /**
     * Return allowed values
     * @uses self::VALUE_NOT_PRINT_READY
     * @uses self::VALUE_CAN_BE_PRINTED
     * @uses self::VALUE_QUEUED_SENT_TO_PRINT_MODULE
     * @uses self::VALUE_PRINTED
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NOT_PRINT_READY,
            self::VALUE_CAN_BE_PRINTED,
            self::VALUE_QUEUED_SENT_TO_PRINT_MODULE,
            self::VALUE_PRINTED,
        ];
    }
}
