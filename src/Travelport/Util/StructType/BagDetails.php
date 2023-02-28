<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BagDetails StructType
 * Meta information extracted from the WSDL
 * - documentation: Information related to Bag details .
 * @subpackage Structs
 */
class BagDetails extends AbstractStructBase
{
    /**
     * The ApplicableBags
     * Meta information extracted from the WSDL
     * - documentation: Applicable baggage like Carry-On,1st Check-in,2nd Check -in etc.
     * - use: required
     * @var string
     */
    protected string $ApplicableBags;
    /**
     * The BaggageRestriction
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: BaggageRestriction
     * @var \Travelport\Util\StructType\BaggageRestriction[]
     */
    protected ?array $BaggageRestriction = null;
    /**
     * The AvailableDiscount
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AvailableDiscount
     * @var \Travelport\Util\StructType\AvailableDiscount[]
     */
    protected ?array $AvailableDiscount = null;
    /**
     * The BasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $BasePrice = null;
    /**
     * The ApproximateBasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ApproximateBasePrice = null;
    /**
     * The Taxes
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Taxes = null;
    /**
     * The TotalPrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $TotalPrice = null;
    /**
     * The ApproximateTotalPrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ApproximateTotalPrice = null;
    /**
     * Constructor method for BagDetails
     * @uses BagDetails::setApplicableBags()
     * @uses BagDetails::setBaggageRestriction()
     * @uses BagDetails::setAvailableDiscount()
     * @uses BagDetails::setBasePrice()
     * @uses BagDetails::setApproximateBasePrice()
     * @uses BagDetails::setTaxes()
     * @uses BagDetails::setTotalPrice()
     * @uses BagDetails::setApproximateTotalPrice()
     * @param string $applicableBags
     * @param \Travelport\Util\StructType\BaggageRestriction[] $baggageRestriction
     * @param \Travelport\Util\StructType\AvailableDiscount[] $availableDiscount
     * @param string $basePrice
     * @param string $approximateBasePrice
     * @param string $taxes
     * @param string $totalPrice
     * @param string $approximateTotalPrice
     */
    public function __construct(string $applicableBags, ?array $baggageRestriction = null, ?array $availableDiscount = null, ?string $basePrice = null, ?string $approximateBasePrice = null, ?string $taxes = null, ?string $totalPrice = null, ?string $approximateTotalPrice = null)
    {
        $this
            ->setApplicableBags($applicableBags)
            ->setBaggageRestriction($baggageRestriction)
            ->setAvailableDiscount($availableDiscount)
            ->setBasePrice($basePrice)
            ->setApproximateBasePrice($approximateBasePrice)
            ->setTaxes($taxes)
            ->setTotalPrice($totalPrice)
            ->setApproximateTotalPrice($approximateTotalPrice);
    }
    /**
     * Get ApplicableBags value
     * @return string
     */
    public function getApplicableBags(): string
    {
        return $this->ApplicableBags;
    }
    /**
     * Set ApplicableBags value
     * @param string $applicableBags
     * @return \Travelport\Util\StructType\BagDetails
     */
    public function setApplicableBags(string $applicableBags): self
    {
        // validation for constraint: string
        if (!is_null($applicableBags) && !is_string($applicableBags)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($applicableBags, true), gettype($applicableBags)), __LINE__);
        }
        $this->ApplicableBags = $applicableBags;
        
        return $this;
    }
    /**
     * Get BaggageRestriction value
     * @return \Travelport\Util\StructType\BaggageRestriction[]
     */
    public function getBaggageRestriction(): ?array
    {
        return $this->BaggageRestriction;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBaggageRestriction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBaggageRestriction method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBaggageRestrictionForArrayConstraintFromSetBaggageRestriction(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bagDetailsBaggageRestrictionItem) {
            // validation for constraint: itemType
            if (!$bagDetailsBaggageRestrictionItem instanceof \Travelport\Util\StructType\BaggageRestriction) {
                $invalidValues[] = is_object($bagDetailsBaggageRestrictionItem) ? get_class($bagDetailsBaggageRestrictionItem) : sprintf('%s(%s)', gettype($bagDetailsBaggageRestrictionItem), var_export($bagDetailsBaggageRestrictionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BaggageRestriction property can only contain items of type \Travelport\Util\StructType\BaggageRestriction, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BaggageRestriction value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\BaggageRestriction[] $baggageRestriction
     * @return \Travelport\Util\StructType\BagDetails
     */
    public function setBaggageRestriction(?array $baggageRestriction = null): self
    {
        // validation for constraint: array
        if ('' !== ($baggageRestrictionArrayErrorMessage = self::validateBaggageRestrictionForArrayConstraintFromSetBaggageRestriction($baggageRestriction))) {
            throw new InvalidArgumentException($baggageRestrictionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($baggageRestriction) && count($baggageRestriction) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($baggageRestriction)), __LINE__);
        }
        $this->BaggageRestriction = $baggageRestriction;
        
        return $this;
    }
    /**
     * Add item to BaggageRestriction value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\BaggageRestriction $item
     * @return \Travelport\Util\StructType\BagDetails
     */
    public function addToBaggageRestriction(\Travelport\Util\StructType\BaggageRestriction $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\BaggageRestriction) {
            throw new InvalidArgumentException(sprintf('The BaggageRestriction property can only contain items of type \Travelport\Util\StructType\BaggageRestriction, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->BaggageRestriction) && count($this->BaggageRestriction) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->BaggageRestriction)), __LINE__);
        }
        $this->BaggageRestriction[] = $item;
        
        return $this;
    }
    /**
     * Get AvailableDiscount value
     * @return \Travelport\Util\StructType\AvailableDiscount[]
     */
    public function getAvailableDiscount(): ?array
    {
        return $this->AvailableDiscount;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAvailableDiscount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAvailableDiscount method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAvailableDiscountForArrayConstraintFromSetAvailableDiscount(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bagDetailsAvailableDiscountItem) {
            // validation for constraint: itemType
            if (!$bagDetailsAvailableDiscountItem instanceof \Travelport\Util\StructType\AvailableDiscount) {
                $invalidValues[] = is_object($bagDetailsAvailableDiscountItem) ? get_class($bagDetailsAvailableDiscountItem) : sprintf('%s(%s)', gettype($bagDetailsAvailableDiscountItem), var_export($bagDetailsAvailableDiscountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AvailableDiscount property can only contain items of type \Travelport\Util\StructType\AvailableDiscount, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AvailableDiscount value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AvailableDiscount[] $availableDiscount
     * @return \Travelport\Util\StructType\BagDetails
     */
    public function setAvailableDiscount(?array $availableDiscount = null): self
    {
        // validation for constraint: array
        if ('' !== ($availableDiscountArrayErrorMessage = self::validateAvailableDiscountForArrayConstraintFromSetAvailableDiscount($availableDiscount))) {
            throw new InvalidArgumentException($availableDiscountArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($availableDiscount) && count($availableDiscount) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($availableDiscount)), __LINE__);
        }
        $this->AvailableDiscount = $availableDiscount;
        
        return $this;
    }
    /**
     * Add item to AvailableDiscount value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AvailableDiscount $item
     * @return \Travelport\Util\StructType\BagDetails
     */
    public function addToAvailableDiscount(\Travelport\Util\StructType\AvailableDiscount $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AvailableDiscount) {
            throw new InvalidArgumentException(sprintf('The AvailableDiscount property can only contain items of type \Travelport\Util\StructType\AvailableDiscount, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AvailableDiscount) && count($this->AvailableDiscount) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AvailableDiscount)), __LINE__);
        }
        $this->AvailableDiscount[] = $item;
        
        return $this;
    }
    /**
     * Get BasePrice value
     * @return string|null
     */
    public function getBasePrice(): ?string
    {
        return $this->BasePrice;
    }
    /**
     * Set BasePrice value
     * @param string $basePrice
     * @return \Travelport\Util\StructType\BagDetails
     */
    public function setBasePrice(?string $basePrice = null): self
    {
        // validation for constraint: string
        if (!is_null($basePrice) && !is_string($basePrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($basePrice, true), gettype($basePrice)), __LINE__);
        }
        $this->BasePrice = $basePrice;
        
        return $this;
    }
    /**
     * Get ApproximateBasePrice value
     * @return string|null
     */
    public function getApproximateBasePrice(): ?string
    {
        return $this->ApproximateBasePrice;
    }
    /**
     * Set ApproximateBasePrice value
     * @param string $approximateBasePrice
     * @return \Travelport\Util\StructType\BagDetails
     */
    public function setApproximateBasePrice(?string $approximateBasePrice = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateBasePrice) && !is_string($approximateBasePrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateBasePrice, true), gettype($approximateBasePrice)), __LINE__);
        }
        $this->ApproximateBasePrice = $approximateBasePrice;
        
        return $this;
    }
    /**
     * Get Taxes value
     * @return string|null
     */
    public function getTaxes(): ?string
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param string $taxes
     * @return \Travelport\Util\StructType\BagDetails
     */
    public function setTaxes(?string $taxes = null): self
    {
        // validation for constraint: string
        if (!is_null($taxes) && !is_string($taxes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxes, true), gettype($taxes)), __LINE__);
        }
        $this->Taxes = $taxes;
        
        return $this;
    }
    /**
     * Get TotalPrice value
     * @return string|null
     */
    public function getTotalPrice(): ?string
    {
        return $this->TotalPrice;
    }
    /**
     * Set TotalPrice value
     * @param string $totalPrice
     * @return \Travelport\Util\StructType\BagDetails
     */
    public function setTotalPrice(?string $totalPrice = null): self
    {
        // validation for constraint: string
        if (!is_null($totalPrice) && !is_string($totalPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
        $this->TotalPrice = $totalPrice;
        
        return $this;
    }
    /**
     * Get ApproximateTotalPrice value
     * @return string|null
     */
    public function getApproximateTotalPrice(): ?string
    {
        return $this->ApproximateTotalPrice;
    }
    /**
     * Set ApproximateTotalPrice value
     * @param string $approximateTotalPrice
     * @return \Travelport\Util\StructType\BagDetails
     */
    public function setApproximateTotalPrice(?string $approximateTotalPrice = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateTotalPrice) && !is_string($approximateTotalPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateTotalPrice, true), gettype($approximateTotalPrice)), __LINE__);
        }
        $this->ApproximateTotalPrice = $approximateTotalPrice;
        
        return $this;
    }
}
