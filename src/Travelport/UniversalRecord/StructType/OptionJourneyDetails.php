<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OptionJourneyDetails StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains PickUp Return Details for that Cruise Feature/Option Service.
 * @subpackage Structs
 */
class OptionJourneyDetails extends AbstractStructBase
{
    /**
     * The PickUpLocation
     * Meta information extracted from the WSDL
     * - documentation: IATA/Non-IATA Location Code for Pickup. Examples:YVR | Used for Character Strings, length 1 to 5.
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $PickUpLocation = null;
    /**
     * The PickUpTime
     * Meta information extracted from the WSDL
     * - documentation: PickUp Time
     * - use: optional
     * @var string|null
     */
    public ?string $PickUpTime = null;
    /**
     * The PickUpDescription
     * Meta information extracted from the WSDL
     * - documentation: PickUp Location Description | Used for Character Strings, length 1 to 30.
     * - base: xs:string
     * - maxLength: 30
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $PickUpDescription = null;
    /**
     * The PickUpCarrier
     * Meta information extracted from the WSDL
     * - documentation: The carrier that is marketing this segment. | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $PickUpCarrier = null;
    /**
     * The PickUpFlightNumber
     * Meta information extracted from the WSDL
     * - documentation: The flight number under which the marketing carrier is marketing carrier is marketing this flight | flight number type.
     * - base: xs:string
     * - maxLength: 5
     * - use: optional
     * @var string|null
     */
    public ?string $PickUpFlightNumber = null;
    /**
     * The ReturnLocation
     * Meta information extracted from the WSDL
     * - documentation: IATA/Non-IATA Location Code for Drop Off. Examples:YVR | Used for Character Strings, length 1 to 5.
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $ReturnLocation = null;
    /**
     * The ReturnTime
     * Meta information extracted from the WSDL
     * - documentation: Return time
     * - use: optional
     * @var string|null
     */
    public ?string $ReturnTime = null;
    /**
     * The ReturnDescription
     * Meta information extracted from the WSDL
     * - documentation: Return Location Description | Used for Character Strings, length 1 to 30.
     * - base: xs:string
     * - maxLength: 30
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $ReturnDescription = null;
    /**
     * The ReturnCarrier
     * Meta information extracted from the WSDL
     * - documentation: The carrier that is marketing this segment. | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $ReturnCarrier = null;
    /**
     * The ReturnFlightNumber
     * Meta information extracted from the WSDL
     * - documentation: The flight number under which the marketing carrier is marketing carrier is marketing this flight | flight number type.
     * - base: xs:string
     * - maxLength: 5
     * - use: optional
     * @var string|null
     */
    public ?string $ReturnFlightNumber = null;
    /**
     * Constructor method for OptionJourneyDetails
     * @uses OptionJourneyDetails::setPickUpLocation()
     * @uses OptionJourneyDetails::setPickUpTime()
     * @uses OptionJourneyDetails::setPickUpDescription()
     * @uses OptionJourneyDetails::setPickUpCarrier()
     * @uses OptionJourneyDetails::setPickUpFlightNumber()
     * @uses OptionJourneyDetails::setReturnLocation()
     * @uses OptionJourneyDetails::setReturnTime()
     * @uses OptionJourneyDetails::setReturnDescription()
     * @uses OptionJourneyDetails::setReturnCarrier()
     * @uses OptionJourneyDetails::setReturnFlightNumber()
     * @param string $pickUpLocation
     * @param string $pickUpTime
     * @param string $pickUpDescription
     * @param string $pickUpCarrier
     * @param string $pickUpFlightNumber
     * @param string $returnLocation
     * @param string $returnTime
     * @param string $returnDescription
     * @param string $returnCarrier
     * @param string $returnFlightNumber
     */
    public function __construct(?string $pickUpLocation = null, ?string $pickUpTime = null, ?string $pickUpDescription = null, ?string $pickUpCarrier = null, ?string $pickUpFlightNumber = null, ?string $returnLocation = null, ?string $returnTime = null, ?string $returnDescription = null, ?string $returnCarrier = null, ?string $returnFlightNumber = null)
    {
        $this
            ->setPickUpLocation($pickUpLocation)
            ->setPickUpTime($pickUpTime)
            ->setPickUpDescription($pickUpDescription)
            ->setPickUpCarrier($pickUpCarrier)
            ->setPickUpFlightNumber($pickUpFlightNumber)
            ->setReturnLocation($returnLocation)
            ->setReturnTime($returnTime)
            ->setReturnDescription($returnDescription)
            ->setReturnCarrier($returnCarrier)
            ->setReturnFlightNumber($returnFlightNumber);
    }
    /**
     * Get PickUpLocation value
     * @return string|null
     */
    public function getPickUpLocation(): ?string
    {
        return $this->PickUpLocation;
    }
    /**
     * Set PickUpLocation value
     * @param string $pickUpLocation
     * @return \Travelport\UniversalRecord\StructType\OptionJourneyDetails
     */
    public function setPickUpLocation(?string $pickUpLocation = null): self
    {
        $this->PickUpLocation = $pickUpLocation;
        
        return $this;
    }
    /**
     * Get PickUpTime value
     * @return string|null
     */
    public function getPickUpTime(): ?string
    {
        return $this->PickUpTime;
    }
    /**
     * Set PickUpTime value
     * @param string $pickUpTime
     * @return \Travelport\UniversalRecord\StructType\OptionJourneyDetails
     */
    public function setPickUpTime(?string $pickUpTime = null): self
    {
        $this->PickUpTime = $pickUpTime;
        
        return $this;
    }
    /**
     * Get PickUpDescription value
     * @return string|null
     */
    public function getPickUpDescription(): ?string
    {
        return $this->PickUpDescription;
    }
    /**
     * Set PickUpDescription value
     * @param string $pickUpDescription
     * @return \Travelport\UniversalRecord\StructType\OptionJourneyDetails
     */
    public function setPickUpDescription(?string $pickUpDescription = null): self
    {
        $this->PickUpDescription = $pickUpDescription;
        
        return $this;
    }
    /**
     * Get PickUpCarrier value
     * @return string|null
     */
    public function getPickUpCarrier(): ?string
    {
        return $this->PickUpCarrier;
    }
    /**
     * Set PickUpCarrier value
     * @param string $pickUpCarrier
     * @return \Travelport\UniversalRecord\StructType\OptionJourneyDetails
     */
    public function setPickUpCarrier(?string $pickUpCarrier = null): self
    {
        $this->PickUpCarrier = $pickUpCarrier;
        
        return $this;
    }
    /**
     * Get PickUpFlightNumber value
     * @return string|null
     */
    public function getPickUpFlightNumber(): ?string
    {
        return $this->PickUpFlightNumber;
    }
    /**
     * Set PickUpFlightNumber value
     * @param string $pickUpFlightNumber
     * @return \Travelport\UniversalRecord\StructType\OptionJourneyDetails
     */
    public function setPickUpFlightNumber(?string $pickUpFlightNumber = null): self
    {
        $this->PickUpFlightNumber = $pickUpFlightNumber;
        
        return $this;
    }
    /**
     * Get ReturnLocation value
     * @return string|null
     */
    public function getReturnLocation(): ?string
    {
        return $this->ReturnLocation;
    }
    /**
     * Set ReturnLocation value
     * @param string $returnLocation
     * @return \Travelport\UniversalRecord\StructType\OptionJourneyDetails
     */
    public function setReturnLocation(?string $returnLocation = null): self
    {
        $this->ReturnLocation = $returnLocation;
        
        return $this;
    }
    /**
     * Get ReturnTime value
     * @return string|null
     */
    public function getReturnTime(): ?string
    {
        return $this->ReturnTime;
    }
    /**
     * Set ReturnTime value
     * @param string $returnTime
     * @return \Travelport\UniversalRecord\StructType\OptionJourneyDetails
     */
    public function setReturnTime(?string $returnTime = null): self
    {
        $this->ReturnTime = $returnTime;
        
        return $this;
    }
    /**
     * Get ReturnDescription value
     * @return string|null
     */
    public function getReturnDescription(): ?string
    {
        return $this->ReturnDescription;
    }
    /**
     * Set ReturnDescription value
     * @param string $returnDescription
     * @return \Travelport\UniversalRecord\StructType\OptionJourneyDetails
     */
    public function setReturnDescription(?string $returnDescription = null): self
    {
        $this->ReturnDescription = $returnDescription;
        
        return $this;
    }
    /**
     * Get ReturnCarrier value
     * @return string|null
     */
    public function getReturnCarrier(): ?string
    {
        return $this->ReturnCarrier;
    }
    /**
     * Set ReturnCarrier value
     * @param string $returnCarrier
     * @return \Travelport\UniversalRecord\StructType\OptionJourneyDetails
     */
    public function setReturnCarrier(?string $returnCarrier = null): self
    {
        $this->ReturnCarrier = $returnCarrier;
        
        return $this;
    }
    /**
     * Get ReturnFlightNumber value
     * @return string|null
     */
    public function getReturnFlightNumber(): ?string
    {
        return $this->ReturnFlightNumber;
    }
    /**
     * Set ReturnFlightNumber value
     * @param string $returnFlightNumber
     * @return \Travelport\UniversalRecord\StructType\OptionJourneyDetails
     */
    public function setReturnFlightNumber(?string $returnFlightNumber = null): self
    {
        $this->ReturnFlightNumber = $returnFlightNumber;
        
        return $this;
    }
}
