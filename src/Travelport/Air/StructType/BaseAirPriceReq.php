<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseAirPriceReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Special Service Request for GST tax details. Provider: ACH | Provider: 1G,1V,1P,ACH. | Provider: ACH. | Provider: ACH,1P | Provider: 1G,1V,1P,ACH-Maxinumber of passenger increased in to 18 to support 9 INF passenger along with 9
 * ADT,CHD,INS passenger
 * @subpackage Structs
 */
class BaseAirPriceReq extends BaseCoreReq
{
    /**
     * The AirItinerary
     * Meta information extracted from the WSDL
     * - ref: AirItinerary
     * @var \Travelport\Air\StructType\AirItinerary|null
     */
    public ?\Travelport\Air\StructType\AirItinerary $AirItinerary = null;
    /**
     * The AirPricingModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AirPricingModifiers
     * @var \Travelport\Air\StructType\AirPricingModifiers|null
     */
    public ?\Travelport\Air\StructType\AirPricingModifiers $AirPricingModifiers = null;
    /**
     * The SearchPassenger
     * Meta information extracted from the WSDL
     * - maxOccurs: 18
     * - ref: common:SearchPassenger
     * @var \Travelport\Air\StructType\SearchPassenger[]
     */
    public ?array $SearchPassenger = null;
    /**
     * The AirPricingCommand
     * Meta information extracted from the WSDL
     * - maxOccurs: 16
     * - ref: AirPricingCommand
     * @var \Travelport\Air\StructType\AirPricingCommand[]
     */
    public ?array $AirPricingCommand = null;
    /**
     * The AirReservationLocatorCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AirReservationLocatorCode
     * @var \Travelport\Air\StructType\AirReservationLocatorCode|null
     */
    public ?\Travelport\Air\StructType\AirReservationLocatorCode $AirReservationLocatorCode = null;
    /**
     * The OptionalServices
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: OptionalServices
     * @var \Travelport\Air\StructType\OptionalServices|null
     */
    public ?\Travelport\Air\StructType\OptionalServices $OptionalServices = null;
    /**
     * The FormOfPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:FormOfPayment
     * @var \Travelport\Air\StructType\FormOfPayment[]
     */
    public ?array $FormOfPayment = null;
    /**
     * The PCC
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PCC
     * @var \Travelport\Air\StructType\PCC|null
     */
    public ?\Travelport\Air\StructType\PCC $PCC = null;
    /**
     * The SSR
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: common:SSR
     * @var \Travelport\Air\StructType\SSR[]
     */
    public ?array $SSR = null;
    /**
     * The CheckOBFees
     * Meta information extracted from the WSDL
     * - documentation: A flag to return fees for ticketing and for various forms of payment. The default is “TicketingOnly” and will return only ticketing fees. The value “All” will return ticketing fees and the applicable form of payment fees for
     * the form of payment information specified in the request. “FOPOnly” will return the applicable form of payment fees for the form of payment information specified in the request. Form of payment fees are never included in the total unless specific
     * card details are in the request.Provider notes:ACH - CheckOBFees is valid only for LowFareSearch. The valid values are “All”, “TicketingOnly” and “None” and the default value is “None”. 1P -The valid values are “All”, “None”
     * and “TicketingOnly”.1G – All four values are supported.1V/RCH – CheckOBFees are not supported.”
     * - use: optional
     * @var string|null
     */
    public ?string $CheckOBFees = null;
    /**
     * The FareRuleType
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G,1V,1P,ACH.
     * - default: none
     * - use: optional
     * @var string|null
     */
    public ?string $FareRuleType = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: Specifies the supplier/ vendor for vendor specific price requests | 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * @var string|null
     */
    public ?string $SupplierCode = null;
    /**
     * The TicketDate
     * Meta information extracted from the WSDL
     * - documentation: YYYY-MM-DD Using a date in the past is a request for an historical fare
     * - use: optional
     * @var string|null
     */
    public ?string $TicketDate = null;
    /**
     * The CheckFlightDetails
     * Meta information extracted from the WSDL
     * - documentation: To Include FlightDetails in Response set to “true” the Default value is “false”.
     * - default: false
     * @var bool|null
     */
    public ?bool $CheckFlightDetails = null;
    /**
     * The ReturnMM
     * Meta information extracted from the WSDL
     * - documentation: If this attribute is set to “true”, Fare Control Manager processing will be invoked.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ReturnMM = null;
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
     * The SplitPricing
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the AirSegments should be priced together or separately. Set ‘true’ for split pricing. Set ‘false’ for pricing together.SplitPricing is not supported with post book re-pricing.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $SplitPricing = null;
    /**
     * The MostRestrictivePenalties
     * Meta information extracted from the WSDL
     * - documentation: Boolean flag used to request the MostRestrictivePenalties in the response
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $MostRestrictivePenalties = null;
    /**
     * The FareRuleValidation
     * Meta information extracted from the WSDL
     * - documentation: A boolean flag used to request host to return the lowest fare which matches the specified fare basis code and passes rule validation
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $FareRuleValidation = null;
    /**
     * The PricingPreference
     * Meta information extracted from the WSDL
     * - documentation: An attribute to return the Lowest Price/Ignore availability for a booked itinerary with the valid preferences "PriceIgnoreAvailability" and "PriceWithAvailability"
     * - use: optional
     * @var string|null
     */
    public ?string $PricingPreference = null;
    /**
     * Constructor method for BaseAirPriceReq
     * @uses BaseAirPriceReq::setAirItinerary()
     * @uses BaseAirPriceReq::setAirPricingModifiers()
     * @uses BaseAirPriceReq::setSearchPassenger()
     * @uses BaseAirPriceReq::setAirPricingCommand()
     * @uses BaseAirPriceReq::setAirReservationLocatorCode()
     * @uses BaseAirPriceReq::setOptionalServices()
     * @uses BaseAirPriceReq::setFormOfPayment()
     * @uses BaseAirPriceReq::setPCC()
     * @uses BaseAirPriceReq::setSSR()
     * @uses BaseAirPriceReq::setCheckOBFees()
     * @uses BaseAirPriceReq::setFareRuleType()
     * @uses BaseAirPriceReq::setSupplierCode()
     * @uses BaseAirPriceReq::setTicketDate()
     * @uses BaseAirPriceReq::setCheckFlightDetails()
     * @uses BaseAirPriceReq::setReturnMM()
     * @uses BaseAirPriceReq::setNSCC()
     * @uses BaseAirPriceReq::setSplitPricing()
     * @uses BaseAirPriceReq::setMostRestrictivePenalties()
     * @uses BaseAirPriceReq::setFareRuleValidation()
     * @uses BaseAirPriceReq::setPricingPreference()
     * @param \Travelport\Air\StructType\AirItinerary $airItinerary
     * @param \Travelport\Air\StructType\AirPricingModifiers $airPricingModifiers
     * @param \Travelport\Air\StructType\SearchPassenger[] $searchPassenger
     * @param \Travelport\Air\StructType\AirPricingCommand[] $airPricingCommand
     * @param \Travelport\Air\StructType\AirReservationLocatorCode $airReservationLocatorCode
     * @param \Travelport\Air\StructType\OptionalServices $optionalServices
     * @param \Travelport\Air\StructType\FormOfPayment[] $formOfPayment
     * @param \Travelport\Air\StructType\PCC $pCC
     * @param \Travelport\Air\StructType\SSR[] $sSR
     * @param string $checkOBFees
     * @param string $fareRuleType
     * @param string $supplierCode
     * @param string $ticketDate
     * @param bool $checkFlightDetails
     * @param bool $returnMM
     * @param string $nSCC
     * @param bool $splitPricing
     * @param bool $mostRestrictivePenalties
     * @param bool $fareRuleValidation
     * @param string $pricingPreference
     */
    public function __construct(?\Travelport\Air\StructType\AirItinerary $airItinerary = null, ?\Travelport\Air\StructType\AirPricingModifiers $airPricingModifiers = null, ?array $searchPassenger = null, ?array $airPricingCommand = null, ?\Travelport\Air\StructType\AirReservationLocatorCode $airReservationLocatorCode = null, ?\Travelport\Air\StructType\OptionalServices $optionalServices = null, ?array $formOfPayment = null, ?\Travelport\Air\StructType\PCC $pCC = null, ?array $sSR = null, ?string $checkOBFees = null, ?string $fareRuleType = null, ?string $supplierCode = null, ?string $ticketDate = null, ?bool $checkFlightDetails = false, ?bool $returnMM = false, ?string $nSCC = null, ?bool $splitPricing = false, ?bool $mostRestrictivePenalties = false, ?bool $fareRuleValidation = false, ?string $pricingPreference = null)
    {
        $this
            ->setAirItinerary($airItinerary)
            ->setAirPricingModifiers($airPricingModifiers)
            ->setSearchPassenger($searchPassenger)
            ->setAirPricingCommand($airPricingCommand)
            ->setAirReservationLocatorCode($airReservationLocatorCode)
            ->setOptionalServices($optionalServices)
            ->setFormOfPayment($formOfPayment)
            ->setPCC($pCC)
            ->setSSR($sSR)
            ->setCheckOBFees($checkOBFees)
            ->setFareRuleType($fareRuleType)
            ->setSupplierCode($supplierCode)
            ->setTicketDate($ticketDate)
            ->setCheckFlightDetails($checkFlightDetails)
            ->setReturnMM($returnMM)
            ->setNSCC($nSCC)
            ->setSplitPricing($splitPricing)
            ->setMostRestrictivePenalties($mostRestrictivePenalties)
            ->setFareRuleValidation($fareRuleValidation)
            ->setPricingPreference($pricingPreference);
    }
    /**
     * Get AirItinerary value
     * @return \Travelport\Air\StructType\AirItinerary|null
     */
    public function getAirItinerary(): ?\Travelport\Air\StructType\AirItinerary
    {
        return $this->AirItinerary;
    }
    /**
     * Set AirItinerary value
     * @param \Travelport\Air\StructType\AirItinerary $airItinerary
     * @return \Travelport\Air\StructType\BaseAirPriceReq
     */
    public function setAirItinerary(?\Travelport\Air\StructType\AirItinerary $airItinerary = null): self
    {
        $this->AirItinerary = $airItinerary;
        
        return $this;
    }
    /**
     * Get AirPricingModifiers value
     * @return \Travelport\Air\StructType\AirPricingModifiers|null
     */
    public function getAirPricingModifiers(): ?\Travelport\Air\StructType\AirPricingModifiers
    {
        return $this->AirPricingModifiers;
    }
    /**
     * Set AirPricingModifiers value
     * @param \Travelport\Air\StructType\AirPricingModifiers $airPricingModifiers
     * @return \Travelport\Air\StructType\BaseAirPriceReq
     */
    public function setAirPricingModifiers(?\Travelport\Air\StructType\AirPricingModifiers $airPricingModifiers = null): self
    {
        $this->AirPricingModifiers = $airPricingModifiers;
        
        return $this;
    }
    /**
     * Get SearchPassenger value
     * @return \Travelport\Air\StructType\SearchPassenger[]
     */
    public function getSearchPassenger(): ?array
    {
        return $this->SearchPassenger;
    }
    /**
     * Set SearchPassenger value
     * @param \Travelport\Air\StructType\SearchPassenger[] $searchPassenger
     * @return \Travelport\Air\StructType\BaseAirPriceReq
     */
    public function setSearchPassenger(?array $searchPassenger = null): self
    {
        $this->SearchPassenger = $searchPassenger;
        
        return $this;
    }
    /**
     * Add item to SearchPassenger value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\SearchPassenger $item
     * @return \Travelport\Air\StructType\BaseAirPriceReq
     */
    public function addToSearchPassenger(\Travelport\Air\StructType\SearchPassenger $item): self
    {
        $this->SearchPassenger[] = $item;
        
        return $this;
    }
    /**
     * Get AirPricingCommand value
     * @return \Travelport\Air\StructType\AirPricingCommand[]
     */
    public function getAirPricingCommand(): ?array
    {
        return $this->AirPricingCommand;
    }
    /**
     * Set AirPricingCommand value
     * @param \Travelport\Air\StructType\AirPricingCommand[] $airPricingCommand
     * @return \Travelport\Air\StructType\BaseAirPriceReq
     */
    public function setAirPricingCommand(?array $airPricingCommand = null): self
    {
        $this->AirPricingCommand = $airPricingCommand;
        
        return $this;
    }
    /**
     * Add item to AirPricingCommand value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirPricingCommand $item
     * @return \Travelport\Air\StructType\BaseAirPriceReq
     */
    public function addToAirPricingCommand(\Travelport\Air\StructType\AirPricingCommand $item): self
    {
        $this->AirPricingCommand[] = $item;
        
        return $this;
    }
    /**
     * Get AirReservationLocatorCode value
     * @return \Travelport\Air\StructType\AirReservationLocatorCode|null
     */
    public function getAirReservationLocatorCode(): ?\Travelport\Air\StructType\AirReservationLocatorCode
    {
        return $this->AirReservationLocatorCode;
    }
    /**
     * Set AirReservationLocatorCode value
     * @param \Travelport\Air\StructType\AirReservationLocatorCode $airReservationLocatorCode
     * @return \Travelport\Air\StructType\BaseAirPriceReq
     */
    public function setAirReservationLocatorCode(?\Travelport\Air\StructType\AirReservationLocatorCode $airReservationLocatorCode = null): self
    {
        $this->AirReservationLocatorCode = $airReservationLocatorCode;
        
        return $this;
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
     * @return \Travelport\Air\StructType\BaseAirPriceReq
     */
    public function setOptionalServices(?\Travelport\Air\StructType\OptionalServices $optionalServices = null): self
    {
        $this->OptionalServices = $optionalServices;
        
        return $this;
    }
    /**
     * Get FormOfPayment value
     * @return \Travelport\Air\StructType\FormOfPayment[]
     */
    public function getFormOfPayment(): ?array
    {
        return $this->FormOfPayment;
    }
    /**
     * Set FormOfPayment value
     * @param \Travelport\Air\StructType\FormOfPayment[] $formOfPayment
     * @return \Travelport\Air\StructType\BaseAirPriceReq
     */
    public function setFormOfPayment(?array $formOfPayment = null): self
    {
        $this->FormOfPayment = $formOfPayment;
        
        return $this;
    }
    /**
     * Add item to FormOfPayment value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\FormOfPayment $item
     * @return \Travelport\Air\StructType\BaseAirPriceReq
     */
    public function addToFormOfPayment(\Travelport\Air\StructType\FormOfPayment $item): self
    {
        $this->FormOfPayment[] = $item;
        
        return $this;
    }
    /**
     * Get PCC value
     * @return \Travelport\Air\StructType\PCC|null
     */
    public function getPCC(): ?\Travelport\Air\StructType\PCC
    {
        return $this->PCC;
    }
    /**
     * Set PCC value
     * @param \Travelport\Air\StructType\PCC $pCC
     * @return \Travelport\Air\StructType\BaseAirPriceReq
     */
    public function setPCC(?\Travelport\Air\StructType\PCC $pCC = null): self
    {
        $this->PCC = $pCC;
        
        return $this;
    }
    /**
     * Get SSR value
     * @return \Travelport\Air\StructType\SSR[]
     */
    public function getSSR(): ?array
    {
        return $this->SSR;
    }
    /**
     * Set SSR value
     * @param \Travelport\Air\StructType\SSR[] $sSR
     * @return \Travelport\Air\StructType\BaseAirPriceReq
     */
    public function setSSR(?array $sSR = null): self
    {
        $this->SSR = $sSR;
        
        return $this;
    }
    /**
     * Add item to SSR value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\SSR $item
     * @return \Travelport\Air\StructType\BaseAirPriceReq
     */
    public function addToSSR(\Travelport\Air\StructType\SSR $item): self
    {
        $this->SSR[] = $item;
        
        return $this;
    }
    /**
     * Get CheckOBFees value
     * @return string|null
     */
    public function getCheckOBFees(): ?string
    {
        return $this->CheckOBFees;
    }
    /**
     * Set CheckOBFees value
     * @param string $checkOBFees
     * @return \Travelport\Air\StructType\BaseAirPriceReq
     */
    public function setCheckOBFees(?string $checkOBFees = null): self
    {
        $this->CheckOBFees = $checkOBFees;
        
        return $this;
    }
    /**
     * Get FareRuleType value
     * @return string|null
     */
    public function getFareRuleType(): ?string
    {
        return $this->FareRuleType;
    }
    /**
     * Set FareRuleType value
     * @param string $fareRuleType
     * @return \Travelport\Air\StructType\BaseAirPriceReq
     */
    public function setFareRuleType(?string $fareRuleType = null): self
    {
        $this->FareRuleType = $fareRuleType;
        
        return $this;
    }
    /**
     * Get SupplierCode value
     * @return string|null
     */
    public function getSupplierCode(): ?string
    {
        return $this->SupplierCode;
    }
    /**
     * Set SupplierCode value
     * @param string $supplierCode
     * @return \Travelport\Air\StructType\BaseAirPriceReq
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
    /**
     * Get TicketDate value
     * @return string|null
     */
    public function getTicketDate(): ?string
    {
        return $this->TicketDate;
    }
    /**
     * Set TicketDate value
     * @param string $ticketDate
     * @return \Travelport\Air\StructType\BaseAirPriceReq
     */
    public function setTicketDate(?string $ticketDate = null): self
    {
        $this->TicketDate = $ticketDate;
        
        return $this;
    }
    /**
     * Get CheckFlightDetails value
     * @return bool|null
     */
    public function getCheckFlightDetails(): ?bool
    {
        return $this->CheckFlightDetails;
    }
    /**
     * Set CheckFlightDetails value
     * @param bool $checkFlightDetails
     * @return \Travelport\Air\StructType\BaseAirPriceReq
     */
    public function setCheckFlightDetails(?bool $checkFlightDetails = false): self
    {
        $this->CheckFlightDetails = $checkFlightDetails;
        
        return $this;
    }
    /**
     * Get ReturnMM value
     * @return bool|null
     */
    public function getReturnMM(): ?bool
    {
        return $this->ReturnMM;
    }
    /**
     * Set ReturnMM value
     * @param bool $returnMM
     * @return \Travelport\Air\StructType\BaseAirPriceReq
     */
    public function setReturnMM(?bool $returnMM = false): self
    {
        $this->ReturnMM = $returnMM;
        
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
     * @return \Travelport\Air\StructType\BaseAirPriceReq
     */
    public function setNSCC(?string $nSCC = null): self
    {
        $this->NSCC = $nSCC;
        
        return $this;
    }
    /**
     * Get SplitPricing value
     * @return bool|null
     */
    public function getSplitPricing(): ?bool
    {
        return $this->SplitPricing;
    }
    /**
     * Set SplitPricing value
     * @param bool $splitPricing
     * @return \Travelport\Air\StructType\BaseAirPriceReq
     */
    public function setSplitPricing(?bool $splitPricing = false): self
    {
        $this->SplitPricing = $splitPricing;
        
        return $this;
    }
    /**
     * Get MostRestrictivePenalties value
     * @return bool|null
     */
    public function getMostRestrictivePenalties(): ?bool
    {
        return $this->MostRestrictivePenalties;
    }
    /**
     * Set MostRestrictivePenalties value
     * @param bool $mostRestrictivePenalties
     * @return \Travelport\Air\StructType\BaseAirPriceReq
     */
    public function setMostRestrictivePenalties(?bool $mostRestrictivePenalties = false): self
    {
        $this->MostRestrictivePenalties = $mostRestrictivePenalties;
        
        return $this;
    }
    /**
     * Get FareRuleValidation value
     * @return bool|null
     */
    public function getFareRuleValidation(): ?bool
    {
        return $this->FareRuleValidation;
    }
    /**
     * Set FareRuleValidation value
     * @param bool $fareRuleValidation
     * @return \Travelport\Air\StructType\BaseAirPriceReq
     */
    public function setFareRuleValidation(?bool $fareRuleValidation = false): self
    {
        $this->FareRuleValidation = $fareRuleValidation;
        
        return $this;
    }
    /**
     * Get PricingPreference value
     * @return string|null
     */
    public function getPricingPreference(): ?string
    {
        return $this->PricingPreference;
    }
    /**
     * Set PricingPreference value
     * @param string $pricingPreference
     * @return \Travelport\Air\StructType\BaseAirPriceReq
     */
    public function setPricingPreference(?string $pricingPreference = null): self
    {
        $this->PricingPreference = $pricingPreference;
        
        return $this;
    }
}
