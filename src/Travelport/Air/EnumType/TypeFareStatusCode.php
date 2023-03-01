<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeFareStatusCode EnumType
 * @subpackage Enumerations
 */
class TypeFareStatusCode extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ReadyToTicket'
     * Meta information extracted from the WSDL
     * - documentation: Fare is enabled and available for ticketing
     * @return string 'ReadyToTicket'
     */
    const VALUE_READY_TO_TICKET = 'ReadyToTicket';
    /**
     * Constant for value 'UnableToTicket'
     * Meta information extracted from the WSDL
     * - documentation: Fare could not be ticketed
     * @return string 'UnableToTicket'
     */
    const VALUE_UNABLE_TO_TICKET = 'UnableToTicket';
    /**
     * Constant for value 'Reprice'
     * Meta information extracted from the WSDL
     * - documentation: Fare needs to be repriced
     * @return string 'Reprice'
     */
    const VALUE_REPRICE = 'Reprice';
    /**
     * Constant for value 'Ticketed'
     * Meta information extracted from the WSDL
     * - documentation: Fare is ticketed
     * @return string 'Ticketed'
     */
    const VALUE_TICKETED = 'Ticketed';
    /**
     * Constant for value 'Unable'
     * Meta information extracted from the WSDL
     * - documentation: Fare is not enabled
     * @return string 'Unable'
     */
    const VALUE_UNABLE = 'Unable';
    /**
     * Constant for value 'Unknown'
     * Meta information extracted from the WSDL
     * - documentation: To handle new enumerations added by provider but currently not recognized by API
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Return allowed values
     * @uses self::VALUE_READY_TO_TICKET
     * @uses self::VALUE_UNABLE_TO_TICKET
     * @uses self::VALUE_REPRICE
     * @uses self::VALUE_TICKETED
     * @uses self::VALUE_UNABLE
     * @uses self::VALUE_UNKNOWN
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_READY_TO_TICKET,
            self::VALUE_UNABLE_TO_TICKET,
            self::VALUE_REPRICE,
            self::VALUE_TICKETED,
            self::VALUE_UNABLE,
            self::VALUE_UNKNOWN,
        ];
    }
}
