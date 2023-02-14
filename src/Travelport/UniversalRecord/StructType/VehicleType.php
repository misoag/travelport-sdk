<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleType StructType
 * Meta information extracted from the WSDL
 * - documentation: A standard list or classification of vehicle types .
 * @subpackage Structs
 */
class VehicleType extends \Travelport\UniversalRecord\EnumType\TypeVehicleTypes
{
    /**
     * The _
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * Constructor method for VehicleType
     * @uses VehicleType::set_()
     * @param string $_
     */
    public function __construct(?string $_ = null)
    {
        $this
            ->set_($_);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_(): ?string
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @uses \Travelport\UniversalRecord\EnumType\TypeVehicleTypes::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeVehicleTypes::getValidValues()
     * @throws InvalidArgumentException
     * @param string $_
     * @return \Travelport\UniversalRecord\StructType\VehicleType
     */
    public function set_(?string $_ = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeVehicleTypes::valueIsValid($_)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeVehicleTypes', is_array($_) ? implode(', ', $_) : var_export($_, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeVehicleTypes::getValidValues())), __LINE__);
        }
        $this->_ = $_;
        
        return $this;
    }
}
