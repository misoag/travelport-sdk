<?php

declare(strict_types=1);

namespace Travelport\Util\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeATPCOGlobalIndicator EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumeration of ATPCO global indicators
 * @subpackage Enumerations
 */
class TypeATPCOGlobalIndicator extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AL'
     * Meta information extracted from the WSDL
     * - documentation: FareByRule -- All fares incl. EH/TS
     * @return string 'AL'
     */
    const VALUE_AL = 'AL';
    /**
     * Constant for value 'AP'
     * Meta information extracted from the WSDL
     * - documentation: Via Atlantic Pacific
     * @return string 'AP'
     */
    const VALUE_AP = 'AP';
    /**
     * Constant for value 'AT'
     * Meta information extracted from the WSDL
     * - documentation: Via Atlantic
     * @return string 'AT'
     */
    const VALUE_AT = 'AT';
    /**
     * Constant for value 'CA'
     * Meta information extracted from the WSDL
     * - documentation: Within Canada.
     * @return string 'CA'
     */
    const VALUE_CA = 'CA';
    /**
     * Constant for value 'CT'
     * Meta information extracted from the WSDL
     * - documentation: Circle trip.
     * @return string 'CT'
     */
    const VALUE_CT = 'CT';
    /**
     * Constant for value 'EH'
     * Meta information extracted from the WSDL
     * - documentation: Within Eastern Hemisphere
     * @return string 'EH'
     */
    const VALUE_EH = 'EH';
    /**
     * Constant for value 'FE'
     * Meta information extracted from the WSDL
     * - documentation: Far East
     * @return string 'FE'
     */
    const VALUE_FE = 'FE';
    /**
     * Constant for value 'IN'
     * Meta information extracted from the WSDL
     * - documentation: FareByRule - For int'l incl. AT/PA/WH/CT/RW
     * @return string 'IN'
     */
    const VALUE_IN = 'IN';
    /**
     * Constant for value 'NA'
     * Meta information extracted from the WSDL
     * - documentation: FareByRule for North America incl US/CA/TB/PV
     * @return string 'NA'
     */
    const VALUE_NA = 'NA';
    /**
     * Constant for value 'PA'
     * Meta information extracted from the WSDL
     * - documentation: Via Pacific
     * @return string 'PA'
     */
    const VALUE_PA = 'PA';
    /**
     * Constant for value 'PN'
     * Meta information extracted from the WSDL
     * - documentation: Via Pacific and via North America
     * @return string 'PN'
     */
    const VALUE_PN = 'PN';
    /**
     * Constant for value 'PO'
     * Meta information extracted from the WSDL
     * - documentation: Via Polar Route.
     * @return string 'PO'
     */
    const VALUE_PO = 'PO';
    /**
     * Constant for value 'RU'
     * Meta information extracted from the WSDL
     * - documentation: Russia - Area 3
     * @return string 'RU'
     */
    const VALUE_RU = 'RU';
    /**
     * Constant for value 'RW'
     * Meta information extracted from the WSDL
     * - documentation: Round The World.
     * @return string 'RW'
     */
    const VALUE_RW = 'RW';
    /**
     * Constant for value 'SA'
     * Meta information extracted from the WSDL
     * - documentation: South Atlantic only
     * @return string 'SA'
     */
    const VALUE_SA = 'SA';
    /**
     * Constant for value 'SP'
     * Meta information extracted from the WSDL
     * - documentation: Via South Polar Route
     * @return string 'SP'
     */
    const VALUE_SP = 'SP';
    /**
     * Constant for value 'TB'
     * Meta information extracted from the WSDL
     * - documentation: Trans-border
     * @return string 'TB'
     */
    const VALUE_TB = 'TB';
    /**
     * Constant for value 'TS'
     * Meta information extracted from the WSDL
     * - documentation: Via Siberia.
     * @return string 'TS'
     */
    const VALUE_TS = 'TS';
    /**
     * Constant for value 'US'
     * Meta information extracted from the WSDL
     * - documentation: Within the United States.
     * @return string 'US'
     */
    const VALUE_US = 'US';
    /**
     * Constant for value 'WH'
     * Meta information extracted from the WSDL
     * - documentation: Within Western Hemisphere
     * @return string 'WH'
     */
    const VALUE_WH = 'WH';
    /**
     * Constant for value 'ZZ'
     * Meta information extracted from the WSDL
     * - documentation: Any Global
     * @return string 'ZZ'
     */
    const VALUE_ZZ = 'ZZ';
    /**
     * Return allowed values
     * @uses self::VALUE_AL
     * @uses self::VALUE_AP
     * @uses self::VALUE_AT
     * @uses self::VALUE_CA
     * @uses self::VALUE_CT
     * @uses self::VALUE_EH
     * @uses self::VALUE_FE
     * @uses self::VALUE_IN
     * @uses self::VALUE_NA
     * @uses self::VALUE_PA
     * @uses self::VALUE_PN
     * @uses self::VALUE_PO
     * @uses self::VALUE_RU
     * @uses self::VALUE_RW
     * @uses self::VALUE_SA
     * @uses self::VALUE_SP
     * @uses self::VALUE_TB
     * @uses self::VALUE_TS
     * @uses self::VALUE_US
     * @uses self::VALUE_WH
     * @uses self::VALUE_ZZ
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AL,
            self::VALUE_AP,
            self::VALUE_AT,
            self::VALUE_CA,
            self::VALUE_CT,
            self::VALUE_EH,
            self::VALUE_FE,
            self::VALUE_IN,
            self::VALUE_NA,
            self::VALUE_PA,
            self::VALUE_PN,
            self::VALUE_PO,
            self::VALUE_RU,
            self::VALUE_RW,
            self::VALUE_SA,
            self::VALUE_SP,
            self::VALUE_TB,
            self::VALUE_TS,
            self::VALUE_US,
            self::VALUE_WH,
            self::VALUE_ZZ,
        ];
    }
}
