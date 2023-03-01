<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirExchangeQuoteRsp StructType
 * @subpackage Structs
 */
class AirExchangeQuoteRsp extends BaseRsp
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
     * The AirPricingSolution
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: AirPricingSolution
     * @var \Travelport\Air\StructType\AirPricingSolution[]
     */
    public ?array $AirPricingSolution = null;
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
     * The FareRule
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareRule
     * @var \Travelport\Air\StructType\FareRule[]
     */
    public ?array $FareRule = null;
    /**
     * Constructor method for AirExchangeQuoteRsp
     * @uses AirExchangeQuoteRsp::setTicketNumber()
     * @uses AirExchangeQuoteRsp::setAirPricingSolution()
     * @uses AirExchangeQuoteRsp::setAirExchangeBundleTotal()
     * @uses AirExchangeQuoteRsp::setAirExchangeBundle()
     * @uses AirExchangeQuoteRsp::setHostToken()
     * @uses AirExchangeQuoteRsp::setOptionalServices()
     * @uses AirExchangeQuoteRsp::setFareRule()
     * @param string[] $ticketNumber
     * @param \Travelport\Air\StructType\AirPricingSolution[] $airPricingSolution
     * @param \Travelport\Air\StructType\AirExchangeBundleTotal $airExchangeBundleTotal
     * @param \Travelport\Air\StructType\AirExchangeBundle[] $airExchangeBundle
     * @param \Travelport\Air\StructType\HostToken[] $hostToken
     * @param \Travelport\Air\StructType\OptionalServices $optionalServices
     * @param \Travelport\Air\StructType\FareRule[] $fareRule
     */
    public function __construct(?array $ticketNumber = null, ?array $airPricingSolution = null, ?\Travelport\Air\StructType\AirExchangeBundleTotal $airExchangeBundleTotal = null, ?array $airExchangeBundle = null, ?array $hostToken = null, ?\Travelport\Air\StructType\OptionalServices $optionalServices = null, ?array $fareRule = null)
    {
        $this
            ->setTicketNumber($ticketNumber)
            ->setAirPricingSolution($airPricingSolution)
            ->setAirExchangeBundleTotal($airExchangeBundleTotal)
            ->setAirExchangeBundle($airExchangeBundle)
            ->setHostToken($hostToken)
            ->setOptionalServices($optionalServices)
            ->setFareRule($fareRule);
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
     * @return \Travelport\Air\StructType\AirExchangeQuoteRsp
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
     * @return \Travelport\Air\StructType\AirExchangeQuoteRsp
     */
    public function addToTicketNumber(string $item): self
    {
        $this->TicketNumber[] = $item;
        
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
     * @return \Travelport\Air\StructType\AirExchangeQuoteRsp
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
     * @return \Travelport\Air\StructType\AirExchangeQuoteRsp
     */
    public function addToAirPricingSolution(\Travelport\Air\StructType\AirPricingSolution $item): self
    {
        $this->AirPricingSolution[] = $item;
        
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
     * @return \Travelport\Air\StructType\AirExchangeQuoteRsp
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
     * @return \Travelport\Air\StructType\AirExchangeQuoteRsp
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
     * @return \Travelport\Air\StructType\AirExchangeQuoteRsp
     */
    public function addToAirExchangeBundle(\Travelport\Air\StructType\AirExchangeBundle $item): self
    {
        $this->AirExchangeBundle[] = $item;
        
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
     * @return \Travelport\Air\StructType\AirExchangeQuoteRsp
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
     * @return \Travelport\Air\StructType\AirExchangeQuoteRsp
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
     * @return \Travelport\Air\StructType\AirExchangeQuoteRsp
     */
    public function setOptionalServices(?\Travelport\Air\StructType\OptionalServices $optionalServices = null): self
    {
        $this->OptionalServices = $optionalServices;
        
        return $this;
    }
    /**
     * Get FareRule value
     * @return \Travelport\Air\StructType\FareRule[]
     */
    public function getFareRule(): ?array
    {
        return $this->FareRule;
    }
    /**
     * Set FareRule value
     * @param \Travelport\Air\StructType\FareRule[] $fareRule
     * @return \Travelport\Air\StructType\AirExchangeQuoteRsp
     */
    public function setFareRule(?array $fareRule = null): self
    {
        $this->FareRule = $fareRule;
        
        return $this;
    }
    /**
     * Add item to FareRule value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\FareRule $item
     * @return \Travelport\Air\StructType\AirExchangeQuoteRsp
     */
    public function addToFareRule(\Travelport\Air\StructType\FareRule $item): self
    {
        $this->FareRule[] = $item;
        
        return $this;
    }
}
