<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirSolution StructType
 * Meta information extracted from the WSDL
 * - documentation: Defines an air solution that is comprised of an itinerary (the segments) along with the passengers.
 * @subpackage Structs
 */
class AirSolution extends AbstractStructBase
{
    /**
     * The SearchTraveler
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * - ref: SearchTraveler
     * @var \Travelport\Util\StructType\SearchTraveler[]
     */
    protected ?array $SearchTraveler = null;
    /**
     * The AirSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 16
     * - ref: AirSegment
     * @var \Travelport\Util\StructType\TypeBaseAirSegment[]
     */
    protected ?array $AirSegment = null;
    /**
     * The HostToken
     * Meta information extracted from the WSDL
     * - maxOccurs: 16
     * - minOccurs: 0
     * - ref: common:HostToken
     * @var \Travelport\Util\StructType\HostToken[]
     */
    protected ?array $HostToken = null;
    /**
     * The FareBasis
     * Meta information extracted from the WSDL
     * - maxOccurs: 16
     * - minOccurs: 0
     * - ref: FareBasis
     * @var \Travelport\Util\StructType\FareBasis[]
     */
    protected ?array $FareBasis = null;
    /**
     * Constructor method for AirSolution
     * @uses AirSolution::setSearchTraveler()
     * @uses AirSolution::setAirSegment()
     * @uses AirSolution::setHostToken()
     * @uses AirSolution::setFareBasis()
     * @param \Travelport\Util\StructType\SearchTraveler[] $searchTraveler
     * @param \Travelport\Util\StructType\TypeBaseAirSegment[] $airSegment
     * @param \Travelport\Util\StructType\HostToken[] $hostToken
     * @param \Travelport\Util\StructType\FareBasis[] $fareBasis
     */
    public function __construct(?array $searchTraveler = null, ?array $airSegment = null, ?array $hostToken = null, ?array $fareBasis = null)
    {
        $this
            ->setSearchTraveler($searchTraveler)
            ->setAirSegment($airSegment)
            ->setHostToken($hostToken)
            ->setFareBasis($fareBasis);
    }
    /**
     * Get SearchTraveler value
     * @return \Travelport\Util\StructType\SearchTraveler[]
     */
    public function getSearchTraveler(): ?array
    {
        return $this->SearchTraveler;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSearchTraveler method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchTraveler method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSearchTravelerForArrayConstraintFromSetSearchTraveler(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airSolutionSearchTravelerItem) {
            // validation for constraint: itemType
            if (!$airSolutionSearchTravelerItem instanceof \Travelport\Util\StructType\SearchTraveler) {
                $invalidValues[] = is_object($airSolutionSearchTravelerItem) ? get_class($airSolutionSearchTravelerItem) : sprintf('%s(%s)', gettype($airSolutionSearchTravelerItem), var_export($airSolutionSearchTravelerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SearchTraveler property can only contain items of type \Travelport\Util\StructType\SearchTraveler, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SearchTraveler value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\SearchTraveler[] $searchTraveler
     * @return \Travelport\Util\StructType\AirSolution
     */
    public function setSearchTraveler(?array $searchTraveler = null): self
    {
        // validation for constraint: array
        if ('' !== ($searchTravelerArrayErrorMessage = self::validateSearchTravelerForArrayConstraintFromSetSearchTraveler($searchTraveler))) {
            throw new InvalidArgumentException($searchTravelerArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($searchTraveler) && count($searchTraveler) > 9) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 9', count($searchTraveler)), __LINE__);
        }
        $this->SearchTraveler = $searchTraveler;
        
        return $this;
    }
    /**
     * Add item to SearchTraveler value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\SearchTraveler $item
     * @return \Travelport\Util\StructType\AirSolution
     */
    public function addToSearchTraveler(\Travelport\Util\StructType\SearchTraveler $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\SearchTraveler) {
            throw new InvalidArgumentException(sprintf('The SearchTraveler property can only contain items of type \Travelport\Util\StructType\SearchTraveler, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($this->SearchTraveler) && count($this->SearchTraveler) >= 9) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 9', count($this->SearchTraveler)), __LINE__);
        }
        $this->SearchTraveler[] = $item;
        
        return $this;
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
        foreach ($values as $airSolutionAirSegmentItem) {
            // validation for constraint: itemType
            if (!$airSolutionAirSegmentItem instanceof \Travelport\Util\StructType\TypeBaseAirSegment) {
                $invalidValues[] = is_object($airSolutionAirSegmentItem) ? get_class($airSolutionAirSegmentItem) : sprintf('%s(%s)', gettype($airSolutionAirSegmentItem), var_export($airSolutionAirSegmentItem, true));
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
     * @return \Travelport\Util\StructType\AirSolution
     */
    public function setAirSegment(?array $airSegment = null): self
    {
        // validation for constraint: array
        if ('' !== ($airSegmentArrayErrorMessage = self::validateAirSegmentForArrayConstraintFromSetAirSegment($airSegment))) {
            throw new InvalidArgumentException($airSegmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(16)
        if (is_array($airSegment) && count($airSegment) > 16) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 16', count($airSegment)), __LINE__);
        }
        $this->AirSegment = $airSegment;
        
        return $this;
    }
    /**
     * Add item to AirSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeBaseAirSegment $item
     * @return \Travelport\Util\StructType\AirSolution
     */
    public function addToAirSegment(\Travelport\Util\StructType\TypeBaseAirSegment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeBaseAirSegment) {
            throw new InvalidArgumentException(sprintf('The AirSegment property can only contain items of type \Travelport\Util\StructType\TypeBaseAirSegment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(16)
        if (is_array($this->AirSegment) && count($this->AirSegment) >= 16) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 16', count($this->AirSegment)), __LINE__);
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
        foreach ($values as $airSolutionHostTokenItem) {
            // validation for constraint: itemType
            if (!$airSolutionHostTokenItem instanceof \Travelport\Util\StructType\HostToken) {
                $invalidValues[] = is_object($airSolutionHostTokenItem) ? get_class($airSolutionHostTokenItem) : sprintf('%s(%s)', gettype($airSolutionHostTokenItem), var_export($airSolutionHostTokenItem, true));
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
     * @return \Travelport\Util\StructType\AirSolution
     */
    public function setHostToken(?array $hostToken = null): self
    {
        // validation for constraint: array
        if ('' !== ($hostTokenArrayErrorMessage = self::validateHostTokenForArrayConstraintFromSetHostToken($hostToken))) {
            throw new InvalidArgumentException($hostTokenArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(16)
        if (is_array($hostToken) && count($hostToken) > 16) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 16', count($hostToken)), __LINE__);
        }
        $this->HostToken = $hostToken;
        
        return $this;
    }
    /**
     * Add item to HostToken value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\HostToken $item
     * @return \Travelport\Util\StructType\AirSolution
     */
    public function addToHostToken(\Travelport\Util\StructType\HostToken $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\HostToken) {
            throw new InvalidArgumentException(sprintf('The HostToken property can only contain items of type \Travelport\Util\StructType\HostToken, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(16)
        if (is_array($this->HostToken) && count($this->HostToken) >= 16) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 16', count($this->HostToken)), __LINE__);
        }
        $this->HostToken[] = $item;
        
        return $this;
    }
    /**
     * Get FareBasis value
     * @return \Travelport\Util\StructType\FareBasis[]
     */
    public function getFareBasis(): ?array
    {
        return $this->FareBasis;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFareBasis method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareBasis method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareBasisForArrayConstraintFromSetFareBasis(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airSolutionFareBasisItem) {
            // validation for constraint: itemType
            if (!$airSolutionFareBasisItem instanceof \Travelport\Util\StructType\FareBasis) {
                $invalidValues[] = is_object($airSolutionFareBasisItem) ? get_class($airSolutionFareBasisItem) : sprintf('%s(%s)', gettype($airSolutionFareBasisItem), var_export($airSolutionFareBasisItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareBasis property can only contain items of type \Travelport\Util\StructType\FareBasis, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareBasis value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareBasis[] $fareBasis
     * @return \Travelport\Util\StructType\AirSolution
     */
    public function setFareBasis(?array $fareBasis = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareBasisArrayErrorMessage = self::validateFareBasisForArrayConstraintFromSetFareBasis($fareBasis))) {
            throw new InvalidArgumentException($fareBasisArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(16)
        if (is_array($fareBasis) && count($fareBasis) > 16) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 16', count($fareBasis)), __LINE__);
        }
        $this->FareBasis = $fareBasis;
        
        return $this;
    }
    /**
     * Add item to FareBasis value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareBasis $item
     * @return \Travelport\Util\StructType\AirSolution
     */
    public function addToFareBasis(\Travelport\Util\StructType\FareBasis $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\FareBasis) {
            throw new InvalidArgumentException(sprintf('The FareBasis property can only contain items of type \Travelport\Util\StructType\FareBasis, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(16)
        if (is_array($this->FareBasis) && count($this->FareBasis) >= 16) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 16', count($this->FareBasis)), __LINE__);
        }
        $this->FareBasis[] = $item;
        
        return $this;
    }
}
