<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirRefundQuoteReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to quote a refund for an itinerary
 * @subpackage Structs
 */
class AirRefundQuoteReq extends BaseReq
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
     * The TCRNumber
     * Meta information extracted from the WSDL
     * - documentation: Provider: ACH-The identifying number for a Ticketless Air Reservation | The identifying number for a Ticketless Air Reservation
     * - base: xs:string
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $TCRNumber = null;
    /**
     * The AirRefundModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AirRefundModifiers
     * @var \Travelport\Air\StructType\AirRefundModifiers|null
     */
    public ?\Travelport\Air\StructType\AirRefundModifiers $AirRefundModifiers = null;
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
     * The ProviderReservationInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\ProviderReservationInfo[]
     */
    public ?array $ProviderReservationInfo = null;
    /**
     * The Ignore
     * Meta information extracted from the WSDL
     * - documentation: Provider: ACH.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $Ignore = null;
    /**
     * Constructor method for AirRefundQuoteReq
     * @uses AirRefundQuoteReq::setTicketNumber()
     * @uses AirRefundQuoteReq::setTCRNumber()
     * @uses AirRefundQuoteReq::setAirRefundModifiers()
     * @uses AirRefundQuoteReq::setHostToken()
     * @uses AirRefundQuoteReq::setProviderReservationInfo()
     * @uses AirRefundQuoteReq::setIgnore()
     * @param string[] $ticketNumber
     * @param string[] $tCRNumber
     * @param \Travelport\Air\StructType\AirRefundModifiers $airRefundModifiers
     * @param \Travelport\Air\StructType\HostToken[] $hostToken
     * @param \Travelport\Air\StructType\ProviderReservationInfo[] $providerReservationInfo
     * @param bool $ignore
     */
    public function __construct(?array $ticketNumber = null, ?array $tCRNumber = null, ?\Travelport\Air\StructType\AirRefundModifiers $airRefundModifiers = null, ?array $hostToken = null, ?array $providerReservationInfo = null, ?bool $ignore = false)
    {
        $this
            ->setTicketNumber($ticketNumber)
            ->setTCRNumber($tCRNumber)
            ->setAirRefundModifiers($airRefundModifiers)
            ->setHostToken($hostToken)
            ->setProviderReservationInfo($providerReservationInfo)
            ->setIgnore($ignore);
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
     * @return \Travelport\Air\StructType\AirRefundQuoteReq
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
     * @return \Travelport\Air\StructType\AirRefundQuoteReq
     */
    public function addToTicketNumber(string $item): self
    {
        $this->TicketNumber[] = $item;
        
        return $this;
    }
    /**
     * Get TCRNumber value
     * @return string[]
     */
    public function getTCRNumber(): ?array
    {
        return $this->TCRNumber;
    }
    /**
     * Set TCRNumber value
     * @param string[] $tCRNumber
     * @return \Travelport\Air\StructType\AirRefundQuoteReq
     */
    public function setTCRNumber(?array $tCRNumber = null): self
    {
        $this->TCRNumber = $tCRNumber;
        
        return $this;
    }
    /**
     * Add item to TCRNumber value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Air\StructType\AirRefundQuoteReq
     */
    public function addToTCRNumber(string $item): self
    {
        $this->TCRNumber[] = $item;
        
        return $this;
    }
    /**
     * Get AirRefundModifiers value
     * @return \Travelport\Air\StructType\AirRefundModifiers|null
     */
    public function getAirRefundModifiers(): ?\Travelport\Air\StructType\AirRefundModifiers
    {
        return $this->AirRefundModifiers;
    }
    /**
     * Set AirRefundModifiers value
     * @param \Travelport\Air\StructType\AirRefundModifiers $airRefundModifiers
     * @return \Travelport\Air\StructType\AirRefundQuoteReq
     */
    public function setAirRefundModifiers(?\Travelport\Air\StructType\AirRefundModifiers $airRefundModifiers = null): self
    {
        $this->AirRefundModifiers = $airRefundModifiers;
        
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
     * @return \Travelport\Air\StructType\AirRefundQuoteReq
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
     * @return \Travelport\Air\StructType\AirRefundQuoteReq
     */
    public function addToHostToken(\Travelport\Air\StructType\HostToken $item): self
    {
        $this->HostToken[] = $item;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfo value
     * @return \Travelport\Air\StructType\ProviderReservationInfo[]
     */
    public function getProviderReservationInfo(): ?array
    {
        return $this->ProviderReservationInfo;
    }
    /**
     * Set ProviderReservationInfo value
     * @param \Travelport\Air\StructType\ProviderReservationInfo[] $providerReservationInfo
     * @return \Travelport\Air\StructType\AirRefundQuoteReq
     */
    public function setProviderReservationInfo(?array $providerReservationInfo = null): self
    {
        $this->ProviderReservationInfo = $providerReservationInfo;
        
        return $this;
    }
    /**
     * Add item to ProviderReservationInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\ProviderReservationInfo $item
     * @return \Travelport\Air\StructType\AirRefundQuoteReq
     */
    public function addToProviderReservationInfo(\Travelport\Air\StructType\ProviderReservationInfo $item): self
    {
        $this->ProviderReservationInfo[] = $item;
        
        return $this;
    }
    /**
     * Get Ignore value
     * @return bool|null
     */
    public function getIgnore(): ?bool
    {
        return $this->Ignore;
    }
    /**
     * Set Ignore value
     * @param bool $ignore
     * @return \Travelport\Air\StructType\AirRefundQuoteReq
     */
    public function setIgnore(?bool $ignore = false): self
    {
        $this->Ignore = $ignore;
        
        return $this;
    }
}
