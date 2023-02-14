<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $PassiveReservationLocatorCode;
    /**
     * The Version
     * Meta information extracted from the WSDL
     * - documentation: Version of the Universal record. Required with any request to modify the existing Universal record.
     * - base: xs:integer
     * - use: required
     * @var int
     */
    protected int $Version;
    /**
     * The PassiveSegmentRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: passive:PassiveSegmentRef
     * @var \Travelport\UniversalRecord\StructType\PassiveSegmentRef[]
     */
    protected ?array $PassiveSegmentRef = null;
    /**
     * The FileFinishingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:FileFinishingInfo
     * @var \Travelport\UniversalRecord\StructType\FileFinishingInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\FileFinishingInfo $FileFinishingInfo = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * @var string|null
     */
    protected ?string $ProviderCode = null;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Provider Reservation or searches for one.
     * - base: xs:string
     * - maxLength: 15
     * @var string|null
     */
    protected ?string $ProviderLocatorCode = null;
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
        // validation for constraint: string
        if (!is_null($passiveReservationLocatorCode) && !is_string($passiveReservationLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passiveReservationLocatorCode, true), gettype($passiveReservationLocatorCode)), __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($version) && !(is_int($version) || ctype_digit($version))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setPassiveSegmentRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPassiveSegmentRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePassiveSegmentRefForArrayConstraintsFromSetPassiveSegmentRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $passiveCancelReqPassiveSegmentRefItem) {
            // validation for constraint: itemType
            if (!$passiveCancelReqPassiveSegmentRefItem instanceof \Travelport\UniversalRecord\StructType\PassiveSegmentRef) {
                $invalidValues[] = is_object($passiveCancelReqPassiveSegmentRefItem) ? get_class($passiveCancelReqPassiveSegmentRefItem) : sprintf('%s(%s)', gettype($passiveCancelReqPassiveSegmentRefItem), var_export($passiveCancelReqPassiveSegmentRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PassiveSegmentRef property can only contain items of type \Travelport\UniversalRecord\StructType\PassiveSegmentRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PassiveSegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PassiveSegmentRef[] $passiveSegmentRef
     * @return \Travelport\UniversalRecord\StructType\PassiveCancelReq
     */
    public function setPassiveSegmentRef(?array $passiveSegmentRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($passiveSegmentRefArrayErrorMessage = self::validatePassiveSegmentRefForArrayConstraintsFromSetPassiveSegmentRef($passiveSegmentRef))) {
            throw new InvalidArgumentException($passiveSegmentRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($passiveSegmentRef) && count($passiveSegmentRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($passiveSegmentRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\PassiveSegmentRef) {
            throw new InvalidArgumentException(sprintf('The PassiveSegmentRef property can only contain items of type \Travelport\UniversalRecord\StructType\PassiveSegmentRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PassiveSegmentRef) && count($this->PassiveSegmentRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PassiveSegmentRef)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($providerLocatorCode) && !is_string($providerLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerLocatorCode, true), gettype($providerLocatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($providerLocatorCode) && mb_strlen((string) $providerLocatorCode) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen((string) $providerLocatorCode)), __LINE__);
        }
        $this->ProviderLocatorCode = $providerLocatorCode;
        
        return $this;
    }
}
