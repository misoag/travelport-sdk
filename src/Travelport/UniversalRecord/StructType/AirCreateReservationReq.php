<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
     * The PointOfSale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:PointOfSale
     * @var \Travelport\UniversalRecord\StructType\PointOfSale|null
     */
    protected ?\Travelport\UniversalRecord\StructType\PointOfSale $PointOfSale = null;
    /**
     * The AirPricingSolution
     * Meta information extracted from the WSDL
     * - maxOccurs: 16
     * - ref: air_v52_0:AirPricingSolution
     * @var \Travelport\UniversalRecord\StructType\AirPricingSolution[]
     */
    protected ?array $AirPricingSolution = null;
    /**
     * The ActionStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:ActionStatus
     * @var \Travelport\UniversalRecord\StructType\ActionStatus[]
     */
    protected ?array $ActionStatus = null;
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
     * The DeliveryInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:DeliveryInfo
     * @var \Travelport\UniversalRecord\StructType\DeliveryInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\DeliveryInfo $DeliveryInfo = null;
    /**
     * The AutoSeatAssignment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: air_v52_0:AutoSeatAssignment
     * @var \Travelport\UniversalRecord\StructType\AutoSeatAssignment[]
     */
    protected ?array $AutoSeatAssignment = null;
    /**
     * The SpecificSeatAssignment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: air_v52_0:SpecificSeatAssignment
     * @var \Travelport\UniversalRecord\StructType\SpecificSeatAssignment[]
     */
    protected ?array $SpecificSeatAssignment = null;
    /**
     * The AssociatedRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: air_v52_0:AssociatedRemark
     * @var \Travelport\UniversalRecord\StructType\AssociatedRemark[]
     */
    protected ?array $AssociatedRemark = null;
    /**
     * The PocketItineraryRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: air_v52_0:PocketItineraryRemark
     * @var \Travelport\UniversalRecord\StructType\PocketItineraryRemark[]
     */
    protected ?array $PocketItineraryRemark = null;
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
     * The AirPricingTicketingModifiers
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: air_v52_0:AirPricingTicketingModifiers
     * @var \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers[]
     */
    protected ?array $AirPricingTicketingModifiers = null;
    /**
     * The RetainReservation
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G,1V,1P
     * - default: None
     * - use: optional
     * @var string|null
     */
    protected ?string $RetainReservation = null;
    /**
     * The Source
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - use: optional
     * @var string|null
     */
    protected ?string $Source = null;
    /**
     * The OverrideMCT
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G,1V.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $OverrideMCT = null;
    /**
     * The RestrictWaitlist
     * Meta information extracted from the WSDL
     * - documentation: Restrict Book if it sells a Waitlisted AirSegment. Provider: 1G,1V
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $RestrictWaitlist = null;
    /**
     * The CreatePassiveForHold
     * Meta information extracted from the WSDL
     * - documentation: Creates a background passive segment for an ACH hold booking.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $CreatePassiveForHold = null;
    /**
     * The ChannelId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 4
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $ChannelId = null;
    /**
     * The NSCC
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 3
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $NSCC = null;
    /**
     * The CheckPriceVarianceType
     * Meta information extracted from the WSDL
     * - default: Amount
     * - use: optional
     * @var string|null
     */
    protected ?string $CheckPriceVarianceType = null;
    /**
     * The CheckPriceVarianceValue
     * Meta information extracted from the WSDL
     * - documentation: Price variance tolerance in currency or percentage. Booking allowed if Price Difference ≤ Price Variance.
     * - default: 0.0
     * - use: optional
     * @var float|null
     */
    protected ?float $CheckPriceVarianceValue = null;
    /**
     * The SplitReservation
     * Meta information extracted from the WSDL
     * - documentation: Creates multi host PNRs per AirPricingSolution if true,Creates single host PNR if false or not included in the request.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $SplitReservation = null;
    /**
     * The PreferCompleteItinerary
     * Meta information extracted from the WSDL
     * - documentation: Applicable only for book requests with multiple AirPricingSolutions. True – Cancel the booking request if there is a booking failure for one of the AirPricingSolutions. False – Continue booking other AirPricingSolutions even if
     * there is a booking failure.
     * - default: true
     * - use: optional
     * @var bool|null
     */
    protected ?bool $PreferCompleteItinerary = null;
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
        foreach ($values as $airCreateReservationReqSupplierLocatorItem) {
            // validation for constraint: itemType
            if (!$airCreateReservationReqSupplierLocatorItem instanceof \Travelport\UniversalRecord\StructType\SupplierLocator) {
                $invalidValues[] = is_object($airCreateReservationReqSupplierLocatorItem) ? get_class($airCreateReservationReqSupplierLocatorItem) : sprintf('%s(%s)', gettype($airCreateReservationReqSupplierLocatorItem), var_export($airCreateReservationReqSupplierLocatorItem, true));
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
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
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
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
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
        foreach ($values as $airCreateReservationReqThirdPartyInformationItem) {
            // validation for constraint: itemType
            if (!$airCreateReservationReqThirdPartyInformationItem instanceof \Travelport\UniversalRecord\StructType\ThirdPartyInformation) {
                $invalidValues[] = is_object($airCreateReservationReqThirdPartyInformationItem) ? get_class($airCreateReservationReqThirdPartyInformationItem) : sprintf('%s(%s)', gettype($airCreateReservationReqThirdPartyInformationItem), var_export($airCreateReservationReqThirdPartyInformationItem, true));
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
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
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
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
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
     * This method is responsible for validating the values passed to the setAirPricingSolution method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirPricingSolution method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirPricingSolutionForArrayConstraintsFromSetAirPricingSolution(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airCreateReservationReqAirPricingSolutionItem) {
            // validation for constraint: itemType
            if (!$airCreateReservationReqAirPricingSolutionItem instanceof \Travelport\UniversalRecord\StructType\AirPricingSolution) {
                $invalidValues[] = is_object($airCreateReservationReqAirPricingSolutionItem) ? get_class($airCreateReservationReqAirPricingSolutionItem) : sprintf('%s(%s)', gettype($airCreateReservationReqAirPricingSolutionItem), var_export($airCreateReservationReqAirPricingSolutionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirPricingSolution property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingSolution, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirPricingSolution value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingSolution[] $airPricingSolution
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setAirPricingSolution(?array $airPricingSolution = null): self
    {
        // validation for constraint: array
        if ('' !== ($airPricingSolutionArrayErrorMessage = self::validateAirPricingSolutionForArrayConstraintsFromSetAirPricingSolution($airPricingSolution))) {
            throw new InvalidArgumentException($airPricingSolutionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(16)
        if (is_array($airPricingSolution) && count($airPricingSolution) > 16) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 16', count($airPricingSolution)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirPricingSolution) {
            throw new InvalidArgumentException(sprintf('The AirPricingSolution property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingSolution, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(16)
        if (is_array($this->AirPricingSolution) && count($this->AirPricingSolution) >= 16) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 16', count($this->AirPricingSolution)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setActionStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setActionStatus method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateActionStatusForArrayConstraintsFromSetActionStatus(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airCreateReservationReqActionStatusItem) {
            // validation for constraint: itemType
            if (!$airCreateReservationReqActionStatusItem instanceof \Travelport\UniversalRecord\StructType\ActionStatus) {
                $invalidValues[] = is_object($airCreateReservationReqActionStatusItem) ? get_class($airCreateReservationReqActionStatusItem) : sprintf('%s(%s)', gettype($airCreateReservationReqActionStatusItem), var_export($airCreateReservationReqActionStatusItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ActionStatus property can only contain items of type \Travelport\UniversalRecord\StructType\ActionStatus, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ActionStatus value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ActionStatus[] $actionStatus
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setActionStatus(?array $actionStatus = null): self
    {
        // validation for constraint: array
        if ('' !== ($actionStatusArrayErrorMessage = self::validateActionStatusForArrayConstraintsFromSetActionStatus($actionStatus))) {
            throw new InvalidArgumentException($actionStatusArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($actionStatus) && count($actionStatus) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($actionStatus)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ActionStatus) {
            throw new InvalidArgumentException(sprintf('The ActionStatus property can only contain items of type \Travelport\UniversalRecord\StructType\ActionStatus, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ActionStatus) && count($this->ActionStatus) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ActionStatus)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPayment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentForArrayConstraintsFromSetPayment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airCreateReservationReqPaymentItem) {
            // validation for constraint: itemType
            if (!$airCreateReservationReqPaymentItem instanceof \Travelport\UniversalRecord\StructType\Payment) {
                $invalidValues[] = is_object($airCreateReservationReqPaymentItem) ? get_class($airCreateReservationReqPaymentItem) : sprintf('%s(%s)', gettype($airCreateReservationReqPaymentItem), var_export($airCreateReservationReqPaymentItem, true));
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
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setPayment(?array $payment = null): self
    {
        // validation for constraint: array
        if ('' !== ($paymentArrayErrorMessage = self::validatePaymentForArrayConstraintsFromSetPayment($payment))) {
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
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
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
     * This method is responsible for validating the values passed to the setAutoSeatAssignment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAutoSeatAssignment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAutoSeatAssignmentForArrayConstraintsFromSetAutoSeatAssignment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airCreateReservationReqAutoSeatAssignmentItem) {
            // validation for constraint: itemType
            if (!$airCreateReservationReqAutoSeatAssignmentItem instanceof \Travelport\UniversalRecord\StructType\AutoSeatAssignment) {
                $invalidValues[] = is_object($airCreateReservationReqAutoSeatAssignmentItem) ? get_class($airCreateReservationReqAutoSeatAssignmentItem) : sprintf('%s(%s)', gettype($airCreateReservationReqAutoSeatAssignmentItem), var_export($airCreateReservationReqAutoSeatAssignmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AutoSeatAssignment property can only contain items of type \Travelport\UniversalRecord\StructType\AutoSeatAssignment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AutoSeatAssignment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AutoSeatAssignment[] $autoSeatAssignment
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setAutoSeatAssignment(?array $autoSeatAssignment = null): self
    {
        // validation for constraint: array
        if ('' !== ($autoSeatAssignmentArrayErrorMessage = self::validateAutoSeatAssignmentForArrayConstraintsFromSetAutoSeatAssignment($autoSeatAssignment))) {
            throw new InvalidArgumentException($autoSeatAssignmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($autoSeatAssignment) && count($autoSeatAssignment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($autoSeatAssignment)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AutoSeatAssignment) {
            throw new InvalidArgumentException(sprintf('The AutoSeatAssignment property can only contain items of type \Travelport\UniversalRecord\StructType\AutoSeatAssignment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AutoSeatAssignment) && count($this->AutoSeatAssignment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AutoSeatAssignment)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setSpecificSeatAssignment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSpecificSeatAssignment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSpecificSeatAssignmentForArrayConstraintsFromSetSpecificSeatAssignment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airCreateReservationReqSpecificSeatAssignmentItem) {
            // validation for constraint: itemType
            if (!$airCreateReservationReqSpecificSeatAssignmentItem instanceof \Travelport\UniversalRecord\StructType\SpecificSeatAssignment) {
                $invalidValues[] = is_object($airCreateReservationReqSpecificSeatAssignmentItem) ? get_class($airCreateReservationReqSpecificSeatAssignmentItem) : sprintf('%s(%s)', gettype($airCreateReservationReqSpecificSeatAssignmentItem), var_export($airCreateReservationReqSpecificSeatAssignmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SpecificSeatAssignment property can only contain items of type \Travelport\UniversalRecord\StructType\SpecificSeatAssignment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SpecificSeatAssignment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SpecificSeatAssignment[] $specificSeatAssignment
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setSpecificSeatAssignment(?array $specificSeatAssignment = null): self
    {
        // validation for constraint: array
        if ('' !== ($specificSeatAssignmentArrayErrorMessage = self::validateSpecificSeatAssignmentForArrayConstraintsFromSetSpecificSeatAssignment($specificSeatAssignment))) {
            throw new InvalidArgumentException($specificSeatAssignmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($specificSeatAssignment) && count($specificSeatAssignment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($specificSeatAssignment)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\SpecificSeatAssignment) {
            throw new InvalidArgumentException(sprintf('The SpecificSeatAssignment property can only contain items of type \Travelport\UniversalRecord\StructType\SpecificSeatAssignment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SpecificSeatAssignment) && count($this->SpecificSeatAssignment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SpecificSeatAssignment)), __LINE__);
        }
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
        foreach ($values as $airCreateReservationReqAssociatedRemarkItem) {
            // validation for constraint: itemType
            if (!$airCreateReservationReqAssociatedRemarkItem instanceof \Travelport\UniversalRecord\StructType\AssociatedRemark) {
                $invalidValues[] = is_object($airCreateReservationReqAssociatedRemarkItem) ? get_class($airCreateReservationReqAssociatedRemarkItem) : sprintf('%s(%s)', gettype($airCreateReservationReqAssociatedRemarkItem), var_export($airCreateReservationReqAssociatedRemarkItem, true));
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
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
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
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
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
     * Get PocketItineraryRemark value
     * @return \Travelport\UniversalRecord\StructType\PocketItineraryRemark[]
     */
    public function getPocketItineraryRemark(): ?array
    {
        return $this->PocketItineraryRemark;
    }
    /**
     * This method is responsible for validating the values passed to the setPocketItineraryRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPocketItineraryRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePocketItineraryRemarkForArrayConstraintsFromSetPocketItineraryRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airCreateReservationReqPocketItineraryRemarkItem) {
            // validation for constraint: itemType
            if (!$airCreateReservationReqPocketItineraryRemarkItem instanceof \Travelport\UniversalRecord\StructType\PocketItineraryRemark) {
                $invalidValues[] = is_object($airCreateReservationReqPocketItineraryRemarkItem) ? get_class($airCreateReservationReqPocketItineraryRemarkItem) : sprintf('%s(%s)', gettype($airCreateReservationReqPocketItineraryRemarkItem), var_export($airCreateReservationReqPocketItineraryRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PocketItineraryRemark property can only contain items of type \Travelport\UniversalRecord\StructType\PocketItineraryRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PocketItineraryRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PocketItineraryRemark[] $pocketItineraryRemark
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setPocketItineraryRemark(?array $pocketItineraryRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($pocketItineraryRemarkArrayErrorMessage = self::validatePocketItineraryRemarkForArrayConstraintsFromSetPocketItineraryRemark($pocketItineraryRemark))) {
            throw new InvalidArgumentException($pocketItineraryRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($pocketItineraryRemark) && count($pocketItineraryRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($pocketItineraryRemark)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\PocketItineraryRemark) {
            throw new InvalidArgumentException(sprintf('The PocketItineraryRemark property can only contain items of type \Travelport\UniversalRecord\StructType\PocketItineraryRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PocketItineraryRemark) && count($this->PocketItineraryRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PocketItineraryRemark)), __LINE__);
        }
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
        foreach ($values as $airCreateReservationReqReviewBookingItem) {
            // validation for constraint: itemType
            if (!$airCreateReservationReqReviewBookingItem instanceof \Travelport\UniversalRecord\StructType\ReviewBooking) {
                $invalidValues[] = is_object($airCreateReservationReqReviewBookingItem) ? get_class($airCreateReservationReqReviewBookingItem) : sprintf('%s(%s)', gettype($airCreateReservationReqReviewBookingItem), var_export($airCreateReservationReqReviewBookingItem, true));
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
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
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
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
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
    /**
     * Get AirPricingTicketingModifiers value
     * @return \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers[]
     */
    public function getAirPricingTicketingModifiers(): ?array
    {
        return $this->AirPricingTicketingModifiers;
    }
    /**
     * This method is responsible for validating the values passed to the setAirPricingTicketingModifiers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirPricingTicketingModifiers method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirPricingTicketingModifiersForArrayConstraintsFromSetAirPricingTicketingModifiers(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airCreateReservationReqAirPricingTicketingModifiersItem) {
            // validation for constraint: itemType
            if (!$airCreateReservationReqAirPricingTicketingModifiersItem instanceof \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers) {
                $invalidValues[] = is_object($airCreateReservationReqAirPricingTicketingModifiersItem) ? get_class($airCreateReservationReqAirPricingTicketingModifiersItem) : sprintf('%s(%s)', gettype($airCreateReservationReqAirPricingTicketingModifiersItem), var_export($airCreateReservationReqAirPricingTicketingModifiersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirPricingTicketingModifiers property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirPricingTicketingModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers[] $airPricingTicketingModifiers
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setAirPricingTicketingModifiers(?array $airPricingTicketingModifiers = null): self
    {
        // validation for constraint: array
        if ('' !== ($airPricingTicketingModifiersArrayErrorMessage = self::validateAirPricingTicketingModifiersForArrayConstraintsFromSetAirPricingTicketingModifiers($airPricingTicketingModifiers))) {
            throw new InvalidArgumentException($airPricingTicketingModifiersArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($airPricingTicketingModifiers) && count($airPricingTicketingModifiers) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($airPricingTicketingModifiers)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers) {
            throw new InvalidArgumentException(sprintf('The AirPricingTicketingModifiers property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->AirPricingTicketingModifiers) && count($this->AirPricingTicketingModifiers) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->AirPricingTicketingModifiers)), __LINE__);
        }
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeRetainReservation::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeRetainReservation::getValidValues()
     * @throws InvalidArgumentException
     * @param string $retainReservation
     * @return \Travelport\UniversalRecord\StructType\AirCreateReservationReq
     */
    public function setRetainReservation(?string $retainReservation = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeRetainReservation::valueIsValid($retainReservation)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeRetainReservation', is_array($retainReservation) ? implode(', ', $retainReservation) : var_export($retainReservation, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeRetainReservation::getValidValues())), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($source) && !is_string($source)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($source, true), gettype($source)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($source) && mb_strlen((string) $source) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $source)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($overrideMCT) && !is_bool($overrideMCT)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($overrideMCT, true), gettype($overrideMCT)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($restrictWaitlist) && !is_bool($restrictWaitlist)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($restrictWaitlist, true), gettype($restrictWaitlist)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($createPassiveForHold) && !is_bool($createPassiveForHold)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($createPassiveForHold, true), gettype($createPassiveForHold)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($channelId) && !is_string($channelId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($channelId, true), gettype($channelId)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($channelId) && mb_strlen((string) $channelId) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen((string) $channelId)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($channelId) && mb_strlen((string) $channelId) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $channelId)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($nSCC) && !is_string($nSCC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nSCC, true), gettype($nSCC)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($nSCC) && mb_strlen((string) $nSCC) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $nSCC)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($nSCC) && mb_strlen((string) $nSCC) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $nSCC)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($checkPriceVarianceType) && !is_string($checkPriceVarianceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($checkPriceVarianceType, true), gettype($checkPriceVarianceType)), __LINE__);
        }
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
        // validation for constraint: float
        if (!is_null($checkPriceVarianceValue) && !(is_float($checkPriceVarianceValue) || is_numeric($checkPriceVarianceValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($checkPriceVarianceValue, true), gettype($checkPriceVarianceValue)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($splitReservation) && !is_bool($splitReservation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($splitReservation, true), gettype($splitReservation)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($preferCompleteItinerary) && !is_bool($preferCompleteItinerary)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preferCompleteItinerary, true), gettype($preferCompleteItinerary)), __LINE__);
        }
        $this->PreferCompleteItinerary = $preferCompleteItinerary;
        
        return $this;
    }
}
