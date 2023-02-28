<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
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
    protected ?string $AddressName = null;
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
    protected ?array $Street = null;
    /**
     * The City
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - minLength: 2
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $City = null;
    /**
     * The State
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: State
     * @var \Travelport\Hotel\StructType\State|null
     */
    protected ?\Travelport\Hotel\StructType\State $State = null;
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
    protected ?string $PostalCode = null;
    /**
     * The Country
     * Meta information extracted from the WSDL
     * - documentation: The Full country name or two letter ISO country code e.g. US, France. A two letter country code is required for a Postal Code Searches.
     * - base: xs:string
     * - length: 2
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Country = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: ProviderReservationInfoRef
     * @var \Travelport\Hotel\StructType\ProviderReservationInfoRef[]
     */
    protected ?array $ProviderReservationInfoRef = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Key for update/delete of the element | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
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
     * @param \Travelport\Hotel\StructType\State $state
     * @param string $postalCode
     * @param string $country
     * @param \Travelport\Hotel\StructType\ProviderReservationInfoRef[] $providerReservationInfoRef
     * @param string $key
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(?string $addressName = null, ?array $street = null, ?string $city = null, ?\Travelport\Hotel\StructType\State $state = null, ?string $postalCode = null, ?string $country = null, ?array $providerReservationInfoRef = null, ?string $key = null, ?string $elStat = null, ?bool $keyOverride = null)
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
     * @return \Travelport\Hotel\StructType\TypeStructuredAddress
     */
    public function setAddressName(?string $addressName = null): self
    {
        // validation for constraint: string
        if (!is_null($addressName) && !is_string($addressName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressName, true), gettype($addressName)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($addressName) && mb_strlen((string) $addressName) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $addressName)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setStreet method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStreet method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStreetForArrayConstraintFromSetStreet(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeStructuredAddressStreetItem) {
            // validation for constraint: itemType
            if (!is_string($typeStructuredAddressStreetItem)) {
                $invalidValues[] = is_object($typeStructuredAddressStreetItem) ? get_class($typeStructuredAddressStreetItem) : sprintf('%s(%s)', gettype($typeStructuredAddressStreetItem), var_export($typeStructuredAddressStreetItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Street property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setStreet method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStreet method
     * This has to validate that the items contained by the array match the length constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStreetForMaxLengthConstraintFromSetStreet(?array $values = null): string
    {
        $message = '';
        $invalidValues = [];
        foreach (($values ?? []) as $typeStructuredAddressStreetItem) {
            // validation for constraint: maxLength(255)
            if (mb_strlen((string) $typeStructuredAddressStreetItem) > 255) {
                $invalidValues[] = var_export($typeStructuredAddressStreetItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be less than or equal to 255', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setStreet method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStreet method
     * This has to validate that the items contained by the array match the length constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStreetForMinLengthConstraintFromSetStreet(?array $values = null): string
    {
        $message = '';
        $invalidValues = [];
        foreach (($values ?? []) as $typeStructuredAddressStreetItem) {
            // validation for constraint: minLength(1)
            if (mb_strlen((string) $typeStructuredAddressStreetItem) < 1) {
                $invalidValues[] = var_export($typeStructuredAddressStreetItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be greater than or equal to 1', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Street value
     * @throws InvalidArgumentException
     * @param string[] $street
     * @return \Travelport\Hotel\StructType\TypeStructuredAddress
     */
    public function setStreet(?array $street = null): self
    {
        // validation for constraint: array
        if ('' !== ($streetArrayErrorMessage = self::validateStreetForArrayConstraintFromSetStreet($street))) {
            throw new InvalidArgumentException($streetArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxLength(255)
        if ('' !== ($streetMaxLengthErrorMessage = self::validateStreetForMaxLengthConstraintFromSetStreet($street))) {
            throw new InvalidArgumentException($streetMaxLengthErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($street) && count($street) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5', count($street)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if ('' !== ($streetMinLengthErrorMessage = self::validateStreetForMinLengthConstraintFromSetStreet($street))) {
            throw new InvalidArgumentException($streetMinLengthErrorMessage, __LINE__);
        }
        $this->Street = $street;
        
        return $this;
    }
    /**
     * Add item to Street value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Hotel\StructType\TypeStructuredAddress
     */
    public function addToStreet(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Street property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (mb_strlen((string) $item) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $item)), __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($this->Street) && count($this->Street) >= 5) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5', count($this->Street)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (mb_strlen((string) $item) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $item)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\TypeStructuredAddress
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($city) && mb_strlen((string) $city) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $city)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($city) && mb_strlen((string) $city) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $city)), __LINE__);
        }
        $this->City = $city;
        
        return $this;
    }
    /**
     * Get State value
     * @return \Travelport\Hotel\StructType\State|null
     */
    public function getState(): ?\Travelport\Hotel\StructType\State
    {
        return $this->State;
    }
    /**
     * Set State value
     * @param \Travelport\Hotel\StructType\State $state
     * @return \Travelport\Hotel\StructType\TypeStructuredAddress
     */
    public function setState(?\Travelport\Hotel\StructType\State $state = null): self
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
     * @return \Travelport\Hotel\StructType\TypeStructuredAddress
     */
    public function setPostalCode(?string $postalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCode, true), gettype($postalCode)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($postalCode) && mb_strlen((string) $postalCode) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen((string) $postalCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($postalCode) && mb_strlen((string) $postalCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $postalCode)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\TypeStructuredAddress
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($country) && mb_strlen((string) $country) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $country)), __LINE__);
        }
        $this->Country = $country;
        
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
     * This method is responsible for validating the value(s) passed to the setProviderReservationInfoRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProviderReservationInfoRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProviderReservationInfoRefForArrayConstraintFromSetProviderReservationInfoRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeStructuredAddressProviderReservationInfoRefItem) {
            // validation for constraint: itemType
            if (!$typeStructuredAddressProviderReservationInfoRefItem instanceof \Travelport\Hotel\StructType\ProviderReservationInfoRef) {
                $invalidValues[] = is_object($typeStructuredAddressProviderReservationInfoRefItem) ? get_class($typeStructuredAddressProviderReservationInfoRefItem) : sprintf('%s(%s)', gettype($typeStructuredAddressProviderReservationInfoRefItem), var_export($typeStructuredAddressProviderReservationInfoRefItem, true));
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
     * @return \Travelport\Hotel\StructType\TypeStructuredAddress
     */
    public function setProviderReservationInfoRef(?array $providerReservationInfoRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($providerReservationInfoRefArrayErrorMessage = self::validateProviderReservationInfoRefForArrayConstraintFromSetProviderReservationInfoRef($providerReservationInfoRef))) {
            throw new InvalidArgumentException($providerReservationInfoRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($providerReservationInfoRef) && count($providerReservationInfoRef) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($providerReservationInfoRef)), __LINE__);
        }
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Add item to ProviderReservationInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\ProviderReservationInfoRef $item
     * @return \Travelport\Hotel\StructType\TypeStructuredAddress
     */
    public function addToProviderReservationInfoRef(\Travelport\Hotel\StructType\ProviderReservationInfoRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\ProviderReservationInfoRef) {
            throw new InvalidArgumentException(sprintf('The ProviderReservationInfoRef property can only contain items of type \Travelport\Hotel\StructType\ProviderReservationInfoRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->ProviderReservationInfoRef) && count($this->ProviderReservationInfoRef) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->ProviderReservationInfoRef)), __LINE__);
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
     * @return \Travelport\Hotel\StructType\TypeStructuredAddress
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
     * @return \Travelport\Hotel\StructType\TypeStructuredAddress
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
     * @return \Travelport\Hotel\StructType\TypeStructuredAddress
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
