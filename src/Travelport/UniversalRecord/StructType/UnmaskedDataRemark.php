<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnmaskedDataRemark StructType
 * Meta information extracted from the WSDL
 * - documentation: Security remark to a PNR .If a PCC is a Bridge-Branch/5-CP-Consolidator AND is also listed in this field,it can retrieve the PNR data UNMASKED and UNSUPPRESSED.PROVIDER SUPPORTED:JAL.
 * @subpackage Structs
 */
class UnmaskedDataRemark extends AbstractStructBase
{
    /**
     * The PseudoCityCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 11
     * - minOccurs: 1
     * - ref: common:PseudoCityCode
     * @var \Travelport\UniversalRecord\StructType\PseudoCityCode[]
     */
    protected array $PseudoCityCode;
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
     * - documentation: Contains the Provider Code of the provider for which this element is used | 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderCode = null;
    /**
     * The ElStat
     * @var string|null
     */
    protected ?string $ElStat = null;
    /**
     * The KeyOverride
     * @var bool|null
     */
    protected ?bool $KeyOverride = null;
    /**
     * Constructor method for UnmaskedDataRemark
     * @uses UnmaskedDataRemark::setPseudoCityCode()
     * @uses UnmaskedDataRemark::setKey()
     * @uses UnmaskedDataRemark::setProviderReservationInfoRef()
     * @uses UnmaskedDataRemark::setProviderCode()
     * @uses UnmaskedDataRemark::setElStat()
     * @uses UnmaskedDataRemark::setKeyOverride()
     * @param \Travelport\UniversalRecord\StructType\PseudoCityCode[] $pseudoCityCode
     * @param string $key
     * @param string $providerReservationInfoRef
     * @param string $providerCode
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(array $pseudoCityCode, ?string $key = null, ?string $providerReservationInfoRef = null, ?string $providerCode = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setPseudoCityCode($pseudoCityCode)
            ->setKey($key)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setProviderCode($providerCode)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get PseudoCityCode value
     * @return \Travelport\UniversalRecord\StructType\PseudoCityCode[]
     */
    public function getPseudoCityCode(): array
    {
        return $this->PseudoCityCode;
    }
    /**
     * This method is responsible for validating the values passed to the setPseudoCityCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPseudoCityCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePseudoCityCodeForArrayConstraintsFromSetPseudoCityCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $unmaskedDataRemarkPseudoCityCodeItem) {
            // validation for constraint: itemType
            if (!$unmaskedDataRemarkPseudoCityCodeItem instanceof \Travelport\UniversalRecord\StructType\PseudoCityCode) {
                $invalidValues[] = is_object($unmaskedDataRemarkPseudoCityCodeItem) ? get_class($unmaskedDataRemarkPseudoCityCodeItem) : sprintf('%s(%s)', gettype($unmaskedDataRemarkPseudoCityCodeItem), var_export($unmaskedDataRemarkPseudoCityCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PseudoCityCode property can only contain items of type \Travelport\UniversalRecord\StructType\PseudoCityCode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PseudoCityCode value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PseudoCityCode[] $pseudoCityCode
     * @return \Travelport\UniversalRecord\StructType\UnmaskedDataRemark
     */
    public function setPseudoCityCode(array $pseudoCityCode): self
    {
        // validation for constraint: array
        if ('' !== ($pseudoCityCodeArrayErrorMessage = self::validatePseudoCityCodeForArrayConstraintsFromSetPseudoCityCode($pseudoCityCode))) {
            throw new InvalidArgumentException($pseudoCityCodeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(11)
        if (is_array($pseudoCityCode) && count($pseudoCityCode) > 11) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 11', count($pseudoCityCode)), __LINE__);
        }
        $this->PseudoCityCode = $pseudoCityCode;
        
        return $this;
    }
    /**
     * Add item to PseudoCityCode value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PseudoCityCode $item
     * @return \Travelport\UniversalRecord\StructType\UnmaskedDataRemark
     */
    public function addToPseudoCityCode(\Travelport\UniversalRecord\StructType\PseudoCityCode $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\PseudoCityCode) {
            throw new InvalidArgumentException(sprintf('The PseudoCityCode property can only contain items of type \Travelport\UniversalRecord\StructType\PseudoCityCode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(11)
        if (is_array($this->PseudoCityCode) && count($this->PseudoCityCode) >= 11) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 11', count($this->PseudoCityCode)), __LINE__);
        }
        $this->PseudoCityCode[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\UnmaskedDataRemark
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
     * @return \Travelport\UniversalRecord\StructType\UnmaskedDataRemark
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
     * @return \Travelport\UniversalRecord\StructType\UnmaskedDataRemark
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\UniversalRecord\StructType\UnmaskedDataRemark
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeElementStatus::getValidValues())), __LINE__);
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
     * @return \Travelport\UniversalRecord\StructType\UnmaskedDataRemark
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
