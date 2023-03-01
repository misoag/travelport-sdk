<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirExchangeTicketingReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to ticket an exchanged itinerary. Providers 1G, 1V, 1P.
 * @subpackage Structs
 */
class AirExchangeTicketingReq extends BaseReq
{
    /**
     * The AirReservationLocatorCode
     * Meta information extracted from the WSDL
     * - ref: AirReservationLocatorCode
     * @var \Travelport\Air\StructType\AirReservationLocatorCode|null
     */
    public ?\Travelport\Air\StructType\AirReservationLocatorCode $AirReservationLocatorCode = null;
    /**
     * The TicketNumber
     * Meta information extracted from the WSDL
     * - documentation: Used for Character Strings, length 1 to 13.
     * - base: xs:string
     * - maxLength: 13
     * - minLength: 1
     * - ref: common:TicketNumber
     * @var string|null
     */
    public ?string $TicketNumber = null;
    /**
     * The TicketingModifiersRef
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1P-Reference to a shared list of Ticketing Modifiers. This is supported for Worldspan provider only. When AirPricingInfoRef is used along with TicketingModifiersRef means that particular TicketingModifiers will to be
     * applied while ticketing the Stored fare corresponding to the AirPricingInfo. Absence of AirPricingInfoRef means that particular TicketingModifiers will be applied to all Stored fares which are requested to be ticketed.
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeTicketingModifiersRef[]
     */
    public ?array $TicketingModifiersRef = null;
    /**
     * The WaiverCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: WaiverCode
     * @var \Travelport\Air\StructType\WaiverCode|null
     */
    public ?\Travelport\Air\StructType\WaiverCode $WaiverCode = null;
    /**
     * The DetailedBillingInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: DetailedBillingInformation
     * @var \Travelport\Air\StructType\DetailedBillingInformation[]
     */
    public ?array $DetailedBillingInformation = null;
    /**
     * The AirTicketingModifiers
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirTicketingModifiers
     * @var \Travelport\Air\StructType\AirTicketingModifiers[]
     */
    public ?array $AirTicketingModifiers = null;
    /**
     * The BulkTicket
     * Meta information extracted from the WSDL
     * - documentation: Providers 1G, 1V, 1P.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $BulkTicket = null;
    /**
     * The ChangeFeeOnTicket
     * Meta information extracted from the WSDL
     * - documentation: Applies the change fee/penalty to the original form of payment. Providers: 1V
     * - default: true
     * - use: optional
     * @var bool|null
     */
    public ?bool $ChangeFeeOnTicket = null;
    /**
     * Constructor method for AirExchangeTicketingReq
     * @uses AirExchangeTicketingReq::setAirReservationLocatorCode()
     * @uses AirExchangeTicketingReq::setTicketNumber()
     * @uses AirExchangeTicketingReq::setTicketingModifiersRef()
     * @uses AirExchangeTicketingReq::setWaiverCode()
     * @uses AirExchangeTicketingReq::setDetailedBillingInformation()
     * @uses AirExchangeTicketingReq::setAirTicketingModifiers()
     * @uses AirExchangeTicketingReq::setBulkTicket()
     * @uses AirExchangeTicketingReq::setChangeFeeOnTicket()
     * @param \Travelport\Air\StructType\AirReservationLocatorCode $airReservationLocatorCode
     * @param string $ticketNumber
     * @param \Travelport\Air\StructType\TypeTicketingModifiersRef[] $ticketingModifiersRef
     * @param \Travelport\Air\StructType\WaiverCode $waiverCode
     * @param \Travelport\Air\StructType\DetailedBillingInformation[] $detailedBillingInformation
     * @param \Travelport\Air\StructType\AirTicketingModifiers[] $airTicketingModifiers
     * @param bool $bulkTicket
     * @param bool $changeFeeOnTicket
     */
    public function __construct(?\Travelport\Air\StructType\AirReservationLocatorCode $airReservationLocatorCode = null, ?string $ticketNumber = null, ?array $ticketingModifiersRef = null, ?\Travelport\Air\StructType\WaiverCode $waiverCode = null, ?array $detailedBillingInformation = null, ?array $airTicketingModifiers = null, ?bool $bulkTicket = false, ?bool $changeFeeOnTicket = true)
    {
        $this
            ->setAirReservationLocatorCode($airReservationLocatorCode)
            ->setTicketNumber($ticketNumber)
            ->setTicketingModifiersRef($ticketingModifiersRef)
            ->setWaiverCode($waiverCode)
            ->setDetailedBillingInformation($detailedBillingInformation)
            ->setAirTicketingModifiers($airTicketingModifiers)
            ->setBulkTicket($bulkTicket)
            ->setChangeFeeOnTicket($changeFeeOnTicket);
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
     * @return \Travelport\Air\StructType\AirExchangeTicketingReq
     */
    public function setAirReservationLocatorCode(?\Travelport\Air\StructType\AirReservationLocatorCode $airReservationLocatorCode = null): self
    {
        $this->AirReservationLocatorCode = $airReservationLocatorCode;
        
        return $this;
    }
    /**
     * Get TicketNumber value
     * @return string|null
     */
    public function getTicketNumber(): ?string
    {
        return $this->TicketNumber;
    }
    /**
     * Set TicketNumber value
     * @param string $ticketNumber
     * @return \Travelport\Air\StructType\AirExchangeTicketingReq
     */
    public function setTicketNumber(?string $ticketNumber = null): self
    {
        $this->TicketNumber = $ticketNumber;
        
        return $this;
    }
    /**
     * Get TicketingModifiersRef value
     * @return \Travelport\Air\StructType\TypeTicketingModifiersRef[]
     */
    public function getTicketingModifiersRef(): ?array
    {
        return $this->TicketingModifiersRef;
    }
    /**
     * Set TicketingModifiersRef value
     * @param \Travelport\Air\StructType\TypeTicketingModifiersRef[] $ticketingModifiersRef
     * @return \Travelport\Air\StructType\AirExchangeTicketingReq
     */
    public function setTicketingModifiersRef(?array $ticketingModifiersRef = null): self
    {
        $this->TicketingModifiersRef = $ticketingModifiersRef;
        
        return $this;
    }
    /**
     * Add item to TicketingModifiersRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TypeTicketingModifiersRef $item
     * @return \Travelport\Air\StructType\AirExchangeTicketingReq
     */
    public function addToTicketingModifiersRef(\Travelport\Air\StructType\TypeTicketingModifiersRef $item): self
    {
        $this->TicketingModifiersRef[] = $item;
        
        return $this;
    }
    /**
     * Get WaiverCode value
     * @return \Travelport\Air\StructType\WaiverCode|null
     */
    public function getWaiverCode(): ?\Travelport\Air\StructType\WaiverCode
    {
        return $this->WaiverCode;
    }
    /**
     * Set WaiverCode value
     * @param \Travelport\Air\StructType\WaiverCode $waiverCode
     * @return \Travelport\Air\StructType\AirExchangeTicketingReq
     */
    public function setWaiverCode(?\Travelport\Air\StructType\WaiverCode $waiverCode = null): self
    {
        $this->WaiverCode = $waiverCode;
        
        return $this;
    }
    /**
     * Get DetailedBillingInformation value
     * @return \Travelport\Air\StructType\DetailedBillingInformation[]
     */
    public function getDetailedBillingInformation(): ?array
    {
        return $this->DetailedBillingInformation;
    }
    /**
     * Set DetailedBillingInformation value
     * @param \Travelport\Air\StructType\DetailedBillingInformation[] $detailedBillingInformation
     * @return \Travelport\Air\StructType\AirExchangeTicketingReq
     */
    public function setDetailedBillingInformation(?array $detailedBillingInformation = null): self
    {
        $this->DetailedBillingInformation = $detailedBillingInformation;
        
        return $this;
    }
    /**
     * Add item to DetailedBillingInformation value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\DetailedBillingInformation $item
     * @return \Travelport\Air\StructType\AirExchangeTicketingReq
     */
    public function addToDetailedBillingInformation(\Travelport\Air\StructType\DetailedBillingInformation $item): self
    {
        $this->DetailedBillingInformation[] = $item;
        
        return $this;
    }
    /**
     * Get AirTicketingModifiers value
     * @return \Travelport\Air\StructType\AirTicketingModifiers[]
     */
    public function getAirTicketingModifiers(): ?array
    {
        return $this->AirTicketingModifiers;
    }
    /**
     * Set AirTicketingModifiers value
     * @param \Travelport\Air\StructType\AirTicketingModifiers[] $airTicketingModifiers
     * @return \Travelport\Air\StructType\AirExchangeTicketingReq
     */
    public function setAirTicketingModifiers(?array $airTicketingModifiers = null): self
    {
        $this->AirTicketingModifiers = $airTicketingModifiers;
        
        return $this;
    }
    /**
     * Add item to AirTicketingModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirTicketingModifiers $item
     * @return \Travelport\Air\StructType\AirExchangeTicketingReq
     */
    public function addToAirTicketingModifiers(\Travelport\Air\StructType\AirTicketingModifiers $item): self
    {
        $this->AirTicketingModifiers[] = $item;
        
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
     * @return \Travelport\Air\StructType\AirExchangeTicketingReq
     */
    public function setBulkTicket(?bool $bulkTicket = false): self
    {
        $this->BulkTicket = $bulkTicket;
        
        return $this;
    }
    /**
     * Get ChangeFeeOnTicket value
     * @return bool|null
     */
    public function getChangeFeeOnTicket(): ?bool
    {
        return $this->ChangeFeeOnTicket;
    }
    /**
     * Set ChangeFeeOnTicket value
     * @param bool $changeFeeOnTicket
     * @return \Travelport\Air\StructType\AirExchangeTicketingReq
     */
    public function setChangeFeeOnTicket(?bool $changeFeeOnTicket = true): self
    {
        $this->ChangeFeeOnTicket = $changeFeeOnTicket;
        
        return $this;
    }
}
