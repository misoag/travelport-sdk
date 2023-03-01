<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExchangePenaltyInfo StructType
 * @subpackage Structs
 */
class ExchangePenaltyInfo extends AbstractStructBase
{
    /**
     * The PenaltyInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: PenaltyInformation
     * @var \Travelport\UniversalRecord\StructType\PenaltyInformation[]
     */
    public ?array $PenaltyInformation = null;
    /**
     * The PTC
     * Meta information extracted from the WSDL
     * - documentation: Passenger Type Code (ADT, A2B5)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 3
     * - use: optional
     * @var string|null
     */
    public ?string $PTC = null;
    /**
     * The MinimumChangeFee
     * Meta information extracted from the WSDL
     * - documentation: Minimum change fee for changes to the itinerary. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $MinimumChangeFee = null;
    /**
     * The MaximumChangeFee
     * Meta information extracted from the WSDL
     * - documentation: Maximum change fee for changes to the itinerary. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $MaximumChangeFee = null;
    /**
     * Constructor method for ExchangePenaltyInfo
     * @uses ExchangePenaltyInfo::setPenaltyInformation()
     * @uses ExchangePenaltyInfo::setPTC()
     * @uses ExchangePenaltyInfo::setMinimumChangeFee()
     * @uses ExchangePenaltyInfo::setMaximumChangeFee()
     * @param \Travelport\UniversalRecord\StructType\PenaltyInformation[] $penaltyInformation
     * @param string $pTC
     * @param string $minimumChangeFee
     * @param string $maximumChangeFee
     */
    public function __construct(?array $penaltyInformation = null, ?string $pTC = null, ?string $minimumChangeFee = null, ?string $maximumChangeFee = null)
    {
        $this
            ->setPenaltyInformation($penaltyInformation)
            ->setPTC($pTC)
            ->setMinimumChangeFee($minimumChangeFee)
            ->setMaximumChangeFee($maximumChangeFee);
    }
    /**
     * Get PenaltyInformation value
     * @return \Travelport\UniversalRecord\StructType\PenaltyInformation[]
     */
    public function getPenaltyInformation(): ?array
    {
        return $this->PenaltyInformation;
    }
    /**
     * Set PenaltyInformation value
     * @param \Travelport\UniversalRecord\StructType\PenaltyInformation[] $penaltyInformation
     * @return \Travelport\UniversalRecord\StructType\ExchangePenaltyInfo
     */
    public function setPenaltyInformation(?array $penaltyInformation = null): self
    {
        $this->PenaltyInformation = $penaltyInformation;
        
        return $this;
    }
    /**
     * Add item to PenaltyInformation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PenaltyInformation $item
     * @return \Travelport\UniversalRecord\StructType\ExchangePenaltyInfo
     */
    public function addToPenaltyInformation(\Travelport\UniversalRecord\StructType\PenaltyInformation $item): self
    {
        $this->PenaltyInformation[] = $item;
        
        return $this;
    }
    /**
     * Get PTC value
     * @return string|null
     */
    public function getPTC(): ?string
    {
        return $this->PTC;
    }
    /**
     * Set PTC value
     * @param string $pTC
     * @return \Travelport\UniversalRecord\StructType\ExchangePenaltyInfo
     */
    public function setPTC(?string $pTC = null): self
    {
        $this->PTC = $pTC;
        
        return $this;
    }
    /**
     * Get MinimumChangeFee value
     * @return string|null
     */
    public function getMinimumChangeFee(): ?string
    {
        return $this->MinimumChangeFee;
    }
    /**
     * Set MinimumChangeFee value
     * @param string $minimumChangeFee
     * @return \Travelport\UniversalRecord\StructType\ExchangePenaltyInfo
     */
    public function setMinimumChangeFee(?string $minimumChangeFee = null): self
    {
        $this->MinimumChangeFee = $minimumChangeFee;
        
        return $this;
    }
    /**
     * Get MaximumChangeFee value
     * @return string|null
     */
    public function getMaximumChangeFee(): ?string
    {
        return $this->MaximumChangeFee;
    }
    /**
     * Set MaximumChangeFee value
     * @param string $maximumChangeFee
     * @return \Travelport\UniversalRecord\StructType\ExchangePenaltyInfo
     */
    public function setMaximumChangeFee(?string $maximumChangeFee = null): self
    {
        $this->MaximumChangeFee = $maximumChangeFee;
        
        return $this;
    }
}
