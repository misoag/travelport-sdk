<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for McoSearchReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Search for MCOs by certain criteria and return a list.
 * @subpackage Structs
 */
class McoSearchReq extends BaseReq
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:Name
     * @var \Travelport\Util\StructType\Name|null
     */
    protected ?\Travelport\Util\StructType\Name $Name = null;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * - ref: common:Carrier
     * @var \Travelport\Util\StructType\Carrier[]
     */
    protected ?array $Carrier = null;
    /**
     * The Airport
     * Meta information extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * - ref: common:Airport
     * @var \Travelport\Util\StructType\Airport[]
     */
    protected ?array $Airport = null;
    /**
     * The TicketNumber
     * Meta information extracted from the WSDL
     * - documentation: Used for Character Strings, length 1 to 13.
     * - base: xs:string
     * - maxLength: 13
     * - minLength: 1
     * - minOccurs: 0
     * - ref: common:TicketNumber
     * @var string|null
     */
    protected ?string $TicketNumber = null;
    /**
     * The McoCreateDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: McoCreateDate
     * @var \Travelport\Util\StructType\TypeTimeRange|null
     */
    protected ?\Travelport\Util\StructType\TypeTimeRange $McoCreateDate = null;
    /**
     * The McoSearchModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: McoSearchModifiers
     * @var \Travelport\Util\StructType\McoSearchModifiers|null
     */
    protected ?\Travelport\Util\StructType\McoSearchModifiers $McoSearchModifiers = null;
    /**
     * Constructor method for McoSearchReq
     * @uses McoSearchReq::setName()
     * @uses McoSearchReq::setCarrier()
     * @uses McoSearchReq::setAirport()
     * @uses McoSearchReq::setTicketNumber()
     * @uses McoSearchReq::setMcoCreateDate()
     * @uses McoSearchReq::setMcoSearchModifiers()
     * @param \Travelport\Util\StructType\Name $name
     * @param \Travelport\Util\StructType\Carrier[] $carrier
     * @param \Travelport\Util\StructType\Airport[] $airport
     * @param string $ticketNumber
     * @param \Travelport\Util\StructType\TypeTimeRange $mcoCreateDate
     * @param \Travelport\Util\StructType\McoSearchModifiers $mcoSearchModifiers
     */
    public function __construct(?\Travelport\Util\StructType\Name $name = null, ?array $carrier = null, ?array $airport = null, ?string $ticketNumber = null, ?\Travelport\Util\StructType\TypeTimeRange $mcoCreateDate = null, ?\Travelport\Util\StructType\McoSearchModifiers $mcoSearchModifiers = null)
    {
        $this
            ->setName($name)
            ->setCarrier($carrier)
            ->setAirport($airport)
            ->setTicketNumber($ticketNumber)
            ->setMcoCreateDate($mcoCreateDate)
            ->setMcoSearchModifiers($mcoSearchModifiers);
    }
    /**
     * Get Name value
     * @return \Travelport\Util\StructType\Name|null
     */
    public function getName(): ?\Travelport\Util\StructType\Name
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param \Travelport\Util\StructType\Name $name
     * @return \Travelport\Util\StructType\McoSearchReq
     */
    public function setName(?\Travelport\Util\StructType\Name $name = null): self
    {
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get Carrier value
     * @return \Travelport\Util\StructType\Carrier[]
     */
    public function getCarrier(): ?array
    {
        return $this->Carrier;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCarrier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCarrier method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCarrierForArrayConstraintFromSetCarrier(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $mcoSearchReqCarrierItem) {
            // validation for constraint: itemType
            if (!$mcoSearchReqCarrierItem instanceof \Travelport\Util\StructType\Carrier) {
                $invalidValues[] = is_object($mcoSearchReqCarrierItem) ? get_class($mcoSearchReqCarrierItem) : sprintf('%s(%s)', gettype($mcoSearchReqCarrierItem), var_export($mcoSearchReqCarrierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Carrier property can only contain items of type \Travelport\Util\StructType\Carrier, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Carrier value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Carrier[] $carrier
     * @return \Travelport\Util\StructType\McoSearchReq
     */
    public function setCarrier(?array $carrier = null): self
    {
        // validation for constraint: array
        if ('' !== ($carrierArrayErrorMessage = self::validateCarrierForArrayConstraintFromSetCarrier($carrier))) {
            throw new InvalidArgumentException($carrierArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($carrier) && count($carrier) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10', count($carrier)), __LINE__);
        }
        $this->Carrier = $carrier;
        
        return $this;
    }
    /**
     * Add item to Carrier value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Carrier $item
     * @return \Travelport\Util\StructType\McoSearchReq
     */
    public function addToCarrier(\Travelport\Util\StructType\Carrier $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Carrier) {
            throw new InvalidArgumentException(sprintf('The Carrier property can only contain items of type \Travelport\Util\StructType\Carrier, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->Carrier) && count($this->Carrier) >= 10) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->Carrier)), __LINE__);
        }
        $this->Carrier[] = $item;
        
        return $this;
    }
    /**
     * Get Airport value
     * @return \Travelport\Util\StructType\Airport[]
     */
    public function getAirport(): ?array
    {
        return $this->Airport;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAirport method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirport method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirportForArrayConstraintFromSetAirport(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $mcoSearchReqAirportItem) {
            // validation for constraint: itemType
            if (!$mcoSearchReqAirportItem instanceof \Travelport\Util\StructType\Airport) {
                $invalidValues[] = is_object($mcoSearchReqAirportItem) ? get_class($mcoSearchReqAirportItem) : sprintf('%s(%s)', gettype($mcoSearchReqAirportItem), var_export($mcoSearchReqAirportItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Airport property can only contain items of type \Travelport\Util\StructType\Airport, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Airport value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Airport[] $airport
     * @return \Travelport\Util\StructType\McoSearchReq
     */
    public function setAirport(?array $airport = null): self
    {
        // validation for constraint: array
        if ('' !== ($airportArrayErrorMessage = self::validateAirportForArrayConstraintFromSetAirport($airport))) {
            throw new InvalidArgumentException($airportArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($airport) && count($airport) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10', count($airport)), __LINE__);
        }
        $this->Airport = $airport;
        
        return $this;
    }
    /**
     * Add item to Airport value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Airport $item
     * @return \Travelport\Util\StructType\McoSearchReq
     */
    public function addToAirport(\Travelport\Util\StructType\Airport $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Airport) {
            throw new InvalidArgumentException(sprintf('The Airport property can only contain items of type \Travelport\Util\StructType\Airport, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->Airport) && count($this->Airport) >= 10) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->Airport)), __LINE__);
        }
        $this->Airport[] = $item;
        
        return $this;
    }
    /**
     * Get TicketNumber value
     * @return string|null
     */
    public function getTicketNumber(): ?string
    {
        return $this->TicketNumber;
    }
    /**
     * Set TicketNumber value
     * @param string $ticketNumber
     * @return \Travelport\Util\StructType\McoSearchReq
     */
    public function setTicketNumber(?string $ticketNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketNumber) && !is_string($ticketNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketNumber, true), gettype($ticketNumber)), __LINE__);
        }
        // validation for constraint: maxLength(13)
        if (!is_null($ticketNumber) && mb_strlen((string) $ticketNumber) > 13) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 13', mb_strlen((string) $ticketNumber)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($ticketNumber) && mb_strlen((string) $ticketNumber) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $ticketNumber)), __LINE__);
        }
        $this->TicketNumber = $ticketNumber;
        
        return $this;
    }
    /**
     * Get McoCreateDate value
     * @return \Travelport\Util\StructType\TypeTimeRange|null
     */
    public function getMcoCreateDate(): ?\Travelport\Util\StructType\TypeTimeRange
    {
        return $this->McoCreateDate;
    }
    /**
     * Set McoCreateDate value
     * @param \Travelport\Util\StructType\TypeTimeRange $mcoCreateDate
     * @return \Travelport\Util\StructType\McoSearchReq
     */
    public function setMcoCreateDate(?\Travelport\Util\StructType\TypeTimeRange $mcoCreateDate = null): self
    {
        $this->McoCreateDate = $mcoCreateDate;
        
        return $this;
    }
    /**
     * Get McoSearchModifiers value
     * @return \Travelport\Util\StructType\McoSearchModifiers|null
     */
    public function getMcoSearchModifiers(): ?\Travelport\Util\StructType\McoSearchModifiers
    {
        return $this->McoSearchModifiers;
    }
    /**
     * Set McoSearchModifiers value
     * @param \Travelport\Util\StructType\McoSearchModifiers $mcoSearchModifiers
     * @return \Travelport\Util\StructType\McoSearchReq
     */
    public function setMcoSearchModifiers(?\Travelport\Util\StructType\McoSearchModifiers $mcoSearchModifiers = null): self
    {
        $this->McoSearchModifiers = $mcoSearchModifiers;
        
        return $this;
    }
}
