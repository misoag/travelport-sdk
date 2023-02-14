<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeResidency EnumType
 * Meta information extracted from the WSDL
 * - documentation: The passenger residency type.Residence Type can be Employee, National or Resident
 * @subpackage Enumerations
 */
class TypeResidency extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Employee'
     * @return string 'Employee'
     */
    const VALUE_EMPLOYEE = 'Employee';
    /**
     * Constant for value 'National'
     * @return string 'National'
     */
    const VALUE_NATIONAL = 'National';
    /**
     * Constant for value 'Resident'
     * @return string 'Resident'
     */
    const VALUE_RESIDENT = 'Resident';
    /**
     * Return allowed values
     * @uses self::VALUE_EMPLOYEE
     * @uses self::VALUE_NATIONAL
     * @uses self::VALUE_RESIDENT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EMPLOYEE,
            self::VALUE_NATIONAL,
            self::VALUE_RESIDENT,
        ];
    }
}
