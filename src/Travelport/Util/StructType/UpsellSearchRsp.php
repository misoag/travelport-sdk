<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpsellSearchRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Response containing qualify and offer for the matching search criteria.
 * @subpackage Structs
 */
class UpsellSearchRsp extends BaseRsp
{
    /**
     * The MoreResults
     * Meta information extracted from the WSDL
     * - documentation: Used to browse beyond the maximum number of results specified with the MaxResults parameter. Acts as an offset to skip the specified number of PNRs from the begining of the result set.
     * - base: xs:boolean
     * - use: required
     * @var bool
     */
    protected bool $MoreResults;
    /**
     * The AirUpsellSearchResult
     * Meta information extracted from the WSDL
     * - choice: AirUpsellSearchResult | HotelUpsellSearchResult | VehicleUpsellSearchResult
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirUpsellSearchResult
     * @var \Travelport\Util\StructType\AirUpsellSearchResult[]
     */
    protected ?array $AirUpsellSearchResult = null;
    /**
     * The HotelUpsellSearchResult
     * Meta information extracted from the WSDL
     * - choice: AirUpsellSearchResult | HotelUpsellSearchResult | VehicleUpsellSearchResult
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: HotelUpsellSearchResult
     * @var \Travelport\Util\StructType\HotelUpsellSearchResult[]
     */
    protected ?array $HotelUpsellSearchResult = null;
    /**
     * The VehicleUpsellSearchResult
     * Meta information extracted from the WSDL
     * - choice: AirUpsellSearchResult | HotelUpsellSearchResult | VehicleUpsellSearchResult
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: VehicleUpsellSearchResult
     * @var \Travelport\Util\StructType\VehicleUpsellSearchResult[]
     */
    protected ?array $VehicleUpsellSearchResult = null;
    /**
     * Constructor method for UpsellSearchRsp
     * @uses UpsellSearchRsp::setMoreResults()
     * @uses UpsellSearchRsp::setAirUpsellSearchResult()
     * @uses UpsellSearchRsp::setHotelUpsellSearchResult()
     * @uses UpsellSearchRsp::setVehicleUpsellSearchResult()
     * @param bool $moreResults
     * @param \Travelport\Util\StructType\AirUpsellSearchResult[] $airUpsellSearchResult
     * @param \Travelport\Util\StructType\HotelUpsellSearchResult[] $hotelUpsellSearchResult
     * @param \Travelport\Util\StructType\VehicleUpsellSearchResult[] $vehicleUpsellSearchResult
     */
    public function __construct(bool $moreResults, ?array $airUpsellSearchResult = null, ?array $hotelUpsellSearchResult = null, ?array $vehicleUpsellSearchResult = null)
    {
        $this
            ->setMoreResults($moreResults)
            ->setAirUpsellSearchResult($airUpsellSearchResult)
            ->setHotelUpsellSearchResult($hotelUpsellSearchResult)
            ->setVehicleUpsellSearchResult($vehicleUpsellSearchResult);
    }
    /**
     * Get MoreResults value
     * @return bool
     */
    public function getMoreResults(): bool
    {
        return $this->MoreResults;
    }
    /**
     * Set MoreResults value
     * @param bool $moreResults
     * @return \Travelport\Util\StructType\UpsellSearchRsp
     */
    public function setMoreResults(bool $moreResults): self
    {
        // validation for constraint: boolean
        if (!is_null($moreResults) && !is_bool($moreResults)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($moreResults, true), gettype($moreResults)), __LINE__);
        }
        $this->MoreResults = $moreResults;
        
        return $this;
    }
    /**
     * Get AirUpsellSearchResult value
     * @return \Travelport\Util\StructType\AirUpsellSearchResult[]|null
     */
    public function getAirUpsellSearchResult(): ?array
    {
        return $this->AirUpsellSearchResult ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAirUpsellSearchResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirUpsellSearchResult method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirUpsellSearchResultForArrayConstraintFromSetAirUpsellSearchResult(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $upsellSearchRspAirUpsellSearchResultItem) {
            // validation for constraint: itemType
            if (!$upsellSearchRspAirUpsellSearchResultItem instanceof \Travelport\Util\StructType\AirUpsellSearchResult) {
                $invalidValues[] = is_object($upsellSearchRspAirUpsellSearchResultItem) ? get_class($upsellSearchRspAirUpsellSearchResultItem) : sprintf('%s(%s)', gettype($upsellSearchRspAirUpsellSearchResultItem), var_export($upsellSearchRspAirUpsellSearchResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirUpsellSearchResult property can only contain items of type \Travelport\Util\StructType\AirUpsellSearchResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAirUpsellSearchResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirUpsellSearchResult method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAirUpsellSearchResultForChoiceConstraintFromSetAirUpsellSearchResult($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'HotelUpsellSearchResult',
            'VehicleUpsellSearchResult',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AirUpsellSearchResult can\'t be set as the property %s is already set. Only one property must be set among these properties: AirUpsellSearchResult, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AirUpsellSearchResult value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirUpsellSearchResult[] $airUpsellSearchResult
     * @return \Travelport\Util\StructType\UpsellSearchRsp
     */
    public function setAirUpsellSearchResult(?array $airUpsellSearchResult = null): self
    {
        // validation for constraint: array
        if ('' !== ($airUpsellSearchResultArrayErrorMessage = self::validateAirUpsellSearchResultForArrayConstraintFromSetAirUpsellSearchResult($airUpsellSearchResult))) {
            throw new InvalidArgumentException($airUpsellSearchResultArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AirUpsellSearchResult, HotelUpsellSearchResult, VehicleUpsellSearchResult)
        if ('' !== ($airUpsellSearchResultChoiceErrorMessage = self::validateAirUpsellSearchResultForChoiceConstraintFromSetAirUpsellSearchResult($airUpsellSearchResult))) {
            throw new InvalidArgumentException($airUpsellSearchResultChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($airUpsellSearchResult) && count($airUpsellSearchResult) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($airUpsellSearchResult)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airUpsellSearchResult) && count($airUpsellSearchResult) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airUpsellSearchResult)), __LINE__);
        }
        if (is_null($airUpsellSearchResult) || (is_array($airUpsellSearchResult) && empty($airUpsellSearchResult))) {
            unset($this->AirUpsellSearchResult);
        } else {
            $this->AirUpsellSearchResult = $airUpsellSearchResult;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToAirUpsellSearchResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToAirUpsellSearchResult method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToAirUpsellSearchResult($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'HotelUpsellSearchResult',
            'VehicleUpsellSearchResult',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AirUpsellSearchResult can\'t be set as the property %s is already set. Only one property must be set among these properties: AirUpsellSearchResult, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to AirUpsellSearchResult value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirUpsellSearchResult $item
     * @return \Travelport\Util\StructType\UpsellSearchRsp
     */
    public function addToAirUpsellSearchResult(\Travelport\Util\StructType\AirUpsellSearchResult $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AirUpsellSearchResult) {
            throw new InvalidArgumentException(sprintf('The AirUpsellSearchResult property can only contain items of type \Travelport\Util\StructType\AirUpsellSearchResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AirUpsellSearchResult, HotelUpsellSearchResult, VehicleUpsellSearchResult)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToAirUpsellSearchResult($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->AirUpsellSearchResult) && count($this->AirUpsellSearchResult) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->AirUpsellSearchResult)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirUpsellSearchResult) && count($this->AirUpsellSearchResult) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirUpsellSearchResult)), __LINE__);
        }
        $this->AirUpsellSearchResult[] = $item;
        
        return $this;
    }
    /**
     * Get HotelUpsellSearchResult value
     * @return \Travelport\Util\StructType\HotelUpsellSearchResult[]|null
     */
    public function getHotelUpsellSearchResult(): ?array
    {
        return $this->HotelUpsellSearchResult ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHotelUpsellSearchResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelUpsellSearchResult method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelUpsellSearchResultForArrayConstraintFromSetHotelUpsellSearchResult(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $upsellSearchRspHotelUpsellSearchResultItem) {
            // validation for constraint: itemType
            if (!$upsellSearchRspHotelUpsellSearchResultItem instanceof \Travelport\Util\StructType\HotelUpsellSearchResult) {
                $invalidValues[] = is_object($upsellSearchRspHotelUpsellSearchResultItem) ? get_class($upsellSearchRspHotelUpsellSearchResultItem) : sprintf('%s(%s)', gettype($upsellSearchRspHotelUpsellSearchResultItem), var_export($upsellSearchRspHotelUpsellSearchResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelUpsellSearchResult property can only contain items of type \Travelport\Util\StructType\HotelUpsellSearchResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHotelUpsellSearchResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelUpsellSearchResult method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateHotelUpsellSearchResultForChoiceConstraintFromSetHotelUpsellSearchResult($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AirUpsellSearchResult',
            'VehicleUpsellSearchResult',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property HotelUpsellSearchResult can\'t be set as the property %s is already set. Only one property must be set among these properties: HotelUpsellSearchResult, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set HotelUpsellSearchResult value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\HotelUpsellSearchResult[] $hotelUpsellSearchResult
     * @return \Travelport\Util\StructType\UpsellSearchRsp
     */
    public function setHotelUpsellSearchResult(?array $hotelUpsellSearchResult = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelUpsellSearchResultArrayErrorMessage = self::validateHotelUpsellSearchResultForArrayConstraintFromSetHotelUpsellSearchResult($hotelUpsellSearchResult))) {
            throw new InvalidArgumentException($hotelUpsellSearchResultArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AirUpsellSearchResult, HotelUpsellSearchResult, VehicleUpsellSearchResult)
        if ('' !== ($hotelUpsellSearchResultChoiceErrorMessage = self::validateHotelUpsellSearchResultForChoiceConstraintFromSetHotelUpsellSearchResult($hotelUpsellSearchResult))) {
            throw new InvalidArgumentException($hotelUpsellSearchResultChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($hotelUpsellSearchResult) && count($hotelUpsellSearchResult) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($hotelUpsellSearchResult)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelUpsellSearchResult) && count($hotelUpsellSearchResult) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelUpsellSearchResult)), __LINE__);
        }
        if (is_null($hotelUpsellSearchResult) || (is_array($hotelUpsellSearchResult) && empty($hotelUpsellSearchResult))) {
            unset($this->HotelUpsellSearchResult);
        } else {
            $this->HotelUpsellSearchResult = $hotelUpsellSearchResult;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToHotelUpsellSearchResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToHotelUpsellSearchResult method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToHotelUpsellSearchResult($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AirUpsellSearchResult',
            'VehicleUpsellSearchResult',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property HotelUpsellSearchResult can\'t be set as the property %s is already set. Only one property must be set among these properties: HotelUpsellSearchResult, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to HotelUpsellSearchResult value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\HotelUpsellSearchResult $item
     * @return \Travelport\Util\StructType\UpsellSearchRsp
     */
    public function addToHotelUpsellSearchResult(\Travelport\Util\StructType\HotelUpsellSearchResult $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\HotelUpsellSearchResult) {
            throw new InvalidArgumentException(sprintf('The HotelUpsellSearchResult property can only contain items of type \Travelport\Util\StructType\HotelUpsellSearchResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AirUpsellSearchResult, HotelUpsellSearchResult, VehicleUpsellSearchResult)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToHotelUpsellSearchResult($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->HotelUpsellSearchResult) && count($this->HotelUpsellSearchResult) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->HotelUpsellSearchResult)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelUpsellSearchResult) && count($this->HotelUpsellSearchResult) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelUpsellSearchResult)), __LINE__);
        }
        $this->HotelUpsellSearchResult[] = $item;
        
        return $this;
    }
    /**
     * Get VehicleUpsellSearchResult value
     * @return \Travelport\Util\StructType\VehicleUpsellSearchResult[]|null
     */
    public function getVehicleUpsellSearchResult(): ?array
    {
        return $this->VehicleUpsellSearchResult ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setVehicleUpsellSearchResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleUpsellSearchResult method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVehicleUpsellSearchResultForArrayConstraintFromSetVehicleUpsellSearchResult(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $upsellSearchRspVehicleUpsellSearchResultItem) {
            // validation for constraint: itemType
            if (!$upsellSearchRspVehicleUpsellSearchResultItem instanceof \Travelport\Util\StructType\VehicleUpsellSearchResult) {
                $invalidValues[] = is_object($upsellSearchRspVehicleUpsellSearchResultItem) ? get_class($upsellSearchRspVehicleUpsellSearchResultItem) : sprintf('%s(%s)', gettype($upsellSearchRspVehicleUpsellSearchResultItem), var_export($upsellSearchRspVehicleUpsellSearchResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VehicleUpsellSearchResult property can only contain items of type \Travelport\Util\StructType\VehicleUpsellSearchResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setVehicleUpsellSearchResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleUpsellSearchResult method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateVehicleUpsellSearchResultForChoiceConstraintFromSetVehicleUpsellSearchResult($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AirUpsellSearchResult',
            'HotelUpsellSearchResult',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property VehicleUpsellSearchResult can\'t be set as the property %s is already set. Only one property must be set among these properties: VehicleUpsellSearchResult, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set VehicleUpsellSearchResult value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\VehicleUpsellSearchResult[] $vehicleUpsellSearchResult
     * @return \Travelport\Util\StructType\UpsellSearchRsp
     */
    public function setVehicleUpsellSearchResult(?array $vehicleUpsellSearchResult = null): self
    {
        // validation for constraint: array
        if ('' !== ($vehicleUpsellSearchResultArrayErrorMessage = self::validateVehicleUpsellSearchResultForArrayConstraintFromSetVehicleUpsellSearchResult($vehicleUpsellSearchResult))) {
            throw new InvalidArgumentException($vehicleUpsellSearchResultArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AirUpsellSearchResult, HotelUpsellSearchResult, VehicleUpsellSearchResult)
        if ('' !== ($vehicleUpsellSearchResultChoiceErrorMessage = self::validateVehicleUpsellSearchResultForChoiceConstraintFromSetVehicleUpsellSearchResult($vehicleUpsellSearchResult))) {
            throw new InvalidArgumentException($vehicleUpsellSearchResultChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($vehicleUpsellSearchResult) && count($vehicleUpsellSearchResult) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($vehicleUpsellSearchResult)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($vehicleUpsellSearchResult) && count($vehicleUpsellSearchResult) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($vehicleUpsellSearchResult)), __LINE__);
        }
        if (is_null($vehicleUpsellSearchResult) || (is_array($vehicleUpsellSearchResult) && empty($vehicleUpsellSearchResult))) {
            unset($this->VehicleUpsellSearchResult);
        } else {
            $this->VehicleUpsellSearchResult = $vehicleUpsellSearchResult;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToVehicleUpsellSearchResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToVehicleUpsellSearchResult method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToVehicleUpsellSearchResult($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AirUpsellSearchResult',
            'HotelUpsellSearchResult',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property VehicleUpsellSearchResult can\'t be set as the property %s is already set. Only one property must be set among these properties: VehicleUpsellSearchResult, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to VehicleUpsellSearchResult value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\VehicleUpsellSearchResult $item
     * @return \Travelport\Util\StructType\UpsellSearchRsp
     */
    public function addToVehicleUpsellSearchResult(\Travelport\Util\StructType\VehicleUpsellSearchResult $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\VehicleUpsellSearchResult) {
            throw new InvalidArgumentException(sprintf('The VehicleUpsellSearchResult property can only contain items of type \Travelport\Util\StructType\VehicleUpsellSearchResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AirUpsellSearchResult, HotelUpsellSearchResult, VehicleUpsellSearchResult)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToVehicleUpsellSearchResult($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->VehicleUpsellSearchResult) && count($this->VehicleUpsellSearchResult) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->VehicleUpsellSearchResult)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->VehicleUpsellSearchResult) && count($this->VehicleUpsellSearchResult) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->VehicleUpsellSearchResult)), __LINE__);
        }
        $this->VehicleUpsellSearchResult[] = $item;
        
        return $this;
    }
}
