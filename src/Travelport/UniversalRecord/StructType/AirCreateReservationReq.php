<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirCreateReservationReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to store an air itinerary and create initial PNR.
 * @subpackage Structs
 */
class AirCreateReservationReq extends BaseCreateWithFormOfPaymentReq
{
    /**
     * The SupplierLocator
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:SupplierLocator
     * @var \Travelport\UniversalRecord\StructType\SupplierLocator[]
     */
    public ?array $SupplierLocator = null;
    /**
     * The ThirdPartyInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:ThirdPartyInformation
     * @var \Travelport\UniversalRecord\StructType\ThirdPartyInformation[]
     */
    public ?array $ThirdPartyInformation = null;
    /**
     * The PointOfSale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:PointOfSale
     * @var \Travelport\UniversalRecord\StructType\PointOfSale|null
     */
    public ?\Travelport\UniversalRecord\StructType\PointOfSale $PointOfSale = null;
    /**
     * The AirPricingSolution
     * Meta information extracted from the WSDL
     * - maxOccurs: 16
     * - ref: air_v52_0:AirPricingSolution
     * @var \Travelport\UniversalRecord\StructType\AirPricingSolution[]
     */
    public ?array $AirPricingSolution = null;
    /**
     * The ActionStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:ActionStatus
     * @var \Travelport\UniversalRecord\StructType\ActionStatus[]
     */
    public ?array $ActionStatus = null;
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
     * The DeliveryInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:DeliveryInfo
     * @var \Travelport\UniversalRecord\StructType\DeliveryInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\DeliveryInfo $DeliveryInfo = null;
    /**
     * The AutoSeatAssignment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: air_v52_0:AutoSeatAssignment
     * @var \Travelport\UniversalRecord\StructType\AutoSeatAssignment[]
     */
    public ?array $AutoSeatAssignment = null;
    /**
     * The SpecificSeatAssignment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: air_v52_0:SpecificSeatAssignment
     * @var \Travelport\UniversalRecord\StructType\SpecificSeatAssignment[]
     */
    public ?array $SpecificSeatAssignment = null;
    /**
     * The AssociatedRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: air_v52_0:AssociatedRemark
     * @var \Travelport\UniversalRecord\StructType\AssociatedRemark[]
     */
    public ?array $AssociatedRemark = null;
    /**
     * The PocketItineraryRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: air_v52_0:PocketItineraryRemark
     * @var \Travelport\UniversalRecord\StructType\PocketItineraryRemark[]
     */
    public ?array $PocketItineraryRemark = null;
    /**
     * The ReviewBooking
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:ReviewBooking
     * @var \Travelport\UniversalRecord\StructType\ReviewBooking[]
     */
    public ?array $ReviewBooking = null;
    /**
     * The AirPricingTicketingModifiers
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: air_v52_0:AirPricingTicketingModifiers
     * @var \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers[]
     */
    public ?array $AirPricingTicketingModifiers = null;
    /**
     * The RetainReservation
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G,1V,1P
     * - default: None
     * - use: optional
     * @var string|null
     */
    public ?string $RetainReservation = null;
    /**
     * The Source
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - use: optional
     * @var string|null
     */
    public ?string $Source = null;
    /**
     * The OverrideMCT
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G,1V.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $OverrideMCT = null;
    /**
     * The RestrictWaitlist
     * Meta information extracted from the WSDL
     * - documentation: Restrict Book if it sells a Waitlisted AirSegment. Provider: 1G,1V
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $RestrictWaitlist = null;
    /**
     * The CreatePassiveForHold
     * Meta information extracted from the WSDL
     * - documentation: Creates a background passive segment for an ACH hold booking.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $CreatePassiveForHold = null;
    /**
     * The ChannelId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 4
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    public ?string $ChannelId = null;
    /**
     * The NSCC
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 3
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $NSCC = null;
    /**
     * The CheckPriceVarianceType
     * Meta information extracted from the WSDL
     * - default: Amount
     * - use: optional
     * @var string|null
     */
    public ?string $CheckPriceVarianceType = null;
    /**
     * The CheckPriceVarianceValue
     * Meta information extracted from the WSDL
     * - documentation: Price variance tolerance in currency or percentage. Booking allowed if Price Difference ≤ Price Variance.
     * - default: 0.0
     * - use: optional
     * @var float|null
     */
    public ?float $CheckPriceVarianceValue = null;
    /**
     * The SplitReservation
     * Meta information extracted from the WSDL
     * - documentation: Creates multi host PNRs per AirPricingSolution if true,Creates single host PNR if false or not included in the request.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $SplitReservation = null;
    /**
     * The PreferCompleteItinerary
     * Meta information extracted from the WSDL
     * - documentation: Applicable only for book requests with multiple AirPricingSolutions. True – Cancel the booking request if there is a booking failure for one of the AirPricingSolutions. False – Continue booking other AirPricingSolutions even if
     * there is a booking failure.
     * - default: true
     * - use: optional
     * @var bool|null
     */
    public ?bool $PreferCompleteItinerary = null;
    /**
     * Constructor method for AirCreateReservationReq
     * @uses AirCreateReservationReq::setSupplierLocator()
     * @uses AirCreateReservationReq::setThirdPartyInformation()
     * @uses AirCreateReservationReq::setPointOfSale()
     * @uses AirCreateReservationReq::setAirPricingSolution()
     * @uses AirCreateReservationReq::setActionStatus()
     * @uses AirCreateReservationReq::setPayment()
     * @uses AirCreateReservationReq::setDeliveryInfo()
     * @uses AirCreateReservationReq::setAutoSeatAssignment()
     * @uses AirCreateReservationReq::setSpecificSeatAssignment()
     * @uses AirCreateReservationReq::setAssociatedRemark()
     * @uses AirCreateReservationReq::setPocketItineraryRemark()
     * @uses AirCreateReservationReq::setReviewBooking()
     * @uses AirCreateReservationReq::setAirPricingTicketingModifiers()
     * @uses AirCreateReservationReq::setRetainReservation()
     * @uses AirCreateReservationReq::setSource()
     * @uses AirCreateReservationReq::setOverrideMCT()
     * @uses AirCreateReservationReq::setRestrictWaitlist()
     * @uses AirCreateReservationReq::setCreatePassiveForHold()
     * @uses AirCreateReservationReq::setChannelId()
     * @uses AirCreateReservationReq::setNSCC()
     * @uses AirCreateReservationReq::setCheckPriceVarianceType()
     * @uses AirCreateReservationReq::setCheckPriceVarianceValue()
     * @uses AirCreateReservationReq::setSplitReservation()
     * @uses AirCreateReservationReq::setPreferCompleteItinerary()
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator[] $supplierLocator
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation[] $thirdPartyInformation
     * @param \Travelport\UniversalRecord\StructType\PointOfSale $pointOfSale
     * @param \Travelport\UniversalRecord\StructType\AirPricingSolution[] $airPricingSolution
     * @param \Travelport\UniversalRecord\StructType\ActionStatus[] $actionStatus
     * @param \Travelport\UniversalRecord\StructType\Payment[] $payment
     * @param \Travelport\UniversalRecord\StructType\DeliveryInfo $deliveryInfo
     * @param \Travelport\UniversalRecord\StructType\AutoSeatAssignment[] $autoSeatAssignment
     * @param \Travelport\UniversalRecord\StructType\SpecificSeatAssignment[] $specificSeatAssignment
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark[] $associatedRemark
     * @param \Travelport\UniversalRecord\StructType\PocketItineraryRemark[] $pocketItineraryRemark
     * @param \Travelport\UniversalRecord\StructType\ReviewBooking[] $reviewBooking
     * @param \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers[] $airPricingTicketingModifiers
     * @param string $retainReservation
     * @param string $source
     * @param bool $overrideMCT
     * @param bool $restrictWaitlist
     * @param bool $createPassiveForHold
     * @param string $channelId
     * @param string $nSCC
     * @param string $checkPriceVarianceType
     * @param float $checkPriceVarianceValue
     * @param bool $splitReservation
     * @param bool $preferCompleteItinerary
     */
    public function __construct(?array $supplierLocator = null, ?array $thirdPartyInformation = null, ?\Travelport\UniversalRecord\StructType\PointOfSale $pointOfSale = null, ?array $airPricingSolution = null, ?array $actionStatus = null, ?array $payment = null, ?\Travelport\UniversalRecord\StructType\DeliveryInfo $deliveryInfo = null, ?array $autoSeatAssignment = null, ?array $specificSeatAssignment = null, ?array $associatedRemark = null, ?array $pocketItineraryRemark = null, ?array $reviewBooking = null, ?array $airPricingTicketingModifiers = null, ?string $retainReservation = null, ?string $source = null, ?bool $overrideMCT = false, ?bool $restrictWaitlist = false, ?bool $createPassiveForHold = false, ?string $channelId = null, ?string $nSCC = null, ?string $checkPriceVarianceType = 'Amount', ?float $checkPriceVarianceValue = 0, ?bool $splitReservation = false, ?bool $preferCompleteItinerary = true)
    {
        $this
            ->setSupplierLocator($supplierLocator)
            ->setThirdPartyInformation($thirdPartyInformation)
            ->setPointOfSale($pointOfSale)
            ->setAirPricingSolution($airPricingSolution)
            ->setActionStatus($actionStatus)
            ->setPayment($payment)
            ->setDeliveryInfo($deliveryInfo)
            ->setAutoSeatAssignment($autoSeatAssignment)
            ->setSpecificSeatAssignment($specificSeatAssignment)
            ->setAssociatedRemark($associatedRemark)
            ->setPocketItineraryRemark($pocketItineraryRemark)
            ->setReviewBooking($reviewBooking)
            ->setAirPricingTicketingModifiers($airPricingTicketingModifiers)
            ->setRetainReservation($retainReservation)
            ->setSource($source)
            ->setOverrideMCT($overrideMCT)
            ->setRestrictWaitlist($restrictWaitlist)
            ->setCreatePassiveForHold($createPassiveForHold)
            ->setChannelId($channelId)
            ->setNSCC($nSCC)
            ->setCheckPriceVarianceType($checkPriceVarianceType)
            ->setCheckPriceVarianceValue($checkPriceVarianceValue)
            ->setSplitReservation($splitReservation)
            ->setPreferCompleteItinerary($preferCompleteItinerary);
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
     * Set SupplierLocator value
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator[] $supplierLocator
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setSupplierLocator(?array $supplierLocator = null): self
    {
        $this->SupplierLocator = $supplierLocator;
        
        return $this;
    }
    /**
     * Add item to SupplierLocator value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator $item
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function addToSupplierLocator(\Travelport\UniversalRecord\StructType\SupplierLocator $item): self
    {
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
     * Set ThirdPartyInformation value
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation[] $thirdPartyInformation
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setThirdPartyInformation(?array $thirdPartyInformation = null): self
    {
        $this->ThirdPartyInformation = $thirdPartyInformation;
        
        return $this;
    }
    /**
     * Add item to ThirdPartyInformation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation $item
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function addToThirdPartyInformation(\Travelport\UniversalRecord\StructType\ThirdPartyInformation $item): self
    {
        $this->ThirdPartyInformation[] = $item;
        
        return $this;
    }
    /**
     * Get PointOfSale value
     * @return \Travelport\UniversalRecord\StructType\PointOfSale|null
     */
    public function getPointOfSale(): ?\Travelport\UniversalRecord\StructType\PointOfSale
    {
        return $this->PointOfSale;
    }
    /**
     * Set PointOfSale value
     * @param \Travelport\UniversalRecord\StructType\PointOfSale $pointOfSale
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setPointOfSale(?\Travelport\UniversalRecord\StructType\PointOfSale $pointOfSale = null): self
    {
        $this->PointOfSale = $pointOfSale;
        
        return $this;
    }
    /**
     * Get AirPricingSolution value
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution[]
     */
    public function getAirPricingSolution(): ?array
    {
        return $this->AirPricingSolution;
    }
    /**
     * Set AirPricingSolution value
     * @param \Travelport\UniversalRecord\StructType\AirPricingSolution[] $airPricingSolution
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setAirPricingSolution(?array $airPricingSolution = null): self
    {
        $this->AirPricingSolution = $airPricingSolution;
        
        return $this;
    }
    /**
     * Add item to AirPricingSolution value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingSolution $item
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function addToAirPricingSolution(\Travelport\UniversalRecord\StructType\AirPricingSolution $item): self
    {
        $this->AirPricingSolution[] = $item;
        
        return $this;
    }
    /**
     * Get ActionStatus value
     * @return \Travelport\UniversalRecord\StructType\ActionStatus[]
     */
    public function getActionStatus(): ?array
    {
        return $this->ActionStatus;
    }
    /**
     * Set ActionStatus value
     * @param \Travelport\UniversalRecord\StructType\ActionStatus[] $actionStatus
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setActionStatus(?array $actionStatus = null): self
    {
        $this->ActionStatus = $actionStatus;
        
        return $this;
    }
    /**
     * Add item to ActionStatus value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ActionStatus $item
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function addToActionStatus(\Travelport\UniversalRecord\StructType\ActionStatus $item): self
    {
        $this->ActionStatus[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
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
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function addToPayment(\Travelport\UniversalRecord\StructType\Payment $item): self
    {
        $this->Payment[] = $item;
        
        return $this;
    }
    /**
     * Get DeliveryInfo value
     * @return \Travelport\UniversalRecord\StructType\DeliveryInfo|null
     */
    public function getDeliveryInfo(): ?\Travelport\UniversalRecord\StructType\DeliveryInfo
    {
        return $this->DeliveryInfo;
    }
    /**
     * Set DeliveryInfo value
     * @param \Travelport\UniversalRecord\StructType\DeliveryInfo $deliveryInfo
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setDeliveryInfo(?\Travelport\UniversalRecord\StructType\DeliveryInfo $deliveryInfo = null): self
    {
        $this->DeliveryInfo = $deliveryInfo;
        
        return $this;
    }
    /**
     * Get AutoSeatAssignment value
     * @return \Travelport\UniversalRecord\StructType\AutoSeatAssignment[]
     */
    public function getAutoSeatAssignment(): ?array
    {
        return $this->AutoSeatAssignment;
    }
    /**
     * Set AutoSeatAssignment value
     * @param \Travelport\UniversalRecord\StructType\AutoSeatAssignment[] $autoSeatAssignment
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setAutoSeatAssignment(?array $autoSeatAssignment = null): self
    {
        $this->AutoSeatAssignment = $autoSeatAssignment;
        
        return $this;
    }
    /**
     * Add item to AutoSeatAssignment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AutoSeatAssignment $item
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function addToAutoSeatAssignment(\Travelport\UniversalRecord\StructType\AutoSeatAssignment $item): self
    {
        $this->AutoSeatAssignment[] = $item;
        
        return $this;
    }
    /**
     * Get SpecificSeatAssignment value
     * @return \Travelport\UniversalRecord\StructType\SpecificSeatAssignment[]
     */
    public function getSpecificSeatAssignment(): ?array
    {
        return $this->SpecificSeatAssignment;
    }
    /**
     * Set SpecificSeatAssignment value
     * @param \Travelport\UniversalRecord\StructType\SpecificSeatAssignment[] $specificSeatAssignment
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setSpecificSeatAssignment(?array $specificSeatAssignment = null): self
    {
        $this->SpecificSeatAssignment = $specificSeatAssignment;
        
        return $this;
    }
    /**
     * Add item to SpecificSeatAssignment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SpecificSeatAssignment $item
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function addToSpecificSeatAssignment(\Travelport\UniversalRecord\StructType\SpecificSeatAssignment $item): self
    {
        $this->SpecificSeatAssignment[] = $item;
        
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
     * Set AssociatedRemark value
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark[] $associatedRemark
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setAssociatedRemark(?array $associatedRemark = null): self
    {
        $this->AssociatedRemark = $associatedRemark;
        
        return $this;
    }
    /**
     * Add item to AssociatedRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark $item
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function addToAssociatedRemark(\Travelport\UniversalRecord\StructType\AssociatedRemark $item): self
    {
        $this->AssociatedRemark[] = $item;
        
        return $this;
    }
    /**
     * Get PocketItineraryRemark value
     * @return \Travelport\UniversalRecord\StructType\PocketItineraryRemark[]
     */
    public function getPocketItineraryRemark(): ?array
    {
        return $this->PocketItineraryRemark;
    }
    /**
     * Set PocketItineraryRemark value
     * @param \Travelport\UniversalRecord\StructType\PocketItineraryRemark[] $pocketItineraryRemark
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setPocketItineraryRemark(?array $pocketItineraryRemark = null): self
    {
        $this->PocketItineraryRemark = $pocketItineraryRemark;
        
        return $this;
    }
    /**
     * Add item to PocketItineraryRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PocketItineraryRemark $item
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function addToPocketItineraryRemark(\Travelport\UniversalRecord\StructType\PocketItineraryRemark $item): self
    {
        $this->PocketItineraryRemark[] = $item;
        
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
     * Set ReviewBooking value
     * @param \Travelport\UniversalRecord\StructType\ReviewBooking[] $reviewBooking
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setReviewBooking(?array $reviewBooking = null): self
    {
        $this->ReviewBooking = $reviewBooking;
        
        return $this;
    }
    /**
     * Add item to ReviewBooking value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ReviewBooking $item
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function addToReviewBooking(\Travelport\UniversalRecord\StructType\ReviewBooking $item): self
    {
        $this->ReviewBooking[] = $item;
        
        return $this;
    }
    /**
     * Get AirPricingTicketingModifiers value
     * @return \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers[]
     */
    public function getAirPricingTicketingModifiers(): ?array
    {
        return $this->AirPricingTicketingModifiers;
    }
    /**
     * Set AirPricingTicketingModifiers value
     * @param \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers[] $airPricingTicketingModifiers
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setAirPricingTicketingModifiers(?array $airPricingTicketingModifiers = null): self
    {
        $this->AirPricingTicketingModifiers = $airPricingTicketingModifiers;
        
        return $this;
    }
    /**
     * Add item to AirPricingTicketingModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers $item
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function addToAirPricingTicketingModifiers(\Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers $item): self
    {
        $this->AirPricingTicketingModifiers[] = $item;
        
        return $this;
    }
    /**
     * Get RetainReservation value
     * @return string|null
     */
    public function getRetainReservation(): ?string
    {
        return $this->RetainReservation;
    }
    /**
     * Set RetainReservation value
     * @param string $retainReservation
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setRetainReservation(?string $retainReservation = null): self
    {
        $this->RetainReservation = $retainReservation;
        
        return $this;
    }
    /**
     * Get Source value
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @param string $source
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setSource(?string $source = null): self
    {
        $this->Source = $source;
        
        return $this;
    }
    /**
     * Get OverrideMCT value
     * @return bool|null
     */
    public function getOverrideMCT(): ?bool
    {
        return $this->OverrideMCT;
    }
    /**
     * Set OverrideMCT value
     * @param bool $overrideMCT
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setOverrideMCT(?bool $overrideMCT = false): self
    {
        $this->OverrideMCT = $overrideMCT;
        
        return $this;
    }
    /**
     * Get RestrictWaitlist value
     * @return bool|null
     */
    public function getRestrictWaitlist(): ?bool
    {
        return $this->RestrictWaitlist;
    }
    /**
     * Set RestrictWaitlist value
     * @param bool $restrictWaitlist
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setRestrictWaitlist(?bool $restrictWaitlist = false): self
    {
        $this->RestrictWaitlist = $restrictWaitlist;
        
        return $this;
    }
    /**
     * Get CreatePassiveForHold value
     * @return bool|null
     */
    public function getCreatePassiveForHold(): ?bool
    {
        return $this->CreatePassiveForHold;
    }
    /**
     * Set CreatePassiveForHold value
     * @param bool $createPassiveForHold
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setCreatePassiveForHold(?bool $createPassiveForHold = false): self
    {
        $this->CreatePassiveForHold = $createPassiveForHold;
        
        return $this;
    }
    /**
     * Get ChannelId value
     * @return string|null
     */
    public function getChannelId(): ?string
    {
        return $this->ChannelId;
    }
    /**
     * Set ChannelId value
     * @param string $channelId
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setChannelId(?string $channelId = null): self
    {
        $this->ChannelId = $channelId;
        
        return $this;
    }
    /**
     * Get NSCC value
     * @return string|null
     */
    public function getNSCC(): ?string
    {
        return $this->NSCC;
    }
    /**
     * Set NSCC value
     * @param string $nSCC
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setNSCC(?string $nSCC = null): self
    {
        $this->NSCC = $nSCC;
        
        return $this;
    }
    /**
     * Get CheckPriceVarianceType value
     * @return string|null
     */
    public function getCheckPriceVarianceType(): ?string
    {
        return $this->CheckPriceVarianceType;
    }
    /**
     * Set CheckPriceVarianceType value
     * @param string $checkPriceVarianceType
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setCheckPriceVarianceType(?string $checkPriceVarianceType = 'Amount'): self
    {
        $this->CheckPriceVarianceType = $checkPriceVarianceType;
        
        return $this;
    }
    /**
     * Get CheckPriceVarianceValue value
     * @return float|null
     */
    public function getCheckPriceVarianceValue(): ?float
    {
        return $this->CheckPriceVarianceValue;
    }
    /**
     * Set CheckPriceVarianceValue value
     * @param float $checkPriceVarianceValue
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setCheckPriceVarianceValue(?float $checkPriceVarianceValue = 0): self
    {
        $this->CheckPriceVarianceValue = $checkPriceVarianceValue;
        
        return $this;
    }
    /**
     * Get SplitReservation value
     * @return bool|null
     */
    public function getSplitReservation(): ?bool
    {
        return $this->SplitReservation;
    }
    /**
     * Set SplitReservation value
     * @param bool $splitReservation
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setSplitReservation(?bool $splitReservation = false): self
    {
        $this->SplitReservation = $splitReservation;
        
        return $this;
    }
    /**
     * Get PreferCompleteItinerary value
     * @return bool|null
     */
    public function getPreferCompleteItinerary(): ?bool
    {
        return $this->PreferCompleteItinerary;
    }
    /**
     * Set PreferCompleteItinerary value
     * @param bool $preferCompleteItinerary
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setPreferCompleteItinerary(?bool $preferCompleteItinerary = true): self
    {
        $this->PreferCompleteItinerary = $preferCompleteItinerary;
        
        return $this;
    }
}
