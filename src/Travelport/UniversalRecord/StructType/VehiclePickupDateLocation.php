<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehiclePickupDateLocation StructType
 * Meta information extracted from the WSDL
 * - documentation: Used to update PickupDateTime and location of an existing Vehicle Booking. 1g/1v only supports modification of PickupDateTime. PickupDateTime cannot be deleted.
 * @subpackage Structs
 */
class VehiclePickupDateLocation extends AbstractStructBase
{
    /**
     * The PickupDateTime
     * Meta information extracted from the WSDL
     * - documentation: Providers: 1g/1v/1p/1j
     * @var string|null
     */
    protected ?string $PickupDateTime = null;
    /**
     * The PickupLocation
     * Meta information extracted from the WSDL
     * - documentation: Providers: 1p/1j | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $PickupLocation = null;
    /**
     * The PickupLocationType
     * Meta information extracted from the WSDL
     * - documentation: Providers: 1p/1j
     * - use: optional
     * @var string|null
     */
    protected ?string $PickupLocationType = null;
    /**
     * The PickupLocationNumber
     * Meta information extracted from the WSDL
     * - documentation: Providers: 1p/1j
     * - use: optional
     * @var string|null
     */
    protected ?string $PickupLocationNumber = null;
    /**
     * Constructor method for VehiclePickupDateLocation
     * @uses VehiclePickupDateLocation::setPickupDateTime()
     * @uses VehiclePickupDateLocation::setPickupLocation()
     * @uses VehiclePickupDateLocation::setPickupLocationType()
     * @uses VehiclePickupDateLocation::setPickupLocationNumber()
     * @param string $pickupDateTime
     * @param string $pickupLocation
     * @param string $pickupLocationType
     * @param string $pickupLocationNumber
     */
    public function __construct(?string $pickupDateTime = null, ?string $pickupLocation = null, ?string $pickupLocationType = null, ?string $pickupLocationNumber = null)
    {
        $this
            ->setPickupDateTime($pickupDateTime)
            ->setPickupLocation($pickupLocation)
            ->setPickupLocationType($pickupLocationType)
            ->setPickupLocationNumber($pickupLocationNumber);
    }
    /**
     * Get PickupDateTime value
     * @return string|null
     */
    public function getPickupDateTime(): ?string
    {
        return $this->PickupDateTime;
    }
    /**
     * Set PickupDateTime value
     * @param string $pickupDateTime
     * @return \Travelport\UniversalRecord\StructType\VehiclePickupDateLocation
     */
    public function setPickupDateTime(?string $pickupDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupDateTime) && !is_string($pickupDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupDateTime, true), gettype($pickupDateTime)), __LINE__);
        }
        $this->PickupDateTime = $pickupDateTime;
        
        return $this;
    }
    /**
     * Get PickupLocation value
     * @return string|null
     */
    public function getPickupLocation(): ?string
    {
        return $this->PickupLocation;
    }
    /**
     * Set PickupLocation value
     * @param string $pickupLocation
     * @return \Travelport\UniversalRecord\StructType\VehiclePickupDateLocation
     */
    public function setPickupLocation(?string $pickupLocation = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupLocation) && !is_string($pickupLocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupLocation, true), gettype($pickupLocation)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($pickupLocation) && mb_strlen((string) $pickupLocation) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $pickupLocation)), __LINE__);
        }
        $this->PickupLocation = $pickupLocation;
        
        return $this;
    }
    /**
     * Get PickupLocationType value
     * @return string|null
     */
    public function getPickupLocationType(): ?string
    {
        return $this->PickupLocationType;
    }
    /**
     * Set PickupLocationType value
     * @uses \Travelport\UniversalRecord\EnumType\TypeVehicleLocation::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeVehicleLocation::getValidValues()
     * @throws InvalidArgumentException
     * @param string $pickupLocationType
     * @return \Travelport\UniversalRecord\StructType\VehiclePickupDateLocation
     */
    public function setPickupLocationType(?string $pickupLocationType = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeVehicleLocation::valueIsValid($pickupLocationType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeVehicleLocation', is_array($pickupLocationType) ? implode(', ', $pickupLocationType) : var_export($pickupLocationType, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeVehicleLocation::getValidValues())), __LINE__);
        }
        $this->PickupLocationType = $pickupLocationType;
        
        return $this;
    }
    /**
     * Get PickupLocationNumber value
     * @return string|null
     */
    public function getPickupLocationNumber(): ?string
    {
        return $this->PickupLocationNumber;
    }
    /**
     * Set PickupLocationNumber value
     * @param string $pickupLocationNumber
     * @return \Travelport\UniversalRecord\StructType\VehiclePickupDateLocation
     */
    public function setPickupLocationNumber(?string $pickupLocationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupLocationNumber) && !is_string($pickupLocationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupLocationNumber, true), gettype($pickupLocationNumber)), __LINE__);
        }
        $this->PickupLocationNumber = $pickupLocationNumber;
        
        return $this;
    }
}
