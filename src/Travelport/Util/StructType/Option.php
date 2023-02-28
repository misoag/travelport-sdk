<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected string $Key;
    /**
     * The BookingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: BookingInfo
     * @var \Travelport\Util\StructType\BookingInfo[]
     */
    protected ?array $BookingInfo = null;
    /**
     * The Connection
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Connection
     * @var \Travelport\Util\StructType\Connection[]
     */
    protected ?array $Connection = null;
    /**
     * The TravelTime
     * Meta information extracted from the WSDL
     * - documentation: Total traveling time that is difference between the departure time of the first segment and the arrival time of the last segments for that particular entire set of connection.
     * - use: optional
     * @var string|null
     */
    protected ?string $TravelTime = null;
    /**
     * Constructor method for Option
     * @uses Option::setKey()
     * @uses Option::setBookingInfo()
     * @uses Option::setConnection()
     * @uses Option::setTravelTime()
     * @param string $key
     * @param \Travelport\Util\StructType\BookingInfo[] $bookingInfo
     * @param \Travelport\Util\StructType\Connection[] $connection
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
     * @return \Travelport\Util\StructType\Option
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
     * Get BookingInfo value
     * @return \Travelport\Util\StructType\BookingInfo[]
     */
    public function getBookingInfo(): ?array
    {
        return $this->BookingInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBookingInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingInfoForArrayConstraintFromSetBookingInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $optionBookingInfoItem) {
            // validation for constraint: itemType
            if (!$optionBookingInfoItem instanceof \Travelport\Util\StructType\BookingInfo) {
                $invalidValues[] = is_object($optionBookingInfoItem) ? get_class($optionBookingInfoItem) : sprintf('%s(%s)', gettype($optionBookingInfoItem), var_export($optionBookingInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingInfo property can only contain items of type \Travelport\Util\StructType\BookingInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\BookingInfo[] $bookingInfo
     * @return \Travelport\Util\StructType\Option
     */
    public function setBookingInfo(?array $bookingInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingInfoArrayErrorMessage = self::validateBookingInfoForArrayConstraintFromSetBookingInfo($bookingInfo))) {
            throw new InvalidArgumentException($bookingInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($bookingInfo) && count($bookingInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($bookingInfo)), __LINE__);
        }
        $this->BookingInfo = $bookingInfo;
        
        return $this;
    }
    /**
     * Add item to BookingInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\BookingInfo $item
     * @return \Travelport\Util\StructType\Option
     */
    public function addToBookingInfo(\Travelport\Util\StructType\BookingInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\BookingInfo) {
            throw new InvalidArgumentException(sprintf('The BookingInfo property can only contain items of type \Travelport\Util\StructType\BookingInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->BookingInfo) && count($this->BookingInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->BookingInfo)), __LINE__);
        }
        $this->BookingInfo[] = $item;
        
        return $this;
    }
    /**
     * Get Connection value
     * @return \Travelport\Util\StructType\Connection[]
     */
    public function getConnection(): ?array
    {
        return $this->Connection;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setConnection method
     * This method is willingly generated in order to preserve the one-line inline validation within the setConnection method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateConnectionForArrayConstraintFromSetConnection(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $optionConnectionItem) {
            // validation for constraint: itemType
            if (!$optionConnectionItem instanceof \Travelport\Util\StructType\Connection) {
                $invalidValues[] = is_object($optionConnectionItem) ? get_class($optionConnectionItem) : sprintf('%s(%s)', gettype($optionConnectionItem), var_export($optionConnectionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Connection property can only contain items of type \Travelport\Util\StructType\Connection, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Connection value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Connection[] $connection
     * @return \Travelport\Util\StructType\Option
     */
    public function setConnection(?array $connection = null): self
    {
        // validation for constraint: array
        if ('' !== ($connectionArrayErrorMessage = self::validateConnectionForArrayConstraintFromSetConnection($connection))) {
            throw new InvalidArgumentException($connectionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($connection) && count($connection) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($connection)), __LINE__);
        }
        $this->Connection = $connection;
        
        return $this;
    }
    /**
     * Add item to Connection value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Connection $item
     * @return \Travelport\Util\StructType\Option
     */
    public function addToConnection(\Travelport\Util\StructType\Connection $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Connection) {
            throw new InvalidArgumentException(sprintf('The Connection property can only contain items of type \Travelport\Util\StructType\Connection, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Connection) && count($this->Connection) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Connection)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\Option
     */
    public function setTravelTime(?string $travelTime = null): self
    {
        // validation for constraint: string
        if (!is_null($travelTime) && !is_string($travelTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelTime, true), gettype($travelTime)), __LINE__);
        }
        $this->TravelTime = $travelTime;
        
        return $this;
    }
}
