<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceData StructType
 * @subpackage Structs
 */
class ServiceData extends AbstractStructBase
{
    /**
     * The SeatAttributes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: SeatAttributes
     * @var \Travelport\Hotel\StructType\SeatAttributes|null
     */
    protected ?\Travelport\Hotel\StructType\SeatAttributes $SeatAttributes = null;
    /**
     * The CabinClass
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CabinClass
     * @var \Travelport\Hotel\StructType\CabinClass|null
     */
    protected ?\Travelport\Hotel\StructType\CabinClass $CabinClass = null;
    /**
     * The SSRRef
     * Meta information extracted from the WSDL
     * - documentation: References to the related SSRs. At present, only reference to ASVC SSR is supported. Supported providers are 1G/1V/1P
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\TypeKeyBasedReference[]
     */
    protected ?array $SSRRef = null;
    /**
     * The Data
     * Meta information extracted from the WSDL
     * - documentation: Data that specifies the details of the merchandising offering (e.g. seat number for seat service)
     * - use: optional
     * @var string|null
     */
    protected ?string $Data = null;
    /**
     * The AirSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to a segment if the merchandising offering only pertains to that segment. If no segment reference is present this means this offering is for the whole itinerary. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $AirSegmentRef = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to a passenger if the merchandising offering only pertains to that passenger. If no passenger reference is present this means this offering is for all passengers. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $BookingTravelerRef = null;
    /**
     * The StopOver
     * Meta information extracted from the WSDL
     * - documentation: Indicates that there is a significant delay between flights (usually 12 hours or more)
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $StopOver = null;
    /**
     * The TravelerType
     * Meta information extracted from the WSDL
     * - documentation: Passenger Type Code. | Passenger Type Code (ADT, A2B5)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $TravelerType = null;
    /**
     * The EMDSummaryRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to the corresponding EMD issued. Supported providers are 1G/1V/1P | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $EMDSummaryRef = null;
    /**
     * The EMDCouponRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to the corresponding EMD coupon issued. Supported providers are 1G/1V/1P | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $EMDCouponRef = null;
    /**
     * Constructor method for ServiceData
     * @uses ServiceData::setSeatAttributes()
     * @uses ServiceData::setCabinClass()
     * @uses ServiceData::setSSRRef()
     * @uses ServiceData::setData()
     * @uses ServiceData::setAirSegmentRef()
     * @uses ServiceData::setBookingTravelerRef()
     * @uses ServiceData::setStopOver()
     * @uses ServiceData::setTravelerType()
     * @uses ServiceData::setEMDSummaryRef()
     * @uses ServiceData::setEMDCouponRef()
     * @param \Travelport\Hotel\StructType\SeatAttributes $seatAttributes
     * @param \Travelport\Hotel\StructType\CabinClass $cabinClass
     * @param \Travelport\Hotel\StructType\TypeKeyBasedReference[] $sSRRef
     * @param string $data
     * @param string $airSegmentRef
     * @param string $bookingTravelerRef
     * @param bool $stopOver
     * @param string $travelerType
     * @param string $eMDSummaryRef
     * @param string $eMDCouponRef
     */
    public function __construct(?\Travelport\Hotel\StructType\SeatAttributes $seatAttributes = null, ?\Travelport\Hotel\StructType\CabinClass $cabinClass = null, ?array $sSRRef = null, ?string $data = null, ?string $airSegmentRef = null, ?string $bookingTravelerRef = null, ?bool $stopOver = false, ?string $travelerType = null, ?string $eMDSummaryRef = null, ?string $eMDCouponRef = null)
    {
        $this
            ->setSeatAttributes($seatAttributes)
            ->setCabinClass($cabinClass)
            ->setSSRRef($sSRRef)
            ->setData($data)
            ->setAirSegmentRef($airSegmentRef)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setStopOver($stopOver)
            ->setTravelerType($travelerType)
            ->setEMDSummaryRef($eMDSummaryRef)
            ->setEMDCouponRef($eMDCouponRef);
    }
    /**
     * Get SeatAttributes value
     * @return \Travelport\Hotel\StructType\SeatAttributes|null
     */
    public function getSeatAttributes(): ?\Travelport\Hotel\StructType\SeatAttributes
    {
        return $this->SeatAttributes;
    }
    /**
     * Set SeatAttributes value
     * @param \Travelport\Hotel\StructType\SeatAttributes $seatAttributes
     * @return \Travelport\Hotel\StructType\ServiceData
     */
    public function setSeatAttributes(?\Travelport\Hotel\StructType\SeatAttributes $seatAttributes = null): self
    {
        $this->SeatAttributes = $seatAttributes;
        
        return $this;
    }
    /**
     * Get CabinClass value
     * @return \Travelport\Hotel\StructType\CabinClass|null
     */
    public function getCabinClass(): ?\Travelport\Hotel\StructType\CabinClass
    {
        return $this->CabinClass;
    }
    /**
     * Set CabinClass value
     * @param \Travelport\Hotel\StructType\CabinClass $cabinClass
     * @return \Travelport\Hotel\StructType\ServiceData
     */
    public function setCabinClass(?\Travelport\Hotel\StructType\CabinClass $cabinClass = null): self
    {
        $this->CabinClass = $cabinClass;
        
        return $this;
    }
    /**
     * Get SSRRef value
     * @return \Travelport\Hotel\StructType\TypeKeyBasedReference[]
     */
    public function getSSRRef(): ?array
    {
        return $this->SSRRef;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSSRRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSSRRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSSRRefForArrayConstraintFromSetSSRRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $serviceDataSSRRefItem) {
            // validation for constraint: itemType
            if (!$serviceDataSSRRefItem instanceof \Travelport\Hotel\StructType\TypeKeyBasedReference) {
                $invalidValues[] = is_object($serviceDataSSRRefItem) ? get_class($serviceDataSSRRefItem) : sprintf('%s(%s)', gettype($serviceDataSSRRefItem), var_export($serviceDataSSRRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SSRRef property can only contain items of type \Travelport\Hotel\StructType\TypeKeyBasedReference, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SSRRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\TypeKeyBasedReference[] $sSRRef
     * @return \Travelport\Hotel\StructType\ServiceData
     */
    public function setSSRRef(?array $sSRRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($sSRRefArrayErrorMessage = self::validateSSRRefForArrayConstraintFromSetSSRRef($sSRRef))) {
            throw new InvalidArgumentException($sSRRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($sSRRef) && count($sSRRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($sSRRef)), __LINE__);
        }
        $this->SSRRef = $sSRRef;
        
        return $this;
    }
    /**
     * Add item to SSRRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\TypeKeyBasedReference $item
     * @return \Travelport\Hotel\StructType\ServiceData
     */
    public function addToSSRRef(\Travelport\Hotel\StructType\TypeKeyBasedReference $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\TypeKeyBasedReference) {
            throw new InvalidArgumentException(sprintf('The SSRRef property can only contain items of type \Travelport\Hotel\StructType\TypeKeyBasedReference, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SSRRef) && count($this->SSRRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SSRRef)), __LINE__);
        }
        $this->SSRRef[] = $item;
        
        return $this;
    }
    /**
     * Get Data value
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->Data;
    }
    /**
     * Set Data value
     * @param string $data
     * @return \Travelport\Hotel\StructType\ServiceData
     */
    public function setData(?string $data = null): self
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        $this->Data = $data;
        
        return $this;
    }
    /**
     * Get AirSegmentRef value
     * @return string|null
     */
    public function getAirSegmentRef(): ?string
    {
        return $this->AirSegmentRef;
    }
    /**
     * Set AirSegmentRef value
     * @param string $airSegmentRef
     * @return \Travelport\Hotel\StructType\ServiceData
     */
    public function setAirSegmentRef(?string $airSegmentRef = null): self
    {
        // validation for constraint: string
        if (!is_null($airSegmentRef) && !is_string($airSegmentRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airSegmentRef, true), gettype($airSegmentRef)), __LINE__);
        }
        $this->AirSegmentRef = $airSegmentRef;
        
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
     * @return \Travelport\Hotel\StructType\ServiceData
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
    /**
     * Get StopOver value
     * @return bool|null
     */
    public function getStopOver(): ?bool
    {
        return $this->StopOver;
    }
    /**
     * Set StopOver value
     * @param bool $stopOver
     * @return \Travelport\Hotel\StructType\ServiceData
     */
    public function setStopOver(?bool $stopOver = false): self
    {
        // validation for constraint: boolean
        if (!is_null($stopOver) && !is_bool($stopOver)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($stopOver, true), gettype($stopOver)), __LINE__);
        }
        $this->StopOver = $stopOver;
        
        return $this;
    }
    /**
     * Get TravelerType value
     * @return string|null
     */
    public function getTravelerType(): ?string
    {
        return $this->TravelerType;
    }
    /**
     * Set TravelerType value
     * @param string $travelerType
     * @return \Travelport\Hotel\StructType\ServiceData
     */
    public function setTravelerType(?string $travelerType = null): self
    {
        // validation for constraint: string
        if (!is_null($travelerType) && !is_string($travelerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelerType, true), gettype($travelerType)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($travelerType) && mb_strlen((string) $travelerType) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $travelerType)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($travelerType) && mb_strlen((string) $travelerType) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $travelerType)), __LINE__);
        }
        $this->TravelerType = $travelerType;
        
        return $this;
    }
    /**
     * Get EMDSummaryRef value
     * @return string|null
     */
    public function getEMDSummaryRef(): ?string
    {
        return $this->EMDSummaryRef;
    }
    /**
     * Set EMDSummaryRef value
     * @param string $eMDSummaryRef
     * @return \Travelport\Hotel\StructType\ServiceData
     */
    public function setEMDSummaryRef(?string $eMDSummaryRef = null): self
    {
        // validation for constraint: string
        if (!is_null($eMDSummaryRef) && !is_string($eMDSummaryRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eMDSummaryRef, true), gettype($eMDSummaryRef)), __LINE__);
        }
        $this->EMDSummaryRef = $eMDSummaryRef;
        
        return $this;
    }
    /**
     * Get EMDCouponRef value
     * @return string|null
     */
    public function getEMDCouponRef(): ?string
    {
        return $this->EMDCouponRef;
    }
    /**
     * Set EMDCouponRef value
     * @param string $eMDCouponRef
     * @return \Travelport\Hotel\StructType\ServiceData
     */
    public function setEMDCouponRef(?string $eMDCouponRef = null): self
    {
        // validation for constraint: string
        if (!is_null($eMDCouponRef) && !is_string($eMDCouponRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eMDCouponRef, true), gettype($eMDCouponRef)), __LINE__);
        }
        $this->EMDCouponRef = $eMDCouponRef;
        
        return $this;
    }
}
