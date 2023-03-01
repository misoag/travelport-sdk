<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseAirExchangeMultiQuoteReq StructType
 * @subpackage Structs
 */
class BaseAirExchangeMultiQuoteReq extends BaseCoreReq
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
     * The OverridePCC
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: common:OverridePCC
     * @var \Travelport\Air\StructType\OverridePCC|null
     */
    public ?\Travelport\Air\StructType\OverridePCC $OverridePCC = null;
    /**
     * Constructor method for BaseAirExchangeMultiQuoteReq
     * @uses BaseAirExchangeMultiQuoteReq::setTicketNumber()
     * @uses BaseAirExchangeMultiQuoteReq::setProviderReservationInfo()
     * @uses BaseAirExchangeMultiQuoteReq::setAirPricingSolution()
     * @uses BaseAirExchangeMultiQuoteReq::setRepricingModifiers()
     * @uses BaseAirExchangeMultiQuoteReq::setOriginalItineraryDetails()
     * @uses BaseAirExchangeMultiQuoteReq::setOverridePCC()
     * @param string[] $ticketNumber
     * @param \Travelport\Air\StructType\ProviderReservationInfo $providerReservationInfo
     * @param \Travelport\Air\StructType\AirPricingSolution[] $airPricingSolution
     * @param \Travelport\Air\StructType\RepricingModifiers $repricingModifiers
     * @param \Travelport\Air\StructType\OriginalItineraryDetails $originalItineraryDetails
     * @param \Travelport\Air\StructType\OverridePCC $overridePCC
     */
    public function __construct(?array $ticketNumber = null, ?\Travelport\Air\StructType\ProviderReservationInfo $providerReservationInfo = null, ?array $airPricingSolution = null, ?\Travelport\Air\StructType\RepricingModifiers $repricingModifiers = null, ?\Travelport\Air\StructType\OriginalItineraryDetails $originalItineraryDetails = null, ?\Travelport\Air\StructType\OverridePCC $overridePCC = null)
    {
        $this
            ->setTicketNumber($ticketNumber)
            ->setProviderReservationInfo($providerReservationInfo)
            ->setAirPricingSolution($airPricingSolution)
            ->setRepricingModifiers($repricingModifiers)
            ->setOriginalItineraryDetails($originalItineraryDetails)
            ->setOverridePCC($overridePCC);
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
     * @return \Travelport\Air\StructType\BaseAirExchangeMultiQuoteReq
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
     * @return \Travelport\Air\StructType\BaseAirExchangeMultiQuoteReq
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
     * @return \Travelport\Air\StructType\BaseAirExchangeMultiQuoteReq
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
     * @return \Travelport\Air\StructType\BaseAirExchangeMultiQuoteReq
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
     * @return \Travelport\Air\StructType\BaseAirExchangeMultiQuoteReq
     */
    public function addToAirPricingSolution(\Travelport\Air\StructType\AirPricingSolution $item): self
    {
        $this->AirPricingSolution[] = $item;
        
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
     * @return \Travelport\Air\StructType\BaseAirExchangeMultiQuoteReq
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
     * @return \Travelport\Air\StructType\BaseAirExchangeMultiQuoteReq
     */
    public function setOriginalItineraryDetails(?\Travelport\Air\StructType\OriginalItineraryDetails $originalItineraryDetails = null): self
    {
        $this->OriginalItineraryDetails = $originalItineraryDetails;
        
        return $this;
    }
    /**
     * Get OverridePCC value
     * @return \Travelport\Air\StructType\OverridePCC|null
     */
    public function getOverridePCC(): ?\Travelport\Air\StructType\OverridePCC
    {
        return $this->OverridePCC;
    }
    /**
     * Set OverridePCC value
     * @param \Travelport\Air\StructType\OverridePCC $overridePCC
     * @return \Travelport\Air\StructType\BaseAirExchangeMultiQuoteReq
     */
    public function setOverridePCC(?\Travelport\Air\StructType\OverridePCC $overridePCC = null): self
    {
        $this->OverridePCC = $overridePCC;
        
        return $this;
    }
}
