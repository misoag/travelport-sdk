<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
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
    protected string $Number;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ProviderReservationInfoRef
     * @var \Travelport\Hotel\StructType\ProviderReservationInfoRef[]
     */
    protected ?array $ProviderReservationInfoRef = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - use: optional
     * @var string|null
     */
    protected ?string $Location = null;
    /**
     * The CountryCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - use: optional
     * @var string|null
     */
    protected ?string $CountryCode = null;
    /**
     * The AreaCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - use: optional
     * @var string|null
     */
    protected ?string $AreaCode = null;
    /**
     * The Extension
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - use: optional
     * @var string|null
     */
    protected ?string $Extension = null;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1024
     * - use: optional
     * @var string|null
     */
    protected ?string $Text = null;
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
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        // validation for constraint: maxLength(83)
        if (!is_null($number) && mb_strlen((string) $number) > 83) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 83', mb_strlen((string) $number)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($number) && mb_strlen((string) $number) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $number)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setProviderReservationInfoRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProviderReservationInfoRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProviderReservationInfoRefForArrayConstraintsFromSetProviderReservationInfoRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $phoneNumberProviderReservationInfoRefItem) {
            // validation for constraint: itemType
            if (!$phoneNumberProviderReservationInfoRefItem instanceof \Travelport\Hotel\StructType\ProviderReservationInfoRef) {
                $invalidValues[] = is_object($phoneNumberProviderReservationInfoRefItem) ? get_class($phoneNumberProviderReservationInfoRefItem) : sprintf('%s(%s)', gettype($phoneNumberProviderReservationInfoRefItem), var_export($phoneNumberProviderReservationInfoRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProviderReservationInfoRef property can only contain items of type \Travelport\Hotel\StructType\ProviderReservationInfoRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\ProviderReservationInfoRef[] $providerReservationInfoRef
     * @return \Travelport\Hotel\StructType\PhoneNumber
     */
    public function setProviderReservationInfoRef(?array $providerReservationInfoRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($providerReservationInfoRefArrayErrorMessage = self::validateProviderReservationInfoRefForArrayConstraintsFromSetProviderReservationInfoRef($providerReservationInfoRef))) {
            throw new InvalidArgumentException($providerReservationInfoRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($providerReservationInfoRef) && count($providerReservationInfoRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($providerReservationInfoRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\ProviderReservationInfoRef) {
            throw new InvalidArgumentException(sprintf('The ProviderReservationInfoRef property can only contain items of type \Travelport\Hotel\StructType\ProviderReservationInfoRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ProviderReservationInfoRef) && count($this->ProviderReservationInfoRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ProviderReservationInfoRef)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($location) && mb_strlen((string) $location) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $location)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($countryCode) && mb_strlen((string) $countryCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $countryCode)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($areaCode) && !is_string($areaCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($areaCode, true), gettype($areaCode)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($areaCode) && mb_strlen((string) $areaCode) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $areaCode)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($extension) && !is_string($extension)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extension, true), gettype($extension)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($extension) && mb_strlen((string) $extension) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $extension)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        // validation for constraint: maxLength(1024)
        if (!is_null($text) && mb_strlen((string) $text) > 1024) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1024', mb_strlen((string) $text)), __LINE__);
        }
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
     * @uses \Travelport\Hotel\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\Hotel\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\Hotel\StructType\PhoneNumber
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Hotel\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Hotel\EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \Travelport\Hotel\EnumType\TypeElementStatus::getValidValues())), __LINE__);
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
     * @return \Travelport\Hotel\StructType\PhoneNumber
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
