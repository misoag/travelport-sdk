<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public string $ApplicableBags;
    /**
     * The BaggageRestriction
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: BaggageRestriction
     * @var \Travelport\Air\StructType\BaggageRestriction[]
     */
    public ?array $BaggageRestriction = null;
    /**
     * The AvailableDiscount
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AvailableDiscount
     * @var \Travelport\Air\StructType\AvailableDiscount[]
     */
    public ?array $AvailableDiscount = null;
    /**
     * The BasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $BasePrice = null;
    /**
     * The ApproximateBasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ApproximateBasePrice = null;
    /**
     * The Taxes
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Taxes = null;
    /**
     * The TotalPrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $TotalPrice = null;
    /**
     * The ApproximateTotalPrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ApproximateTotalPrice = null;
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
     * @param \Travelport\Air\StructType\BaggageRestriction[] $baggageRestriction
     * @param \Travelport\Air\StructType\AvailableDiscount[] $availableDiscount
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
     * @return \Travelport\Air\StructType\BagDetails
     */
    public function setApplicableBags(string $applicableBags): self
    {
        $this->ApplicableBags = $applicableBags;
        
        return $this;
    }
    /**
     * Get BaggageRestriction value
     * @return \Travelport\Air\StructType\BaggageRestriction[]
     */
    public function getBaggageRestriction(): ?array
    {
        return $this->BaggageRestriction;
    }
    /**
     * Set BaggageRestriction value
     * @param \Travelport\Air\StructType\BaggageRestriction[] $baggageRestriction
     * @return \Travelport\Air\StructType\BagDetails
     */
    public function setBaggageRestriction(?array $baggageRestriction = null): self
    {
        $this->BaggageRestriction = $baggageRestriction;
        
        return $this;
    }
    /**
     * Add item to BaggageRestriction value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\BaggageRestriction $item
     * @return \Travelport\Air\StructType\BagDetails
     */
    public function addToBaggageRestriction(\Travelport\Air\StructType\BaggageRestriction $item): self
    {
        $this->BaggageRestriction[] = $item;
        
        return $this;
    }
    /**
     * Get AvailableDiscount value
     * @return \Travelport\Air\StructType\AvailableDiscount[]
     */
    public function getAvailableDiscount(): ?array
    {
        return $this->AvailableDiscount;
    }
    /**
     * Set AvailableDiscount value
     * @param \Travelport\Air\StructType\AvailableDiscount[] $availableDiscount
     * @return \Travelport\Air\StructType\BagDetails
     */
    public function setAvailableDiscount(?array $availableDiscount = null): self
    {
        $this->AvailableDiscount = $availableDiscount;
        
        return $this;
    }
    /**
     * Add item to AvailableDiscount value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AvailableDiscount $item
     * @return \Travelport\Air\StructType\BagDetails
     */
    public function addToAvailableDiscount(\Travelport\Air\StructType\AvailableDiscount $item): self
    {
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
     * @return \Travelport\Air\StructType\BagDetails
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
     * @return \Travelport\Air\StructType\BagDetails
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
     * @return \Travelport\Air\StructType\BagDetails
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
     * @return \Travelport\Air\StructType\BagDetails
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
     * @return \Travelport\Air\StructType\BagDetails
     */
    public function setApproximateTotalPrice(?string $approximateTotalPrice = null): self
    {
        $this->ApproximateTotalPrice = $approximateTotalPrice;
        
        return $this;
    }
}
