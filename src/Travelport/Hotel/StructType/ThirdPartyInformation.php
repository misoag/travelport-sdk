<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ThirdPartyInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: Third party supplier locator information. Specifically applicable for SDK booking.
 * @subpackage Structs
 */
class ThirdPartyInformation extends AbstractStructBase
{
    /**
     * The SegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Air/Passive Segment Reference
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\TypeGeneralReference[]
     */
    protected ?array $SegmentRef = null;
    /**
     * The ThirdPartyCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * @var string|null
     */
    protected ?string $ThirdPartyCode = null;
    /**
     * The ThirdPartyLocatorCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 36
     * @var string|null
     */
    protected ?string $ThirdPartyLocatorCode = null;
    /**
     * The ThirdPartyName
     * Meta information extracted from the WSDL
     * - documentation: Third party supplier name. | Third Party Content Provider name.
     * - base: xs:string
     * - maxLength: 64
     * @var string|null
     */
    protected ?string $ThirdPartyName = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Provider Reservation reference | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderReservationInfoRef = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier of the third party supplier. Key can be used to modify or delete saved third party information. | Reference type
     * - base: xs:string
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
     * Constructor method for ThirdPartyInformation
     * @uses ThirdPartyInformation::setSegmentRef()
     * @uses ThirdPartyInformation::setThirdPartyCode()
     * @uses ThirdPartyInformation::setThirdPartyLocatorCode()
     * @uses ThirdPartyInformation::setThirdPartyName()
     * @uses ThirdPartyInformation::setProviderReservationInfoRef()
     * @uses ThirdPartyInformation::setKey()
     * @uses ThirdPartyInformation::setElStat()
     * @uses ThirdPartyInformation::setKeyOverride()
     * @param \Travelport\Hotel\StructType\TypeGeneralReference[] $segmentRef
     * @param string $thirdPartyCode
     * @param string $thirdPartyLocatorCode
     * @param string $thirdPartyName
     * @param string $providerReservationInfoRef
     * @param string $key
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(?array $segmentRef = null, ?string $thirdPartyCode = null, ?string $thirdPartyLocatorCode = null, ?string $thirdPartyName = null, ?string $providerReservationInfoRef = null, ?string $key = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setSegmentRef($segmentRef)
            ->setThirdPartyCode($thirdPartyCode)
            ->setThirdPartyLocatorCode($thirdPartyLocatorCode)
            ->setThirdPartyName($thirdPartyName)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setKey($key)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get SegmentRef value
     * @return \Travelport\Hotel\StructType\TypeGeneralReference[]
     */
    public function getSegmentRef(): ?array
    {
        return $this->SegmentRef;
    }
    /**
     * This method is responsible for validating the values passed to the setSegmentRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSegmentRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSegmentRefForArrayConstraintsFromSetSegmentRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $thirdPartyInformationSegmentRefItem) {
            // validation for constraint: itemType
            if (!$thirdPartyInformationSegmentRefItem instanceof \Travelport\Hotel\StructType\TypeGeneralReference) {
                $invalidValues[] = is_object($thirdPartyInformationSegmentRefItem) ? get_class($thirdPartyInformationSegmentRefItem) : sprintf('%s(%s)', gettype($thirdPartyInformationSegmentRefItem), var_export($thirdPartyInformationSegmentRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SegmentRef property can only contain items of type \Travelport\Hotel\StructType\TypeGeneralReference, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\TypeGeneralReference[] $segmentRef
     * @return \Travelport\Hotel\StructType\ThirdPartyInformation
     */
    public function setSegmentRef(?array $segmentRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($segmentRefArrayErrorMessage = self::validateSegmentRefForArrayConstraintsFromSetSegmentRef($segmentRef))) {
            throw new InvalidArgumentException($segmentRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($segmentRef) && count($segmentRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($segmentRef)), __LINE__);
        }
        $this->SegmentRef = $segmentRef;
        
        return $this;
    }
    /**
     * Add item to SegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\TypeGeneralReference $item
     * @return \Travelport\Hotel\StructType\ThirdPartyInformation
     */
    public function addToSegmentRef(\Travelport\Hotel\StructType\TypeGeneralReference $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\TypeGeneralReference) {
            throw new InvalidArgumentException(sprintf('The SegmentRef property can only contain items of type \Travelport\Hotel\StructType\TypeGeneralReference, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SegmentRef) && count($this->SegmentRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SegmentRef)), __LINE__);
        }
        $this->SegmentRef[] = $item;
        
        return $this;
    }
    /**
     * Get ThirdPartyCode value
     * @return string|null
     */
    public function getThirdPartyCode(): ?string
    {
        return $this->ThirdPartyCode;
    }
    /**
     * Set ThirdPartyCode value
     * @param string $thirdPartyCode
     * @return \Travelport\Hotel\StructType\ThirdPartyInformation
     */
    public function setThirdPartyCode(?string $thirdPartyCode = null): self
    {
        // validation for constraint: string
        if (!is_null($thirdPartyCode) && !is_string($thirdPartyCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($thirdPartyCode, true), gettype($thirdPartyCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($thirdPartyCode) && mb_strlen((string) $thirdPartyCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $thirdPartyCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($thirdPartyCode) && mb_strlen((string) $thirdPartyCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $thirdPartyCode)), __LINE__);
        }
        $this->ThirdPartyCode = $thirdPartyCode;
        
        return $this;
    }
    /**
     * Get ThirdPartyLocatorCode value
     * @return string|null
     */
    public function getThirdPartyLocatorCode(): ?string
    {
        return $this->ThirdPartyLocatorCode;
    }
    /**
     * Set ThirdPartyLocatorCode value
     * @param string $thirdPartyLocatorCode
     * @return \Travelport\Hotel\StructType\ThirdPartyInformation
     */
    public function setThirdPartyLocatorCode(?string $thirdPartyLocatorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($thirdPartyLocatorCode) && !is_string($thirdPartyLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($thirdPartyLocatorCode, true), gettype($thirdPartyLocatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(36)
        if (!is_null($thirdPartyLocatorCode) && mb_strlen((string) $thirdPartyLocatorCode) > 36) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 36', mb_strlen((string) $thirdPartyLocatorCode)), __LINE__);
        }
        $this->ThirdPartyLocatorCode = $thirdPartyLocatorCode;
        
        return $this;
    }
    /**
     * Get ThirdPartyName value
     * @return string|null
     */
    public function getThirdPartyName(): ?string
    {
        return $this->ThirdPartyName;
    }
    /**
     * Set ThirdPartyName value
     * @param string $thirdPartyName
     * @return \Travelport\Hotel\StructType\ThirdPartyInformation
     */
    public function setThirdPartyName(?string $thirdPartyName = null): self
    {
        // validation for constraint: string
        if (!is_null($thirdPartyName) && !is_string($thirdPartyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($thirdPartyName, true), gettype($thirdPartyName)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($thirdPartyName) && mb_strlen((string) $thirdPartyName) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $thirdPartyName)), __LINE__);
        }
        $this->ThirdPartyName = $thirdPartyName;
        
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
     * @return \Travelport\Hotel\StructType\ThirdPartyInformation
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
     * @return \Travelport\Hotel\StructType\ThirdPartyInformation
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
     * @return \Travelport\Hotel\StructType\ThirdPartyInformation
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
     * @return \Travelport\Hotel\StructType\ThirdPartyInformation
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
