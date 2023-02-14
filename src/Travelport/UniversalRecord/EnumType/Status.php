<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for Status EnumType
 * Meta information extracted from the WSDL
 * - documentation: Flag that determines whether UR and History are accessible. | DI line status - ex:Ticketed | The status of this coupon returend from host is mapped as follows Code="A" Status="Airport Controlled" Code="C" Status="Checked In" Code="F"
 * Status="Flown/Used" Code="L" Status="Boarded/Lifted" Code="O" Status="Open" Code="P" Status="Printed" Code="R" Status="Refunded" Code="E" Status="Exchanged" Code="V" Status="Void" Code="Z" Status="Archived/Carrier Modified" Code="U"
 * Status="Unavailable" Code="S" Status="Suspended" Code="I" Status="Irregular Ops" Code="D" Status="Deleted/Removed" Code="X" Status="Unknown"
 * - type: typeTicketStatus
 * - use: required
 * @subpackage Enumerations
 */
class Status extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Available'
     * Meta information extracted from the WSDL
     * - documentation: Number of items requested for the IndicatorType is available
     * @return string 'Available'
     */
    const VALUE_AVAILABLE = 'Available';
    /**
     * Constant for value 'NotAvailable'
     * Meta information extracted from the WSDL
     * - documentation: Number of items requested for the IndicatorType is not available. The actual number available is provided against Value
     * @return string 'NotAvailable'
     */
    const VALUE_NOT_AVAILABLE = 'NotAvailable';
    /**
     * Constant for value 'SubstituteOffered'
     * Meta information extracted from the WSDL
     * - documentation: A substitute has been offered for the originally requested number and/or type. The substituted available is provided in against Value
     * @return string 'SubstituteOffered'
     */
    const VALUE_SUBSTITUTE_OFFERED = 'SubstituteOffered';
    /**
     * Constant for value 'MaximumExceeded'
     * Meta information extracted from the WSDL
     * - documentation: Number of items requested for the IndicatorType exceeds the maximum applicable value. The substituted available is provided in against Value
     * @return string 'MaximumExceeded'
     */
    const VALUE_MAXIMUM_EXCEEDED = 'MaximumExceeded';
    /**
     * Constant for value 'Archived'
     * @return string 'Archived'
     */
    const VALUE_ARCHIVED = 'Archived';
    /**
     * Constant for value 'Retained'
     * @return string 'Retained'
     */
    const VALUE_RETAINED = 'Retained';
    /**
     * Return allowed values
     * @uses self::VALUE_AVAILABLE
     * @uses self::VALUE_NOT_AVAILABLE
     * @uses self::VALUE_SUBSTITUTE_OFFERED
     * @uses self::VALUE_MAXIMUM_EXCEEDED
     * @uses self::VALUE_ARCHIVED
     * @uses self::VALUE_RETAINED
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AVAILABLE,
            self::VALUE_NOT_AVAILABLE,
            self::VALUE_SUBSTITUTE_OFFERED,
            self::VALUE_MAXIMUM_EXCEEDED,
            self::VALUE_ARCHIVED,
            self::VALUE_RETAINED,
        ];
    }
}
