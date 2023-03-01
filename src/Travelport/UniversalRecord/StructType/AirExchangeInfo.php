<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirExchangeInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Provides results of a exchange quote
 * @subpackage Structs
 */
class AirExchangeInfo extends AbstractStructBase
{
    /**
     * The ExchangeAmount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $ExchangeAmount;
    /**
     * The TotalPenaltyTaxInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TotalPenaltyTaxInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\TotalPenaltyTaxInfo $TotalPenaltyTaxInfo = null;
    /**
     * The PaidTax
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeTax[]
     */
    public ?array $PaidTax = null;
    /**
     * The TicketFeeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TicketFeeInfo[]
     */
    public ?array $TicketFeeInfo = null;
    /**
     * The Reason
     * Meta information extracted from the WSDL
     * - documentation: Used for rapid reprice. The reason code or text is returned if the PricingTag is not equal to A, and explains why A was not returned. Providers: 1G/1V/1P/1S/1A
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $Reason = null;
    /**
     * The FeeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeFeeInfo[]
     */
    public ?array $FeeInfo = null;
    /**
     * The TaxInfo
     * Meta information extracted from the WSDL
     * - documentation: Itinerary level taxes
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeTaxInfo[]
     */
    public ?array $TaxInfo = null;
    /**
     * The BaseFare
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $BaseFare = null;
    /**
     * The EquivalentBaseFare
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $EquivalentBaseFare = null;
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
     * The ChangeFee
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ChangeFee = null;
    /**
     * The ForfeitAmount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ForfeitAmount = null;
    /**
     * The Refundable
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $Refundable = null;
    /**
     * The Exchangeable
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $Exchangeable = null;
    /**
     * The FirstClassUpgrade
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $FirstClassUpgrade = null;
    /**
     * The TicketByDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $TicketByDate = null;
    /**
     * The PricingTag
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $PricingTag = null;
    /**
     * The EquivalentChangeFee
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $EquivalentChangeFee = null;
    /**
     * The EquivalentExchangeAmount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $EquivalentExchangeAmount = null;
    /**
     * The AddCollection
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $AddCollection = null;
    /**
     * The ResidualValue
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ResidualValue = null;
    /**
     * The TotalResidualValue
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $TotalResidualValue = null;
    /**
     * The OriginalFlightValue
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $OriginalFlightValue = null;
    /**
     * The FlownSegmentValue
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $FlownSegmentValue = null;
    /**
     * The BulkTicketAdvisory
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $BulkTicketAdvisory = null;
    /**
     * The FarePull
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $FarePull = null;
    /**
     * The PassengerTypeCode
     * Meta information extracted from the WSDL
     * - documentation: Passenger Type Code (ADT, A2B5)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 3
     * - use: optional
     * @var string|null
     */
    public ?string $PassengerTypeCode = null;
    /**
     * The PassengerCount
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    public ?int $PassengerCount = null;
    /**
     * The FormOfRefund
     * Meta information extracted from the WSDL
     * - documentation: How the refund will be issued. Values will be MCO or FormOfPayment
     * - use: optional
     * @var string|null
     */
    public ?string $FormOfRefund = null;
    /**
     * The Refund
     * Meta information extracted from the WSDL
     * - documentation: Total refund amount. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Refund = null;
    /**
     * Constructor method for AirExchangeInfo
     * @uses AirExchangeInfo::setExchangeAmount()
     * @uses AirExchangeInfo::setTotalPenaltyTaxInfo()
     * @uses AirExchangeInfo::setPaidTax()
     * @uses AirExchangeInfo::setTicketFeeInfo()
     * @uses AirExchangeInfo::setReason()
     * @uses AirExchangeInfo::setFeeInfo()
     * @uses AirExchangeInfo::setTaxInfo()
     * @uses AirExchangeInfo::setBaseFare()
     * @uses AirExchangeInfo::setEquivalentBaseFare()
     * @uses AirExchangeInfo::setTaxes()
     * @uses AirExchangeInfo::setChangeFee()
     * @uses AirExchangeInfo::setForfeitAmount()
     * @uses AirExchangeInfo::setRefundable()
     * @uses AirExchangeInfo::setExchangeable()
     * @uses AirExchangeInfo::setFirstClassUpgrade()
     * @uses AirExchangeInfo::setTicketByDate()
     * @uses AirExchangeInfo::setPricingTag()
     * @uses AirExchangeInfo::setEquivalentChangeFee()
     * @uses AirExchangeInfo::setEquivalentExchangeAmount()
     * @uses AirExchangeInfo::setAddCollection()
     * @uses AirExchangeInfo::setResidualValue()
     * @uses AirExchangeInfo::setTotalResidualValue()
     * @uses AirExchangeInfo::setOriginalFlightValue()
     * @uses AirExchangeInfo::setFlownSegmentValue()
     * @uses AirExchangeInfo::setBulkTicketAdvisory()
     * @uses AirExchangeInfo::setFarePull()
     * @uses AirExchangeInfo::setPassengerTypeCode()
     * @uses AirExchangeInfo::setPassengerCount()
     * @uses AirExchangeInfo::setFormOfRefund()
     * @uses AirExchangeInfo::setRefund()
     * @param string $exchangeAmount
     * @param \Travelport\UniversalRecord\StructType\TotalPenaltyTaxInfo $totalPenaltyTaxInfo
     * @param \Travelport\UniversalRecord\StructType\TypeTax[] $paidTax
     * @param \Travelport\UniversalRecord\StructType\TicketFeeInfo[] $ticketFeeInfo
     * @param string[] $reason
     * @param \Travelport\UniversalRecord\StructType\TypeFeeInfo[] $feeInfo
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo[] $taxInfo
     * @param string $baseFare
     * @param string $equivalentBaseFare
     * @param string $taxes
     * @param string $changeFee
     * @param string $forfeitAmount
     * @param bool $refundable
     * @param bool $exchangeable
     * @param bool $firstClassUpgrade
     * @param string $ticketByDate
     * @param string $pricingTag
     * @param string $equivalentChangeFee
     * @param string $equivalentExchangeAmount
     * @param string $addCollection
     * @param string $residualValue
     * @param string $totalResidualValue
     * @param string $originalFlightValue
     * @param string $flownSegmentValue
     * @param bool $bulkTicketAdvisory
     * @param string $farePull
     * @param string $passengerTypeCode
     * @param int $passengerCount
     * @param string $formOfRefund
     * @param string $refund
     */
    public function __construct(string $exchangeAmount, ?\Travelport\UniversalRecord\StructType\TotalPenaltyTaxInfo $totalPenaltyTaxInfo = null, ?array $paidTax = null, ?array $ticketFeeInfo = null, ?array $reason = null, ?array $feeInfo = null, ?array $taxInfo = null, ?string $baseFare = null, ?string $equivalentBaseFare = null, ?string $taxes = null, ?string $changeFee = null, ?string $forfeitAmount = null, ?bool $refundable = null, ?bool $exchangeable = null, ?bool $firstClassUpgrade = null, ?string $ticketByDate = null, ?string $pricingTag = null, ?string $equivalentChangeFee = null, ?string $equivalentExchangeAmount = null, ?string $addCollection = null, ?string $residualValue = null, ?string $totalResidualValue = null, ?string $originalFlightValue = null, ?string $flownSegmentValue = null, ?bool $bulkTicketAdvisory = null, ?string $farePull = null, ?string $passengerTypeCode = null, ?int $passengerCount = null, ?string $formOfRefund = null, ?string $refund = null)
    {
        $this
            ->setExchangeAmount($exchangeAmount)
            ->setTotalPenaltyTaxInfo($totalPenaltyTaxInfo)
            ->setPaidTax($paidTax)
            ->setTicketFeeInfo($ticketFeeInfo)
            ->setReason($reason)
            ->setFeeInfo($feeInfo)
            ->setTaxInfo($taxInfo)
            ->setBaseFare($baseFare)
            ->setEquivalentBaseFare($equivalentBaseFare)
            ->setTaxes($taxes)
            ->setChangeFee($changeFee)
            ->setForfeitAmount($forfeitAmount)
            ->setRefundable($refundable)
            ->setExchangeable($exchangeable)
            ->setFirstClassUpgrade($firstClassUpgrade)
            ->setTicketByDate($ticketByDate)
            ->setPricingTag($pricingTag)
            ->setEquivalentChangeFee($equivalentChangeFee)
            ->setEquivalentExchangeAmount($equivalentExchangeAmount)
            ->setAddCollection($addCollection)
            ->setResidualValue($residualValue)
            ->setTotalResidualValue($totalResidualValue)
            ->setOriginalFlightValue($originalFlightValue)
            ->setFlownSegmentValue($flownSegmentValue)
            ->setBulkTicketAdvisory($bulkTicketAdvisory)
            ->setFarePull($farePull)
            ->setPassengerTypeCode($passengerTypeCode)
            ->setPassengerCount($passengerCount)
            ->setFormOfRefund($formOfRefund)
            ->setRefund($refund);
    }
    /**
     * Get ExchangeAmount value
     * @return string
     */
    public function getExchangeAmount(): string
    {
        return $this->ExchangeAmount;
    }
    /**
     * Set ExchangeAmount value
     * @param string $exchangeAmount
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function setExchangeAmount(string $exchangeAmount): self
    {
        $this->ExchangeAmount = $exchangeAmount;
        
        return $this;
    }
    /**
     * Get TotalPenaltyTaxInfo value
     * @return \Travelport\UniversalRecord\StructType\TotalPenaltyTaxInfo|null
     */
    public function getTotalPenaltyTaxInfo(): ?\Travelport\UniversalRecord\StructType\TotalPenaltyTaxInfo
    {
        return $this->TotalPenaltyTaxInfo;
    }
    /**
     * Set TotalPenaltyTaxInfo value
     * @param \Travelport\UniversalRecord\StructType\TotalPenaltyTaxInfo $totalPenaltyTaxInfo
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function setTotalPenaltyTaxInfo(?\Travelport\UniversalRecord\StructType\TotalPenaltyTaxInfo $totalPenaltyTaxInfo = null): self
    {
        $this->TotalPenaltyTaxInfo = $totalPenaltyTaxInfo;
        
        return $this;
    }
    /**
     * Get PaidTax value
     * @return \Travelport\UniversalRecord\StructType\TypeTax[]
     */
    public function getPaidTax(): ?array
    {
        return $this->PaidTax;
    }
    /**
     * Set PaidTax value
     * @param \Travelport\UniversalRecord\StructType\TypeTax[] $paidTax
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function setPaidTax(?array $paidTax = null): self
    {
        $this->PaidTax = $paidTax;
        
        return $this;
    }
    /**
     * Add item to PaidTax value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeTax $item
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function addToPaidTax(\Travelport\UniversalRecord\StructType\TypeTax $item): self
    {
        $this->PaidTax[] = $item;
        
        return $this;
    }
    /**
     * Get TicketFeeInfo value
     * @return \Travelport\UniversalRecord\StructType\TicketFeeInfo[]
     */
    public function getTicketFeeInfo(): ?array
    {
        return $this->TicketFeeInfo;
    }
    /**
     * Set TicketFeeInfo value
     * @param \Travelport\UniversalRecord\StructType\TicketFeeInfo[] $ticketFeeInfo
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function setTicketFeeInfo(?array $ticketFeeInfo = null): self
    {
        $this->TicketFeeInfo = $ticketFeeInfo;
        
        return $this;
    }
    /**
     * Add item to TicketFeeInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TicketFeeInfo $item
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function addToTicketFeeInfo(\Travelport\UniversalRecord\StructType\TicketFeeInfo $item): self
    {
        $this->TicketFeeInfo[] = $item;
        
        return $this;
    }
    /**
     * Get Reason value
     * @return string[]
     */
    public function getReason(): ?array
    {
        return $this->Reason;
    }
    /**
     * Set Reason value
     * @param string[] $reason
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function setReason(?array $reason = null): self
    {
        $this->Reason = $reason;
        
        return $this;
    }
    /**
     * Add item to Reason value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function addToReason(string $item): self
    {
        $this->Reason[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
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
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
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
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
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
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function addToTaxInfo(\Travelport\UniversalRecord\StructType\TypeTaxInfo $item): self
    {
        $this->TaxInfo[] = $item;
        
        return $this;
    }
    /**
     * Get BaseFare value
     * @return string|null
     */
    public function getBaseFare(): ?string
    {
        return $this->BaseFare;
    }
    /**
     * Set BaseFare value
     * @param string $baseFare
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function setBaseFare(?string $baseFare = null): self
    {
        $this->BaseFare = $baseFare;
        
        return $this;
    }
    /**
     * Get EquivalentBaseFare value
     * @return string|null
     */
    public function getEquivalentBaseFare(): ?string
    {
        return $this->EquivalentBaseFare;
    }
    /**
     * Set EquivalentBaseFare value
     * @param string $equivalentBaseFare
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function setEquivalentBaseFare(?string $equivalentBaseFare = null): self
    {
        $this->EquivalentBaseFare = $equivalentBaseFare;
        
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
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function setTaxes(?string $taxes = null): self
    {
        $this->Taxes = $taxes;
        
        return $this;
    }
    /**
     * Get ChangeFee value
     * @return string|null
     */
    public function getChangeFee(): ?string
    {
        return $this->ChangeFee;
    }
    /**
     * Set ChangeFee value
     * @param string $changeFee
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function setChangeFee(?string $changeFee = null): self
    {
        $this->ChangeFee = $changeFee;
        
        return $this;
    }
    /**
     * Get ForfeitAmount value
     * @return string|null
     */
    public function getForfeitAmount(): ?string
    {
        return $this->ForfeitAmount;
    }
    /**
     * Set ForfeitAmount value
     * @param string $forfeitAmount
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function setForfeitAmount(?string $forfeitAmount = null): self
    {
        $this->ForfeitAmount = $forfeitAmount;
        
        return $this;
    }
    /**
     * Get Refundable value
     * @return bool|null
     */
    public function getRefundable(): ?bool
    {
        return $this->Refundable;
    }
    /**
     * Set Refundable value
     * @param bool $refundable
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function setRefundable(?bool $refundable = null): self
    {
        $this->Refundable = $refundable;
        
        return $this;
    }
    /**
     * Get Exchangeable value
     * @return bool|null
     */
    public function getExchangeable(): ?bool
    {
        return $this->Exchangeable;
    }
    /**
     * Set Exchangeable value
     * @param bool $exchangeable
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function setExchangeable(?bool $exchangeable = null): self
    {
        $this->Exchangeable = $exchangeable;
        
        return $this;
    }
    /**
     * Get FirstClassUpgrade value
     * @return bool|null
     */
    public function getFirstClassUpgrade(): ?bool
    {
        return $this->FirstClassUpgrade;
    }
    /**
     * Set FirstClassUpgrade value
     * @param bool $firstClassUpgrade
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function setFirstClassUpgrade(?bool $firstClassUpgrade = null): self
    {
        $this->FirstClassUpgrade = $firstClassUpgrade;
        
        return $this;
    }
    /**
     * Get TicketByDate value
     * @return string|null
     */
    public function getTicketByDate(): ?string
    {
        return $this->TicketByDate;
    }
    /**
     * Set TicketByDate value
     * @param string $ticketByDate
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function setTicketByDate(?string $ticketByDate = null): self
    {
        $this->TicketByDate = $ticketByDate;
        
        return $this;
    }
    /**
     * Get PricingTag value
     * @return string|null
     */
    public function getPricingTag(): ?string
    {
        return $this->PricingTag;
    }
    /**
     * Set PricingTag value
     * @param string $pricingTag
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function setPricingTag(?string $pricingTag = null): self
    {
        $this->PricingTag = $pricingTag;
        
        return $this;
    }
    /**
     * Get EquivalentChangeFee value
     * @return string|null
     */
    public function getEquivalentChangeFee(): ?string
    {
        return $this->EquivalentChangeFee;
    }
    /**
     * Set EquivalentChangeFee value
     * @param string $equivalentChangeFee
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function setEquivalentChangeFee(?string $equivalentChangeFee = null): self
    {
        $this->EquivalentChangeFee = $equivalentChangeFee;
        
        return $this;
    }
    /**
     * Get EquivalentExchangeAmount value
     * @return string|null
     */
    public function getEquivalentExchangeAmount(): ?string
    {
        return $this->EquivalentExchangeAmount;
    }
    /**
     * Set EquivalentExchangeAmount value
     * @param string $equivalentExchangeAmount
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function setEquivalentExchangeAmount(?string $equivalentExchangeAmount = null): self
    {
        $this->EquivalentExchangeAmount = $equivalentExchangeAmount;
        
        return $this;
    }
    /**
     * Get AddCollection value
     * @return string|null
     */
    public function getAddCollection(): ?string
    {
        return $this->AddCollection;
    }
    /**
     * Set AddCollection value
     * @param string $addCollection
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function setAddCollection(?string $addCollection = null): self
    {
        $this->AddCollection = $addCollection;
        
        return $this;
    }
    /**
     * Get ResidualValue value
     * @return string|null
     */
    public function getResidualValue(): ?string
    {
        return $this->ResidualValue;
    }
    /**
     * Set ResidualValue value
     * @param string $residualValue
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function setResidualValue(?string $residualValue = null): self
    {
        $this->ResidualValue = $residualValue;
        
        return $this;
    }
    /**
     * Get TotalResidualValue value
     * @return string|null
     */
    public function getTotalResidualValue(): ?string
    {
        return $this->TotalResidualValue;
    }
    /**
     * Set TotalResidualValue value
     * @param string $totalResidualValue
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function setTotalResidualValue(?string $totalResidualValue = null): self
    {
        $this->TotalResidualValue = $totalResidualValue;
        
        return $this;
    }
    /**
     * Get OriginalFlightValue value
     * @return string|null
     */
    public function getOriginalFlightValue(): ?string
    {
        return $this->OriginalFlightValue;
    }
    /**
     * Set OriginalFlightValue value
     * @param string $originalFlightValue
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function setOriginalFlightValue(?string $originalFlightValue = null): self
    {
        $this->OriginalFlightValue = $originalFlightValue;
        
        return $this;
    }
    /**
     * Get FlownSegmentValue value
     * @return string|null
     */
    public function getFlownSegmentValue(): ?string
    {
        return $this->FlownSegmentValue;
    }
    /**
     * Set FlownSegmentValue value
     * @param string $flownSegmentValue
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function setFlownSegmentValue(?string $flownSegmentValue = null): self
    {
        $this->FlownSegmentValue = $flownSegmentValue;
        
        return $this;
    }
    /**
     * Get BulkTicketAdvisory value
     * @return bool|null
     */
    public function getBulkTicketAdvisory(): ?bool
    {
        return $this->BulkTicketAdvisory;
    }
    /**
     * Set BulkTicketAdvisory value
     * @param bool $bulkTicketAdvisory
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function setBulkTicketAdvisory(?bool $bulkTicketAdvisory = null): self
    {
        $this->BulkTicketAdvisory = $bulkTicketAdvisory;
        
        return $this;
    }
    /**
     * Get FarePull value
     * @return string|null
     */
    public function getFarePull(): ?string
    {
        return $this->FarePull;
    }
    /**
     * Set FarePull value
     * @param string $farePull
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function setFarePull(?string $farePull = null): self
    {
        $this->FarePull = $farePull;
        
        return $this;
    }
    /**
     * Get PassengerTypeCode value
     * @return string|null
     */
    public function getPassengerTypeCode(): ?string
    {
        return $this->PassengerTypeCode;
    }
    /**
     * Set PassengerTypeCode value
     * @param string $passengerTypeCode
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function setPassengerTypeCode(?string $passengerTypeCode = null): self
    {
        $this->PassengerTypeCode = $passengerTypeCode;
        
        return $this;
    }
    /**
     * Get PassengerCount value
     * @return int|null
     */
    public function getPassengerCount(): ?int
    {
        return $this->PassengerCount;
    }
    /**
     * Set PassengerCount value
     * @param int $passengerCount
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function setPassengerCount(?int $passengerCount = null): self
    {
        $this->PassengerCount = $passengerCount;
        
        return $this;
    }
    /**
     * Get FormOfRefund value
     * @return string|null
     */
    public function getFormOfRefund(): ?string
    {
        return $this->FormOfRefund;
    }
    /**
     * Set FormOfRefund value
     * @param string $formOfRefund
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function setFormOfRefund(?string $formOfRefund = null): self
    {
        $this->FormOfRefund = $formOfRefund;
        
        return $this;
    }
    /**
     * Get Refund value
     * @return string|null
     */
    public function getRefund(): ?string
    {
        return $this->Refund;
    }
    /**
     * Set Refund value
     * @param string $refund
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo
     */
    public function setRefund(?string $refund = null): self
    {
        $this->Refund = $refund;
        
        return $this;
    }
}
