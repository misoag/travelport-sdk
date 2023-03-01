<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirPricePoint StructType
 * Meta information extracted from the WSDL
 * - documentation: Itinerary level taxes | Supported by ACH only | The container which holds the Non Solutioned result.
 * @subpackage Structs
 */
class AirPricePoint extends AbstractStructBase
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
     * The AirPricingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirPricingInfo
     * @var \Travelport\Air\StructType\AirPricingInfo[]
     */
    public ?array $AirPricingInfo = null;
    /**
     * The AirPricingResultMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeResultMessage[]
     */
    public ?array $AirPricingResultMessage = null;
    /**
     * The FeeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FeeInfo
     * @var \Travelport\Air\StructType\TypeFeeInfo[]
     */
    public ?array $FeeInfo = null;
    /**
     * The FareNote
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: FareNote
     * @var \Travelport\Air\StructType\FareNote[]
     */
    public ?array $FareNote = null;
    /**
     * The TaxInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TaxInfo
     * @var \Travelport\Air\StructType\TypeTaxInfo[]
     */
    public ?array $TaxInfo = null;
    /**
     * The CompleteItinerary
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to return whether complete Itinerary is present in the AirPricePoint structure or not. If set to true means AirPricePoint contains the result for full requested itinerary.
     * - default: true
     * - use: optional
     * @var bool|null
     */
    public ?bool $CompleteItinerary = null;
    /**
     * The TotalPrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $TotalPrice = null;
    /**
     * The BasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $BasePrice = null;
    /**
     * The ApproximateTotalPrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ApproximateTotalPrice = null;
    /**
     * The ApproximateBasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ApproximateBasePrice = null;
    /**
     * The EquivalentBasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $EquivalentBasePrice = null;
    /**
     * The Taxes
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $Taxes = null;
    /**
     * The Fees
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $Fees = null;
    /**
     * The Services
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $Services = null;
    /**
     * The ApproximateTaxes
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ApproximateTaxes = null;
    /**
     * The ApproximateFees
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ApproximateFees = null;
    /**
     * Constructor method for AirPricePoint
     * @uses AirPricePoint::setKey()
     * @uses AirPricePoint::setAirPricingInfo()
     * @uses AirPricePoint::setAirPricingResultMessage()
     * @uses AirPricePoint::setFeeInfo()
     * @uses AirPricePoint::setFareNote()
     * @uses AirPricePoint::setTaxInfo()
     * @uses AirPricePoint::setCompleteItinerary()
     * @uses AirPricePoint::setTotalPrice()
     * @uses AirPricePoint::setBasePrice()
     * @uses AirPricePoint::setApproximateTotalPrice()
     * @uses AirPricePoint::setApproximateBasePrice()
     * @uses AirPricePoint::setEquivalentBasePrice()
     * @uses AirPricePoint::setTaxes()
     * @uses AirPricePoint::setFees()
     * @uses AirPricePoint::setServices()
     * @uses AirPricePoint::setApproximateTaxes()
     * @uses AirPricePoint::setApproximateFees()
     * @param string $key
     * @param \Travelport\Air\StructType\AirPricingInfo[] $airPricingInfo
     * @param \Travelport\Air\StructType\TypeResultMessage[] $airPricingResultMessage
     * @param \Travelport\Air\StructType\TypeFeeInfo[] $feeInfo
     * @param \Travelport\Air\StructType\FareNote[] $fareNote
     * @param \Travelport\Air\StructType\TypeTaxInfo[] $taxInfo
     * @param bool $completeItinerary
     * @param string $totalPrice
     * @param string $basePrice
     * @param string $approximateTotalPrice
     * @param string $approximateBasePrice
     * @param string $equivalentBasePrice
     * @param string $taxes
     * @param string $fees
     * @param string $services
     * @param string $approximateTaxes
     * @param string $approximateFees
     */
    public function __construct(string $key, ?array $airPricingInfo = null, ?array $airPricingResultMessage = null, ?array $feeInfo = null, ?array $fareNote = null, ?array $taxInfo = null, ?bool $completeItinerary = true, ?string $totalPrice = null, ?string $basePrice = null, ?string $approximateTotalPrice = null, ?string $approximateBasePrice = null, ?string $equivalentBasePrice = null, ?string $taxes = null, ?string $fees = null, ?string $services = null, ?string $approximateTaxes = null, ?string $approximateFees = null)
    {
        $this
            ->setKey($key)
            ->setAirPricingInfo($airPricingInfo)
            ->setAirPricingResultMessage($airPricingResultMessage)
            ->setFeeInfo($feeInfo)
            ->setFareNote($fareNote)
            ->setTaxInfo($taxInfo)
            ->setCompleteItinerary($completeItinerary)
            ->setTotalPrice($totalPrice)
            ->setBasePrice($basePrice)
            ->setApproximateTotalPrice($approximateTotalPrice)
            ->setApproximateBasePrice($approximateBasePrice)
            ->setEquivalentBasePrice($equivalentBasePrice)
            ->setTaxes($taxes)
            ->setFees($fees)
            ->setServices($services)
            ->setApproximateTaxes($approximateTaxes)
            ->setApproximateFees($approximateFees);
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
     * @return \Travelport\Air\StructType\AirPricePoint
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get AirPricingInfo value
     * @return \Travelport\Air\StructType\AirPricingInfo[]
     */
    public function getAirPricingInfo(): ?array
    {
        return $this->AirPricingInfo;
    }
    /**
     * Set AirPricingInfo value
     * @param \Travelport\Air\StructType\AirPricingInfo[] $airPricingInfo
     * @return \Travelport\Air\StructType\AirPricePoint
     */
    public function setAirPricingInfo(?array $airPricingInfo = null): self
    {
        $this->AirPricingInfo = $airPricingInfo;
        
        return $this;
    }
    /**
     * Add item to AirPricingInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirPricingInfo $item
     * @return \Travelport\Air\StructType\AirPricePoint
     */
    public function addToAirPricingInfo(\Travelport\Air\StructType\AirPricingInfo $item): self
    {
        $this->AirPricingInfo[] = $item;
        
        return $this;
    }
    /**
     * Get AirPricingResultMessage value
     * @return \Travelport\Air\StructType\TypeResultMessage[]
     */
    public function getAirPricingResultMessage(): ?array
    {
        return $this->AirPricingResultMessage;
    }
    /**
     * Set AirPricingResultMessage value
     * @param \Travelport\Air\StructType\TypeResultMessage[] $airPricingResultMessage
     * @return \Travelport\Air\StructType\AirPricePoint
     */
    public function setAirPricingResultMessage(?array $airPricingResultMessage = null): self
    {
        $this->AirPricingResultMessage = $airPricingResultMessage;
        
        return $this;
    }
    /**
     * Add item to AirPricingResultMessage value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TypeResultMessage $item
     * @return \Travelport\Air\StructType\AirPricePoint
     */
    public function addToAirPricingResultMessage(\Travelport\Air\StructType\TypeResultMessage $item): self
    {
        $this->AirPricingResultMessage[] = $item;
        
        return $this;
    }
    /**
     * Get FeeInfo value
     * @return \Travelport\Air\StructType\TypeFeeInfo[]
     */
    public function getFeeInfo(): ?array
    {
        return $this->FeeInfo;
    }
    /**
     * Set FeeInfo value
     * @param \Travelport\Air\StructType\TypeFeeInfo[] $feeInfo
     * @return \Travelport\Air\StructType\AirPricePoint
     */
    public function setFeeInfo(?array $feeInfo = null): self
    {
        $this->FeeInfo = $feeInfo;
        
        return $this;
    }
    /**
     * Add item to FeeInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TypeFeeInfo $item
     * @return \Travelport\Air\StructType\AirPricePoint
     */
    public function addToFeeInfo(\Travelport\Air\StructType\TypeFeeInfo $item): self
    {
        $this->FeeInfo[] = $item;
        
        return $this;
    }
    /**
     * Get FareNote value
     * @return \Travelport\Air\StructType\FareNote[]
     */
    public function getFareNote(): ?array
    {
        return $this->FareNote;
    }
    /**
     * Set FareNote value
     * @param \Travelport\Air\StructType\FareNote[] $fareNote
     * @return \Travelport\Air\StructType\AirPricePoint
     */
    public function setFareNote(?array $fareNote = null): self
    {
        $this->FareNote = $fareNote;
        
        return $this;
    }
    /**
     * Add item to FareNote value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\FareNote $item
     * @return \Travelport\Air\StructType\AirPricePoint
     */
    public function addToFareNote(\Travelport\Air\StructType\FareNote $item): self
    {
        $this->FareNote[] = $item;
        
        return $this;
    }
    /**
     * Get TaxInfo value
     * @return \Travelport\Air\StructType\TypeTaxInfo[]
     */
    public function getTaxInfo(): ?array
    {
        return $this->TaxInfo;
    }
    /**
     * Set TaxInfo value
     * @param \Travelport\Air\StructType\TypeTaxInfo[] $taxInfo
     * @return \Travelport\Air\StructType\AirPricePoint
     */
    public function setTaxInfo(?array $taxInfo = null): self
    {
        $this->TaxInfo = $taxInfo;
        
        return $this;
    }
    /**
     * Add item to TaxInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TypeTaxInfo $item
     * @return \Travelport\Air\StructType\AirPricePoint
     */
    public function addToTaxInfo(\Travelport\Air\StructType\TypeTaxInfo $item): self
    {
        $this->TaxInfo[] = $item;
        
        return $this;
    }
    /**
     * Get CompleteItinerary value
     * @return bool|null
     */
    public function getCompleteItinerary(): ?bool
    {
        return $this->CompleteItinerary;
    }
    /**
     * Set CompleteItinerary value
     * @param bool $completeItinerary
     * @return \Travelport\Air\StructType\AirPricePoint
     */
    public function setCompleteItinerary(?bool $completeItinerary = true): self
    {
        $this->CompleteItinerary = $completeItinerary;
        
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
     * @return \Travelport\Air\StructType\AirPricePoint
     */
    public function setTotalPrice(?string $totalPrice = null): self
    {
        $this->TotalPrice = $totalPrice;
        
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
     * @return \Travelport\Air\StructType\AirPricePoint
     */
    public function setBasePrice(?string $basePrice = null): self
    {
        $this->BasePrice = $basePrice;
        
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
     * @return \Travelport\Air\StructType\AirPricePoint
     */
    public function setApproximateTotalPrice(?string $approximateTotalPrice = null): self
    {
        $this->ApproximateTotalPrice = $approximateTotalPrice;
        
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
     * @return \Travelport\Air\StructType\AirPricePoint
     */
    public function setApproximateBasePrice(?string $approximateBasePrice = null): self
    {
        $this->ApproximateBasePrice = $approximateBasePrice;
        
        return $this;
    }
    /**
     * Get EquivalentBasePrice value
     * @return string|null
     */
    public function getEquivalentBasePrice(): ?string
    {
        return $this->EquivalentBasePrice;
    }
    /**
     * Set EquivalentBasePrice value
     * @param string $equivalentBasePrice
     * @return \Travelport\Air\StructType\AirPricePoint
     */
    public function setEquivalentBasePrice(?string $equivalentBasePrice = null): self
    {
        $this->EquivalentBasePrice = $equivalentBasePrice;
        
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
     * @return \Travelport\Air\StructType\AirPricePoint
     */
    public function setTaxes(?string $taxes = null): self
    {
        $this->Taxes = $taxes;
        
        return $this;
    }
    /**
     * Get Fees value
     * @return string|null
     */
    public function getFees(): ?string
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param string $fees
     * @return \Travelport\Air\StructType\AirPricePoint
     */
    public function setFees(?string $fees = null): self
    {
        $this->Fees = $fees;
        
        return $this;
    }
    /**
     * Get Services value
     * @return string|null
     */
    public function getServices(): ?string
    {
        return $this->Services;
    }
    /**
     * Set Services value
     * @param string $services
     * @return \Travelport\Air\StructType\AirPricePoint
     */
    public function setServices(?string $services = null): self
    {
        $this->Services = $services;
        
        return $this;
    }
    /**
     * Get ApproximateTaxes value
     * @return string|null
     */
    public function getApproximateTaxes(): ?string
    {
        return $this->ApproximateTaxes;
    }
    /**
     * Set ApproximateTaxes value
     * @param string $approximateTaxes
     * @return \Travelport\Air\StructType\AirPricePoint
     */
    public function setApproximateTaxes(?string $approximateTaxes = null): self
    {
        $this->ApproximateTaxes = $approximateTaxes;
        
        return $this;
    }
    /**
     * Get ApproximateFees value
     * @return string|null
     */
    public function getApproximateFees(): ?string
    {
        return $this->ApproximateFees;
    }
    /**
     * Set ApproximateFees value
     * @param string $approximateFees
     * @return \Travelport\Air\StructType\AirPricePoint
     */
    public function setApproximateFees(?string $approximateFees = null): self
    {
        $this->ApproximateFees = $approximateFees;
        
        return $this;
    }
}
