<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeProfileType EnumType
 * Meta information extracted from the WSDL
 * - documentation: A type for unique party identifiers of any party role.
 * @subpackage Enumerations
 */
class TypeProfileType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AgencyGroup'
     * @return string 'AgencyGroup'
     */
    const VALUE_AGENCY_GROUP = 'AgencyGroup';
    /**
     * Constant for value 'Agency'
     * @return string 'Agency'
     */
    const VALUE_AGENCY = 'Agency';
    /**
     * Constant for value 'BranchGroup'
     * @return string 'BranchGroup'
     */
    const VALUE_BRANCH_GROUP = 'BranchGroup';
    /**
     * Constant for value 'Branch'
     * @return string 'Branch'
     */
    const VALUE_BRANCH = 'Branch';
    /**
     * Constant for value 'Agent'
     * @return string 'Agent'
     */
    const VALUE_AGENT = 'Agent';
    /**
     * Constant for value 'Account'
     * @return string 'Account'
     */
    const VALUE_ACCOUNT = 'Account';
    /**
     * Constant for value 'TravelerGroup'
     * @return string 'TravelerGroup'
     */
    const VALUE_TRAVELER_GROUP = 'TravelerGroup';
    /**
     * Constant for value 'Traveler'
     * @return string 'Traveler'
     */
    const VALUE_TRAVELER = 'Traveler';
    /**
     * Return allowed values
     * @uses self::VALUE_AGENCY_GROUP
     * @uses self::VALUE_AGENCY
     * @uses self::VALUE_BRANCH_GROUP
     * @uses self::VALUE_BRANCH
     * @uses self::VALUE_AGENT
     * @uses self::VALUE_ACCOUNT
     * @uses self::VALUE_TRAVELER_GROUP
     * @uses self::VALUE_TRAVELER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AGENCY_GROUP,
            self::VALUE_AGENCY,
            self::VALUE_BRANCH_GROUP,
            self::VALUE_BRANCH,
            self::VALUE_AGENT,
            self::VALUE_ACCOUNT,
            self::VALUE_TRAVELER_GROUP,
            self::VALUE_TRAVELER,
        ];
    }
}
