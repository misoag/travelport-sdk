<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirItineraryDetails StructType
 * Meta information extracted from the WSDL
 * - documentation: Itinerary details containing brand details
 * @subpackage Structs
 */
class AirItineraryDetails extends AbstractStructBase
{
    /**
     * The AirSegmentDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 16
     * - minOccurs: 1
     * - ref: AirSegmentDetails
     * @var \Travelport\UniversalRecord\StructType\AirSegmentDetails[]
     */
    protected array $AirSegmentDetails;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Air itinerary details key | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $Key;
    /**
     * The PassengerDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 15
     * - ref: PassengerDetails
     * @var \Travelport\UniversalRecord\StructType\PassengerDetails[]
     */
    protected ?array $PassengerDetails = null;
    /**
     * Constructor method for AirItineraryDetails
     * @uses AirItineraryDetails::setAirSegmentDetails()
     * @uses AirItineraryDetails::setKey()
     * @uses AirItineraryDetails::setPassengerDetails()
     * @param \Travelport\UniversalRecord\StructType\AirSegmentDetails[] $airSegmentDetails
     * @param string $key
     * @param \Travelport\UniversalRecord\StructType\PassengerDetails[] $passengerDetails
     */
    public function __construct(array $airSegmentDetails, string $key, ?array $passengerDetails = null)
    {
        $this
            ->setAirSegmentDetails($airSegmentDetails)
            ->setKey($key)
            ->setPassengerDetails($passengerDetails);
    }
    /**
     * Get AirSegmentDetails value
     * @return \Travelport\UniversalRecord\StructType\AirSegmentDetails[]
     */
    public function getAirSegmentDetails(): array
    {
        return $this->AirSegmentDetails;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAirSegmentDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSegmentDetails method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirSegmentDetailsForArrayConstraintFromSetAirSegmentDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airItineraryDetailsAirSegmentDetailsItem) {
            // validation for constraint: itemType
            if (!$airItineraryDetailsAirSegmentDetailsItem instanceof \Travelport\UniversalRecord\StructType\AirSegmentDetails) {
                $invalidValues[] = is_object($airItineraryDetailsAirSegmentDetailsItem) ? get_class($airItineraryDetailsAirSegmentDetailsItem) : sprintf('%s(%s)', gettype($airItineraryDetailsAirSegmentDetailsItem), var_export($airItineraryDetailsAirSegmentDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirSegmentDetails property can only contain items of type \Travelport\UniversalRecord\StructType\AirSegmentDetails, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirSegmentDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirSegmentDetails[] $airSegmentDetails
     * @return \Travelport\UniversalRecord\StructType\AirItineraryDetails
     */
    public function setAirSegmentDetails(array $airSegmentDetails): self
    {
        // validation for constraint: array
        if ('' !== ($airSegmentDetailsArrayErrorMessage = self::validateAirSegmentDetailsForArrayConstraintFromSetAirSegmentDetails($airSegmentDetails))) {
            throw new InvalidArgumentException($airSegmentDetailsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(16)
        if (is_array($airSegmentDetails) && count($airSegmentDetails) > 16) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 16', count($airSegmentDetails)), __LINE__);
        }
        $this->AirSegmentDetails = $airSegmentDetails;
        
        return $this;
    }
    /**
     * Add item to AirSegmentDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirSegmentDetails $item
     * @return \Travelport\UniversalRecord\StructType\AirItineraryDetails
     */
    public function addToAirSegmentDetails(\Travelport\UniversalRecord\StructType\AirSegmentDetails $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirSegmentDetails) {
            throw new InvalidArgumentException(sprintf('The AirSegmentDetails property can only contain items of type \Travelport\UniversalRecord\StructType\AirSegmentDetails, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(16)
        if (is_array($this->AirSegmentDetails) && count($this->AirSegmentDetails) >= 16) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 16', count($this->AirSegmentDetails)), __LINE__);
        }
        $this->AirSegmentDetails[] = $item;
        
        return $this;
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
     * @return \Travelport\UniversalRecord\StructType\AirItineraryDetails
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
     * Get PassengerDetails value
     * @return \Travelport\UniversalRecord\StructType\PassengerDetails[]
     */
    public function getPassengerDetails(): ?array
    {
        return $this->PassengerDetails;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPassengerDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPassengerDetails method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePassengerDetailsForArrayConstraintFromSetPassengerDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airItineraryDetailsPassengerDetailsItem) {
            // validation for constraint: itemType
            if (!$airItineraryDetailsPassengerDetailsItem instanceof \Travelport\UniversalRecord\StructType\PassengerDetails) {
                $invalidValues[] = is_object($airItineraryDetailsPassengerDetailsItem) ? get_class($airItineraryDetailsPassengerDetailsItem) : sprintf('%s(%s)', gettype($airItineraryDetailsPassengerDetailsItem), var_export($airItineraryDetailsPassengerDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PassengerDetails property can only contain items of type \Travelport\UniversalRecord\StructType\PassengerDetails, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PassengerDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PassengerDetails[] $passengerDetails
     * @return \Travelport\UniversalRecord\StructType\AirItineraryDetails
     */
    public function setPassengerDetails(?array $passengerDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($passengerDetailsArrayErrorMessage = self::validatePassengerDetailsForArrayConstraintFromSetPassengerDetails($passengerDetails))) {
            throw new InvalidArgumentException($passengerDetailsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(15)
        if (is_array($passengerDetails) && count($passengerDetails) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 15', count($passengerDetails)), __LINE__);
        }
        $this->PassengerDetails = $passengerDetails;
        
        return $this;
    }
    /**
     * Add item to PassengerDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PassengerDetails $item
     * @return \Travelport\UniversalRecord\StructType\AirItineraryDetails
     */
    public function addToPassengerDetails(\Travelport\UniversalRecord\StructType\PassengerDetails $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\PassengerDetails) {
            throw new InvalidArgumentException(sprintf('The PassengerDetails property can only contain items of type \Travelport\UniversalRecord\StructType\PassengerDetails, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(15)
        if (is_array($this->PassengerDetails) && count($this->PassengerDetails) >= 15) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 15', count($this->PassengerDetails)), __LINE__);
        }
        $this->PassengerDetails[] = $item;
        
        return $this;
    }
}
