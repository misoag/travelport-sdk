<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LegPrice StructType
 * Meta information extracted from the WSDL
 * - documentation: Information about the journey Leg Price
 * @subpackage Structs
 */
class LegPrice extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Key;
    /**
     * The TotalPrice
     * Meta information extracted from the WSDL
     * - documentation: The Total Prices for the Combination of Journey legs for this Price. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $TotalPrice;
    /**
     * The LegDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: LegDetail
     * @var \Travelport\UniversalRecord\StructType\LegDetail[]
     */
    public ?array $LegDetail = null;
    /**
     * The ApproximateTotalPrice
     * Meta information extracted from the WSDL
     * - documentation: The Converted Total Price in Agency's Default Currency Value | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ApproximateTotalPrice = null;
    /**
     * Constructor method for LegPrice
     * @uses LegPrice::setKey()
     * @uses LegPrice::setTotalPrice()
     * @uses LegPrice::setLegDetail()
     * @uses LegPrice::setApproximateTotalPrice()
     * @param string $key
     * @param string $totalPrice
     * @param \Travelport\UniversalRecord\StructType\LegDetail[] $legDetail
     * @param string $approximateTotalPrice
     */
    public function __construct(string $key, string $totalPrice, ?array $legDetail = null, ?string $approximateTotalPrice = null)
    {
        $this
            ->setKey($key)
            ->setTotalPrice($totalPrice)
            ->setLegDetail($legDetail)
            ->setApproximateTotalPrice($approximateTotalPrice);
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
     * @return \Travelport\UniversalRecord\StructType\LegPrice
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get TotalPrice value
     * @return string
     */
    public function getTotalPrice(): string
    {
        return $this->TotalPrice;
    }
    /**
     * Set TotalPrice value
     * @param string $totalPrice
     * @return \Travelport\UniversalRecord\StructType\LegPrice
     */
    public function setTotalPrice(string $totalPrice): self
    {
        $this->TotalPrice = $totalPrice;
        
        return $this;
    }
    /**
     * Get LegDetail value
     * @return \Travelport\UniversalRecord\StructType\LegDetail[]
     */
    public function getLegDetail(): ?array
    {
        return $this->LegDetail;
    }
    /**
     * Set LegDetail value
     * @param \Travelport\UniversalRecord\StructType\LegDetail[] $legDetail
     * @return \Travelport\UniversalRecord\StructType\LegPrice
     */
    public function setLegDetail(?array $legDetail = null): self
    {
        $this->LegDetail = $legDetail;
        
        return $this;
    }
    /**
     * Add item to LegDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\LegDetail $item
     * @return \Travelport\UniversalRecord\StructType\LegPrice
     */
    public function addToLegDetail(\Travelport\UniversalRecord\StructType\LegDetail $item): self
    {
        $this->LegDetail[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\LegPrice
     */
    public function setApproximateTotalPrice(?string $approximateTotalPrice = null): self
    {
        $this->ApproximateTotalPrice = $approximateTotalPrice;
        
        return $this;
    }
}
