<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CruiseReservation StructType
 * Meta information extracted from the WSDL
 * - documentation: The parent container for all cruise booking data.
 * @subpackage Structs
 */
class CruiseReservation extends BaseReservation
{
    /**
     * The CruiseSegment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CruiseSegment
     * @var \Travelport\UniversalRecord\StructType\CruiseSegment|null
     */
    protected ?\Travelport\UniversalRecord\StructType\CruiseSegment $CruiseSegment = null;
    /**
     * The CruiseItinerary
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: CruiseItinerary
     * @var \Travelport\UniversalRecord\StructType\CruiseItinerary[]
     */
    protected ?array $CruiseItinerary = null;
    /**
     * The CruisePricingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CruisePricingInfo
     * @var \Travelport\UniversalRecord\StructType\CruisePricingInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\CruisePricingInfo $CruisePricingInfo = null;
    /**
     * The OptionalService
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: OptionalService
     * @var \Travelport\UniversalRecord\StructType\OptionalService[]
     */
    protected ?array $OptionalService = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: common:BookingTravelerRef
     * @var \Travelport\UniversalRecord\StructType\BookingTravelerRef[]
     */
    protected ?array $BookingTravelerRef = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: common:ProviderReservationInfoRef
     * @var \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ProviderReservationInfoRef $ProviderReservationInfoRef = null;
    /**
     * The Payment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Payment
     * @var \Travelport\UniversalRecord\StructType\Payment[]
     */
    protected ?array $Payment = null;
    /**
     * Constructor method for CruiseReservation
     * @uses CruiseReservation::setCruiseSegment()
     * @uses CruiseReservation::setCruiseItinerary()
     * @uses CruiseReservation::setCruisePricingInfo()
     * @uses CruiseReservation::setOptionalService()
     * @uses CruiseReservation::setBookingTravelerRef()
     * @uses CruiseReservation::setProviderReservationInfoRef()
     * @uses CruiseReservation::setPayment()
     * @param \Travelport\UniversalRecord\StructType\CruiseSegment $cruiseSegment
     * @param \Travelport\UniversalRecord\StructType\CruiseItinerary[] $cruiseItinerary
     * @param \Travelport\UniversalRecord\StructType\CruisePricingInfo $cruisePricingInfo
     * @param \Travelport\UniversalRecord\StructType\OptionalService[] $optionalService
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef $providerReservationInfoRef
     * @param \Travelport\UniversalRecord\StructType\Payment[] $payment
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\CruiseSegment $cruiseSegment = null, ?array $cruiseItinerary = null, ?\Travelport\UniversalRecord\StructType\CruisePricingInfo $cruisePricingInfo = null, ?array $optionalService = null, ?array $bookingTravelerRef = null, ?\Travelport\UniversalRecord\StructType\ProviderReservationInfoRef $providerReservationInfoRef = null, ?array $payment = null)
    {
        $this
            ->setCruiseSegment($cruiseSegment)
            ->setCruiseItinerary($cruiseItinerary)
            ->setCruisePricingInfo($cruisePricingInfo)
            ->setOptionalService($optionalService)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setPayment($payment);
    }
    /**
     * Get CruiseSegment value
     * @return \Travelport\UniversalRecord\StructType\CruiseSegment|null
     */
    public function getCruiseSegment(): ?\Travelport\UniversalRecord\StructType\CruiseSegment
    {
        return $this->CruiseSegment;
    }
    /**
     * Set CruiseSegment value
     * @param \Travelport\UniversalRecord\StructType\CruiseSegment $cruiseSegment
     * @return \Travelport\UniversalRecord\StructType\CruiseReservation
     */
    public function setCruiseSegment(?\Travelport\UniversalRecord\StructType\CruiseSegment $cruiseSegment = null): self
    {
        $this->CruiseSegment = $cruiseSegment;
        
        return $this;
    }
    /**
     * Get CruiseItinerary value
     * @return \Travelport\UniversalRecord\StructType\CruiseItinerary[]
     */
    public function getCruiseItinerary(): ?array
    {
        return $this->CruiseItinerary;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCruiseItinerary method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCruiseItinerary method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCruiseItineraryForArrayConstraintFromSetCruiseItinerary(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $cruiseReservationCruiseItineraryItem) {
            // validation for constraint: itemType
            if (!$cruiseReservationCruiseItineraryItem instanceof \Travelport\UniversalRecord\StructType\CruiseItinerary) {
                $invalidValues[] = is_object($cruiseReservationCruiseItineraryItem) ? get_class($cruiseReservationCruiseItineraryItem) : sprintf('%s(%s)', gettype($cruiseReservationCruiseItineraryItem), var_export($cruiseReservationCruiseItineraryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CruiseItinerary property can only contain items of type \Travelport\UniversalRecord\StructType\CruiseItinerary, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CruiseItinerary value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CruiseItinerary[] $cruiseItinerary
     * @return \Travelport\UniversalRecord\StructType\CruiseReservation
     */
    public function setCruiseItinerary(?array $cruiseItinerary = null): self
    {
        // validation for constraint: array
        if ('' !== ($cruiseItineraryArrayErrorMessage = self::validateCruiseItineraryForArrayConstraintFromSetCruiseItinerary($cruiseItinerary))) {
            throw new InvalidArgumentException($cruiseItineraryArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($cruiseItinerary) && count($cruiseItinerary) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($cruiseItinerary)), __LINE__);
        }
        $this->CruiseItinerary = $cruiseItinerary;
        
        return $this;
    }
    /**
     * Add item to CruiseItinerary value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CruiseItinerary $item
     * @return \Travelport\UniversalRecord\StructType\CruiseReservation
     */
    public function addToCruiseItinerary(\Travelport\UniversalRecord\StructType\CruiseItinerary $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\CruiseItinerary) {
            throw new InvalidArgumentException(sprintf('The CruiseItinerary property can only contain items of type \Travelport\UniversalRecord\StructType\CruiseItinerary, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->CruiseItinerary) && count($this->CruiseItinerary) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->CruiseItinerary)), __LINE__);
        }
        $this->CruiseItinerary[] = $item;
        
        return $this;
    }
    /**
     * Get CruisePricingInfo value
     * @return \Travelport\UniversalRecord\StructType\CruisePricingInfo|null
     */
    public function getCruisePricingInfo(): ?\Travelport\UniversalRecord\StructType\CruisePricingInfo
    {
        return $this->CruisePricingInfo;
    }
    /**
     * Set CruisePricingInfo value
     * @param \Travelport\UniversalRecord\StructType\CruisePricingInfo $cruisePricingInfo
     * @return \Travelport\UniversalRecord\StructType\CruiseReservation
     */
    public function setCruisePricingInfo(?\Travelport\UniversalRecord\StructType\CruisePricingInfo $cruisePricingInfo = null): self
    {
        $this->CruisePricingInfo = $cruisePricingInfo;
        
        return $this;
    }
    /**
     * Get OptionalService value
     * @return \Travelport\UniversalRecord\StructType\OptionalService[]
     */
    public function getOptionalService(): ?array
    {
        return $this->OptionalService;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setOptionalService method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOptionalService method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOptionalServiceForArrayConstraintFromSetOptionalService(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $cruiseReservationOptionalServiceItem) {
            // validation for constraint: itemType
            if (!$cruiseReservationOptionalServiceItem instanceof \Travelport\UniversalRecord\StructType\OptionalService) {
                $invalidValues[] = is_object($cruiseReservationOptionalServiceItem) ? get_class($cruiseReservationOptionalServiceItem) : sprintf('%s(%s)', gettype($cruiseReservationOptionalServiceItem), var_export($cruiseReservationOptionalServiceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OptionalService property can only contain items of type \Travelport\UniversalRecord\StructType\OptionalService, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set OptionalService value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\OptionalService[] $optionalService
     * @return \Travelport\UniversalRecord\StructType\CruiseReservation
     */
    public function setOptionalService(?array $optionalService = null): self
    {
        // validation for constraint: array
        if ('' !== ($optionalServiceArrayErrorMessage = self::validateOptionalServiceForArrayConstraintFromSetOptionalService($optionalService))) {
            throw new InvalidArgumentException($optionalServiceArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($optionalService) && count($optionalService) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($optionalService)), __LINE__);
        }
        $this->OptionalService = $optionalService;
        
        return $this;
    }
    /**
     * Add item to OptionalService value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\OptionalService $item
     * @return \Travelport\UniversalRecord\StructType\CruiseReservation
     */
    public function addToOptionalService(\Travelport\UniversalRecord\StructType\OptionalService $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\OptionalService) {
            throw new InvalidArgumentException(sprintf('The OptionalService property can only contain items of type \Travelport\UniversalRecord\StructType\OptionalService, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->OptionalService) && count($this->OptionalService) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->OptionalService)), __LINE__);
        }
        $this->OptionalService[] = $item;
        
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
        foreach ($values as $cruiseReservationBookingTravelerRefItem) {
            // validation for constraint: itemType
            if (!$cruiseReservationBookingTravelerRefItem instanceof \Travelport\UniversalRecord\StructType\BookingTravelerRef) {
                $invalidValues[] = is_object($cruiseReservationBookingTravelerRefItem) ? get_class($cruiseReservationBookingTravelerRefItem) : sprintf('%s(%s)', gettype($cruiseReservationBookingTravelerRefItem), var_export($cruiseReservationBookingTravelerRefItem, true));
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
     * @return \Travelport\UniversalRecord\StructType\CruiseReservation
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
     * @return \Travelport\UniversalRecord\StructType\CruiseReservation
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
     * Get ProviderReservationInfoRef value
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef|null
     */
    public function getProviderReservationInfoRef(): ?\Travelport\UniversalRecord\StructType\ProviderReservationInfoRef
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef $providerReservationInfoRef
     * @return \Travelport\UniversalRecord\StructType\CruiseReservation
     */
    public function setProviderReservationInfoRef(?\Travelport\UniversalRecord\StructType\ProviderReservationInfoRef $providerReservationInfoRef = null): self
    {
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Get Payment value
     * @return \Travelport\UniversalRecord\StructType\Payment[]
     */
    public function getPayment(): ?array
    {
        return $this->Payment;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPayment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentForArrayConstraintFromSetPayment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $cruiseReservationPaymentItem) {
            // validation for constraint: itemType
            if (!$cruiseReservationPaymentItem instanceof \Travelport\UniversalRecord\StructType\Payment) {
                $invalidValues[] = is_object($cruiseReservationPaymentItem) ? get_class($cruiseReservationPaymentItem) : sprintf('%s(%s)', gettype($cruiseReservationPaymentItem), var_export($cruiseReservationPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Payment property can only contain items of type \Travelport\UniversalRecord\StructType\Payment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Payment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Payment[] $payment
     * @return \Travelport\UniversalRecord\StructType\CruiseReservation
     */
    public function setPayment(?array $payment = null): self
    {
        // validation for constraint: array
        if ('' !== ($paymentArrayErrorMessage = self::validatePaymentForArrayConstraintFromSetPayment($payment))) {
            throw new InvalidArgumentException($paymentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($payment) && count($payment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($payment)), __LINE__);
        }
        $this->Payment = $payment;
        
        return $this;
    }
    /**
     * Add item to Payment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Payment $item
     * @return \Travelport\UniversalRecord\StructType\CruiseReservation
     */
    public function addToPayment(\Travelport\UniversalRecord\StructType\Payment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Payment) {
            throw new InvalidArgumentException(sprintf('The Payment property can only contain items of type \Travelport\UniversalRecord\StructType\Payment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Payment) && count($this->Payment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Payment)), __LINE__);
        }
        $this->Payment[] = $item;
        
        return $this;
    }
}
