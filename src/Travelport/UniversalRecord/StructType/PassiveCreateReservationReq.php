<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassiveCreateReservationReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to create a passive reservation
 * @subpackage Structs
 */
class PassiveCreateReservationReq extends BaseCreateReservationReq
{
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
     * The PassiveSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: passive:PassiveSegment
     * @var \Travelport\UniversalRecord\StructType\PassiveSegment[]
     */
    protected ?array $PassiveSegment = null;
    /**
     * The PassiveRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: passive:PassiveRemark
     * @var \Travelport\UniversalRecord\StructType\PassiveRemark[]
     */
    protected ?array $PassiveRemark = null;
    /**
     * The AssociatedRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: passive:AssociatedRemark
     * @var \Travelport\UniversalRecord\StructType\AssociatedRemark[]
     */
    protected ?array $AssociatedRemark = null;
    /**
     * The ActionStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:ActionStatus
     * @var \Travelport\UniversalRecord\StructType\ActionStatus|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ActionStatus $ActionStatus = null;
    /**
     * The ReviewBooking
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:ReviewBooking
     * @var \Travelport\UniversalRecord\StructType\ReviewBooking[]
     */
    protected ?array $ReviewBooking = null;
    /**
     * Constructor method for PassiveCreateReservationReq
     * @uses PassiveCreateReservationReq::setSupplierLocator()
     * @uses PassiveCreateReservationReq::setThirdPartyInformation()
     * @uses PassiveCreateReservationReq::setPassiveSegment()
     * @uses PassiveCreateReservationReq::setPassiveRemark()
     * @uses PassiveCreateReservationReq::setAssociatedRemark()
     * @uses PassiveCreateReservationReq::setActionStatus()
     * @uses PassiveCreateReservationReq::setReviewBooking()
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator[] $supplierLocator
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation[] $thirdPartyInformation
     * @param \Travelport\UniversalRecord\StructType\PassiveSegment[] $passiveSegment
     * @param \Travelport\UniversalRecord\StructType\PassiveRemark[] $passiveRemark
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark[] $associatedRemark
     * @param \Travelport\UniversalRecord\StructType\ActionStatus $actionStatus
     * @param \Travelport\UniversalRecord\StructType\ReviewBooking[] $reviewBooking
     */
    public function __construct(?array $supplierLocator = null, ?array $thirdPartyInformation = null, ?array $passiveSegment = null, ?array $passiveRemark = null, ?array $associatedRemark = null, ?\Travelport\UniversalRecord\StructType\ActionStatus $actionStatus = null, ?array $reviewBooking = null)
    {
        $this
            ->setSupplierLocator($supplierLocator)
            ->setThirdPartyInformation($thirdPartyInformation)
            ->setPassiveSegment($passiveSegment)
            ->setPassiveRemark($passiveRemark)
            ->setAssociatedRemark($associatedRemark)
            ->setActionStatus($actionStatus)
            ->setReviewBooking($reviewBooking);
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
     * This method is responsible for validating the values passed to the setSupplierLocator method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupplierLocator method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupplierLocatorForArrayConstraintsFromSetSupplierLocator(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $passiveCreateReservationReqSupplierLocatorItem) {
            // validation for constraint: itemType
            if (!$passiveCreateReservationReqSupplierLocatorItem instanceof \Travelport\UniversalRecord\StructType\SupplierLocator) {
                $invalidValues[] = is_object($passiveCreateReservationReqSupplierLocatorItem) ? get_class($passiveCreateReservationReqSupplierLocatorItem) : sprintf('%s(%s)', gettype($passiveCreateReservationReqSupplierLocatorItem), var_export($passiveCreateReservationReqSupplierLocatorItem, true));
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
     * @return \Travelport\UniversalRecord\StructType\PassiveCreateReservationReq
     */
    public function setSupplierLocator(?array $supplierLocator = null): self
    {
        // validation for constraint: array
        if ('' !== ($supplierLocatorArrayErrorMessage = self::validateSupplierLocatorForArrayConstraintsFromSetSupplierLocator($supplierLocator))) {
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
     * @return \Travelport\UniversalRecord\StructType\PassiveCreateReservationReq
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
     * This method is responsible for validating the values passed to the setThirdPartyInformation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setThirdPartyInformation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateThirdPartyInformationForArrayConstraintsFromSetThirdPartyInformation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $passiveCreateReservationReqThirdPartyInformationItem) {
            // validation for constraint: itemType
            if (!$passiveCreateReservationReqThirdPartyInformationItem instanceof \Travelport\UniversalRecord\StructType\ThirdPartyInformation) {
                $invalidValues[] = is_object($passiveCreateReservationReqThirdPartyInformationItem) ? get_class($passiveCreateReservationReqThirdPartyInformationItem) : sprintf('%s(%s)', gettype($passiveCreateReservationReqThirdPartyInformationItem), var_export($passiveCreateReservationReqThirdPartyInformationItem, true));
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
     * @return \Travelport\UniversalRecord\StructType\PassiveCreateReservationReq
     */
    public function setThirdPartyInformation(?array $thirdPartyInformation = null): self
    {
        // validation for constraint: array
        if ('' !== ($thirdPartyInformationArrayErrorMessage = self::validateThirdPartyInformationForArrayConstraintsFromSetThirdPartyInformation($thirdPartyInformation))) {
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
     * @return \Travelport\UniversalRecord\StructType\PassiveCreateReservationReq
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
     * Get PassiveSegment value
     * @return \Travelport\UniversalRecord\StructType\PassiveSegment[]
     */
    public function getPassiveSegment(): ?array
    {
        return $this->PassiveSegment;
    }
    /**
     * This method is responsible for validating the values passed to the setPassiveSegment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPassiveSegment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePassiveSegmentForArrayConstraintsFromSetPassiveSegment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $passiveCreateReservationReqPassiveSegmentItem) {
            // validation for constraint: itemType
            if (!$passiveCreateReservationReqPassiveSegmentItem instanceof \Travelport\UniversalRecord\StructType\PassiveSegment) {
                $invalidValues[] = is_object($passiveCreateReservationReqPassiveSegmentItem) ? get_class($passiveCreateReservationReqPassiveSegmentItem) : sprintf('%s(%s)', gettype($passiveCreateReservationReqPassiveSegmentItem), var_export($passiveCreateReservationReqPassiveSegmentItem, true));
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
     * @return \Travelport\UniversalRecord\StructType\PassiveCreateReservationReq
     */
    public function setPassiveSegment(?array $passiveSegment = null): self
    {
        // validation for constraint: array
        if ('' !== ($passiveSegmentArrayErrorMessage = self::validatePassiveSegmentForArrayConstraintsFromSetPassiveSegment($passiveSegment))) {
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
     * @return \Travelport\UniversalRecord\StructType\PassiveCreateReservationReq
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
     * This method is responsible for validating the values passed to the setPassiveRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPassiveRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePassiveRemarkForArrayConstraintsFromSetPassiveRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $passiveCreateReservationReqPassiveRemarkItem) {
            // validation for constraint: itemType
            if (!$passiveCreateReservationReqPassiveRemarkItem instanceof \Travelport\UniversalRecord\StructType\PassiveRemark) {
                $invalidValues[] = is_object($passiveCreateReservationReqPassiveRemarkItem) ? get_class($passiveCreateReservationReqPassiveRemarkItem) : sprintf('%s(%s)', gettype($passiveCreateReservationReqPassiveRemarkItem), var_export($passiveCreateReservationReqPassiveRemarkItem, true));
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
     * @return \Travelport\UniversalRecord\StructType\PassiveCreateReservationReq
     */
    public function setPassiveRemark(?array $passiveRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($passiveRemarkArrayErrorMessage = self::validatePassiveRemarkForArrayConstraintsFromSetPassiveRemark($passiveRemark))) {
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
     * @return \Travelport\UniversalRecord\StructType\PassiveCreateReservationReq
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
     * This method is responsible for validating the values passed to the setAssociatedRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAssociatedRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAssociatedRemarkForArrayConstraintsFromSetAssociatedRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $passiveCreateReservationReqAssociatedRemarkItem) {
            // validation for constraint: itemType
            if (!$passiveCreateReservationReqAssociatedRemarkItem instanceof \Travelport\UniversalRecord\StructType\AssociatedRemark) {
                $invalidValues[] = is_object($passiveCreateReservationReqAssociatedRemarkItem) ? get_class($passiveCreateReservationReqAssociatedRemarkItem) : sprintf('%s(%s)', gettype($passiveCreateReservationReqAssociatedRemarkItem), var_export($passiveCreateReservationReqAssociatedRemarkItem, true));
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
     * @return \Travelport\UniversalRecord\StructType\PassiveCreateReservationReq
     */
    public function setAssociatedRemark(?array $associatedRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($associatedRemarkArrayErrorMessage = self::validateAssociatedRemarkForArrayConstraintsFromSetAssociatedRemark($associatedRemark))) {
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
     * @return \Travelport\UniversalRecord\StructType\PassiveCreateReservationReq
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
    /**
     * Get ActionStatus value
     * @return \Travelport\UniversalRecord\StructType\ActionStatus|null
     */
    public function getActionStatus(): ?\Travelport\UniversalRecord\StructType\ActionStatus
    {
        return $this->ActionStatus;
    }
    /**
     * Set ActionStatus value
     * @param \Travelport\UniversalRecord\StructType\ActionStatus $actionStatus
     * @return \Travelport\UniversalRecord\StructType\PassiveCreateReservationReq
     */
    public function setActionStatus(?\Travelport\UniversalRecord\StructType\ActionStatus $actionStatus = null): self
    {
        $this->ActionStatus = $actionStatus;
        
        return $this;
    }
    /**
     * Get ReviewBooking value
     * @return \Travelport\UniversalRecord\StructType\ReviewBooking[]
     */
    public function getReviewBooking(): ?array
    {
        return $this->ReviewBooking;
    }
    /**
     * This method is responsible for validating the values passed to the setReviewBooking method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReviewBooking method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReviewBookingForArrayConstraintsFromSetReviewBooking(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $passiveCreateReservationReqReviewBookingItem) {
            // validation for constraint: itemType
            if (!$passiveCreateReservationReqReviewBookingItem instanceof \Travelport\UniversalRecord\StructType\ReviewBooking) {
                $invalidValues[] = is_object($passiveCreateReservationReqReviewBookingItem) ? get_class($passiveCreateReservationReqReviewBookingItem) : sprintf('%s(%s)', gettype($passiveCreateReservationReqReviewBookingItem), var_export($passiveCreateReservationReqReviewBookingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ReviewBooking property can only contain items of type \Travelport\UniversalRecord\StructType\ReviewBooking, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ReviewBooking value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ReviewBooking[] $reviewBooking
     * @return \Travelport\UniversalRecord\StructType\PassiveCreateReservationReq
     */
    public function setReviewBooking(?array $reviewBooking = null): self
    {
        // validation for constraint: array
        if ('' !== ($reviewBookingArrayErrorMessage = self::validateReviewBookingForArrayConstraintsFromSetReviewBooking($reviewBooking))) {
            throw new InvalidArgumentException($reviewBookingArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($reviewBooking) && count($reviewBooking) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($reviewBooking)), __LINE__);
        }
        $this->ReviewBooking = $reviewBooking;
        
        return $this;
    }
    /**
     * Add item to ReviewBooking value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ReviewBooking $item
     * @return \Travelport\UniversalRecord\StructType\PassiveCreateReservationReq
     */
    public function addToReviewBooking(\Travelport\UniversalRecord\StructType\ReviewBooking $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ReviewBooking) {
            throw new InvalidArgumentException(sprintf('The ReviewBooking property can only contain items of type \Travelport\UniversalRecord\StructType\ReviewBooking, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ReviewBooking) && count($this->ReviewBooking) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ReviewBooking)), __LINE__);
        }
        $this->ReviewBooking[] = $item;
        
        return $this;
    }
}
