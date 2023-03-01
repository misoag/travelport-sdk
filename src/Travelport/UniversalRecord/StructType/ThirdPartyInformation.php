<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
     * @var \Travelport\UniversalRecord\StructType\TypeGeneralReference[]
     */
    public ?array $SegmentRef = null;
    /**
     * The ThirdPartyCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * @var string|null
     */
    public ?string $ThirdPartyCode = null;
    /**
     * The ThirdPartyLocatorCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 36
     * @var string|null
     */
    public ?string $ThirdPartyLocatorCode = null;
    /**
     * The ThirdPartyName
     * Meta information extracted from the WSDL
     * - documentation: Third party supplier name. | Third Party Content Provider name.
     * - base: xs:string
     * - maxLength: 64
     * @var string|null
     */
    public ?string $ThirdPartyName = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Provider Reservation reference | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderReservationInfoRef = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier of the third party supplier. Key can be used to modify or delete saved third party information. | Reference type
     * - base: xs:string
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
     * Constructor method for ThirdPartyInformation
     * @uses ThirdPartyInformation::setSegmentRef()
     * @uses ThirdPartyInformation::setThirdPartyCode()
     * @uses ThirdPartyInformation::setThirdPartyLocatorCode()
     * @uses ThirdPartyInformation::setThirdPartyName()
     * @uses ThirdPartyInformation::setProviderReservationInfoRef()
     * @uses ThirdPartyInformation::setKey()
     * @uses ThirdPartyInformation::setElStat()
     * @uses ThirdPartyInformation::setKeyOverride()
     * @param \Travelport\UniversalRecord\StructType\TypeGeneralReference[] $segmentRef
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
     * @return \Travelport\UniversalRecord\StructType\TypeGeneralReference[]
     */
    public function getSegmentRef(): ?array
    {
        return $this->SegmentRef;
    }
    /**
     * Set SegmentRef value
     * @param \Travelport\UniversalRecord\StructType\TypeGeneralReference[] $segmentRef
     * @return \Travelport\UniversalRecord\StructType\ThirdPartyInformation
     */
    public function setSegmentRef(?array $segmentRef = null): self
    {
        $this->SegmentRef = $segmentRef;
        
        return $this;
    }
    /**
     * Add item to SegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeGeneralReference $item
     * @return \Travelport\UniversalRecord\StructType\ThirdPartyInformation
     */
    public function addToSegmentRef(\Travelport\UniversalRecord\StructType\TypeGeneralReference $item): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\ThirdPartyInformation
     */
    public function setThirdPartyCode(?string $thirdPartyCode = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\ThirdPartyInformation
     */
    public function setThirdPartyLocatorCode(?string $thirdPartyLocatorCode = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\ThirdPartyInformation
     */
    public function setThirdPartyName(?string $thirdPartyName = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\ThirdPartyInformation
     */
    public function setProviderReservationInfoRef(?string $providerReservationInfoRef = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\ThirdPartyInformation
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
     * @return \Travelport\UniversalRecord\StructType\ThirdPartyInformation
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
     * @return \Travelport\UniversalRecord\StructType\ThirdPartyInformation
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
