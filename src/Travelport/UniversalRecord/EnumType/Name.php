<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for Name EnumType
 * Meta information extracted from the WSDL
 * - documentation: The name of the required field
 * @subpackage Enumerations
 */
class Name extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CardType'
     * @return string 'CardType'
     */
    const VALUE_CARD_TYPE = 'CardType';
    /**
     * Constant for value 'Number'
     * @return string 'Number'
     */
    const VALUE_NUMBER = 'Number';
    /**
     * Constant for value 'CustomerReference'
     * @return string 'CustomerReference'
     */
    const VALUE_CUSTOMER_REFERENCE = 'CustomerReference';
    /**
     * Constant for value 'IssueNumber'
     * @return string 'IssueNumber'
     */
    const VALUE_ISSUE_NUMBER = 'IssueNumber';
    /**
     * Constant for value 'StartDate'
     * @return string 'StartDate'
     */
    const VALUE_START_DATE = 'StartDate';
    /**
     * Constant for value 'NameOnCard'
     * @return string 'NameOnCard'
     */
    const VALUE_NAME_ON_CARD = 'NameOnCard';
    /**
     * Constant for value 'ExpirationDate'
     * @return string 'ExpirationDate'
     */
    const VALUE_EXPIRATION_DATE = 'ExpirationDate';
    /**
     * Constant for value 'CVV'
     * @return string 'CVV'
     */
    const VALUE_CVV = 'CVV';
    /**
     * Constant for value 'AddressLine1'
     * @return string 'AddressLine1'
     */
    const VALUE_ADDRESS_LINE_1 = 'AddressLine1';
    /**
     * Constant for value 'AddressLine2'
     * @return string 'AddressLine2'
     */
    const VALUE_ADDRESS_LINE_2 = 'AddressLine2';
    /**
     * Constant for value 'City'
     * @return string 'City'
     */
    const VALUE_CITY = 'City';
    /**
     * Constant for value 'State'
     * @return string 'State'
     */
    const VALUE_STATE = 'State';
    /**
     * Constant for value 'PostalCode'
     * @return string 'PostalCode'
     */
    const VALUE_POSTAL_CODE = 'PostalCode';
    /**
     * Return allowed values
     * @uses self::VALUE_CARD_TYPE
     * @uses self::VALUE_NUMBER
     * @uses self::VALUE_CUSTOMER_REFERENCE
     * @uses self::VALUE_ISSUE_NUMBER
     * @uses self::VALUE_START_DATE
     * @uses self::VALUE_NAME_ON_CARD
     * @uses self::VALUE_EXPIRATION_DATE
     * @uses self::VALUE_CVV
     * @uses self::VALUE_ADDRESS_LINE_1
     * @uses self::VALUE_ADDRESS_LINE_2
     * @uses self::VALUE_CITY
     * @uses self::VALUE_STATE
     * @uses self::VALUE_POSTAL_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CARD_TYPE,
            self::VALUE_NUMBER,
            self::VALUE_CUSTOMER_REFERENCE,
            self::VALUE_ISSUE_NUMBER,
            self::VALUE_START_DATE,
            self::VALUE_NAME_ON_CARD,
            self::VALUE_EXPIRATION_DATE,
            self::VALUE_CVV,
            self::VALUE_ADDRESS_LINE_1,
            self::VALUE_ADDRESS_LINE_2,
            self::VALUE_CITY,
            self::VALUE_STATE,
            self::VALUE_POSTAL_CODE,
        ];
    }
}
