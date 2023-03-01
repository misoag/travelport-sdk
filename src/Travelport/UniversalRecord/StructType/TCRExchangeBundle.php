<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TCRExchangeBundle StructType
 * Meta information extracted from the WSDL
 * - documentation: Only used within an AirExchangeQuoteRsp | Itinerary level taxes | Used in AirExchangeReq request and AirExchangeQuoteRsp response | Bundle exchange, pricing, and penalty information for one ticketless carrier reservation
 * @subpackage Structs
 */
class TCRExchangeBundle extends AbstractStructBase
{
    /**
     * The TCRNumber
     * Meta information extracted from the WSDL
     * - documentation: The identifying number for a Ticketless Air Reservation. | The identifying number for a Ticketless Air Reservation
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $TCRNumber;
    /**
     * The AirExchangeInfo
     * Meta information extracted from the WSDL
     * - ref: common:AirExchangeInfo
     * @var \Travelport\UniversalRecord\StructType\AirExchangeInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\AirExchangeInfo $AirExchangeInfo = null;
    /**
     * The AirPricingInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: AirPricingInfoRef
     * @var \Travelport\UniversalRecord\StructType\AirPricingInfoRef[]
     */
    public ?array $AirPricingInfoRef = null;
    /**
     * The FeeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FeeInfo
     * @var \Travelport\UniversalRecord\StructType\TypeFeeInfo[]
     */
    public ?array $FeeInfo = null;
    /**
     * The TaxInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TaxInfo
     * @var \Travelport\UniversalRecord\StructType\TypeTaxInfo[]
     */
    public ?array $TaxInfo = null;
    /**
     * The Penalty
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Penalty
     * @var \Travelport\UniversalRecord\StructType\Penalty[]
     */
    public ?array $Penalty = null;
    /**
     * Constructor method for TCRExchangeBundle
     * @uses TCRExchangeBundle::setTCRNumber()
     * @uses TCRExchangeBundle::setAirExchangeInfo()
     * @uses TCRExchangeBundle::setAirPricingInfoRef()
     * @uses TCRExchangeBundle::setFeeInfo()
     * @uses TCRExchangeBundle::setTaxInfo()
     * @uses TCRExchangeBundle::setPenalty()
     * @param string $tCRNumber
     * @param \Travelport\UniversalRecord\StructType\AirExchangeInfo $airExchangeInfo
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @param \Travelport\UniversalRecord\StructType\TypeFeeInfo[] $feeInfo
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo[] $taxInfo
     * @param \Travelport\UniversalRecord\StructType\Penalty[] $penalty
     */
    public function __construct(string $tCRNumber, ?\Travelport\UniversalRecord\StructType\AirExchangeInfo $airExchangeInfo = null, ?array $airPricingInfoRef = null, ?array $feeInfo = null, ?array $taxInfo = null, ?array $penalty = null)
    {
        $this
            ->setTCRNumber($tCRNumber)
            ->setAirExchangeInfo($airExchangeInfo)
            ->setAirPricingInfoRef($airPricingInfoRef)
            ->setFeeInfo($feeInfo)
            ->setTaxInfo($taxInfo)
            ->setPenalty($penalty);
    }
    /**
     * Get TCRNumber value
     * @return string
     */
    public function getTCRNumber(): string
    {
        return $this->TCRNumber;
    }
    /**
     * Set TCRNumber value
     * @param string $tCRNumber
     * @return \Travelport\UniversalRecord\StructType\TCRExchangeBundle
     */
    public function setTCRNumber(string $tCRNumber): self
    {
        $this->TCRNumber = $tCRNumber;
        
        return $this;
    }
    /**
     * Get AirExchangeInfo value
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo|null
     */
    public function getAirExchangeInfo(): ?\Travelport\UniversalRecord\StructType\AirExchangeInfo
    {
        return $this->AirExchangeInfo;
    }
    /**
     * Set AirExchangeInfo value
     * @param \Travelport\UniversalRecord\StructType\AirExchangeInfo $airExchangeInfo
     * @return \Travelport\UniversalRecord\StructType\TCRExchangeBundle
     */
    public function setAirExchangeInfo(?\Travelport\UniversalRecord\StructType\AirExchangeInfo $airExchangeInfo = null): self
    {
        $this->AirExchangeInfo = $airExchangeInfo;
        
        return $this;
    }
    /**
     * Get AirPricingInfoRef value
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfoRef[]
     */
    public function getAirPricingInfoRef(): ?array
    {
        return $this->AirPricingInfoRef;
    }
    /**
     * Set AirPricingInfoRef value
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @return \Travelport\UniversalRecord\StructType\TCRExchangeBundle
     */
    public function setAirPricingInfoRef(?array $airPricingInfoRef = null): self
    {
        $this->AirPricingInfoRef = $airPricingInfoRef;
        
        return $this;
    }
    /**
     * Add item to AirPricingInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef $item
     * @return \Travelport\UniversalRecord\StructType\TCRExchangeBundle
     */
    public function addToAirPricingInfoRef(\Travelport\UniversalRecord\StructType\AirPricingInfoRef $item): self
    {
        $this->AirPricingInfoRef[] = $item;
        
        return $this;
    }
    /**
     * Get FeeInfo value
     * @return \Travelport\UniversalRecord\StructType\TypeFeeInfo[]
     */
    public function getFeeInfo(): ?array
    {
        return $this->FeeInfo;
    }
    /**
     * Set FeeInfo value
     * @param \Travelport\UniversalRecord\StructType\TypeFeeInfo[] $feeInfo
     * @return \Travelport\UniversalRecord\StructType\TCRExchangeBundle
     */
    public function setFeeInfo(?array $feeInfo = null): self
    {
        $this->FeeInfo = $feeInfo;
        
        return $this;
    }
    /**
     * Add item to FeeInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeFeeInfo $item
     * @return \Travelport\UniversalRecord\StructType\TCRExchangeBundle
     */
    public function addToFeeInfo(\Travelport\UniversalRecord\StructType\TypeFeeInfo $item): self
    {
        $this->FeeInfo[] = $item;
        
        return $this;
    }
    /**
     * Get TaxInfo value
     * @return \Travelport\UniversalRecord\StructType\TypeTaxInfo[]
     */
    public function getTaxInfo(): ?array
    {
        return $this->TaxInfo;
    }
    /**
     * Set TaxInfo value
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo[] $taxInfo
     * @return \Travelport\UniversalRecord\StructType\TCRExchangeBundle
     */
    public function setTaxInfo(?array $taxInfo = null): self
    {
        $this->TaxInfo = $taxInfo;
        
        return $this;
    }
    /**
     * Add item to TaxInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo $item
     * @return \Travelport\UniversalRecord\StructType\TCRExchangeBundle
     */
    public function addToTaxInfo(\Travelport\UniversalRecord\StructType\TypeTaxInfo $item): self
    {
        $this->TaxInfo[] = $item;
        
        return $this;
    }
    /**
     * Get Penalty value
     * @return \Travelport\UniversalRecord\StructType\Penalty[]
     */
    public function getPenalty(): ?array
    {
        return $this->Penalty;
    }
    /**
     * Set Penalty value
     * @param \Travelport\UniversalRecord\StructType\Penalty[] $penalty
     * @return \Travelport\UniversalRecord\StructType\TCRExchangeBundle
     */
    public function setPenalty(?array $penalty = null): self
    {
        $this->Penalty = $penalty;
        
        return $this;
    }
    /**
     * Add item to Penalty value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Penalty $item
     * @return \Travelport\UniversalRecord\StructType\TCRExchangeBundle
     */
    public function addToPenalty(\Travelport\UniversalRecord\StructType\Penalty $item): self
    {
        $this->Penalty[] = $item;
        
        return $this;
    }
}
