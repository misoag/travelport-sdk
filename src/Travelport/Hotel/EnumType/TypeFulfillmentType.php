<?php

declare(strict_types=1);

namespace Travelport\Hotel\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeFulfillmentType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Defines how the client wishes to receive travel documents, e.g. collect ticket at a kiosk, print in agency.
 * @subpackage Enumerations
 */
class TypeFulfillmentType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Kiosk'
     * @return string 'Kiosk'
     */
    const VALUE_KIOSK = 'Kiosk';
    /**
     * Constant for value 'Travel Agency'
     * @return string 'Travel Agency'
     */
    const VALUE_TRAVEL_AGENCY = 'Travel Agency';
    /**
     * Constant for value 'Courier'
     * @return string 'Courier'
     */
    const VALUE_COURIER = 'Courier';
    /**
     * Constant for value 'Standard Mail'
     * @return string 'Standard Mail'
     */
    const VALUE_STANDARD_MAIL = 'Standard Mail';
    /**
     * Constant for value 'Ticketless'
     * @return string 'Ticketless'
     */
    const VALUE_TICKETLESS = 'Ticketless';
    /**
     * Constant for value 'Ticket Office'
     * @return string 'Ticket Office'
     */
    const VALUE_TICKET_OFFICE = 'Ticket Office';
    /**
     * Constant for value 'Express Mail'
     * @return string 'Express Mail'
     */
    const VALUE_EXPRESS_MAIL = 'Express Mail';
    /**
     * Constant for value 'Corporate Kiosk'
     * @return string 'Corporate Kiosk'
     */
    const VALUE_CORPORATE_KIOSK = 'Corporate Kiosk';
    /**
     * Constant for value 'Train Station Service Desk'
     * @return string 'Train Station Service Desk'
     */
    const VALUE_TRAIN_STATION_SERVICE_DESK = 'Train Station Service Desk';
    /**
     * Constant for value 'Direct Printing of Ticket'
     * @return string 'Direct Printing of Ticket'
     */
    const VALUE_DIRECT_PRINTING_OF_TICKET = 'Direct Printing of Ticket';
    /**
     * Constant for value 'Printing of Ticket at Home'
     * @return string 'Printing of Ticket at Home'
     */
    const VALUE_PRINTING_OF_TICKET_AT_HOME = 'Printing of Ticket at Home';
    /**
     * Constant for value 'Digital Printing of Ticket at Home'
     * @return string 'Digital Printing of Ticket at Home'
     */
    const VALUE_DIGITAL_PRINTING_OF_TICKET_AT_HOME = 'Digital Printing of Ticket at Home';
    /**
     * Constant for value 'Retrieve Ticket at Eurostar in London'
     * @return string 'Retrieve Ticket at Eurostar in London'
     */
    const VALUE_RETRIEVE_TICKET_AT_EUROSTAR_IN_LONDON = 'Retrieve Ticket at Eurostar in London';
    /**
     * Return allowed values
     * @uses self::VALUE_KIOSK
     * @uses self::VALUE_TRAVEL_AGENCY
     * @uses self::VALUE_COURIER
     * @uses self::VALUE_STANDARD_MAIL
     * @uses self::VALUE_TICKETLESS
     * @uses self::VALUE_TICKET_OFFICE
     * @uses self::VALUE_EXPRESS_MAIL
     * @uses self::VALUE_CORPORATE_KIOSK
     * @uses self::VALUE_TRAIN_STATION_SERVICE_DESK
     * @uses self::VALUE_DIRECT_PRINTING_OF_TICKET
     * @uses self::VALUE_PRINTING_OF_TICKET_AT_HOME
     * @uses self::VALUE_DIGITAL_PRINTING_OF_TICKET_AT_HOME
     * @uses self::VALUE_RETRIEVE_TICKET_AT_EUROSTAR_IN_LONDON
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_KIOSK,
            self::VALUE_TRAVEL_AGENCY,
            self::VALUE_COURIER,
            self::VALUE_STANDARD_MAIL,
            self::VALUE_TICKETLESS,
            self::VALUE_TICKET_OFFICE,
            self::VALUE_EXPRESS_MAIL,
            self::VALUE_CORPORATE_KIOSK,
            self::VALUE_TRAIN_STATION_SERVICE_DESK,
            self::VALUE_DIRECT_PRINTING_OF_TICKET,
            self::VALUE_PRINTING_OF_TICKET_AT_HOME,
            self::VALUE_DIGITAL_PRINTING_OF_TICKET_AT_HOME,
            self::VALUE_RETRIEVE_TICKET_AT_EUROSTAR_IN_LONDON,
        ];
    }
}
