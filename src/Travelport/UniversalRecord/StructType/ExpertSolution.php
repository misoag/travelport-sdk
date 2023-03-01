<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExpertSolution StructType
 * Meta information extracted from the WSDL
 * - documentation: Information about Expert Solution Route component retrieved from Knowledge Base
 * @subpackage Structs
 */
class ExpertSolution extends AbstractStructBase
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
     * The CreatedDate
     * Meta information extracted from the WSDL
     * - documentation: The Date on which this solution was created
     * - use: required
     * @var string
     */
    public string $CreatedDate;
    /**
     * The LegPrice
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: LegPrice
     * @var \Travelport\UniversalRecord\StructType\LegPrice[]
     */
    public ?array $LegPrice = null;
    /**
     * The TotalPrice
     * Meta information extracted from the WSDL
     * - documentation: The Total Price for the Solution. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $TotalPrice = null;
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
     * Constructor method for ExpertSolution
     * @uses ExpertSolution::setKey()
     * @uses ExpertSolution::setCreatedDate()
     * @uses ExpertSolution::setLegPrice()
     * @uses ExpertSolution::setTotalPrice()
     * @uses ExpertSolution::setApproximateTotalPrice()
     * @param string $key
     * @param string $createdDate
     * @param \Travelport\UniversalRecord\StructType\LegPrice[] $legPrice
     * @param string $totalPrice
     * @param string $approximateTotalPrice
     */
    public function __construct(string $key, string $createdDate, ?array $legPrice = null, ?string $totalPrice = null, ?string $approximateTotalPrice = null)
    {
        $this
            ->setKey($key)
            ->setCreatedDate($createdDate)
            ->setLegPrice($legPrice)
            ->setTotalPrice($totalPrice)
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
     * @return \Travelport\UniversalRecord\StructType\ExpertSolution
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get CreatedDate value
     * @return string
     */
    public function getCreatedDate(): string
    {
        return $this->CreatedDate;
    }
    /**
     * Set CreatedDate value
     * @param string $createdDate
     * @return \Travelport\UniversalRecord\StructType\ExpertSolution
     */
    public function setCreatedDate(string $createdDate): self
    {
        $this->CreatedDate = $createdDate;
        
        return $this;
    }
    /**
     * Get LegPrice value
     * @return \Travelport\UniversalRecord\StructType\LegPrice[]
     */
    public function getLegPrice(): ?array
    {
        return $this->LegPrice;
    }
    /**
     * Set LegPrice value
     * @param \Travelport\UniversalRecord\StructType\LegPrice[] $legPrice
     * @return \Travelport\UniversalRecord\StructType\ExpertSolution
     */
    public function setLegPrice(?array $legPrice = null): self
    {
        $this->LegPrice = $legPrice;
        
        return $this;
    }
    /**
     * Add item to LegPrice value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\LegPrice $item
     * @return \Travelport\UniversalRecord\StructType\ExpertSolution
     */
    public function addToLegPrice(\Travelport\UniversalRecord\StructType\LegPrice $item): self
    {
        $this->LegPrice[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\ExpertSolution
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
     * @return \Travelport\UniversalRecord\StructType\ExpertSolution
     */
    public function setApproximateTotalPrice(?string $approximateTotalPrice = null): self
    {
        $this->ApproximateTotalPrice = $approximateTotalPrice;
        
        return $this;
    }
}
