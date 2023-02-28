<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirItinerary StructType
 * Meta information extracted from the WSDL
 * - documentation: A container for an Air only travel itinerary.
 * @subpackage Structs
 */
class AirItinerary extends AbstractStructBase
{
    /**
     * The AirSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: AirSegment
     * @var \Travelport\Util\StructType\TypeBaseAirSegment[]
     */
    protected ?array $AirSegment = null;
    /**
     * The HostToken
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:HostToken
     * @var \Travelport\Util\StructType\HostToken[]
     */
    protected ?array $HostToken = null;
    /**
     * The APISRequirements
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: APISRequirements
     * @var \Travelport\Util\StructType\APISRequirements[]
     */
    protected ?array $APISRequirements = null;
    /**
     * Constructor method for AirItinerary
     * @uses AirItinerary::setAirSegment()
     * @uses AirItinerary::setHostToken()
     * @uses AirItinerary::setAPISRequirements()
     * @param \Travelport\Util\StructType\TypeBaseAirSegment[] $airSegment
     * @param \Travelport\Util\StructType\HostToken[] $hostToken
     * @param \Travelport\Util\StructType\APISRequirements[] $aPISRequirements
     */
    public function __construct(?array $airSegment = null, ?array $hostToken = null, ?array $aPISRequirements = null)
    {
        $this
            ->setAirSegment($airSegment)
            ->setHostToken($hostToken)
            ->setAPISRequirements($aPISRequirements);
    }
    /**
     * Get AirSegment value
     * @return \Travelport\Util\StructType\TypeBaseAirSegment[]
     */
    public function getAirSegment(): ?array
    {
        return $this->AirSegment;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAirSegment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSegment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirSegmentForArrayConstraintFromSetAirSegment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airItineraryAirSegmentItem) {
            // validation for constraint: itemType
            if (!$airItineraryAirSegmentItem instanceof \Travelport\Util\StructType\TypeBaseAirSegment) {
                $invalidValues[] = is_object($airItineraryAirSegmentItem) ? get_class($airItineraryAirSegmentItem) : sprintf('%s(%s)', gettype($airItineraryAirSegmentItem), var_export($airItineraryAirSegmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirSegment property can only contain items of type \Travelport\Util\StructType\TypeBaseAirSegment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeBaseAirSegment[] $airSegment
     * @return \Travelport\Util\StructType\AirItinerary
     */
    public function setAirSegment(?array $airSegment = null): self
    {
        // validation for constraint: array
        if ('' !== ($airSegmentArrayErrorMessage = self::validateAirSegmentForArrayConstraintFromSetAirSegment($airSegment))) {
            throw new InvalidArgumentException($airSegmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airSegment) && count($airSegment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airSegment)), __LINE__);
        }
        $this->AirSegment = $airSegment;
        
        return $this;
    }
    /**
     * Add item to AirSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeBaseAirSegment $item
     * @return \Travelport\Util\StructType\AirItinerary
     */
    public function addToAirSegment(\Travelport\Util\StructType\TypeBaseAirSegment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeBaseAirSegment) {
            throw new InvalidArgumentException(sprintf('The AirSegment property can only contain items of type \Travelport\Util\StructType\TypeBaseAirSegment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirSegment) && count($this->AirSegment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirSegment)), __LINE__);
        }
        $this->AirSegment[] = $item;
        
        return $this;
    }
    /**
     * Get HostToken value
     * @return \Travelport\Util\StructType\HostToken[]
     */
    public function getHostToken(): ?array
    {
        return $this->HostToken;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHostToken method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHostToken method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHostTokenForArrayConstraintFromSetHostToken(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airItineraryHostTokenItem) {
            // validation for constraint: itemType
            if (!$airItineraryHostTokenItem instanceof \Travelport\Util\StructType\HostToken) {
                $invalidValues[] = is_object($airItineraryHostTokenItem) ? get_class($airItineraryHostTokenItem) : sprintf('%s(%s)', gettype($airItineraryHostTokenItem), var_export($airItineraryHostTokenItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HostToken property can only contain items of type \Travelport\Util\StructType\HostToken, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HostToken value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\HostToken[] $hostToken
     * @return \Travelport\Util\StructType\AirItinerary
     */
    public function setHostToken(?array $hostToken = null): self
    {
        // validation for constraint: array
        if ('' !== ($hostTokenArrayErrorMessage = self::validateHostTokenForArrayConstraintFromSetHostToken($hostToken))) {
            throw new InvalidArgumentException($hostTokenArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hostToken) && count($hostToken) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hostToken)), __LINE__);
        }
        $this->HostToken = $hostToken;
        
        return $this;
    }
    /**
     * Add item to HostToken value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\HostToken $item
     * @return \Travelport\Util\StructType\AirItinerary
     */
    public function addToHostToken(\Travelport\Util\StructType\HostToken $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\HostToken) {
            throw new InvalidArgumentException(sprintf('The HostToken property can only contain items of type \Travelport\Util\StructType\HostToken, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HostToken) && count($this->HostToken) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HostToken)), __LINE__);
        }
        $this->HostToken[] = $item;
        
        return $this;
    }
    /**
     * Get APISRequirements value
     * @return \Travelport\Util\StructType\APISRequirements[]
     */
    public function getAPISRequirements(): ?array
    {
        return $this->APISRequirements;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAPISRequirements method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAPISRequirements method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAPISRequirementsForArrayConstraintFromSetAPISRequirements(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airItineraryAPISRequirementsItem) {
            // validation for constraint: itemType
            if (!$airItineraryAPISRequirementsItem instanceof \Travelport\Util\StructType\APISRequirements) {
                $invalidValues[] = is_object($airItineraryAPISRequirementsItem) ? get_class($airItineraryAPISRequirementsItem) : sprintf('%s(%s)', gettype($airItineraryAPISRequirementsItem), var_export($airItineraryAPISRequirementsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The APISRequirements property can only contain items of type \Travelport\Util\StructType\APISRequirements, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set APISRequirements value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\APISRequirements[] $aPISRequirements
     * @return \Travelport\Util\StructType\AirItinerary
     */
    public function setAPISRequirements(?array $aPISRequirements = null): self
    {
        // validation for constraint: array
        if ('' !== ($aPISRequirementsArrayErrorMessage = self::validateAPISRequirementsForArrayConstraintFromSetAPISRequirements($aPISRequirements))) {
            throw new InvalidArgumentException($aPISRequirementsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($aPISRequirements) && count($aPISRequirements) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($aPISRequirements)), __LINE__);
        }
        $this->APISRequirements = $aPISRequirements;
        
        return $this;
    }
    /**
     * Add item to APISRequirements value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\APISRequirements $item
     * @return \Travelport\Util\StructType\AirItinerary
     */
    public function addToAPISRequirements(\Travelport\Util\StructType\APISRequirements $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\APISRequirements) {
            throw new InvalidArgumentException(sprintf('The APISRequirements property can only contain items of type \Travelport\Util\StructType\APISRequirements, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->APISRequirements) && count($this->APISRequirements) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->APISRequirements)), __LINE__);
        }
        $this->APISRequirements[] = $item;
        
        return $this;
    }
}
