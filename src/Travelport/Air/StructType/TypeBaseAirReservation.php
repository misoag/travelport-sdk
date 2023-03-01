<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\OptionalServices|null
     */
    public ?\Travelport\Air\StructType\OptionalServices $OptionalServices = null;
    /**
     * The SupplierLocator
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:SupplierLocator
     * @var \Travelport\Air\StructType\SupplierLocator[]
     */
    public ?array $SupplierLocator = null;
    /**
     * The ThirdPartyInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:ThirdPartyInformation
     * @var \Travelport\Air\StructType\ThirdPartyInformation[]
     */
    public ?array $ThirdPartyInformation = null;
    /**
     * The DocumentInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: DocumentInfo
     * @var \Travelport\Air\StructType\DocumentInfo|null
     */
    public ?\Travelport\Air\StructType\DocumentInfo $DocumentInfo = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:BookingTravelerRef
     * @var \Travelport\Air\StructType\BookingTravelerRef[]
     */
    public ?array $BookingTravelerRef = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:ProviderReservationInfoRef
     * @var \Travelport\Air\StructType\ProviderReservationInfoRef[]
     */
    public ?array $ProviderReservationInfoRef = null;
    /**
     * The AirSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirSegment
     * @var \Travelport\Air\StructType\TypeBaseAirSegment[]
     */
    public ?array $AirSegment = null;
    /**
     * The SvcSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: SvcSegment
     * @var \Travelport\Air\StructType\SvcSegment[]
     */
    public ?array $SvcSegment = null;
    /**
     * The AirPricingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirPricingInfo
     * @var \Travelport\Air\StructType\AirPricingInfo[]
     */
    public ?array $AirPricingInfo = null;
    /**
     * The Payment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Payment
     * @var \Travelport\Air\StructType\Payment[]
     */
    public ?array $Payment = null;
    /**
     * The CreditCardAuth
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:CreditCardAuth
     * @var \Travelport\Air\StructType\CreditCardAuth[]
     */
    public ?array $CreditCardAuth = null;
    /**
     * The FareNote
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareNote
     * @var \Travelport\Air\StructType\FareNote[]
     */
    public ?array $FareNote = null;
    /**
     * The FeeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FeeInfo
     * @var \Travelport\Air\StructType\TypeFeeInfo[]
     */
    public ?array $FeeInfo = null;
    /**
     * The TaxInfo
     * Meta information extracted from the WSDL
     * - documentation: Itinerary level taxes
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeTaxInfoWithPaymentRef[]
     */
    public ?array $TaxInfo = null;
    /**
     * The TicketingModifiers
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TicketingModifiers
     * @var \Travelport\Air\StructType\TicketingModifiers[]
     */
    public ?array $TicketingModifiers = null;
    /**
     * The AssociatedRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AssociatedRemark
     * @var \Travelport\Air\StructType\AssociatedRemark[]
     */
    public ?array $AssociatedRemark = null;
    /**
     * The PocketItineraryRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: PocketItineraryRemark
     * @var \Travelport\Air\StructType\PocketItineraryRemark[]
     */
    public ?array $PocketItineraryRemark = null;
    /**
     * The AirExchangeBundleTotal
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: AirExchangeBundleTotal
     * @var \Travelport\Air\StructType\AirExchangeBundleTotal|null
     */
    public ?\Travelport\Air\StructType\AirExchangeBundleTotal $AirExchangeBundleTotal = null;
    /**
     * The AirExchangeBundle
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirExchangeBundle
     * @var \Travelport\Air\StructType\AirExchangeBundle[]
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
     * @param \Travelport\Air\StructType\OptionalServices $optionalServices
     * @param \Travelport\Air\StructType\SupplierLocator[] $supplierLocator
     * @param \Travelport\Air\StructType\ThirdPartyInformation[] $thirdPartyInformation
     * @param \Travelport\Air\StructType\DocumentInfo $documentInfo
     * @param \Travelport\Air\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @param \Travelport\Air\StructType\ProviderReservationInfoRef[] $providerReservationInfoRef
     * @param \Travelport\Air\StructType\TypeBaseAirSegment[] $airSegment
     * @param \Travelport\Air\StructType\SvcSegment[] $svcSegment
     * @param \Travelport\Air\StructType\AirPricingInfo[] $airPricingInfo
     * @param \Travelport\Air\StructType\Payment[] $payment
     * @param \Travelport\Air\StructType\CreditCardAuth[] $creditCardAuth
     * @param \Travelport\Air\StructType\FareNote[] $fareNote
     * @param \Travelport\Air\StructType\TypeFeeInfo[] $feeInfo
     * @param \Travelport\Air\StructType\TypeTaxInfoWithPaymentRef[] $taxInfo
     * @param \Travelport\Air\StructType\TicketingModifiers[] $ticketingModifiers
     * @param \Travelport\Air\StructType\AssociatedRemark[] $associatedRemark
     * @param \Travelport\Air\StructType\PocketItineraryRemark[] $pocketItineraryRemark
     * @param \Travelport\Air\StructType\AirExchangeBundleTotal $airExchangeBundleTotal
     * @param \Travelport\Air\StructType\AirExchangeBundle[] $airExchangeBundle
     */
    public function __construct(?\Travelport\Air\StructType\OptionalServices $optionalServices = null, ?array $supplierLocator = null, ?array $thirdPartyInformation = null, ?\Travelport\Air\StructType\DocumentInfo $documentInfo = null, ?array $bookingTravelerRef = null, ?array $providerReservationInfoRef = null, ?array $airSegment = null, ?array $svcSegment = null, ?array $airPricingInfo = null, ?array $payment = null, ?array $creditCardAuth = null, ?array $fareNote = null, ?array $feeInfo = null, ?array $taxInfo = null, ?array $ticketingModifiers = null, ?array $associatedRemark = null, ?array $pocketItineraryRemark = null, ?\Travelport\Air\StructType\AirExchangeBundleTotal $airExchangeBundleTotal = null, ?array $airExchangeBundle = null)
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
     * @return \Travelport\Air\StructType\OptionalServices|null
     */
    public function getOptionalServices(): ?\Travelport\Air\StructType\OptionalServices
    {
        return $this->OptionalServices;
    }
    /**
     * Set OptionalServices value
     * @param \Travelport\Air\StructType\OptionalServices $optionalServices
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function setOptionalServices(?\Travelport\Air\StructType\OptionalServices $optionalServices = null): self
    {
        $this->OptionalServices = $optionalServices;
        
        return $this;
    }
    /**
     * Get SupplierLocator value
     * @return \Travelport\Air\StructType\SupplierLocator[]
     */
    public function getSupplierLocator(): ?array
    {
        return $this->SupplierLocator;
    }
    /**
     * Set SupplierLocator value
     * @param \Travelport\Air\StructType\SupplierLocator[] $supplierLocator
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function setSupplierLocator(?array $supplierLocator = null): self
    {
        $this->SupplierLocator = $supplierLocator;
        
        return $this;
    }
    /**
     * Add item to SupplierLocator value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\SupplierLocator $item
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function addToSupplierLocator(\Travelport\Air\StructType\SupplierLocator $item): self
    {
        $this->SupplierLocator[] = $item;
        
        return $this;
    }
    /**
     * Get ThirdPartyInformation value
     * @return \Travelport\Air\StructType\ThirdPartyInformation[]
     */
    public function getThirdPartyInformation(): ?array
    {
        return $this->ThirdPartyInformation;
    }
    /**
     * Set ThirdPartyInformation value
     * @param \Travelport\Air\StructType\ThirdPartyInformation[] $thirdPartyInformation
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function setThirdPartyInformation(?array $thirdPartyInformation = null): self
    {
        $this->ThirdPartyInformation = $thirdPartyInformation;
        
        return $this;
    }
    /**
     * Add item to ThirdPartyInformation value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\ThirdPartyInformation $item
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function addToThirdPartyInformation(\Travelport\Air\StructType\ThirdPartyInformation $item): self
    {
        $this->ThirdPartyInformation[] = $item;
        
        return $this;
    }
    /**
     * Get DocumentInfo value
     * @return \Travelport\Air\StructType\DocumentInfo|null
     */
    public function getDocumentInfo(): ?\Travelport\Air\StructType\DocumentInfo
    {
        return $this->DocumentInfo;
    }
    /**
     * Set DocumentInfo value
     * @param \Travelport\Air\StructType\DocumentInfo $documentInfo
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function setDocumentInfo(?\Travelport\Air\StructType\DocumentInfo $documentInfo = null): self
    {
        $this->DocumentInfo = $documentInfo;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return \Travelport\Air\StructType\BookingTravelerRef[]
     */
    public function getBookingTravelerRef(): ?array
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param \Travelport\Air\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Add item to BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\BookingTravelerRef $item
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function addToBookingTravelerRef(\Travelport\Air\StructType\BookingTravelerRef $item): self
    {
        $this->BookingTravelerRef[] = $item;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfoRef value
     * @return \Travelport\Air\StructType\ProviderReservationInfoRef[]
     */
    public function getProviderReservationInfoRef(): ?array
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @param \Travelport\Air\StructType\ProviderReservationInfoRef[] $providerReservationInfoRef
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function setProviderReservationInfoRef(?array $providerReservationInfoRef = null): self
    {
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Add item to ProviderReservationInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\ProviderReservationInfoRef $item
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function addToProviderReservationInfoRef(\Travelport\Air\StructType\ProviderReservationInfoRef $item): self
    {
        $this->ProviderReservationInfoRef[] = $item;
        
        return $this;
    }
    /**
     * Get AirSegment value
     * @return \Travelport\Air\StructType\TypeBaseAirSegment[]
     */
    public function getAirSegment(): ?array
    {
        return $this->AirSegment;
    }
    /**
     * Set AirSegment value
     * @param \Travelport\Air\StructType\TypeBaseAirSegment[] $airSegment
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function setAirSegment(?array $airSegment = null): self
    {
        $this->AirSegment = $airSegment;
        
        return $this;
    }
    /**
     * Add item to AirSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TypeBaseAirSegment $item
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function addToAirSegment(\Travelport\Air\StructType\TypeBaseAirSegment $item): self
    {
        $this->AirSegment[] = $item;
        
        return $this;
    }
    /**
     * Get SvcSegment value
     * @return \Travelport\Air\StructType\SvcSegment[]
     */
    public function getSvcSegment(): ?array
    {
        return $this->SvcSegment;
    }
    /**
     * Set SvcSegment value
     * @param \Travelport\Air\StructType\SvcSegment[] $svcSegment
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function setSvcSegment(?array $svcSegment = null): self
    {
        $this->SvcSegment = $svcSegment;
        
        return $this;
    }
    /**
     * Add item to SvcSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\SvcSegment $item
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function addToSvcSegment(\Travelport\Air\StructType\SvcSegment $item): self
    {
        $this->SvcSegment[] = $item;
        
        return $this;
    }
    /**
     * Get AirPricingInfo value
     * @return \Travelport\Air\StructType\AirPricingInfo[]
     */
    public function getAirPricingInfo(): ?array
    {
        return $this->AirPricingInfo;
    }
    /**
     * Set AirPricingInfo value
     * @param \Travelport\Air\StructType\AirPricingInfo[] $airPricingInfo
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function setAirPricingInfo(?array $airPricingInfo = null): self
    {
        $this->AirPricingInfo = $airPricingInfo;
        
        return $this;
    }
    /**
     * Add item to AirPricingInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirPricingInfo $item
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function addToAirPricingInfo(\Travelport\Air\StructType\AirPricingInfo $item): self
    {
        $this->AirPricingInfo[] = $item;
        
        return $this;
    }
    /**
     * Get Payment value
     * @return \Travelport\Air\StructType\Payment[]
     */
    public function getPayment(): ?array
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @param \Travelport\Air\StructType\Payment[] $payment
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function setPayment(?array $payment = null): self
    {
        $this->Payment = $payment;
        
        return $this;
    }
    /**
     * Add item to Payment value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Payment $item
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function addToPayment(\Travelport\Air\StructType\Payment $item): self
    {
        $this->Payment[] = $item;
        
        return $this;
    }
    /**
     * Get CreditCardAuth value
     * @return \Travelport\Air\StructType\CreditCardAuth[]
     */
    public function getCreditCardAuth(): ?array
    {
        return $this->CreditCardAuth;
    }
    /**
     * Set CreditCardAuth value
     * @param \Travelport\Air\StructType\CreditCardAuth[] $creditCardAuth
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function setCreditCardAuth(?array $creditCardAuth = null): self
    {
        $this->CreditCardAuth = $creditCardAuth;
        
        return $this;
    }
    /**
     * Add item to CreditCardAuth value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\CreditCardAuth $item
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function addToCreditCardAuth(\Travelport\Air\StructType\CreditCardAuth $item): self
    {
        $this->CreditCardAuth[] = $item;
        
        return $this;
    }
    /**
     * Get FareNote value
     * @return \Travelport\Air\StructType\FareNote[]
     */
    public function getFareNote(): ?array
    {
        return $this->FareNote;
    }
    /**
     * Set FareNote value
     * @param \Travelport\Air\StructType\FareNote[] $fareNote
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function setFareNote(?array $fareNote = null): self
    {
        $this->FareNote = $fareNote;
        
        return $this;
    }
    /**
     * Add item to FareNote value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\FareNote $item
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function addToFareNote(\Travelport\Air\StructType\FareNote $item): self
    {
        $this->FareNote[] = $item;
        
        return $this;
    }
    /**
     * Get FeeInfo value
     * @return \Travelport\Air\StructType\TypeFeeInfo[]
     */
    public function getFeeInfo(): ?array
    {
        return $this->FeeInfo;
    }
    /**
     * Set FeeInfo value
     * @param \Travelport\Air\StructType\TypeFeeInfo[] $feeInfo
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function setFeeInfo(?array $feeInfo = null): self
    {
        $this->FeeInfo = $feeInfo;
        
        return $this;
    }
    /**
     * Add item to FeeInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TypeFeeInfo $item
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function addToFeeInfo(\Travelport\Air\StructType\TypeFeeInfo $item): self
    {
        $this->FeeInfo[] = $item;
        
        return $this;
    }
    /**
     * Get TaxInfo value
     * @return \Travelport\Air\StructType\TypeTaxInfoWithPaymentRef[]
     */
    public function getTaxInfo(): ?array
    {
        return $this->TaxInfo;
    }
    /**
     * Set TaxInfo value
     * @param \Travelport\Air\StructType\TypeTaxInfoWithPaymentRef[] $taxInfo
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function setTaxInfo(?array $taxInfo = null): self
    {
        $this->TaxInfo = $taxInfo;
        
        return $this;
    }
    /**
     * Add item to TaxInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TypeTaxInfoWithPaymentRef $item
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function addToTaxInfo(\Travelport\Air\StructType\TypeTaxInfoWithPaymentRef $item): self
    {
        $this->TaxInfo[] = $item;
        
        return $this;
    }
    /**
     * Get TicketingModifiers value
     * @return \Travelport\Air\StructType\TicketingModifiers[]
     */
    public function getTicketingModifiers(): ?array
    {
        return $this->TicketingModifiers;
    }
    /**
     * Set TicketingModifiers value
     * @param \Travelport\Air\StructType\TicketingModifiers[] $ticketingModifiers
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function setTicketingModifiers(?array $ticketingModifiers = null): self
    {
        $this->TicketingModifiers = $ticketingModifiers;
        
        return $this;
    }
    /**
     * Add item to TicketingModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TicketingModifiers $item
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function addToTicketingModifiers(\Travelport\Air\StructType\TicketingModifiers $item): self
    {
        $this->TicketingModifiers[] = $item;
        
        return $this;
    }
    /**
     * Get AssociatedRemark value
     * @return \Travelport\Air\StructType\AssociatedRemark[]
     */
    public function getAssociatedRemark(): ?array
    {
        return $this->AssociatedRemark;
    }
    /**
     * Set AssociatedRemark value
     * @param \Travelport\Air\StructType\AssociatedRemark[] $associatedRemark
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function setAssociatedRemark(?array $associatedRemark = null): self
    {
        $this->AssociatedRemark = $associatedRemark;
        
        return $this;
    }
    /**
     * Add item to AssociatedRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AssociatedRemark $item
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function addToAssociatedRemark(\Travelport\Air\StructType\AssociatedRemark $item): self
    {
        $this->AssociatedRemark[] = $item;
        
        return $this;
    }
    /**
     * Get PocketItineraryRemark value
     * @return \Travelport\Air\StructType\PocketItineraryRemark[]
     */
    public function getPocketItineraryRemark(): ?array
    {
        return $this->PocketItineraryRemark;
    }
    /**
     * Set PocketItineraryRemark value
     * @param \Travelport\Air\StructType\PocketItineraryRemark[] $pocketItineraryRemark
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function setPocketItineraryRemark(?array $pocketItineraryRemark = null): self
    {
        $this->PocketItineraryRemark = $pocketItineraryRemark;
        
        return $this;
    }
    /**
     * Add item to PocketItineraryRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\PocketItineraryRemark $item
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function addToPocketItineraryRemark(\Travelport\Air\StructType\PocketItineraryRemark $item): self
    {
        $this->PocketItineraryRemark[] = $item;
        
        return $this;
    }
    /**
     * Get AirExchangeBundleTotal value
     * @return \Travelport\Air\StructType\AirExchangeBundleTotal|null
     */
    public function getAirExchangeBundleTotal(): ?\Travelport\Air\StructType\AirExchangeBundleTotal
    {
        return $this->AirExchangeBundleTotal;
    }
    /**
     * Set AirExchangeBundleTotal value
     * @param \Travelport\Air\StructType\AirExchangeBundleTotal $airExchangeBundleTotal
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function setAirExchangeBundleTotal(?\Travelport\Air\StructType\AirExchangeBundleTotal $airExchangeBundleTotal = null): self
    {
        $this->AirExchangeBundleTotal = $airExchangeBundleTotal;
        
        return $this;
    }
    /**
     * Get AirExchangeBundle value
     * @return \Travelport\Air\StructType\AirExchangeBundle[]
     */
    public function getAirExchangeBundle(): ?array
    {
        return $this->AirExchangeBundle;
    }
    /**
     * Set AirExchangeBundle value
     * @param \Travelport\Air\StructType\AirExchangeBundle[] $airExchangeBundle
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function setAirExchangeBundle(?array $airExchangeBundle = null): self
    {
        $this->AirExchangeBundle = $airExchangeBundle;
        
        return $this;
    }
    /**
     * Add item to AirExchangeBundle value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirExchangeBundle $item
     * @return \Travelport\Air\StructType\TypeBaseAirReservation
     */
    public function addToAirExchangeBundle(\Travelport\Air\StructType\AirExchangeBundle $item): self
    {
        $this->AirExchangeBundle[] = $item;
        
        return $this;
    }
}
