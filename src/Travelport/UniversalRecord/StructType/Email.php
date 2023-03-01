<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Email StructType
 * Meta information extracted from the WSDL
 * - documentation: Tagging provider reservation info with Email. | Container for an email address with a type specifier (max 128 chars)
 * @subpackage Structs
 */
class Email extends AbstractStructBase
{
    /**
     * The EmailID
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $EmailID;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ProviderReservationInfoRef
     * @var \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef[]
     */
    public ?array $ProviderReservationInfoRef = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: An identifier that labels this email address (Personal, Business, Agency, etc)
     * - base: xs:string
     * - maxLength: 128
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $Type = null;
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - documentation: Mail comment is used to include one line of freeform information.
     * - base: xs:string
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $Comment = null;
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
     * Constructor method for Email
     * @uses Email::setEmailID()
     * @uses Email::setProviderReservationInfoRef()
     * @uses Email::setKey()
     * @uses Email::setType()
     * @uses Email::setComment()
     * @uses Email::setElStat()
     * @uses Email::setKeyOverride()
     * @param string $emailID
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef[] $providerReservationInfoRef
     * @param string $key
     * @param string $type
     * @param string $comment
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $emailID, ?array $providerReservationInfoRef = null, ?string $key = null, ?string $type = null, ?string $comment = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setEmailID($emailID)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setKey($key)
            ->setType($type)
            ->setComment($comment)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get EmailID value
     * @return string
     */
    public function getEmailID(): string
    {
        return $this->EmailID;
    }
    /**
     * Set EmailID value
     * @param string $emailID
     * @return \Travelport\UniversalRecord\StructType\Email
     */
    public function setEmailID(string $emailID): self
    {
        $this->EmailID = $emailID;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfoRef value
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef[]
     */
    public function getProviderReservationInfoRef(): ?array
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef[] $providerReservationInfoRef
     * @return \Travelport\UniversalRecord\StructType\Email
     */
    public function setProviderReservationInfoRef(?array $providerReservationInfoRef = null): self
    {
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Add item to ProviderReservationInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef $item
     * @return \Travelport\UniversalRecord\StructType\Email
     */
    public function addToProviderReservationInfoRef(\Travelport\UniversalRecord\StructType\ProviderReservationInfoRef $item): self
    {
        $this->ProviderReservationInfoRef[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\Email
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\Email
     */
    public function setType(?string $type = null): self
    {
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \Travelport\UniversalRecord\StructType\Email
     */
    public function setComment(?string $comment = null): self
    {
        $this->Comment = $comment;
        
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
     * @return \Travelport\UniversalRecord\StructType\Email
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
     * @return \Travelport\UniversalRecord\StructType\Email
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
