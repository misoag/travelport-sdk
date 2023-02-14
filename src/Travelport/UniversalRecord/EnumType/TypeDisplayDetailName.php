<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeDisplayDetailName EnumType
 * @subpackage Enumerations
 */
class TypeDisplayDetailName extends AbstractStructEnumBase
{
    /**
     * Constant for value 'OwningAgencyPCC'
     * Meta information extracted from the WSDL
     * - documentation: The pseudo city code of the agency owning the PNR
     * @return string 'OwningAgencyPCC'
     */
    const VALUE_OWNING_AGENCY_PCC = 'OwningAgencyPCC';
    /**
     * Constant for value 'CreatingAgentSignOn'
     * Meta information extracted from the WSDL
     * - documentation: Sign on code of the agent created the PNR
     * @return string 'CreatingAgentSignOn'
     */
    const VALUE_CREATING_AGENT_SIGN_ON = 'CreatingAgentSignOn';
    /**
     * Constant for value 'CreatingAgentDuty'
     * Meta information extracted from the WSDL
     * - documentation: Duty code of the agent created the PNR
     * @return string 'CreatingAgentDuty'
     */
    const VALUE_CREATING_AGENT_DUTY = 'CreatingAgentDuty';
    /**
     * Constant for value 'CreatingAgencyIATA'
     * Meta information extracted from the WSDL
     * - documentation: IATA number of the agency created the PNR
     * @return string 'CreatingAgencyIATA'
     */
    const VALUE_CREATING_AGENCY_IATA = 'CreatingAgencyIATA';
    /**
     * Constant for value 'PrepaidTicketAdviceIndicator'
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether Prepaid Ticket Advice is attached to PNR
     * @return string 'PrepaidTicketAdviceIndicator'
     */
    const VALUE_PREPAID_TICKET_ADVICE_INDICATOR = 'PrepaidTicketAdviceIndicator';
    /**
     * Constant for value 'BFBorrowed'
     * Meta information extracted from the WSDL
     * - documentation: Indicates the current PNR as borrowed
     * @return string 'BFBorrowed'
     */
    const VALUE_BFBORROWED = 'BFBorrowed';
    /**
     * Constant for value 'GlobalPNR'
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether current PNR is Global PNR
     * @return string 'GlobalPNR'
     */
    const VALUE_GLOBAL_PNR = 'GlobalPNR';
    /**
     * Constant for value 'ReadOnlyPNR'
     * Meta information extracted from the WSDL
     * - documentation: Indicates PNR as read only
     * @return string 'ReadOnlyPNR'
     */
    const VALUE_READ_ONLY_PNR = 'ReadOnlyPNR';
    /**
     * Constant for value 'PastDateQuickRetrievedPNR'
     * Meta information extracted from the WSDL
     * - documentation: Indicates PNR retrieved from offline archival process
     * @return string 'PastDateQuickRetrievedPNR'
     */
    const VALUE_PAST_DATE_QUICK_RETRIEVED_PNR = 'PastDateQuickRetrievedPNR';
    /**
     * Constant for value 'SuperPNR'
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether current PNR is Super PNR
     * @return string 'SuperPNR'
     */
    const VALUE_SUPER_PNR = 'SuperPNR';
    /**
     * Constant for value 'PNRPurgeDate'
     * Meta information extracted from the WSDL
     * - documentation: Purge date of the PNR
     * @return string 'PNRPurgeDate'
     */
    const VALUE_PNRPURGE_DATE = 'PNRPurgeDate';
    /**
     * Constant for value 'OriginalReceivedFieldValue'
     * Meta information extracted from the WSDL
     * - documentation: The original data in the received field
     * @return string 'OriginalReceivedFieldValue'
     */
    const VALUE_ORIGINAL_RECEIVED_FIELD_VALUE = 'OriginalReceivedFieldValue';
    /**
     * Constant for value 'DivPsgrName'
     * Meta information extracted from the WSDL
     * - documentation: Passenger Name in a divided PNR
     * @return string 'DivPsgrName'
     */
    const VALUE_DIV_PSGR_NAME = 'DivPsgrName';
    /**
     * Constant for value 'TruncInd'
     * Meta information extracted from the WSDL
     * - documentation: Indicator for Truncated names
     * @return string 'TruncInd'
     */
    const VALUE_TRUNC_IND = 'TruncInd';
    /**
     * Constant for value 'DivTypeInd'
     * Meta information extracted from the WSDL
     * - documentation: Divide Type Indicator if it pertains to child or parent booking
     * @return string 'DivTypeInd'
     */
    const VALUE_DIV_TYPE_IND = 'DivTypeInd';
    /**
     * Constant for value 'RLoc'
     * Meta information extracted from the WSDL
     * - documentation: Record Locator of parent or child booking
     * @return string 'RLoc'
     */
    const VALUE_RLOC = 'RLoc';
    /**
     * Constant for value 'DivDt'
     * Meta information extracted from the WSDL
     * - documentation: Date of divide action
     * @return string 'DivDt'
     */
    const VALUE_DIV_DT = 'DivDt';
    /**
     * Constant for value 'DivTm'
     * Meta information extracted from the WSDL
     * - documentation: Time of day of divide action
     * @return string 'DivTm'
     */
    const VALUE_DIV_TM = 'DivTm';
    /**
     * Constant for value 'TravelOrder'
     * Meta information extracted from the WSDL
     * - documentation: Travel order of the segment
     * @return string 'TravelOrder'
     */
    const VALUE_TRAVEL_ORDER = 'TravelOrder';
    /**
     * Constant for value 'SegmentStatus'
     * Meta information extracted from the WSDL
     * - documentation: Status of associated segment
     * @return string 'SegmentStatus'
     */
    const VALUE_SEGMENT_STATUS = 'SegmentStatus';
    /**
     * Constant for value 'StartDate'
     * Meta information extracted from the WSDL
     * - documentation: Date of departure of the rail segment
     * @return string 'StartDate'
     */
    const VALUE_START_DATE = 'StartDate';
    /**
     * Constant for value 'DayChange'
     * Meta information extracted from the WSDL
     * - documentation: Indicates arrival date as number of days before or after departure date
     * @return string 'DayChange'
     */
    const VALUE_DAY_CHANGE = 'DayChange';
    /**
     * Constant for value 'Vendor'
     * Meta information extracted from the WSDL
     * - documentation: Vendor code of the segment
     * @return string 'Vendor'
     */
    const VALUE_VENDOR = 'Vendor';
    /**
     * Constant for value 'StartTime'
     * Meta information extracted from the WSDL
     * - documentation: Start Time of the segment
     * @return string 'StartTime'
     */
    const VALUE_START_TIME = 'StartTime';
    /**
     * Constant for value 'EndTime'
     * Meta information extracted from the WSDL
     * - documentation: End Time of the segment
     * @return string 'EndTime'
     */
    const VALUE_END_TIME = 'EndTime';
    /**
     * Constant for value 'BookingCode'
     * Meta information extracted from the WSDL
     * - documentation: The booking code of the rail segment seating area
     * @return string 'BookingCode'
     */
    const VALUE_BOOKING_CODE = 'BookingCode';
    /**
     * Constant for value 'TrainNumber'
     * Meta information extracted from the WSDL
     * - documentation: Denotes Train number
     * @return string 'TrainNumber'
     */
    const VALUE_TRAIN_NUMBER = 'TrainNumber';
    /**
     * Constant for value 'NumberOfSeats'
     * Meta information extracted from the WSDL
     * - documentation: Number of seats sold for the trip
     * @return string 'NumberOfSeats'
     */
    const VALUE_NUMBER_OF_SEATS = 'NumberOfSeats';
    /**
     * Constant for value 'SellType'
     * Meta information extracted from the WSDL
     * - documentation: The mode of selling the segment
     * @return string 'SellType'
     */
    const VALUE_SELL_TYPE = 'SellType';
    /**
     * Constant for value 'TariffType'
     * Meta information extracted from the WSDL
     * - documentation: Type of Tariff for the segment
     * @return string 'TariffType'
     */
    const VALUE_TARIFF_TYPE = 'TariffType';
    /**
     * Constant for value 'ConfirmationNumber'
     * Meta information extracted from the WSDL
     * - documentation: The confirmation number of the segment
     * @return string 'ConfirmationNumber'
     */
    const VALUE_CONFIRMATION_NUMBER = 'ConfirmationNumber';
    /**
     * Constant for value 'BoardingInformation'
     * Meta information extracted from the WSDL
     * - documentation: Information related to boarding point of the segment
     * @return string 'BoardingInformation'
     */
    const VALUE_BOARDING_INFORMATION = 'BoardingInformation';
    /**
     * Constant for value 'ArrivalInformation'
     * Meta information extracted from the WSDL
     * - documentation: Information related to arrival point of the segment
     * @return string 'ArrivalInformation'
     */
    const VALUE_ARRIVAL_INFORMATION = 'ArrivalInformation';
    /**
     * Constant for value 'Text'
     * Meta information extracted from the WSDL
     * - documentation: Additional information
     * @return string 'Text'
     */
    const VALUE_TEXT = 'Text';
    /**
     * Return allowed values
     * @uses self::VALUE_OWNING_AGENCY_PCC
     * @uses self::VALUE_CREATING_AGENT_SIGN_ON
     * @uses self::VALUE_CREATING_AGENT_DUTY
     * @uses self::VALUE_CREATING_AGENCY_IATA
     * @uses self::VALUE_PREPAID_TICKET_ADVICE_INDICATOR
     * @uses self::VALUE_BFBORROWED
     * @uses self::VALUE_GLOBAL_PNR
     * @uses self::VALUE_READ_ONLY_PNR
     * @uses self::VALUE_PAST_DATE_QUICK_RETRIEVED_PNR
     * @uses self::VALUE_SUPER_PNR
     * @uses self::VALUE_PNRPURGE_DATE
     * @uses self::VALUE_ORIGINAL_RECEIVED_FIELD_VALUE
     * @uses self::VALUE_DIV_PSGR_NAME
     * @uses self::VALUE_TRUNC_IND
     * @uses self::VALUE_DIV_TYPE_IND
     * @uses self::VALUE_RLOC
     * @uses self::VALUE_DIV_DT
     * @uses self::VALUE_DIV_TM
     * @uses self::VALUE_TRAVEL_ORDER
     * @uses self::VALUE_SEGMENT_STATUS
     * @uses self::VALUE_START_DATE
     * @uses self::VALUE_DAY_CHANGE
     * @uses self::VALUE_VENDOR
     * @uses self::VALUE_START_TIME
     * @uses self::VALUE_END_TIME
     * @uses self::VALUE_BOOKING_CODE
     * @uses self::VALUE_TRAIN_NUMBER
     * @uses self::VALUE_NUMBER_OF_SEATS
     * @uses self::VALUE_SELL_TYPE
     * @uses self::VALUE_TARIFF_TYPE
     * @uses self::VALUE_CONFIRMATION_NUMBER
     * @uses self::VALUE_BOARDING_INFORMATION
     * @uses self::VALUE_ARRIVAL_INFORMATION
     * @uses self::VALUE_TEXT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_OWNING_AGENCY_PCC,
            self::VALUE_CREATING_AGENT_SIGN_ON,
            self::VALUE_CREATING_AGENT_DUTY,
            self::VALUE_CREATING_AGENCY_IATA,
            self::VALUE_PREPAID_TICKET_ADVICE_INDICATOR,
            self::VALUE_BFBORROWED,
            self::VALUE_GLOBAL_PNR,
            self::VALUE_READ_ONLY_PNR,
            self::VALUE_PAST_DATE_QUICK_RETRIEVED_PNR,
            self::VALUE_SUPER_PNR,
            self::VALUE_PNRPURGE_DATE,
            self::VALUE_ORIGINAL_RECEIVED_FIELD_VALUE,
            self::VALUE_DIV_PSGR_NAME,
            self::VALUE_TRUNC_IND,
            self::VALUE_DIV_TYPE_IND,
            self::VALUE_RLOC,
            self::VALUE_DIV_DT,
            self::VALUE_DIV_TM,
            self::VALUE_TRAVEL_ORDER,
            self::VALUE_SEGMENT_STATUS,
            self::VALUE_START_DATE,
            self::VALUE_DAY_CHANGE,
            self::VALUE_VENDOR,
            self::VALUE_START_TIME,
            self::VALUE_END_TIME,
            self::VALUE_BOOKING_CODE,
            self::VALUE_TRAIN_NUMBER,
            self::VALUE_NUMBER_OF_SEATS,
            self::VALUE_SELL_TYPE,
            self::VALUE_TARIFF_TYPE,
            self::VALUE_CONFIRMATION_NUMBER,
            self::VALUE_BOARDING_INFORMATION,
            self::VALUE_ARRIVAL_INFORMATION,
            self::VALUE_TEXT,
        ];
    }
}
