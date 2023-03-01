<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ActionStatus StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the Provider Code of the provider for which this ActionStatus is used and the airline/vendor code issuing the ticket. Used with Time Limit and TAW. | Status of the action that will happen or has happened to the air
 * reservation. One Action status for each provider reservation
 * @subpackage Structs
 */
class ActionStatus extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Type;
    /**
     * The Remark
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Remark
     * @var \Travelport\Air\StructType\Remark|null
     */
    public ?\Travelport\Air\StructType\Remark $Remark = null;
    /**
     * The TicketDate
     * Meta information extracted from the WSDL
     * - documentation: Identifies when the action type will happen, or has happened according to the type.
     * - use: optional
     * @var string|null
     */
    public ?string $TicketDate = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Identifies when the action type will happen, or has happened according to the type. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Provider reservation reference key. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderReservationInfoRef = null;
    /**
     * The QueueCategory
     * Meta information extracted from the WSDL
     * - documentation: Add Category placement to ticketing queue (required in 1P - default is 00) | At least one character data in Next Result Reference
     * - base: xs:string
     * - minLength: 1
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $QueueCategory = null;
    /**
     * The AirportCode
     * Meta information extracted from the WSDL
     * - documentation: Used with Time Limit to specify the airport location where the ticket is to be issued. | 3 Letter Airport Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    public ?string $AirportCode = null;
    /**
     * The PseudoCityCode
     * Meta information extracted from the WSDL
     * - documentation: The Branch PCC in the host system where PNR can be queued for ticketing. When used with TAU it will auto queue to Q10. When used with TAW agent performs manual move to Q. | 2 to 10 Letter Pseudo City Code
     * - base: xs:string
     * - maxLength: 10
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    public ?string $PseudoCityCode = null;
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - documentation: Used with TAW. Used to specify a corporate or in house account code to the PNR as part of ticketing arrangement field.
     * - use: optional
     * @var string|null
     */
    public ?string $AccountCode = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - type: typeProviderCode
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderCode = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - type: typeSupplierCode
     * - use: optional
     * @var string|null
     */
    public ?string $SupplierCode = null;
    /**
     * The ElStat
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to show the action results of an element. Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
     * - type: typeElementStatus
     * - use: optional
     * @var string|null
     */
    public ?string $ElStat = null;
    /**
     * The KeyOverride
     * Meta information extracted from the WSDL
     * - documentation: If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
     * - type: xs:boolean
     * @var bool|null
     */
    public ?bool $KeyOverride = null;
    /**
     * Constructor method for ActionStatus
     * @uses ActionStatus::setType()
     * @uses ActionStatus::setRemark()
     * @uses ActionStatus::setTicketDate()
     * @uses ActionStatus::setKey()
     * @uses ActionStatus::setProviderReservationInfoRef()
     * @uses ActionStatus::setQueueCategory()
     * @uses ActionStatus::setAirportCode()
     * @uses ActionStatus::setPseudoCityCode()
     * @uses ActionStatus::setAccountCode()
     * @uses ActionStatus::setProviderCode()
     * @uses ActionStatus::setSupplierCode()
     * @uses ActionStatus::setElStat()
     * @uses ActionStatus::setKeyOverride()
     * @param string $type
     * @param \Travelport\Air\StructType\Remark $remark
     * @param string $ticketDate
     * @param string $key
     * @param string $providerReservationInfoRef
     * @param string $queueCategory
     * @param string $airportCode
     * @param string $pseudoCityCode
     * @param string $accountCode
     * @param string $providerCode
     * @param string $supplierCode
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $type, ?\Travelport\Air\StructType\Remark $remark = null, ?string $ticketDate = null, ?string $key = null, ?string $providerReservationInfoRef = null, ?string $queueCategory = null, ?string $airportCode = null, ?string $pseudoCityCode = null, ?string $accountCode = null, ?string $providerCode = null, ?string $supplierCode = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setType($type)
            ->setRemark($remark)
            ->setTicketDate($ticketDate)
            ->setKey($key)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setQueueCategory($queueCategory)
            ->setAirportCode($airportCode)
            ->setPseudoCityCode($pseudoCityCode)
            ->setAccountCode($accountCode)
            ->setProviderCode($providerCode)
            ->setSupplierCode($supplierCode)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\Air\StructType\ActionStatus
     */
    public function setType(string $type): self
    {
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Remark value
     * @return \Travelport\Air\StructType\Remark|null
     */
    public function getRemark(): ?\Travelport\Air\StructType\Remark
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param \Travelport\Air\StructType\Remark $remark
     * @return \Travelport\Air\StructType\ActionStatus
     */
    public function setRemark(?\Travelport\Air\StructType\Remark $remark = null): self
    {
        $this->Remark = $remark;
        
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
     * @return \Travelport\Air\StructType\ActionStatus
     */
    public function setTicketDate(?string $ticketDate = null): self
    {
        $this->TicketDate = $ticketDate;
        
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
     * @return \Travelport\Air\StructType\ActionStatus
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfoRef value
     * @return string|null
     */
    public function getProviderReservationInfoRef(): ?string
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @param string $providerReservationInfoRef
     * @return \Travelport\Air\StructType\ActionStatus
     */
    public function setProviderReservationInfoRef(?string $providerReservationInfoRef = null): self
    {
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Get QueueCategory value
     * @return string|null
     */
    public function getQueueCategory(): ?string
    {
        return $this->QueueCategory;
    }
    /**
     * Set QueueCategory value
     * @param string $queueCategory
     * @return \Travelport\Air\StructType\ActionStatus
     */
    public function setQueueCategory(?string $queueCategory = null): self
    {
        $this->QueueCategory = $queueCategory;
        
        return $this;
    }
    /**
     * Get AirportCode value
     * @return string|null
     */
    public function getAirportCode(): ?string
    {
        return $this->AirportCode;
    }
    /**
     * Set AirportCode value
     * @param string $airportCode
     * @return \Travelport\Air\StructType\ActionStatus
     */
    public function setAirportCode(?string $airportCode = null): self
    {
        $this->AirportCode = $airportCode;
        
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
     * @return \Travelport\Air\StructType\ActionStatus
     */
    public function setPseudoCityCode(?string $pseudoCityCode = null): self
    {
        $this->PseudoCityCode = $pseudoCityCode;
        
        return $this;
    }
    /**
     * Get AccountCode value
     * @return string|null
     */
    public function getAccountCode(): ?string
    {
        return $this->AccountCode;
    }
    /**
     * Set AccountCode value
     * @param string $accountCode
     * @return \Travelport\Air\StructType\ActionStatus
     */
    public function setAccountCode(?string $accountCode = null): self
    {
        $this->AccountCode = $accountCode;
        
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
     * @return \Travelport\Air\StructType\ActionStatus
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        $this->ProviderCode = $providerCode;
        
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
     * @return \Travelport\Air\StructType\ActionStatus
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        $this->SupplierCode = $supplierCode;
        
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
     * @return \Travelport\Air\StructType\ActionStatus
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
     * @return \Travelport\Air\StructType\ActionStatus
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
