<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProviderReservationDisplayDetailsList StructType
 * Meta information extracted from the WSDL
 * - documentation: Response to display the addtional details of provider reservation information .
 * @subpackage Structs
 */
class ProviderReservationDisplayDetailsList extends AbstractStructBase
{
    /**
     * The DisplayDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: DisplayDetails
     * @var \Travelport\UniversalRecord\StructType\DisplayDetails[]
     */
    protected ?array $DisplayDetails = null;
    /**
     * The TravelerNameNum
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TravelerNameNum
     * @var \Travelport\UniversalRecord\StructType\TravelerNameNum[]
     */
    protected ?array $TravelerNameNum = null;
    /**
     * Constructor method for ProviderReservationDisplayDetailsList
     * @uses ProviderReservationDisplayDetailsList::setDisplayDetails()
     * @uses ProviderReservationDisplayDetailsList::setTravelerNameNum()
     * @param \Travelport\UniversalRecord\StructType\DisplayDetails[] $displayDetails
     * @param \Travelport\UniversalRecord\StructType\TravelerNameNum[] $travelerNameNum
     */
    public function __construct(?array $displayDetails = null, ?array $travelerNameNum = null)
    {
        $this
            ->setDisplayDetails($displayDetails)
            ->setTravelerNameNum($travelerNameNum);
    }
    /**
     * Get DisplayDetails value
     * @return \Travelport\UniversalRecord\StructType\DisplayDetails[]
     */
    public function getDisplayDetails(): ?array
    {
        return $this->DisplayDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setDisplayDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDisplayDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDisplayDetailsForArrayConstraintsFromSetDisplayDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $providerReservationDisplayDetailsListDisplayDetailsItem) {
            // validation for constraint: itemType
            if (!$providerReservationDisplayDetailsListDisplayDetailsItem instanceof \Travelport\UniversalRecord\StructType\DisplayDetails) {
                $invalidValues[] = is_object($providerReservationDisplayDetailsListDisplayDetailsItem) ? get_class($providerReservationDisplayDetailsListDisplayDetailsItem) : sprintf('%s(%s)', gettype($providerReservationDisplayDetailsListDisplayDetailsItem), var_export($providerReservationDisplayDetailsListDisplayDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DisplayDetails property can only contain items of type \Travelport\UniversalRecord\StructType\DisplayDetails, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DisplayDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\DisplayDetails[] $displayDetails
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsList
     */
    public function setDisplayDetails(?array $displayDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($displayDetailsArrayErrorMessage = self::validateDisplayDetailsForArrayConstraintsFromSetDisplayDetails($displayDetails))) {
            throw new InvalidArgumentException($displayDetailsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($displayDetails) && count($displayDetails) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($displayDetails)), __LINE__);
        }
        $this->DisplayDetails = $displayDetails;
        
        return $this;
    }
    /**
     * Add item to DisplayDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\DisplayDetails $item
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsList
     */
    public function addToDisplayDetails(\Travelport\UniversalRecord\StructType\DisplayDetails $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\DisplayDetails) {
            throw new InvalidArgumentException(sprintf('The DisplayDetails property can only contain items of type \Travelport\UniversalRecord\StructType\DisplayDetails, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->DisplayDetails) && count($this->DisplayDetails) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->DisplayDetails)), __LINE__);
        }
        $this->DisplayDetails[] = $item;
        
        return $this;
    }
    /**
     * Get TravelerNameNum value
     * @return \Travelport\UniversalRecord\StructType\TravelerNameNum[]
     */
    public function getTravelerNameNum(): ?array
    {
        return $this->TravelerNameNum;
    }
    /**
     * This method is responsible for validating the values passed to the setTravelerNameNum method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTravelerNameNum method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTravelerNameNumForArrayConstraintsFromSetTravelerNameNum(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $providerReservationDisplayDetailsListTravelerNameNumItem) {
            // validation for constraint: itemType
            if (!$providerReservationDisplayDetailsListTravelerNameNumItem instanceof \Travelport\UniversalRecord\StructType\TravelerNameNum) {
                $invalidValues[] = is_object($providerReservationDisplayDetailsListTravelerNameNumItem) ? get_class($providerReservationDisplayDetailsListTravelerNameNumItem) : sprintf('%s(%s)', gettype($providerReservationDisplayDetailsListTravelerNameNumItem), var_export($providerReservationDisplayDetailsListTravelerNameNumItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TravelerNameNum property can only contain items of type \Travelport\UniversalRecord\StructType\TravelerNameNum, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TravelerNameNum value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TravelerNameNum[] $travelerNameNum
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsList
     */
    public function setTravelerNameNum(?array $travelerNameNum = null): self
    {
        // validation for constraint: array
        if ('' !== ($travelerNameNumArrayErrorMessage = self::validateTravelerNameNumForArrayConstraintsFromSetTravelerNameNum($travelerNameNum))) {
            throw new InvalidArgumentException($travelerNameNumArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($travelerNameNum) && count($travelerNameNum) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($travelerNameNum)), __LINE__);
        }
        $this->TravelerNameNum = $travelerNameNum;
        
        return $this;
    }
    /**
     * Add item to TravelerNameNum value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TravelerNameNum $item
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsList
     */
    public function addToTravelerNameNum(\Travelport\UniversalRecord\StructType\TravelerNameNum $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TravelerNameNum) {
            throw new InvalidArgumentException(sprintf('The TravelerNameNum property can only contain items of type \Travelport\UniversalRecord\StructType\TravelerNameNum, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TravelerNameNum) && count($this->TravelerNameNum) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TravelerNameNum)), __LINE__);
        }
        $this->TravelerNameNum[] = $item;
        
        return $this;
    }
}
