<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarryOnDetails StructType
 * Meta information extracted from the WSDL
 * - documentation: Information related to Carry-On Bag details .
 * @subpackage Structs
 */
class CarryOnDetails extends AbstractStructBase
{
    /**
     * The BaggageRestriction
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: BaggageRestriction
     * @var \Travelport\UniversalRecord\StructType\BaggageRestriction[]
     */
    protected ?array $BaggageRestriction = null;
    /**
     * The ApplicableCarryOnBags
     * Meta information extracted from the WSDL
     * - documentation: Applicable Carry-On baggage "First", "Second", "Third" etc
     * @var string|null
     */
    protected ?string $ApplicableCarryOnBags = null;
    /**
     * The BasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $BasePrice = null;
    /**
     * The ApproximateBasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $ApproximateBasePrice = null;
    /**
     * The Taxes
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $Taxes = null;
    /**
     * The TotalPrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $TotalPrice = null;
    /**
     * The ApproximateTotalPrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $ApproximateTotalPrice = null;
    /**
     * Constructor method for CarryOnDetails
     * @uses CarryOnDetails::setBaggageRestriction()
     * @uses CarryOnDetails::setApplicableCarryOnBags()
     * @uses CarryOnDetails::setBasePrice()
     * @uses CarryOnDetails::setApproximateBasePrice()
     * @uses CarryOnDetails::setTaxes()
     * @uses CarryOnDetails::setTotalPrice()
     * @uses CarryOnDetails::setApproximateTotalPrice()
     * @param \Travelport\UniversalRecord\StructType\BaggageRestriction[] $baggageRestriction
     * @param string $applicableCarryOnBags
     * @param string $basePrice
     * @param string $approximateBasePrice
     * @param string $taxes
     * @param string $totalPrice
     * @param string $approximateTotalPrice
     */
    public function __construct(?array $baggageRestriction = null, ?string $applicableCarryOnBags = null, ?string $basePrice = null, ?string $approximateBasePrice = null, ?string $taxes = null, ?string $totalPrice = null, ?string $approximateTotalPrice = null)
    {
        $this
            ->setBaggageRestriction($baggageRestriction)
            ->setApplicableCarryOnBags($applicableCarryOnBags)
            ->setBasePrice($basePrice)
            ->setApproximateBasePrice($approximateBasePrice)
            ->setTaxes($taxes)
            ->setTotalPrice($totalPrice)
            ->setApproximateTotalPrice($approximateTotalPrice);
    }
    /**
     * Get BaggageRestriction value
     * @return \Travelport\UniversalRecord\StructType\BaggageRestriction[]
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
        foreach ($values as $carryOnDetailsBaggageRestrictionItem) {
            // validation for constraint: itemType
            if (!$carryOnDetailsBaggageRestrictionItem instanceof \Travelport\UniversalRecord\StructType\BaggageRestriction) {
                $invalidValues[] = is_object($carryOnDetailsBaggageRestrictionItem) ? get_class($carryOnDetailsBaggageRestrictionItem) : sprintf('%s(%s)', gettype($carryOnDetailsBaggageRestrictionItem), var_export($carryOnDetailsBaggageRestrictionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BaggageRestriction property can only contain items of type \Travelport\UniversalRecord\StructType\BaggageRestriction, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BaggageRestriction value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BaggageRestriction[] $baggageRestriction
     * @return \Travelport\UniversalRecord\StructType\CarryOnDetails
     */
    public function setBaggageRestriction(?array $baggageRestriction = null): self
    {
        // validation for constraint: array
        if ('' !== ($baggageRestrictionArrayErrorMessage = self::validateBaggageRestrictionForArrayConstraintFromSetBaggageRestriction($baggageRestriction))) {
            throw new InvalidArgumentException($baggageRestrictionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($baggageRestriction) && count($baggageRestriction) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($baggageRestriction)), __LINE__);
        }
        $this->BaggageRestriction = $baggageRestriction;
        
        return $this;
    }
    /**
     * Add item to BaggageRestriction value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BaggageRestriction $item
     * @return \Travelport\UniversalRecord\StructType\CarryOnDetails
     */
    public function addToBaggageRestriction(\Travelport\UniversalRecord\StructType\BaggageRestriction $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\BaggageRestriction) {
            throw new InvalidArgumentException(sprintf('The BaggageRestriction property can only contain items of type \Travelport\UniversalRecord\StructType\BaggageRestriction, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->BaggageRestriction) && count($this->BaggageRestriction) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->BaggageRestriction)), __LINE__);
        }
        $this->BaggageRestriction[] = $item;
        
        return $this;
    }
    /**
     * Get ApplicableCarryOnBags value
     * @return string|null
     */
    public function getApplicableCarryOnBags(): ?string
    {
        return $this->ApplicableCarryOnBags;
    }
    /**
     * Set ApplicableCarryOnBags value
     * @param string $applicableCarryOnBags
     * @return \Travelport\UniversalRecord\StructType\CarryOnDetails
     */
    public function setApplicableCarryOnBags(?string $applicableCarryOnBags = null): self
    {
        // validation for constraint: string
        if (!is_null($applicableCarryOnBags) && !is_string($applicableCarryOnBags)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($applicableCarryOnBags, true), gettype($applicableCarryOnBags)), __LINE__);
        }
        $this->ApplicableCarryOnBags = $applicableCarryOnBags;
        
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
     * @return \Travelport\UniversalRecord\StructType\CarryOnDetails
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
     * @return \Travelport\UniversalRecord\StructType\CarryOnDetails
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
     * @return \Travelport\UniversalRecord\StructType\CarryOnDetails
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
     * @return \Travelport\UniversalRecord\StructType\CarryOnDetails
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
     * @return \Travelport\UniversalRecord\StructType\CarryOnDetails
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
