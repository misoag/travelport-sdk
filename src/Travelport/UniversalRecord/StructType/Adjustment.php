<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Adjustment StructType
 * Meta information extracted from the WSDL
 * - documentation: An indentifier which indentifies adjustment made on original pricing. It can a flat amount or percentage of original price. The value of Amount/Percent can be negetive. Negative value implies a discount.
 * @subpackage Structs
 */
class Adjustment extends AbstractStructBase
{
    /**
     * The AdjustedTotalPrice
     * Meta information extracted from the WSDL
     * - documentation: The adjusted price after applying adjustment on Total price | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $AdjustedTotalPrice;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Implies a flat amount to be adjusted. Negetive value implies a discount. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - choice: Amount | Percent
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var string|null
     */
    public ?string $Amount = null;
    /**
     * The Percent
     * Meta information extracted from the WSDL
     * - documentation: Implies an adjustment to be made on original price. Negetive value implies a discount.
     * - choice: Amount | Percent
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var float|null
     */
    public ?float $Percent = null;
    /**
     * The ApproximateAdjustedTotalPrice
     * Meta information extracted from the WSDL
     * - documentation: The Converted adjusted total price in Default Currency for this entity. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ApproximateAdjustedTotalPrice = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to a booking traveler for which adjustment is applied. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $BookingTravelerRef = null;
    /**
     * Constructor method for Adjustment
     * @uses Adjustment::setAdjustedTotalPrice()
     * @uses Adjustment::setAmount()
     * @uses Adjustment::setPercent()
     * @uses Adjustment::setApproximateAdjustedTotalPrice()
     * @uses Adjustment::setBookingTravelerRef()
     * @param string $adjustedTotalPrice
     * @param string $amount
     * @param float $percent
     * @param string $approximateAdjustedTotalPrice
     * @param string $bookingTravelerRef
     */
    public function __construct(string $adjustedTotalPrice, ?string $amount = null, ?float $percent = null, ?string $approximateAdjustedTotalPrice = null, ?string $bookingTravelerRef = null)
    {
        $this
            ->setAdjustedTotalPrice($adjustedTotalPrice)
            ->setAmount($amount)
            ->setPercent($percent)
            ->setApproximateAdjustedTotalPrice($approximateAdjustedTotalPrice)
            ->setBookingTravelerRef($bookingTravelerRef);
    }
    /**
     * Get AdjustedTotalPrice value
     * @return string
     */
    public function getAdjustedTotalPrice(): string
    {
        return $this->AdjustedTotalPrice;
    }
    /**
     * Set AdjustedTotalPrice value
     * @param string $adjustedTotalPrice
     * @return \Travelport\UniversalRecord\StructType\Adjustment
     */
    public function setAdjustedTotalPrice(string $adjustedTotalPrice): self
    {
        $this->AdjustedTotalPrice = $adjustedTotalPrice;
        
        return $this;
    }
    /**
     * Get Amount value
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return $this->Amount ?? null;
    }
    /**
     * Set Amount value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param string $amount
     * @return \Travelport\UniversalRecord\StructType\Adjustment
     */
    public function setAmount(?string $amount = null): self
    {
        if (is_null($amount) || (is_array($amount) && empty($amount))) {
            unset($this->Amount);
        } else {
            $this->Amount = $amount;
        }
        
        return $this;
    }
    /**
     * Get Percent value
     * @return float|null
     */
    public function getPercent(): ?float
    {
        return $this->Percent ?? null;
    }
    /**
     * Set Percent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param float $percent
     * @return \Travelport\UniversalRecord\StructType\Adjustment
     */
    public function setPercent(?float $percent = null): self
    {
        if (is_null($percent) || (is_array($percent) && empty($percent))) {
            unset($this->Percent);
        } else {
            $this->Percent = $percent;
        }
        
        return $this;
    }
    /**
     * Get ApproximateAdjustedTotalPrice value
     * @return string|null
     */
    public function getApproximateAdjustedTotalPrice(): ?string
    {
        return $this->ApproximateAdjustedTotalPrice;
    }
    /**
     * Set ApproximateAdjustedTotalPrice value
     * @param string $approximateAdjustedTotalPrice
     * @return \Travelport\UniversalRecord\StructType\Adjustment
     */
    public function setApproximateAdjustedTotalPrice(?string $approximateAdjustedTotalPrice = null): self
    {
        $this->ApproximateAdjustedTotalPrice = $approximateAdjustedTotalPrice;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return string|null
     */
    public function getBookingTravelerRef(): ?string
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param string $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\Adjustment
     */
    public function setBookingTravelerRef(?string $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
}
