<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Row StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifies the row of in a seat map
 * @subpackage Structs
 */
class Row extends AbstractStructBase
{
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $Number;
    /**
     * The Facility
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Facility
     * @var \Travelport\UniversalRecord\StructType\Facility[]
     */
    protected ?array $Facility = null;
    /**
     * The Characteristic
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Characteristic
     * @var \Travelport\UniversalRecord\StructType\Characteristic[]
     */
    protected ?array $Characteristic = null;
    /**
     * The SearchTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $SearchTravelerRef = null;
    /**
     * Constructor method for Row
     * @uses Row::setNumber()
     * @uses Row::setFacility()
     * @uses Row::setCharacteristic()
     * @uses Row::setSearchTravelerRef()
     * @param int $number
     * @param \Travelport\UniversalRecord\StructType\Facility[] $facility
     * @param \Travelport\UniversalRecord\StructType\Characteristic[] $characteristic
     * @param string $searchTravelerRef
     */
    public function __construct(int $number, ?array $facility = null, ?array $characteristic = null, ?string $searchTravelerRef = null)
    {
        $this
            ->setNumber($number)
            ->setFacility($facility)
            ->setCharacteristic($characteristic)
            ->setSearchTravelerRef($searchTravelerRef);
    }
    /**
     * Get Number value
     * @return int
     */
    public function getNumber(): int
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param int $number
     * @return \Travelport\UniversalRecord\StructType\Row
     */
    public function setNumber(int $number): self
    {
        // validation for constraint: int
        if (!is_null($number) && !(is_int($number) || ctype_digit($number))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->Number = $number;
        
        return $this;
    }
    /**
     * Get Facility value
     * @return \Travelport\UniversalRecord\StructType\Facility[]
     */
    public function getFacility(): ?array
    {
        return $this->Facility;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFacility method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFacility method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFacilityForArrayConstraintFromSetFacility(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $rowFacilityItem) {
            // validation for constraint: itemType
            if (!$rowFacilityItem instanceof \Travelport\UniversalRecord\StructType\Facility) {
                $invalidValues[] = is_object($rowFacilityItem) ? get_class($rowFacilityItem) : sprintf('%s(%s)', gettype($rowFacilityItem), var_export($rowFacilityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Facility property can only contain items of type \Travelport\UniversalRecord\StructType\Facility, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Facility value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Facility[] $facility
     * @return \Travelport\UniversalRecord\StructType\Row
     */
    public function setFacility(?array $facility = null): self
    {
        // validation for constraint: array
        if ('' !== ($facilityArrayErrorMessage = self::validateFacilityForArrayConstraintFromSetFacility($facility))) {
            throw new InvalidArgumentException($facilityArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($facility) && count($facility) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($facility)), __LINE__);
        }
        $this->Facility = $facility;
        
        return $this;
    }
    /**
     * Add item to Facility value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Facility $item
     * @return \Travelport\UniversalRecord\StructType\Row
     */
    public function addToFacility(\Travelport\UniversalRecord\StructType\Facility $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Facility) {
            throw new InvalidArgumentException(sprintf('The Facility property can only contain items of type \Travelport\UniversalRecord\StructType\Facility, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Facility) && count($this->Facility) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Facility)), __LINE__);
        }
        $this->Facility[] = $item;
        
        return $this;
    }
    /**
     * Get Characteristic value
     * @return \Travelport\UniversalRecord\StructType\Characteristic[]
     */
    public function getCharacteristic(): ?array
    {
        return $this->Characteristic;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCharacteristic method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCharacteristic method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCharacteristicForArrayConstraintFromSetCharacteristic(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $rowCharacteristicItem) {
            // validation for constraint: itemType
            if (!$rowCharacteristicItem instanceof \Travelport\UniversalRecord\StructType\Characteristic) {
                $invalidValues[] = is_object($rowCharacteristicItem) ? get_class($rowCharacteristicItem) : sprintf('%s(%s)', gettype($rowCharacteristicItem), var_export($rowCharacteristicItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Characteristic property can only contain items of type \Travelport\UniversalRecord\StructType\Characteristic, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Characteristic value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Characteristic[] $characteristic
     * @return \Travelport\UniversalRecord\StructType\Row
     */
    public function setCharacteristic(?array $characteristic = null): self
    {
        // validation for constraint: array
        if ('' !== ($characteristicArrayErrorMessage = self::validateCharacteristicForArrayConstraintFromSetCharacteristic($characteristic))) {
            throw new InvalidArgumentException($characteristicArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($characteristic) && count($characteristic) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($characteristic)), __LINE__);
        }
        $this->Characteristic = $characteristic;
        
        return $this;
    }
    /**
     * Add item to Characteristic value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Characteristic $item
     * @return \Travelport\UniversalRecord\StructType\Row
     */
    public function addToCharacteristic(\Travelport\UniversalRecord\StructType\Characteristic $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Characteristic) {
            throw new InvalidArgumentException(sprintf('The Characteristic property can only contain items of type \Travelport\UniversalRecord\StructType\Characteristic, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Characteristic) && count($this->Characteristic) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Characteristic)), __LINE__);
        }
        $this->Characteristic[] = $item;
        
        return $this;
    }
    /**
     * Get SearchTravelerRef value
     * @return string|null
     */
    public function getSearchTravelerRef(): ?string
    {
        return $this->SearchTravelerRef;
    }
    /**
     * Set SearchTravelerRef value
     * @param string $searchTravelerRef
     * @return \Travelport\UniversalRecord\StructType\Row
     */
    public function setSearchTravelerRef(?string $searchTravelerRef = null): self
    {
        // validation for constraint: string
        if (!is_null($searchTravelerRef) && !is_string($searchTravelerRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchTravelerRef, true), gettype($searchTravelerRef)), __LINE__);
        }
        $this->SearchTravelerRef = $searchTravelerRef;
        
        return $this;
    }
}
