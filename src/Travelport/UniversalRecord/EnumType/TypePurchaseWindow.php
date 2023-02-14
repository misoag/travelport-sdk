<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typePurchaseWindow EnumType
 * Meta information extracted from the WSDL
 * - documentation: The purchase windows available for merchandising service
 * @subpackage Enumerations
 */
class TypePurchaseWindow extends AbstractStructEnumBase
{
    /**
     * Constant for value 'BookingOnly'
     * @return string 'BookingOnly'
     */
    const VALUE_BOOKING_ONLY = 'BookingOnly';
    /**
     * Constant for value 'TicketingOnly'
     * @return string 'TicketingOnly'
     */
    const VALUE_TICKETING_ONLY = 'TicketingOnly';
    /**
     * Constant for value 'CheckInOnly'
     * @return string 'CheckInOnly'
     */
    const VALUE_CHECK_IN_ONLY = 'CheckInOnly';
    /**
     * Constant for value 'Anytime'
     * @return string 'Anytime'
     */
    const VALUE_ANYTIME = 'Anytime';
    /**
     * Constant for value 'PostTicketing'
     * @return string 'PostTicketing'
     */
    const VALUE_POST_TICKETING = 'PostTicketing';
    /**
     * Return allowed values
     * @uses self::VALUE_BOOKING_ONLY
     * @uses self::VALUE_TICKETING_ONLY
     * @uses self::VALUE_CHECK_IN_ONLY
     * @uses self::VALUE_ANYTIME
     * @uses self::VALUE_POST_TICKETING
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_BOOKING_ONLY,
            self::VALUE_TICKETING_ONLY,
            self::VALUE_CHECK_IN_ONLY,
            self::VALUE_ANYTIME,
            self::VALUE_POST_TICKETING,
        ];
    }
}
