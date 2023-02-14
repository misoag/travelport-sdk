<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReservationCriteria StructType
 * Meta information extracted from the WSDL
 * - documentation: Criteria for searching the Hotel reservations
 * @subpackage Structs
 */
class HotelReservationCriteria extends AbstractStructBase
{
    /**
     * The CheckInDate
     * Meta information extracted from the WSDL
     * - documentation: Hotel Check In Date or Date Range
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeDateSpec|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TypeDateSpec $CheckInDate = null;
    /**
     * The HotelChainCode
     * Meta information extracted from the WSDL
     * - documentation: Hotel Chain Code | 2 Letter Hotel Chain Code
     * - base: xs:string
     * - length: 2
     * @var string|null
     */
    protected ?string $HotelChainCode = null;
    /**
     * The HotelCode
     * Meta information extracted from the WSDL
     * - documentation: Unique hotel identifier for the channel
     * - base: xs:string
     * - maxLength: 32
     * @var string|null
     */
    protected ?string $HotelCode = null;
    /**
     * The HotelConfirmation
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $HotelConfirmation = null;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Location = null;
    /**
     * The PassiveOnly
     * Meta information extracted from the WSDL
     * - documentation: Search for Passives Only
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $PassiveOnly = null;
    /**
     * Constructor method for HotelReservationCriteria
     * @uses HotelReservationCriteria::setCheckInDate()
     * @uses HotelReservationCriteria::setHotelChainCode()
     * @uses HotelReservationCriteria::setHotelCode()
     * @uses HotelReservationCriteria::setHotelConfirmation()
     * @uses HotelReservationCriteria::setLocation()
     * @uses HotelReservationCriteria::setPassiveOnly()
     * @param \Travelport\UniversalRecord\StructType\TypeDateSpec $checkInDate
     * @param string $hotelChainCode
     * @param string $hotelCode
     * @param string $hotelConfirmation
     * @param string $location
     * @param bool $passiveOnly
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\TypeDateSpec $checkInDate = null, ?string $hotelChainCode = null, ?string $hotelCode = null, ?string $hotelConfirmation = null, ?string $location = null, ?bool $passiveOnly = false)
    {
        $this
            ->setCheckInDate($checkInDate)
            ->setHotelChainCode($hotelChainCode)
            ->setHotelCode($hotelCode)
            ->setHotelConfirmation($hotelConfirmation)
            ->setLocation($location)
            ->setPassiveOnly($passiveOnly);
    }
    /**
     * Get CheckInDate value
     * @return \Travelport\UniversalRecord\StructType\TypeDateSpec|null
     */
    public function getCheckInDate(): ?\Travelport\UniversalRecord\StructType\TypeDateSpec
    {
        return $this->CheckInDate;
    }
    /**
     * Set CheckInDate value
     * @param \Travelport\UniversalRecord\StructType\TypeDateSpec $checkInDate
     * @return \Travelport\UniversalRecord\StructType\HotelReservationCriteria
     */
    public function setCheckInDate(?\Travelport\UniversalRecord\StructType\TypeDateSpec $checkInDate = null): self
    {
        $this->CheckInDate = $checkInDate;
        
        return $this;
    }
    /**
     * Get HotelChainCode value
     * @return string|null
     */
    public function getHotelChainCode(): ?string
    {
        return $this->HotelChainCode;
    }
    /**
     * Set HotelChainCode value
     * @param string $hotelChainCode
     * @return \Travelport\UniversalRecord\StructType\HotelReservationCriteria
     */
    public function setHotelChainCode(?string $hotelChainCode = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelChainCode) && !is_string($hotelChainCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelChainCode, true), gettype($hotelChainCode)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($hotelChainCode) && mb_strlen((string) $hotelChainCode) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $hotelChainCode)), __LINE__);
        }
        $this->HotelChainCode = $hotelChainCode;
        
        return $this;
    }
    /**
     * Get HotelCode value
     * @return string|null
     */
    public function getHotelCode(): ?string
    {
        return $this->HotelCode;
    }
    /**
     * Set HotelCode value
     * @param string $hotelCode
     * @return \Travelport\UniversalRecord\StructType\HotelReservationCriteria
     */
    public function setHotelCode(?string $hotelCode = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelCode) && !is_string($hotelCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelCode, true), gettype($hotelCode)), __LINE__);
        }
        // validation for constraint: maxLength(32)
        if (!is_null($hotelCode) && mb_strlen((string) $hotelCode) > 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 32', mb_strlen((string) $hotelCode)), __LINE__);
        }
        $this->HotelCode = $hotelCode;
        
        return $this;
    }
    /**
     * Get HotelConfirmation value
     * @return string|null
     */
    public function getHotelConfirmation(): ?string
    {
        return $this->HotelConfirmation;
    }
    /**
     * Set HotelConfirmation value
     * @param string $hotelConfirmation
     * @return \Travelport\UniversalRecord\StructType\HotelReservationCriteria
     */
    public function setHotelConfirmation(?string $hotelConfirmation = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelConfirmation) && !is_string($hotelConfirmation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelConfirmation, true), gettype($hotelConfirmation)), __LINE__);
        }
        $this->HotelConfirmation = $hotelConfirmation;
        
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \Travelport\UniversalRecord\StructType\HotelReservationCriteria
     */
    public function setLocation(?string $location = null): self
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($location) && mb_strlen((string) $location) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $location)), __LINE__);
        }
        $this->Location = $location;
        
        return $this;
    }
    /**
     * Get PassiveOnly value
     * @return bool|null
     */
    public function getPassiveOnly(): ?bool
    {
        return $this->PassiveOnly;
    }
    /**
     * Set PassiveOnly value
     * @param bool $passiveOnly
     * @return \Travelport\UniversalRecord\StructType\HotelReservationCriteria
     */
    public function setPassiveOnly(?bool $passiveOnly = false): self
    {
        // validation for constraint: boolean
        if (!is_null($passiveOnly) && !is_bool($passiveOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($passiveOnly, true), gettype($passiveOnly)), __LINE__);
        }
        $this->PassiveOnly = $passiveOnly;
        
        return $this;
    }
}
