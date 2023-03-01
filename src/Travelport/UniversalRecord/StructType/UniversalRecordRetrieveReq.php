<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniversalRecordRetrieveReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to retrieve a summary information for reservations under a Universal Record
 * @subpackage Structs
 */
class UniversalRecordRetrieveReq extends BaseReq
{
    /**
     * The UniversalRecordLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Represents a valid Universal Recordlocator code | A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - choice: UniversalRecordLocatorCode | ProviderReservationInfo
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxLength: 8
     * - maxOccurs: 1
     * - minLength: 5
     * - minOccurs: 1
     * @var string
     */
    public string $UniversalRecordLocatorCode;
    /**
     * The ProviderReservationInfo
     * Meta information extracted from the WSDL
     * - choice: UniversalRecordLocatorCode | ProviderReservationInfo
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Travelport\UniversalRecord\StructType\ProviderReservationInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\ProviderReservationInfo $ProviderReservationInfo = null;
    /**
     * The ViewOnlyInd
     * Meta information extracted from the WSDL
     * - documentation: True-Retrieves the PNR in UR Format, but doesn't create an actual UR in UAPI. False-Creates and Retrieves an actual UR. Default false.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ViewOnlyInd = null;
    /**
     * The TravelerLastName
     * Meta information extracted from the WSDL
     * - documentation: Match Traveler Last Name. | Type for Traveler Last Name.
     * - base: xs:string
     * - maxLength: 256
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $TravelerLastName = null;
    /**
     * The TravelerFirstName
     * Meta information extracted from the WSDL
     * - documentation: Represents Traveler First Name for ACH PNR Retrieve. | Type for Traveler Last Name.
     * - base: xs:string
     * - maxLength: 256
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $TravelerFirstName = null;
    /**
     * The ReturnUnmaskedData
     * Meta information extracted from the WSDL
     * - documentation: When set as True in the request and AAT settings are set to display Unmasked details in the host, then details will be shown in the response. Only supports credit card and debit card. Default value of ReturnUnmaskedData is false.
     * - use: optional
     * @var bool|null
     */
    public ?bool $ReturnUnmaskedData = null;
    /**
     * Constructor method for UniversalRecordRetrieveReq
     * @uses UniversalRecordRetrieveReq::setUniversalRecordLocatorCode()
     * @uses UniversalRecordRetrieveReq::setProviderReservationInfo()
     * @uses UniversalRecordRetrieveReq::setViewOnlyInd()
     * @uses UniversalRecordRetrieveReq::setTravelerLastName()
     * @uses UniversalRecordRetrieveReq::setTravelerFirstName()
     * @uses UniversalRecordRetrieveReq::setReturnUnmaskedData()
     * @param string $universalRecordLocatorCode
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationInfo $providerReservationInfo
     * @param bool $viewOnlyInd
     * @param string $travelerLastName
     * @param string $travelerFirstName
     * @param bool $returnUnmaskedData
     */
    public function __construct(string $universalRecordLocatorCode = null, ?\Travelport\UniversalRecord\StructType\ProviderReservationInfo $providerReservationInfo = null, ?bool $viewOnlyInd = false, ?string $travelerLastName = null, ?string $travelerFirstName = null, ?bool $returnUnmaskedData = null)
    {
        $this
            ->setUniversalRecordLocatorCode($universalRecordLocatorCode)
            ->setProviderReservationInfo($providerReservationInfo)
            ->setViewOnlyInd($viewOnlyInd)
            ->setTravelerLastName($travelerLastName)
            ->setTravelerFirstName($travelerFirstName)
            ->setReturnUnmaskedData($returnUnmaskedData);
    }
    /**
     * Get UniversalRecordLocatorCode value
     * @return string|null
     */
    public function getUniversalRecordLocatorCode(): ?string
    {
        return $this->UniversalRecordLocatorCode ?? null;
    }
    /**
     * Set UniversalRecordLocatorCode value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param string $universalRecordLocatorCode
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordRetrieveReq
     */
    public function setUniversalRecordLocatorCode(string $universalRecordLocatorCode = null): self
    {
        if (is_null($universalRecordLocatorCode) || (is_array($universalRecordLocatorCode) && empty($universalRecordLocatorCode))) {
            unset($this->UniversalRecordLocatorCode);
        } else {
            $this->UniversalRecordLocatorCode = $universalRecordLocatorCode;
        }
        
        return $this;
    }
    /**
     * Get ProviderReservationInfo value
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo|null
     */
    public function getProviderReservationInfo(): ?\Travelport\UniversalRecord\StructType\ProviderReservationInfo
    {
        return $this->ProviderReservationInfo ?? null;
    }
    /**
     * Set ProviderReservationInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationInfo $providerReservationInfo
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordRetrieveReq
     */
    public function setProviderReservationInfo(?\Travelport\UniversalRecord\StructType\ProviderReservationInfo $providerReservationInfo = null): self
    {
        if (is_null($providerReservationInfo) || (is_array($providerReservationInfo) && empty($providerReservationInfo))) {
            unset($this->ProviderReservationInfo);
        } else {
            $this->ProviderReservationInfo = $providerReservationInfo;
        }
        
        return $this;
    }
    /**
     * Get ViewOnlyInd value
     * @return bool|null
     */
    public function getViewOnlyInd(): ?bool
    {
        return $this->ViewOnlyInd;
    }
    /**
     * Set ViewOnlyInd value
     * @param bool $viewOnlyInd
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordRetrieveReq
     */
    public function setViewOnlyInd(?bool $viewOnlyInd = false): self
    {
        $this->ViewOnlyInd = $viewOnlyInd;
        
        return $this;
    }
    /**
     * Get TravelerLastName value
     * @return string|null
     */
    public function getTravelerLastName(): ?string
    {
        return $this->TravelerLastName;
    }
    /**
     * Set TravelerLastName value
     * @param string $travelerLastName
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordRetrieveReq
     */
    public function setTravelerLastName(?string $travelerLastName = null): self
    {
        $this->TravelerLastName = $travelerLastName;
        
        return $this;
    }
    /**
     * Get TravelerFirstName value
     * @return string|null
     */
    public function getTravelerFirstName(): ?string
    {
        return $this->TravelerFirstName;
    }
    /**
     * Set TravelerFirstName value
     * @param string $travelerFirstName
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordRetrieveReq
     */
    public function setTravelerFirstName(?string $travelerFirstName = null): self
    {
        $this->TravelerFirstName = $travelerFirstName;
        
        return $this;
    }
    /**
     * Get ReturnUnmaskedData value
     * @return bool|null
     */
    public function getReturnUnmaskedData(): ?bool
    {
        return $this->ReturnUnmaskedData;
    }
    /**
     * Set ReturnUnmaskedData value
     * @param bool $returnUnmaskedData
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordRetrieveReq
     */
    public function setReturnUnmaskedData(?bool $returnUnmaskedData = null): self
    {
        $this->ReturnUnmaskedData = $returnUnmaskedData;
        
        return $this;
    }
}
