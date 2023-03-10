<?php

declare(strict_types=1);

namespace Travelport\Hotel\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeAgencyProfileLevel EnumType
 * Meta information extracted from the WSDL
 * - documentation: Profile levels in the Agency Hierarchy.
 * @subpackage Enumerations
 */
class TypeAgencyProfileLevel extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Agency'
     * @return string 'Agency'
     */
    const VALUE_AGENCY = 'Agency';
    /**
     * Constant for value 'Branch'
     * @return string 'Branch'
     */
    const VALUE_BRANCH = 'Branch';
    /**
     * Constant for value 'BranchGroup'
     * @return string 'BranchGroup'
     */
    const VALUE_BRANCH_GROUP = 'BranchGroup';
    /**
     * Constant for value 'Agent'
     * @return string 'Agent'
     */
    const VALUE_AGENT = 'Agent';
    /**
     * Return allowed values
     * @uses self::VALUE_AGENCY
     * @uses self::VALUE_BRANCH
     * @uses self::VALUE_BRANCH_GROUP
     * @uses self::VALUE_AGENT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AGENCY,
            self::VALUE_BRANCH,
            self::VALUE_BRANCH_GROUP,
            self::VALUE_AGENT,
        ];
    }
}
