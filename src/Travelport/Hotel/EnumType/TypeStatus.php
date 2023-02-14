<?php

declare(strict_types=1);

namespace Travelport\Hotel\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeStatus EnumType
 * Meta information extracted from the WSDL
 * - documentation: The status of the service fees.
 * @subpackage Enumerations
 */
class TypeStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Issued'
     * Meta information extracted from the WSDL
     * - documentation: The service fee has been issued.
     * @return string 'Issued'
     */
    const VALUE_ISSUED = 'Issued';
    /**
     * Constant for value 'ReadyToIssue'
     * Meta information extracted from the WSDL
     * - documentation: The service fee is ready to be issued.
     * @return string 'ReadyToIssue'
     */
    const VALUE_READY_TO_ISSUE = 'ReadyToIssue';
    /**
     * Constant for value 'IssueLater'
     * Meta information extracted from the WSDL
     * - documentation: The service fee can be issued later.
     * @return string 'IssueLater'
     */
    const VALUE_ISSUE_LATER = 'IssueLater';
    /**
     * Return allowed values
     * @uses self::VALUE_ISSUED
     * @uses self::VALUE_READY_TO_ISSUE
     * @uses self::VALUE_ISSUE_LATER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ISSUED,
            self::VALUE_READY_TO_ISSUE,
            self::VALUE_ISSUE_LATER,
        ];
    }
}
