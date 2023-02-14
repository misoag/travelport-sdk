<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirSegmentData StructType
 * Meta information extracted from the WSDL
 * - documentation: The shared object list of AirsegmentData
 * @subpackage Structs
 */
class AirSegmentData extends AbstractStructBase
{
    /**
     * The AirSegmentRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirSegmentRef
     * @var \Travelport\UniversalRecord\StructType\AirSegmentRef[]
     */
    protected ?array $AirSegmentRef = null;
    /**
     * The BaggageAllowance
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: BaggageAllowance
     * @var \Travelport\UniversalRecord\StructType\BaggageAllowance[]
     */
    protected ?array $BaggageAllowance = null;
    /**
     * The Brand
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: Brand
     * @var \Travelport\UniversalRecord\StructType\Brand[]
     */
    protected ?array $Brand = null;
    /**
     * The CabinClass
     * Meta information extracted from the WSDL
     * - documentation: Specifies Cabin class for a group of class of services. Cabin class is not identified if it is not present.
     * - use: optional
     * @var string|null
     */
    protected ?string $CabinClass = null;
    /**
     * The ClassOfService
     * Meta information extracted from the WSDL
     * - documentation: Class of service code (Booking code) usually one letter, rarely two.
     * - base: xs:string
     * - maxLength: 2
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $ClassOfService = null;
    /**
     * Constructor method for AirSegmentData
     * @uses AirSegmentData::setAirSegmentRef()
     * @uses AirSegmentData::setBaggageAllowance()
     * @uses AirSegmentData::setBrand()
     * @uses AirSegmentData::setCabinClass()
     * @uses AirSegmentData::setClassOfService()
     * @param \Travelport\UniversalRecord\StructType\AirSegmentRef[] $airSegmentRef
     * @param \Travelport\UniversalRecord\StructType\BaggageAllowance[] $baggageAllowance
     * @param \Travelport\UniversalRecord\StructType\Brand[] $brand
     * @param string $cabinClass
     * @param string $classOfService
     */
    public function __construct(?array $airSegmentRef = null, ?array $baggageAllowance = null, ?array $brand = null, ?string $cabinClass = null, ?string $classOfService = null)
    {
        $this
            ->setAirSegmentRef($airSegmentRef)
            ->setBaggageAllowance($baggageAllowance)
            ->setBrand($brand)
            ->setCabinClass($cabinClass)
            ->setClassOfService($classOfService);
    }
    /**
     * Get AirSegmentRef value
     * @return \Travelport\UniversalRecord\StructType\AirSegmentRef[]
     */
    public function getAirSegmentRef(): ?array
    {
        return $this->AirSegmentRef;
    }
    /**
     * This method is responsible for validating the values passed to the setAirSegmentRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSegmentRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirSegmentRefForArrayConstraintsFromSetAirSegmentRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airSegmentDataAirSegmentRefItem) {
            // validation for constraint: itemType
            if (!$airSegmentDataAirSegmentRefItem instanceof \Travelport\UniversalRecord\StructType\AirSegmentRef) {
                $invalidValues[] = is_object($airSegmentDataAirSegmentRefItem) ? get_class($airSegmentDataAirSegmentRefItem) : sprintf('%s(%s)', gettype($airSegmentDataAirSegmentRefItem), var_export($airSegmentDataAirSegmentRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirSegmentRef property can only contain items of type \Travelport\UniversalRecord\StructType\AirSegmentRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirSegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirSegmentRef[] $airSegmentRef
     * @return \Travelport\UniversalRecord\StructType\AirSegmentData
     */
    public function setAirSegmentRef(?array $airSegmentRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($airSegmentRefArrayErrorMessage = self::validateAirSegmentRefForArrayConstraintsFromSetAirSegmentRef($airSegmentRef))) {
            throw new InvalidArgumentException($airSegmentRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airSegmentRef) && count($airSegmentRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airSegmentRef)), __LINE__);
        }
        $this->AirSegmentRef = $airSegmentRef;
        
        return $this;
    }
    /**
     * Add item to AirSegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirSegmentRef $item
     * @return \Travelport\UniversalRecord\StructType\AirSegmentData
     */
    public function addToAirSegmentRef(\Travelport\UniversalRecord\StructType\AirSegmentRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirSegmentRef) {
            throw new InvalidArgumentException(sprintf('The AirSegmentRef property can only contain items of type \Travelport\UniversalRecord\StructType\AirSegmentRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirSegmentRef) && count($this->AirSegmentRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirSegmentRef)), __LINE__);
        }
        $this->AirSegmentRef[] = $item;
        
        return $this;
    }
    /**
     * Get BaggageAllowance value
     * @return \Travelport\UniversalRecord\StructType\BaggageAllowance[]
     */
    public function getBaggageAllowance(): ?array
    {
        return $this->BaggageAllowance;
    }
    /**
     * This method is responsible for validating the values passed to the setBaggageAllowance method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBaggageAllowance method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBaggageAllowanceForArrayConstraintsFromSetBaggageAllowance(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airSegmentDataBaggageAllowanceItem) {
            // validation for constraint: itemType
            if (!$airSegmentDataBaggageAllowanceItem instanceof \Travelport\UniversalRecord\StructType\BaggageAllowance) {
                $invalidValues[] = is_object($airSegmentDataBaggageAllowanceItem) ? get_class($airSegmentDataBaggageAllowanceItem) : sprintf('%s(%s)', gettype($airSegmentDataBaggageAllowanceItem), var_export($airSegmentDataBaggageAllowanceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BaggageAllowance property can only contain items of type \Travelport\UniversalRecord\StructType\BaggageAllowance, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BaggageAllowance value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BaggageAllowance[] $baggageAllowance
     * @return \Travelport\UniversalRecord\StructType\AirSegmentData
     */
    public function setBaggageAllowance(?array $baggageAllowance = null): self
    {
        // validation for constraint: array
        if ('' !== ($baggageAllowanceArrayErrorMessage = self::validateBaggageAllowanceForArrayConstraintsFromSetBaggageAllowance($baggageAllowance))) {
            throw new InvalidArgumentException($baggageAllowanceArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($baggageAllowance) && count($baggageAllowance) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($baggageAllowance)), __LINE__);
        }
        $this->BaggageAllowance = $baggageAllowance;
        
        return $this;
    }
    /**
     * Add item to BaggageAllowance value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BaggageAllowance $item
     * @return \Travelport\UniversalRecord\StructType\AirSegmentData
     */
    public function addToBaggageAllowance(\Travelport\UniversalRecord\StructType\BaggageAllowance $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\BaggageAllowance) {
            throw new InvalidArgumentException(sprintf('The BaggageAllowance property can only contain items of type \Travelport\UniversalRecord\StructType\BaggageAllowance, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->BaggageAllowance) && count($this->BaggageAllowance) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->BaggageAllowance)), __LINE__);
        }
        $this->BaggageAllowance[] = $item;
        
        return $this;
    }
    /**
     * Get Brand value
     * @return \Travelport\UniversalRecord\StructType\Brand[]
     */
    public function getBrand(): ?array
    {
        return $this->Brand;
    }
    /**
     * This method is responsible for validating the values passed to the setBrand method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBrand method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBrandForArrayConstraintsFromSetBrand(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airSegmentDataBrandItem) {
            // validation for constraint: itemType
            if (!$airSegmentDataBrandItem instanceof \Travelport\UniversalRecord\StructType\Brand) {
                $invalidValues[] = is_object($airSegmentDataBrandItem) ? get_class($airSegmentDataBrandItem) : sprintf('%s(%s)', gettype($airSegmentDataBrandItem), var_export($airSegmentDataBrandItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Brand property can only contain items of type \Travelport\UniversalRecord\StructType\Brand, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Brand value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Brand[] $brand
     * @return \Travelport\UniversalRecord\StructType\AirSegmentData
     */
    public function setBrand(?array $brand = null): self
    {
        // validation for constraint: array
        if ('' !== ($brandArrayErrorMessage = self::validateBrandForArrayConstraintsFromSetBrand($brand))) {
            throw new InvalidArgumentException($brandArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($brand) && count($brand) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($brand)), __LINE__);
        }
        $this->Brand = $brand;
        
        return $this;
    }
    /**
     * Add item to Brand value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Brand $item
     * @return \Travelport\UniversalRecord\StructType\AirSegmentData
     */
    public function addToBrand(\Travelport\UniversalRecord\StructType\Brand $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Brand) {
            throw new InvalidArgumentException(sprintf('The Brand property can only contain items of type \Travelport\UniversalRecord\StructType\Brand, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->Brand) && count($this->Brand) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->Brand)), __LINE__);
        }
        $this->Brand[] = $item;
        
        return $this;
    }
    /**
     * Get CabinClass value
     * @return string|null
     */
    public function getCabinClass(): ?string
    {
        return $this->CabinClass;
    }
    /**
     * Set CabinClass value
     * @param string $cabinClass
     * @return \Travelport\UniversalRecord\StructType\AirSegmentData
     */
    public function setCabinClass(?string $cabinClass = null): self
    {
        // validation for constraint: string
        if (!is_null($cabinClass) && !is_string($cabinClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cabinClass, true), gettype($cabinClass)), __LINE__);
        }
        $this->CabinClass = $cabinClass;
        
        return $this;
    }
    /**
     * Get ClassOfService value
     * @return string|null
     */
    public function getClassOfService(): ?string
    {
        return $this->ClassOfService;
    }
    /**
     * Set ClassOfService value
     * @param string $classOfService
     * @return \Travelport\UniversalRecord\StructType\AirSegmentData
     */
    public function setClassOfService(?string $classOfService = null): self
    {
        // validation for constraint: string
        if (!is_null($classOfService) && !is_string($classOfService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($classOfService, true), gettype($classOfService)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($classOfService) && mb_strlen((string) $classOfService) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $classOfService)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($classOfService) && mb_strlen((string) $classOfService) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $classOfService)), __LINE__);
        }
        $this->ClassOfService = $classOfService;
        
        return $this;
    }
}
