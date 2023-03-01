<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassiveCancelReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Host ProviderCode and Locator Code of the passive reservation to be canceled | An optional attribute of 'Key' will enable cancellation of a particular PassiveSegment in the Passive Reservation | Given the ProviderReservationInfo and
 * PassiveReservationLocatorCode , it will cancel the Passive Reservation | Request for cancellation of Passive reservation/segment.
 * @subpackage Structs
 */
class PassiveCancelReq extends BaseReq
{
    /**
     * The PassiveReservationLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Locator Code of the passive reservation to be canceled.
     * - use: required
     * @var string
     */
    public string $PassiveReservationLocatorCode;
    /**
     * The Version
     * Meta information extracted from the WSDL
     * - documentation: Version of the Universal record. Required with any request to modify the existing Universal record.
     * - base: xs:integer
     * - use: required
     * @var int
     */
    public int $Version;
    /**
     * The PassiveSegmentRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: passive:PassiveSegmentRef
     * @var \Travelport\UniversalRecord\StructType\PassiveSegmentRef[]
     */
    public ?array $PassiveSegmentRef = null;
    /**
     * The FileFinishingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:FileFinishingInfo
     * @var \Travelport\UniversalRecord\StructType\FileFinishingInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\FileFinishingInfo $FileFinishingInfo = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * @var string|null
     */
    public ?string $ProviderCode = null;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Provider Reservation or searches for one.
     * - base: xs:string
     * - maxLength: 15
     * @var string|null
     */
    public ?string $ProviderLocatorCode = null;
    /**
     * Constructor method for PassiveCancelReq
     * @uses PassiveCancelReq::setPassiveReservationLocatorCode()
     * @uses PassiveCancelReq::setVersion()
     * @uses PassiveCancelReq::setPassiveSegmentRef()
     * @uses PassiveCancelReq::setFileFinishingInfo()
     * @uses PassiveCancelReq::setProviderCode()
     * @uses PassiveCancelReq::setProviderLocatorCode()
     * @param string $passiveReservationLocatorCode
     * @param int $version
     * @param \Travelport\UniversalRecord\StructType\PassiveSegmentRef[] $passiveSegmentRef
     * @param \Travelport\UniversalRecord\StructType\FileFinishingInfo $fileFinishingInfo
     * @param string $providerCode
     * @param string $providerLocatorCode
     */
    public function __construct(string $passiveReservationLocatorCode, int $version, ?array $passiveSegmentRef = null, ?\Travelport\UniversalRecord\StructType\FileFinishingInfo $fileFinishingInfo = null, ?string $providerCode = null, ?string $providerLocatorCode = null)
    {
        $this
            ->setPassiveReservationLocatorCode($passiveReservationLocatorCode)
            ->setVersion($version)
            ->setPassiveSegmentRef($passiveSegmentRef)
            ->setFileFinishingInfo($fileFinishingInfo)
            ->setProviderCode($providerCode)
            ->setProviderLocatorCode($providerLocatorCode);
    }
    /**
     * Get PassiveReservationLocatorCode value
     * @return string
     */
    public function getPassiveReservationLocatorCode(): string
    {
        return $this->PassiveReservationLocatorCode;
    }
    /**
     * Set PassiveReservationLocatorCode value
     * @param string $passiveReservationLocatorCode
     * @return \Travelport\UniversalRecord\StructType\PassiveCancelReq
     */
    public function setPassiveReservationLocatorCode(string $passiveReservationLocatorCode): self
    {
        $this->PassiveReservationLocatorCode = $passiveReservationLocatorCode;
        
        return $this;
    }
    /**
     * Get Version value
     * @return int
     */
    public function getVersion(): int
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param int $version
     * @return \Travelport\UniversalRecord\StructType\PassiveCancelReq
     */
    public function setVersion(int $version): self
    {
        $this->Version = $version;
        
        return $this;
    }
    /**
     * Get PassiveSegmentRef value
     * @return \Travelport\UniversalRecord\StructType\PassiveSegmentRef[]
     */
    public function getPassiveSegmentRef(): ?array
    {
        return $this->PassiveSegmentRef;
    }
    /**
     * Set PassiveSegmentRef value
     * @param \Travelport\UniversalRecord\StructType\PassiveSegmentRef[] $passiveSegmentRef
     * @return \Travelport\UniversalRecord\StructType\PassiveCancelReq
     */
    public function setPassiveSegmentRef(?array $passiveSegmentRef = null): self
    {
        $this->PassiveSegmentRef = $passiveSegmentRef;
        
        return $this;
    }
    /**
     * Add item to PassiveSegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PassiveSegmentRef $item
     * @return \Travelport\UniversalRecord\StructType\PassiveCancelReq
     */
    public function addToPassiveSegmentRef(\Travelport\UniversalRecord\StructType\PassiveSegmentRef $item): self
    {
        $this->PassiveSegmentRef[] = $item;
        
        return $this;
    }
    /**
     * Get FileFinishingInfo value
     * @return \Travelport\UniversalRecord\StructType\FileFinishingInfo|null
     */
    public function getFileFinishingInfo(): ?\Travelport\UniversalRecord\StructType\FileFinishingInfo
    {
        return $this->FileFinishingInfo;
    }
    /**
     * Set FileFinishingInfo value
     * @param \Travelport\UniversalRecord\StructType\FileFinishingInfo $fileFinishingInfo
     * @return \Travelport\UniversalRecord\StructType\PassiveCancelReq
     */
    public function setFileFinishingInfo(?\Travelport\UniversalRecord\StructType\FileFinishingInfo $fileFinishingInfo = null): self
    {
        $this->FileFinishingInfo = $fileFinishingInfo;
        
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
     * @return \Travelport\UniversalRecord\StructType\PassiveCancelReq
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get ProviderLocatorCode value
     * @return string|null
     */
    public function getProviderLocatorCode(): ?string
    {
        return $this->ProviderLocatorCode;
    }
    /**
     * Set ProviderLocatorCode value
     * @param string $providerLocatorCode
     * @return \Travelport\UniversalRecord\StructType\PassiveCancelReq
     */
    public function setProviderLocatorCode(?string $providerLocatorCode = null): self
    {
        $this->ProviderLocatorCode = $providerLocatorCode;
        
        return $this;
    }
}
