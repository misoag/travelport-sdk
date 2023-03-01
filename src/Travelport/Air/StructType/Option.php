<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Option StructType
 * Meta information extracted from the WSDL
 * - documentation: List of segment and fare available for the search air leg.
 * @subpackage Structs
 */
class Option extends AbstractStructBase
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
     * The BookingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: BookingInfo
     * @var \Travelport\Air\StructType\BookingInfo[]
     */
    public ?array $BookingInfo = null;
    /**
     * The Connection
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Connection
     * @var \Travelport\Air\StructType\Connection[]
     */
    public ?array $Connection = null;
    /**
     * The TravelTime
     * Meta information extracted from the WSDL
     * - documentation: Total traveling time that is difference between the departure time of the first segment and the arrival time of the last segments for that particular entire set of connection.
     * - use: optional
     * @var string|null
     */
    public ?string $TravelTime = null;
    /**
     * Constructor method for Option
     * @uses Option::setKey()
     * @uses Option::setBookingInfo()
     * @uses Option::setConnection()
     * @uses Option::setTravelTime()
     * @param string $key
     * @param \Travelport\Air\StructType\BookingInfo[] $bookingInfo
     * @param \Travelport\Air\StructType\Connection[] $connection
     * @param string $travelTime
     */
    public function __construct(string $key, ?array $bookingInfo = null, ?array $connection = null, ?string $travelTime = null)
    {
        $this
            ->setKey($key)
            ->setBookingInfo($bookingInfo)
            ->setConnection($connection)
            ->setTravelTime($travelTime);
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
     * @return \Travelport\Air\StructType\Option
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get BookingInfo value
     * @return \Travelport\Air\StructType\BookingInfo[]
     */
    public function getBookingInfo(): ?array
    {
        return $this->BookingInfo;
    }
    /**
     * Set BookingInfo value
     * @param \Travelport\Air\StructType\BookingInfo[] $bookingInfo
     * @return \Travelport\Air\StructType\Option
     */
    public function setBookingInfo(?array $bookingInfo = null): self
    {
        $this->BookingInfo = $bookingInfo;
        
        return $this;
    }
    /**
     * Add item to BookingInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\BookingInfo $item
     * @return \Travelport\Air\StructType\Option
     */
    public function addToBookingInfo(\Travelport\Air\StructType\BookingInfo $item): self
    {
        $this->BookingInfo[] = $item;
        
        return $this;
    }
    /**
     * Get Connection value
     * @return \Travelport\Air\StructType\Connection[]
     */
    public function getConnection(): ?array
    {
        return $this->Connection;
    }
    /**
     * Set Connection value
     * @param \Travelport\Air\StructType\Connection[] $connection
     * @return \Travelport\Air\StructType\Option
     */
    public function setConnection(?array $connection = null): self
    {
        $this->Connection = $connection;
        
        return $this;
    }
    /**
     * Add item to Connection value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Connection $item
     * @return \Travelport\Air\StructType\Option
     */
    public function addToConnection(\Travelport\Air\StructType\Connection $item): self
    {
        $this->Connection[] = $item;
        
        return $this;
    }
    /**
     * Get TravelTime value
     * @return string|null
     */
    public function getTravelTime(): ?string
    {
        return $this->TravelTime;
    }
    /**
     * Set TravelTime value
     * @param string $travelTime
     * @return \Travelport\Air\StructType\Option
     */
    public function setTravelTime(?string $travelTime = null): self
    {
        $this->TravelTime = $travelTime;
        
        return $this;
    }
}
