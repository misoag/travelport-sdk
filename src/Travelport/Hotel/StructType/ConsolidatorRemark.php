<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsolidatorRemark StructType
 * Meta information extracted from the WSDL
 * - documentation: Authorization remark for Consolidator access to a PNR . Contains PCC information created by retail agent to allow a consolidator or other Axess users to service their PNR. PROVIDER SUPPORTED: Worldspan and JAL.
 * @subpackage Structs
 */
class ConsolidatorRemark extends AbstractStructBase
{
    /**
     * The PseudoCityCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 1
     * - ref: PseudoCityCode
     * @var \Travelport\Hotel\StructType\PseudoCityCode[]
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
     * Constructor method for ConsolidatorRemark
     * @uses ConsolidatorRemark::setPseudoCityCode()
     * @uses ConsolidatorRemark::setKey()
     * @uses ConsolidatorRemark::setProviderReservationInfoRef()
     * @uses ConsolidatorRemark::setProviderCode()
     * @uses ConsolidatorRemark::setElStat()
     * @uses ConsolidatorRemark::setKeyOverride()
     * @param \Travelport\Hotel\StructType\PseudoCityCode[] $pseudoCityCode
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
     * @return \Travelport\Hotel\StructType\PseudoCityCode[]
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
        foreach ($values as $consolidatorRemarkPseudoCityCodeItem) {
            // validation for constraint: itemType
            if (!$consolidatorRemarkPseudoCityCodeItem instanceof \Travelport\Hotel\StructType\PseudoCityCode) {
                $invalidValues[] = is_object($consolidatorRemarkPseudoCityCodeItem) ? get_class($consolidatorRemarkPseudoCityCodeItem) : sprintf('%s(%s)', gettype($consolidatorRemarkPseudoCityCodeItem), var_export($consolidatorRemarkPseudoCityCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PseudoCityCode property can only contain items of type \Travelport\Hotel\StructType\PseudoCityCode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PseudoCityCode value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\PseudoCityCode[] $pseudoCityCode
     * @return \Travelport\Hotel\StructType\ConsolidatorRemark
     */
    public function setPseudoCityCode(array $pseudoCityCode): self
    {
        // validation for constraint: array
        if ('' !== ($pseudoCityCodeArrayErrorMessage = self::validatePseudoCityCodeForArrayConstraintsFromSetPseudoCityCode($pseudoCityCode))) {
            throw new InvalidArgumentException($pseudoCityCodeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($pseudoCityCode) && count($pseudoCityCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5', count($pseudoCityCode)), __LINE__);
        }
        $this->PseudoCityCode = $pseudoCityCode;
        
        return $this;
    }
    /**
     * Add item to PseudoCityCode value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\PseudoCityCode $item
     * @return \Travelport\Hotel\StructType\ConsolidatorRemark
     */
    public function addToPseudoCityCode(\Travelport\Hotel\StructType\PseudoCityCode $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\PseudoCityCode) {
            throw new InvalidArgumentException(sprintf('The PseudoCityCode property can only contain items of type \Travelport\Hotel\StructType\PseudoCityCode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($this->PseudoCityCode) && count($this->PseudoCityCode) >= 5) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5', count($this->PseudoCityCode)), __LINE__);
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
     * @return \Travelport\Hotel\StructType\ConsolidatorRemark
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
     * @return \Travelport\Hotel\StructType\ConsolidatorRemark
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
     * @return \Travelport\Hotel\StructType\ConsolidatorRemark
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
     * @return \Travelport\Hotel\StructType\ConsolidatorRemark
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
     * @return \Travelport\Hotel\StructType\ConsolidatorRemark
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
