<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?\Travelport\UniversalRecord\StructType\TypeDateSpec $CheckInDate = null;
    /**
     * The HotelChainCode
     * Meta information extracted from the WSDL
     * - documentation: Hotel Chain Code | 2 Letter Hotel Chain Code
     * - base: xs:string
     * - length: 2
     * @var string|null
     */
    public ?string $HotelChainCode = null;
    /**
     * The HotelCode
     * Meta information extracted from the WSDL
     * - documentation: Unique hotel identifier for the channel
     * - base: xs:string
     * - maxLength: 32
     * @var string|null
     */
    public ?string $HotelCode = null;
    /**
     * The HotelConfirmation
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $HotelConfirmation = null;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Location = null;
    /**
     * The PassiveOnly
     * Meta information extracted from the WSDL
     * - documentation: Search for Passives Only
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $PassiveOnly = null;
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
        $this->PassiveOnly = $passiveOnly;
        
        return $this;
    }
}
