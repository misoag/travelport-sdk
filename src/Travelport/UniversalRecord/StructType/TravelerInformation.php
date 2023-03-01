<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelerInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: Traveler Information required for File Finishing
 * @subpackage Structs
 */
class TravelerInformation extends AbstractStructBase
{
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: A reference to a passenger. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $BookingTravelerRef;
    /**
     * The EmergencyContact
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\EmergencyContact|null
     */
    public ?\Travelport\UniversalRecord\StructType\EmergencyContact $EmergencyContact = null;
    /**
     * The HomeAirport
     * Meta information extracted from the WSDL
     * - documentation: 3 Letter Airport Code
     * - base: xs:string
     * - length: 3
     * @var string|null
     */
    public ?string $HomeAirport = null;
    /**
     * The VisaExpirationDate
     * @var string|null
     */
    public ?string $VisaExpirationDate = null;
    /**
     * Constructor method for TravelerInformation
     * @uses TravelerInformation::setBookingTravelerRef()
     * @uses TravelerInformation::setEmergencyContact()
     * @uses TravelerInformation::setHomeAirport()
     * @uses TravelerInformation::setVisaExpirationDate()
     * @param string $bookingTravelerRef
     * @param \Travelport\UniversalRecord\StructType\EmergencyContact $emergencyContact
     * @param string $homeAirport
     * @param string $visaExpirationDate
     */
    public function __construct(string $bookingTravelerRef, ?\Travelport\UniversalRecord\StructType\EmergencyContact $emergencyContact = null, ?string $homeAirport = null, ?string $visaExpirationDate = null)
    {
        $this
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setEmergencyContact($emergencyContact)
            ->setHomeAirport($homeAirport)
            ->setVisaExpirationDate($visaExpirationDate);
    }
    /**
     * Get BookingTravelerRef value
     * @return string
     */
    public function getBookingTravelerRef(): string
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param string $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\TravelerInformation
     */
    public function setBookingTravelerRef(string $bookingTravelerRef): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Get EmergencyContact value
     * @return \Travelport\UniversalRecord\StructType\EmergencyContact|null
     */
    public function getEmergencyContact(): ?\Travelport\UniversalRecord\StructType\EmergencyContact
    {
        return $this->EmergencyContact;
    }
    /**
     * Set EmergencyContact value
     * @param \Travelport\UniversalRecord\StructType\EmergencyContact $emergencyContact
     * @return \Travelport\UniversalRecord\StructType\TravelerInformation
     */
    public function setEmergencyContact(?\Travelport\UniversalRecord\StructType\EmergencyContact $emergencyContact = null): self
    {
        $this->EmergencyContact = $emergencyContact;
        
        return $this;
    }
    /**
     * Get HomeAirport value
     * @return string|null
     */
    public function getHomeAirport(): ?string
    {
        return $this->HomeAirport;
    }
    /**
     * Set HomeAirport value
     * @param string $homeAirport
     * @return \Travelport\UniversalRecord\StructType\TravelerInformation
     */
    public function setHomeAirport(?string $homeAirport = null): self
    {
        $this->HomeAirport = $homeAirport;
        
        return $this;
    }
    /**
     * Get VisaExpirationDate value
     * @return string|null
     */
    public function getVisaExpirationDate(): ?string
    {
        return $this->VisaExpirationDate;
    }
    /**
     * Set VisaExpirationDate value
     * @param string $visaExpirationDate
     * @return \Travelport\UniversalRecord\StructType\TravelerInformation
     */
    public function setVisaExpirationDate(?string $visaExpirationDate = null): self
    {
        $this->VisaExpirationDate = $visaExpirationDate;
        
        return $this;
    }
}
