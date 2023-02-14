<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
    protected int $Queue;
    /**
     * The DateTime
     * Meta information extracted from the WSDL
     * - documentation: Date and Time to place message on designated Queue, Should be prior to the last segment date in the PNR.
     * - use: required
     * @var string
     */
    protected string $DateTime;
    /**
     * The Remarks
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 300
     * - use: required
     * @var string
     */
    protected string $Remarks;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Returned in response. Use it for update of saved review booking. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The QueueCategory
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $QueueCategory = null;
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
    protected ?string $PseudoCityCode = null;
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
    protected ?string $ProviderCode = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Provider Reservation reference. Returned in the response. Use it for update of saved Review Booking. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderReservationInfoRef = null;
    /**
     * The ElStat
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to show the action results of an element. Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
     * - type: typeElementStatus
     * - use: optional
     * @var string|null
     */
    protected ?string $ElStat = null;
    /**
     * The KeyOverride
     * Meta information extracted from the WSDL
     * - documentation: If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
     * - type: xs:boolean
     * @var bool|null
     */
    protected ?bool $KeyOverride = null;
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
     * @return \StructType\ReviewBooking
     */
    public function setQueue(int $queue): self
    {
        // validation for constraint: int
        if (!is_null($queue) && !(is_int($queue) || ctype_digit($queue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($queue, true), gettype($queue)), __LINE__);
        }
        // validation for constraint: maxInclusive(99)
        if (!is_null($queue) && $queue > 99) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 99', var_export($queue, true)), __LINE__);
        }
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
     * @return \StructType\ReviewBooking
     */
    public function setDateTime(string $dateTime): self
    {
        // validation for constraint: string
        if (!is_null($dateTime) && !is_string($dateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateTime, true), gettype($dateTime)), __LINE__);
        }
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
     * @return \StructType\ReviewBooking
     */
    public function setRemarks(string $remarks): self
    {
        // validation for constraint: string
        if (!is_null($remarks) && !is_string($remarks)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remarks, true), gettype($remarks)), __LINE__);
        }
        // validation for constraint: maxLength(300)
        if (!is_null($remarks) && mb_strlen((string) $remarks) > 300) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 300', mb_strlen((string) $remarks)), __LINE__);
        }
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
     * @return \StructType\ReviewBooking
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
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
     * @return \StructType\ReviewBooking
     */
    public function setQueueCategory(?string $queueCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($queueCategory) && !is_string($queueCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queueCategory, true), gettype($queueCategory)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($queueCategory) && mb_strlen((string) $queueCategory) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $queueCategory)), __LINE__);
        }
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
     * @return \StructType\ReviewBooking
     */
    public function setPseudoCityCode(?string $pseudoCityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($pseudoCityCode) && !is_string($pseudoCityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pseudoCityCode, true), gettype($pseudoCityCode)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($pseudoCityCode) && mb_strlen((string) $pseudoCityCode) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $pseudoCityCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($pseudoCityCode) && mb_strlen((string) $pseudoCityCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $pseudoCityCode)), __LINE__);
        }
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
     * @return \StructType\ReviewBooking
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        // validation for constraint: string
        if (!is_null($providerCode) && !is_string($providerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerCode, true), gettype($providerCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $providerCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $providerCode)), __LINE__);
        }
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
     * @return \StructType\ReviewBooking
     */
    public function setProviderReservationInfoRef(?string $providerReservationInfoRef = null): self
    {
        // validation for constraint: string
        if (!is_null($providerReservationInfoRef) && !is_string($providerReservationInfoRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerReservationInfoRef, true), gettype($providerReservationInfoRef)), __LINE__);
        }
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
     * @uses \EnumType\TypeElementStatus::valueIsValid()
     * @uses \EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \StructType\ReviewBooking
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \EnumType\TypeElementStatus::getValidValues())), __LINE__);
        }
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
     * @return \StructType\ReviewBooking
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        // validation for constraint: boolean
        if (!is_null($keyOverride) && !is_bool($keyOverride)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keyOverride, true), gettype($keyOverride)), __LINE__);
        }
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
