<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculateTaxResult StructType
 * Meta information extracted from the WSDL
 * - documentation: Result container for a tax calculation
 * @subpackage Structs
 */
class CalculateTaxResult extends AbstractStructBase
{
    /**
     * The TotalBaseFare
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $TotalBaseFare;
    /**
     * The TotalTax
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $TotalTax;
    /**
     * The TotalFare
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $TotalFare;
    /**
     * The TaxCalcInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TaxCalcInfo
     * @var \Travelport\Util\StructType\TaxCalcInfo[]
     */
    protected ?array $TaxCalcInfo = null;
    /**
     * Constructor method for CalculateTaxResult
     * @uses CalculateTaxResult::setTotalBaseFare()
     * @uses CalculateTaxResult::setTotalTax()
     * @uses CalculateTaxResult::setTotalFare()
     * @uses CalculateTaxResult::setTaxCalcInfo()
     * @param string $totalBaseFare
     * @param string $totalTax
     * @param string $totalFare
     * @param \Travelport\Util\StructType\TaxCalcInfo[] $taxCalcInfo
     */
    public function __construct(string $totalBaseFare, string $totalTax, string $totalFare, ?array $taxCalcInfo = null)
    {
        $this
            ->setTotalBaseFare($totalBaseFare)
            ->setTotalTax($totalTax)
            ->setTotalFare($totalFare)
            ->setTaxCalcInfo($taxCalcInfo);
    }
    /**
     * Get TotalBaseFare value
     * @return string
     */
    public function getTotalBaseFare(): string
    {
        return $this->TotalBaseFare;
    }
    /**
     * Set TotalBaseFare value
     * @param string $totalBaseFare
     * @return \Travelport\Util\StructType\CalculateTaxResult
     */
    public function setTotalBaseFare(string $totalBaseFare): self
    {
        // validation for constraint: string
        if (!is_null($totalBaseFare) && !is_string($totalBaseFare)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalBaseFare, true), gettype($totalBaseFare)), __LINE__);
        }
        $this->TotalBaseFare = $totalBaseFare;
        
        return $this;
    }
    /**
     * Get TotalTax value
     * @return string
     */
    public function getTotalTax(): string
    {
        return $this->TotalTax;
    }
    /**
     * Set TotalTax value
     * @param string $totalTax
     * @return \Travelport\Util\StructType\CalculateTaxResult
     */
    public function setTotalTax(string $totalTax): self
    {
        // validation for constraint: string
        if (!is_null($totalTax) && !is_string($totalTax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalTax, true), gettype($totalTax)), __LINE__);
        }
        $this->TotalTax = $totalTax;
        
        return $this;
    }
    /**
     * Get TotalFare value
     * @return string
     */
    public function getTotalFare(): string
    {
        return $this->TotalFare;
    }
    /**
     * Set TotalFare value
     * @param string $totalFare
     * @return \Travelport\Util\StructType\CalculateTaxResult
     */
    public function setTotalFare(string $totalFare): self
    {
        // validation for constraint: string
        if (!is_null($totalFare) && !is_string($totalFare)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalFare, true), gettype($totalFare)), __LINE__);
        }
        $this->TotalFare = $totalFare;
        
        return $this;
    }
    /**
     * Get TaxCalcInfo value
     * @return \Travelport\Util\StructType\TaxCalcInfo[]
     */
    public function getTaxCalcInfo(): ?array
    {
        return $this->TaxCalcInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setTaxCalcInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaxCalcInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaxCalcInfoForArrayConstraintsFromSetTaxCalcInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $calculateTaxResultTaxCalcInfoItem) {
            // validation for constraint: itemType
            if (!$calculateTaxResultTaxCalcInfoItem instanceof \Travelport\Util\StructType\TaxCalcInfo) {
                $invalidValues[] = is_object($calculateTaxResultTaxCalcInfoItem) ? get_class($calculateTaxResultTaxCalcInfoItem) : sprintf('%s(%s)', gettype($calculateTaxResultTaxCalcInfoItem), var_export($calculateTaxResultTaxCalcInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaxCalcInfo property can only contain items of type \Travelport\Util\StructType\TaxCalcInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TaxCalcInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TaxCalcInfo[] $taxCalcInfo
     * @return \Travelport\Util\StructType\CalculateTaxResult
     */
    public function setTaxCalcInfo(?array $taxCalcInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($taxCalcInfoArrayErrorMessage = self::validateTaxCalcInfoForArrayConstraintsFromSetTaxCalcInfo($taxCalcInfo))) {
            throw new InvalidArgumentException($taxCalcInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($taxCalcInfo) && count($taxCalcInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($taxCalcInfo)), __LINE__);
        }
        $this->TaxCalcInfo = $taxCalcInfo;
        
        return $this;
    }
    /**
     * Add item to TaxCalcInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TaxCalcInfo $item
     * @return \Travelport\Util\StructType\CalculateTaxResult
     */
    public function addToTaxCalcInfo(\Travelport\Util\StructType\TaxCalcInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TaxCalcInfo) {
            throw new InvalidArgumentException(sprintf('The TaxCalcInfo property can only contain items of type \Travelport\Util\StructType\TaxCalcInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TaxCalcInfo) && count($this->TaxCalcInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TaxCalcInfo)), __LINE__);
        }
        $this->TaxCalcInfo[] = $item;
        
        return $this;
    }
}
