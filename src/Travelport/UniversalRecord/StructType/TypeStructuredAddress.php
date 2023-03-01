<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeStructuredAddress StructType
 * Meta information extracted from the WSDL
 * - documentation: Tagging provider reservation info with Address. | The State or Province of address requested, e.g. CA, Ontario. | A fully structured address
 * @subpackage Structs
 */
class TypeStructuredAddress extends AbstractStructBase
{
    /**
     * The AddressName
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 128
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $AddressName = null;
    /**
     * The Street
     * Meta information extracted from the WSDL
     * - documentation: The Address street and number, e.g. 105 Main St.
     * - base: xs:string
     * - maxLength: 255
     * - maxOccurs: 5
     * - minLength: 1
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $Street = null;
    /**
     * The City
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - minLength: 2
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $City = null;
    /**
     * The State
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: State
     * @var \Travelport\UniversalRecord\StructType\State|null
     */
    public ?\Travelport\UniversalRecord\StructType\State $State = null;
    /**
     * The PostalCode
     * Meta information extracted from the WSDL
     * - documentation: The 5-15 alphanumeric postal Code for the requested address, e.g. 90210.
     * - base: xs:string
     * - maxLength: 15
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $PostalCode = null;
    /**
     * The Country
     * Meta information extracted from the WSDL
     * - documentation: The Full country name or two letter ISO country code e.g. US, France. A two letter country code is required for a Postal Code Searches.
     * - base: xs:string
     * - length: 2
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $Country = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: ProviderReservationInfoRef
     * @var \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef[]
     */
    public ?array $ProviderReservationInfoRef = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Key for update/delete of the element | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
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
     * Constructor method for typeStructuredAddress
     * @uses TypeStructuredAddress::setAddressName()
     * @uses TypeStructuredAddress::setStreet()
     * @uses TypeStructuredAddress::setCity()
     * @uses TypeStructuredAddress::setState()
     * @uses TypeStructuredAddress::setPostalCode()
     * @uses TypeStructuredAddress::setCountry()
     * @uses TypeStructuredAddress::setProviderReservationInfoRef()
     * @uses TypeStructuredAddress::setKey()
     * @uses TypeStructuredAddress::setElStat()
     * @uses TypeStructuredAddress::setKeyOverride()
     * @param string $addressName
     * @param string[] $street
     * @param string $city
     * @param \Travelport\UniversalRecord\StructType\State $state
     * @param string $postalCode
     * @param string $country
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef[] $providerReservationInfoRef
     * @param string $key
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(?string $addressName = null, ?array $street = null, ?string $city = null, ?\Travelport\UniversalRecord\StructType\State $state = null, ?string $postalCode = null, ?string $country = null, ?array $providerReservationInfoRef = null, ?string $key = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setAddressName($addressName)
            ->setStreet($street)
            ->setCity($city)
            ->setState($state)
            ->setPostalCode($postalCode)
            ->setCountry($country)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setKey($key)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get AddressName value
     * @return string|null
     */
    public function getAddressName(): ?string
    {
        return $this->AddressName;
    }
    /**
     * Set AddressName value
     * @param string $addressName
     * @return \Travelport\UniversalRecord\StructType\TypeStructuredAddress
     */
    public function setAddressName(?string $addressName = null): self
    {
        $this->AddressName = $addressName;
        
        return $this;
    }
    /**
     * Get Street value
     * @return string[]
     */
    public function getStreet(): ?array
    {
        return $this->Street;
    }
    /**
     * Set Street value
     * @param string[] $street
     * @return \Travelport\UniversalRecord\StructType\TypeStructuredAddress
     */
    public function setStreet(?array $street = null): self
    {
        $this->Street = $street;
        
        return $this;
    }
    /**
     * Add item to Street value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\TypeStructuredAddress
     */
    public function addToStreet(string $item): self
    {
        $this->Street[] = $item;
        
        return $this;
    }
    /**
     * Get City value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param string $city
     * @return \Travelport\UniversalRecord\StructType\TypeStructuredAddress
     */
    public function setCity(?string $city = null): self
    {
        $this->City = $city;
        
        return $this;
    }
    /**
     * Get State value
     * @return \Travelport\UniversalRecord\StructType\State|null
     */
    public function getState(): ?\Travelport\UniversalRecord\StructType\State
    {
        return $this->State;
    }
    /**
     * Set State value
     * @param \Travelport\UniversalRecord\StructType\State $state
     * @return \Travelport\UniversalRecord\StructType\TypeStructuredAddress
     */
    public function setState(?\Travelport\UniversalRecord\StructType\State $state = null): self
    {
        $this->State = $state;
        
        return $this;
    }
    /**
     * Get PostalCode value
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param string $postalCode
     * @return \Travelport\UniversalRecord\StructType\TypeStructuredAddress
     */
    public function setPostalCode(?string $postalCode = null): self
    {
        $this->PostalCode = $postalCode;
        
        return $this;
    }
    /**
     * Get Country value
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @param string $country
     * @return \Travelport\UniversalRecord\StructType\TypeStructuredAddress
     */
    public function setCountry(?string $country = null): self
    {
        $this->Country = $country;
        
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
     * @return \Travelport\UniversalRecord\StructType\TypeStructuredAddress
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
     * @return \Travelport\UniversalRecord\StructType\TypeStructuredAddress
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
     * @return \Travelport\UniversalRecord\StructType\TypeStructuredAddress
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
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
     * @return \Travelport\UniversalRecord\StructType\TypeStructuredAddress
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
     * @return \Travelport\UniversalRecord\StructType\TypeStructuredAddress
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
