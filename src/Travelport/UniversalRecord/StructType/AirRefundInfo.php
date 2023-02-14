<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirRefundInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Provides results of a refund quote
 * @subpackage Structs
 */
class AirRefundInfo extends AbstractStructBase
{
    /**
     * The RefundRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:RefundRemark
     * @var \Travelport\UniversalRecord\StructType\RefundRemark[]
     */
    protected ?array $RefundRemark = null;
    /**
     * The RefundAmount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $RefundAmount = null;
    /**
     * The RetainAmount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $RetainAmount = null;
    /**
     * The RefundFee
     * Meta information extracted from the WSDL
     * - documentation: Refund fee for ACH/1P | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $RefundFee = null;
    /**
     * The RefundableTaxes
     * Meta information extracted from the WSDL
     * - documentation: 1P - None : All taxes are not refundable. Unknown : Refundability of taxes are not known.
     * - use: optional
     * @var string|null
     */
    protected ?string $RefundableTaxes = null;
    /**
     * The FiledCurrency
     * Meta information extracted from the WSDL
     * - documentation: 1P Currency of filed CAT33 refund fee | 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $FiledCurrency = null;
    /**
     * The ConversionRate
     * Meta information extracted from the WSDL
     * - documentation: 1P - Currency conversion rate used for conversion between FiledCurrency and PCC base currency in which the response is returned.
     * - use: optional
     * @var float|null
     */
    protected ?float $ConversionRate = null;
    /**
     * The Taxes
     * Meta information extracted from the WSDL
     * - documentation: 1P - The total value of taxes. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Taxes = null;
    /**
     * The OriginalTicketTotal
     * Meta information extracted from the WSDL
     * - documentation: 1P - The original ticket amount. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $OriginalTicketTotal = null;
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
     * The Retain
     * Meta information extracted from the WSDL
     * - documentation: This indicates whether any amount is retained by the provider.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Retain = null;
    /**
     * The Refund
     * Meta information extracted from the WSDL
     * - documentation: This indicates whether carrier/host supports refund for the correcponding pnr.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Refund = null;
    /**
     * Constructor method for AirRefundInfo
     * @uses AirRefundInfo::setRefundRemark()
     * @uses AirRefundInfo::setRefundAmount()
     * @uses AirRefundInfo::setRetainAmount()
     * @uses AirRefundInfo::setRefundFee()
     * @uses AirRefundInfo::setRefundableTaxes()
     * @uses AirRefundInfo::setFiledCurrency()
     * @uses AirRefundInfo::setConversionRate()
     * @uses AirRefundInfo::setTaxes()
     * @uses AirRefundInfo::setOriginalTicketTotal()
     * @uses AirRefundInfo::setForfeitAmount()
     * @uses AirRefundInfo::setRetain()
     * @uses AirRefundInfo::setRefund()
     * @param \Travelport\UniversalRecord\StructType\RefundRemark[] $refundRemark
     * @param string $refundAmount
     * @param string $retainAmount
     * @param string $refundFee
     * @param string $refundableTaxes
     * @param string $filedCurrency
     * @param float $conversionRate
     * @param string $taxes
     * @param string $originalTicketTotal
     * @param string $forfeitAmount
     * @param bool $retain
     * @param bool $refund
     */
    public function __construct(?array $refundRemark = null, ?string $refundAmount = null, ?string $retainAmount = null, ?string $refundFee = null, ?string $refundableTaxes = null, ?string $filedCurrency = null, ?float $conversionRate = null, ?string $taxes = null, ?string $originalTicketTotal = null, ?string $forfeitAmount = null, ?bool $retain = false, ?bool $refund = false)
    {
        $this
            ->setRefundRemark($refundRemark)
            ->setRefundAmount($refundAmount)
            ->setRetainAmount($retainAmount)
            ->setRefundFee($refundFee)
            ->setRefundableTaxes($refundableTaxes)
            ->setFiledCurrency($filedCurrency)
            ->setConversionRate($conversionRate)
            ->setTaxes($taxes)
            ->setOriginalTicketTotal($originalTicketTotal)
            ->setForfeitAmount($forfeitAmount)
            ->setRetain($retain)
            ->setRefund($refund);
    }
    /**
     * Get RefundRemark value
     * @return \Travelport\UniversalRecord\StructType\RefundRemark[]
     */
    public function getRefundRemark(): ?array
    {
        return $this->RefundRemark;
    }
    /**
     * This method is responsible for validating the values passed to the setRefundRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRefundRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRefundRemarkForArrayConstraintsFromSetRefundRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airRefundInfoRefundRemarkItem) {
            // validation for constraint: itemType
            if (!$airRefundInfoRefundRemarkItem instanceof \Travelport\UniversalRecord\StructType\RefundRemark) {
                $invalidValues[] = is_object($airRefundInfoRefundRemarkItem) ? get_class($airRefundInfoRefundRemarkItem) : sprintf('%s(%s)', gettype($airRefundInfoRefundRemarkItem), var_export($airRefundInfoRefundRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RefundRemark property can only contain items of type \Travelport\UniversalRecord\StructType\RefundRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RefundRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RefundRemark[] $refundRemark
     * @return \Travelport\UniversalRecord\StructType\AirRefundInfo
     */
    public function setRefundRemark(?array $refundRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($refundRemarkArrayErrorMessage = self::validateRefundRemarkForArrayConstraintsFromSetRefundRemark($refundRemark))) {
            throw new InvalidArgumentException($refundRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($refundRemark) && count($refundRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($refundRemark)), __LINE__);
        }
        $this->RefundRemark = $refundRemark;
        
