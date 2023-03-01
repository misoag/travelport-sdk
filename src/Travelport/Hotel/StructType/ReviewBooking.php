<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviewBooking StructType
 * Meta information extracted from the WSDL
 * - documentation: Review Booking or Queue Minders is to add the reminders in the Provider Reservation along with the date time and Queue details. On the date time defined in reminders, the message along with the PNR goes to the desired Queue.
 * @subpackage Structs
 */
class ReviewBooking extends AbstractStructBase
{
    /**
     * The Queue
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - maxInclusive: 99
     * - use: required
     * @var int
     */
    public int $Queue;
    /**
     * The DateTime
     * Meta information extracted from the WSDL
     * - documentation: Date and Time to place message on designated Queue, Should be prior to the last segment date in the PNR.
     * - use: required
     * @var string
     */
    public string $DateTime;
    /**
     * The Remarks
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 300
     * - use: required
     * @var string
     */
    public string $Remarks;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Returned in response. Use it for update of saved review booking. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The QueueCategory
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - use: optional
     * @var string|null
     */
    public ?string $QueueCategory = null;
    /**
     * The PseudoCityCode
     * Meta information extracted from the WSDL
     * - documentation: Input PCC optional value for placing the PNR into Queue. If not passed, will add as default PNR's Pseudo. | 2 to 10 Letter Pseudo City Code
     * - base: xs:string
     * - maxLength: 10
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    public ?string $PseudoCityCode = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: The code of the Provider (e.g 1G,1V). | 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderCode = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Provider Reservation reference. Returned in the response. Use it for update of saved Review Booking. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderReservationInfoRef = null;
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
     * Constructor method for ReviewBooking
     * @uses ReviewBooking::setQueue()
     * @uses ReviewBooking::setDateTime()
     * @uses ReviewBooking::setRemarks()
     * @uses ReviewBooking::setKey()
     * @uses ReviewBooking::setQueueCategory()
     * @uses ReviewBooking::setPseudoCityCode()
     * @uses ReviewBooking::setProviderCode()
     * @uses ReviewBooking::setProviderReservationInfoRef()
     * @uses ReviewBooking::setElStat()
     * @uses ReviewBooking::setKeyOverride()
     * @param int $queue
     * @param string $dateTime
     * @param string $remarks
     * @param string $key
     * @param string $queueCategory
     * @param string $pseudoCityCode
     * @param string $providerCode
     * @param string $providerReservationInfoRef
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(int $queue, string $dateTime, string $remarks, ?string $key = null, ?string $queueCategory = null, ?string $pseudoCityCode = null, ?string $providerCode = null, ?string $providerReservationInfoRef = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setQueue($queue)
            ->setDateTime($dateTime)
            ->setRemarks($remarks)
            ->setKey($key)
            ->setQueueCategory($queueCategory)
            ->setPseudoCityCode($pseudoCityCode)
            ->setProviderCode($providerCode)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get Queue value
     * @return int
     */
    public function getQueue(): int
    {
        return $this->Queue;
    }
    /**
     * Set Queue value
     * @param int $queue
     * @return \Travelport\Hotel\StructType\ReviewBooking
     */
    public function setQueue(int $queue): self
    {
        $this->Queue = $queue;
        
        return $this;
    }
    /**
     * Get DateTime value
     * @return string
     */
    public function getDateTime(): string
    {
        return $this->DateTime;
    }
    /**
     * Set DateTime value
     * @param string $dateTime
     * @return \Travelport\Hotel\StructType\ReviewBooking
     */
    public function setDateTime(string $dateTime): self
    {
        $this->DateTime = $dateTime;
        
        return $this;
    }
    /**
     * Get Remarks value
     * @return string
     */
    public function getRemarks(): string
    {
        return $this->Remarks;
    }
    /**
     * Set Remarks value
     * @param string $remarks
     * @return \Travelport\Hotel\StructType\ReviewBooking
     */
    public function setRemarks(string $remarks): self
    {
        $this->Remarks = $remarks;
        
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
     * @return \Travelport\Hotel\StructType\ReviewBooking
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
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
     * @return \Travelport\Hotel\StructType\ReviewBooking
     */
    public function setQueueCategory(?string $queueCategory = null): self
    {
        $this->QueueCategory = $queueCategory;
        
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
     * @return \Travelport\Hotel\StructType\ReviewBooking
     */
    public function setPseudoCityCode(?string $pseudoCityCode = null): self
    {
        $this->PseudoCityCode = $pseudoCityCode;
        
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
     * @return \Travelport\Hotel\StructType\ReviewBooking
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        $this->ProviderCode = $providerCode;
        
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
     * @return \Travelport\Hotel\StructType\ReviewBooking
     */
    public function setProviderReservationInfoRef(?string $providerReservationInfoRef = null): self
    {
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
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
     * @return \Travelport\Hotel\StructType\ReviewBooking
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
     * @return \Travelport\Hotel\StructType\ReviewBooking
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
