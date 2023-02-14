<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected string $AdjustedTotalPrice;
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
    protected ?string $Amount = null;
    /**
     * The Percent
     * Meta information extracted from the WSDL
     * - documentation: Implies an adjustment to be made on original price. Negetive value implies a discount.
     * - choice: Amount | Percent
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var float|null
     */
    protected ?float $Percent = null;
    /**
     * The ApproximateAdjustedTotalPrice
     * Meta information extracted from the WSDL
     * - documentation: The Converted adjusted total price in Default Currency for this entity. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ApproximateAdjustedTotalPrice = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to a booking traveler for which adjustment is applied. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $BookingTravelerRef = null;
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
     * @return \Travelport\Util\StructType\Adjustment
     */
    public function setAdjustedTotalPrice(string $adjustedTotalPrice): self
    {
        // validation for constraint: string
        if (!is_null($adjustedTotalPrice) && !is_string($adjustedTotalPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adjustedTotalPrice, true), gettype($adjustedTotalPrice)), __LINE__);
        }
        $this->AdjustedTotalPrice = $adjustedTotalPrice;
        
        return $this;
    }
    /**
     * Get Amount value
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return isset($this->Amount) ? $this->Amount : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAmount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAmount method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAmountForChoiceConstraintsFromSetAmount($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Percent',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Amount can\'t be set as the property %s is already set. Only one property must be set among these properties: Amount, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Amount value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $amount
     * @return \Travelport\Util\StructType\Adjustment
     */
    public function setAmount(?string $amount = null): self
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        // validation for constraint: choice(Amount, Percent)
        if ('' !== ($amountChoiceErrorMessage = self::validateAmountForChoiceConstraintsFromSetAmount($amount))) {
            throw new InvalidArgumentException($amountChoiceErrorMessage, __LINE__);
        }
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
        return isset($this->Percent) ? $this->Percent : null;
    }
    /**
     * This method is responsible for validating the value passed to the setPercent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPercent method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePercentForChoiceConstraintsFromSetPercent($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Amount',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Percent can\'t be set as the property %s is already set. Only one property must be set among these properties: Percent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Percent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param float $percent
     * @return \Travelport\Util\StructType\Adjustment
     */
    public function setPercent(?float $percent = null): self
    {
        // validation for constraint: float
        if (!is_null($percent) && !(is_float($percent) || is_numeric($percent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percent, true), gettype($percent)), __LINE__);
        }
        // validation for constraint: choice(Amount, Percent)
        if ('' !== ($percentChoiceErrorMessage = self::validatePercentForChoiceConstraintsFromSetPercent($percent))) {
            throw new InvalidArgumentException($percentChoiceErrorMessage, __LINE__);
        }
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
     * @return \Travelport\Util\StructType\Adjustment
     */
    public function setApproximateAdjustedTotalPrice(?string $approximateAdjustedTotalPrice = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateAdjustedTotalPrice) && !is_string($approximateAdjustedTotalPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateAdjustedTotalPrice, true), gettype($approximateAdjustedTotalPrice)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\Adjustment
     */
    public function setBookingTravelerRef(?string $bookingTravelerRef = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingTravelerRef) && !is_string($bookingTravelerRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingTravelerRef, true), gettype($bookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
}
