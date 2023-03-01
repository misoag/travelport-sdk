<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ETR StructType
 * Meta information extracted from the WSDL
 * - documentation: Baggage Allowance Info after Ticketing | This is a container to display detail information of credit card auth. Providers supported: Worldspan. | Result of ticketing request
 * @subpackage Structs
 */
class ETR extends AbstractStructBase
{
    /**
     * The IssuedDate
     * Meta information extracted from the WSDL
     * - documentation: Ticket issue date.
     * - use: required
     * @var string
     */
    public string $IssuedDate;
    /**
     * The AirReservationLocatorCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AirReservationLocatorCode
     * @var \Travelport\UniversalRecord\StructType\AirReservationLocatorCode|null
     */
    public ?\Travelport\UniversalRecord\StructType\AirReservationLocatorCode $AirReservationLocatorCode = null;
    /**
     * The AgencyInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:AgencyInfo
     * @var \Travelport\UniversalRecord\StructType\AgencyInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\AgencyInfo $AgencyInfo = null;
    /**
     * The BookingTraveler
     * Meta information extracted from the WSDL
     * - ref: common:BookingTraveler
     * @var \Travelport\UniversalRecord\StructType\BookingTraveler|null
     */
    public ?\Travelport\UniversalRecord\StructType\BookingTraveler $BookingTraveler = null;
    /**
     * The FormOfPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:FormOfPayment
     * @var \Travelport\UniversalRecord\StructType\FormOfPayment[]
     */
    public ?array $FormOfPayment = null;
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
     * The SupplierLocator
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:SupplierLocator
     * @var \Travelport\UniversalRecord\StructType\SupplierLocator[]
     */
    public ?array $SupplierLocator = null;
    /**
     * The FareCalc
     * Meta information extracted from the WSDL
     * - ref: FareCalc
     * @var string|null
     */
    public ?string $FareCalc = null;
    /**
     * The Ticket
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: Ticket
     * @var \Travelport\UniversalRecord\StructType\Ticket[]
     */
    public ?array $Ticket = null;
    /**
     * The Commission
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Commission
     * @var \Travelport\UniversalRecord\StructType\Commission[]
     */
    public ?array $Commission = null;
    /**
     * The AirPricingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AirPricingInfo
     * @var \Travelport\UniversalRecord\StructType\AirPricingInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\AirPricingInfo $AirPricingInfo = null;
    /**
     * The AuditData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: AuditData
     * @var \Travelport\UniversalRecord\StructType\AuditData|null
     */
    public ?\Travelport\UniversalRecord\StructType\AuditData $AuditData = null;
    /**
     * The Restriction
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Restriction
     * @var \Travelport\UniversalRecord\StructType\Restriction[]
     */
    public ?array $Restriction = null;
    /**
     * The WaiverCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: WaiverCode
     * @var \Travelport\UniversalRecord\StructType\WaiverCode|null
     */
    public ?\Travelport\UniversalRecord\StructType\WaiverCode $WaiverCode = null;
    /**
     * The BaggageAllowances
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: BaggageAllowances
     * @var \Travelport\UniversalRecord\StructType\BaggageAllowances|null
     */
    public ?\Travelport\UniversalRecord\StructType\BaggageAllowances $BaggageAllowances = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The Refundable
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $Refundable = null;
    /**
     * The Exchangeable
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $Exchangeable = null;
    /**
     * The TourCode
     * Meta information extracted from the WSDL
     * - documentation: Tour code value. Maximum 15 characters
     * - base: xs:string
     * - maxLength: 15
     * - use: optional
     * @var string|null
     */
    public ?string $TourCode = null;
    /**
     * The BulkTicket
     * Meta information extracted from the WSDL
     * - documentation: Whether the ticket was issued as bulk.
     * - use: optional
     * @var bool|null
     */
    public ?bool $BulkTicket = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: Contains the Provider Code of the provider that houses this ETR. | 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderCode = null;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Contains the Locator Code of the Provider Reservation that houses this ETR. | A Locator Code that uniquely identifies a Provider Reservation or searches for one.
     * - base: xs:string
     * - maxLength: 15
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderLocatorCode = null;
    /**
     * The IATANumber
     * Meta information extracted from the WSDL
     * - documentation: Contains the IATA Number of the agent initiating the request. | ARC/IATA code that represents a branch/agency.
     * - base: xs:string
     * - maxLength: 8
     * - use: optional
     * @var string|null
     */
    public ?string $IATANumber = null;
    /**
     * The PseudoCityCode
     * Meta information extracted from the WSDL
     * - documentation: Contain Pseudo City, city/office number, branch ID, etc. | 2 to 10 Letter Pseudo City Code
     * - base: xs:string
     * - maxLength: 10
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    public ?string $PseudoCityCode = null;
    /**
     * The CountryCode
     * Meta information extracted from the WSDL
     * - documentation: Contains Ticketed PCC’s Country code. | 2 Letter Country code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $CountryCode = null;
    /**
     * The PlatingCarrier
     * Meta information extracted from the WSDL
     * - documentation: Contains the Plating Carrier of this ETR. | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $PlatingCarrier = null;
    /**
     * The TotalPrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $TotalPrice = null;
    /**
     * The BasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $BasePrice = null;
    /**
     * The ApproximateTotalPrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ApproximateTotalPrice = null;
    /**
     * The ApproximateBasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ApproximateBasePrice = null;
    /**
     * The EquivalentBasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $EquivalentBasePrice = null;
    /**
     * The Taxes
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $Taxes = null;
    /**
     * The Fees
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $Fees = null;
    /**
     * The Services
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $Services = null;
    /**
     * The ApproximateTaxes
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ApproximateTaxes = null;
    /**
     * The ApproximateFees
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ApproximateFees = null;
    /**
     * The ElStat
     * @var string|null
     */
    public ?string $ElStat = null;
    /**
     * The KeyOverride
     * @var bool|null
     */
    public ?bool $KeyOverride = null;
    /**
     * Constructor method for ETR
     * @uses ETR::setIssuedDate()
     * @uses ETR::setAirReservationLocatorCode()
     * @uses ETR::setAgencyInfo()
     * @uses ETR::setBookingTraveler()
     * @uses ETR::setFormOfPayment()
     * @uses ETR::setPayment()
     * @uses ETR::setCreditCardAuth()
     * @uses ETR::setSupplierLocator()
     * @uses ETR::setFareCalc()
     * @uses ETR::setTicket()
     * @uses ETR::setCommission()
     * @uses ETR::setAirPricingInfo()
     * @uses ETR::setAuditData()
     * @uses ETR::setRestriction()
     * @uses ETR::setWaiverCode()
     * @uses ETR::setBaggageAllowances()
     * @uses ETR::setKey()
     * @uses ETR::setRefundable()
     * @uses ETR::setExchangeable()
     * @uses ETR::setTourCode()
     * @uses ETR::setBulkTicket()
     * @uses ETR::setProviderCode()
     * @uses ETR::setProviderLocatorCode()
     * @uses ETR::setIATANumber()
     * @uses ETR::setPseudoCityCode()
     * @uses ETR::setCountryCode()
     * @uses ETR::setPlatingCarrier()
     * @uses ETR::setTotalPrice()
     * @uses ETR::setBasePrice()
     * @uses ETR::setApproximateTotalPrice()
     * @uses ETR::setApproximateBasePrice()
     * @uses ETR::setEquivalentBasePrice()
     * @uses ETR::setTaxes()
     * @uses ETR::setFees()
     * @uses ETR::setServices()
     * @uses ETR::setApproximateTaxes()
     * @uses ETR::setApproximateFees()
     * @uses ETR::setElStat()
     * @uses ETR::setKeyOverride()
     * @param string $issuedDate
     * @param \Travelport\UniversalRecord\StructType\AirReservationLocatorCode $airReservationLocatorCode
     * @param \Travelport\UniversalRecord\StructType\AgencyInfo $agencyInfo
     * @param \Travelport\UniversalRecord\StructType\BookingTraveler $bookingTraveler
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment[] $formOfPayment
     * @param \Travelport\UniversalRecord\StructType\Payment[] $payment
     * @param \Travelport\UniversalRecord\StructType\CreditCardAuth[] $creditCardAuth
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator[] $supplierLocator
     * @param string $fareCalc
     * @param \Travelport\UniversalRecord\StructType\Ticket[] $ticket
     * @param \Travelport\UniversalRecord\StructType\Commission[] $commission
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfo $airPricingInfo
     * @param \Travelport\UniversalRecord\StructType\AuditData $auditData
     * @param \Travelport\UniversalRecord\StructType\Restriction[] $restriction
     * @param \Travelport\UniversalRecord\StructType\WaiverCode $waiverCode
     * @param \Travelport\UniversalRecord\StructType\BaggageAllowances $baggageAllowances
     * @param string $key
     * @param bool $refundable
     * @param bool $exchangeable
     * @param string $tourCode
     * @param bool $bulkTicket
     * @param string $providerCode
     * @param string $providerLocatorCode
     * @param string $iATANumber
     * @param string $pseudoCityCode
     * @param string $countryCode
     * @param string $platingCarrier
     * @param string $totalPrice
     * @param string $basePrice
     * @param string $approximateTotalPrice
     * @param string $approximateBasePrice
     * @param string $equivalentBasePrice
     * @param string $taxes
     * @param string $fees
     * @param string $services
     * @param string $approximateTaxes
     * @param string $approximateFees
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $issuedDate, ?\Travelport\UniversalRecord\StructType\AirReservationLocatorCode $airReservationLocatorCode = null, ?\Travelport\UniversalRecord\StructType\AgencyInfo $agencyInfo = null, ?\Travelport\UniversalRecord\StructType\BookingTraveler $bookingTraveler = null, ?array $formOfPayment = null, ?array $payment = null, ?array $creditCardAuth = null, ?array $supplierLocator = null, ?string $fareCalc = null, ?array $ticket = null, ?array $commission = null, ?\Travelport\UniversalRecord\StructType\AirPricingInfo $airPricingInfo = null, ?\Travelport\UniversalRecord\StructType\AuditData $auditData = null, ?array $restriction = null, ?\Travelport\UniversalRecord\StructType\WaiverCode $waiverCode = null, ?\Travelport\UniversalRecord\StructType\BaggageAllowances $baggageAllowances = null, ?string $key = null, ?bool $refundable = null, ?bool $exchangeable = null, ?string $tourCode = null, ?bool $bulkTicket = null, ?string $providerCode = null, ?string $providerLocatorCode = null, ?string $iATANumber = null, ?string $pseudoCityCode = null, ?string $countryCode = null, ?string $platingCarrier = null, ?string $totalPrice = null, ?string $basePrice = null, ?string $approximateTotalPrice = null, ?string $approximateBasePrice = null, ?string $equivalentBasePrice = null, ?string $taxes = null, ?string $fees = null, ?string $services = null, ?string $approximateTaxes = null, ?string $approximateFees = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setIssuedDate($issuedDate)
            ->setAirReservationLocatorCode($airReservationLocatorCode)
            ->setAgencyInfo($agencyInfo)
            ->setBookingTraveler($bookingTraveler)
            ->setFormOfPayment($formOfPayment)
            ->setPayment($payment)
            ->setCreditCardAuth($creditCardAuth)
            ->setSupplierLocator($supplierLocator)
            ->setFareCalc($fareCalc)
            ->setTicket($ticket)
            ->setCommission($commission)
            ->setAirPricingInfo($airPricingInfo)
            ->setAuditData($auditData)
            ->setRestriction($restriction)
            ->setWaiverCode($waiverCode)
            ->setBaggageAllowances($baggageAllowances)
            ->setKey($key)
            ->setRefundable($refundable)
            ->setExchangeable($exchangeable)
            ->setTourCode($tourCode)
            ->setBulkTicket($bulkTicket)
            ->setProviderCode($providerCode)
            ->setProviderLocatorCode($providerLocatorCode)
            ->setIATANumber($iATANumber)
            ->setPseudoCityCode($pseudoCityCode)
            ->setCountryCode($countryCode)
            ->setPlatingCarrier($platingCarrier)
            ->setTotalPrice($totalPrice)
            ->setBasePrice($basePrice)
            ->setApproximateTotalPrice($approximateTotalPrice)
            ->setApproximateBasePrice($approximateBasePrice)
            ->setEquivalentBasePrice($equivalentBasePrice)
            ->setTaxes($taxes)
            ->setFees($fees)
            ->setServices($services)
            ->setApproximateTaxes($approximateTaxes)
            ->setApproximateFees($approximateFees)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get IssuedDate value
     * @return string
     */
    public function getIssuedDate(): string
    {
        return $this->IssuedDate;
    }
    /**
     * Set IssuedDate value
     * @param string $issuedDate
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setIssuedDate(string $issuedDate): self
    {
        $this->IssuedDate = $issuedDate;
        
        return $this;
    }
    /**
     * Get AirReservationLocatorCode value
     * @return \Travelport\UniversalRecord\StructType\AirReservationLocatorCode|null
     */
    public function getAirReservationLocatorCode(): ?\Travelport\UniversalRecord\StructType\AirReservationLocatorCode
    {
        return $this->AirReservationLocatorCode;
    }
    /**
     * Set AirReservationLocatorCode value
     * @param \Travelport\UniversalRecord\StructType\AirReservationLocatorCode $airReservationLocatorCode
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setAirReservationLocatorCode(?\Travelport\UniversalRecord\StructType\AirReservationLocatorCode $airReservationLocatorCode = null): self
    {
        $this->AirReservationLocatorCode = $airReservationLocatorCode;
        
        return $this;
    }
    /**
     * Get AgencyInfo value
     * @return \Travelport\UniversalRecord\StructType\AgencyInfo|null
     */
    public function getAgencyInfo(): ?\Travelport\UniversalRecord\StructType\AgencyInfo
    {
        return $this->AgencyInfo;
    }
    /**
     * Set AgencyInfo value
     * @param \Travelport\UniversalRecord\StructType\AgencyInfo $agencyInfo
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setAgencyInfo(?\Travelport\UniversalRecord\StructType\AgencyInfo $agencyInfo = null): self
    {
        $this->AgencyInfo = $agencyInfo;
        
        return $this;
    }
    /**
     * Get BookingTraveler value
     * @return \Travelport\UniversalRecord\StructType\BookingTraveler|null
     */
    public function getBookingTraveler(): ?\Travelport\UniversalRecord\StructType\BookingTraveler
    {
        return $this->BookingTraveler;
    }
    /**
     * Set BookingTraveler value
     * @param \Travelport\UniversalRecord\StructType\BookingTraveler $bookingTraveler
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setBookingTraveler(?\Travelport\UniversalRecord\StructType\BookingTraveler $bookingTraveler = null): self
    {
        $this->BookingTraveler = $bookingTraveler;
        
        return $this;
    }
    /**
     * Get FormOfPayment value
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment[]
     */
    public function getFormOfPayment(): ?array
    {
        return $this->FormOfPayment;
    }
    /**
     * Set FormOfPayment value
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment[] $formOfPayment
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setFormOfPayment(?array $formOfPayment = null): self
    {
        $this->FormOfPayment = $formOfPayment;
        
        return $this;
    }
    /**
     * Add item to FormOfPayment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment $item
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function addToFormOfPayment(\Travelport\UniversalRecord\StructType\FormOfPayment $item): self
    {
        $this->FormOfPayment[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\ETR
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
     * @return \Travelport\UniversalRecord\StructType\ETR
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
     * @return \Travelport\UniversalRecord\StructType\ETR
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
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function addToCreditCardAuth(\Travelport\UniversalRecord\StructType\CreditCardAuth $item): self
    {
        $this->CreditCardAuth[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\ETR
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
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function addToSupplierLocator(\Travelport\UniversalRecord\StructType\SupplierLocator $item): self
    {
        $this->SupplierLocator[] = $item;
        
        return $this;
    }
    /**
     * Get FareCalc value
     * @return string|null
     */
    public function getFareCalc(): ?string
    {
        return $this->FareCalc;
    }
    /**
     * Set FareCalc value
     * @param string $fareCalc
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setFareCalc(?string $fareCalc = null): self
    {
        $this->FareCalc = $fareCalc;
        
        return $this;
    }
    /**
     * Get Ticket value
     * @return \Travelport\UniversalRecord\StructType\Ticket[]
     */
    public function getTicket(): ?array
    {
        return $this->Ticket;
    }
    /**
     * Set Ticket value
     * @param \Travelport\UniversalRecord\StructType\Ticket[] $ticket
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setTicket(?array $ticket = null): self
    {
        $this->Ticket = $ticket;
        
        return $this;
    }
    /**
     * Add item to Ticket value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Ticket $item
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function addToTicket(\Travelport\UniversalRecord\StructType\Ticket $item): self
    {
        $this->Ticket[] = $item;
        
        return $this;
    }
    /**
     * Get Commission value
     * @return \Travelport\UniversalRecord\StructType\Commission[]
     */
    public function getCommission(): ?array
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param \Travelport\UniversalRecord\StructType\Commission[] $commission
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setCommission(?array $commission = null): self
    {
        $this->Commission = $commission;
        
        return $this;
    }
    /**
     * Add item to Commission value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Commission $item
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function addToCommission(\Travelport\UniversalRecord\StructType\Commission $item): self
    {
        $this->Commission[] = $item;
        
        return $this;
    }
    /**
     * Get AirPricingInfo value
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfo|null
     */
    public function getAirPricingInfo(): ?\Travelport\UniversalRecord\StructType\AirPricingInfo
    {
        return $this->AirPricingInfo;
    }
    /**
     * Set AirPricingInfo value
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfo $airPricingInfo
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setAirPricingInfo(?\Travelport\UniversalRecord\StructType\AirPricingInfo $airPricingInfo = null): self
    {
        $this->AirPricingInfo = $airPricingInfo;
        
        return $this;
    }
    /**
     * Get AuditData value
     * @return \Travelport\UniversalRecord\StructType\AuditData|null
     */
    public function getAuditData(): ?\Travelport\UniversalRecord\StructType\AuditData
    {
        return $this->AuditData;
    }
    /**
     * Set AuditData value
     * @param \Travelport\UniversalRecord\StructType\AuditData $auditData
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setAuditData(?\Travelport\UniversalRecord\StructType\AuditData $auditData = null): self
    {
        $this->AuditData = $auditData;
        
        return $this;
    }
    /**
     * Get Restriction value
     * @return \Travelport\UniversalRecord\StructType\Restriction[]
     */
    public function getRestriction(): ?array
    {
        return $this->Restriction;
    }
    /**
     * Set Restriction value
     * @param \Travelport\UniversalRecord\StructType\Restriction[] $restriction
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setRestriction(?array $restriction = null): self
    {
        $this->Restriction = $restriction;
        
        return $this;
    }
    /**
     * Add item to Restriction value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Restriction $item
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function addToRestriction(\Travelport\UniversalRecord\StructType\Restriction $item): self
    {
        $this->Restriction[] = $item;
        
        return $this;
    }
    /**
     * Get WaiverCode value
     * @return \Travelport\UniversalRecord\StructType\WaiverCode|null
     */
    public function getWaiverCode(): ?\Travelport\UniversalRecord\StructType\WaiverCode
    {
        return $this->WaiverCode;
    }
    /**
     * Set WaiverCode value
     * @param \Travelport\UniversalRecord\StructType\WaiverCode $waiverCode
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setWaiverCode(?\Travelport\UniversalRecord\StructType\WaiverCode $waiverCode = null): self
    {
        $this->WaiverCode = $waiverCode;
        
        return $this;
    }
    /**
     * Get BaggageAllowances value
     * @return \Travelport\UniversalRecord\StructType\BaggageAllowances|null
     */
    public function getBaggageAllowances(): ?\Travelport\UniversalRecord\StructType\BaggageAllowances
    {
        return $this->BaggageAllowances;
    }
    /**
     * Set BaggageAllowances value
     * @param \Travelport\UniversalRecord\StructType\BaggageAllowances $baggageAllowances
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setBaggageAllowances(?\Travelport\UniversalRecord\StructType\BaggageAllowances $baggageAllowances = null): self
    {
        $this->BaggageAllowances = $baggageAllowances;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get Refundable value
     * @return bool|null
     */
    public function getRefundable(): ?bool
    {
        return $this->Refundable;
    }
    /**
     * Set Refundable value
     * @param bool $refundable
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setRefundable(?bool $refundable = null): self
    {
        $this->Refundable = $refundable;
        
        return $this;
    }
    /**
     * Get Exchangeable value
     * @return bool|null
     */
    public function getExchangeable(): ?bool
    {
        return $this->Exchangeable;
    }
    /**
     * Set Exchangeable value
     * @param bool $exchangeable
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setExchangeable(?bool $exchangeable = null): self
    {
        $this->Exchangeable = $exchangeable;
        
        return $this;
    }
    /**
     * Get TourCode value
     * @return string|null
     */
    public function getTourCode(): ?string
    {
        return $this->TourCode;
    }
    /**
     * Set TourCode value
     * @param string $tourCode
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setTourCode(?string $tourCode = null): self
    {
        $this->TourCode = $tourCode;
        
        return $this;
    }
    /**
     * Get BulkTicket value
     * @return bool|null
     */
    public function getBulkTicket(): ?bool
    {
        return $this->BulkTicket;
    }
    /**
     * Set BulkTicket value
     * @param bool $bulkTicket
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setBulkTicket(?bool $bulkTicket = null): self
    {
        $this->BulkTicket = $bulkTicket;
        
        return $this;
    }
    /**
     * Get ProviderCode value
     * @return string|null
     */
    public function getProviderCode(): ?string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get ProviderLocatorCode value
     * @return string|null
     */
    public function getProviderLocatorCode(): ?string
    {
        return $this->ProviderLocatorCode;
    }
    /**
     * Set ProviderLocatorCode value
     * @param string $providerLocatorCode
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setProviderLocatorCode(?string $providerLocatorCode = null): self
    {
        $this->ProviderLocatorCode = $providerLocatorCode;
        
        return $this;
    }
    /**
     * Get IATANumber value
     * @return string|null
     */
    public function getIATANumber(): ?string
    {
        return $this->IATANumber;
    }
    /**
     * Set IATANumber value
     * @param string $iATANumber
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setIATANumber(?string $iATANumber = null): self
    {
        $this->IATANumber = $iATANumber;
        
        return $this;
    }
    /**
     * Get PseudoCityCode value
     * @return string|null
     */
    public function getPseudoCityCode(): ?string
    {
        return $this->PseudoCityCode;
    }
    /**
     * Set PseudoCityCode value
     * @param string $pseudoCityCode
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setPseudoCityCode(?string $pseudoCityCode = null): self
    {
        $this->PseudoCityCode = $pseudoCityCode;
        
        return $this;
    }
    /**
     * Get CountryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->CountryCode;
    }
    /**
     * Set CountryCode value
     * @param string $countryCode
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        $this->CountryCode = $countryCode;
        
        return $this;
    }
    /**
     * Get PlatingCarrier value
     * @return string|null
     */
    public function getPlatingCarrier(): ?string
    {
        return $this->PlatingCarrier;
    }
    /**
     * Set PlatingCarrier value
     * @param string $platingCarrier
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setPlatingCarrier(?string $platingCarrier = null): self
    {
        $this->PlatingCarrier = $platingCarrier;
        
        return $this;
    }
    /**
     * Get TotalPrice value
     * @return string|null
     */
    public function getTotalPrice(): ?string
    {
        return $this->TotalPrice;
    }
    /**
     * Set TotalPrice value
     * @param string $totalPrice
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setTotalPrice(?string $totalPrice = null): self
    {
        $this->TotalPrice = $totalPrice;
        
        return $this;
    }
    /**
     * Get BasePrice value
     * @return string|null
     */
    public function getBasePrice(): ?string
    {
        return $this->BasePrice;
    }
    /**
     * Set BasePrice value
     * @param string $basePrice
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setBasePrice(?string $basePrice = null): self
    {
        $this->BasePrice = $basePrice;
        
        return $this;
    }
    /**
     * Get ApproximateTotalPrice value
     * @return string|null
     */
    public function getApproximateTotalPrice(): ?string
    {
        return $this->ApproximateTotalPrice;
    }
    /**
     * Set ApproximateTotalPrice value
     * @param string $approximateTotalPrice
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setApproximateTotalPrice(?string $approximateTotalPrice = null): self
    {
        $this->ApproximateTotalPrice = $approximateTotalPrice;
        
        return $this;
    }
    /**
     * Get ApproximateBasePrice value
     * @return string|null
     */
    public function getApproximateBasePrice(): ?string
    {
        return $this->ApproximateBasePrice;
    }
    /**
     * Set ApproximateBasePrice value
     * @param string $approximateBasePrice
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setApproximateBasePrice(?string $approximateBasePrice = null): self
    {
        $this->ApproximateBasePrice = $approximateBasePrice;
        
        return $this;
    }
    /**
     * Get EquivalentBasePrice value
     * @return string|null
     */
    public function getEquivalentBasePrice(): ?string
    {
        return $this->EquivalentBasePrice;
    }
    /**
     * Set EquivalentBasePrice value
     * @param string $equivalentBasePrice
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setEquivalentBasePrice(?string $equivalentBasePrice = null): self
    {
        $this->EquivalentBasePrice = $equivalentBasePrice;
        
        return $this;
    }
    /**
     * Get Taxes value
     * @return string|null
     */
    public function getTaxes(): ?string
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param string $taxes
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setTaxes(?string $taxes = null): self
    {
        $this->Taxes = $taxes;
        
        return $this;
    }
    /**
     * Get Fees value
     * @return string|null
     */
    public function getFees(): ?string
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param string $fees
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setFees(?string $fees = null): self
    {
        $this->Fees = $fees;
        
        return $this;
    }
    /**
     * Get Services value
     * @return string|null
     */
    public function getServices(): ?string
    {
        return $this->Services;
    }
    /**
     * Set Services value
     * @param string $services
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setServices(?string $services = null): self
    {
        $this->Services = $services;
        
        return $this;
    }
    /**
     * Get ApproximateTaxes value
     * @return string|null
     */
    public function getApproximateTaxes(): ?string
    {
        return $this->ApproximateTaxes;
    }
    /**
     * Set ApproximateTaxes value
     * @param string $approximateTaxes
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setApproximateTaxes(?string $approximateTaxes = null): self
    {
        $this->ApproximateTaxes = $approximateTaxes;
        
        return $this;
    }
    /**
     * Get ApproximateFees value
     * @return string|null
     */
    public function getApproximateFees(): ?string
    {
        return $this->ApproximateFees;
    }
    /**
     * Set ApproximateFees value
     * @param string $approximateFees
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setApproximateFees(?string $approximateFees = null): self
    {
        $this->ApproximateFees = $approximateFees;
        
        return $this;
    }
    /**
     * Get ElStat value
     * @return string|null
     */
    public function getElStat(): ?string
    {
        return $this->ElStat;
    }
    /**
     * Set ElStat value
     * @param string $elStat
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setElStat(?string $elStat = null): self
    {
        $this->ElStat = $elStat;
        
        return $this;
    }
    /**
     * Get KeyOverride value
     * @return bool|null
     */
    public function getKeyOverride(): ?bool
    {
        return $this->KeyOverride;
    }
    /**
     * Set KeyOverride value
     * @param bool $keyOverride
     * @return \Travelport\UniversalRecord\StructType\ETR
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
