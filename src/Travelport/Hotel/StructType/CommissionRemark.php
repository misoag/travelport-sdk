<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommissionRemark StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifies the agency commision remarks. Specifically used for Worldspan.
 * @subpackage Structs
 */
class CommissionRemark extends AbstractStructBase
{
    /**
     * The ProviderReservationLevel
     * Meta information extracted from the WSDL
     * - choice: ProviderReservationLevel | PassengerTypeLevel
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Travelport\Hotel\StructType\ProviderReservationLevel|null
     */
    public ?\Travelport\Hotel\StructType\ProviderReservationLevel $ProviderReservationLevel = null;
    /**
     * The PassengerTypeLevel
     * Meta information extracted from the WSDL
     * - choice: ProviderReservationLevel | PassengerTypeLevel
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 4
     * @var \Travelport\Hotel\StructType\PassengerTypeLevel[]
     */
    public ?array $PassengerTypeLevel = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Key to be used for internal processing. | Reference type
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
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: Contains the Provider Code of the provider for which this accounting remark is used | 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderCode = null;
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
     * Constructor method for CommissionRemark
     * @uses CommissionRemark::setProviderReservationLevel()
     * @uses CommissionRemark::setPassengerTypeLevel()
     * @uses CommissionRemark::setKey()
     * @uses CommissionRemark::setProviderReservationInfoRef()
     * @uses CommissionRemark::setProviderCode()
     * @uses CommissionRemark::setElStat()
     * @uses CommissionRemark::setKeyOverride()
     * @param \Travelport\Hotel\StructType\ProviderReservationLevel $providerReservationLevel
     * @param \Travelport\Hotel\StructType\PassengerTypeLevel[] $passengerTypeLevel
     * @param string $key
     * @param string $providerReservationInfoRef
     * @param string $providerCode
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(?\Travelport\Hotel\StructType\ProviderReservationLevel $providerReservationLevel = null, ?array $passengerTypeLevel = null, ?string $key = null, ?string $providerReservationInfoRef = null, ?string $providerCode = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setProviderReservationLevel($providerReservationLevel)
            ->setPassengerTypeLevel($passengerTypeLevel)
            ->setKey($key)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setProviderCode($providerCode)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get ProviderReservationLevel value
     * @return \Travelport\Hotel\StructType\ProviderReservationLevel|null
     */
    public function getProviderReservationLevel(): ?\Travelport\Hotel\StructType\ProviderReservationLevel
    {
        return $this->ProviderReservationLevel ?? null;
    }
    /**
     * Set ProviderReservationLevel value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Hotel\StructType\ProviderReservationLevel $providerReservationLevel
     * @return \Travelport\Hotel\StructType\CommissionRemark
     */
    public function setProviderReservationLevel(?\Travelport\Hotel\StructType\ProviderReservationLevel $providerReservationLevel = null): self
    {
        if (is_null($providerReservationLevel) || (is_array($providerReservationLevel) && empty($providerReservationLevel))) {
            unset($this->ProviderReservationLevel);
        } else {
            $this->ProviderReservationLevel = $providerReservationLevel;
        }
        
        return $this;
    }
    /**
     * Get PassengerTypeLevel value
     * @return \Travelport\Hotel\StructType\PassengerTypeLevel[]|null
     */
    public function getPassengerTypeLevel(): ?array
    {
        return $this->PassengerTypeLevel ?? null;
    }
    /**
     * Set PassengerTypeLevel value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Hotel\StructType\PassengerTypeLevel[] $passengerTypeLevel
     * @return \Travelport\Hotel\StructType\CommissionRemark
     */
    public function setPassengerTypeLevel(?array $passengerTypeLevel = null): self
    {
        if (is_null($passengerTypeLevel) || (is_array($passengerTypeLevel) && empty($passengerTypeLevel))) {
            unset($this->PassengerTypeLevel);
        } else {
            $this->PassengerTypeLevel = $passengerTypeLevel;
        }
        
        return $this;
    }
    /**
     * Add item to PassengerTypeLevel value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\PassengerTypeLevel $item
     * @return \Travelport\Hotel\StructType\CommissionRemark
     */
    public function addToPassengerTypeLevel(\Travelport\Hotel\StructType\PassengerTypeLevel $item): self
    {
        $this->PassengerTypeLevel[] = $item;
        
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
     * @return \Travelport\Hotel\StructType\CommissionRemark
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
     * @return \Travelport\Hotel\StructType\CommissionRemark
     */
    public function setProviderReservationInfoRef(?string $providerReservationInfoRef = null): self
    {
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
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
     * @return \Travelport\Hotel\StructType\CommissionRemark
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        $this->ProviderCode = $providerCode;
        
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
     * @return \Travelport\Hotel\StructType\CommissionRemark
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
     * @return \Travelport\Hotel\StructType\CommissionRemark
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
