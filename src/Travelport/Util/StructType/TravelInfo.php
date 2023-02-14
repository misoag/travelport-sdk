<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Traveler information details like Travel Purpose and Trip Name
 * @subpackage Structs
 */
class TravelInfo extends AbstractStructBase
{
    /**
     * The TripName
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - use: optional
     * @var string|null
     */
    protected ?string $TripName = null;
    /**
     * The TravelPurpose
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - use: optional
     * @var string|null
     */
    protected ?string $TravelPurpose = null;
    /**
     * Constructor method for TravelInfo
     * @uses TravelInfo::setTripName()
     * @uses TravelInfo::setTravelPurpose()
     * @param string $tripName
     * @param string $travelPurpose
     */
    public function __construct(?string $tripName = null, ?string $travelPurpose = null)
    {
        $this
            ->setTripName($tripName)
            ->setTravelPurpose($travelPurpose);
    }
    /**
     * Get TripName value
     * @return string|null
     */
    public function getTripName(): ?string
    {
        return $this->TripName;
    }
    /**
     * Set TripName value
     * @param string $tripName
     * @return \Travelport\Util\StructType\TravelInfo
     */
    public function setTripName(?string $tripName = null): self
    {
        // validation for constraint: string
        if (!is_null($tripName) && !is_string($tripName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tripName, true), gettype($tripName)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($tripName) && mb_strlen((string) $tripName) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $tripName)), __LINE__);
        }
        $this->TripName = $tripName;
        
        return $this;
    }
    /**
     * Get TravelPurpose value
     * @return string|null
     */
    public function getTravelPurpose(): ?string
    {
        return $this->TravelPurpose;
    }
    /**
     * Set TravelPurpose value
     * @param string $travelPurpose
     * @return \Travelport\Util\StructType\TravelInfo
     */
    public function setTravelPurpose(?string $travelPurpose = null): self
    {
        // validation for constraint: string
        if (!is_null($travelPurpose) && !is_string($travelPurpose)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelPurpose, true), gettype($travelPurpose)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($travelPurpose) && mb_strlen((string) $travelPurpose) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $travelPurpose)), __LINE__);
        }
        $this->TravelPurpose = $travelPurpose;
        
        return $this;
    }
}
