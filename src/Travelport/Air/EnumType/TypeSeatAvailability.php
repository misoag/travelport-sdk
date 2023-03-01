<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeSeatAvailability EnumType
 * Meta information extracted from the WSDL
 * - documentation: Seat availability info of a seat map
 * @subpackage Enumerations
 */
class TypeSeatAvailability extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Available'
     * @return string 'Available'
     */
    const VALUE_AVAILABLE = 'Available';
    /**
     * Constant for value 'Occupied'
     * @return string 'Occupied'
     */
    const VALUE_OCCUPIED = 'Occupied';
    /**
     * Constant for value 'Reserved'
     * @return string 'Reserved'
     */
    const VALUE_RESERVED = 'Reserved';
    /**
     * Constant for value 'AdvancedBoardingPass'
     * @return string 'AdvancedBoardingPass'
     */
    const VALUE_ADVANCED_BOARDING_PASS = 'AdvancedBoardingPass';
    /**
     * Constant for value 'InterlineCheckin'
     * @return string 'InterlineCheckin'
     */
    const VALUE_INTERLINE_CHECKIN = 'InterlineCheckin';
    /**
     * Constant for value 'Codeshare'
     * @return string 'Codeshare'
     */
    const VALUE_CODESHARE = 'Codeshare';
    /**
     * Constant for value 'Protected'
     * @return string 'Protected'
     */
    const VALUE_PROTECTED = 'Protected';
    /**
     * Constant for value 'PartnerAirline'
     * @return string 'PartnerAirline'
     */
    const VALUE_PARTNER_AIRLINE = 'PartnerAirline';
    /**
     * Constant for value 'AdvSeatSelection'
     * @return string 'AdvSeatSelection'
     */
    const VALUE_ADV_SEAT_SELECTION = 'AdvSeatSelection';
    /**
     * Constant for value 'Blocked'
     * @return string 'Blocked'
     */
    const VALUE_BLOCKED = 'Blocked';
    /**
     * Constant for value 'Extra'
     * @return string 'Extra'
     */
    const VALUE_EXTRA = 'Extra';
    /**
     * Constant for value 'RBDRestriction'
     * @return string 'RBDRestriction'
     */
    const VALUE_RBDRESTRICTION = 'RBDRestriction';
    /**
     * Constant for value 'Group'
     * @return string 'Group'
     */
    const VALUE_GROUP = 'Group';
    /**
     * Constant for value 'NoSeat'
     * @return string 'NoSeat'
     */
    const VALUE_NO_SEAT = 'NoSeat';
    /**
     * Constant for value 'UnoccupiedButNotEligible'
     * @return string 'UnoccupiedButNotEligible'
     */
    const VALUE_UNOCCUPIED_BUT_NOT_ELIGIBLE = 'UnoccupiedButNotEligible';
    /**
     * Return allowed values
     * @uses self::VALUE_AVAILABLE
     * @uses self::VALUE_OCCUPIED
     * @uses self::VALUE_RESERVED
     * @uses self::VALUE_ADVANCED_BOARDING_PASS
     * @uses self::VALUE_INTERLINE_CHECKIN
     * @uses self::VALUE_CODESHARE
     * @uses self::VALUE_PROTECTED
     * @uses self::VALUE_PARTNER_AIRLINE
     * @uses self::VALUE_ADV_SEAT_SELECTION
     * @uses self::VALUE_BLOCKED
     * @uses self::VALUE_EXTRA
     * @uses self::VALUE_RBDRESTRICTION
     * @uses self::VALUE_GROUP
     * @uses self::VALUE_NO_SEAT
     * @uses self::VALUE_UNOCCUPIED_BUT_NOT_ELIGIBLE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AVAILABLE,
            self::VALUE_OCCUPIED,
            self::VALUE_RESERVED,
            self::VALUE_ADVANCED_BOARDING_PASS,
            self::VALUE_INTERLINE_CHECKIN,
            self::VALUE_CODESHARE,
            self::VALUE_PROTECTED,
            self::VALUE_PARTNER_AIRLINE,
            self::VALUE_ADV_SEAT_SELECTION,
            self::VALUE_BLOCKED,
            self::VALUE_EXTRA,
            self::VALUE_RBDRESTRICTION,
            self::VALUE_GROUP,
            self::VALUE_NO_SEAT,
            self::VALUE_UNOCCUPIED_BUT_NOT_ELIGIBLE,
        ];
    }
}
