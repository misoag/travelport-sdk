<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?\Travelport\UniversalRecord\StructType\CruiseSegment $CruiseSegment = null;
    /**
     * The CruiseItinerary
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: CruiseItinerary
     * @var \Travelport\UniversalRecord\StructType\CruiseItinerary[]
     */
    public ?array $CruiseItinerary = null;
    /**
     * The CruisePricingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CruisePricingInfo
     * @var \Travelport\UniversalRecord\StructType\CruisePricingInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\CruisePricingInfo $CruisePricingInfo = null;
    /**
     * The OptionalService
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: OptionalService
     * @var \Travelport\UniversalRecord\StructType\OptionalService[]
     */
    public ?array $OptionalService = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: common:BookingTravelerRef
     * @var \Travelport\UniversalRecord\StructType\BookingTravelerRef[]
     */
    public ?array $BookingTravelerRef = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: common:ProviderReservationInfoRef
     * @var \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef|null
     */
    public ?\Travelport\UniversalRecord\StructType\ProviderReservationInfoRef $ProviderReservationInfoRef = null;
    /**
     * The Payment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Payment
     * @var \Travelport\UniversalRecord\StructType\Payment[]
     */
    public ?array $Payment = null;
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
     * Set CruiseItinerary value
     * @param \Travelport\UniversalRecord\StructType\CruiseItinerary[] $cruiseItinerary
     * @return \Travelport\UniversalRecord\StructType\CruiseReservation
     */
    public function setCruiseItinerary(?array $cruiseItinerary = null): self
    {
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
     * Set OptionalService value
     * @param \Travelport\UniversalRecord\StructType\OptionalService[] $optionalService
     * @return \Travelport\UniversalRecord\StructType\CruiseReservation
     */
    public function setOptionalService(?array $optionalService = null): self
    {
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
     * Set BookingTravelerRef value
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\CruiseReservation
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
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
     * Set Payment value
     * @param \Travelport\UniversalRecord\StructType\Payment[] $payment
     * @return \Travelport\UniversalRecord\StructType\CruiseReservation
     */
    public function setPayment(?array $payment = null): self
    {
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
        $this->Payment[] = $item;
        
        return $this;
    }
}
