<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniversalRecordSearchReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to retrieve a summary information for reservations under a Universal Record
 * @subpackage Structs
 */
class UniversalRecordSearchReq extends BaseReq
{
    /**
     * The UniversalRecordSearchModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: UniversalRecordSearchModifiers
     * @var \Travelport\UniversalRecord\StructType\UniversalRecordSearchModifiers|null
     */
    public ?\Travelport\UniversalRecord\StructType\UniversalRecordSearchModifiers $UniversalRecordSearchModifiers = null;
    /**
     * The TravelerCriteria
     * @var \Travelport\UniversalRecord\StructType\TravelerCriteria|null
     */
    public ?\Travelport\UniversalRecord\StructType\TravelerCriteria $TravelerCriteria = null;
    /**
     * The SearchAgent
     * @var \Travelport\UniversalRecord\StructType\SearchAgent|null
     */
    public ?\Travelport\UniversalRecord\StructType\SearchAgent $SearchAgent = null;
    /**
     * The AirReservationCriteria
     * @var \Travelport\UniversalRecord\StructType\AirReservationCriteria|null
     */
    public ?\Travelport\UniversalRecord\StructType\AirReservationCriteria $AirReservationCriteria = null;
    /**
     * The HotelReservationCriteria
     * @var \Travelport\UniversalRecord\StructType\HotelReservationCriteria|null
     */
    public ?\Travelport\UniversalRecord\StructType\HotelReservationCriteria $HotelReservationCriteria = null;
    /**
     * The VehicleReservationCriteria
     * @var \Travelport\UniversalRecord\StructType\VehicleReservationCriteria|null
     */
    public ?\Travelport\UniversalRecord\StructType\VehicleReservationCriteria $VehicleReservationCriteria = null;
    /**
     * The RailReservationCriteria
     * @var \Travelport\UniversalRecord\StructType\RailReservationCriteria|null
     */
    public ?\Travelport\UniversalRecord\StructType\RailReservationCriteria $RailReservationCriteria = null;
    /**
     * The SearchAccount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: SearchAccount
     * @var \Travelport\UniversalRecord\StructType\SearchAccount|null
     */
    public ?\Travelport\UniversalRecord\StructType\SearchAccount $SearchAccount = null;
    /**
     * The ActionDate
     * @var string|null
     */
    public ?string $ActionDate = null;
    /**
     * The RecordStatus
     * @var string|null
     */
    public ?string $RecordStatus = null;
    /**
     * The ClientId
     * @var string|null
     */
    public ?string $ClientId = null;
    /**
     * The ProviderCode
     * @var string|null
     */
    public ?string $ProviderCode = null;
    /**
     * The ProviderLocatorCode
     * @var string|null
     */
    public ?string $ProviderLocatorCode = null;
    /**
     * The ExternalSearchIndex
     * Meta information extracted from the WSDL
     * - documentation: This index is used for retrieving locator code from GDS. Provider specific info that can be used to help identify a record if no ProviderLocatorCode is known
     * - base: xs:string
     * @var string|null
     */
    public ?string $ExternalSearchIndex = null;
    /**
     * The RestrictToProfileId
     * @var string|null
     */
    public ?string $RestrictToProfileId = null;
    /**
     * The PassiveOnly
     * Meta information extracted from the WSDL
     * - documentation: Search for Passives Only
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $PassiveOnly = null;
    /**
     * The TicketStatus
     * Meta information extracted from the WSDL
     * - documentation: Search universal record with Ticket Status
     * - use: optional
     * @var string|null
     */
    public ?string $TicketStatus = null;
    /**
     * Constructor method for UniversalRecordSearchReq
     * @uses UniversalRecordSearchReq::setUniversalRecordSearchModifiers()
     * @uses UniversalRecordSearchReq::setTravelerCriteria()
     * @uses UniversalRecordSearchReq::setSearchAgent()
     * @uses UniversalRecordSearchReq::setAirReservationCriteria()
     * @uses UniversalRecordSearchReq::setHotelReservationCriteria()
     * @uses UniversalRecordSearchReq::setVehicleReservationCriteria()
     * @uses UniversalRecordSearchReq::setRailReservationCriteria()
     * @uses UniversalRecordSearchReq::setSearchAccount()
     * @uses UniversalRecordSearchReq::setActionDate()
     * @uses UniversalRecordSearchReq::setRecordStatus()
     * @uses UniversalRecordSearchReq::setClientId()
     * @uses UniversalRecordSearchReq::setProviderCode()
     * @uses UniversalRecordSearchReq::setProviderLocatorCode()
     * @uses UniversalRecordSearchReq::setExternalSearchIndex()
     * @uses UniversalRecordSearchReq::setRestrictToProfileId()
     * @uses UniversalRecordSearchReq::setPassiveOnly()
     * @uses UniversalRecordSearchReq::setTicketStatus()
     * @param \Travelport\UniversalRecord\StructType\UniversalRecordSearchModifiers $universalRecordSearchModifiers
     * @param \Travelport\UniversalRecord\StructType\TravelerCriteria $travelerCriteria
     * @param \Travelport\UniversalRecord\StructType\SearchAgent $searchAgent
     * @param \Travelport\UniversalRecord\StructType\AirReservationCriteria $airReservationCriteria
     * @param \Travelport\UniversalRecord\StructType\HotelReservationCriteria $hotelReservationCriteria
     * @param \Travelport\UniversalRecord\StructType\VehicleReservationCriteria $vehicleReservationCriteria
     * @param \Travelport\UniversalRecord\StructType\RailReservationCriteria $railReservationCriteria
     * @param \Travelport\UniversalRecord\StructType\SearchAccount $searchAccount
     * @param string $actionDate
     * @param string $recordStatus
     * @param string $clientId
     * @param string $providerCode
     * @param string $providerLocatorCode
     * @param string $externalSearchIndex
     * @param string $restrictToProfileId
     * @param bool $passiveOnly
     * @param string $ticketStatus
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\UniversalRecordSearchModifiers $universalRecordSearchModifiers = null, ?\Travelport\UniversalRecord\StructType\TravelerCriteria $travelerCriteria = null, ?\Travelport\UniversalRecord\StructType\SearchAgent $searchAgent = null, ?\Travelport\UniversalRecord\StructType\AirReservationCriteria $airReservationCriteria = null, ?\Travelport\UniversalRecord\StructType\HotelReservationCriteria $hotelReservationCriteria = null, ?\Travelport\UniversalRecord\StructType\VehicleReservationCriteria $vehicleReservationCriteria = null, ?\Travelport\UniversalRecord\StructType\RailReservationCriteria $railReservationCriteria = null, ?\Travelport\UniversalRecord\StructType\SearchAccount $searchAccount = null, ?string $actionDate = null, ?string $recordStatus = null, ?string $clientId = null, ?string $providerCode = null, ?string $providerLocatorCode = null, ?string $externalSearchIndex = null, ?string $restrictToProfileId = null, ?bool $passiveOnly = false, ?string $ticketStatus = null)
    {
        $this
            ->setUniversalRecordSearchModifiers($universalRecordSearchModifiers)
            ->setTravelerCriteria($travelerCriteria)
            ->setSearchAgent($searchAgent)
            ->setAirReservationCriteria($airReservationCriteria)
            ->setHotelReservationCriteria($hotelReservationCriteria)
            ->setVehicleReservationCriteria($vehicleReservationCriteria)
            ->setRailReservationCriteria($railReservationCriteria)
            ->setSearchAccount($searchAccount)
            ->setActionDate($actionDate)
            ->setRecordStatus($recordStatus)
            ->setClientId($clientId)
            ->setProviderCode($providerCode)
            ->setProviderLocatorCode($providerLocatorCode)
            ->setExternalSearchIndex($externalSearchIndex)
            ->setRestrictToProfileId($restrictToProfileId)
            ->setPassiveOnly($passiveOnly)
            ->setTicketStatus($ticketStatus);
    }
    /**
     * Get UniversalRecordSearchModifiers value
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchModifiers|null
     */
    public function getUniversalRecordSearchModifiers(): ?\Travelport\UniversalRecord\StructType\UniversalRecordSearchModifiers
    {
        return $this->UniversalRecordSearchModifiers;
    }
    /**
     * Set UniversalRecordSearchModifiers value
     * @param \Travelport\UniversalRecord\StructType\UniversalRecordSearchModifiers $universalRecordSearchModifiers
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchReq
     */
    public function setUniversalRecordSearchModifiers(?\Travelport\UniversalRecord\StructType\UniversalRecordSearchModifiers $universalRecordSearchModifiers = null): self
    {
        $this->UniversalRecordSearchModifiers = $universalRecordSearchModifiers;
        
        return $this;
    }
    /**
     * Get TravelerCriteria value
     * @return \Travelport\UniversalRecord\StructType\TravelerCriteria|null
     */
    public function getTravelerCriteria(): ?\Travelport\UniversalRecord\StructType\TravelerCriteria
    {
        return $this->TravelerCriteria;
    }
    /**
     * Set TravelerCriteria value
     * @param \Travelport\UniversalRecord\StructType\TravelerCriteria $travelerCriteria
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchReq
     */
    public function setTravelerCriteria(?\Travelport\UniversalRecord\StructType\TravelerCriteria $travelerCriteria = null): self
    {
        $this->TravelerCriteria = $travelerCriteria;
        
        return $this;
    }
    /**
     * Get SearchAgent value
     * @return \Travelport\UniversalRecord\StructType\SearchAgent|null
     */
    public function getSearchAgent(): ?\Travelport\UniversalRecord\StructType\SearchAgent
    {
        return $this->SearchAgent;
    }
    /**
     * Set SearchAgent value
     * @param \Travelport\UniversalRecord\StructType\SearchAgent $searchAgent
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchReq
     */
    public function setSearchAgent(?\Travelport\UniversalRecord\StructType\SearchAgent $searchAgent = null): self
    {
        $this->SearchAgent = $searchAgent;
        
        return $this;
    }
    /**
     * Get AirReservationCriteria value
     * @return \Travelport\UniversalRecord\StructType\AirReservationCriteria|null
     */
    public function getAirReservationCriteria(): ?\Travelport\UniversalRecord\StructType\AirReservationCriteria
    {
        return $this->AirReservationCriteria;
    }
    /**
     * Set AirReservationCriteria value
     * @param \Travelport\UniversalRecord\StructType\AirReservationCriteria $airReservationCriteria
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchReq
     */
    public function setAirReservationCriteria(?\Travelport\UniversalRecord\StructType\AirReservationCriteria $airReservationCriteria = null): self
    {
        $this->AirReservationCriteria = $airReservationCriteria;
        
        return $this;
    }
    /**
     * Get HotelReservationCriteria value
     * @return \Travelport\UniversalRecord\StructType\HotelReservationCriteria|null
     */
    public function getHotelReservationCriteria(): ?\Travelport\UniversalRecord\StructType\HotelReservationCriteria
    {
        return $this->HotelReservationCriteria;
    }
    /**
     * Set HotelReservationCriteria value
     * @param \Travelport\UniversalRecord\StructType\HotelReservationCriteria $hotelReservationCriteria
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchReq
     */
    public function setHotelReservationCriteria(?\Travelport\UniversalRecord\StructType\HotelReservationCriteria $hotelReservationCriteria = null): self
    {
        $this->HotelReservationCriteria = $hotelReservationCriteria;
        
        return $this;
    }
    /**
     * Get VehicleReservationCriteria value
     * @return \Travelport\UniversalRecord\StructType\VehicleReservationCriteria|null
     */
    public function getVehicleReservationCriteria(): ?\Travelport\UniversalRecord\StructType\VehicleReservationCriteria
    {
        return $this->VehicleReservationCriteria;
    }
    /**
     * Set VehicleReservationCriteria value
     * @param \Travelport\UniversalRecord\StructType\VehicleReservationCriteria $vehicleReservationCriteria
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchReq
     */
    public function setVehicleReservationCriteria(?\Travelport\UniversalRecord\StructType\VehicleReservationCriteria $vehicleReservationCriteria = null): self
    {
        $this->VehicleReservationCriteria = $vehicleReservationCriteria;
        
        return $this;
    }
    /**
     * Get RailReservationCriteria value
     * @return \Travelport\UniversalRecord\StructType\RailReservationCriteria|null
     */
    public function getRailReservationCriteria(): ?\Travelport\UniversalRecord\StructType\RailReservationCriteria
    {
        return $this->RailReservationCriteria;
    }
    /**
     * Set RailReservationCriteria value
     * @param \Travelport\UniversalRecord\StructType\RailReservationCriteria $railReservationCriteria
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchReq
     */
    public function setRailReservationCriteria(?\Travelport\UniversalRecord\StructType\RailReservationCriteria $railReservationCriteria = null): self
    {
        $this->RailReservationCriteria = $railReservationCriteria;
        
        return $this;
    }
    /**
     * Get SearchAccount value
     * @return \Travelport\UniversalRecord\StructType\SearchAccount|null
     */
    public function getSearchAccount(): ?\Travelport\UniversalRecord\StructType\SearchAccount
    {
        return $this->SearchAccount;
    }
    /**
     * Set SearchAccount value
     * @param \Travelport\UniversalRecord\StructType\SearchAccount $searchAccount
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchReq
     */
    public function setSearchAccount(?\Travelport\UniversalRecord\StructType\SearchAccount $searchAccount = null): self
    {
        $this->SearchAccount = $searchAccount;
        
        return $this;
    }
    /**
     * Get ActionDate value
     * @return string|null
     */
    public function getActionDate(): ?string
    {
        return $this->ActionDate;
    }
    /**
     * Set ActionDate value
     * @param string $actionDate
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchReq
     */
    public function setActionDate(?string $actionDate = null): self
    {
        $this->ActionDate = $actionDate;
        
        return $this;
    }
    /**
     * Get RecordStatus value
     * @return string|null
     */
    public function getRecordStatus(): ?string
    {
        return $this->RecordStatus;
    }
    /**
     * Set RecordStatus value
     * @param string $recordStatus
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchReq
     */
    public function setRecordStatus(?string $recordStatus = null): self
    {
        $this->RecordStatus = $recordStatus;
        
        return $this;
    }
    /**
     * Get ClientId value
     * @return string|null
     */
    public function getClientId(): ?string
    {
        return $this->ClientId;
    }
    /**
     * Set ClientId value
     * @param string $clientId
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchReq
     */
    public function setClientId(?string $clientId = null): self
    {
        $this->ClientId = $clientId;
        
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
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchReq
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
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchReq
     */
    public function setProviderLocatorCode(?string $providerLocatorCode = null): self
    {
        $this->ProviderLocatorCode = $providerLocatorCode;
        
        return $this;
    }
    /**
     * Get ExternalSearchIndex value
     * @return string|null
     */
    public function getExternalSearchIndex(): ?string
    {
        return $this->ExternalSearchIndex;
    }
    /**
     * Set ExternalSearchIndex value
     * @param string $externalSearchIndex
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchReq
     */
    public function setExternalSearchIndex(?string $externalSearchIndex = null): self
    {
        $this->ExternalSearchIndex = $externalSearchIndex;
        
        return $this;
    }
    /**
     * Get RestrictToProfileId value
     * @return string|null
     */
    public function getRestrictToProfileId(): ?string
    {
        return $this->RestrictToProfileId;
    }
    /**
     * Set RestrictToProfileId value
     * @param string $restrictToProfileId
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchReq
     */
    public function setRestrictToProfileId(?string $restrictToProfileId = null): self
    {
        $this->RestrictToProfileId = $restrictToProfileId;
        
        return $this;
    }
    /**
     * Get PassiveOnly value
     * @return bool|null
     */
    public function getPassiveOnly(): ?bool
    {
        return $this->PassiveOnly;
    }
    /**
     * Set PassiveOnly value
     * @param bool $passiveOnly
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchReq
     */
    public function setPassiveOnly(?bool $passiveOnly = false): self
    {
        $this->PassiveOnly = $passiveOnly;
        
        return $this;
    }
    /**
     * Get TicketStatus value
     * @return string|null
     */
    public function getTicketStatus(): ?string
    {
        return $this->TicketStatus;
    }
    /**
     * Set TicketStatus value
     * @param string $ticketStatus
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordSearchReq
     */
    public function setTicketStatus(?string $ticketStatus = null): self
    {
        $this->TicketStatus = $ticketStatus;
        
        return $this;
    }
}
