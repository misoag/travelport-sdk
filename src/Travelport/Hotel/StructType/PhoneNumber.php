<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhoneNumber StructType
 * Meta information extracted from the WSDL
 * - documentation: Tagging provider reservation info with PhoneNumber. | Consists of type (office, home, fax), location (city code), the country code, the number, and an extension.
 * @subpackage Structs
 */
class PhoneNumber extends AbstractStructBase
{
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 83
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $Number;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ProviderReservationInfoRef
     * @var \Travelport\Hotel\StructType\ProviderReservationInfoRef[]
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
     * - use: optional
     * @var string|null
     */
    public ?string $Type = null;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - use: optional
     * @var string|null
     */
    public ?string $Location = null;
    /**
     * The CountryCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - use: optional
     * @var string|null
     */
    public ?string $CountryCode = null;
    /**
     * The AreaCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - use: optional
     * @var string|null
     */
    public ?string $AreaCode = null;
    /**
     * The Extension
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - use: optional
     * @var string|null
     */
    public ?string $Extension = null;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1024
     * - use: optional
     * @var string|null
     */
    public ?string $Text = null;
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
     * Constructor method for PhoneNumber
     * @uses PhoneNumber::setNumber()
     * @uses PhoneNumber::setProviderReservationInfoRef()
     * @uses PhoneNumber::setKey()
     * @uses PhoneNumber::setType()
     * @uses PhoneNumber::setLocation()
     * @uses PhoneNumber::setCountryCode()
     * @uses PhoneNumber::setAreaCode()
     * @uses PhoneNumber::setExtension()
     * @uses PhoneNumber::setText()
     * @uses PhoneNumber::setElStat()
     * @uses PhoneNumber::setKeyOverride()
     * @param string $number
     * @param \Travelport\Hotel\StructType\ProviderReservationInfoRef[] $providerReservationInfoRef
     * @param string $key
     * @param string $type
     * @param string $location
     * @param string $countryCode
     * @param string $areaCode
     * @param string $extension
     * @param string $text
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $number, ?array $providerReservationInfoRef = null, ?string $key = null, ?string $type = null, ?string $location = null, ?string $countryCode = null, ?string $areaCode = null, ?string $extension = null, ?string $text = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setNumber($number)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setKey($key)
            ->setType($type)
            ->setLocation($location)
            ->setCountryCode($countryCode)
            ->setAreaCode($areaCode)
            ->setExtension($extension)
            ->setText($text)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get Number value
     * @return string
     */
    public function getNumber(): string
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Travelport\Hotel\StructType\PhoneNumber
     */
    public function setNumber(string $number): self
    {
        $this->Number = $number;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfoRef value
     * @return \Travelport\Hotel\StructType\ProviderReservationInfoRef[]
     */
    public function getProviderReservationInfoRef(): ?array
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @param \Travelport\Hotel\StructType\ProviderReservationInfoRef[] $providerReservationInfoRef
     * @return \Travelport\Hotel\StructType\PhoneNumber
     */
    public function setProviderReservationInfoRef(?array $providerReservationInfoRef = null): self
    {
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Add item to ProviderReservationInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\ProviderReservationInfoRef $item
     * @return \Travelport\Hotel\StructType\PhoneNumber
     */
    public function addToProviderReservationInfoRef(\Travelport\Hotel\StructType\ProviderReservationInfoRef $item): self
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
     * @return \Travelport\Hotel\StructType\PhoneNumber
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
     * @return \Travelport\Hotel\StructType\PhoneNumber
     */
    public function setType(?string $type = null): self
    {
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \Travelport\Hotel\StructType\PhoneNumber
     */
    public function setLocation(?string $location = null): self
    {
        $this->Location = $location;
        
        return $this;
    }
    /**
     * Get CountryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->CountryCode;
    }
    /**
     * Set CountryCode value
     * @param string $countryCode
     * @return \Travelport\Hotel\StructType\PhoneNumber
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        $this->CountryCode = $countryCode;
        
        return $this;
    }
    /**
     * Get AreaCode value
     * @return string|null
     */
    public function getAreaCode(): ?string
    {
        return $this->AreaCode;
    }
    /**
     * Set AreaCode value
     * @param string $areaCode
     * @return \Travelport\Hotel\StructType\PhoneNumber
     */
    public function setAreaCode(?string $areaCode = null): self
    {
        $this->AreaCode = $areaCode;
        
        return $this;
    }
    /**
     * Get Extension value
     * @return string|null
     */
    public function getExtension(): ?string
    {
        return $this->Extension;
    }
    /**
     * Set Extension value
     * @param string $extension
     * @return \Travelport\Hotel\StructType\PhoneNumber
     */
    public function setExtension(?string $extension = null): self
    {
        $this->Extension = $extension;
        
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \Travelport\Hotel\StructType\PhoneNumber
     */
    public function setText(?string $text = null): self
    {
        $this->Text = $text;
        
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
     * @return \Travelport\Hotel\StructType\PhoneNumber
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
     * @return \Travelport\Hotel\StructType\PhoneNumber
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
