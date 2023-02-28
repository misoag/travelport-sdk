<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehiclePickupLocation StructType
 * Meta information extracted from the WSDL
 * - documentation: A container for Vehicle Location ,Vendor and Vehicle Modifier.
 * @subpackage Structs
 */
class VehiclePickupLocation extends AbstractStructBase
{
    /**
     * The PickUpLocation
     * Meta information extracted from the WSDL
     * - documentation: The location (city or airport code) at which the vehicle will be picked up. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    protected string $PickUpLocation;
    /**
     * The Vendor
     * Meta information extracted from the WSDL
     * - ref: Vendor
     * @var \Travelport\UniversalRecord\StructType\Vendor|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Vendor $Vendor = null;
    /**
     * The VehicleModifier
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: VehicleModifier
     * @var \Travelport\UniversalRecord\StructType\VehicleModifier[]
     */
    protected ?array $VehicleModifier = null;
    /**
     * Constructor method for VehiclePickupLocation
     * @uses VehiclePickupLocation::setPickUpLocation()
     * @uses VehiclePickupLocation::setVendor()
     * @uses VehiclePickupLocation::setVehicleModifier()
     * @param string $pickUpLocation
     * @param \Travelport\UniversalRecord\StructType\Vendor $vendor
     * @param \Travelport\UniversalRecord\StructType\VehicleModifier[] $vehicleModifier
     */
    public function __construct(string $pickUpLocation, ?\Travelport\UniversalRecord\StructType\Vendor $vendor = null, ?array $vehicleModifier = null)
    {
        $this
            ->setPickUpLocation($pickUpLocation)
            ->setVendor($vendor)
            ->setVehicleModifier($vehicleModifier);
    }
    /**
     * Get PickUpLocation value
     * @return string
     */
    public function getPickUpLocation(): string
    {
        return $this->PickUpLocation;
    }
    /**
     * Set PickUpLocation value
     * @param string $pickUpLocation
     * @return \Travelport\UniversalRecord\StructType\VehiclePickupLocation
     */
    public function setPickUpLocation(string $pickUpLocation): self
    {
        // validation for constraint: string
        if (!is_null($pickUpLocation) && !is_string($pickUpLocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickUpLocation, true), gettype($pickUpLocation)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($pickUpLocation) && mb_strlen((string) $pickUpLocation) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $pickUpLocation)), __LINE__);
        }
        $this->PickUpLocation = $pickUpLocation;
        
        return $this;
    }
    /**
     * Get Vendor value
     * @return \Travelport\UniversalRecord\StructType\Vendor|null
     */
    public function getVendor(): ?\Travelport\UniversalRecord\StructType\Vendor
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param \Travelport\UniversalRecord\StructType\Vendor $vendor
     * @return \Travelport\UniversalRecord\StructType\VehiclePickupLocation
     */
    public function setVendor(?\Travelport\UniversalRecord\StructType\Vendor $vendor = null): self
    {
        $this->Vendor = $vendor;
        
        return $this;
    }
    /**
     * Get VehicleModifier value
     * @return \Travelport\UniversalRecord\StructType\VehicleModifier[]
     */
    public function getVehicleModifier(): ?array
    {
        return $this->VehicleModifier;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setVehicleModifier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleModifier method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVehicleModifierForArrayConstraintFromSetVehicleModifier(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $vehiclePickupLocationVehicleModifierItem) {
            // validation for constraint: itemType
            if (!$vehiclePickupLocationVehicleModifierItem instanceof \Travelport\UniversalRecord\StructType\VehicleModifier) {
                $invalidValues[] = is_object($vehiclePickupLocationVehicleModifierItem) ? get_class($vehiclePickupLocationVehicleModifierItem) : sprintf('%s(%s)', gettype($vehiclePickupLocationVehicleModifierItem), var_export($vehiclePickupLocationVehicleModifierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VehicleModifier property can only contain items of type \Travelport\UniversalRecord\StructType\VehicleModifier, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VehicleModifier value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleModifier[] $vehicleModifier
     * @return \Travelport\UniversalRecord\StructType\VehiclePickupLocation
     */
    public function setVehicleModifier(?array $vehicleModifier = null): self
    {
        // validation for constraint: array
        if ('' !== ($vehicleModifierArrayErrorMessage = self::validateVehicleModifierForArrayConstraintFromSetVehicleModifier($vehicleModifier))) {
            throw new InvalidArgumentException($vehicleModifierArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($vehicleModifier) && count($vehicleModifier) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($vehicleModifier)), __LINE__);
        }
        $this->VehicleModifier = $vehicleModifier;
        
        return $this;
    }
    /**
     * Add item to VehicleModifier value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleModifier $item
     * @return \Travelport\UniversalRecord\StructType\VehiclePickupLocation
     */
    public function addToVehicleModifier(\Travelport\UniversalRecord\StructType\VehicleModifier $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\VehicleModifier) {
            throw new InvalidArgumentException(sprintf('The VehicleModifier property can only contain items of type \Travelport\UniversalRecord\StructType\VehicleModifier, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->VehicleModifier) && count($this->VehicleModifier) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->VehicleModifier)), __LINE__);
        }
        $this->VehicleModifier[] = $item;
        
        return $this;
    }
}
