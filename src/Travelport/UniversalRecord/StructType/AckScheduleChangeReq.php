<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AckScheduleChangeReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to acknowledge you have received the schedule change notification
 * @subpackage Structs
 */
class AckScheduleChangeReq extends BaseReq
{
    /**
     * The UniversalRecordLocatorCode
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $UniversalRecordLocatorCode;
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
     * The ReservationLocatorCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ReservationLocatorCode = null;
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
     * Constructor method for AckScheduleChangeReq
     * @uses AckScheduleChangeReq::setUniversalRecordLocatorCode()
     * @uses AckScheduleChangeReq::setVersion()
     * @uses AckScheduleChangeReq::setReservationLocatorCode()
     * @uses AckScheduleChangeReq::setProviderCode()
     * @uses AckScheduleChangeReq::setProviderLocatorCode()
     * @param string $universalRecordLocatorCode
     * @param int $version
     * @param string $reservationLocatorCode
     * @param string $providerCode
     * @param string $providerLocatorCode
     */
    public function __construct(string $universalRecordLocatorCode, int $version, ?string $reservationLocatorCode = null, ?string $providerCode = null, ?string $providerLocatorCode = null)
    {
        $this
            ->setUniversalRecordLocatorCode($universalRecordLocatorCode)
            ->setVersion($version)
            ->setReservationLocatorCode($reservationLocatorCode)
            ->setProviderCode($providerCode)
            ->setProviderLocatorCode($providerLocatorCode);
    }
    /**
     * Get UniversalRecordLocatorCode value
     * @return string
     */
    public function getUniversalRecordLocatorCode(): string
    {
        return $this->UniversalRecordLocatorCode;
    }
    /**
     * Set UniversalRecordLocatorCode value
     * @param string $universalRecordLocatorCode
     * @return \Travelport\UniversalRecord\StructType\AckScheduleChangeReq
     */
    public function setUniversalRecordLocatorCode(string $universalRecordLocatorCode): self
    {
        // validation for constraint: string
        if (!is_null($universalRecordLocatorCode) && !is_string($universalRecordLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($universalRecordLocatorCode, true), gettype($universalRecordLocatorCode)), __LINE__);
        }
        $this->UniversalRecordLocatorCode = $universalRecordLocatorCode;
        
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
     * @return \Travelport\UniversalRecord\StructType\AckScheduleChangeReq
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
     * Get ReservationLocatorCode value
     * @return string|null
     */
    public function getReservationLocatorCode(): ?string
    {
        return $this->ReservationLocatorCode;
    }
    /**
     * Set ReservationLocatorCode value
     * @param string $reservationLocatorCode
     * @return \Travelport\UniversalRecord\StructType\AckScheduleChangeReq
     */
    public function setReservationLocatorCode(?string $reservationLocatorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($reservationLocatorCode) && !is_string($reservationLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reservationLocatorCode, true), gettype($reservationLocatorCode)), __LINE__);
        }
        $this->ReservationLocatorCode = $reservationLocatorCode;
        
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
     * @return \Travelport\UniversalRecord\StructType\AckScheduleChangeReq
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
     * @return \Travelport\UniversalRecord\StructType\AckScheduleChangeReq
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
