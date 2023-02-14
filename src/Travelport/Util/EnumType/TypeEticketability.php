<?php

declare(strict_types=1);

namespace Travelport\Util\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeEticketability EnumType
 * Meta information extracted from the WSDL
 * - documentation: Defines the ability to eticket an entity (Yes, No, Required, Ticketless)
 * @subpackage Enumerations
 */
class TypeEticketability extends AbstractStructEnumBase
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
     * Constant for value 'Required'
     * @return string 'Required'
     */
    const VALUE_REQUIRED = 'Required';
    /**
     * Constant for value 'Ticketless'
     * @return string 'Ticketless'
     */
    const VALUE_TICKETLESS = 'Ticketless';
    /**
     * Return allowed values
     * @uses self::VALUE_YES
     * @uses self::VALUE_NO
     * @uses self::VALUE_REQUIRED
     * @uses self::VALUE_TICKETLESS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_YES,
            self::VALUE_NO,
            self::VALUE_REQUIRED,
            self::VALUE_TICKETLESS,
        ];
    }
}
