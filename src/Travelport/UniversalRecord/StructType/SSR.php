<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SSR StructType
 * Meta information extracted from the WSDL
 * - documentation: Special serivces like wheel chair, or pet carrier.
 * @subpackage Structs
 */
class SSR extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Programmatic SSRs use codes recognized by the provider/supplier (example, VGML=vegetarian meal code). Manual SSRs do not have an associated programmatic code. | SSR Code, exactly 4 characters (e.g. DEAF, NSST, etc.)
     * - base: xs:string
     * - maxLength: 4
     * - minLength: 4
     * - use: required
     * @var string
     */
    protected string $Type;
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
     * The SegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to the air segment. May be required for some Types. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $SegmentRef = null;
    /**
     * The PassiveSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to the passive segment. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $PassiveSegmentRef = null;
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
     * The Status
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The FreeText
     * Meta information extracted from the WSDL
     * - documentation: Certain SSR types will require a free text message. For example MAAS (Meet and assist). | SSR Free Text
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $FreeText = null;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $Carrier = null;
    /**
     * The CarrierSpecificText
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 64
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $CarrierSpecificText = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The ProviderDefinedType
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 16
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderDefinedType = null;
    /**
     * The SSRRuleRef
     * Meta information extracted from the WSDL
     * - documentation: UniqueID to associate a rule to the SSR | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $SSRRuleRef = null;
    /**
     * The URL
     * @var string|null
     */
    protected ?string $URL = null;
    /**
     * The ProfileID
     * Meta information extracted from the WSDL
     * - documentation: Key assigned for Secure Flight Document value from the specified profile
     * - use: optional
     * @var string|null
     */
    protected ?string $ProfileID = null;
    /**
     * The ProfileSecureFlightDocKey
     * Meta information extracted from the WSDL
     * - documentation: Unique ID of Booking Traveler's Profile that contains the Secure flight Detail | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ProfileSecureFlightDocKey = null;
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
     * Constructor method for SSR
     * @uses SSR::setType()
     * @uses SSR::setKey()
     * @uses SSR::setSegmentRef()
     * @uses SSR::setPassiveSegmentRef()
     * @uses SSR::setProviderReservationInfoRef()
     * @uses SSR::setStatus()
     * @uses SSR::setFreeText()
     * @uses SSR::setCarrier()
     * @uses SSR::setCarrierSpecificText()
     * @uses SSR::setDescription()
     * @uses SSR::setProviderDefinedType()
     * @uses SSR::setSSRRuleRef()
     * @uses SSR::setURL()
     * @uses SSR::setProfileID()
     * @uses SSR::setProfileSecureFlightDocKey()
     * @uses SSR::setElStat()
     * @uses SSR::setKeyOverride()
     * @param string $type
     * @param string $key
     * @param string $segmentRef
     * @param string $passiveSegmentRef
     * @param string $providerReservationInfoRef
     * @param string $status
     * @param string $freeText
     * @param string $carrier
     * @param string $carrierSpecificText
     * @param string $description
     * @param string $providerDefinedType
     * @param string $sSRRuleRef
     * @param string $uRL
     * @param string $profileID
     * @param string $profileSecureFlightDocKey
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $type, ?string $key = null, ?string $segmentRef = null, ?string $passiveSegmentRef = null, ?string $providerReservationInfoRef = null, ?string $status = null, ?string $freeText = null, ?string $carrier = null, ?string $carrierSpecificText = null, ?string $description = null, ?string $providerDefinedType = null, ?string $sSRRuleRef = null, ?string $uRL = null, ?string $profileID = null, ?string $profileSecureFlightDocKey = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setType($type)
            ->setKey($key)
            ->setSegmentRef($segmentRef)
            ->setPassiveSegmentRef($passiveSegmentRef)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setStatus($status)
            ->setFreeText($freeText)
            ->setCarrier($carrier)
            ->setCarrierSpecificText($carrierSpecificText)
            ->setDescription($description)
            ->setProviderDefinedType($providerDefinedType)
            ->setSSRRuleRef($sSRRuleRef)
            ->setURL($uRL)
            ->setProfileID($profileID)
            ->setProfileSecureFlightDocKey($profileSecureFlightDocKey)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\SSR
     */
    public function setType(string $type): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($type) && mb_strlen((string) $type) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen((string) $type)), __LINE__);
        }
        // validation for constraint: minLength(4)
        if (!is_null($type) && mb_strlen((string) $type) < 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 4', mb_strlen((string) $type)), __LINE__);
        }
        $this->Type = $type;
        
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
     * @return \Travelport\UniversalRecord\StructType\SSR
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
     * Get SegmentRef value
     * @return string|null
     */
    public function getSegmentRef(): ?string
    {
        return $this->SegmentRef;
    }
    /**
     * Set SegmentRef value
     * @param string $segmentRef
     * @return \Travelport\UniversalRecord\StructType\SSR
     */
    public function setSegmentRef(?string $segmentRef = null): self
    {
        // validation for constraint: string
        if (!is_null($segmentRef) && !is_string($segmentRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($segmentRef, true), gettype($segmentRef)), __LINE__);
        }
        $this->SegmentRef = $segmentRef;
        
        return $this;
    }
    /**
     * Get PassiveSegmentRef value
     * @return string|null
     */
    public function getPassiveSegmentRef(): ?string
    {
        return $this->PassiveSegmentRef;
    }
    /**
     * Set PassiveSegmentRef value
     * @param string $passiveSegmentRef
     * @return \Travelport\UniversalRecord\StructType\SSR
     */
    public function setPassiveSegmentRef(?string $passiveSegmentRef = null): self
    {
        // validation for constraint: string
        if (!is_null($passiveSegmentRef) && !is_string($passiveSegmentRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passiveSegmentRef, true), gettype($passiveSegmentRef)), __LINE__);
        }
        $this->PassiveSegmentRef = $passiveSegmentRef;
        
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
     * @return \Travelport\UniversalRecord\StructType\SSR
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
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Travelport\UniversalRecord\StructType\SSR
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get FreeText value
     * @return string|null
     */
    public function getFreeText(): ?string
    {
        return $this->FreeText;
    }
    /**
     * Set FreeText value
     * @param string $freeText
     * @return \Travelport\UniversalRecord\StructType\SSR
     */
    public function setFreeText(?string $freeText = null): self
    {
        // validation for constraint: string
        if (!is_null($freeText) && !is_string($freeText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($freeText, true), gettype($freeText)), __LINE__);
        }
        $this->FreeText = $freeText;
        
        return $this;
    }
    /**
     * Get Carrier value
     * @return string|null
     */
    public function getCarrier(): ?string
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @param string $carrier
     * @return \Travelport\UniversalRecord\StructType\SSR
     */
    public function setCarrier(?string $carrier = null): self
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrier, true), gettype($carrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($carrier) && mb_strlen((string) $carrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $carrier)), __LINE__);
        }
        $this->Carrier = $carrier;
        
        return $this;
    }
    /**
     * Get CarrierSpecificText value
     * @return string|null
     */
    public function getCarrierSpecificText(): ?string
    {
        return $this->CarrierSpecificText;
    }
    /**
     * Set CarrierSpecificText value
     * @param string $carrierSpecificText
     * @return \Travelport\UniversalRecord\StructType\SSR
     */
    public function setCarrierSpecificText(?string $carrierSpecificText = null): self
    {
        // validation for constraint: string
        if (!is_null($carrierSpecificText) && !is_string($carrierSpecificText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrierSpecificText, true), gettype($carrierSpecificText)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($carrierSpecificText) && mb_strlen((string) $carrierSpecificText) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $carrierSpecificText)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($carrierSpecificText) && mb_strlen((string) $carrierSpecificText) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $carrierSpecificText)), __LINE__);
        }
        $this->CarrierSpecificText = $carrierSpecificText;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Travelport\UniversalRecord\StructType\SSR
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        
        return $this;
    }
    /**
     * Get ProviderDefinedType value
     * @return string|null
     */
    public function getProviderDefinedType(): ?string
    {
        return $this->ProviderDefinedType;
    }
    /**
     * Set ProviderDefinedType value
     * @param string $providerDefinedType
     * @return \Travelport\UniversalRecord\StructType\SSR
     */
    public function setProviderDefinedType(?string $providerDefinedType = null): self
    {
        // validation for constraint: string
        if (!is_null($providerDefinedType) && !is_string($providerDefinedType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerDefinedType, true), gettype($providerDefinedType)), __LINE__);
        }
        // validation for constraint: maxLength(16)
        if (!is_null($providerDefinedType) && mb_strlen((string) $providerDefinedType) > 16) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 16', mb_strlen((string) $providerDefinedType)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($providerDefinedType) && mb_strlen((string) $providerDefinedType) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $providerDefinedType)), __LINE__);
        }
        $this->ProviderDefinedType = $providerDefinedType;
        
        return $this;
    }
    /**
     * Get SSRRuleRef value
     * @return string|null
     */
    public function getSSRRuleRef(): ?string
    {
        return $this->SSRRuleRef;
    }
    /**
     * Set SSRRuleRef value
     * @param string $sSRRuleRef
     * @return \Travelport\UniversalRecord\StructType\SSR
     */
    public function setSSRRuleRef(?string $sSRRuleRef = null): self
    {
        // validation for constraint: string
        if (!is_null($sSRRuleRef) && !is_string($sSRRuleRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sSRRuleRef, true), gettype($sSRRuleRef)), __LINE__);
        }
        $this->SSRRuleRef = $sSRRuleRef;
        
        return $this;
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL(): ?string
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \Travelport\UniversalRecord\StructType\SSR
     */
    public function setURL(?string $uRL = null): self
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRL, true), gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
        
        return $this;
    }
    /**
     * Get ProfileID value
     * @return string|null
     */
    public function getProfileID(): ?string
    {
        return $this->ProfileID;
    }
    /**
     * Set ProfileID value
     * @param string $profileID
     * @return \Travelport\UniversalRecord\StructType\SSR
     */
    public function setProfileID(?string $profileID = null): self
    {
        // validation for constraint: string
        if (!is_null($profileID) && !is_string($profileID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($profileID, true), gettype($profileID)), __LINE__);
        }
        $this->ProfileID = $profileID;
        
        return $this;
    }
    /**
     * Get ProfileSecureFlightDocKey value
     * @return string|null
     */
    public function getProfileSecureFlightDocKey(): ?string
    {
        return $this->ProfileSecureFlightDocKey;
    }
    /**
     * Set ProfileSecureFlightDocKey value
     * @param string $profileSecureFlightDocKey
     * @return \Travelport\UniversalRecord\StructType\SSR
     */
    public function setProfileSecureFlightDocKey(?string $profileSecureFlightDocKey = null): self
    {
        // validation for constraint: string
        if (!is_null($profileSecureFlightDocKey) && !is_string($profileSecureFlightDocKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($profileSecureFlightDocKey, true), gettype($profileSecureFlightDocKey)), __LINE__);
        }
        $this->ProfileSecureFlightDocKey = $profileSecureFlightDocKey;
        
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
     * @return \Travelport\UniversalRecord\StructType\SSR
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
     * @return \Travelport\UniversalRecord\StructType\SSR
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
