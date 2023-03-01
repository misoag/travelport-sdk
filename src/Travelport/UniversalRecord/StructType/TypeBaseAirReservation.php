<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeBaseAirReservation StructType
 * Meta information extracted from the WSDL
 * - documentation: Bundle exchange, pricing, and penalty information. Providers ACH/1G/1V/1P | Service segment added to collect additional fee. 1P only | Parent Container for Air Reservation
 * @subpackage Structs
 */
class TypeBaseAirReservation extends BaseReservation
{
    /**
     * The OptionalServices
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: OptionalServices
     * @var \Travelport\UniversalRecord\StructType\OptionalServices|null
     */
    public ?\Travelport\UniversalRecord\StructType\OptionalServices $OptionalServices = null;
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
     * The DocumentInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: DocumentInfo
     * @var \Travelport\UniversalRecord\StructType\DocumentInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\DocumentInfo $DocumentInfo = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:BookingTravelerRef
     * @var \Travelport\UniversalRecord\StructType\BookingTravelerRef[]
     */
    public ?array $BookingTravelerRef = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:ProviderReservationInfoRef
     * @var \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef[]
     */
    public ?array $ProviderReservationInfoRef = null;
    /**
     * The AirSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirSegment
     * @var \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[]
     */
    public ?array $AirSegment = null;
    /**
     * The SvcSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: SvcSegment
     * @var \Travelport\UniversalRecord\StructType\SvcSegment[]
     */
    public ?array $SvcSegment = null;
    /**
     * The AirPricingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirPricingInfo
     * @var \Travelport\UniversalRecord\StructType\AirPricingInfo[]
     */
    public ?array $AirPricingInfo = null;
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
     * The CreditCardAuth
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:CreditCardAuth
     * @var \Travelport\UniversalRecord\StructType\CreditCardAuth[]
     */
    public ?array $CreditCardAuth = null;
    /**
     * The FareNote
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareNote
     * @var \Travelport\UniversalRecord\StructType\FareNote[]
     */
    public ?array $FareNote = null;
    /**
     * The FeeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FeeInfo
     * @var \Travelport\UniversalRecord\StructType\TypeFeeInfo[]
     */
    public ?array $FeeInfo = null;
    /**
     * The TaxInfo
     * Meta information extracted from the WSDL
     * - documentation: Itinerary level taxes
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeTaxInfoWithPaymentRef[]
     */
    public ?array $TaxInfo = null;
    /**
     * The TicketingModifiers
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TicketingModifiers
     * @var \Travelport\UniversalRecord\StructType\TicketingModifiers[]
     */
    public ?array $TicketingModifiers = null;
    /**
     * The AssociatedRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AssociatedRemark
     * @var \Travelport\UniversalRecord\StructType\AssociatedRemark[]
     */
    public ?array $AssociatedRemark = null;
    /**
     * The PocketItineraryRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: PocketItineraryRemark
     * @var \Travelport\UniversalRecord\StructType\PocketItineraryRemark[]
     */
    public ?array $PocketItineraryRemark = null;
    /**
     * The AirExchangeBundleTotal
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: AirExchangeBundleTotal
     * @var \Travelport\UniversalRecord\StructType\AirExchangeBundleTotal|null
     */
    public ?\Travelport\UniversalRecord\StructType\AirExchangeBundleTotal $AirExchangeBundleTotal = null;
    /**
     * The AirExchangeBundle
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirExchangeBundle
     * @var \Travelport\UniversalRecord\StructType\AirExchangeBundle[]
     */
    public ?array $AirExchangeBundle = null;
    /**
     * Constructor method for typeBaseAirReservation
     * @uses TypeBaseAirReservation::setOptionalServices()
     * @uses TypeBaseAirReservation::setSupplierLocator()
     * @uses TypeBaseAirReservation::setThirdPartyInformation()
     * @uses TypeBaseAirReservation::setDocumentInfo()
     * @uses TypeBaseAirReservation::setBookingTravelerRef()
     * @uses TypeBaseAirReservation::setProviderReservationInfoRef()
     * @uses TypeBaseAirReservation::setAirSegment()
     * @uses TypeBaseAirReservation::setSvcSegment()
     * @uses TypeBaseAirReservation::setAirPricingInfo()
     * @uses TypeBaseAirReservation::setPayment()
     * @uses TypeBaseAirReservation::setCreditCardAuth()
     * @uses TypeBaseAirReservation::setFareNote()
     * @uses TypeBaseAirReservation::setFeeInfo()
     * @uses TypeBaseAirReservation::setTaxInfo()
     * @uses TypeBaseAirReservation::setTicketingModifiers()
     * @uses TypeBaseAirReservation::setAssociatedRemark()
     * @uses TypeBaseAirReservation::setPocketItineraryRemark()
     * @uses TypeBaseAirReservation::setAirExchangeBundleTotal()
     * @uses TypeBaseAirReservation::setAirExchangeBundle()
     * @param \Travelport\UniversalRecord\StructType\OptionalServices $optionalServices
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator[] $supplierLocator
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation[] $thirdPartyInformation
     * @param \Travelport\UniversalRecord\StructType\DocumentInfo $documentInfo
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef[] $providerReservationInfoRef
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[] $airSegment
     * @param \Travelport\UniversalRecord\StructType\SvcSegment[] $svcSegment
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfo[] $airPricingInfo
     * @param \Travelport\UniversalRecord\StructType\Payment[] $payment
     * @param \Travelport\UniversalRecord\StructType\CreditCardAuth[] $creditCardAuth
     * @param \Travelport\UniversalRecord\StructType\FareNote[] $fareNote
     * @param \Travelport\UniversalRecord\StructType\TypeFeeInfo[] $feeInfo
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfoWithPaymentRef[] $taxInfo
     * @param \Travelport\UniversalRecord\StructType\TicketingModifiers[] $ticketingModifiers
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark[] $associatedRemark
     * @param \Travelport\UniversalRecord\StructType\PocketItineraryRemark[] $pocketItineraryRemark
     * @param \Travelport\UniversalRecord\StructType\AirExchangeBundleTotal $airExchangeBundleTotal
     * @param \Travelport\UniversalRecord\StructType\AirExchangeBundle[] $airExchangeBundle
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\OptionalServices $optionalServices = null, ?array $supplierLocator = null, ?array $thirdPartyInformation = null, ?\Travelport\UniversalRecord\StructType\DocumentInfo $documentInfo = null, ?array $bookingTravelerRef = null, ?array $providerReservationInfoRef = null, ?array $airSegment = null, ?array $svcSegment = null, ?array $airPricingInfo = null, ?array $payment = null, ?array $creditCardAuth = null, ?array $fareNote = null, ?array $feeInfo = null, ?array $taxInfo = null, ?array $ticketingModifiers = null, ?array $associatedRemark = null, ?array $pocketItineraryRemark = null, ?\Travelport\UniversalRecord\StructType\AirExchangeBundleTotal $airExchangeBundleTotal = null, ?array $airExchangeBundle = null)
    {
        $this
            ->setOptionalServices($optionalServices)
            ->setSupplierLocator($supplierLocator)
            ->setThirdPartyInformation($thirdPartyInformation)
            ->setDocumentInfo($documentInfo)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setAirSegment($airSegment)
            ->setSvcSegment($svcSegment)
            ->setAirPricingInfo($airPricingInfo)
            ->setPayment($payment)
            ->setCreditCardAuth($creditCardAuth)
            ->setFareNote($fareNote)
            ->setFeeInfo($feeInfo)
            ->setTaxInfo($taxInfo)
            ->setTicketingModifiers($ticketingModifiers)
            ->setAssociatedRemark($associatedRemark)
            ->setPocketItineraryRemark($pocketItineraryRemark)
            ->setAirExchangeBundleTotal($airExchangeBundleTotal)
            ->setAirExchangeBundle($airExchangeBundle);
    }
    /**
     * Get OptionalServices value
     * @return \Travelport\UniversalRecord\StructType\OptionalServices|null
     */
    public function getOptionalServices(): ?\Travelport\UniversalRecord\StructType\OptionalServices
    {
        return $this->OptionalServices;
    }
    /**
     * Set OptionalServices value
     * @param \Travelport\UniversalRecord\StructType\OptionalServices $optionalServices
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
     */
    public function setOptionalServices(?\Travelport\UniversalRecord\StructType\OptionalServices $optionalServices = null): self
    {
        $this->OptionalServices = $optionalServices;
        
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
     * Set SupplierLocator value
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator[] $supplierLocator
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
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
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
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
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
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
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
     */
    public function addToThirdPartyInformation(\Travelport\UniversalRecord\StructType\ThirdPartyInformation $item): self
    {
        $this->ThirdPartyInformation[] = $item;
        
        return $this;
    }
    /**
     * Get DocumentInfo value
     * @return \Travelport\UniversalRecord\StructType\DocumentInfo|null
     */
    public function getDocumentInfo(): ?\Travelport\UniversalRecord\StructType\DocumentInfo
    {
        return $this->DocumentInfo;
    }
    /**
     * Set DocumentInfo value
     * @param \Travelport\UniversalRecord\StructType\DocumentInfo $documentInfo
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
     */
    public function setDocumentInfo(?\Travelport\UniversalRecord\StructType\DocumentInfo $documentInfo = null): self
    {
        $this->DocumentInfo = $documentInfo;
        
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
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
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
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
     */
    public function addToBookingTravelerRef(\Travelport\UniversalRecord\StructType\BookingTravelerRef $item): self
    {
        $this->BookingTravelerRef[] = $item;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfoRef value
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef[]
     */
    public function getProviderReservationInfoRef(): ?array
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef[] $providerReservationInfoRef
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
     */
    public function setProviderReservationInfoRef(?array $providerReservationInfoRef = null): self
    {
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Add item to ProviderReservationInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef $item
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
     */
    public function addToProviderReservationInfoRef(\Travelport\UniversalRecord\StructType\ProviderReservationInfoRef $item): self
    {
        $this->ProviderReservationInfoRef[] = $item;
        
        return $this;
    }
    /**
     * Get AirSegment value
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[]
     */
    public function getAirSegment(): ?array
    {
        return $this->AirSegment;
    }
    /**
     * Set AirSegment value
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment[] $airSegment
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
     */
    public function setAirSegment(?array $airSegment = null): self
    {
        $this->AirSegment = $airSegment;
        
        return $this;
    }
    /**
     * Add item to AirSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment $item
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
     */
    public function addToAirSegment(\Travelport\UniversalRecord\StructType\TypeBaseAirSegment $item): self
    {
        $this->AirSegment[] = $item;
        
        return $this;
    }
    /**
     * Get SvcSegment value
     * @return \Travelport\UniversalRecord\StructType\SvcSegment[]
     */
    public function getSvcSegment(): ?array
    {
        return $this->SvcSegment;
    }
    /**
     * Set SvcSegment value
     * @param \Travelport\UniversalRecord\StructType\SvcSegment[] $svcSegment
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
     */
    public function setSvcSegment(?array $svcSegment = null): self
    {
        $this->SvcSegment = $svcSegment;
        
        return $this;
    }
    /**
     * Add item to SvcSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SvcSegment $item
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
     */
    public function addToSvcSegment(\Travelport\UniversalRecord\StructType\SvcSegment $item): self
    {
        $this->SvcSegment[] = $item;
        
        return $this;
    }
    /**
     * Get AirPricingInfo value
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo[]
     */
    public function getAirPricingInfo(): ?array
    {
        return $this->AirPricingInfo;
    }
    /**
     * Set AirPricingInfo value
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfo[] $airPricingInfo
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
     */
    public function setAirPricingInfo(?array $airPricingInfo = null): self
    {
        $this->AirPricingInfo = $airPricingInfo;
        
        return $this;
    }
    /**
     * Add item to AirPricingInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfo $item
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
     */
    public function addToAirPricingInfo(\Travelport\UniversalRecord\StructType\AirPricingInfo $item): self
    {
        $this->AirPricingInfo[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
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
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
     */
    public function addToPayment(\Travelport\UniversalRecord\StructType\Payment $item): self
    {
        $this->Payment[] = $item;
        
        return $this;
    }
    /**
     * Get CreditCardAuth value
     * @return \Travelport\UniversalRecord\StructType\CreditCardAuth[]
     */
    public function getCreditCardAuth(): ?array
    {
        return $this->CreditCardAuth;
    }
    /**
     * Set CreditCardAuth value
     * @param \Travelport\UniversalRecord\StructType\CreditCardAuth[] $creditCardAuth
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
     */
    public function setCreditCardAuth(?array $creditCardAuth = null): self
    {
        $this->CreditCardAuth = $creditCardAuth;
        
        return $this;
    }
    /**
     * Add item to CreditCardAuth value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CreditCardAuth $item
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
     */
    public function addToCreditCardAuth(\Travelport\UniversalRecord\StructType\CreditCardAuth $item): self
    {
        $this->CreditCardAuth[] = $item;
        
        return $this;
    }
    /**
     * Get FareNote value
     * @return \Travelport\UniversalRecord\StructType\FareNote[]
     */
    public function getFareNote(): ?array
    {
        return $this->FareNote;
    }
    /**
     * Set FareNote value
     * @param \Travelport\UniversalRecord\StructType\FareNote[] $fareNote
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
     */
    public function setFareNote(?array $fareNote = null): self
    {
        $this->FareNote = $fareNote;
        
        return $this;
    }
    /**
     * Add item to FareNote value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareNote $item
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
     */
    public function addToFareNote(\Travelport\UniversalRecord\StructType\FareNote $item): self
    {
        $this->FareNote[] = $item;
        
        return $this;
    }
    /**
     * Get FeeInfo value
     * @return \Travelport\UniversalRecord\StructType\TypeFeeInfo[]
     */
    public function getFeeInfo(): ?array
    {
        return $this->FeeInfo;
    }
    /**
     * Set FeeInfo value
     * @param \Travelport\UniversalRecord\StructType\TypeFeeInfo[] $feeInfo
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
     */
    public function setFeeInfo(?array $feeInfo = null): self
    {
        $this->FeeInfo = $feeInfo;
        
        return $this;
    }
    /**
     * Add item to FeeInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeFeeInfo $item
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
     */
    public function addToFeeInfo(\Travelport\UniversalRecord\StructType\TypeFeeInfo $item): self
    {
        $this->FeeInfo[] = $item;
        
        return $this;
    }
    /**
     * Get TaxInfo value
     * @return \Travelport\UniversalRecord\StructType\TypeTaxInfoWithPaymentRef[]
     */
    public function getTaxInfo(): ?array
    {
        return $this->TaxInfo;
    }
    /**
     * Set TaxInfo value
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfoWithPaymentRef[] $taxInfo
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
     */
    public function setTaxInfo(?array $taxInfo = null): self
    {
        $this->TaxInfo = $taxInfo;
        
        return $this;
    }
    /**
     * Add item to TaxInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfoWithPaymentRef $item
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
     */
    public function addToTaxInfo(\Travelport\UniversalRecord\StructType\TypeTaxInfoWithPaymentRef $item): self
    {
        $this->TaxInfo[] = $item;
        
        return $this;
    }
    /**
     * Get TicketingModifiers value
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers[]
     */
    public function getTicketingModifiers(): ?array
    {
        return $this->TicketingModifiers;
    }
    /**
     * Set TicketingModifiers value
     * @param \Travelport\UniversalRecord\StructType\TicketingModifiers[] $ticketingModifiers
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
     */
    public function setTicketingModifiers(?array $ticketingModifiers = null): self
    {
        $this->TicketingModifiers = $ticketingModifiers;
        
        return $this;
    }
    /**
     * Add item to TicketingModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TicketingModifiers $item
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
     */
    public function addToTicketingModifiers(\Travelport\UniversalRecord\StructType\TicketingModifiers $item): self
    {
        $this->TicketingModifiers[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
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
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
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
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
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
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
     */
    public function addToPocketItineraryRemark(\Travelport\UniversalRecord\StructType\PocketItineraryRemark $item): self
    {
        $this->PocketItineraryRemark[] = $item;
        
        return $this;
    }
    /**
     * Get AirExchangeBundleTotal value
     * @return \Travelport\UniversalRecord\StructType\AirExchangeBundleTotal|null
     */
    public function getAirExchangeBundleTotal(): ?\Travelport\UniversalRecord\StructType\AirExchangeBundleTotal
    {
        return $this->AirExchangeBundleTotal;
    }
    /**
     * Set AirExchangeBundleTotal value
     * @param \Travelport\UniversalRecord\StructType\AirExchangeBundleTotal $airExchangeBundleTotal
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
     */
    public function setAirExchangeBundleTotal(?\Travelport\UniversalRecord\StructType\AirExchangeBundleTotal $airExchangeBundleTotal = null): self
    {
        $this->AirExchangeBundleTotal = $airExchangeBundleTotal;
        
        return $this;
    }
    /**
     * Get AirExchangeBundle value
     * @return \Travelport\UniversalRecord\StructType\AirExchangeBundle[]
     */
    public function getAirExchangeBundle(): ?array
    {
        return $this->AirExchangeBundle;
    }
    /**
     * Set AirExchangeBundle value
     * @param \Travelport\UniversalRecord\StructType\AirExchangeBundle[] $airExchangeBundle
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
     */
    public function setAirExchangeBundle(?array $airExchangeBundle = null): self
    {
        $this->AirExchangeBundle = $airExchangeBundle;
        
        return $this;
    }
    /**
     * Add item to AirExchangeBundle value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirExchangeBundle $item
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirReservation
     */
    public function addToAirExchangeBundle(\Travelport\UniversalRecord\StructType\AirExchangeBundle $item): self
    {
        $this->AirExchangeBundle[] = $item;
        
        return $this;
    }
}
