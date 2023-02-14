<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketFailureInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns related air pricing infos. | Will be optionally returned as part of AirTicketingRsp if one or all ticket requests fail. Atrributes are faiilure code, failure message, and passenger reference key. Passenger name is a child
 * element.
 * @subpackage Structs
 */
class TicketFailureInfo extends AbstractStructBase
{
    /**
     * The AirPricingInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 1
     * - ref: AirPricingInfoRef
     * @var \Travelport\UniversalRecord\StructType\AirPricingInfoRef[]
     */
    protected array $AirPricingInfoRef;
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $Code;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $BookingTravelerRef;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - ref: common:Name
     * @var \Travelport\UniversalRecord\StructType\Name|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Name $Name = null;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Message = null;
    /**
     * Constructor method for TicketFailureInfo
     * @uses TicketFailureInfo::setAirPricingInfoRef()
     * @uses TicketFailureInfo::setCode()
     * @uses TicketFailureInfo::setBookingTravelerRef()
     * @uses TicketFailureInfo::setName()
     * @uses TicketFailureInfo::setMessage()
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @param int $code
     * @param string $bookingTravelerRef
     * @param \Travelport\UniversalRecord\StructType\Name $name
     * @param string $message
     */
    public function __construct(array $airPricingInfoRef, int $code, string $bookingTravelerRef, ?\Travelport\UniversalRecord\StructType\Name $name = null, ?string $message = null)
    {
        $this
            ->setAirPricingInfoRef($airPricingInfoRef)
            ->setCode($code)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setName($name)
            ->setMessage($message);
    }
    /**
     * Get AirPricingInfoRef value
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfoRef[]
     */
    public function getAirPricingInfoRef(): array
    {
        return $this->AirPricingInfoRef;
    }
    /**
     * This method is responsible for validating the values passed to the setAirPricingInfoRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirPricingInfoRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirPricingInfoRefForArrayConstraintsFromSetAirPricingInfoRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $ticketFailureInfoAirPricingInfoRefItem) {
            // validation for constraint: itemType
            if (!$ticketFailureInfoAirPricingInfoRefItem instanceof \Travelport\UniversalRecord\StructType\AirPricingInfoRef) {
                $invalidValues[] = is_object($ticketFailureInfoAirPricingInfoRefItem) ? get_class($ticketFailureInfoAirPricingInfoRefItem) : sprintf('%s(%s)', gettype($ticketFailureInfoAirPricingInfoRefItem), var_export($ticketFailureInfoAirPricingInfoRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirPricingInfoRef property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingInfoRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirPricingInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @return \Travelport\UniversalRecord\StructType\TicketFailureInfo
     */
    public function setAirPricingInfoRef(array $airPricingInfoRef): self
    {
        // validation for constraint: array
        if ('' !== ($airPricingInfoRefArrayErrorMessage = self::validateAirPricingInfoRefForArrayConstraintsFromSetAirPricingInfoRef($airPricingInfoRef))) {
            throw new InvalidArgumentException($airPricingInfoRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airPricingInfoRef) && count($airPricingInfoRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airPricingInfoRef)), __LINE__);
        }
        $this->AirPricingInfoRef = $airPricingInfoRef;
        
        return $this;
    }
    /**
     * Add item to AirPricingInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef $item
     * @return \Travelport\UniversalRecord\StructType\TicketFailureInfo
     */
    public function addToAirPricingInfoRef(\Travelport\UniversalRecord\StructType\AirPricingInfoRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirPricingInfoRef) {
            throw new InvalidArgumentException(sprintf('The AirPricingInfoRef property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingInfoRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirPricingInfoRef) && count($this->AirPricingInfoRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirPricingInfoRef)), __LINE__);
        }
        $this->AirPricingInfoRef[] = $item;
        
        return $this;
    }
    /**
     * Get Code value
     * @return int
     */
    public function getCode(): int
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param int $code
     * @return \Travelport\UniversalRecord\StructType\TicketFailureInfo
     */
    public function setCode(int $code): self
    {
        // validation for constraint: int
        if (!is_null($code) && !(is_int($code) || ctype_digit($code))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->Code = $code;
        
        return $this;
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
     * @return \Travelport\UniversalRecord\StructType\TicketFailureInfo
     */
    public function setBookingTravelerRef(string $bookingTravelerRef): self
    {
        // validation for constraint: string
        if (!is_null($bookingTravelerRef) && !is_string($bookingTravelerRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingTravelerRef, true), gettype($bookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Get Name value
     * @return \Travelport\UniversalRecord\StructType\Name|null
     */
    public function getName(): ?\Travelport\UniversalRecord\StructType\Name
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param \Travelport\UniversalRecord\StructType\Name $name
     * @return \Travelport\UniversalRecord\StructType\TicketFailureInfo
     */
    public function setName(?\Travelport\UniversalRecord\StructType\Name $name = null): self
    {
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \Travelport\UniversalRecord\StructType\TicketFailureInfo
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->Message = $message;
        
        return $this;
    }
}
