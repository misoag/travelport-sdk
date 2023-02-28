<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassiveReservation StructType
 * Meta information extracted from the WSDL
 * - documentation: The parent container for all passive booking data
 * @subpackage Structs
 */
class PassiveReservation extends BaseReservation
{
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Provider Reservation reference key. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $ProviderReservationInfoRef;
    /**
     * The SupplierLocator
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:SupplierLocator
     * @var \Travelport\UniversalRecord\StructType\SupplierLocator[]
     */
    protected ?array $SupplierLocator = null;
    /**
     * The ThirdPartyInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:ThirdPartyInformation
     * @var \Travelport\UniversalRecord\StructType\ThirdPartyInformation[]
     */
    protected ?array $ThirdPartyInformation = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:BookingTravelerRef
     * @var \Travelport\UniversalRecord\StructType\BookingTravelerRef[]
     */
    protected ?array $BookingTravelerRef = null;
    /**
     * The PassiveSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: PassiveSegment
     * @var \Travelport\UniversalRecord\StructType\PassiveSegment[]
     */
    protected ?array $PassiveSegment = null;
    /**
     * The PassiveRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: PassiveRemark
     * @var \Travelport\UniversalRecord\StructType\PassiveRemark[]
     */
    protected ?array $PassiveRemark = null;
    /**
     * The AssociatedRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AssociatedRemark
     * @var \Travelport\UniversalRecord\StructType\AssociatedRemark[]
     */
    protected ?array $AssociatedRemark = null;
    /**
     * Constructor method for PassiveReservation
     * @uses PassiveReservation::setProviderReservationInfoRef()
     * @uses PassiveReservation::setSupplierLocator()
     * @uses PassiveReservation::setThirdPartyInformation()
     * @uses PassiveReservation::setBookingTravelerRef()
     * @uses PassiveReservation::setPassiveSegment()
     * @uses PassiveReservation::setPassiveRemark()
     * @uses PassiveReservation::setAssociatedRemark()
     * @param string $providerReservationInfoRef
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator[] $supplierLocator
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation[] $thirdPartyInformation
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @param \Travelport\UniversalRecord\StructType\PassiveSegment[] $passiveSegment
     * @param \Travelport\UniversalRecord\StructType\PassiveRemark[] $passiveRemark
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark[] $associatedRemark
     */
    public function __construct(string $providerReservationInfoRef, ?array $supplierLocator = null, ?array $thirdPartyInformation = null, ?array $bookingTravelerRef = null, ?array $passiveSegment = null, ?array $passiveRemark = null, ?array $associatedRemark = null)
    {
        $this
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setSupplierLocator($supplierLocator)
            ->setThirdPartyInformation($thirdPartyInformation)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setPassiveSegment($passiveSegment)
            ->setPassiveRemark($passiveRemark)
            ->setAssociatedRemark($associatedRemark);
    }
    /**
     * Get ProviderReservationInfoRef value
     * @return string
     */
    public function getProviderReservationInfoRef(): string
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @param string $providerReservationInfoRef
     * @return \Travelport\UniversalRecord\StructType\PassiveReservation
     */
    public function setProviderReservationInfoRef(string $providerReservationInfoRef): self
    {
        // validation for constraint: string
        if (!is_null($providerReservationInfoRef) && !is_string($providerReservationInfoRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerReservationInfoRef, true), gettype($providerReservationInfoRef)), __LINE__);
        }
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Get SupplierLocator value
     * @return \Travelport\UniversalRecord\StructType\SupplierLocator[]
     */
    public function getSupplierLocator(): ?array
    {
        return $this->SupplierLocator;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSupplierLocator method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupplierLocator method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupplierLocatorForArrayConstraintFromSetSupplierLocator(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $passiveReservationSupplierLocatorItem) {
            // validation for constraint: itemType
            if (!$passiveReservationSupplierLocatorItem instanceof \Travelport\UniversalRecord\StructType\SupplierLocator) {
                $invalidValues[] = is_object($passiveReservationSupplierLocatorItem) ? get_class($passiveReservationSupplierLocatorItem) : sprintf('%s(%s)', gettype($passiveReservationSupplierLocatorItem), var_export($passiveReservationSupplierLocatorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SupplierLocator property can only contain items of type \Travelport\UniversalRecord\StructType\SupplierLocator, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SupplierLocator value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator[] $supplierLocator
     * @return \Travelport\UniversalRecord\StructType\PassiveReservation
     */
    public function setSupplierLocator(?array $supplierLocator = null): self
    {
        // validation for constraint: array
        if ('' !== ($supplierLocatorArrayErrorMessage = self::validateSupplierLocatorForArrayConstraintFromSetSupplierLocator($supplierLocator))) {
            throw new InvalidArgumentException($supplierLocatorArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($supplierLocator) && count($supplierLocator) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($supplierLocator)), __LINE__);
        }
        $this->SupplierLocator = $supplierLocator;
        
        return $this;
    }
    /**
     * Add item to SupplierLocator value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator $item
     * @return \Travelport\UniversalRecord\StructType\PassiveReservation
     */
    public function addToSupplierLocator(\Travelport\UniversalRecord\StructType\SupplierLocator $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\SupplierLocator) {
            throw new InvalidArgumentException(sprintf('The SupplierLocator property can only contain items of type \Travelport\UniversalRecord\StructType\SupplierLocator, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SupplierLocator) && count($this->SupplierLocator) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SupplierLocator)), __LINE__);
        }
        $this->SupplierLocator[] = $item;
        
        return $this;
    }
    /**
     * Get ThirdPartyInformation value
     * @return \Travelport\UniversalRecord\StructType\ThirdPartyInformation[]
     */
    public function getThirdPartyInformation(): ?array
    {
        return $this->ThirdPartyInformation;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setThirdPartyInformation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setThirdPartyInformation method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateThirdPartyInformationForArrayConstraintFromSetThirdPartyInformation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $passiveReservationThirdPartyInformationItem) {
            // validation for constraint: itemType
            if (!$passiveReservationThirdPartyInformationItem instanceof \Travelport\UniversalRecord\StructType\ThirdPartyInformation) {
                $invalidValues[] = is_object($passiveReservationThirdPartyInformationItem) ? get_class($passiveReservationThirdPartyInformationItem) : sprintf('%s(%s)', gettype($passiveReservationThirdPartyInformationItem), var_export($passiveReservationThirdPartyInformationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ThirdPartyInformation property can only contain items of type \Travelport\UniversalRecord\StructType\ThirdPartyInformation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ThirdPartyInformation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation[] $thirdPartyInformation
     * @return \Travelport\UniversalRecord\StructType\PassiveReservation
     */
    public function setThirdPartyInformation(?array $thirdPartyInformation = null): self
    {
        // validation for constraint: array
        if ('' !== ($thirdPartyInformationArrayErrorMessage = self::validateThirdPartyInformationForArrayConstraintFromSetThirdPartyInformation($thirdPartyInformation))) {
            throw new InvalidArgumentException($thirdPartyInformationArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($thirdPartyInformation) && count($thirdPartyInformation) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($thirdPartyInformation)), __LINE__);
        }
        $this->ThirdPartyInformation = $thirdPartyInformation;
        
        return $this;
    }
    /**
     * Add item to ThirdPartyInformation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation $item
     * @return \Travelport\UniversalRecord\StructType\PassiveReservation
     */
    public function addToThirdPartyInformation(\Travelport\UniversalRecord\StructType\ThirdPartyInformation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ThirdPartyInformation) {
            throw new InvalidArgumentException(sprintf('The ThirdPartyInformation property can only contain items of type \Travelport\UniversalRecord\StructType\ThirdPartyInformation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ThirdPartyInformation) && count($this->ThirdPartyInformation) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ThirdPartyInformation)), __LINE__);
        }
        $this->ThirdPartyInformation[] = $item;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerRef[]
     */
    public function getBookingTravelerRef(): ?array
    {
        return $this->BookingTravelerRef;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBookingTravelerRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingTravelerRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingTravelerRefForArrayConstraintFromSetBookingTravelerRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $passiveReservationBookingTravelerRefItem) {
            // validation for constraint: itemType
            if (!$passiveReservationBookingTravelerRefItem instanceof \Travelport\UniversalRecord\StructType\BookingTravelerRef) {
                $invalidValues[] = is_object($passiveReservationBookingTravelerRefItem) ? get_class($passiveReservationBookingTravelerRefItem) : sprintf('%s(%s)', gettype($passiveReservationBookingTravelerRefItem), var_export($passiveReservationBookingTravelerRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingTravelerRef property can only contain items of type \Travelport\UniversalRecord\StructType\BookingTravelerRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\PassiveReservation
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingTravelerRefArrayErrorMessage = self::validateBookingTravelerRefForArrayConstraintFromSetBookingTravelerRef($bookingTravelerRef))) {
            throw new InvalidArgumentException($bookingTravelerRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($bookingTravelerRef) && count($bookingTravelerRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($bookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Add item to BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef $item
     * @return \Travelport\UniversalRecord\StructType\PassiveReservation
     */
    public function addToBookingTravelerRef(\Travelport\UniversalRecord\StructType\BookingTravelerRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\BookingTravelerRef) {
            throw new InvalidArgumentException(sprintf('The BookingTravelerRef property can only contain items of type \Travelport\UniversalRecord\StructType\BookingTravelerRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->BookingTravelerRef) && count($this->BookingTravelerRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->BookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef[] = $item;
        
        return $this;
    }
    /**
     * Get PassiveSegment value
     * @return \Travelport\UniversalRecord\StructType\PassiveSegment[]
     */
    public function getPassiveSegment(): ?array
    {
        return $this->PassiveSegment;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPassiveSegment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPassiveSegment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePassiveSegmentForArrayConstraintFromSetPassiveSegment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $passiveReservationPassiveSegmentItem) {
            // validation for constraint: itemType
            if (!$passiveReservationPassiveSegmentItem instanceof \Travelport\UniversalRecord\StructType\PassiveSegment) {
                $invalidValues[] = is_object($passiveReservationPassiveSegmentItem) ? get_class($passiveReservationPassiveSegmentItem) : sprintf('%s(%s)', gettype($passiveReservationPassiveSegmentItem), var_export($passiveReservationPassiveSegmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PassiveSegment property can only contain items of type \Travelport\UniversalRecord\StructType\PassiveSegment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PassiveSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PassiveSegment[] $passiveSegment
     * @return \Travelport\UniversalRecord\StructType\PassiveReservation
     */
    public function setPassiveSegment(?array $passiveSegment = null): self
    {
        // validation for constraint: array
        if ('' !== ($passiveSegmentArrayErrorMessage = self::validatePassiveSegmentForArrayConstraintFromSetPassiveSegment($passiveSegment))) {
            throw new InvalidArgumentException($passiveSegmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($passiveSegment) && count($passiveSegment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($passiveSegment)), __LINE__);
        }
        $this->PassiveSegment = $passiveSegment;
        
        return $this;
    }
    /**
     * Add item to PassiveSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PassiveSegment $item
     * @return \Travelport\UniversalRecord\StructType\PassiveReservation
     */
    public function addToPassiveSegment(\Travelport\UniversalRecord\StructType\PassiveSegment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\PassiveSegment) {
            throw new InvalidArgumentException(sprintf('The PassiveSegment property can only contain items of type \Travelport\UniversalRecord\StructType\PassiveSegment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PassiveSegment) && count($this->PassiveSegment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PassiveSegment)), __LINE__);
        }
        $this->PassiveSegment[] = $item;
        
        return $this;
    }
    /**
     * Get PassiveRemark value
     * @return \Travelport\UniversalRecord\StructType\PassiveRemark[]
     */
    public function getPassiveRemark(): ?array
    {
        return $this->PassiveRemark;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPassiveRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPassiveRemark method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePassiveRemarkForArrayConstraintFromSetPassiveRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $passiveReservationPassiveRemarkItem) {
            // validation for constraint: itemType
            if (!$passiveReservationPassiveRemarkItem instanceof \Travelport\UniversalRecord\StructType\PassiveRemark) {
                $invalidValues[] = is_object($passiveReservationPassiveRemarkItem) ? get_class($passiveReservationPassiveRemarkItem) : sprintf('%s(%s)', gettype($passiveReservationPassiveRemarkItem), var_export($passiveReservationPassiveRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PassiveRemark property can only contain items of type \Travelport\UniversalRecord\StructType\PassiveRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PassiveRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PassiveRemark[] $passiveRemark
     * @return \Travelport\UniversalRecord\StructType\PassiveReservation
     */
    public function setPassiveRemark(?array $passiveRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($passiveRemarkArrayErrorMessage = self::validatePassiveRemarkForArrayConstraintFromSetPassiveRemark($passiveRemark))) {
            throw new InvalidArgumentException($passiveRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($passiveRemark) && count($passiveRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($passiveRemark)), __LINE__);
        }
        $this->PassiveRemark = $passiveRemark;
        
        return $this;
    }
    /**
     * Add item to PassiveRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PassiveRemark $item
     * @return \Travelport\UniversalRecord\StructType\PassiveReservation
     */
    public function addToPassiveRemark(\Travelport\UniversalRecord\StructType\PassiveRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\PassiveRemark) {
            throw new InvalidArgumentException(sprintf('The PassiveRemark property can only contain items of type \Travelport\UniversalRecord\StructType\PassiveRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PassiveRemark) && count($this->PassiveRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PassiveRemark)), __LINE__);
        }
        $this->PassiveRemark[] = $item;
        
        return $this;
    }
    /**
     * Get AssociatedRemark value
     * @return \Travelport\UniversalRecord\StructType\AssociatedRemark[]
     */
    public function getAssociatedRemark(): ?array
    {
        return $this->AssociatedRemark;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAssociatedRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAssociatedRemark method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAssociatedRemarkForArrayConstraintFromSetAssociatedRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $passiveReservationAssociatedRemarkItem) {
            // validation for constraint: itemType
            if (!$passiveReservationAssociatedRemarkItem instanceof \Travelport\UniversalRecord\StructType\AssociatedRemark) {
                $invalidValues[] = is_object($passiveReservationAssociatedRemarkItem) ? get_class($passiveReservationAssociatedRemarkItem) : sprintf('%s(%s)', gettype($passiveReservationAssociatedRemarkItem), var_export($passiveReservationAssociatedRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AssociatedRemark property can only contain items of type \Travelport\UniversalRecord\StructType\AssociatedRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AssociatedRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark[] $associatedRemark
     * @return \Travelport\UniversalRecord\StructType\PassiveReservation
     */
    public function setAssociatedRemark(?array $associatedRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($associatedRemarkArrayErrorMessage = self::validateAssociatedRemarkForArrayConstraintFromSetAssociatedRemark($associatedRemark))) {
            throw new InvalidArgumentException($associatedRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($associatedRemark) && count($associatedRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($associatedRemark)), __LINE__);
        }
        $this->AssociatedRemark = $associatedRemark;
        
        return $this;
    }
    /**
     * Add item to AssociatedRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark $item
     * @return \Travelport\UniversalRecord\StructType\PassiveReservation
     */
    public function addToAssociatedRemark(\Travelport\UniversalRecord\StructType\AssociatedRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AssociatedRemark) {
            throw new InvalidArgumentException(sprintf('The AssociatedRemark property can only contain items of type \Travelport\UniversalRecord\StructType\AssociatedRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AssociatedRemark) && count($this->AssociatedRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AssociatedRemark)), __LINE__);
        }
        $this->AssociatedRemark[] = $item;
        
        return $this;
    }
}