        return $this;
    }
    /**
     * Add item to RefundRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RefundRemark $item
     * @return \Travelport\UniversalRecord\StructType\AirRefundInfo
     */
    public function addToRefundRemark(\Travelport\UniversalRecord\StructType\RefundRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RefundRemark) {
            throw new InvalidArgumentException(sprintf('The RefundRemark property can only contain items of type \Travelport\UniversalRecord\StructType\RefundRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RefundRemark) && count($this->RefundRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RefundRemark)), __LINE__);
        }
        $this->RefundRemark[] = $item;
        
        return $this;
    }
    /**
     * Get RefundAmount value
     * @return string|null
     */
    public function getRefundAmount(): ?string
    {
        return $this->RefundAmount;
    }
    /**
     * Set RefundAmount value
     * @param string $refundAmount
     * @return \Travelport\UniversalRecord\StructType\AirRefundInfo
     */
    public function setRefundAmount(?string $refundAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($refundAmount) && !is_string($refundAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundAmount, true), gettype($refundAmount)), __LINE__);
        }
        $this->RefundAmount = $refundAmount;
        
        return $this;
    }
    /**
     * Get RetainAmount value
     * @return string|null
     */
    public function getRetainAmount(): ?string
    {
        return $this->RetainAmount;
    }
    /**
     * Set RetainAmount value
     * @param string $retainAmount
     * @return \Travelport\UniversalRecord\StructType\AirRefundInfo
     */
    public function setRetainAmount(?string $retainAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($retainAmount) && !is_string($retainAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retainAmount, true), gettype($retainAmount)), __LINE__);
        }
        $this->RetainAmount = $retainAmount;
        
        return $this;
    }
    /**
     * Get RefundFee value
     * @return string|null
     */
    public function getRefundFee(): ?string
    {
        return $this->RefundFee;
    }
    /**
     * Set RefundFee value
     * @param string $refundFee
     * @return \Travelport\UniversalRecord\StructType\AirRefundInfo
     */
    public function setRefundFee(?string $refundFee = null): self
    {
        // validation for constraint: string
        if (!is_null($refundFee) && !is_string($refundFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundFee, true), gettype($refundFee)), __LINE__);
        }
        $this->RefundFee = $refundFee;
        
        return $this;
    }
    /**
     * Get RefundableTaxes value
     * @return string|null
     */
    public function getRefundableTaxes(): ?string
    {
        return $this->RefundableTaxes;
    }
    /**
     * Set RefundableTaxes value
     * @param string $refundableTaxes
     * @return \Travelport\UniversalRecord\StructType\AirRefundInfo
     */
    public function setRefundableTaxes(?string $refundableTaxes = null): self
    {
        // validation for constraint: string
        if (!is_null($refundableTaxes) && !is_string($refundableTaxes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundableTaxes, true), gettype($refundableTaxes)), __LINE__);
        }
        $this->RefundableTaxes = $refundableTaxes;
        
        return $this;
    }
    /**
     * Get FiledCurrency value
     * @return string|null
     */
    public function getFiledCurrency(): ?string
    {
        return $this->FiledCurrency;
    }
    /**
     * Set FiledCurrency value
     * @param string $filedCurrency
     * @return \Travelport\UniversalRecord\StructType\AirRefundInfo
     */
    public function setFiledCurrency(?string $filedCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($filedCurrency) && !is_string($filedCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filedCurrency, true), gettype($filedCurrency)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($filedCurrency) && mb_strlen((string) $filedCurrency) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $filedCurrency)), __LINE__);
        }
        $this->FiledCurrency = $filedCurrency;
        
        return $this;
    }
    /**
     * Get ConversionRate value
     * @return float|null
     */
    public function getConversionRate(): ?float
    {
        return $this->ConversionRate;
    }
    /**
     * Set ConversionRate value
     * @param float $conversionRate
     * @return \Travelport\UniversalRecord\StructType\AirRefundInfo
     */
    public function setConversionRate(?float $conversionRate = null): self
    {
        // validation for constraint: float
        if (!is_null($conversionRate) && !(is_float($conversionRate) || is_numeric($conversionRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($conversionRate, true), gettype($conversionRate)), __LINE__);
        }
        $this->ConversionRate = $conversionRate;
        
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
     * @return \Travelport\UniversalRecord\StructType\AirRefundInfo
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
     * Get OriginalTicketTotal value
     * @return string|null
     */
    public function getOriginalTicketTotal(): ?string
    {
        return $this->OriginalTicketTotal;
    }
    /**
     * Set OriginalTicketTotal value
     * @param string $originalTicketTotal
     * @return \Travelport\UniversalRecord\StructType\AirRefundInfo
     */
    public function setOriginalTicketTotal(?string $originalTicketTotal = null): self
    {
        // validation for constraint: string
        if (!is_null($originalTicketTotal) && !is_string($originalTicketTotal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalTicketTotal, true), gettype($originalTicketTotal)), __LINE__);
        }
        $this->OriginalTicketTotal = $originalTicketTotal;
        
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
     * @return \Travelport\UniversalRecord\StructType\AirRefundInfo
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
     * Get Retain value
     * @return bool|null
     */
    public function getRetain(): ?bool
    {
        return $this->Retain;
    }
    /**
     * Set Retain value
     * @param bool $retain
     * @return \Travelport\UniversalRecord\StructType\AirRefundInfo
     */
    public function setRetain(?bool $retain = false): self
    {
        // validation for constraint: boolean
        if (!is_null($retain) && !is_bool($retain)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($retain, true), gettype($retain)), __LINE__);
        }
        $this->Retain = $retain;
        
        return $this;
    }
    /**
     * Get Refund value
     * @return bool|null
     */
    public function getRefund(): ?bool
    {
        return $this->Refund;
    }
    /**
     * Set Refund value
     * @param bool $refund
     * @return \Travelport\UniversalRecord\StructType\AirRefundInfo
     */
    public function setRefund(?bool $refund = false): self
    {
        // validation for constraint: boolean
        if (!is_null($refund) && !is_bool($refund)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($refund, true), gettype($refund)), __LINE__);
        }
        $this->Refund = $refund;
        
        return $this;
    }
}
