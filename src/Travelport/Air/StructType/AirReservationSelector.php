<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirReservationSelector StructType
 * Meta information extracted from the WSDL
 * - documentation: Provider: 1G,1V,1P,ACH-Parameters to use for a fare rule lookup associated with an Air Reservation Locator Code
 * @subpackage Structs
 */
class AirReservationSelector extends AbstractStructBase
{
    /**
     * The AirReservationLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: The Air Reservation locator code which is an unique identifier for the reservation | A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: required
     * @var string
     */
    public string $AirReservationLocatorCode;
    /**
     * The FareInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareInfoRef
     * @var \Travelport\Air\StructType\FareInfoRef[]
     */
    public ?array $FareInfoRef = null;
    /**
     * Constructor method for AirReservationSelector
     * @uses AirReservationSelector::setAirReservationLocatorCode()
     * @uses AirReservationSelector::setFareInfoRef()
     * @param string $airReservationLocatorCode
     * @param \Travelport\Air\StructType\FareInfoRef[] $fareInfoRef
     */
    public function __construct(string $airReservationLocatorCode, ?array $fareInfoRef = null)
    {
        $this
            ->setAirReservationLocatorCode($airReservationLocatorCode)
            ->setFareInfoRef($fareInfoRef);
    }
    /**
     * Get AirReservationLocatorCode value
     * @return string
     */
    public function getAirReservationLocatorCode(): string
    {
        return $this->AirReservationLocatorCode;
    }
    /**
     * Set AirReservationLocatorCode value
     * @param string $airReservationLocatorCode
     * @return \Travelport\Air\StructType\AirReservationSelector
     */
    public function setAirReservationLocatorCode(string $airReservationLocatorCode): self
    {
        $this->AirReservationLocatorCode = $airReservationLocatorCode;
        
        return $this;
    }
    /**
     * Get FareInfoRef value
     * @return \Travelport\Air\StructType\FareInfoRef[]
     */
    public function getFareInfoRef(): ?array
    {
        return $this->FareInfoRef;
    }
    /**
     * Set FareInfoRef value
     * @param \Travelport\Air\StructType\FareInfoRef[] $fareInfoRef
     * @return \Travelport\Air\StructType\AirReservationSelector
     */
    public function setFareInfoRef(?array $fareInfoRef = null): self
    {
        $this->FareInfoRef = $fareInfoRef;
        
        return $this;
    }
    /**
     * Add item to FareInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\FareInfoRef $item
     * @return \Travelport\Air\StructType\AirReservationSelector
     */
    public function addToFareInfoRef(\Travelport\Air\StructType\FareInfoRef $item): self
    {
        $this->FareInfoRef[] = $item;
        
        return $this;
    }
}
