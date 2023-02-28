<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarrierList StructType
 * @subpackage Structs
 */
class CarrierList extends AbstractStructBase
{
    /**
     * The IncludeCarrier
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $IncludeCarrier;
    /**
     * The CarrierCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 6
     * - ref: CarrierCode
     * @var \Travelport\UniversalRecord\StructType\CarrierCode[]
     */
    protected ?array $CarrierCode = null;
    /**
     * Constructor method for CarrierList
     * @uses CarrierList::setIncludeCarrier()
     * @uses CarrierList::setCarrierCode()
     * @param bool $includeCarrier
     * @param \Travelport\UniversalRecord\StructType\CarrierCode[] $carrierCode
     */
    public function __construct(bool $includeCarrier, ?array $carrierCode = null)
    {
        $this
            ->setIncludeCarrier($includeCarrier)
            ->setCarrierCode($carrierCode);
    }
    /**
     * Get IncludeCarrier value
     * @return bool
     */
    public function getIncludeCarrier(): bool
    {
        return $this->IncludeCarrier;
    }
    /**
     * Set IncludeCarrier value
     * @param bool $includeCarrier
     * @return \Travelport\UniversalRecord\StructType\CarrierList
     */
    public function setIncludeCarrier(bool $includeCarrier): self
    {
        // validation for constraint: boolean
        if (!is_null($includeCarrier) && !is_bool($includeCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeCarrier, true), gettype($includeCarrier)), __LINE__);
        }
        $this->IncludeCarrier = $includeCarrier;
        
        return $this;
    }
    /**
     * Get CarrierCode value
     * @return \Travelport\UniversalRecord\StructType\CarrierCode[]
     */
    public function getCarrierCode(): ?array
    {
        return $this->CarrierCode;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCarrierCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCarrierCode method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCarrierCodeForArrayConstraintFromSetCarrierCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $carrierListCarrierCodeItem) {
            // validation for constraint: itemType
            if (!$carrierListCarrierCodeItem instanceof \Travelport\UniversalRecord\StructType\CarrierCode) {
                $invalidValues[] = is_object($carrierListCarrierCodeItem) ? get_class($carrierListCarrierCodeItem) : sprintf('%s(%s)', gettype($carrierListCarrierCodeItem), var_export($carrierListCarrierCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CarrierCode property can only contain items of type \Travelport\UniversalRecord\StructType\CarrierCode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CarrierCode value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CarrierCode[] $carrierCode
     * @return \Travelport\UniversalRecord\StructType\CarrierList
     */
    public function setCarrierCode(?array $carrierCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($carrierCodeArrayErrorMessage = self::validateCarrierCodeForArrayConstraintFromSetCarrierCode($carrierCode))) {
            throw new InvalidArgumentException($carrierCodeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(6)
        if (is_array($carrierCode) && count($carrierCode) > 6) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 6', count($carrierCode)), __LINE__);
        }
        $this->CarrierCode = $carrierCode;
        
        return $this;
    }
    /**
     * Add item to CarrierCode value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CarrierCode $item
     * @return \Travelport\UniversalRecord\StructType\CarrierList
     */
    public function addToCarrierCode(\Travelport\UniversalRecord\StructType\CarrierCode $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\CarrierCode) {
            throw new InvalidArgumentException(sprintf('The CarrierCode property can only contain items of type \Travelport\UniversalRecord\StructType\CarrierCode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(6)
        if (is_array($this->CarrierCode) && count($this->CarrierCode) >= 6) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 6', count($this->CarrierCode)), __LINE__);
        }
        $this->CarrierCode[] = $item;
        
        return $this;
    }
}
