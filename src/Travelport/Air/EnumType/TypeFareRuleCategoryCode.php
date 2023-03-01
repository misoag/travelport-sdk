<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeFareRuleCategoryCode EnumType
 * Meta information extracted from the WSDL
 * - documentation: Kestrel Long Fare Rule Category Codes
 * @subpackage Enumerations
 */
class TypeFareRuleCategoryCode extends AbstractStructEnumBase
{
    /**
     * Constant for value 'APP'
     * Meta information extracted from the WSDL
     * - documentation: Rule App/Other Conditions
     * @return string 'APP'
     */
    const VALUE_APP = 'APP';
    /**
     * Constant for value 'WHO'
     * Meta information extracted from the WSDL
     * - documentation: Eligibility
     * @return string 'WHO'
     */
    const VALUE_WHO = 'WHO';
    /**
     * Constant for value 'DAY'
     * Meta information extracted from the WSDL
     * - documentation: Day/Time
     * @return string 'DAY'
     */
    const VALUE_DAY = 'DAY';
    /**
     * Constant for value 'SEA'
     * Meta information extracted from the WSDL
     * - documentation: Seasonal
     * @return string 'SEA'
     */
    const VALUE_SEA = 'SEA';
    /**
     * Constant for value 'FLT'
     * Meta information extracted from the WSDL
     * - documentation: Flight App
     * @return string 'FLT'
     */
    const VALUE_FLT = 'FLT';
    /**
     * Constant for value 'ADV'
     * Meta information extracted from the WSDL
     * - documentation: Advance Res/Tkt
     * @return string 'ADV'
     */
    const VALUE_ADV = 'ADV';
    /**
     * Constant for value 'MIN'
     * Meta information extracted from the WSDL
     * - documentation: Minimum Stay
     * @return string 'MIN'
     */
    const VALUE_MIN = 'MIN';
    /**
     * Constant for value 'MAX'
     * Meta information extracted from the WSDL
     * - documentation: Maximum Stay
     * @return string 'MAX'
     */
    const VALUE_MAX = 'MAX';
    /**
     * Constant for value 'STP'
     * Meta information extracted from the WSDL
     * - documentation: Stopovers
     * @return string 'STP'
     */
    const VALUE_STP = 'STP';
    /**
     * Constant for value 'TRF'
     * Meta information extracted from the WSDL
     * - documentation: Transfers/Routing
     * @return string 'TRF'
     */
    const VALUE_TRF = 'TRF';
    /**
     * Constant for value 'CMB'
     * Meta information extracted from the WSDL
     * - documentation: Combinability
     * @return string 'CMB'
     */
    const VALUE_CMB = 'CMB';
    /**
     * Constant for value 'BLA'
     * Meta information extracted from the WSDL
     * - documentation: Blackouts
     * @return string 'BLA'
     */
    const VALUE_BLA = 'BLA';
    /**
     * Constant for value 'SUR'
     * Meta information extracted from the WSDL
     * - documentation: Surcharges
     * @return string 'SUR'
     */
    const VALUE_SUR = 'SUR';
    /**
     * Constant for value 'ACC'
     * Meta information extracted from the WSDL
     * - documentation: Accompanied
     * @return string 'ACC'
     */
    const VALUE_ACC = 'ACC';
    /**
     * Constant for value 'TVL'
     * Meta information extracted from the WSDL
     * - documentation: Travel Restrictions
     * @return string 'TVL'
     */
    const VALUE_TVL = 'TVL';
    /**
     * Constant for value 'TKT'
     * Meta information extracted from the WSDL
     * - documentation: Sales Restrictions
     * @return string 'TKT'
     */
    const VALUE_TKT = 'TKT';
    /**
     * Constant for value 'CHG'
     * Meta information extracted from the WSDL
     * - documentation: Penalties
     * @return string 'CHG'
     */
    const VALUE_CHG = 'CHG';
    /**
     * Constant for value 'HIP'
     * Meta information extracted from the WSDL
     * - documentation: HIP and Mileage Exceptions
     * @return string 'HIP'
     */
    const VALUE_HIP = 'HIP';
    /**
     * Constant for value 'END'
     * Meta information extracted from the WSDL
     * - documentation: Ticket Endorsements
     * @return string 'END'
     */
    const VALUE_END = 'END';
    /**
     * Constant for value 'CHD'
     * Meta information extracted from the WSDL
     * - documentation: Children"s Discounts
     * @return string 'CHD'
     */
    const VALUE_CHD = 'CHD';
    /**
     * Constant for value 'TUC'
     * Meta information extracted from the WSDL
     * - documentation: Tour Conductor Disc
     * @return string 'TUC'
     */
    const VALUE_TUC = 'TUC';
    /**
     * Constant for value 'AGT'
     * Meta information extracted from the WSDL
     * - documentation: Agent Discounts
     * @return string 'AGT'
     */
    const VALUE_AGT = 'AGT';
    /**
     * Constant for value 'DSC'
     * Meta information extracted from the WSDL
     * - documentation: All Other Disc
     * @return string 'DSC'
     */
    const VALUE_DSC = 'DSC';
    /**
     * Constant for value 'MIS'
     * Meta information extracted from the WSDL
     * - documentation: Misc Fare Tags
     * @return string 'MIS'
     */
    const VALUE_MIS = 'MIS';
    /**
     * Constant for value 'FBR'
     * Meta information extracted from the WSDL
     * - documentation: Fare By Rule
     * @return string 'FBR'
     */
    const VALUE_FBR = 'FBR';
    /**
     * Constant for value 'GRP'
     * Meta information extracted from the WSDL
     * - documentation: Groups
     * @return string 'GRP'
     */
    const VALUE_GRP = 'GRP';
    /**
     * Constant for value 'TUR'
     * Meta information extracted from the WSDL
     * - documentation: Tours
     * @return string 'TUR'
     */
    const VALUE_TUR = 'TUR';
    /**
     * Constant for value 'VAC'
     * Meta information extracted from the WSDL
     * - documentation: Visit Another Country
     * @return string 'VAC'
     */
    const VALUE_VAC = 'VAC';
    /**
     * Constant for value 'DEP'
     * Meta information extracted from the WSDL
     * - documentation: Deposits
     * @return string 'DEP'
     */
    const VALUE_DEP = 'DEP';
    /**
     * Constant for value 'VOL'
     * Meta information extracted from the WSDL
     * - documentation: Voluntary Changes
     * @return string 'VOL'
     */
    const VALUE_VOL = 'VOL';
    /**
     * Constant for value 'IVE'
     * Meta information extracted from the WSDL
     * - documentation: Involuntary Exchanges
     * @return string 'IVE'
     */
    const VALUE_IVE = 'IVE';
    /**
     * Constant for value 'VOR'
     * Meta information extracted from the WSDL
     * - documentation: Voluntary Refunds
     * @return string 'VOR'
     */
    const VALUE_VOR = 'VOR';
    /**
     * Constant for value 'IVR'
     * Meta information extracted from the WSDL
     * - documentation: Involuntary Refunds
     * @return string 'IVR'
     */
    const VALUE_IVR = 'IVR';
    /**
     * Constant for value 'NET'
     * Meta information extracted from the WSDL
     * - documentation: Negotiated Fares
     * @return string 'NET'
     */
    const VALUE_NET = 'NET';
    /**
     * Constant for value 'OTH'
     * Meta information extracted from the WSDL
     * - documentation: Other
     * @return string 'OTH'
     */
    const VALUE_OTH = 'OTH';
    /**
     * Return allowed values
     * @uses self::VALUE_APP
     * @uses self::VALUE_WHO
     * @uses self::VALUE_DAY
     * @uses self::VALUE_SEA
     * @uses self::VALUE_FLT
     * @uses self::VALUE_ADV
     * @uses self::VALUE_MIN
     * @uses self::VALUE_MAX
     * @uses self::VALUE_STP
     * @uses self::VALUE_TRF
     * @uses self::VALUE_CMB
     * @uses self::VALUE_BLA
     * @uses self::VALUE_SUR
     * @uses self::VALUE_ACC
     * @uses self::VALUE_TVL
     * @uses self::VALUE_TKT
     * @uses self::VALUE_CHG
     * @uses self::VALUE_HIP
     * @uses self::VALUE_END
     * @uses self::VALUE_CHD
     * @uses self::VALUE_TUC
     * @uses self::VALUE_AGT
     * @uses self::VALUE_DSC
     * @uses self::VALUE_MIS
     * @uses self::VALUE_FBR
     * @uses self::VALUE_GRP
     * @uses self::VALUE_TUR
     * @uses self::VALUE_VAC
     * @uses self::VALUE_DEP
     * @uses self::VALUE_VOL
     * @uses self::VALUE_IVE
     * @uses self::VALUE_VOR
     * @uses self::VALUE_IVR
     * @uses self::VALUE_NET
     * @uses self::VALUE_OTH
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_APP,
            self::VALUE_WHO,
            self::VALUE_DAY,
            self::VALUE_SEA,
            self::VALUE_FLT,
            self::VALUE_ADV,
            self::VALUE_MIN,
            self::VALUE_MAX,
            self::VALUE_STP,
            self::VALUE_TRF,
            self::VALUE_CMB,
            self::VALUE_BLA,
            self::VALUE_SUR,
            self::VALUE_ACC,
            self::VALUE_TVL,
            self::VALUE_TKT,
            self::VALUE_CHG,
            self::VALUE_HIP,
            self::VALUE_END,
            self::VALUE_CHD,
            self::VALUE_TUC,
            self::VALUE_AGT,
            self::VALUE_DSC,
            self::VALUE_MIS,
            self::VALUE_FBR,
            self::VALUE_GRP,
            self::VALUE_TUR,
            self::VALUE_VAC,
            self::VALUE_DEP,
            self::VALUE_VOL,
            self::VALUE_IVE,
            self::VALUE_VOR,
            self::VALUE_IVR,
            self::VALUE_NET,
            self::VALUE_OTH,
        ];
    }
}
