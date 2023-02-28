<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $UniversalRecordLocatorCode;
    /**
     * The ProviderReservationInfo
     * Meta information extracted from the WSDL
     * - choice: UniversalRecordLocatorCode | ProviderReservationInfo
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Travelport\UniversalRecord\StructType\ProviderReservationInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ProviderReservationInfo $ProviderReservationInfo = null;
    /**
     * The ViewOnlyInd
     * Meta information extracted from the WSDL
     * - documentation: True-Retrieves the PNR in UR Format, but doesn't create an actual UR in UAPI. False-Creates and Retrieves an actual UR. Default false.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ViewOnlyInd = null;
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
    protected ?string $TravelerLastName = null;
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
    protected ?string $TravelerFirstName = null;
    /**
     * The ReturnUnmaskedData
     * Meta information extracted from the WSDL
     * - documentation: When set as True in the request and AAT settings are set to display Unmasked details in the host, then details will be shown in the response. Only supports credit card and debit card. Default value of ReturnUnmaskedData is false.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ReturnUnmaskedData = null;
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
     * This method is responsible for validating the value(s) passed to the setUniversalRecordLocatorCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUniversalRecordLocatorCode method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUniversalRecordLocatorCodeForChoiceConstraintFromSetUniversalRecordLocatorCode($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'ProviderReservationInfo',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property UniversalRecordLocatorCode can\'t be set as the property %s is already set. Only one property must be set among these properties: UniversalRecordLocatorCode, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set UniversalRecordLocatorCode value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $universalRecordLocatorCode
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordRetrieveReq
     */
    public function setUniversalRecordLocatorCode(string $universalRecordLocatorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($universalRecordLocatorCode) && !is_string($universalRecordLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($universalRecordLocatorCode, true), gettype($universalRecordLocatorCode)), __LINE__);
        }
        // validation for constraint: choice(UniversalRecordLocatorCode, ProviderReservationInfo)
        if ('' !== ($universalRecordLocatorCodeChoiceErrorMessage = self::validateUniversalRecordLocatorCodeForChoiceConstraintFromSetUniversalRecordLocatorCode($universalRecordLocatorCode))) {
            throw new InvalidArgumentException($universalRecordLocatorCodeChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($universalRecordLocatorCode) && mb_strlen((string) $universalRecordLocatorCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $universalRecordLocatorCode)), __LINE__);
        }
        // validation for constraint: minLength(5)
        if (!is_null($universalRecordLocatorCode) && mb_strlen((string) $universalRecordLocatorCode) < 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 5', mb_strlen((string) $universalRecordLocatorCode)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setProviderReservationInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProviderReservationInfo method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateProviderReservationInfoForChoiceConstraintFromSetProviderReservationInfo($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'UniversalRecordLocatorCode',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property ProviderReservationInfo can\'t be set as the property %s is already set. Only one property must be set among these properties: ProviderReservationInfo, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ProviderReservationInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationInfo $providerReservationInfo
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordRetrieveReq
     */
    public function setProviderReservationInfo(?\Travelport\UniversalRecord\StructType\ProviderReservationInfo $providerReservationInfo = null): self
    {
        // validation for constraint: choice(UniversalRecordLocatorCode, ProviderReservationInfo)
        if ('' !== ($providerReservationInfoChoiceErrorMessage = self::validateProviderReservationInfoForChoiceConstraintFromSetProviderReservationInfo($providerReservationInfo))) {
            throw new InvalidArgumentException($providerReservationInfoChoiceErrorMessage, __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($viewOnlyInd) && !is_bool($viewOnlyInd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($viewOnlyInd, true), gettype($viewOnlyInd)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($travelerLastName) && !is_string($travelerLastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelerLastName, true), gettype($travelerLastName)), __LINE__);
        }
        // validation for constraint: maxLength(256)
        if (!is_null($travelerLastName) && mb_strlen((string) $travelerLastName) > 256) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 256', mb_strlen((string) $travelerLastName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($travelerLastName) && mb_strlen((string) $travelerLastName) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $travelerLastName)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($travelerFirstName) && !is_string($travelerFirstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelerFirstName, true), gettype($travelerFirstName)), __LINE__);
        }
        // validation for constraint: maxLength(256)
        if (!is_null($travelerFirstName) && mb_strlen((string) $travelerFirstName) > 256) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 256', mb_strlen((string) $travelerFirstName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($travelerFirstName) && mb_strlen((string) $travelerFirstName) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $travelerFirstName)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($returnUnmaskedData) && !is_bool($returnUnmaskedData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnUnmaskedData, true), gettype($returnUnmaskedData)), __LINE__);
        }
        $this->ReturnUnmaskedData = $returnUnmaskedData;
        
        return $this;
    }
}
