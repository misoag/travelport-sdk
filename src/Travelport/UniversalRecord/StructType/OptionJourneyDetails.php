<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?string $PickUpLocation = null;
    /**
     * The PickUpTime
     * Meta information extracted from the WSDL
     * - documentation: PickUp Time
     * - use: optional
     * @var string|null
     */
    protected ?string $PickUpTime = null;
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
    protected ?string $PickUpDescription = null;
    /**
     * The PickUpCarrier
     * Meta information extracted from the WSDL
     * - documentation: The carrier that is marketing this segment. | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $PickUpCarrier = null;
    /**
     * The PickUpFlightNumber
     * Meta information extracted from the WSDL
     * - documentation: The flight number under which the marketing carrier is marketing carrier is marketing this flight | flight number type.
     * - base: xs:string
     * - maxLength: 5
     * - use: optional
     * @var string|null
     */
    protected ?string $PickUpFlightNumber = null;
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
    protected ?string $ReturnLocation = null;
    /**
     * The ReturnTime
     * Meta information extracted from the WSDL
     * - documentation: Return time
     * - use: optional
     * @var string|null
     */
    protected ?string $ReturnTime = null;
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
    protected ?string $ReturnDescription = null;
    /**
     * The ReturnCarrier
     * Meta information extracted from the WSDL
     * - documentation: The carrier that is marketing this segment. | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $ReturnCarrier = null;
    /**
     * The ReturnFlightNumber
     * Meta information extracted from the WSDL
     * - documentation: The flight number under which the marketing carrier is marketing carrier is marketing this flight | flight number type.
     * - base: xs:string
     * - maxLength: 5
     * - use: optional
     * @var string|null
     */
    protected ?string $ReturnFlightNumber = null;
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
        // validation for constraint: string
        if (!is_null($pickUpLocation) && !is_string($pickUpLocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickUpLocation, true), gettype($pickUpLocation)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($pickUpLocation) && mb_strlen((string) $pickUpLocation) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $pickUpLocation)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($pickUpLocation) && mb_strlen((string) $pickUpLocation) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $pickUpLocation)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($pickUpTime) && !is_string($pickUpTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickUpTime, true), gettype($pickUpTime)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($pickUpDescription) && !is_string($pickUpDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickUpDescription, true), gettype($pickUpDescription)), __LINE__);
        }
        // validation for constraint: maxLength(30)
        if (!is_null($pickUpDescription) && mb_strlen((string) $pickUpDescription) > 30) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 30', mb_strlen((string) $pickUpDescription)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($pickUpDescription) && mb_strlen((string) $pickUpDescription) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $pickUpDescription)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($pickUpCarrier) && !is_string($pickUpCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickUpCarrier, true), gettype($pickUpCarrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($pickUpCarrier) && mb_strlen((string) $pickUpCarrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $pickUpCarrier)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($pickUpFlightNumber) && !is_string($pickUpFlightNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickUpFlightNumber, true), gettype($pickUpFlightNumber)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($pickUpFlightNumber) && mb_strlen((string) $pickUpFlightNumber) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $pickUpFlightNumber)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($returnLocation) && !is_string($returnLocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnLocation, true), gettype($returnLocation)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($returnLocation) && mb_strlen((string) $returnLocation) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $returnLocation)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($returnLocation) && mb_strlen((string) $returnLocation) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $returnLocation)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($returnTime) && !is_string($returnTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnTime, true), gettype($returnTime)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($returnDescription) && !is_string($returnDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDescription, true), gettype($returnDescription)), __LINE__);
        }
        // validation for constraint: maxLength(30)
        if (!is_null($returnDescription) && mb_strlen((string) $returnDescription) > 30) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 30', mb_strlen((string) $returnDescription)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($returnDescription) && mb_strlen((string) $returnDescription) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $returnDescription)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($returnCarrier) && !is_string($returnCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnCarrier, true), gettype($returnCarrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($returnCarrier) && mb_strlen((string) $returnCarrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $returnCarrier)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($returnFlightNumber) && !is_string($returnFlightNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnFlightNumber, true), gettype($returnFlightNumber)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($returnFlightNumber) && mb_strlen((string) $returnFlightNumber) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $returnFlightNumber)), __LINE__);
        }
        $this->ReturnFlightNumber = $returnFlightNumber;
        
        return $this;
    }
}
