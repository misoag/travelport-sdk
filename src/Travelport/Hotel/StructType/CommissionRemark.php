<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
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
    protected ?\Travelport\Hotel\StructType\ProviderReservationLevel $ProviderReservationLevel = null;
    /**
     * The PassengerTypeLevel
     * Meta information extracted from the WSDL
     * - choice: ProviderReservationLevel | PassengerTypeLevel
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 4
     * @var \Travelport\Hotel\StructType\PassengerTypeLevel[]
     */
    protected ?array $PassengerTypeLevel = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Key to be used for internal processing. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Provider reservation reference key. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderReservationInfoRef = null;
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
    protected ?string $ProviderCode = null;
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
        return isset($this->ProviderReservationLevel) ? $this->ProviderReservationLevel : null;
    }
    /**
     * This method is responsible for validating the value passed to the setProviderReservationLevel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProviderReservationLevel method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateProviderReservationLevelForChoiceConstraintsFromSetProviderReservationLevel($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'PassengerTypeLevel',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property ProviderReservationLevel can\'t be set as the property %s is already set. Only one property must be set among these properties: ProviderReservationLevel, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ProviderReservationLevel value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\ProviderReservationLevel $providerReservationLevel
     * @return \Travelport\Hotel\StructType\CommissionRemark
     */
    public function setProviderReservationLevel(?\Travelport\Hotel\StructType\ProviderReservationLevel $providerReservationLevel = null): self
    {
        // validation for constraint: choice(ProviderReservationLevel, PassengerTypeLevel)
        if ('' !== ($providerReservationLevelChoiceErrorMessage = self::validateProviderReservationLevelForChoiceConstraintsFromSetProviderReservationLevel($providerReservationLevel))) {
            throw new InvalidArgumentException($providerReservationLevelChoiceErrorMessage, __LINE__);
        }
        if (is_null($providerReservationLevel) || (is_array($providerReservationLevel) && empty($providerReservationLevel))) {
            unset($this->ProviderReservationLevel);
        } else {
            $this->ProviderReservationLevel = $providerReservationLevel;
        }
        
        return $this;
    }
    /**
     * Get PassengerTypeLevel value
     * @return \Travelport\Hotel\StructType\PassengerTypeLevel[]
     */
    public function getPassengerTypeLevel(): ?array
    {
        return isset($this->PassengerTypeLevel) ? $this->PassengerTypeLevel : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPassengerTypeLevel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPassengerTypeLevel method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePassengerTypeLevelForArrayConstraintsFromSetPassengerTypeLevel(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $commissionRemarkPassengerTypeLevelItem) {
            // validation for constraint: itemType
            if (!$commissionRemarkPassengerTypeLevelItem instanceof \Travelport\Hotel\StructType\PassengerTypeLevel) {
                $invalidValues[] = is_object($commissionRemarkPassengerTypeLevelItem) ? get_class($commissionRemarkPassengerTypeLevelItem) : sprintf('%s(%s)', gettype($commissionRemarkPassengerTypeLevelItem), var_export($commissionRemarkPassengerTypeLevelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PassengerTypeLevel property can only contain items of type \Travelport\Hotel\StructType\PassengerTypeLevel, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setPassengerTypeLevel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPassengerTypeLevel method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePassengerTypeLevelForChoiceConstraintsFromSetPassengerTypeLevel($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'ProviderReservationLevel',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property PassengerTypeLevel can\'t be set as the property %s is already set. Only one property must be set among these properties: PassengerTypeLevel, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set PassengerTypeLevel value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\PassengerTypeLevel[] $passengerTypeLevel
     * @return \Travelport\Hotel\StructType\CommissionRemark
     */
    public function setPassengerTypeLevel(?array $passengerTypeLevel = null): self
    {
        // validation for constraint: array
        if ('' !== ($passengerTypeLevelArrayErrorMessage = self::validatePassengerTypeLevelForArrayConstraintsFromSetPassengerTypeLevel($passengerTypeLevel))) {
            throw new InvalidArgumentException($passengerTypeLevelArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(ProviderReservationLevel, PassengerTypeLevel)
        if ('' !== ($passengerTypeLevelChoiceErrorMessage = self::validatePassengerTypeLevelForChoiceConstraintsFromSetPassengerTypeLevel($passengerTypeLevel))) {
            throw new InvalidArgumentException($passengerTypeLevelChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($passengerTypeLevel) && count($passengerTypeLevel) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($passengerTypeLevel)), __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($passengerTypeLevel) && count($passengerTypeLevel) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 4', count($passengerTypeLevel)), __LINE__);
        }
        if (is_null($passengerTypeLevel) || (is_array($passengerTypeLevel) && empty($passengerTypeLevel))) {
            unset($this->PassengerTypeLevel);
        } else {
            $this->PassengerTypeLevel = $passengerTypeLevel;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToPassengerTypeLevel method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToPassengerTypeLevel method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToPassengerTypeLevel($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'ProviderReservationLevel',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property PassengerTypeLevel can\'t be set as the property %s is already set. Only one property must be set among these properties: PassengerTypeLevel, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to PassengerTypeLevel value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\PassengerTypeLevel $item
     * @return \Travelport\Hotel\StructType\CommissionRemark
     */
    public function addToPassengerTypeLevel(\Travelport\Hotel\StructType\PassengerTypeLevel $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\PassengerTypeLevel) {
            throw new InvalidArgumentException(sprintf('The PassengerTypeLevel property can only contain items of type \Travelport\Hotel\StructType\PassengerTypeLevel, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(ProviderReservationLevel, PassengerTypeLevel)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToPassengerTypeLevel($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->PassengerTypeLevel) && count($this->PassengerTypeLevel) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->PassengerTypeLevel)), __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($this->PassengerTypeLevel) && count($this->PassengerTypeLevel) >= 4) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 4', count($this->PassengerTypeLevel)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($providerReservationInfoRef) && !is_string($providerReservationInfoRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerReservationInfoRef, true), gettype($providerReservationInfoRef)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\CommissionRemark
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
     * @return \Travelport\Hotel\StructType\CommissionRemark
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
