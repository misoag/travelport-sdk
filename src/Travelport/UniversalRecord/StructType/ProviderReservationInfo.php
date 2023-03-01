<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProviderReservationInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Provider Reservation informations | Represents a valid Provider Reservation/PNR.
 * @subpackage Structs
 */
class ProviderReservationInfo extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Key value of the provider reservation | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Key;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: Contains the Provider Code of the entity housing the actual reservation in the event this is a passive one. | 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: required
     * @var string
     */
    public string $ProviderCode;
    /**
     * The LocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Contains the Locator Code of the actual reservation in the event this is a passive reservation. | A Locator Code that uniquely identifies a Provider Reservation or searches for one.
     * - base: xs:string
     * - maxLength: 15
     * - use: required
     * @var string
     */
    public string $LocatorCode;
    /**
     * The CreateDate
     * Meta information extracted from the WSDL
     * - documentation: The date and time that this reservation was created.
     * - use: required
     * @var string
     */
    public string $CreateDate;
    /**
     * The ModifiedDate
     * Meta information extracted from the WSDL
     * - documentation: The date and time that this reservation was last modified for any reason.
     * - use: required
     * @var string
     */
    public string $ModifiedDate;
    /**
     * The ProviderReservationDetails
     * Meta information extracted from the WSDL
     * - choice: ProviderReservationDetails | ProviderReservationDisplayDetailsList
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * - minOccurs: 0
     * - ref: ProviderReservationDetails
     * @var \Travelport\UniversalRecord\StructType\ProviderReservationDetails|null
     */
    public ?\Travelport\UniversalRecord\StructType\ProviderReservationDetails $ProviderReservationDetails = null;
    /**
     * The ProviderReservationDisplayDetailsList
     * Meta information extracted from the WSDL
     * - choice: ProviderReservationDetails | ProviderReservationDisplayDetailsList
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * - minOccurs: 0
     * - ref: ProviderReservationDisplayDetailsList
     * @var \Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsList|null
     */
    public ?\Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsList $ProviderReservationDisplayDetailsList = null;
    /**
     * The HostCreateDate
     * Meta information extracted from the WSDL
     * - documentation: The date that this reservation was created in the host system.
     * - use: optional
     * @var string|null
     */
    public ?string $HostCreateDate = null;
    /**
     * The HostCreateTime
     * Meta information extracted from the WSDL
     * - documentation: The Time that this reservation was created in the host system for 1P.
     * - use: optional
     * @var string|null
     */
    public ?string $HostCreateTime = null;
    /**
     * The Imported
     * Meta information extracted from the WSDL
     * - documentation: Identifies a reservation that was originally created elsewhere and imported into a Universal Record.
     * - use: optional
     * @var bool|null
     */
    public ?bool $Imported = null;
    /**
     * The TicketingModifiersRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to a Ticketing Modifers which is attached to this PNR. Ticketing Modifers referred by this Key is a Primary Ticketing Modifers. Worldspan Primary DI line will be supported using this feature. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $TicketingModifiersRef = null;
    /**
     * The InQueueMode
     * Meta information extracted from the WSDL
     * - documentation: Identifies whether the gds pnr is being processed from the GDS queue.
     * - use: optional
     * @var bool|null
     */
    public ?bool $InQueueMode = null;
    /**
     * The GroupRef
     * Meta information extracted from the WSDL
     * - documentation: Represents a traveler group for Group booking and all their accompanying data. SUPPORTED PROVIDER: Worldspan. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $GroupRef = null;
    /**
     * The OwningPCC
     * Meta information extracted from the WSDL
     * - documentation: Indentifies the owning PCC of the PNR. PROVIDER SUPPORTED: Worldspan,Galileo and Apollo | 2 to 10 Letter Pseudo City Code
     * - base: xs:string
     * - maxLength: 10
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    public ?string $OwningPCC = null;
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
     * The AgentOverride
     * @var string|null
     */
    public ?string $AgentOverride = null;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Provider Reservation or searches for one.
     * - base: xs:string
     * - maxLength: 15
     * @var string|null
     */
    public ?string $ProviderLocatorCode = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * @var string|null
     */
    public ?string $SupplierCode = null;
    /**
     * Constructor method for ProviderReservationInfo
     * @uses ProviderReservationInfo::setKey()
     * @uses ProviderReservationInfo::setProviderCode()
     * @uses ProviderReservationInfo::setLocatorCode()
     * @uses ProviderReservationInfo::setCreateDate()
     * @uses ProviderReservationInfo::setModifiedDate()
     * @uses ProviderReservationInfo::setProviderReservationDetails()
     * @uses ProviderReservationInfo::setProviderReservationDisplayDetailsList()
     * @uses ProviderReservationInfo::setHostCreateDate()
     * @uses ProviderReservationInfo::setHostCreateTime()
     * @uses ProviderReservationInfo::setImported()
     * @uses ProviderReservationInfo::setTicketingModifiersRef()
     * @uses ProviderReservationInfo::setInQueueMode()
     * @uses ProviderReservationInfo::setGroupRef()
     * @uses ProviderReservationInfo::setOwningPCC()
     * @uses ProviderReservationInfo::setElStat()
     * @uses ProviderReservationInfo::setKeyOverride()
     * @uses ProviderReservationInfo::setAgentOverride()
     * @uses ProviderReservationInfo::setProviderLocatorCode()
     * @uses ProviderReservationInfo::setSupplierCode()
     * @param string $key
     * @param string $providerCode
     * @param string $locatorCode
     * @param string $createDate
     * @param string $modifiedDate
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationDetails $providerReservationDetails
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsList $providerReservationDisplayDetailsList
     * @param string $hostCreateDate
     * @param string $hostCreateTime
     * @param bool $imported
     * @param string $ticketingModifiersRef
     * @param bool $inQueueMode
     * @param string $groupRef
     * @param string $owningPCC
     * @param string $elStat
     * @param bool $keyOverride
     * @param string $agentOverride
     * @param string $providerLocatorCode
     * @param string $supplierCode
     */
    public function __construct(string $key, string $providerCode, string $locatorCode, string $createDate, string $modifiedDate, ?\Travelport\UniversalRecord\StructType\ProviderReservationDetails $providerReservationDetails = null, ?\Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsList $providerReservationDisplayDetailsList = null, ?string $hostCreateDate = null, ?string $hostCreateTime = null, ?bool $imported = null, ?string $ticketingModifiersRef = null, ?bool $inQueueMode = null, ?string $groupRef = null, ?string $owningPCC = null, ?string $elStat = null, ?bool $keyOverride = null, ?string $agentOverride = null, ?string $providerLocatorCode = null, ?string $supplierCode = null)
    {
        $this
            ->setKey($key)
            ->setProviderCode($providerCode)
            ->setLocatorCode($locatorCode)
            ->setCreateDate($createDate)
            ->setModifiedDate($modifiedDate)
            ->setProviderReservationDetails($providerReservationDetails)
            ->setProviderReservationDisplayDetailsList($providerReservationDisplayDetailsList)
            ->setHostCreateDate($hostCreateDate)
            ->setHostCreateTime($hostCreateTime)
            ->setImported($imported)
            ->setTicketingModifiersRef($ticketingModifiersRef)
            ->setInQueueMode($inQueueMode)
            ->setGroupRef($groupRef)
            ->setOwningPCC($owningPCC)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride)
            ->setAgentOverride($agentOverride)
            ->setProviderLocatorCode($providerLocatorCode)
            ->setSupplierCode($supplierCode);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get ProviderCode value
     * @return string
     */
    public function getProviderCode(): string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setProviderCode(string $providerCode): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get LocatorCode value
     * @return string
     */
    public function getLocatorCode(): string
    {
        return $this->LocatorCode;
    }
    /**
     * Set LocatorCode value
     * @param string $locatorCode
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setLocatorCode(string $locatorCode): self
    {
        $this->LocatorCode = $locatorCode;
        
        return $this;
    }
    /**
     * Get CreateDate value
     * @return string
     */
    public function getCreateDate(): string
    {
        return $this->CreateDate;
    }
    /**
     * Set CreateDate value
     * @param string $createDate
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setCreateDate(string $createDate): self
    {
        $this->CreateDate = $createDate;
        
        return $this;
    }
    /**
     * Get ModifiedDate value
     * @return string
     */
    public function getModifiedDate(): string
    {
        return $this->ModifiedDate;
    }
    /**
     * Set ModifiedDate value
     * @param string $modifiedDate
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setModifiedDate(string $modifiedDate): self
    {
        $this->ModifiedDate = $modifiedDate;
        
        return $this;
    }
    /**
     * Get ProviderReservationDetails value
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDetails|null
     */
    public function getProviderReservationDetails(): ?\Travelport\UniversalRecord\StructType\ProviderReservationDetails
    {
        return $this->ProviderReservationDetails ?? null;
    }
    /**
     * Set ProviderReservationDetails value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationDetails $providerReservationDetails
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setProviderReservationDetails(?\Travelport\UniversalRecord\StructType\ProviderReservationDetails $providerReservationDetails = null): self
    {
        if (is_null($providerReservationDetails) || (is_array($providerReservationDetails) && empty($providerReservationDetails))) {
            unset($this->ProviderReservationDetails);
        } else {
            $this->ProviderReservationDetails = $providerReservationDetails;
        }
        
        return $this;
    }
    /**
     * Get ProviderReservationDisplayDetailsList value
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsList|null
     */
    public function getProviderReservationDisplayDetailsList(): ?\Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsList
    {
        return $this->ProviderReservationDisplayDetailsList ?? null;
    }
    /**
     * Set ProviderReservationDisplayDetailsList value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsList $providerReservationDisplayDetailsList
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setProviderReservationDisplayDetailsList(?\Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsList $providerReservationDisplayDetailsList = null): self
    {
        if (is_null($providerReservationDisplayDetailsList) || (is_array($providerReservationDisplayDetailsList) && empty($providerReservationDisplayDetailsList))) {
            unset($this->ProviderReservationDisplayDetailsList);
        } else {
            $this->ProviderReservationDisplayDetailsList = $providerReservationDisplayDetailsList;
        }
        
        return $this;
    }
    /**
     * Get HostCreateDate value
     * @return string|null
     */
    public function getHostCreateDate(): ?string
    {
        return $this->HostCreateDate;
    }
    /**
     * Set HostCreateDate value
     * @param string $hostCreateDate
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setHostCreateDate(?string $hostCreateDate = null): self
    {
        $this->HostCreateDate = $hostCreateDate;
        
        return $this;
    }
    /**
     * Get HostCreateTime value
     * @return string|null
     */
    public function getHostCreateTime(): ?string
    {
        return $this->HostCreateTime;
    }
    /**
     * Set HostCreateTime value
     * @param string $hostCreateTime
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setHostCreateTime(?string $hostCreateTime = null): self
    {
        $this->HostCreateTime = $hostCreateTime;
        
        return $this;
    }
    /**
     * Get Imported value
     * @return bool|null
     */
    public function getImported(): ?bool
    {
        return $this->Imported;
    }
    /**
     * Set Imported value
     * @param bool $imported
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setImported(?bool $imported = null): self
    {
        $this->Imported = $imported;
        
        return $this;
    }
    /**
     * Get TicketingModifiersRef value
     * @return string|null
     */
    public function getTicketingModifiersRef(): ?string
    {
        return $this->TicketingModifiersRef;
    }
    /**
     * Set TicketingModifiersRef value
     * @param string $ticketingModifiersRef
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setTicketingModifiersRef(?string $ticketingModifiersRef = null): self
    {
        $this->TicketingModifiersRef = $ticketingModifiersRef;
        
        return $this;
    }
    /**
     * Get InQueueMode value
     * @return bool|null
     */
    public function getInQueueMode(): ?bool
    {
        return $this->InQueueMode;
    }
    /**
     * Set InQueueMode value
     * @param bool $inQueueMode
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setInQueueMode(?bool $inQueueMode = null): self
    {
        $this->InQueueMode = $inQueueMode;
        
        return $this;
    }
    /**
     * Get GroupRef value
     * @return string|null
     */
    public function getGroupRef(): ?string
    {
        return $this->GroupRef;
    }
    /**
     * Set GroupRef value
     * @param string $groupRef
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setGroupRef(?string $groupRef = null): self
    {
        $this->GroupRef = $groupRef;
        
        return $this;
    }
    /**
     * Get OwningPCC value
     * @return string|null
     */
    public function getOwningPCC(): ?string
    {
        return $this->OwningPCC;
    }
    /**
     * Set OwningPCC value
     * @param string $owningPCC
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setOwningPCC(?string $owningPCC = null): self
    {
        $this->OwningPCC = $owningPCC;
        
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
    /**
     * Get AgentOverride value
     * @return string|null
     */
    public function getAgentOverride(): ?string
    {
        return $this->AgentOverride;
    }
    /**
     * Set AgentOverride value
     * @param string $agentOverride
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setAgentOverride(?string $agentOverride = null): self
    {
        $this->AgentOverride = $agentOverride;
        
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setProviderLocatorCode(?string $providerLocatorCode = null): self
    {
        $this->ProviderLocatorCode = $providerLocatorCode;
        
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
}
