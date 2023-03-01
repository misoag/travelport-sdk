<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseAirExchangeQuoteReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Provider: ACH-This would allow a user to see the fees if they are changing from one Form Of Payment to other . | Provider: ACH.
 * @subpackage Structs
 */
class BaseAirExchangeQuoteReq extends BaseCoreReq
{
    /**
     * The TicketNumber
     * Meta information extracted from the WSDL
     * - documentation: Used for Character Strings, length 1 to 13.
     * - base: xs:string
     * - maxLength: 13
     * - maxOccurs: 999
     * - minLength: 1
     * - minOccurs: 0
     * - ref: common:TicketNumber
     * @var string[]
     */
    public ?array $TicketNumber = null;
    /**
     * The ProviderReservationInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\ProviderReservationInfo|null
     */
    public ?\Travelport\Air\StructType\ProviderReservationInfo $ProviderReservationInfo = null;
    /**
     * The AirPricingSolution
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * - ref: AirPricingSolution
     * @var \Travelport\Air\StructType\AirPricingSolution[]
     */
    public ?array $AirPricingSolution = null;
    /**
     * The AirExchangeModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AirExchangeModifiers
     * @var \Travelport\Air\StructType\AirExchangeModifiers|null
     */
    public ?\Travelport\Air\StructType\AirExchangeModifiers $AirExchangeModifiers = null;
    /**
     * The HostToken
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:HostToken
     * @var \Travelport\Air\StructType\HostToken[]
     */
    public ?array $HostToken = null;
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
     * The RepricingModifiers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: RepricingModifiers
     * @var \Travelport\Air\StructType\RepricingModifiers|null
     */
    public ?\Travelport\Air\StructType\RepricingModifiers $RepricingModifiers = null;
    /**
     * The OriginalItineraryDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: OriginalItineraryDetails
     * @var \Travelport\Air\StructType\OriginalItineraryDetails|null
     */
    public ?\Travelport\Air\StructType\OriginalItineraryDetails $OriginalItineraryDetails = null;
    /**
     * The PCC
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: PCC
     * @var \Travelport\Air\StructType\PCC|null
     */
    public ?\Travelport\Air\StructType\PCC $PCC = null;
    /**
     * The FareRuleType
     * Meta information extracted from the WSDL
     * - documentation: Provider: ACH.
     * - default: none
     * - use: optional
     * @var string|null
     */
    public ?string $FareRuleType = null;
    /**
     * Constructor method for BaseAirExchangeQuoteReq
     * @uses BaseAirExchangeQuoteReq::setTicketNumber()
     * @uses BaseAirExchangeQuoteReq::setProviderReservationInfo()
     * @uses BaseAirExchangeQuoteReq::setAirPricingSolution()
     * @uses BaseAirExchangeQuoteReq::setAirExchangeModifiers()
     * @uses BaseAirExchangeQuoteReq::setHostToken()
     * @uses BaseAirExchangeQuoteReq::setOptionalServices()
     * @uses BaseAirExchangeQuoteReq::setFormOfPayment()
     * @uses BaseAirExchangeQuoteReq::setRepricingModifiers()
     * @uses BaseAirExchangeQuoteReq::setOriginalItineraryDetails()
     * @uses BaseAirExchangeQuoteReq::setPCC()
     * @uses BaseAirExchangeQuoteReq::setFareRuleType()
     * @param string[] $ticketNumber
     * @param \Travelport\Air\StructType\ProviderReservationInfo $providerReservationInfo
     * @param \Travelport\Air\StructType\AirPricingSolution[] $airPricingSolution
     * @param \Travelport\Air\StructType\AirExchangeModifiers $airExchangeModifiers
     * @param \Travelport\Air\StructType\HostToken[] $hostToken
     * @param \Travelport\Air\StructType\OptionalServices $optionalServices
     * @param \Travelport\Air\StructType\FormOfPayment[] $formOfPayment
     * @param \Travelport\Air\StructType\RepricingModifiers $repricingModifiers
     * @param \Travelport\Air\StructType\OriginalItineraryDetails $originalItineraryDetails
     * @param \Travelport\Air\StructType\PCC $pCC
     * @param string $fareRuleType
     */
    public function __construct(?array $ticketNumber = null, ?\Travelport\Air\StructType\ProviderReservationInfo $providerReservationInfo = null, ?array $airPricingSolution = null, ?\Travelport\Air\StructType\AirExchangeModifiers $airExchangeModifiers = null, ?array $hostToken = null, ?\Travelport\Air\StructType\OptionalServices $optionalServices = null, ?array $formOfPayment = null, ?\Travelport\Air\StructType\RepricingModifiers $repricingModifiers = null, ?\Travelport\Air\StructType\OriginalItineraryDetails $originalItineraryDetails = null, ?\Travelport\Air\StructType\PCC $pCC = null, ?string $fareRuleType = null)
    {
        $this
            ->setTicketNumber($ticketNumber)
            ->setProviderReservationInfo($providerReservationInfo)
            ->setAirPricingSolution($airPricingSolution)
            ->setAirExchangeModifiers($airExchangeModifiers)
            ->setHostToken($hostToken)
            ->setOptionalServices($optionalServices)
            ->setFormOfPayment($formOfPayment)
            ->setRepricingModifiers($repricingModifiers)
            ->setOriginalItineraryDetails($originalItineraryDetails)
            ->setPCC($pCC)
            ->setFareRuleType($fareRuleType);
    }
    /**
     * Get TicketNumber value
     * @return string[]
     */
    public function getTicketNumber(): ?array
    {
        return $this->TicketNumber;
    }
    /**
     * Set TicketNumber value
     * @param string[] $ticketNumber
     * @return \Travelport\Air\StructType\BaseAirExchangeQuoteReq
     */
    public function setTicketNumber(?array $ticketNumber = null): self
    {
        $this->TicketNumber = $ticketNumber;
        
        return $this;
    }
    /**
     * Add item to TicketNumber value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Air\StructType\BaseAirExchangeQuoteReq
     */
    public function addToTicketNumber(string $item): self
    {
        $this->TicketNumber[] = $item;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfo value
     * @return \Travelport\Air\StructType\ProviderReservationInfo|null
     */
    public function getProviderReservationInfo(): ?\Travelport\Air\StructType\ProviderReservationInfo
    {
        return $this->ProviderReservationInfo;
    }
    /**
     * Set ProviderReservationInfo value
     * @param \Travelport\Air\StructType\ProviderReservationInfo $providerReservationInfo
     * @return \Travelport\Air\StructType\BaseAirExchangeQuoteReq
     */
    public function setProviderReservationInfo(?\Travelport\Air\StructType\ProviderReservationInfo $providerReservationInfo = null): self
    {
        $this->ProviderReservationInfo = $providerReservationInfo;
        
        return $this;
    }
    /**
     * Get AirPricingSolution value
     * @return \Travelport\Air\StructType\AirPricingSolution[]
     */
    public function getAirPricingSolution(): ?array
    {
        return $this->AirPricingSolution;
    }
    /**
     * Set AirPricingSolution value
     * @param \Travelport\Air\StructType\AirPricingSolution[] $airPricingSolution
     * @return \Travelport\Air\StructType\BaseAirExchangeQuoteReq
     */
    public function setAirPricingSolution(?array $airPricingSolution = null): self
    {
        $this->AirPricingSolution = $airPricingSolution;
        
        return $this;
    }
    /**
     * Add item to AirPricingSolution value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirPricingSolution $item
     * @return \Travelport\Air\StructType\BaseAirExchangeQuoteReq
     */
    public function addToAirPricingSolution(\Travelport\Air\StructType\AirPricingSolution $item): self
    {
        $this->AirPricingSolution[] = $item;
        
        return $this;
    }
    /**
     * Get AirExchangeModifiers value
     * @return \Travelport\Air\StructType\AirExchangeModifiers|null
     */
    public function getAirExchangeModifiers(): ?\Travelport\Air\StructType\AirExchangeModifiers
    {
        return $this->AirExchangeModifiers;
    }
    /**
     * Set AirExchangeModifiers value
     * @param \Travelport\Air\StructType\AirExchangeModifiers $airExchangeModifiers
     * @return \Travelport\Air\StructType\BaseAirExchangeQuoteReq
     */
    public function setAirExchangeModifiers(?\Travelport\Air\StructType\AirExchangeModifiers $airExchangeModifiers = null): self
    {
        $this->AirExchangeModifiers = $airExchangeModifiers;
        
        return $this;
    }
    /**
     * Get HostToken value
     * @return \Travelport\Air\StructType\HostToken[]
     */
    public function getHostToken(): ?array
    {
        return $this->HostToken;
    }
    /**
     * Set HostToken value
     * @param \Travelport\Air\StructType\HostToken[] $hostToken
     * @return \Travelport\Air\StructType\BaseAirExchangeQuoteReq
     */
    public function setHostToken(?array $hostToken = null): self
    {
        $this->HostToken = $hostToken;
        
        return $this;
    }
    /**
     * Add item to HostToken value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\HostToken $item
     * @return \Travelport\Air\StructType\BaseAirExchangeQuoteReq
     */
    public function addToHostToken(\Travelport\Air\StructType\HostToken $item): self
    {
        $this->HostToken[] = $item;
        
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
     * @return \Travelport\Air\StructType\BaseAirExchangeQuoteReq
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
     * @return \Travelport\Air\StructType\BaseAirExchangeQuoteReq
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
     * @return \Travelport\Air\StructType\BaseAirExchangeQuoteReq
     */
    public function addToFormOfPayment(\Travelport\Air\StructType\FormOfPayment $item): self
    {
        $this->FormOfPayment[] = $item;
        
        return $this;
    }
    /**
     * Get RepricingModifiers value
     * @return \Travelport\Air\StructType\RepricingModifiers|null
     */
    public function getRepricingModifiers(): ?\Travelport\Air\StructType\RepricingModifiers
    {
        return $this->RepricingModifiers;
    }
    /**
     * Set RepricingModifiers value
     * @param \Travelport\Air\StructType\RepricingModifiers $repricingModifiers
     * @return \Travelport\Air\StructType\BaseAirExchangeQuoteReq
     */
    public function setRepricingModifiers(?\Travelport\Air\StructType\RepricingModifiers $repricingModifiers = null): self
    {
        $this->RepricingModifiers = $repricingModifiers;
        
        return $this;
    }
    /**
     * Get OriginalItineraryDetails value
     * @return \Travelport\Air\StructType\OriginalItineraryDetails|null
     */
    public function getOriginalItineraryDetails(): ?\Travelport\Air\StructType\OriginalItineraryDetails
    {
        return $this->OriginalItineraryDetails;
    }
    /**
     * Set OriginalItineraryDetails value
     * @param \Travelport\Air\StructType\OriginalItineraryDetails $originalItineraryDetails
     * @return \Travelport\Air\StructType\BaseAirExchangeQuoteReq
     */
    public function setOriginalItineraryDetails(?\Travelport\Air\StructType\OriginalItineraryDetails $originalItineraryDetails = null): self
    {
        $this->OriginalItineraryDetails = $originalItineraryDetails;
        
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
     * @return \Travelport\Air\StructType\BaseAirExchangeQuoteReq
     */
    public function setPCC(?\Travelport\Air\StructType\PCC $pCC = null): self
    {
        $this->PCC = $pCC;
        
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
     * @return \Travelport\Air\StructType\BaseAirExchangeQuoteReq
     */
    public function setFareRuleType(?string $fareRuleType = null): self
    {
        $this->FareRuleType = $fareRuleType;
        
        return $this;
    }
}
