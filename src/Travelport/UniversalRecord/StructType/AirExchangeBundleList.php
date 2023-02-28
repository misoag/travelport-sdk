<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirExchangeBundleList StructType
 * Meta information extracted from the WSDL
 * - documentation: The shared object list of AirsegmentData
 * @subpackage Structs
 */
class AirExchangeBundleList extends AbstractStructBase
{
    /**
     * The AirExchangeBundle
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: AirExchangeBundle
     * @var \Travelport\UniversalRecord\StructType\AirExchangeBundle[]
     */
    protected ?array $AirExchangeBundle = null;
    /**
     * Constructor method for AirExchangeBundleList
     * @uses AirExchangeBundleList::setAirExchangeBundle()
     * @param \Travelport\UniversalRecord\StructType\AirExchangeBundle[] $airExchangeBundle
     */
    public function __construct(?array $airExchangeBundle = null)
    {
        $this
            ->setAirExchangeBundle($airExchangeBundle);
    }
    /**
     * Get AirExchangeBundle value
     * @return \Travelport\UniversalRecord\StructType\AirExchangeBundle[]
     */
    public function getAirExchangeBundle(): ?array
    {
        return $this->AirExchangeBundle;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAirExchangeBundle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirExchangeBundle method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirExchangeBundleForArrayConstraintFromSetAirExchangeBundle(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airExchangeBundleListAirExchangeBundleItem) {
            // validation for constraint: itemType
            if (!$airExchangeBundleListAirExchangeBundleItem instanceof \Travelport\UniversalRecord\StructType\AirExchangeBundle) {
                $invalidValues[] = is_object($airExchangeBundleListAirExchangeBundleItem) ? get_class($airExchangeBundleListAirExchangeBundleItem) : sprintf('%s(%s)', gettype($airExchangeBundleListAirExchangeBundleItem), var_export($airExchangeBundleListAirExchangeBundleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirExchangeBundle property can only contain items of type \Travelport\UniversalRecord\StructType\AirExchangeBundle, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirExchangeBundle value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirExchangeBundle[] $airExchangeBundle
     * @return \Travelport\UniversalRecord\StructType\AirExchangeBundleList
     */
    public function setAirExchangeBundle(?array $airExchangeBundle = null): self
    {
        // validation for constraint: array
        if ('' !== ($airExchangeBundleArrayErrorMessage = self::validateAirExchangeBundleForArrayConstraintFromSetAirExchangeBundle($airExchangeBundle))) {
            throw new InvalidArgumentException($airExchangeBundleArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airExchangeBundle) && count($airExchangeBundle) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airExchangeBundle)), __LINE__);
        }
        $this->AirExchangeBundle = $airExchangeBundle;
        
        return $this;
    }
    /**
     * Add item to AirExchangeBundle value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirExchangeBundle $item
     * @return \Travelport\UniversalRecord\StructType\AirExchangeBundleList
     */
    public function addToAirExchangeBundle(\Travelport\UniversalRecord\StructType\AirExchangeBundle $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirExchangeBundle) {
            throw new InvalidArgumentException(sprintf('The AirExchangeBundle property can only contain items of type \Travelport\UniversalRecord\StructType\AirExchangeBundle, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirExchangeBundle) && count($this->AirExchangeBundle) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirExchangeBundle)), __LINE__);
        }
        $this->AirExchangeBundle[] = $item;
        
        return $this;
    }
}
