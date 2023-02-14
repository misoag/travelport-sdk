<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirItinerarySolution StructType
 * Meta information extracted from the WSDL
 * - documentation: The pricing container for an air travel itinerary
 * @subpackage Structs
 */
class AirItinerarySolution extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $Key;
    /**
     * The AirSegmentRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirSegmentRef
     * @var \Travelport\Util\StructType\AirSegmentRef[]
     */
    protected ?array $AirSegmentRef = null;
    /**
     * The Connection
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Connection
     * @var \Travelport\Util\StructType\Connection[]
     */
    protected ?array $Connection = null;
    /**
     * Constructor method for AirItinerarySolution
     * @uses AirItinerarySolution::setKey()
     * @uses AirItinerarySolution::setAirSegmentRef()
     * @uses AirItinerarySolution::setConnection()
     * @param string $key
     * @param \Travelport\Util\StructType\AirSegmentRef[] $airSegmentRef
     * @param \Travelport\Util\StructType\Connection[] $connection
     */
    public function __construct(string $key, ?array $airSegmentRef = null, ?array $connection = null)
    {
        $this
            ->setKey($key)
            ->setAirSegmentRef($airSegmentRef)
            ->setConnection($connection);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Util\StructType\AirItinerarySolution
     */
    public function setKey(string $key): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get AirSegmentRef value
     * @return \Travelport\Util\StructType\AirSegmentRef[]
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
        foreach ($values as $airItinerarySolutionAirSegmentRefItem) {
            // validation for constraint: itemType
            if (!$airItinerarySolutionAirSegmentRefItem instanceof \Travelport\Util\StructType\AirSegmentRef) {
                $invalidValues[] = is_object($airItinerarySolutionAirSegmentRefItem) ? get_class($airItinerarySolutionAirSegmentRefItem) : sprintf('%s(%s)', gettype($airItinerarySolutionAirSegmentRefItem), var_export($airItinerarySolutionAirSegmentRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirSegmentRef property can only contain items of type \Travelport\Util\StructType\AirSegmentRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirSegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirSegmentRef[] $airSegmentRef
     * @return \Travelport\Util\StructType\AirItinerarySolution
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
     * @param \Travelport\Util\StructType\AirSegmentRef $item
     * @return \Travelport\Util\StructType\AirItinerarySolution
     */
    public function addToAirSegmentRef(\Travelport\Util\StructType\AirSegmentRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AirSegmentRef) {
            throw new InvalidArgumentException(sprintf('The AirSegmentRef property can only contain items of type \Travelport\Util\StructType\AirSegmentRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirSegmentRef) && count($this->AirSegmentRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirSegmentRef)), __LINE__);
        }
        $this->AirSegmentRef[] = $item;
        
        return $this;
    }
    /**
     * Get Connection value
     * @return \Travelport\Util\StructType\Connection[]
     */
    public function getConnection(): ?array
    {
        return $this->Connection;
    }
    /**
     * This method is responsible for validating the values passed to the setConnection method
     * This method is willingly generated in order to preserve the one-line inline validation within the setConnection method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateConnectionForArrayConstraintsFromSetConnection(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airItinerarySolutionConnectionItem) {
            // validation for constraint: itemType
            if (!$airItinerarySolutionConnectionItem instanceof \Travelport\Util\StructType\Connection) {
                $invalidValues[] = is_object($airItinerarySolutionConnectionItem) ? get_class($airItinerarySolutionConnectionItem) : sprintf('%s(%s)', gettype($airItinerarySolutionConnectionItem), var_export($airItinerarySolutionConnectionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Connection property can only contain items of type \Travelport\Util\StructType\Connection, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Connection value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Connection[] $connection
     * @return \Travelport\Util\StructType\AirItinerarySolution
     */
    public function setConnection(?array $connection = null): self
    {
        // validation for constraint: array
        if ('' !== ($connectionArrayErrorMessage = self::validateConnectionForArrayConstraintsFromSetConnection($connection))) {
            throw new InvalidArgumentException($connectionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($connection) && count($connection) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($connection)), __LINE__);
        }
        $this->Connection = $connection;
        
        return $this;
    }
    /**
     * Add item to Connection value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Connection $item
     * @return \Travelport\Util\StructType\AirItinerarySolution
     */
    public function addToConnection(\Travelport\Util\StructType\Connection $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Connection) {
            throw new InvalidArgumentException(sprintf('The Connection property can only contain items of type \Travelport\Util\StructType\Connection, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Connection) && count($this->Connection) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Connection)), __LINE__);
        }
        $this->Connection[] = $item;
        
        return $this;
    }
}
