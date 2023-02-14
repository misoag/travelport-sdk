<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected string $Key;
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
    protected string $OriginAirport;
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
    protected string $DestinationAirport;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: Carrier for the Search Leg Detail. | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    protected string $Carrier;
    /**
     * The TravelDate
     * Meta information extracted from the WSDL
     * - documentation: The Departure date and time for this Leg Detail.
     * - use: optional
     * @var string|null
     */
    protected ?string $TravelDate = null;
    /**
     * The FlightNumber
     * Meta information extracted from the WSDL
     * - documentation: Flight Number for the Search Leg Detail. | flight number type.
     * - base: xs:string
     * - maxLength: 5
     * - use: optional
     * @var string|null
     */
    protected ?string $FlightNumber = null;
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
     * @return \Travelport\Util\StructType\LegDetail
     */
    public function setKey(string $key): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\LegDetail
     */
    public function setOriginAirport(string $originAirport): self
    {
        // validation for constraint: string
        if (!is_null($originAirport) && !is_string($originAirport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originAirport, true), gettype($originAirport)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($originAirport) && mb_strlen((string) $originAirport) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $originAirport)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\LegDetail
     */
    public function setDestinationAirport(string $destinationAirport): self
    {
        // validation for constraint: string
        if (!is_null($destinationAirport) && !is_string($destinationAirport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationAirport, true), gettype($destinationAirport)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($destinationAirport) && mb_strlen((string) $destinationAirport) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $destinationAirport)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\LegDetail
     */
    public function setCarrier(string $carrier): self
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrier, true), gettype($carrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($carrier) && mb_strlen((string) $carrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $carrier)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\LegDetail
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\LegDetail
     */
    public function setFlightNumber(?string $flightNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($flightNumber) && !is_string($flightNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightNumber, true), gettype($flightNumber)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($flightNumber) && mb_strlen((string) $flightNumber) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $flightNumber)), __LINE__);
        }
        $this->FlightNumber = $flightNumber;
        
        return $this;
    }
}
