<?php

declare(strict_types=1);

namespace Travelport\Util\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeDestinationCode EnumType
 * Meta information extracted from the WSDL
 * - documentation: List of valid Destination Codes.
 * @subpackage Enumerations
 */
class TypeDestinationCode extends AbstractStructEnumBase
{
    /**
     * Constant for value 'MexicoCostRicaCentralAmerica'
     * Meta information extracted from the WSDL
     * - documentation: Mexico/Central America/Canal Zone/Costa Rica
     * @return string 'MexicoCostRicaCentralAmerica'
     */
    const VALUE_MEXICO_COST_RICA_CENTRAL_AMERICA = 'MexicoCostRicaCentralAmerica';
    /**
     * Constant for value 'Caribbean'
     * Meta information extracted from the WSDL
     * - documentation: Island and Countries of The Caribbean
     * @return string 'Caribbean'
     */
    const VALUE_CARIBBEAN = 'Caribbean';
    /**
     * Constant for value 'SouthAmerica'
     * Meta information extracted from the WSDL
     * - documentation: South America
     * @return string 'SouthAmerica'
     */
    const VALUE_SOUTH_AMERICA = 'SouthAmerica';
    /**
     * Constant for value 'Europe'
     * Meta information extracted from the WSDL
     * - documentation: Europe
     * @return string 'Europe'
     */
    const VALUE_EUROPE = 'Europe';
    /**
     * Constant for value 'Africa'
     * Meta information extracted from the WSDL
     * - documentation: Africa
     * @return string 'Africa'
     */
    const VALUE_AFRICA = 'Africa';
    /**
     * Constant for value 'MiddleEastWesternAsia'
     * Meta information extracted from the WSDL
     * - documentation: Middle East/Western Asia
     * @return string 'MiddleEastWesternAsia'
     */
    const VALUE_MIDDLE_EAST_WESTERN_ASIA = 'MiddleEastWesternAsia';
    /**
     * Constant for value 'Asia'
     * Meta information extracted from the WSDL
     * - documentation: Asia
     * @return string 'Asia'
     */
    const VALUE_ASIA = 'Asia';
    /**
     * Constant for value 'AustraliaNewZealandPacificIslands'
     * Meta information extracted from the WSDL
     * - documentation: Australia/New Zealand/Pacific Islands
     * @return string 'AustraliaNewZealandPacificIslands'
     */
    const VALUE_AUSTRALIA_NEW_ZEALAND_PACIFIC_ISLANDS = 'AustraliaNewZealandPacificIslands';
    /**
     * Constant for value 'CanadaGreenland'
     * Meta information extracted from the WSDL
     * - documentation: Canada and Greenland
     * @return string 'CanadaGreenland'
     */
    const VALUE_CANADA_GREENLAND = 'CanadaGreenland';
    /**
     * Constant for value 'USA'
     * Meta information extracted from the WSDL
     * - documentation: United States of America
     * @return string 'USA'
     */
    const VALUE_USA = 'USA';
    /**
     * Return allowed values
     * @uses self::VALUE_MEXICO_COST_RICA_CENTRAL_AMERICA
     * @uses self::VALUE_CARIBBEAN
     * @uses self::VALUE_SOUTH_AMERICA
     * @uses self::VALUE_EUROPE
     * @uses self::VALUE_AFRICA
     * @uses self::VALUE_MIDDLE_EAST_WESTERN_ASIA
     * @uses self::VALUE_ASIA
     * @uses self::VALUE_AUSTRALIA_NEW_ZEALAND_PACIFIC_ISLANDS
     * @uses self::VALUE_CANADA_GREENLAND
     * @uses self::VALUE_USA
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MEXICO_COST_RICA_CENTRAL_AMERICA,
            self::VALUE_CARIBBEAN,
            self::VALUE_SOUTH_AMERICA,
            self::VALUE_EUROPE,
            self::VALUE_AFRICA,
            self::VALUE_MIDDLE_EAST_WESTERN_ASIA,
            self::VALUE_ASIA,
            self::VALUE_AUSTRALIA_NEW_ZEALAND_PACIFIC_ISLANDS,
            self::VALUE_CANADA_GREENLAND,
            self::VALUE_USA,
        ];
    }
}
