<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleReturnDateLocation StructType
 * Meta information extracted from the WSDL
 * - documentation: Used to update Return Location and Return Date of existing Vehicle Booking. Modify operation : Only modification of ReturnDateTime is supported. Deletion of ReturnDateTime is not supported. If values passed in ReturnLocation,
 * ReturnLocationType and ReturnLocationNumber are exactly same as PickupLocation, PickupLocationType and PickupLocationNumber of existing booking then ReturnLocation, ReturnLocationType and ReturnLocationNumber will be deleted. If values passed in
 * ReturnLocation, ReturnLocationType and ReturnLocationNumber are not same as PickupLocation, PickupLocationType and PickupLocationNumber of existing booking then ReturnLocation, ReturnLocationType and ReturnLocationNumber will be updated.
 * @subpackage Structs
 */
class VehicleReturnDateLocation extends AbstractStructBase
{
    /**
     * The ReturnDateTime
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $ReturnDateTime = null;
    /**
     * The ReturnLocation
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $ReturnLocation = null;
    /**
     * The ReturnLocationType
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $ReturnLocationType = null;
    /**
     * The ReturnLocationNumber
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $ReturnLocationNumber = null;
    /**
     * Constructor method for VehicleReturnDateLocation
     * @uses VehicleReturnDateLocation::setReturnDateTime()
     * @uses VehicleReturnDateLocation::setReturnLocation()
     * @uses VehicleReturnDateLocation::setReturnLocationType()
     * @uses VehicleReturnDateLocation::setReturnLocationNumber()
     * @param string $returnDateTime
     * @param string $returnLocation
     * @param string $returnLocationType
     * @param string $returnLocationNumber
     */
    public function __construct(?string $returnDateTime = null, ?string $returnLocation = null, ?string $returnLocationType = null, ?string $returnLocationNumber = null)
    {
        $this
            ->setReturnDateTime($returnDateTime)
            ->setReturnLocation($returnLocation)
            ->setReturnLocationType($returnLocationType)
            ->setReturnLocationNumber($returnLocationNumber);
    }
    /**
     * Get ReturnDateTime value
     * @return string|null
     */
    public function getReturnDateTime(): ?string
    {
        return $this->ReturnDateTime;
    }
    /**
     * Set ReturnDateTime value
     * @param string $returnDateTime
     * @return \Travelport\UniversalRecord\StructType\VehicleReturnDateLocation
     */
    public function setReturnDateTime(?string $returnDateTime = null): self
    {
        $this->ReturnDateTime = $returnDateTime;
        
        return $this;
    }
    /**
     * Get ReturnLocation value
     * @return string|null
     */
    public function getReturnLocation(): ?string
    {
        return $this->ReturnLocation;
    }
    /**
     * Set ReturnLocation value
     * @param string $returnLocation
     * @return \Travelport\UniversalRecord\StructType\VehicleReturnDateLocation
     */
    public function setReturnLocation(?string $returnLocation = null): self
    {
        $this->ReturnLocation = $returnLocation;
        
        return $this;
    }
    /**
     * Get ReturnLocationType value
     * @return string|null
     */
    public function getReturnLocationType(): ?string
    {
        return $this->ReturnLocationType;
    }
    /**
     * Set ReturnLocationType value
     * @param string $returnLocationType
     * @return \Travelport\UniversalRecord\StructType\VehicleReturnDateLocation
     */
    public function setReturnLocationType(?string $returnLocationType = null): self
    {
        $this->ReturnLocationType = $returnLocationType;
        
        return $this;
    }
    /**
     * Get ReturnLocationNumber value
     * @return string|null
     */
    public function getReturnLocationNumber(): ?string
    {
        return $this->ReturnLocationNumber;
    }
    /**
     * Set ReturnLocationNumber value
     * @param string $returnLocationNumber
     * @return \Travelport\UniversalRecord\StructType\VehicleReturnDateLocation
     */
    public function setReturnLocationNumber(?string $returnLocationNumber = null): self
    {
        $this->ReturnLocationNumber = $returnLocationNumber;
        
        return $this;
    }
}
