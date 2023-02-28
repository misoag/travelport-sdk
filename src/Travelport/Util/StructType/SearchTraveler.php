<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchTraveler StructType
 * @subpackage Structs
 */
class SearchTraveler extends TypePassengerType
{
    /**
     * The AirSeatAssignment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:AirSeatAssignment
     * @var \Travelport\Util\StructType\AirSeatAssignment[]
     */
    protected ?array $AirSeatAssignment = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * Constructor method for SearchTraveler
     * @uses SearchTraveler::setAirSeatAssignment()
     * @uses SearchTraveler::setKey()
     * @param \Travelport\Util\StructType\AirSeatAssignment[] $airSeatAssignment
     * @param string $key
     */
    public function __construct(?array $airSeatAssignment = null, ?string $key = null)
    {
        $this
            ->setAirSeatAssignment($airSeatAssignment)
            ->setKey($key);
    }
    /**
     * Get AirSeatAssignment value
     * @return \Travelport\Util\StructType\AirSeatAssignment[]
     */
    public function getAirSeatAssignment(): ?array
    {
        return $this->AirSeatAssignment;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAirSeatAssignment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSeatAssignment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirSeatAssignmentForArrayConstraintFromSetAirSeatAssignment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchTravelerAirSeatAssignmentItem) {
            // validation for constraint: itemType
            if (!$searchTravelerAirSeatAssignmentItem instanceof \Travelport\Util\StructType\AirSeatAssignment) {
                $invalidValues[] = is_object($searchTravelerAirSeatAssignmentItem) ? get_class($searchTravelerAirSeatAssignmentItem) : sprintf('%s(%s)', gettype($searchTravelerAirSeatAssignmentItem), var_export($searchTravelerAirSeatAssignmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirSeatAssignment property can only contain items of type \Travelport\Util\StructType\AirSeatAssignment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirSeatAssignment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirSeatAssignment[] $airSeatAssignment
     * @return \Travelport\Util\StructType\SearchTraveler
     */
    public function setAirSeatAssignment(?array $airSeatAssignment = null): self
    {
        // validation for constraint: array
        if ('' !== ($airSeatAssignmentArrayErrorMessage = self::validateAirSeatAssignmentForArrayConstraintFromSetAirSeatAssignment($airSeatAssignment))) {
            throw new InvalidArgumentException($airSeatAssignmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airSeatAssignment) && count($airSeatAssignment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airSeatAssignment)), __LINE__);
        }
        $this->AirSeatAssignment = $airSeatAssignment;
        
        return $this;
    }
    /**
     * Add item to AirSeatAssignment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirSeatAssignment $item
     * @return \Travelport\Util\StructType\SearchTraveler
     */
    public function addToAirSeatAssignment(\Travelport\Util\StructType\AirSeatAssignment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AirSeatAssignment) {
            throw new InvalidArgumentException(sprintf('The AirSeatAssignment property can only contain items of type \Travelport\Util\StructType\AirSeatAssignment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirSeatAssignment) && count($this->AirSeatAssignment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirSeatAssignment)), __LINE__);
        }
        $this->AirSeatAssignment[] = $item;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Util\StructType\SearchTraveler
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
}
