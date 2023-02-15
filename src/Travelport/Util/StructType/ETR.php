<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ETR StructType
 * Meta information extracted from the WSDL
 * - documentation: Baggage Allowance Info after Ticketing | This is a container to display detail information of credit card auth. Providers supported: Worldspan and JAL. | Result of ticketing request
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
    protected string $IssuedDate;
    /**
     * The AirReservationLocatorCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AirReservationLocatorCode
     * @var \Travelport\Util\StructType\AirReservationLocatorCode|null
     */
    protected ?\Travelport\Util\StructType\AirReservationLocatorCode $AirReservationLocatorCode = null;
    /**
     * The AgencyInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:AgencyInfo
     * @var \Travelport\Util\StructType\AgencyInfo|null
     */
    protected ?\Travelport\Util\StructType\AgencyInfo $AgencyInfo = null;
    /**
     * The BookingTraveler
     * Meta information extracted from the WSDL
     * - ref: common:BookingTraveler
     * @var \Travelport\Util\StructType\BookingTraveler|null
     */
    protected ?\Travelport\Util\StructType\BookingTraveler $BookingTraveler = null;
    /**
     * The FormOfPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:FormOfPayment
     * @var \Travelport\Util\StructType\FormOfPayment[]
     */
    protected ?array $FormOfPayment = null;
    /**
     * The Payment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Payment
     * @var \Travelport\Util\StructType\Payment[]
     */
    protected ?array $Payment = null;
    /**
     * The CreditCardAuth
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:CreditCardAuth
     * @var \Travelport\Util\StructType\CreditCardAuth[]
     */
    protected ?array $CreditCardAuth = null;
    /**
     * The SupplierLocator
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:SupplierLocator
     * @var \Travelport\Util\StructType\SupplierLocator[]
     */
    protected ?array $SupplierLocator = null;
    /**
     * The FareCalc
     * Meta information extracted from the WSDL
     * - ref: FareCalc
     * @var string|null
     */
    protected ?string $FareCalc = null;
    /**
     * The Ticket
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: Ticket
     * @var \Travelport\Util\StructType\Ticket[]
     */
    protected ?array $Ticket = null;
    /**
     * The Commission
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Commission
     * @var \Travelport\Util\StructType\Commission[]
     */
    protected ?array $Commission = null;
    /**
     * The AirPricingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AirPricingInfo
     * @var \Travelport\Util\StructType\AirPricingInfo|null
     */
    protected ?\Travelport\Util\StructType\AirPricingInfo $AirPricingInfo = null;
    /**
     * The AuditData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: AuditData
     * @var \Travelport\Util\StructType\AuditData|null
     */
    protected ?\Travelport\Util\StructType\AuditData $AuditData = null;
    /**
     * The Restriction
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Restriction
     * @var \Travelport\Util\StructType\Restriction[]
     */
    protected ?array $Restriction = null;
    /**
     * The WaiverCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: WaiverCode
     * @var \Travelport\Util\StructType\WaiverCode|null
     */
    protected ?\Travelport\Util\StructType\WaiverCode $WaiverCode = null;
    /**
     * The BaggageAllowances
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: BaggageAllowances
     * @var \Travelport\Util\StructType\BaggageAllowances|null
     */
    protected ?\Travelport\Util\StructType\BaggageAllowances $BaggageAllowances = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The Refundable
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Refundable = null;
    /**
     * The Exchangeable
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Exchangeable = null;
    /**
     * The TourCode
     * Meta information extracted from the WSDL
     * - documentation: Tour code value. Maximum 15 characters
     * - base: xs:string
     * - maxLength: 15
     * - use: optional
     * @var string|null
     */
    protected ?string $TourCode = null;
    /**
     * The BulkTicket
     * Meta information extracted from the WSDL
     * - documentation: Whether the ticket was issued as bulk.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $BulkTicket = null;
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
    protected ?string $ProviderCode = null;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Contains the Locator Code of the Provider Reservation that houses this ETR. | A Locator Code that uniquely identifies a Provider Reservation or searches for one.
     * - base: xs:string
     * - maxLength: 15
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderLocatorCode = null;
    /**
     * The IATANumber
     * Meta information extracted from the WSDL
     * - documentation: Contains the IATA Number of the agent initiating the request. | ARC/IATA code that represents a branch/agency.
     * - base: xs:string
     * - maxLength: 8
     * - use: optional
     * @var string|null
     */
    protected ?string $IATANumber = null;
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
    protected ?string $PseudoCityCode = null;
    /**
     * The CountryCode
     * Meta information extracted from the WSDL
     * - documentation: Contains Ticketed PCC’s Country code. | 2 Letter Country code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $CountryCode = null;
    /**
     * The PlatingCarrier
     * Meta information extracted from the WSDL
     * - documentation: Contains the Plating Carrier of this ETR. | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $PlatingCarrier = null;
    /**
     * The TotalPrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $TotalPrice = null;
    /**
     * The BasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $BasePrice = null;
    /**
     * The ApproximateTotalPrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $ApproximateTotalPrice = null;
    /**
     * The ApproximateBasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $ApproximateBasePrice = null;
    /**
     * The EquivalentBasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $EquivalentBasePrice = null;
    /**
     * The Taxes
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $Taxes = null;
    /**
     * The Fees
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $Fees = null;
    /**
     * The Services
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $Services = null;
    /**
     * The ApproximateTaxes
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $ApproximateTaxes = null;
    /**
     * The ApproximateFees
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $ApproximateFees = null;
    /**
     * The ElStat
     * @var string|null
     */
    protected ?string $ElStat = null;
    /**
     * The KeyOverride
     * @var bool|null
     */
    protected ?bool $KeyOverride = null;
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
     * @param \Travelport\Util\StructType\AirReservationLocatorCode $airReservationLocatorCode
     * @param \Travelport\Util\StructType\AgencyInfo $agencyInfo
     * @param \Travelport\Util\StructType\BookingTraveler $bookingTraveler
     * @param \Travelport\Util\StructType\FormOfPayment[] $formOfPayment
     * @param \Travelport\Util\StructType\Payment[] $payment
     * @param \Travelport\Util\StructType\CreditCardAuth[] $creditCardAuth
     * @param \Travelport\Util\StructType\SupplierLocator[] $supplierLocator
     * @param string $fareCalc
     * @param \Travelport\Util\StructType\Ticket[] $ticket
     * @param \Travelport\Util\StructType\Commission[] $commission
     * @param \Travelport\Util\StructType\AirPricingInfo $airPricingInfo
     * @param \Travelport\Util\StructType\AuditData $auditData
     * @param \Travelport\Util\StructType\Restriction[] $restriction
     * @param \Travelport\Util\StructType\WaiverCode $waiverCode
     * @param \Travelport\Util\StructType\BaggageAllowances $baggageAllowances
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
    public function __construct(string $issuedDate, ?\Travelport\Util\StructType\AirReservationLocatorCode $airReservationLocatorCode = null, ?\Travelport\Util\StructType\AgencyInfo $agencyInfo = null, ?\Travelport\Util\StructType\BookingTraveler $bookingTraveler = null, ?array $formOfPayment = null, ?array $payment = null, ?array $creditCardAuth = null, ?array $supplierLocator = null, ?string $fareCalc = null, ?array $ticket = null, ?array $commission = null, ?\Travelport\Util\StructType\AirPricingInfo $airPricingInfo = null, ?\Travelport\Util\StructType\AuditData $auditData = null, ?array $restriction = null, ?\Travelport\Util\StructType\WaiverCode $waiverCode = null, ?\Travelport\Util\StructType\BaggageAllowances $baggageAllowances = null, ?string $key = null, ?bool $refundable = null, ?bool $exchangeable = null, ?string $tourCode = null, ?bool $bulkTicket = null, ?string $providerCode = null, ?string $providerLocatorCode = null, ?string $iATANumber = null, ?string $pseudoCityCode = null, ?string $countryCode = null, ?string $platingCarrier = null, ?string $totalPrice = null, ?string $basePrice = null, ?string $approximateTotalPrice = null, ?string $approximateBasePrice = null, ?string $equivalentBasePrice = null, ?string $taxes = null, ?string $fees = null, ?string $services = null, ?string $approximateTaxes = null, ?string $approximateFees = null, ?string $elStat = null, ?bool $keyOverride = null)
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
     * @return \Travelport\Util\StructType\ETR
     */
    public function setIssuedDate(string $issuedDate): self
    {
        // validation for constraint: string
        if (!is_null($issuedDate) && !is_string($issuedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issuedDate, true), gettype($issuedDate)), __LINE__);
        }
        $this->IssuedDate = $issuedDate;
        
        return $this;
    }
    /**
     * Get AirReservationLocatorCode value
     * @return \Travelport\Util\StructType\AirReservationLocatorCode|null
     */
    public function getAirReservationLocatorCode(): ?\Travelport\Util\StructType\AirReservationLocatorCode
    {
        return $this->AirReservationLocatorCode;
    }
    /**
     * Set AirReservationLocatorCode value
     * @param \Travelport\Util\StructType\AirReservationLocatorCode $airReservationLocatorCode
     * @return \Travelport\Util\StructType\ETR
     */
    public function setAirReservationLocatorCode(?\Travelport\Util\StructType\AirReservationLocatorCode $airReservationLocatorCode = null): self
    {
        $this->AirReservationLocatorCode = $airReservationLocatorCode;
        
        return $this;
    }
    /**
     * Get AgencyInfo value
     * @return \Travelport\Util\StructType\AgencyInfo|null
     */
    public function getAgencyInfo(): ?\Travelport\Util\StructType\AgencyInfo
    {
        return $this->AgencyInfo;
    }
    /**
     * Set AgencyInfo value
     * @param \Travelport\Util\StructType\AgencyInfo $agencyInfo
     * @return \Travelport\Util\StructType\ETR
     */
    public function setAgencyInfo(?\Travelport\Util\StructType\AgencyInfo $agencyInfo = null): self
    {
        $this->AgencyInfo = $agencyInfo;
        
        return $this;
    }
    /**
     * Get BookingTraveler value
     * @return \Travelport\Util\StructType\BookingTraveler|null
     */
    public function getBookingTraveler(): ?\Travelport\Util\StructType\BookingTraveler
    {
        return $this->BookingTraveler;
    }
    /**
     * Set BookingTraveler value
     * @param \Travelport\Util\StructType\BookingTraveler $bookingTraveler
     * @return \Travelport\Util\StructType\ETR
     */
    public function setBookingTraveler(?\Travelport\Util\StructType\BookingTraveler $bookingTraveler = null): self
    {
        $this->BookingTraveler = $bookingTraveler;
        
        return $this;
    }
    /**
     * Get FormOfPayment value
     * @return \Travelport\Util\StructType\FormOfPayment[]
     */
    public function getFormOfPayment(): ?array
    {
        return $this->FormOfPayment;
    }
    /**
     * This method is responsible for validating the values passed to the setFormOfPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFormOfPayment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFormOfPaymentForArrayConstraintsFromSetFormOfPayment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $eTRFormOfPaymentItem) {
            // validation for constraint: itemType
            if (!$eTRFormOfPaymentItem instanceof \Travelport\Util\StructType\FormOfPayment) {
                $invalidValues[] = is_object($eTRFormOfPaymentItem) ? get_class($eTRFormOfPaymentItem) : sprintf('%s(%s)', gettype($eTRFormOfPaymentItem), var_export($eTRFormOfPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FormOfPayment property can only contain items of type \Travelport\Util\StructType\FormOfPayment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FormOfPayment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FormOfPayment[] $formOfPayment
     * @return \Travelport\Util\StructType\ETR
     */
    public function setFormOfPayment(?array $formOfPayment = null): self
    {
        // validation for constraint: array
        if ('' !== ($formOfPaymentArrayErrorMessage = self::validateFormOfPaymentForArrayConstraintsFromSetFormOfPayment($formOfPayment))) {
            throw new InvalidArgumentException($formOfPaymentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($formOfPayment) && count($formOfPayment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($formOfPayment)), __LINE__);
        }
        $this->FormOfPayment = $formOfPayment;
        
        return $this;
    }
    /**
     * Add item to FormOfPayment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FormOfPayment $item
     * @return \Travelport\Util\StructType\ETR
     */
    public function addToFormOfPayment(\Travelport\Util\StructType\FormOfPayment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\FormOfPayment) {
            throw new InvalidArgumentException(sprintf('The FormOfPayment property can only contain items of type \Travelport\Util\StructType\FormOfPayment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FormOfPayment) && count($this->FormOfPayment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FormOfPayment)), __LINE__);
        }
        $this->FormOfPayment[] = $item;
        
        return $this;
    }
    /**
     * Get Payment value
     * @return \Travelport\Util\StructType\Payment[]
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
        foreach ($values as $eTRPaymentItem) {
            // validation for constraint: itemType
            if (!$eTRPaymentItem instanceof \Travelport\Util\StructType\Payment) {
                $invalidValues[] = is_object($eTRPaymentItem) ? get_class($eTRPaymentItem) : sprintf('%s(%s)', gettype($eTRPaymentItem), var_export($eTRPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Payment property can only contain items of type \Travelport\Util\StructType\Payment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Payment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Payment[] $payment
     * @return \Travelport\Util\StructType\ETR
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
     * @param \Travelport\Util\StructType\Payment $item
     * @return \Travelport\Util\StructType\ETR
     */
    public function addToPayment(\Travelport\Util\StructType\Payment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Payment) {
            throw new InvalidArgumentException(sprintf('The Payment property can only contain items of type \Travelport\Util\StructType\Payment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Payment) && count($this->Payment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Payment)), __LINE__);
        }
        $this->Payment[] = $item;
        
        return $this;
    }
    /**
     * Get CreditCardAuth value
     * @return \Travelport\Util\StructType\CreditCardAuth[]
     */
    public function getCreditCardAuth(): ?array
    {
        return $this->CreditCardAuth;
    }
    /**
     * This method is responsible for validating the values passed to the setCreditCardAuth method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreditCardAuth method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCreditCardAuthForArrayConstraintsFromSetCreditCardAuth(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $eTRCreditCardAuthItem) {
            // validation for constraint: itemType
            if (!$eTRCreditCardAuthItem instanceof \Travelport\Util\StructType\CreditCardAuth) {
                $invalidValues[] = is_object($eTRCreditCardAuthItem) ? get_class($eTRCreditCardAuthItem) : sprintf('%s(%s)', gettype($eTRCreditCardAuthItem), var_export($eTRCreditCardAuthItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CreditCardAuth property can only contain items of type \Travelport\Util\StructType\CreditCardAuth, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CreditCardAuth value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\CreditCardAuth[] $creditCardAuth
     * @return \Travelport\Util\StructType\ETR
     */
    public function setCreditCardAuth(?array $creditCardAuth = null): self
    {
        // validation for constraint: array
        if ('' !== ($creditCardAuthArrayErrorMessage = self::validateCreditCardAuthForArrayConstraintsFromSetCreditCardAuth($creditCardAuth))) {
            throw new InvalidArgumentException($creditCardAuthArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($creditCardAuth) && count($creditCardAuth) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($creditCardAuth)), __LINE__);
        }
        $this->CreditCardAuth = $creditCardAuth;
        
        return $this;
    }
    /**
     * Add item to CreditCardAuth value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\CreditCardAuth $item
     * @return \Travelport\Util\StructType\ETR
     */
    public function addToCreditCardAuth(\Travelport\Util\StructType\CreditCardAuth $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\CreditCardAuth) {
            throw new InvalidArgumentException(sprintf('The CreditCardAuth property can only contain items of type \Travelport\Util\StructType\CreditCardAuth, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->CreditCardAuth) && count($this->CreditCardAuth) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->CreditCardAuth)), __LINE__);
        }
        $this->CreditCardAuth[] = $item;
        
        return $this;
    }
    /**
     * Get SupplierLocator value
     * @return \Travelport\Util\StructType\SupplierLocator[]
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
        foreach ($values as $eTRSupplierLocatorItem) {
            // validation for constraint: itemType
            if (!$eTRSupplierLocatorItem instanceof \Travelport\Util\StructType\SupplierLocator) {
                $invalidValues[] = is_object($eTRSupplierLocatorItem) ? get_class($eTRSupplierLocatorItem) : sprintf('%s(%s)', gettype($eTRSupplierLocatorItem), var_export($eTRSupplierLocatorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SupplierLocator property can only contain items of type \Travelport\Util\StructType\SupplierLocator, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SupplierLocator value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\SupplierLocator[] $supplierLocator
     * @return \Travelport\Util\StructType\ETR
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
     * @param \Travelport\Util\StructType\SupplierLocator $item
     * @return \Travelport\Util\StructType\ETR
     */
    public function addToSupplierLocator(\Travelport\Util\StructType\SupplierLocator $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\SupplierLocator) {
            throw new InvalidArgumentException(sprintf('The SupplierLocator property can only contain items of type \Travelport\Util\StructType\SupplierLocator, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SupplierLocator) && count($this->SupplierLocator) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SupplierLocator)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ETR
     */
    public function setFareCalc(?string $fareCalc = null): self
    {
        // validation for constraint: string
        if (!is_null($fareCalc) && !is_string($fareCalc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareCalc, true), gettype($fareCalc)), __LINE__);
        }
        $this->FareCalc = $fareCalc;
        
        return $this;
    }
    /**
     * Get Ticket value
     * @return \Travelport\Util\StructType\Ticket[]
     */
    public function getTicket(): ?array
    {
        return $this->Ticket;
    }
    /**
     * This method is responsible for validating the values passed to the setTicket method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTicket method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTicketForArrayConstraintsFromSetTicket(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $eTRTicketItem) {
            // validation for constraint: itemType
            if (!$eTRTicketItem instanceof \Travelport\Util\StructType\Ticket) {
                $invalidValues[] = is_object($eTRTicketItem) ? get_class($eTRTicketItem) : sprintf('%s(%s)', gettype($eTRTicketItem), var_export($eTRTicketItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Ticket property can only contain items of type \Travelport\Util\StructType\Ticket, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Ticket value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Ticket[] $ticket
     * @return \Travelport\Util\StructType\ETR
     */
    public function setTicket(?array $ticket = null): self
    {
        // validation for constraint: array
        if ('' !== ($ticketArrayErrorMessage = self::validateTicketForArrayConstraintsFromSetTicket($ticket))) {
            throw new InvalidArgumentException($ticketArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($ticket) && count($ticket) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($ticket)), __LINE__);
        }
        $this->Ticket = $ticket;
        
        return $this;
    }
    /**
     * Add item to Ticket value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Ticket $item
     * @return \Travelport\Util\StructType\ETR
     */
    public function addToTicket(\Travelport\Util\StructType\Ticket $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Ticket) {
            throw new InvalidArgumentException(sprintf('The Ticket property can only contain items of type \Travelport\Util\StructType\Ticket, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Ticket) && count($this->Ticket) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Ticket)), __LINE__);
        }
        $this->Ticket[] = $item;
        
        return $this;
    }
    /**
     * Get Commission value
     * @return \Travelport\Util\StructType\Commission[]
     */
    public function getCommission(): ?array
    {
        return $this->Commission;
    }
    /**
     * This method is responsible for validating the values passed to the setCommission method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommission method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommissionForArrayConstraintsFromSetCommission(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $eTRCommissionItem) {
            // validation for constraint: itemType
            if (!$eTRCommissionItem instanceof \Travelport\Util\StructType\Commission) {
                $invalidValues[] = is_object($eTRCommissionItem) ? get_class($eTRCommissionItem) : sprintf('%s(%s)', gettype($eTRCommissionItem), var_export($eTRCommissionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Commission property can only contain items of type \Travelport\Util\StructType\Commission, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Commission value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Commission[] $commission
     * @return \Travelport\Util\StructType\ETR
     */
    public function setCommission(?array $commission = null): self
    {
        // validation for constraint: array
        if ('' !== ($commissionArrayErrorMessage = self::validateCommissionForArrayConstraintsFromSetCommission($commission))) {
            throw new InvalidArgumentException($commissionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($commission) && count($commission) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($commission)), __LINE__);
        }
        $this->Commission = $commission;
        
        return $this;
    }
    /**
     * Add item to Commission value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Commission $item
     * @return \Travelport\Util\StructType\ETR
     */
    public function addToCommission(\Travelport\Util\StructType\Commission $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Commission) {
            throw new InvalidArgumentException(sprintf('The Commission property can only contain items of type \Travelport\Util\StructType\Commission, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Commission) && count($this->Commission) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Commission)), __LINE__);
        }
        $this->Commission[] = $item;
        
        return $this;
    }
    /**
     * Get AirPricingInfo value
     * @return \Travelport\Util\StructType\AirPricingInfo|null
     */
    public function getAirPricingInfo(): ?\Travelport\Util\StructType\AirPricingInfo
    {
        return $this->AirPricingInfo;
    }
    /**
     * Set AirPricingInfo value
     * @param \Travelport\Util\StructType\AirPricingInfo $airPricingInfo
     * @return \Travelport\Util\StructType\ETR
     */
    public function setAirPricingInfo(?\Travelport\Util\StructType\AirPricingInfo $airPricingInfo = null): self
    {
        $this->AirPricingInfo = $airPricingInfo;
        
        return $this;
    }
    /**
     * Get AuditData value
     * @return \Travelport\Util\StructType\AuditData|null
     */
    public function getAuditData(): ?\Travelport\Util\StructType\AuditData
    {
        return $this->AuditData;
    }
    /**
     * Set AuditData value
     * @param \Travelport\Util\StructType\AuditData $auditData
     * @return \Travelport\Util\StructType\ETR
     */
    public function setAuditData(?\Travelport\Util\StructType\AuditData $auditData = null): self
    {
        $this->AuditData = $auditData;
        
        return $this;
    }
    /**
     * Get Restriction value
     * @return \Travelport\Util\StructType\Restriction[]
     */
    public function getRestriction(): ?array
    {
        return $this->Restriction;
    }
    /**
     * This method is responsible for validating the values passed to the setRestriction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRestriction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRestrictionForArrayConstraintsFromSetRestriction(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $eTRRestrictionItem) {
            // validation for constraint: itemType
            if (!$eTRRestrictionItem instanceof \Travelport\Util\StructType\Restriction) {
                $invalidValues[] = is_object($eTRRestrictionItem) ? get_class($eTRRestrictionItem) : sprintf('%s(%s)', gettype($eTRRestrictionItem), var_export($eTRRestrictionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Restriction property can only contain items of type \Travelport\Util\StructType\Restriction, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Restriction value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Restriction[] $restriction
     * @return \Travelport\Util\StructType\ETR
     */
    public function setRestriction(?array $restriction = null): self
    {
        // validation for constraint: array
        if ('' !== ($restrictionArrayErrorMessage = self::validateRestrictionForArrayConstraintsFromSetRestriction($restriction))) {
            throw new InvalidArgumentException($restrictionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($restriction) && count($restriction) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($restriction)), __LINE__);
        }
        $this->Restriction = $restriction;
        
        return $this;
    }
    /**
     * Add item to Restriction value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Restriction $item
     * @return \Travelport\Util\StructType\ETR
     */
    public function addToRestriction(\Travelport\Util\StructType\Restriction $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Restriction) {
            throw new InvalidArgumentException(sprintf('The Restriction property can only contain items of type \Travelport\Util\StructType\Restriction, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Restriction) && count($this->Restriction) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Restriction)), __LINE__);
        }
        $this->Restriction[] = $item;
        
        return $this;
    }
    /**
     * Get WaiverCode value
     * @return \Travelport\Util\StructType\WaiverCode|null
     */
    public function getWaiverCode(): ?\Travelport\Util\StructType\WaiverCode
    {
        return $this->WaiverCode;
    }
    /**
     * Set WaiverCode value
     * @param \Travelport\Util\StructType\WaiverCode $waiverCode
     * @return \Travelport\Util\StructType\ETR
     */
    public function setWaiverCode(?\Travelport\Util\StructType\WaiverCode $waiverCode = null): self
    {
        $this->WaiverCode = $waiverCode;
        
        return $this;
    }
    /**
     * Get BaggageAllowances value
     * @return \Travelport\Util\StructType\BaggageAllowances|null
     */
    public function getBaggageAllowances(): ?\Travelport\Util\StructType\BaggageAllowances
    {
        return $this->BaggageAllowances;
    }
    /**
     * Set BaggageAllowances value
     * @param \Travelport\Util\StructType\BaggageAllowances $baggageAllowances
     * @return \Travelport\Util\StructType\ETR
     */
    public function setBaggageAllowances(?\Travelport\Util\StructType\BaggageAllowances $baggageAllowances = null): self
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
     * @return \Travelport\Util\StructType\ETR
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ETR
     */
    public function setRefundable(?bool $refundable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($refundable) && !is_bool($refundable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($refundable, true), gettype($refundable)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ETR
     */
    public function setExchangeable(?bool $exchangeable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($exchangeable) && !is_bool($exchangeable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exchangeable, true), gettype($exchangeable)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ETR
     */
    public function setTourCode(?string $tourCode = null): self
    {
        // validation for constraint: string
        if (!is_null($tourCode) && !is_string($tourCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tourCode, true), gettype($tourCode)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($tourCode) && mb_strlen((string) $tourCode) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen((string) $tourCode)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ETR
     */
    public function setBulkTicket(?bool $bulkTicket = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bulkTicket) && !is_bool($bulkTicket)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bulkTicket, true), gettype($bulkTicket)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ETR
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        // validation for constraint: string
        if (!is_null($providerCode) && !is_string($providerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerCode, true), gettype($providerCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $providerCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $providerCode)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ETR
     */
    public function setProviderLocatorCode(?string $providerLocatorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($providerLocatorCode) && !is_string($providerLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerLocatorCode, true), gettype($providerLocatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($providerLocatorCode) && mb_strlen((string) $providerLocatorCode) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen((string) $providerLocatorCode)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ETR
     */
    public function setIATANumber(?string $iATANumber = null): self
    {
        // validation for constraint: string
        if (!is_null($iATANumber) && !is_string($iATANumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iATANumber, true), gettype($iATANumber)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($iATANumber) && mb_strlen((string) $iATANumber) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $iATANumber)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ETR
     */
    public function setPseudoCityCode(?string $pseudoCityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($pseudoCityCode) && !is_string($pseudoCityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pseudoCityCode, true), gettype($pseudoCityCode)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($pseudoCityCode) && mb_strlen((string) $pseudoCityCode) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $pseudoCityCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($pseudoCityCode) && mb_strlen((string) $pseudoCityCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $pseudoCityCode)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ETR
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($countryCode) && mb_strlen((string) $countryCode) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $countryCode)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ETR
     */
    public function setPlatingCarrier(?string $platingCarrier = null): self
    {
        // validation for constraint: string
        if (!is_null($platingCarrier) && !is_string($platingCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($platingCarrier, true), gettype($platingCarrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($platingCarrier) && mb_strlen((string) $platingCarrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $platingCarrier)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ETR
     */
    public function setTotalPrice(?string $totalPrice = null): self
    {
        // validation for constraint: string
        if (!is_null($totalPrice) && !is_string($totalPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ETR
     */
    public function setBasePrice(?string $basePrice = null): self
    {
        // validation for constraint: string
        if (!is_null($basePrice) && !is_string($basePrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($basePrice, true), gettype($basePrice)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ETR
     */
    public function setApproximateTotalPrice(?string $approximateTotalPrice = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateTotalPrice) && !is_string($approximateTotalPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateTotalPrice, true), gettype($approximateTotalPrice)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ETR
     */
    public function setApproximateBasePrice(?string $approximateBasePrice = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateBasePrice) && !is_string($approximateBasePrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateBasePrice, true), gettype($approximateBasePrice)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ETR
     */
    public function setEquivalentBasePrice(?string $equivalentBasePrice = null): self
    {
        // validation for constraint: string
        if (!is_null($equivalentBasePrice) && !is_string($equivalentBasePrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($equivalentBasePrice, true), gettype($equivalentBasePrice)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ETR
     */
    public function setTaxes(?string $taxes = null): self
    {
        // validation for constraint: string
        if (!is_null($taxes) && !is_string($taxes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxes, true), gettype($taxes)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ETR
     */
    public function setFees(?string $fees = null): self
    {
        // validation for constraint: string
        if (!is_null($fees) && !is_string($fees)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fees, true), gettype($fees)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ETR
     */
    public function setServices(?string $services = null): self
    {
        // validation for constraint: string
        if (!is_null($services) && !is_string($services)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($services, true), gettype($services)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ETR
     */
    public function setApproximateTaxes(?string $approximateTaxes = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateTaxes) && !is_string($approximateTaxes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateTaxes, true), gettype($approximateTaxes)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ETR
     */
    public function setApproximateFees(?string $approximateFees = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateFees) && !is_string($approximateFees)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateFees, true), gettype($approximateFees)), __LINE__);
        }
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
     * @uses \Travelport\Util\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\Util\StructType\ETR
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \Travelport\Util\EnumType\TypeElementStatus::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ETR
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        // validation for constraint: boolean
        if (!is_null($keyOverride) && !is_bool($keyOverride)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keyOverride, true), gettype($keyOverride)), __LINE__);
        }
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
