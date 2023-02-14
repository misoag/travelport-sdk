<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\Util\StructType\OptionalServices|null
     */
    protected ?\Travelport\Util\StructType\OptionalServices $OptionalServices = null;
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
     * The ThirdPartyInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:ThirdPartyInformation
     * @var \Travelport\Util\StructType\ThirdPartyInformation[]
     */
    protected ?array $ThirdPartyInformation = null;
    /**
     * The DocumentInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: DocumentInfo
     * @var \Travelport\Util\StructType\DocumentInfo|null
     */
    protected ?\Travelport\Util\StructType\DocumentInfo $DocumentInfo = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:BookingTravelerRef
     * @var \Travelport\Util\StructType\BookingTravelerRef[]
     */
    protected ?array $BookingTravelerRef = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:ProviderReservationInfoRef
     * @var \Travelport\Util\StructType\ProviderReservationInfoRef[]
     */
    protected ?array $ProviderReservationInfoRef = null;
    /**
     * The AirSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirSegment
     * @var \Travelport\Util\StructType\TypeBaseAirSegment[]
     */
    protected ?array $AirSegment = null;
    /**
     * The SvcSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: SvcSegment
     * @var \Travelport\Util\StructType\SvcSegment[]
     */
    protected ?array $SvcSegment = null;
    /**
     * The AirPricingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirPricingInfo
     * @var \Travelport\Util\StructType\AirPricingInfo[]
     */
    protected ?array $AirPricingInfo = null;
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
     * The FareNote
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareNote
     * @var \Travelport\Util\StructType\FareNote[]
     */
    protected ?array $FareNote = null;
    /**
     * The FeeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FeeInfo
     * @var \Travelport\Util\StructType\TypeFeeInfo[]
     */
    protected ?array $FeeInfo = null;
    /**
     * The TaxInfo
     * Meta information extracted from the WSDL
     * - documentation: Itinerary level taxes
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeTaxInfoWithPaymentRef[]
     */
    protected ?array $TaxInfo = null;
    /**
     * The TicketingModifiers
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TicketingModifiers
     * @var \Travelport\Util\StructType\TicketingModifiers[]
     */
    protected ?array $TicketingModifiers = null;
    /**
     * The AssociatedRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AssociatedRemark
     * @var \Travelport\Util\StructType\AssociatedRemark[]
     */
    protected ?array $AssociatedRemark = null;
    /**
     * The PocketItineraryRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: PocketItineraryRemark
     * @var \Travelport\Util\StructType\PocketItineraryRemark[]
     */
    protected ?array $PocketItineraryRemark = null;
    /**
     * The AirExchangeBundleTotal
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: AirExchangeBundleTotal
     * @var \Travelport\Util\StructType\AirExchangeBundleTotal|null
     */
    protected ?\Travelport\Util\StructType\AirExchangeBundleTotal $AirExchangeBundleTotal = null;
    /**
     * The AirExchangeBundle
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirExchangeBundle
     * @var \Travelport\Util\StructType\AirExchangeBundle[]
     */
    protected ?array $AirExchangeBundle = null;
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
     * @param \Travelport\Util\StructType\OptionalServices $optionalServices
     * @param \Travelport\Util\StructType\SupplierLocator[] $supplierLocator
     * @param \Travelport\Util\StructType\ThirdPartyInformation[] $thirdPartyInformation
     * @param \Travelport\Util\StructType\DocumentInfo $documentInfo
     * @param \Travelport\Util\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @param \Travelport\Util\StructType\ProviderReservationInfoRef[] $providerReservationInfoRef
     * @param \Travelport\Util\StructType\TypeBaseAirSegment[] $airSegment
     * @param \Travelport\Util\StructType\SvcSegment[] $svcSegment
     * @param \Travelport\Util\StructType\AirPricingInfo[] $airPricingInfo
     * @param \Travelport\Util\StructType\Payment[] $payment
     * @param \Travelport\Util\StructType\CreditCardAuth[] $creditCardAuth
     * @param \Travelport\Util\StructType\FareNote[] $fareNote
     * @param \Travelport\Util\StructType\TypeFeeInfo[] $feeInfo
     * @param \Travelport\Util\StructType\TypeTaxInfoWithPaymentRef[] $taxInfo
     * @param \Travelport\Util\StructType\TicketingModifiers[] $ticketingModifiers
     * @param \Travelport\Util\StructType\AssociatedRemark[] $associatedRemark
     * @param \Travelport\Util\StructType\PocketItineraryRemark[] $pocketItineraryRemark
     * @param \Travelport\Util\StructType\AirExchangeBundleTotal $airExchangeBundleTotal
     * @param \Travelport\Util\StructType\AirExchangeBundle[] $airExchangeBundle
     */
    public function __construct(?\Travelport\Util\StructType\OptionalServices $optionalServices = null, ?array $supplierLocator = null, ?array $thirdPartyInformation = null, ?\Travelport\Util\StructType\DocumentInfo $documentInfo = null, ?array $bookingTravelerRef = null, ?array $providerReservationInfoRef = null, ?array $airSegment = null, ?array $svcSegment = null, ?array $airPricingInfo = null, ?array $payment = null, ?array $creditCardAuth = null, ?array $fareNote = null, ?array $feeInfo = null, ?array $taxInfo = null, ?array $ticketingModifiers = null, ?array $associatedRemark = null, ?array $pocketItineraryRemark = null, ?\Travelport\Util\StructType\AirExchangeBundleTotal $airExchangeBundleTotal = null, ?array $airExchangeBundle = null)
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
     * @return \Travelport\Util\StructType\OptionalServices|null
     */
    public function getOptionalServices(): ?\Travelport\Util\StructType\OptionalServices
    {
        return $this->OptionalServices;
    }
    /**
     * Set OptionalServices value
     * @param \Travelport\Util\StructType\OptionalServices $optionalServices
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
     */
    public function setOptionalServices(?\Travelport\Util\StructType\OptionalServices $optionalServices = null): self
    {
        $this->OptionalServices = $optionalServices;
        
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
        foreach ($values as $typeBaseAirReservationSupplierLocatorItem) {
            // validation for constraint: itemType
            if (!$typeBaseAirReservationSupplierLocatorItem instanceof \Travelport\Util\StructType\SupplierLocator) {
                $invalidValues[] = is_object($typeBaseAirReservationSupplierLocatorItem) ? get_class($typeBaseAirReservationSupplierLocatorItem) : sprintf('%s(%s)', gettype($typeBaseAirReservationSupplierLocatorItem), var_export($typeBaseAirReservationSupplierLocatorItem, true));
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
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
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
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
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
     * Get ThirdPartyInformation value
     * @return \Travelport\Util\StructType\ThirdPartyInformation[]
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
        foreach ($values as $typeBaseAirReservationThirdPartyInformationItem) {
            // validation for constraint: itemType
            if (!$typeBaseAirReservationThirdPartyInformationItem instanceof \Travelport\Util\StructType\ThirdPartyInformation) {
                $invalidValues[] = is_object($typeBaseAirReservationThirdPartyInformationItem) ? get_class($typeBaseAirReservationThirdPartyInformationItem) : sprintf('%s(%s)', gettype($typeBaseAirReservationThirdPartyInformationItem), var_export($typeBaseAirReservationThirdPartyInformationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ThirdPartyInformation property can only contain items of type \Travelport\Util\StructType\ThirdPartyInformation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ThirdPartyInformation value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\ThirdPartyInformation[] $thirdPartyInformation
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
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
     * @param \Travelport\Util\StructType\ThirdPartyInformation $item
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
     */
    public function addToThirdPartyInformation(\Travelport\Util\StructType\ThirdPartyInformation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\ThirdPartyInformation) {
            throw new InvalidArgumentException(sprintf('The ThirdPartyInformation property can only contain items of type \Travelport\Util\StructType\ThirdPartyInformation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ThirdPartyInformation) && count($this->ThirdPartyInformation) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ThirdPartyInformation)), __LINE__);
        }
        $this->ThirdPartyInformation[] = $item;
        
        return $this;
    }
    /**
     * Get DocumentInfo value
     * @return \Travelport\Util\StructType\DocumentInfo|null
     */
    public function getDocumentInfo(): ?\Travelport\Util\StructType\DocumentInfo
    {
        return $this->DocumentInfo;
    }
    /**
     * Set DocumentInfo value
     * @param \Travelport\Util\StructType\DocumentInfo $documentInfo
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
     */
    public function setDocumentInfo(?\Travelport\Util\StructType\DocumentInfo $documentInfo = null): self
    {
        $this->DocumentInfo = $documentInfo;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return \Travelport\Util\StructType\BookingTravelerRef[]
     */
    public function getBookingTravelerRef(): ?array
    {
        return $this->BookingTravelerRef;
    }
    /**
     * This method is responsible for validating the values passed to the setBookingTravelerRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingTravelerRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingTravelerRefForArrayConstraintsFromSetBookingTravelerRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeBaseAirReservationBookingTravelerRefItem) {
            // validation for constraint: itemType
            if (!$typeBaseAirReservationBookingTravelerRefItem instanceof \Travelport\Util\StructType\BookingTravelerRef) {
                $invalidValues[] = is_object($typeBaseAirReservationBookingTravelerRefItem) ? get_class($typeBaseAirReservationBookingTravelerRefItem) : sprintf('%s(%s)', gettype($typeBaseAirReservationBookingTravelerRefItem), var_export($typeBaseAirReservationBookingTravelerRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingTravelerRef property can only contain items of type \Travelport\Util\StructType\BookingTravelerRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingTravelerRefArrayErrorMessage = self::validateBookingTravelerRefForArrayConstraintsFromSetBookingTravelerRef($bookingTravelerRef))) {
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
     * @param \Travelport\Util\StructType\BookingTravelerRef $item
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
     */
    public function addToBookingTravelerRef(\Travelport\Util\StructType\BookingTravelerRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\BookingTravelerRef) {
            throw new InvalidArgumentException(sprintf('The BookingTravelerRef property can only contain items of type \Travelport\Util\StructType\BookingTravelerRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \Travelport\Util\StructType\ProviderReservationInfoRef[]
     */
    public function getProviderReservationInfoRef(): ?array
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * This method is responsible for validating the values passed to the setProviderReservationInfoRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProviderReservationInfoRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProviderReservationInfoRefForArrayConstraintsFromSetProviderReservationInfoRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeBaseAirReservationProviderReservationInfoRefItem) {
            // validation for constraint: itemType
            if (!$typeBaseAirReservationProviderReservationInfoRefItem instanceof \Travelport\Util\StructType\ProviderReservationInfoRef) {
                $invalidValues[] = is_object($typeBaseAirReservationProviderReservationInfoRefItem) ? get_class($typeBaseAirReservationProviderReservationInfoRefItem) : sprintf('%s(%s)', gettype($typeBaseAirReservationProviderReservationInfoRefItem), var_export($typeBaseAirReservationProviderReservationInfoRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProviderReservationInfoRef property can only contain items of type \Travelport\Util\StructType\ProviderReservationInfoRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\ProviderReservationInfoRef[] $providerReservationInfoRef
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
     */
    public function setProviderReservationInfoRef(?array $providerReservationInfoRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($providerReservationInfoRefArrayErrorMessage = self::validateProviderReservationInfoRefForArrayConstraintsFromSetProviderReservationInfoRef($providerReservationInfoRef))) {
            throw new InvalidArgumentException($providerReservationInfoRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($providerReservationInfoRef) && count($providerReservationInfoRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($providerReservationInfoRef)), __LINE__);
        }
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Add item to ProviderReservationInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\ProviderReservationInfoRef $item
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
     */
    public function addToProviderReservationInfoRef(\Travelport\Util\StructType\ProviderReservationInfoRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\ProviderReservationInfoRef) {
            throw new InvalidArgumentException(sprintf('The ProviderReservationInfoRef property can only contain items of type \Travelport\Util\StructType\ProviderReservationInfoRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ProviderReservationInfoRef) && count($this->ProviderReservationInfoRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ProviderReservationInfoRef)), __LINE__);
        }
        $this->ProviderReservationInfoRef[] = $item;
        
        return $this;
    }
    /**
     * Get AirSegment value
     * @return \Travelport\Util\StructType\TypeBaseAirSegment[]
     */
    public function getAirSegment(): ?array
    {
        return $this->AirSegment;
    }
    /**
     * This method is responsible for validating the values passed to the setAirSegment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSegment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirSegmentForArrayConstraintsFromSetAirSegment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeBaseAirReservationAirSegmentItem) {
            // validation for constraint: itemType
            if (!$typeBaseAirReservationAirSegmentItem instanceof \Travelport\Util\StructType\TypeBaseAirSegment) {
                $invalidValues[] = is_object($typeBaseAirReservationAirSegmentItem) ? get_class($typeBaseAirReservationAirSegmentItem) : sprintf('%s(%s)', gettype($typeBaseAirReservationAirSegmentItem), var_export($typeBaseAirReservationAirSegmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirSegment property can only contain items of type \Travelport\Util\StructType\TypeBaseAirSegment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeBaseAirSegment[] $airSegment
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
     */
    public function setAirSegment(?array $airSegment = null): self
    {
        // validation for constraint: array
        if ('' !== ($airSegmentArrayErrorMessage = self::validateAirSegmentForArrayConstraintsFromSetAirSegment($airSegment))) {
            throw new InvalidArgumentException($airSegmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airSegment) && count($airSegment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airSegment)), __LINE__);
        }
        $this->AirSegment = $airSegment;
        
        return $this;
    }
    /**
     * Add item to AirSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeBaseAirSegment $item
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
     */
    public function addToAirSegment(\Travelport\Util\StructType\TypeBaseAirSegment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeBaseAirSegment) {
            throw new InvalidArgumentException(sprintf('The AirSegment property can only contain items of type \Travelport\Util\StructType\TypeBaseAirSegment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirSegment) && count($this->AirSegment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirSegment)), __LINE__);
        }
        $this->AirSegment[] = $item;
        
        return $this;
    }
    /**
     * Get SvcSegment value
     * @return \Travelport\Util\StructType\SvcSegment[]
     */
    public function getSvcSegment(): ?array
    {
        return $this->SvcSegment;
    }
    /**
     * This method is responsible for validating the values passed to the setSvcSegment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSvcSegment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSvcSegmentForArrayConstraintsFromSetSvcSegment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeBaseAirReservationSvcSegmentItem) {
            // validation for constraint: itemType
            if (!$typeBaseAirReservationSvcSegmentItem instanceof \Travelport\Util\StructType\SvcSegment) {
                $invalidValues[] = is_object($typeBaseAirReservationSvcSegmentItem) ? get_class($typeBaseAirReservationSvcSegmentItem) : sprintf('%s(%s)', gettype($typeBaseAirReservationSvcSegmentItem), var_export($typeBaseAirReservationSvcSegmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SvcSegment property can only contain items of type \Travelport\Util\StructType\SvcSegment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SvcSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\SvcSegment[] $svcSegment
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
     */
    public function setSvcSegment(?array $svcSegment = null): self
    {
        // validation for constraint: array
        if ('' !== ($svcSegmentArrayErrorMessage = self::validateSvcSegmentForArrayConstraintsFromSetSvcSegment($svcSegment))) {
            throw new InvalidArgumentException($svcSegmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($svcSegment) && count($svcSegment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($svcSegment)), __LINE__);
        }
        $this->SvcSegment = $svcSegment;
        
        return $this;
    }
    /**
     * Add item to SvcSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\SvcSegment $item
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
     */
    public function addToSvcSegment(\Travelport\Util\StructType\SvcSegment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\SvcSegment) {
            throw new InvalidArgumentException(sprintf('The SvcSegment property can only contain items of type \Travelport\Util\StructType\SvcSegment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SvcSegment) && count($this->SvcSegment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SvcSegment)), __LINE__);
        }
        $this->SvcSegment[] = $item;
        
        return $this;
    }
    /**
     * Get AirPricingInfo value
     * @return \Travelport\Util\StructType\AirPricingInfo[]
     */
    public function getAirPricingInfo(): ?array
    {
        return $this->AirPricingInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setAirPricingInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirPricingInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirPricingInfoForArrayConstraintsFromSetAirPricingInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeBaseAirReservationAirPricingInfoItem) {
            // validation for constraint: itemType
            if (!$typeBaseAirReservationAirPricingInfoItem instanceof \Travelport\Util\StructType\AirPricingInfo) {
                $invalidValues[] = is_object($typeBaseAirReservationAirPricingInfoItem) ? get_class($typeBaseAirReservationAirPricingInfoItem) : sprintf('%s(%s)', gettype($typeBaseAirReservationAirPricingInfoItem), var_export($typeBaseAirReservationAirPricingInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirPricingInfo property can only contain items of type \Travelport\Util\StructType\AirPricingInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirPricingInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirPricingInfo[] $airPricingInfo
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
     */
    public function setAirPricingInfo(?array $airPricingInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($airPricingInfoArrayErrorMessage = self::validateAirPricingInfoForArrayConstraintsFromSetAirPricingInfo($airPricingInfo))) {
            throw new InvalidArgumentException($airPricingInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airPricingInfo) && count($airPricingInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airPricingInfo)), __LINE__);
        }
        $this->AirPricingInfo = $airPricingInfo;
        
        return $this;
    }
    /**
     * Add item to AirPricingInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirPricingInfo $item
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
     */
    public function addToAirPricingInfo(\Travelport\Util\StructType\AirPricingInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AirPricingInfo) {
            throw new InvalidArgumentException(sprintf('The AirPricingInfo property can only contain items of type \Travelport\Util\StructType\AirPricingInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirPricingInfo) && count($this->AirPricingInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirPricingInfo)), __LINE__);
        }
        $this->AirPricingInfo[] = $item;
        
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
        foreach ($values as $typeBaseAirReservationPaymentItem) {
            // validation for constraint: itemType
            if (!$typeBaseAirReservationPaymentItem instanceof \Travelport\Util\StructType\Payment) {
                $invalidValues[] = is_object($typeBaseAirReservationPaymentItem) ? get_class($typeBaseAirReservationPaymentItem) : sprintf('%s(%s)', gettype($typeBaseAirReservationPaymentItem), var_export($typeBaseAirReservationPaymentItem, true));
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
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
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
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
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
        foreach ($values as $typeBaseAirReservationCreditCardAuthItem) {
            // validation for constraint: itemType
            if (!$typeBaseAirReservationCreditCardAuthItem instanceof \Travelport\Util\StructType\CreditCardAuth) {
                $invalidValues[] = is_object($typeBaseAirReservationCreditCardAuthItem) ? get_class($typeBaseAirReservationCreditCardAuthItem) : sprintf('%s(%s)', gettype($typeBaseAirReservationCreditCardAuthItem), var_export($typeBaseAirReservationCreditCardAuthItem, true));
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
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
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
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
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
     * Get FareNote value
     * @return \Travelport\Util\StructType\FareNote[]
     */
    public function getFareNote(): ?array
    {
        return $this->FareNote;
    }
    /**
     * This method is responsible for validating the values passed to the setFareNote method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareNote method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareNoteForArrayConstraintsFromSetFareNote(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeBaseAirReservationFareNoteItem) {
            // validation for constraint: itemType
            if (!$typeBaseAirReservationFareNoteItem instanceof \Travelport\Util\StructType\FareNote) {
                $invalidValues[] = is_object($typeBaseAirReservationFareNoteItem) ? get_class($typeBaseAirReservationFareNoteItem) : sprintf('%s(%s)', gettype($typeBaseAirReservationFareNoteItem), var_export($typeBaseAirReservationFareNoteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareNote property can only contain items of type \Travelport\Util\StructType\FareNote, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareNote value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareNote[] $fareNote
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
     */
    public function setFareNote(?array $fareNote = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareNoteArrayErrorMessage = self::validateFareNoteForArrayConstraintsFromSetFareNote($fareNote))) {
            throw new InvalidArgumentException($fareNoteArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($fareNote) && count($fareNote) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($fareNote)), __LINE__);
        }
        $this->FareNote = $fareNote;
        
        return $this;
    }
    /**
     * Add item to FareNote value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareNote $item
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
     */
    public function addToFareNote(\Travelport\Util\StructType\FareNote $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\FareNote) {
            throw new InvalidArgumentException(sprintf('The FareNote property can only contain items of type \Travelport\Util\StructType\FareNote, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FareNote) && count($this->FareNote) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FareNote)), __LINE__);
        }
        $this->FareNote[] = $item;
        
        return $this;
    }
    /**
     * Get FeeInfo value
     * @return \Travelport\Util\StructType\TypeFeeInfo[]
     */
    public function getFeeInfo(): ?array
    {
        return $this->FeeInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setFeeInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFeeInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeeInfoForArrayConstraintsFromSetFeeInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeBaseAirReservationFeeInfoItem) {
            // validation for constraint: itemType
            if (!$typeBaseAirReservationFeeInfoItem instanceof \Travelport\Util\StructType\TypeFeeInfo) {
                $invalidValues[] = is_object($typeBaseAirReservationFeeInfoItem) ? get_class($typeBaseAirReservationFeeInfoItem) : sprintf('%s(%s)', gettype($typeBaseAirReservationFeeInfoItem), var_export($typeBaseAirReservationFeeInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FeeInfo property can only contain items of type \Travelport\Util\StructType\TypeFeeInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FeeInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeFeeInfo[] $feeInfo
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
     */
    public function setFeeInfo(?array $feeInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($feeInfoArrayErrorMessage = self::validateFeeInfoForArrayConstraintsFromSetFeeInfo($feeInfo))) {
            throw new InvalidArgumentException($feeInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($feeInfo) && count($feeInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($feeInfo)), __LINE__);
        }
        $this->FeeInfo = $feeInfo;
        
        return $this;
    }
    /**
     * Add item to FeeInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeFeeInfo $item
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
     */
    public function addToFeeInfo(\Travelport\Util\StructType\TypeFeeInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeFeeInfo) {
            throw new InvalidArgumentException(sprintf('The FeeInfo property can only contain items of type \Travelport\Util\StructType\TypeFeeInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FeeInfo) && count($this->FeeInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FeeInfo)), __LINE__);
        }
        $this->FeeInfo[] = $item;
        
        return $this;
    }
    /**
     * Get TaxInfo value
     * @return \Travelport\Util\StructType\TypeTaxInfoWithPaymentRef[]
     */
    public function getTaxInfo(): ?array
    {
        return $this->TaxInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setTaxInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaxInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaxInfoForArrayConstraintsFromSetTaxInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeBaseAirReservationTaxInfoItem) {
            // validation for constraint: itemType
            if (!$typeBaseAirReservationTaxInfoItem instanceof \Travelport\Util\StructType\TypeTaxInfoWithPaymentRef) {
                $invalidValues[] = is_object($typeBaseAirReservationTaxInfoItem) ? get_class($typeBaseAirReservationTaxInfoItem) : sprintf('%s(%s)', gettype($typeBaseAirReservationTaxInfoItem), var_export($typeBaseAirReservationTaxInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaxInfo property can only contain items of type \Travelport\Util\StructType\TypeTaxInfoWithPaymentRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TaxInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeTaxInfoWithPaymentRef[] $taxInfo
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
     */
    public function setTaxInfo(?array $taxInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($taxInfoArrayErrorMessage = self::validateTaxInfoForArrayConstraintsFromSetTaxInfo($taxInfo))) {
            throw new InvalidArgumentException($taxInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($taxInfo) && count($taxInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($taxInfo)), __LINE__);
        }
        $this->TaxInfo = $taxInfo;
        
        return $this;
    }
    /**
     * Add item to TaxInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeTaxInfoWithPaymentRef $item
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
     */
    public function addToTaxInfo(\Travelport\Util\StructType\TypeTaxInfoWithPaymentRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeTaxInfoWithPaymentRef) {
            throw new InvalidArgumentException(sprintf('The TaxInfo property can only contain items of type \Travelport\Util\StructType\TypeTaxInfoWithPaymentRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TaxInfo) && count($this->TaxInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TaxInfo)), __LINE__);
        }
        $this->TaxInfo[] = $item;
        
        return $this;
    }
    /**
     * Get TicketingModifiers value
     * @return \Travelport\Util\StructType\TicketingModifiers[]
     */
    public function getTicketingModifiers(): ?array
    {
        return $this->TicketingModifiers;
    }
    /**
     * This method is responsible for validating the values passed to the setTicketingModifiers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTicketingModifiers method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTicketingModifiersForArrayConstraintsFromSetTicketingModifiers(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeBaseAirReservationTicketingModifiersItem) {
            // validation for constraint: itemType
            if (!$typeBaseAirReservationTicketingModifiersItem instanceof \Travelport\Util\StructType\TicketingModifiers) {
                $invalidValues[] = is_object($typeBaseAirReservationTicketingModifiersItem) ? get_class($typeBaseAirReservationTicketingModifiersItem) : sprintf('%s(%s)', gettype($typeBaseAirReservationTicketingModifiersItem), var_export($typeBaseAirReservationTicketingModifiersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TicketingModifiers property can only contain items of type \Travelport\Util\StructType\TicketingModifiers, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TicketingModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TicketingModifiers[] $ticketingModifiers
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
     */
    public function setTicketingModifiers(?array $ticketingModifiers = null): self
    {
        // validation for constraint: array
        if ('' !== ($ticketingModifiersArrayErrorMessage = self::validateTicketingModifiersForArrayConstraintsFromSetTicketingModifiers($ticketingModifiers))) {
            throw new InvalidArgumentException($ticketingModifiersArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($ticketingModifiers) && count($ticketingModifiers) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($ticketingModifiers)), __LINE__);
        }
        $this->TicketingModifiers = $ticketingModifiers;
        
        return $this;
    }
    /**
     * Add item to TicketingModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TicketingModifiers $item
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
     */
    public function addToTicketingModifiers(\Travelport\Util\StructType\TicketingModifiers $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TicketingModifiers) {
            throw new InvalidArgumentException(sprintf('The TicketingModifiers property can only contain items of type \Travelport\Util\StructType\TicketingModifiers, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TicketingModifiers) && count($this->TicketingModifiers) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TicketingModifiers)), __LINE__);
        }
        $this->TicketingModifiers[] = $item;
        
        return $this;
    }
    /**
     * Get AssociatedRemark value
     * @return \Travelport\Util\StructType\AssociatedRemark[]
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
        foreach ($values as $typeBaseAirReservationAssociatedRemarkItem) {
            // validation for constraint: itemType
            if (!$typeBaseAirReservationAssociatedRemarkItem instanceof \Travelport\Util\StructType\AssociatedRemark) {
                $invalidValues[] = is_object($typeBaseAirReservationAssociatedRemarkItem) ? get_class($typeBaseAirReservationAssociatedRemarkItem) : sprintf('%s(%s)', gettype($typeBaseAirReservationAssociatedRemarkItem), var_export($typeBaseAirReservationAssociatedRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AssociatedRemark property can only contain items of type \Travelport\Util\StructType\AssociatedRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AssociatedRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AssociatedRemark[] $associatedRemark
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
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
     * @param \Travelport\Util\StructType\AssociatedRemark $item
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
     */
    public function addToAssociatedRemark(\Travelport\Util\StructType\AssociatedRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AssociatedRemark) {
            throw new InvalidArgumentException(sprintf('The AssociatedRemark property can only contain items of type \Travelport\Util\StructType\AssociatedRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \Travelport\Util\StructType\PocketItineraryRemark[]
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
        foreach ($values as $typeBaseAirReservationPocketItineraryRemarkItem) {
            // validation for constraint: itemType
            if (!$typeBaseAirReservationPocketItineraryRemarkItem instanceof \Travelport\Util\StructType\PocketItineraryRemark) {
                $invalidValues[] = is_object($typeBaseAirReservationPocketItineraryRemarkItem) ? get_class($typeBaseAirReservationPocketItineraryRemarkItem) : sprintf('%s(%s)', gettype($typeBaseAirReservationPocketItineraryRemarkItem), var_export($typeBaseAirReservationPocketItineraryRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PocketItineraryRemark property can only contain items of type \Travelport\Util\StructType\PocketItineraryRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PocketItineraryRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\PocketItineraryRemark[] $pocketItineraryRemark
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
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
     * @param \Travelport\Util\StructType\PocketItineraryRemark $item
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
     */
    public function addToPocketItineraryRemark(\Travelport\Util\StructType\PocketItineraryRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\PocketItineraryRemark) {
            throw new InvalidArgumentException(sprintf('The PocketItineraryRemark property can only contain items of type \Travelport\Util\StructType\PocketItineraryRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PocketItineraryRemark) && count($this->PocketItineraryRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PocketItineraryRemark)), __LINE__);
        }
        $this->PocketItineraryRemark[] = $item;
        
        return $this;
    }
    /**
     * Get AirExchangeBundleTotal value
     * @return \Travelport\Util\StructType\AirExchangeBundleTotal|null
     */
    public function getAirExchangeBundleTotal(): ?\Travelport\Util\StructType\AirExchangeBundleTotal
    {
        return $this->AirExchangeBundleTotal;
    }
    /**
     * Set AirExchangeBundleTotal value
     * @param \Travelport\Util\StructType\AirExchangeBundleTotal $airExchangeBundleTotal
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
     */
    public function setAirExchangeBundleTotal(?\Travelport\Util\StructType\AirExchangeBundleTotal $airExchangeBundleTotal = null): self
    {
        $this->AirExchangeBundleTotal = $airExchangeBundleTotal;
        
        return $this;
    }
    /**
     * Get AirExchangeBundle value
     * @return \Travelport\Util\StructType\AirExchangeBundle[]
     */
    public function getAirExchangeBundle(): ?array
    {
        return $this->AirExchangeBundle;
    }
    /**
     * This method is responsible for validating the values passed to the setAirExchangeBundle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirExchangeBundle method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirExchangeBundleForArrayConstraintsFromSetAirExchangeBundle(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeBaseAirReservationAirExchangeBundleItem) {
            // validation for constraint: itemType
            if (!$typeBaseAirReservationAirExchangeBundleItem instanceof \Travelport\Util\StructType\AirExchangeBundle) {
                $invalidValues[] = is_object($typeBaseAirReservationAirExchangeBundleItem) ? get_class($typeBaseAirReservationAirExchangeBundleItem) : sprintf('%s(%s)', gettype($typeBaseAirReservationAirExchangeBundleItem), var_export($typeBaseAirReservationAirExchangeBundleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirExchangeBundle property can only contain items of type \Travelport\Util\StructType\AirExchangeBundle, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirExchangeBundle value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirExchangeBundle[] $airExchangeBundle
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
     */
    public function setAirExchangeBundle(?array $airExchangeBundle = null): self
    {
        // validation for constraint: array
        if ('' !== ($airExchangeBundleArrayErrorMessage = self::validateAirExchangeBundleForArrayConstraintsFromSetAirExchangeBundle($airExchangeBundle))) {
            throw new InvalidArgumentException($airExchangeBundleArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airExchangeBundle) && count($airExchangeBundle) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airExchangeBundle)), __LINE__);
        }
        $this->AirExchangeBundle = $airExchangeBundle;
        
        return $this;
    }
    /**
     * Add item to AirExchangeBundle value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirExchangeBundle $item
     * @return \Travelport\Util\StructType\TypeBaseAirReservation
     */
    public function addToAirExchangeBundle(\Travelport\Util\StructType\AirExchangeBundle $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AirExchangeBundle) {
            throw new InvalidArgumentException(sprintf('The AirExchangeBundle property can only contain items of type \Travelport\Util\StructType\AirExchangeBundle, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirExchangeBundle) && count($this->AirExchangeBundle) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirExchangeBundle)), __LINE__);
        }
        $this->AirExchangeBundle[] = $item;
        
        return $this;
    }
}