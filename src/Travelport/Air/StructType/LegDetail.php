<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LegDetail StructType
 * Meta information extracted from the WSDL
 * - documentation: Information about the journey Leg, Shared by Leg and LegPrice Elements
 * @subpackage Structs
 */
class LegDetail extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Key;
    /**
     * The OriginAirport
     * Meta information extracted from the WSDL
     * - documentation: Returns the origin airport code for the Leg Detail. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    public string $OriginAirport;
    /**
     * The DestinationAirport
     * Meta information extracted from the WSDL
     * - documentation: Returns the destination airport code for the Leg Detail. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    public string $DestinationAirport;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: Carrier for the Search Leg Detail. | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    public string $Carrier;
    /**
     * The TravelDate
     * Meta information extracted from the WSDL
     * - documentation: The Departure date and time for this Leg Detail.
     * - use: optional
     * @var string|null
     */
    public ?string $TravelDate = null;
    /**
     * The FlightNumber
     * Meta information extracted from the WSDL
     * - documentation: Flight Number for the Search Leg Detail. | flight number type.
     * - base: xs:string
     * - maxLength: 5
     * - use: optional
     * @var string|null
     */
    public ?string $FlightNumber = null;
    /**
     * Constructor method for LegDetail
     * @uses LegDetail::setKey()
     * @uses LegDetail::setOriginAirport()
     * @uses LegDetail::setDestinationAirport()
     * @uses LegDetail::setCarrier()
     * @uses LegDetail::setTravelDate()
     * @uses LegDetail::setFlightNumber()
     * @param string $key
     * @param string $originAirport
     * @param string $destinationAirport
     * @param string $carrier
     * @param string $travelDate
     * @param string $flightNumber
     */
    public function __construct(string $key, string $originAirport, string $destinationAirport, string $carrier, ?string $travelDate = null, ?string $flightNumber = null)
    {
        $this
            ->setKey($key)
            ->setOriginAirport($originAirport)
            ->setDestinationAirport($destinationAirport)
            ->setCarrier($carrier)
            ->setTravelDate($travelDate)
            ->setFlightNumber($flightNumber);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Air\StructType\LegDetail
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get OriginAirport value
     * @return string
     */
    public function getOriginAirport(): string
    {
        return $this->OriginAirport;
    }
    /**
     * Set OriginAirport value
     * @param string $originAirport
     * @return \Travelport\Air\StructType\LegDetail
     */
    public function setOriginAirport(string $originAirport): self
    {
        $this->OriginAirport = $originAirport;
        
        return $this;
    }
    /**
     * Get DestinationAirport value
     * @return string
     */
    public function getDestinationAirport(): string
    {
        return $this->DestinationAirport;
    }
    /**
     * Set DestinationAirport value
     * @param string $destinationAirport
     * @return \Travelport\Air\StructType\LegDetail
     */
    public function setDestinationAirport(string $destinationAirport): self
    {
        $this->DestinationAirport = $destinationAirport;
        
        return $this;
    }
    /**
     * Get Carrier value
     * @return string
     */
    public function getCarrier(): string
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @param string $carrier
     * @return \Travelport\Air\StructType\LegDetail
     */
    public function setCarrier(string $carrier): self
    {
        $this->Carrier = $carrier;
        
        return $this;
    }
    /**
     * Get TravelDate value
     * @return string|null
     */
    public function getTravelDate(): ?string
    {
        return $this->TravelDate;
    }
    /**
     * Set TravelDate value
     * @param string $travelDate
     * @return \Travelport\Air\StructType\LegDetail
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        $this->TravelDate = $travelDate;
        
        return $this;
    }
    /**
     * Get FlightNumber value
     * @return string|null
     */
    public function getFlightNumber(): ?string
    {
        return $this->FlightNumber;
    }
    /**
     * Set FlightNumber value
     * @param string $flightNumber
     * @return \Travelport\Air\StructType\LegDetail
     */
    public function setFlightNumber(?string $flightNumber = null): self
    {
        $this->FlightNumber = $flightNumber;
        
        return $this;
    }
}
