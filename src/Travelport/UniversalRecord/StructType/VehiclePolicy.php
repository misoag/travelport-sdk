<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehiclePolicy StructType
 * Meta information extracted from the WSDL
 * - documentation: Policy information provided by the Vehicle Supplier. Usually relative to a specific location.
 * @subpackage Structs
 */
class VehiclePolicy extends AbstractStructBase
{
    /**
     * The VehicleDisclaimer
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: VehicleDisclaimer
     * @var \Travelport\UniversalRecord\StructType\VehicleDisclaimer[]
     */
    protected ?array $VehicleDisclaimer = null;
    /**
     * The VehicleDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: VehicleDetail
     * @var \Travelport\UniversalRecord\StructType\VehicleDetail[]
     */
    protected ?array $VehicleDetail = null;
    /**
     * Constructor method for VehiclePolicy
     * @uses VehiclePolicy::setVehicleDisclaimer()
     * @uses VehiclePolicy::setVehicleDetail()
     * @param \Travelport\UniversalRecord\StructType\VehicleDisclaimer[] $vehicleDisclaimer
     * @param \Travelport\UniversalRecord\StructType\VehicleDetail[] $vehicleDetail
     */
    public function __construct(?array $vehicleDisclaimer = null, ?array $vehicleDetail = null)
    {
        $this
            ->setVehicleDisclaimer($vehicleDisclaimer)
            ->setVehicleDetail($vehicleDetail);
    }
    /**
     * Get VehicleDisclaimer value
     * @return \Travelport\UniversalRecord\StructType\VehicleDisclaimer[]
     */
    public function getVehicleDisclaimer(): ?array
    {
        return $this->VehicleDisclaimer;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setVehicleDisclaimer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleDisclaimer method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVehicleDisclaimerForArrayConstraintFromSetVehicleDisclaimer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $vehiclePolicyVehicleDisclaimerItem) {
            // validation for constraint: itemType
            if (!$vehiclePolicyVehicleDisclaimerItem instanceof \Travelport\UniversalRecord\StructType\VehicleDisclaimer) {
                $invalidValues[] = is_object($vehiclePolicyVehicleDisclaimerItem) ? get_class($vehiclePolicyVehicleDisclaimerItem) : sprintf('%s(%s)', gettype($vehiclePolicyVehicleDisclaimerItem), var_export($vehiclePolicyVehicleDisclaimerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VehicleDisclaimer property can only contain items of type \Travelport\UniversalRecord\StructType\VehicleDisclaimer, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VehicleDisclaimer value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleDisclaimer[] $vehicleDisclaimer
     * @return \Travelport\UniversalRecord\StructType\VehiclePolicy
     */
    public function setVehicleDisclaimer(?array $vehicleDisclaimer = null): self
    {
        // validation for constraint: array
        if ('' !== ($vehicleDisclaimerArrayErrorMessage = self::validateVehicleDisclaimerForArrayConstraintFromSetVehicleDisclaimer($vehicleDisclaimer))) {
            throw new InvalidArgumentException($vehicleDisclaimerArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($vehicleDisclaimer) && count($vehicleDisclaimer) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($vehicleDisclaimer)), __LINE__);
        }
        $this->VehicleDisclaimer = $vehicleDisclaimer;
        
        return $this;
    }
    /**
     * Add item to VehicleDisclaimer value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleDisclaimer $item
     * @return \Travelport\UniversalRecord\StructType\VehiclePolicy
     */
    public function addToVehicleDisclaimer(\Travelport\UniversalRecord\StructType\VehicleDisclaimer $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\VehicleDisclaimer) {
            throw new InvalidArgumentException(sprintf('The VehicleDisclaimer property can only contain items of type \Travelport\UniversalRecord\StructType\VehicleDisclaimer, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->VehicleDisclaimer) && count($this->VehicleDisclaimer) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->VehicleDisclaimer)), __LINE__);
        }
        $this->VehicleDisclaimer[] = $item;
        
        return $this;
    }
    /**
     * Get VehicleDetail value
     * @return \Travelport\UniversalRecord\StructType\VehicleDetail[]
     */
    public function getVehicleDetail(): ?array
    {
        return $this->VehicleDetail;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setVehicleDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleDetail method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVehicleDetailForArrayConstraintFromSetVehicleDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $vehiclePolicyVehicleDetailItem) {
            // validation for constraint: itemType
            if (!$vehiclePolicyVehicleDetailItem instanceof \Travelport\UniversalRecord\StructType\VehicleDetail) {
                $invalidValues[] = is_object($vehiclePolicyVehicleDetailItem) ? get_class($vehiclePolicyVehicleDetailItem) : sprintf('%s(%s)', gettype($vehiclePolicyVehicleDetailItem), var_export($vehiclePolicyVehicleDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VehicleDetail property can only contain items of type \Travelport\UniversalRecord\StructType\VehicleDetail, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VehicleDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleDetail[] $vehicleDetail
     * @return \Travelport\UniversalRecord\StructType\VehiclePolicy
     */
    public function setVehicleDetail(?array $vehicleDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($vehicleDetailArrayErrorMessage = self::validateVehicleDetailForArrayConstraintFromSetVehicleDetail($vehicleDetail))) {
            throw new InvalidArgumentException($vehicleDetailArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($vehicleDetail) && count($vehicleDetail) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($vehicleDetail)), __LINE__);
        }
        $this->VehicleDetail = $vehicleDetail;
        
        return $this;
    }
    /**
     * Add item to VehicleDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\VehicleDetail $item
     * @return \Travelport\UniversalRecord\StructType\VehiclePolicy
     */
    public function addToVehicleDetail(\Travelport\UniversalRecord\StructType\VehicleDetail $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\VehicleDetail) {
            throw new InvalidArgumentException(sprintf('The VehicleDetail property can only contain items of type \Travelport\UniversalRecord\StructType\VehicleDetail, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->VehicleDetail) && count($this->VehicleDetail) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->VehicleDetail)), __LINE__);
        }
        $this->VehicleDetail[] = $item;
        
        return $this;
    }
}
