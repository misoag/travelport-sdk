<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected string $ExchangeAmount;
    /**
     * The TotalPenaltyTaxInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TotalPenaltyTaxInfo|null
     */
    protected ?\Travelport\Util\StructType\TotalPenaltyTaxInfo $TotalPenaltyTaxInfo = null;
    /**
     * The PaidTax
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeTax[]
     */
    protected ?array $PaidTax = null;
    /**
     * The TicketFeeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TicketFeeInfo[]
     */
    protected ?array $TicketFeeInfo = null;
    /**
     * The Reason
     * Meta information extracted from the WSDL
     * - documentation: Used for rapid reprice. The reason code or text is returned if the PricingTag is not equal to A, and explains why A was not returned. Providers: 1G/1V/1P/1S/1A
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Reason = null;
    /**
     * The FeeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeFeeInfo[]
     */
    protected ?array $FeeInfo = null;
    /**
     * The TaxInfo
     * Meta information extracted from the WSDL
     * - documentation: Itinerary level taxes
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeTaxInfo[]
     */
    protected ?array $TaxInfo = null;
    /**
     * The BaseFare
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $BaseFare = null;
    /**
     * The EquivalentBaseFare
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $EquivalentBaseFare = null;
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
     * The ChangeFee
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ChangeFee = null;
    /**
     * The ForfeitAmount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ForfeitAmount = null;
    /**
     * The Refundable
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Refundable = null;
    /**
     * The Exchangeable
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Exchangeable = null;
    /**
     * The FirstClassUpgrade
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $FirstClassUpgrade = null;
    /**
     * The TicketByDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $TicketByDate = null;
    /**
     * The PricingTag
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $PricingTag = null;
    /**
     * The EquivalentChangeFee
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $EquivalentChangeFee = null;
    /**
     * The EquivalentExchangeAmount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $EquivalentExchangeAmount = null;
    /**
     * The AddCollection
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $AddCollection = null;
    /**
     * The ResidualValue
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ResidualValue = null;
    /**
     * The TotalResidualValue
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $TotalResidualValue = null;
    /**
     * The OriginalFlightValue
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $OriginalFlightValue = null;
    /**
     * The FlownSegmentValue
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $FlownSegmentValue = null;
    /**
     * The BulkTicketAdvisory
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $BulkTicketAdvisory = null;
    /**
     * The FarePull
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $FarePull = null;
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
    protected ?string $PassengerTypeCode = null;
    /**
     * The PassengerCount
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $PassengerCount = null;
    /**
     * The FormOfRefund
     * Meta information extracted from the WSDL
     * - documentation: How the refund will be issued. Values will be MCO or FormOfPayment
     * - use: optional
     * @var string|null
     */
    protected ?string $FormOfRefund = null;
    /**
     * The Refund
     * Meta information extracted from the WSDL
     * - documentation: Total refund amount. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Refund = null;
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
     * @param \Travelport\Util\StructType\TotalPenaltyTaxInfo $totalPenaltyTaxInfo
     * @param \Travelport\Util\StructType\TypeTax[] $paidTax
     * @param \Travelport\Util\StructType\TicketFeeInfo[] $ticketFeeInfo
     * @param string[] $reason
     * @param \Travelport\Util\StructType\TypeFeeInfo[] $feeInfo
     * @param \Travelport\Util\StructType\TypeTaxInfo[] $taxInfo
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
    public function __construct(string $exchangeAmount, ?\Travelport\Util\StructType\TotalPenaltyTaxInfo $totalPenaltyTaxInfo = null, ?array $paidTax = null, ?array $ticketFeeInfo = null, ?array $reason = null, ?array $feeInfo = null, ?array $taxInfo = null, ?string $baseFare = null, ?string $equivalentBaseFare = null, ?string $taxes = null, ?string $changeFee = null, ?string $forfeitAmount = null, ?bool $refundable = null, ?bool $exchangeable = null, ?bool $firstClassUpgrade = null, ?string $ticketByDate = null, ?string $pricingTag = null, ?string $equivalentChangeFee = null, ?string $equivalentExchangeAmount = null, ?string $addCollection = null, ?string $residualValue = null, ?string $totalResidualValue = null, ?string $originalFlightValue = null, ?string $flownSegmentValue = null, ?bool $bulkTicketAdvisory = null, ?string $farePull = null, ?string $passengerTypeCode = null, ?int $passengerCount = null, ?string $formOfRefund = null, ?string $refund = null)
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
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function setExchangeAmount(string $exchangeAmount): self
    {
        // validation for constraint: string
        if (!is_null($exchangeAmount) && !is_string($exchangeAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exchangeAmount, true), gettype($exchangeAmount)), __LINE__);
        }
        $this->ExchangeAmount = $exchangeAmount;
        
        return $this;
    }
    /**
     * Get TotalPenaltyTaxInfo value
     * @return \Travelport\Util\StructType\TotalPenaltyTaxInfo|null
     */
    public function getTotalPenaltyTaxInfo(): ?\Travelport\Util\StructType\TotalPenaltyTaxInfo
    {
        return $this->TotalPenaltyTaxInfo;
    }
    /**
     * Set TotalPenaltyTaxInfo value
     * @param \Travelport\Util\StructType\TotalPenaltyTaxInfo $totalPenaltyTaxInfo
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function setTotalPenaltyTaxInfo(?\Travelport\Util\StructType\TotalPenaltyTaxInfo $totalPenaltyTaxInfo = null): self
    {
        $this->TotalPenaltyTaxInfo = $totalPenaltyTaxInfo;
        
        return $this;
    }
    /**
     * Get PaidTax value
     * @return \Travelport\Util\StructType\TypeTax[]
     */
    public function getPaidTax(): ?array
    {
        return $this->PaidTax;
    }
    /**
     * This method is responsible for validating the values passed to the setPaidTax method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaidTax method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaidTaxForArrayConstraintsFromSetPaidTax(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airExchangeInfoPaidTaxItem) {
            // validation for constraint: itemType
            if (!$airExchangeInfoPaidTaxItem instanceof \Travelport\Util\StructType\TypeTax) {
                $invalidValues[] = is_object($airExchangeInfoPaidTaxItem) ? get_class($airExchangeInfoPaidTaxItem) : sprintf('%s(%s)', gettype($airExchangeInfoPaidTaxItem), var_export($airExchangeInfoPaidTaxItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaidTax property can only contain items of type \Travelport\Util\StructType\TypeTax, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PaidTax value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeTax[] $paidTax
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function setPaidTax(?array $paidTax = null): self
    {
        // validation for constraint: array
        if ('' !== ($paidTaxArrayErrorMessage = self::validatePaidTaxForArrayConstraintsFromSetPaidTax($paidTax))) {
            throw new InvalidArgumentException($paidTaxArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($paidTax) && count($paidTax) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($paidTax)), __LINE__);
        }
        $this->PaidTax = $paidTax;
        
        return $this;
    }
    /**
     * Add item to PaidTax value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeTax $item
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function addToPaidTax(\Travelport\Util\StructType\TypeTax $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeTax) {
            throw new InvalidArgumentException(sprintf('The PaidTax property can only contain items of type \Travelport\Util\StructType\TypeTax, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PaidTax) && count($this->PaidTax) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PaidTax)), __LINE__);
        }
        $this->PaidTax[] = $item;
        
        return $this;
    }
    /**
     * Get TicketFeeInfo value
     * @return \Travelport\Util\StructType\TicketFeeInfo[]
     */
    public function getTicketFeeInfo(): ?array
    {
        return $this->TicketFeeInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setTicketFeeInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTicketFeeInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTicketFeeInfoForArrayConstraintsFromSetTicketFeeInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airExchangeInfoTicketFeeInfoItem) {
            // validation for constraint: itemType
            if (!$airExchangeInfoTicketFeeInfoItem instanceof \Travelport\Util\StructType\TicketFeeInfo) {
                $invalidValues[] = is_object($airExchangeInfoTicketFeeInfoItem) ? get_class($airExchangeInfoTicketFeeInfoItem) : sprintf('%s(%s)', gettype($airExchangeInfoTicketFeeInfoItem), var_export($airExchangeInfoTicketFeeInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TicketFeeInfo property can only contain items of type \Travelport\Util\StructType\TicketFeeInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TicketFeeInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TicketFeeInfo[] $ticketFeeInfo
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function setTicketFeeInfo(?array $ticketFeeInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($ticketFeeInfoArrayErrorMessage = self::validateTicketFeeInfoForArrayConstraintsFromSetTicketFeeInfo($ticketFeeInfo))) {
            throw new InvalidArgumentException($ticketFeeInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($ticketFeeInfo) && count($ticketFeeInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($ticketFeeInfo)), __LINE__);
        }
        $this->TicketFeeInfo = $ticketFeeInfo;
        
        return $this;
    }
    /**
     * Add item to TicketFeeInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TicketFeeInfo $item
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function addToTicketFeeInfo(\Travelport\Util\StructType\TicketFeeInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TicketFeeInfo) {
            throw new InvalidArgumentException(sprintf('The TicketFeeInfo property can only contain items of type \Travelport\Util\StructType\TicketFeeInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TicketFeeInfo) && count($this->TicketFeeInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TicketFeeInfo)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setReason method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReason method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReasonForArrayConstraintsFromSetReason(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airExchangeInfoReasonItem) {
            // validation for constraint: itemType
            if (!is_string($airExchangeInfoReasonItem)) {
                $invalidValues[] = is_object($airExchangeInfoReasonItem) ? get_class($airExchangeInfoReasonItem) : sprintf('%s(%s)', gettype($airExchangeInfoReasonItem), var_export($airExchangeInfoReasonItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Reason property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Reason value
     * @throws InvalidArgumentException
     * @param string[] $reason
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function setReason(?array $reason = null): self
    {
        // validation for constraint: array
        if ('' !== ($reasonArrayErrorMessage = self::validateReasonForArrayConstraintsFromSetReason($reason))) {
            throw new InvalidArgumentException($reasonArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($reason) && count($reason) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($reason)), __LINE__);
        }
        $this->Reason = $reason;
        
        return $this;
    }
    /**
     * Add item to Reason value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function addToReason(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Reason property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Reason) && count($this->Reason) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Reason)), __LINE__);
        }
        $this->Reason[] = $item;
        
        return $this;
    }
    /**
     * Get FeeInfo value
     * @return \Travelport\Util\StructType\TypeFeeInfo[]
     */
    public function getFeeInfo(): ?array
    {
        return $this->FeeInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setFeeInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFeeInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeeInfoForArrayConstraintsFromSetFeeInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airExchangeInfoFeeInfoItem) {
            // validation for constraint: itemType
            if (!$airExchangeInfoFeeInfoItem instanceof \Travelport\Util\StructType\TypeFeeInfo) {
                $invalidValues[] = is_object($airExchangeInfoFeeInfoItem) ? get_class($airExchangeInfoFeeInfoItem) : sprintf('%s(%s)', gettype($airExchangeInfoFeeInfoItem), var_export($airExchangeInfoFeeInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FeeInfo property can only contain items of type \Travelport\Util\StructType\TypeFeeInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FeeInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeFeeInfo[] $feeInfo
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function setFeeInfo(?array $feeInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($feeInfoArrayErrorMessage = self::validateFeeInfoForArrayConstraintsFromSetFeeInfo($feeInfo))) {
            throw new InvalidArgumentException($feeInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($feeInfo) && count($feeInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($feeInfo)), __LINE__);
        }
        $this->FeeInfo = $feeInfo;
        
        return $this;
    }
    /**
     * Add item to FeeInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeFeeInfo $item
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function addToFeeInfo(\Travelport\Util\StructType\TypeFeeInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeFeeInfo) {
            throw new InvalidArgumentException(sprintf('The FeeInfo property can only contain items of type \Travelport\Util\StructType\TypeFeeInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FeeInfo) && count($this->FeeInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FeeInfo)), __LINE__);
        }
        $this->FeeInfo[] = $item;
        
        return $this;
    }
    /**
     * Get TaxInfo value
     * @return \Travelport\Util\StructType\TypeTaxInfo[]
     */
    public function getTaxInfo(): ?array
    {
        return $this->TaxInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setTaxInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaxInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaxInfoForArrayConstraintsFromSetTaxInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airExchangeInfoTaxInfoItem) {
            // validation for constraint: itemType
            if (!$airExchangeInfoTaxInfoItem instanceof \Travelport\Util\StructType\TypeTaxInfo) {
                $invalidValues[] = is_object($airExchangeInfoTaxInfoItem) ? get_class($airExchangeInfoTaxInfoItem) : sprintf('%s(%s)', gettype($airExchangeInfoTaxInfoItem), var_export($airExchangeInfoTaxInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaxInfo property can only contain items of type \Travelport\Util\StructType\TypeTaxInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TaxInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeTaxInfo[] $taxInfo
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function setTaxInfo(?array $taxInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($taxInfoArrayErrorMessage = self::validateTaxInfoForArrayConstraintsFromSetTaxInfo($taxInfo))) {
            throw new InvalidArgumentException($taxInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($taxInfo) && count($taxInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($taxInfo)), __LINE__);
        }
        $this->TaxInfo = $taxInfo;
        
        return $this;
    }
    /**
     * Add item to TaxInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeTaxInfo $item
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function addToTaxInfo(\Travelport\Util\StructType\TypeTaxInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeTaxInfo) {
            throw new InvalidArgumentException(sprintf('The TaxInfo property can only contain items of type \Travelport\Util\StructType\TypeTaxInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TaxInfo) && count($this->TaxInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TaxInfo)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function setBaseFare(?string $baseFare = null): self
    {
        // validation for constraint: string
        if (!is_null($baseFare) && !is_string($baseFare)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($baseFare, true), gettype($baseFare)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function setEquivalentBaseFare(?string $equivalentBaseFare = null): self
    {
        // validation for constraint: string
        if (!is_null($equivalentBaseFare) && !is_string($equivalentBaseFare)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($equivalentBaseFare, true), gettype($equivalentBaseFare)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirExchangeInfo
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
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function setChangeFee(?string $changeFee = null): self
    {
        // validation for constraint: string
        if (!is_null($changeFee) && !is_string($changeFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($changeFee, true), gettype($changeFee)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function setForfeitAmount(?string $forfeitAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($forfeitAmount) && !is_string($forfeitAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forfeitAmount, true), gettype($forfeitAmount)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function setRefundable(?bool $refundable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($refundable) && !is_bool($refundable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($refundable, true), gettype($refundable)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function setExchangeable(?bool $exchangeable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($exchangeable) && !is_bool($exchangeable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exchangeable, true), gettype($exchangeable)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function setFirstClassUpgrade(?bool $firstClassUpgrade = null): self
    {
        // validation for constraint: boolean
        if (!is_null($firstClassUpgrade) && !is_bool($firstClassUpgrade)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($firstClassUpgrade, true), gettype($firstClassUpgrade)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function setTicketByDate(?string $ticketByDate = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketByDate) && !is_string($ticketByDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketByDate, true), gettype($ticketByDate)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function setPricingTag(?string $pricingTag = null): self
    {
        // validation for constraint: string
        if (!is_null($pricingTag) && !is_string($pricingTag)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pricingTag, true), gettype($pricingTag)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function setEquivalentChangeFee(?string $equivalentChangeFee = null): self
    {
        // validation for constraint: string
        if (!is_null($equivalentChangeFee) && !is_string($equivalentChangeFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($equivalentChangeFee, true), gettype($equivalentChangeFee)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function setEquivalentExchangeAmount(?string $equivalentExchangeAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($equivalentExchangeAmount) && !is_string($equivalentExchangeAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($equivalentExchangeAmount, true), gettype($equivalentExchangeAmount)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function setAddCollection(?string $addCollection = null): self
    {
        // validation for constraint: string
        if (!is_null($addCollection) && !is_string($addCollection)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addCollection, true), gettype($addCollection)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function setResidualValue(?string $residualValue = null): self
    {
        // validation for constraint: string
        if (!is_null($residualValue) && !is_string($residualValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($residualValue, true), gettype($residualValue)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function setTotalResidualValue(?string $totalResidualValue = null): self
    {
        // validation for constraint: string
        if (!is_null($totalResidualValue) && !is_string($totalResidualValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalResidualValue, true), gettype($totalResidualValue)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function setOriginalFlightValue(?string $originalFlightValue = null): self
    {
        // validation for constraint: string
        if (!is_null($originalFlightValue) && !is_string($originalFlightValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalFlightValue, true), gettype($originalFlightValue)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function setFlownSegmentValue(?string $flownSegmentValue = null): self
    {
        // validation for constraint: string
        if (!is_null($flownSegmentValue) && !is_string($flownSegmentValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flownSegmentValue, true), gettype($flownSegmentValue)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function setBulkTicketAdvisory(?bool $bulkTicketAdvisory = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bulkTicketAdvisory) && !is_bool($bulkTicketAdvisory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bulkTicketAdvisory, true), gettype($bulkTicketAdvisory)), __LINE__);
        }
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
     * @uses \Travelport\Util\EnumType\TypeFarePull::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeFarePull::getValidValues()
     * @throws InvalidArgumentException
     * @param string $farePull
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function setFarePull(?string $farePull = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeFarePull::valueIsValid($farePull)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeFarePull', is_array($farePull) ? implode(', ', $farePull) : var_export($farePull, true), implode(', ', \Travelport\Util\EnumType\TypeFarePull::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function setPassengerTypeCode(?string $passengerTypeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($passengerTypeCode) && !is_string($passengerTypeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passengerTypeCode, true), gettype($passengerTypeCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($passengerTypeCode) && mb_strlen((string) $passengerTypeCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $passengerTypeCode)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($passengerTypeCode) && mb_strlen((string) $passengerTypeCode) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $passengerTypeCode)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function setPassengerCount(?int $passengerCount = null): self
    {
        // validation for constraint: int
        if (!is_null($passengerCount) && !(is_int($passengerCount) || ctype_digit($passengerCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($passengerCount, true), gettype($passengerCount)), __LINE__);
        }
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
     * @uses \Travelport\Util\EnumType\TypeFormOfRefund::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeFormOfRefund::getValidValues()
     * @throws InvalidArgumentException
     * @param string $formOfRefund
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function setFormOfRefund(?string $formOfRefund = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeFormOfRefund::valueIsValid($formOfRefund)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeFormOfRefund', is_array($formOfRefund) ? implode(', ', $formOfRefund) : var_export($formOfRefund, true), implode(', ', \Travelport\Util\EnumType\TypeFormOfRefund::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirExchangeInfo
     */
    public function setRefund(?string $refund = null): self
    {
        // validation for constraint: string
        if (!is_null($refund) && !is_string($refund)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refund, true), gettype($refund)), __LINE__);
        }
        $this->Refund = $refund;
        
        return $this;
    }
}
