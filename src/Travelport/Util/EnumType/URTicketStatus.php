<?php

declare(strict_types=1);

namespace Travelport\Util\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for URTicketStatus EnumType
 * Meta information extracted from the WSDL
 * - documentation: Information on whether the Universal Record ticket status is Ticketed, Unticketed , Partially Ticketed or Not Applicable status.
 * @subpackage Enumerations
 */
class URTicketStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Ticketed'
     * @return string 'Ticketed'
     */
    const VALUE_TICKETED = 'Ticketed';
    /**
     * Constant for value 'Unticketed'
     * @return string 'Unticketed'
     */
    const VALUE_UNTICKETED = 'Unticketed';
    /**
     * Constant for value 'Partially Ticketed'
     * @return string 'Partially Ticketed'
     */
    const VALUE_PARTIALLY_TICKETED = 'Partially Ticketed';
    /**
     * Constant for value 'Not Applicable'
     * @return string 'Not Applicable'
     */
    const VALUE_NOT_APPLICABLE = 'Not Applicable';
    /**
     * Return allowed values
     * @uses self::VALUE_TICKETED
     * @uses self::VALUE_UNTICKETED
     * @uses self::VALUE_PARTIALLY_TICKETED
     * @uses self::VALUE_NOT_APPLICABLE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_TICKETED,
            self::VALUE_UNTICKETED,
            self::VALUE_PARTIALLY_TICKETED,
            self::VALUE_NOT_APPLICABLE,
        ];
    }
}
