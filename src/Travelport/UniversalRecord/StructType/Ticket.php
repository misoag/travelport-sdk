<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Ticket StructType
 * Meta information extracted from the WSDL
 * - documentation: The ticket that resulted from an air booking
 * @subpackage Structs
 */
class Ticket extends AbstractStructBase
{
    /**
     * The TicketNumber
     * Meta information extracted from the WSDL
     * - documentation: Reference Ticket Number
     * - base: xs:string
     * - length: 13
     * - use: required
     * @var string
     */
    protected string $TicketNumber;
    /**
     * The Coupon
     * Meta information extracted from the WSDL
     * - maxOccurs: 4
     * - ref: Coupon
     * @var \Travelport\UniversalRecord\StructType\Coupon[]
     */
    protected ?array $Coupon = null;
    /**
     * The TicketEndorsement
     * Meta information extracted from the WSDL
     * - maxOccurs: 6
     * - minOccurs: 0
     * - ref: TicketEndorsement
     * @var \Travelport\UniversalRecord\StructType\TicketEndorsement[]
     */
    protected ?array $TicketEndorsement = null;
    /**
     * The TourCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TourCode
     * @var \Travelport\UniversalRecord\StructType\TourCode[]
     */
    protected ?array $TourCode = null;
    /**
     * The ExchangedTicketInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ExchangedTicketInfo
     * @var \Travelport\UniversalRecord\StructType\ExchangedTicketInfo[]
     */
    protected ?array $ExchangedTicketInfo = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The TicketStatus
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $TicketStatus = null;
    /**
     * The ElStat
     * @var string|null
     */
    protected ?string $ElStat = null;
    /**
     * The KeyOverride
     * @var bool|null
     */
    protected ?bool $KeyOverride = null;
    /**
     * Constructor method for Ticket
     * @uses Ticket::setTicketNumber()
     * @uses Ticket::setCoupon()
     * @uses Ticket::setTicketEndorsement()
     * @uses Ticket::setTourCode()
     * @uses Ticket::setExchangedTicketInfo()
     * @uses Ticket::setKey()
     * @uses Ticket::setTicketStatus()
     * @uses Ticket::setElStat()
     * @uses Ticket::setKeyOverride()
     * @param string $ticketNumber
     * @param \Travelport\UniversalRecord\StructType\Coupon[] $coupon
     * @param \Travelport\UniversalRecord\StructType\TicketEndorsement[] $ticketEndorsement
     * @param \Travelport\UniversalRecord\StructType\TourCode[] $tourCode
     * @param \Travelport\UniversalRecord\StructType\ExchangedTicketInfo[] $exchangedTicketInfo
     * @param string $key
     * @param string $ticketStatus
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $ticketNumber, ?array $coupon = null, ?array $ticketEndorsement = null, ?array $tourCode = null, ?array $exchangedTicketInfo = null, ?string $key = null, ?string $ticketStatus = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setTicketNumber($ticketNumber)
            ->setCoupon($coupon)
            ->setTicketEndorsement($ticketEndorsement)
            ->setTourCode($tourCode)
            ->setExchangedTicketInfo($exchangedTicketInfo)
            ->setKey($key)
            ->setTicketStatus($ticketStatus)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get TicketNumber value
     * @return string
     */
    public function getTicketNumber(): string
    {
        return $this->TicketNumber;
    }
    /**
     * Set TicketNumber value
     * @param string $ticketNumber
     * @return \Travelport\UniversalRecord\StructType\Ticket
     */
    public function setTicketNumber(string $ticketNumber): self
    {
        // validation for constraint: string
        if (!is_null($ticketNumber) && !is_string($ticketNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketNumber, true), gettype($ticketNumber)), __LINE__);
        }
        // validation for constraint: length(13)
        if (!is_null($ticketNumber) && mb_strlen((string) $ticketNumber) !== 13) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 13', mb_strlen((string) $ticketNumber)), __LINE__);
        }
        $this->TicketNumber = $ticketNumber;
        
        return $this;
    }
    /**
     * Get Coupon value
     * @return \Travelport\UniversalRecord\StructType\Coupon[]
     */
    public function getCoupon(): ?array
    {
        return $this->Coupon;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCoupon method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCoupon method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCouponForArrayConstraintFromSetCoupon(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $ticketCouponItem) {
            // validation for constraint: itemType
            if (!$ticketCouponItem instanceof \Travelport\UniversalRecord\StructType\Coupon) {
                $invalidValues[] = is_object($ticketCouponItem) ? get_class($ticketCouponItem) : sprintf('%s(%s)', gettype($ticketCouponItem), var_export($ticketCouponItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Coupon property can only contain items of type \Travelport\UniversalRecord\StructType\Coupon, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Coupon value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Coupon[] $coupon
     * @return \Travelport\UniversalRecord\StructType\Ticket
     */
    public function setCoupon(?array $coupon = null): self
    {
        // validation for constraint: array
        if ('' !== ($couponArrayErrorMessage = self::validateCouponForArrayConstraintFromSetCoupon($coupon))) {
            throw new InvalidArgumentException($couponArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($coupon) && count($coupon) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 4', count($coupon)), __LINE__);
        }
        $this->Coupon = $coupon;
        
        return $this;
    }
    /**
     * Add item to Coupon value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Coupon $item
     * @return \Travelport\UniversalRecord\StructType\Ticket
     */
    public function addToCoupon(\Travelport\UniversalRecord\StructType\Coupon $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Coupon) {
            throw new InvalidArgumentException(sprintf('The Coupon property can only contain items of type \Travelport\UniversalRecord\StructType\Coupon, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($this->Coupon) && count($this->Coupon) >= 4) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 4', count($this->Coupon)), __LINE__);
        }
        $this->Coupon[] = $item;
        
        return $this;
    }
    /**
     * Get TicketEndorsement value
     * @return \Travelport\UniversalRecord\StructType\TicketEndorsement[]
     */
    public function getTicketEndorsement(): ?array
    {
        return $this->TicketEndorsement;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTicketEndorsement method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTicketEndorsement method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTicketEndorsementForArrayConstraintFromSetTicketEndorsement(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $ticketTicketEndorsementItem) {
            // validation for constraint: itemType
            if (!$ticketTicketEndorsementItem instanceof \Travelport\UniversalRecord\StructType\TicketEndorsement) {
                $invalidValues[] = is_object($ticketTicketEndorsementItem) ? get_class($ticketTicketEndorsementItem) : sprintf('%s(%s)', gettype($ticketTicketEndorsementItem), var_export($ticketTicketEndorsementItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TicketEndorsement property can only contain items of type \Travelport\UniversalRecord\StructType\TicketEndorsement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TicketEndorsement value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TicketEndorsement[] $ticketEndorsement
     * @return \Travelport\UniversalRecord\StructType\Ticket
     */
    public function setTicketEndorsement(?array $ticketEndorsement = null): self
    {
        // validation for constraint: array
        if ('' !== ($ticketEndorsementArrayErrorMessage = self::validateTicketEndorsementForArrayConstraintFromSetTicketEndorsement($ticketEndorsement))) {
            throw new InvalidArgumentException($ticketEndorsementArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(6)
        if (is_array($ticketEndorsement) && count($ticketEndorsement) > 6) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 6', count($ticketEndorsement)), __LINE__);
        }
        $this->TicketEndorsement = $ticketEndorsement;
        
        return $this;
    }
    /**
     * Add item to TicketEndorsement value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TicketEndorsement $item
     * @return \Travelport\UniversalRecord\StructType\Ticket
     */
    public function addToTicketEndorsement(\Travelport\UniversalRecord\StructType\TicketEndorsement $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TicketEndorsement) {
            throw new InvalidArgumentException(sprintf('The TicketEndorsement property can only contain items of type \Travelport\UniversalRecord\StructType\TicketEndorsement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(6)
        if (is_array($this->TicketEndorsement) && count($this->TicketEndorsement) >= 6) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 6', count($this->TicketEndorsement)), __LINE__);
        }
        $this->TicketEndorsement[] = $item;
        
        return $this;
    }
    /**
     * Get TourCode value
     * @return \Travelport\UniversalRecord\StructType\TourCode[]
     */
    public function getTourCode(): ?array
    {
        return $this->TourCode;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTourCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTourCode method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTourCodeForArrayConstraintFromSetTourCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $ticketTourCodeItem) {
            // validation for constraint: itemType
            if (!$ticketTourCodeItem instanceof \Travelport\UniversalRecord\StructType\TourCode) {
                $invalidValues[] = is_object($ticketTourCodeItem) ? get_class($ticketTourCodeItem) : sprintf('%s(%s)', gettype($ticketTourCodeItem), var_export($ticketTourCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TourCode property can only contain items of type \Travelport\UniversalRecord\StructType\TourCode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TourCode value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TourCode[] $tourCode
     * @return \Travelport\UniversalRecord\StructType\Ticket
     */
    public function setTourCode(?array $tourCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($tourCodeArrayErrorMessage = self::validateTourCodeForArrayConstraintFromSetTourCode($tourCode))) {
            throw new InvalidArgumentException($tourCodeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($tourCode) && count($tourCode) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($tourCode)), __LINE__);
        }
        $this->TourCode = $tourCode;
        
        return $this;
    }
    /**
     * Add item to TourCode value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TourCode $item
     * @return \Travelport\UniversalRecord\StructType\Ticket
     */
    public function addToTourCode(\Travelport\UniversalRecord\StructType\TourCode $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TourCode) {
            throw new InvalidArgumentException(sprintf('The TourCode property can only contain items of type \Travelport\UniversalRecord\StructType\TourCode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TourCode) && count($this->TourCode) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TourCode)), __LINE__);
        }
        $this->TourCode[] = $item;
        
        return $this;
    }
    /**
     * Get ExchangedTicketInfo value
     * @return \Travelport\UniversalRecord\StructType\ExchangedTicketInfo[]
     */
    public function getExchangedTicketInfo(): ?array
    {
        return $this->ExchangedTicketInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setExchangedTicketInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExchangedTicketInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExchangedTicketInfoForArrayConstraintFromSetExchangedTicketInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $ticketExchangedTicketInfoItem) {
            // validation for constraint: itemType
            if (!$ticketExchangedTicketInfoItem instanceof \Travelport\UniversalRecord\StructType\ExchangedTicketInfo) {
                $invalidValues[] = is_object($ticketExchangedTicketInfoItem) ? get_class($ticketExchangedTicketInfoItem) : sprintf('%s(%s)', gettype($ticketExchangedTicketInfoItem), var_export($ticketExchangedTicketInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExchangedTicketInfo property can only contain items of type \Travelport\UniversalRecord\StructType\ExchangedTicketInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ExchangedTicketInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ExchangedTicketInfo[] $exchangedTicketInfo
     * @return \Travelport\UniversalRecord\StructType\Ticket
     */
    public function setExchangedTicketInfo(?array $exchangedTicketInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($exchangedTicketInfoArrayErrorMessage = self::validateExchangedTicketInfoForArrayConstraintFromSetExchangedTicketInfo($exchangedTicketInfo))) {
            throw new InvalidArgumentException($exchangedTicketInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($exchangedTicketInfo) && count($exchangedTicketInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($exchangedTicketInfo)), __LINE__);
        }
        $this->ExchangedTicketInfo = $exchangedTicketInfo;
        
        return $this;
    }
    /**
     * Add item to ExchangedTicketInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ExchangedTicketInfo $item
     * @return \Travelport\UniversalRecord\StructType\Ticket
     */
    public function addToExchangedTicketInfo(\Travelport\UniversalRecord\StructType\ExchangedTicketInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ExchangedTicketInfo) {
            throw new InvalidArgumentException(sprintf('The ExchangedTicketInfo property can only contain items of type \Travelport\UniversalRecord\StructType\ExchangedTicketInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ExchangedTicketInfo) && count($this->ExchangedTicketInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ExchangedTicketInfo)), __LINE__);
        }
        $this->ExchangedTicketInfo[] = $item;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\Ticket
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get TicketStatus value
     * @return string|null
     */
    public function getTicketStatus(): ?string
    {
        return $this->TicketStatus;
    }
    /**
     * Set TicketStatus value
     * @uses \Travelport\UniversalRecord\EnumType\TypeTicketStatus::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeTicketStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $ticketStatus
     * @return \Travelport\UniversalRecord\StructType\Ticket
     */
    public function setTicketStatus(?string $ticketStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeTicketStatus::valueIsValid($ticketStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeTicketStatus', is_array($ticketStatus) ? implode(', ', $ticketStatus) : var_export($ticketStatus, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeTicketStatus::getValidValues())), __LINE__);
        }
        $this->TicketStatus = $ticketStatus;
        
        return $this;
    }
    /**
     * Get ElStat value
     * @return string|null
     */
    public function getElStat(): ?string
    {
        return $this->ElStat;
    }
    /**
     * Set ElStat value
     * @uses \Travelport\UniversalRecord\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\UniversalRecord\StructType\Ticket
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeElementStatus::getValidValues())), __LINE__);
        }
        $this->ElStat = $elStat;
        
        return $this;
    }
    /**
     * Get KeyOverride value
     * @return bool|null
     */
    public function getKeyOverride(): ?bool
    {
        return $this->KeyOverride;
    }
    /**
     * Set KeyOverride value
     * @param bool $keyOverride
     * @return \Travelport\UniversalRecord\StructType\Ticket
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        // validation for constraint: boolean
        if (!is_null($keyOverride) && !is_bool($keyOverride)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keyOverride, true), gettype($keyOverride)), __LINE__);
        }
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
