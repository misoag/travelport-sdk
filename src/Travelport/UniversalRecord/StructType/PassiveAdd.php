<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassiveAdd StructType
 * Meta information extracted from the WSDL
 * - documentation: SupplierLocator to be added to the host for Air Passive. | This contains Associated Remark corresponding to any PassiveSegment. | This contains Remark corresponding to any PassiveSegment | This represents a Passive Segment of type
 * Car,Hotel, Tour,Surface,Air etc.
 * @subpackage Structs
 */
class PassiveAdd extends AbstractStructBase
{
    /**
     * The PassiveSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 1
     * - ref: passive_v51_0:PassiveSegment
     * @var \Travelport\UniversalRecord\StructType\PassiveSegment[]
     */
    protected array $PassiveSegment;
    /**
     * The SupplierLocator
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 1
     * - ref: common:SupplierLocator
     * @var \Travelport\UniversalRecord\StructType\SupplierLocator[]
     */
    protected array $SupplierLocator;
    /**
     * The ReservationLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: This represents a Passive Reservation Locator Code | A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: required
     * @var string
     */
    protected string $ReservationLocatorCode;
    /**
     * The PassiveRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: passive_v51_0:PassiveRemark
     * @var \Travelport\UniversalRecord\StructType\PassiveRemark[]
     */
    protected ?array $PassiveRemark = null;
    /**
     * The AssociatedRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: passive_v51_0:AssociatedRemark
     * @var \Travelport\UniversalRecord\StructType\AssociatedRemark[]
     */
    protected ?array $AssociatedRemark = null;
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
     * The TravelComplianceData
     * Meta information extracted from the WSDL
     * - choice: TravelComplianceData
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:TravelComplianceData
     * @var \Travelport\UniversalRecord\StructType\TravelComplianceData[]
     */
    protected ?array $TravelComplianceData = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: BookingTravelerRef will be used to specify BookingTraveler in UR. Currently this will be used to add TravelComplianceData. Later this can used for other elements which are associated with BookngTraveler. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $BookingTravelerRef = null;
    /**
     * Constructor method for PassiveAdd
     * @uses PassiveAdd::setPassiveSegment()
     * @uses PassiveAdd::setSupplierLocator()
     * @uses PassiveAdd::setReservationLocatorCode()
     * @uses PassiveAdd::setPassiveRemark()
     * @uses PassiveAdd::setAssociatedRemark()
     * @uses PassiveAdd::setThirdPartyInformation()
     * @uses PassiveAdd::setTravelComplianceData()
     * @uses PassiveAdd::setBookingTravelerRef()
     * @param \Travelport\UniversalRecord\StructType\PassiveSegment[] $passiveSegment
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator[] $supplierLocator
     * @param string $reservationLocatorCode
     * @param \Travelport\UniversalRecord\StructType\PassiveRemark[] $passiveRemark
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark[] $associatedRemark
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation[] $thirdPartyInformation
     * @param \Travelport\UniversalRecord\StructType\TravelComplianceData[] $travelComplianceData
     * @param string $bookingTravelerRef
     */
    public function __construct(array $passiveSegment, array $supplierLocator, string $reservationLocatorCode, ?array $passiveRemark = null, ?array $associatedRemark = null, ?array $thirdPartyInformation = null, ?array $travelComplianceData = null, ?string $bookingTravelerRef = null)
    {
        $this
            ->setPassiveSegment($passiveSegment)
            ->setSupplierLocator($supplierLocator)
            ->setReservationLocatorCode($reservationLocatorCode)
            ->setPassiveRemark($passiveRemark)
            ->setAssociatedRemark($associatedRemark)
            ->setThirdPartyInformation($thirdPartyInformation)
            ->setTravelComplianceData($travelComplianceData)
            ->setBookingTravelerRef($bookingTravelerRef);
    }
    /**
     * Get PassiveSegment value
     * @return \Travelport\UniversalRecord\StructType\PassiveSegment[]
     */
    public function getPassiveSegment(): array
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
        foreach ($values as $passiveAddPassiveSegmentItem) {
            // validation for constraint: itemType
            if (!$passiveAddPassiveSegmentItem instanceof \Travelport\UniversalRecord\StructType\PassiveSegment) {
                $invalidValues[] = is_object($passiveAddPassiveSegmentItem) ? get_class($passiveAddPassiveSegmentItem) : sprintf('%s(%s)', gettype($passiveAddPassiveSegmentItem), var_export($passiveAddPassiveSegmentItem, true));
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
     * @return \Travelport\UniversalRecord\StructType\PassiveAdd
     */
    public function setPassiveSegment(array $passiveSegment): self
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
     * @return \Travelport\UniversalRecord\StructType\PassiveAdd
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
     * Get SupplierLocator value
     * @return \Travelport\UniversalRecord\StructType\SupplierLocator[]
     */
    public function getSupplierLocator(): array
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
        foreach ($values as $passiveAddSupplierLocatorItem) {
            // validation for constraint: itemType
            if (!$passiveAddSupplierLocatorItem instanceof \Travelport\UniversalRecord\StructType\SupplierLocator) {
                $invalidValues[] = is_object($passiveAddSupplierLocatorItem) ? get_class($passiveAddSupplierLocatorItem) : sprintf('%s(%s)', gettype($passiveAddSupplierLocatorItem), var_export($passiveAddSupplierLocatorItem, true));
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
     * @return \Travelport\UniversalRecord\StructType\PassiveAdd
     */
    public function setSupplierLocator(array $supplierLocator): self
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
     * @return \Travelport\UniversalRecord\StructType\PassiveAdd
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
     * Get ReservationLocatorCode value
     * @return string
     */
    public function getReservationLocatorCode(): string
    {
        return $this->ReservationLocatorCode;
    }
    /**
     * Set ReservationLocatorCode value
     * @param string $reservationLocatorCode
     * @return \Travelport\UniversalRecord\StructType\PassiveAdd
     */
    public function setReservationLocatorCode(string $reservationLocatorCode): self
    {
        // validation for constraint: string
        if (!is_null($reservationLocatorCode) && !is_string($reservationLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reservationLocatorCode, true), gettype($reservationLocatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($reservationLocatorCode) && mb_strlen((string) $reservationLocatorCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $reservationLocatorCode)), __LINE__);
        }
        // validation for constraint: minLength(5)
        if (!is_null($reservationLocatorCode) && mb_strlen((string) $reservationLocatorCode) < 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 5', mb_strlen((string) $reservationLocatorCode)), __LINE__);
        }
        $this->ReservationLocatorCode = $reservationLocatorCode;
        
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
        foreach ($values as $passiveAddPassiveRemarkItem) {
            // validation for constraint: itemType
            if (!$passiveAddPassiveRemarkItem instanceof \Travelport\UniversalRecord\StructType\PassiveRemark) {
                $invalidValues[] = is_object($passiveAddPassiveRemarkItem) ? get_class($passiveAddPassiveRemarkItem) : sprintf('%s(%s)', gettype($passiveAddPassiveRemarkItem), var_export($passiveAddPassiveRemarkItem, true));
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
     * @return \Travelport\UniversalRecord\StructType\PassiveAdd
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
     * @return \Travelport\UniversalRecord\StructType\PassiveAdd
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
        foreach ($values as $passiveAddAssociatedRemarkItem) {
            // validation for constraint: itemType
            if (!$passiveAddAssociatedRemarkItem instanceof \Travelport\UniversalRecord\StructType\AssociatedRemark) {
                $invalidValues[] = is_object($passiveAddAssociatedRemarkItem) ? get_class($passiveAddAssociatedRemarkItem) : sprintf('%s(%s)', gettype($passiveAddAssociatedRemarkItem), var_export($passiveAddAssociatedRemarkItem, true));
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
     * @return \Travelport\UniversalRecord\StructType\PassiveAdd
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
     * @return \Travelport\UniversalRecord\StructType\PassiveAdd
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
        foreach ($values as $passiveAddThirdPartyInformationItem) {
            // validation for constraint: itemType
            if (!$passiveAddThirdPartyInformationItem instanceof \Travelport\UniversalRecord\StructType\ThirdPartyInformation) {
                $invalidValues[] = is_object($passiveAddThirdPartyInformationItem) ? get_class($passiveAddThirdPartyInformationItem) : sprintf('%s(%s)', gettype($passiveAddThirdPartyInformationItem), var_export($passiveAddThirdPartyInformationItem, true));
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
     * @return \Travelport\UniversalRecord\StructType\PassiveAdd
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
     * @return \Travelport\UniversalRecord\StructType\PassiveAdd
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
     * Get TravelComplianceData value
     * @return \Travelport\UniversalRecord\StructType\TravelComplianceData[]
     */
    public function getTravelComplianceData(): ?array
    {
        return isset($this->TravelComplianceData) ? $this->TravelComplianceData : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTravelComplianceData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTravelComplianceData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTravelComplianceDataForArrayConstraintsFromSetTravelComplianceData(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $passiveAddTravelComplianceDataItem) {
            // validation for constraint: itemType
            if (!$passiveAddTravelComplianceDataItem instanceof \Travelport\UniversalRecord\StructType\TravelComplianceData) {
                $invalidValues[] = is_object($passiveAddTravelComplianceDataItem) ? get_class($passiveAddTravelComplianceDataItem) : sprintf('%s(%s)', gettype($passiveAddTravelComplianceDataItem), var_export($passiveAddTravelComplianceDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TravelComplianceData property can only contain items of type \Travelport\UniversalRecord\StructType\TravelComplianceData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setTravelComplianceData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTravelComplianceData method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateTravelComplianceDataForChoiceConstraintsFromSetTravelComplianceData($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property TravelComplianceData can\'t be set as the property %s is already set. Only one property must be set among these properties: TravelComplianceData, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set TravelComplianceData value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TravelComplianceData[] $travelComplianceData
     * @return \Travelport\UniversalRecord\StructType\PassiveAdd
     */
    public function setTravelComplianceData(?array $travelComplianceData = null): self
    {
        // validation for constraint: array
        if ('' !== ($travelComplianceDataArrayErrorMessage = self::validateTravelComplianceDataForArrayConstraintsFromSetTravelComplianceData($travelComplianceData))) {
            throw new InvalidArgumentException($travelComplianceDataArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(TravelComplianceData)
        if ('' !== ($travelComplianceDataChoiceErrorMessage = self::validateTravelComplianceDataForChoiceConstraintsFromSetTravelComplianceData($travelComplianceData))) {
            throw new InvalidArgumentException($travelComplianceDataChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($travelComplianceData) && count($travelComplianceData) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($travelComplianceData)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($travelComplianceData) && count($travelComplianceData) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($travelComplianceData)), __LINE__);
        }
        if (is_null($travelComplianceData) || (is_array($travelComplianceData) && empty($travelComplianceData))) {
            unset($this->TravelComplianceData);
        } else {
            $this->TravelComplianceData = $travelComplianceData;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToTravelComplianceData method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToTravelComplianceData method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToTravelComplianceData($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property TravelComplianceData can\'t be set as the property %s is already set. Only one property must be set among these properties: TravelComplianceData, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to TravelComplianceData value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TravelComplianceData $item
     * @return \Travelport\UniversalRecord\StructType\PassiveAdd
     */
    public function addToTravelComplianceData(\Travelport\UniversalRecord\StructType\TravelComplianceData $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TravelComplianceData) {
            throw new InvalidArgumentException(sprintf('The TravelComplianceData property can only contain items of type \Travelport\UniversalRecord\StructType\TravelComplianceData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(TravelComplianceData)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToTravelComplianceData($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->TravelComplianceData) && count($this->TravelComplianceData) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->TravelComplianceData)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TravelComplianceData) && count($this->TravelComplianceData) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TravelComplianceData)), __LINE__);
        }
        $this->TravelComplianceData[] = $item;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return string|null
     */
    public function getBookingTravelerRef(): ?string
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param string $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\PassiveAdd
     */
    public function setBookingTravelerRef(?string $bookingTravelerRef = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingTravelerRef) && !is_string($bookingTravelerRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingTravelerRef, true), gettype($bookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
}
