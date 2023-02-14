<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PermittedCarriers StructType
 * @subpackage Structs
 */
class PermittedCarriers extends AbstractStructBase
{
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: common:Carrier
     * @var \Travelport\UniversalRecord\StructType\Carrier[]
     */
    protected ?array $Carrier = null;
    /**
     * Constructor method for PermittedCarriers
     * @uses PermittedCarriers::setCarrier()
     * @param \Travelport\UniversalRecord\StructType\Carrier[] $carrier
     */
    public function __construct(?array $carrier = null)
    {
        $this
            ->setCarrier($carrier);
    }
    /**
     * Get Carrier value
     * @return \Travelport\UniversalRecord\StructType\Carrier[]
     */
    public function getCarrier(): ?array
    {
        return $this->Carrier;
    }
    /**
     * This method is responsible for validating the values passed to the setCarrier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCarrier method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCarrierForArrayConstraintsFromSetCarrier(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $permittedCarriersCarrierItem) {
            // validation for constraint: itemType
            if (!$permittedCarriersCarrierItem instanceof \Travelport\UniversalRecord\StructType\Carrier) {
                $invalidValues[] = is_object($permittedCarriersCarrierItem) ? get_class($permittedCarriersCarrierItem) : sprintf('%s(%s)', gettype($permittedCarriersCarrierItem), var_export($permittedCarriersCarrierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Carrier property can only contain items of type \Travelport\UniversalRecord\StructType\Carrier, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Carrier value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Carrier[] $carrier
     * @return \Travelport\UniversalRecord\StructType\PermittedCarriers
     */
    public function setCarrier(?array $carrier = null): self
    {
        // validation for constraint: array
        if ('' !== ($carrierArrayErrorMessage = self::validateCarrierForArrayConstraintsFromSetCarrier($carrier))) {
            throw new InvalidArgumentException($carrierArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($carrier) && count($carrier) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($carrier)), __LINE__);
        }
        $this->Carrier = $carrier;
        
        return $this;
    }
    /**
     * Add item to Carrier value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Carrier $item
     * @return \Travelport\UniversalRecord\StructType\PermittedCarriers
     */
    public function addToCarrier(\Travelport\UniversalRecord\StructType\Carrier $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Carrier) {
            throw new InvalidArgumentException(sprintf('The Carrier property can only contain items of type \Travelport\UniversalRecord\StructType\Carrier, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Carrier) && count($this->Carrier) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Carrier)), __LINE__);
        }
        $this->Carrier[] = $item;
        
        return $this;
    }
}
