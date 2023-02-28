<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MCOPriceData StructType
 * @subpackage Structs
 */
class MCOPriceData extends AbstractStructBase
{
    /**
     * The MCOAmount
     * Meta information extracted from the WSDL
     * - documentation: The total value of the MCO including any processing fees. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $MCOAmount;
    /**
     * The TaxInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeTaxInfo[]
     */
    protected ?array $TaxInfo = null;
    /**
     * The Commission
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\Commission|null
     */
    protected ?\Travelport\Util\StructType\Commission $Commission = null;
    /**
     * The MCOEquivalentFare
     * Meta information extracted from the WSDL
     * - documentation: Exchange value of the currency actually collected. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $MCOEquivalentFare = null;
    /**
     * The MCOTotalAmount
     * Meta information extracted from the WSDL
     * - documentation: The Total amount for the MCO. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $MCOTotalAmount = null;
    /**
     * Constructor method for MCOPriceData
     * @uses MCOPriceData::setMCOAmount()
     * @uses MCOPriceData::setTaxInfo()
     * @uses MCOPriceData::setCommission()
     * @uses MCOPriceData::setMCOEquivalentFare()
     * @uses MCOPriceData::setMCOTotalAmount()
     * @param string $mCOAmount
     * @param \Travelport\Util\StructType\TypeTaxInfo[] $taxInfo
     * @param \Travelport\Util\StructType\Commission $commission
     * @param string $mCOEquivalentFare
     * @param string $mCOTotalAmount
     */
    public function __construct(string $mCOAmount, ?array $taxInfo = null, ?\Travelport\Util\StructType\Commission $commission = null, ?string $mCOEquivalentFare = null, ?string $mCOTotalAmount = null)
    {
        $this
            ->setMCOAmount($mCOAmount)
            ->setTaxInfo($taxInfo)
            ->setCommission($commission)
            ->setMCOEquivalentFare($mCOEquivalentFare)
            ->setMCOTotalAmount($mCOTotalAmount);
    }
    /**
     * Get MCOAmount value
     * @return string
     */
    public function getMCOAmount(): string
    {
        return $this->MCOAmount;
    }
    /**
     * Set MCOAmount value
     * @param string $mCOAmount
     * @return \Travelport\Util\StructType\MCOPriceData
     */
    public function setMCOAmount(string $mCOAmount): self
    {
        // validation for constraint: string
        if (!is_null($mCOAmount) && !is_string($mCOAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mCOAmount, true), gettype($mCOAmount)), __LINE__);
        }
        $this->MCOAmount = $mCOAmount;
        
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
     * This method is responsible for validating the value(s) passed to the setTaxInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaxInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaxInfoForArrayConstraintFromSetTaxInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $mCOPriceDataTaxInfoItem) {
            // validation for constraint: itemType
            if (!$mCOPriceDataTaxInfoItem instanceof \Travelport\Util\StructType\TypeTaxInfo) {
                $invalidValues[] = is_object($mCOPriceDataTaxInfoItem) ? get_class($mCOPriceDataTaxInfoItem) : sprintf('%s(%s)', gettype($mCOPriceDataTaxInfoItem), var_export($mCOPriceDataTaxInfoItem, true));
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
     * @return \Travelport\Util\StructType\MCOPriceData
     */
    public function setTaxInfo(?array $taxInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($taxInfoArrayErrorMessage = self::validateTaxInfoForArrayConstraintFromSetTaxInfo($taxInfo))) {
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
     * @return \Travelport\Util\StructType\MCOPriceData
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
     * Get Commission value
     * @return \Travelport\Util\StructType\Commission|null
     */
    public function getCommission(): ?\Travelport\Util\StructType\Commission
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param \Travelport\Util\StructType\Commission $commission
     * @return \Travelport\Util\StructType\MCOPriceData
     */
    public function setCommission(?\Travelport\Util\StructType\Commission $commission = null): self
    {
        $this->Commission = $commission;
        
        return $this;
    }
    /**
     * Get MCOEquivalentFare value
     * @return string|null
     */
    public function getMCOEquivalentFare(): ?string
    {
        return $this->MCOEquivalentFare;
    }
    /**
     * Set MCOEquivalentFare value
     * @param string $mCOEquivalentFare
     * @return \Travelport\Util\StructType\MCOPriceData
     */
    public function setMCOEquivalentFare(?string $mCOEquivalentFare = null): self
    {
        // validation for constraint: string
        if (!is_null($mCOEquivalentFare) && !is_string($mCOEquivalentFare)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mCOEquivalentFare, true), gettype($mCOEquivalentFare)), __LINE__);
        }
        $this->MCOEquivalentFare = $mCOEquivalentFare;
        
        return $this;
    }
    /**
     * Get MCOTotalAmount value
     * @return string|null
     */
    public function getMCOTotalAmount(): ?string
    {
        return $this->MCOTotalAmount;
    }
    /**
     * Set MCOTotalAmount value
     * @param string $mCOTotalAmount
     * @return \Travelport\Util\StructType\MCOPriceData
     */
    public function setMCOTotalAmount(?string $mCOTotalAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($mCOTotalAmount) && !is_string($mCOTotalAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mCOTotalAmount, true), gettype($mCOTotalAmount)), __LINE__);
        }
        $this->MCOTotalAmount = $mCOTotalAmount;
        
        return $this;
    }
}
