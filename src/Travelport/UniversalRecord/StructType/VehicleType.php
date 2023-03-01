<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?string $_ = null;
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
     * @param string $_
     * @return \Travelport\UniversalRecord\StructType\VehicleType
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
        return $this;
    }
}
