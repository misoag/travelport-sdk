<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeReservationTicketed EnumType
 * Meta information extracted from the WSDL
 * - documentation: Information on whether the reservation is ticketed
 * @subpackage Enumerations
 */
class TypeReservationTicketed extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Yes'
     * @return string 'Yes'
     */
    const VALUE_YES = 'Yes';
    /**
     * Constant for value 'No'
     * @return string 'No'
     */
    const VALUE_NO = 'No';
    /**
     * Constant for value 'Not Applicable'
     * @return string 'Not Applicable'
     */
    const VALUE_NOT_APPLICABLE = 'Not Applicable';
    /**
     * Return allowed values
     * @uses self::VALUE_YES
     * @uses self::VALUE_NO
     * @uses self::VALUE_NOT_APPLICABLE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_YES,
            self::VALUE_NO,
            self::VALUE_NOT_APPLICABLE,
        ];
    }
}
