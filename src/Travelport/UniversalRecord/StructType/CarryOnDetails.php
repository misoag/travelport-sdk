<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?array $BaggageRestriction = null;
    /**
     * The ApplicableCarryOnBags
     * Meta information extracted from the WSDL
     * - documentation: Applicable Carry-On baggage "First", "Second", "Third" etc
     * @var string|null
     */
    public ?string $ApplicableCarryOnBags = null;
    /**
     * The BasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $BasePrice = null;
    /**
     * The ApproximateBasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ApproximateBasePrice = null;
    /**
     * The Taxes
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $Taxes = null;
    /**
     * The TotalPrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $TotalPrice = null;
    /**
     * The ApproximateTotalPrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ApproximateTotalPrice = null;
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
     * Set BaggageRestriction value
     * @param \Travelport\UniversalRecord\StructType\BaggageRestriction[] $baggageRestriction
     * @return \Travelport\UniversalRecord\StructType\CarryOnDetails
     */
    public function setBaggageRestriction(?array $baggageRestriction = null): self
    {
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
        $this->ApproximateTotalPrice = $approximateTotalPrice;
        
        return $this;
    }
}
