<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeApplicableSegment StructType
 * @subpackage Structs
 */
class TypeApplicableSegment extends AbstractStructBase
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
     * The AirItineraryDetailsRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * @var string|null
     */
    protected ?string $AirItineraryDetailsRef = null;
    /**
     * The BookingCounts
     * Meta information extracted from the WSDL
     * - documentation: Classes of service and their counts.
     * - use: optional
     * @var string|null
     */
    protected ?string $BookingCounts = null;
    /**
     * Constructor method for typeApplicableSegment
     * @uses TypeApplicableSegment::setKey()
     * @uses TypeApplicableSegment::setAirItineraryDetailsRef()
     * @uses TypeApplicableSegment::setBookingCounts()
     * @param string $key
     * @param string $airItineraryDetailsRef
     * @param string $bookingCounts
     */
    public function __construct(string $key, ?string $airItineraryDetailsRef = null, ?string $bookingCounts = null)
    {
        $this
            ->setKey($key)
            ->setAirItineraryDetailsRef($airItineraryDetailsRef)
            ->setBookingCounts($bookingCounts);
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
     * @return \Travelport\Util\StructType\TypeApplicableSegment
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
     * Get AirItineraryDetailsRef value
     * @return string|null
     */
    public function getAirItineraryDetailsRef(): ?string
    {
        return $this->AirItineraryDetailsRef;
    }
    /**
     * Set AirItineraryDetailsRef value
     * @param string $airItineraryDetailsRef
     * @return \Travelport\Util\StructType\TypeApplicableSegment
     */
    public function setAirItineraryDetailsRef(?string $airItineraryDetailsRef = null): self
    {
        // validation for constraint: string
        if (!is_null($airItineraryDetailsRef) && !is_string($airItineraryDetailsRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airItineraryDetailsRef, true), gettype($airItineraryDetailsRef)), __LINE__);
        }
        $this->AirItineraryDetailsRef = $airItineraryDetailsRef;
        
        return $this;
    }
    /**
     * Get BookingCounts value
     * @return string|null
     */
    public function getBookingCounts(): ?string
    {
        return $this->BookingCounts;
    }
    /**
     * Set BookingCounts value
     * @param string $bookingCounts
     * @return \Travelport\Util\StructType\TypeApplicableSegment
     */
    public function setBookingCounts(?string $bookingCounts = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingCounts) && !is_string($bookingCounts)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingCounts, true), gettype($bookingCounts)), __LINE__);
        }
        $this->BookingCounts = $bookingCounts;
        
        return $this;
    }
}
