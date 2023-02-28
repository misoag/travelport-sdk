<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrePayPriceInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Detailed tax information for the pre pay account | Pricing detail for the Pre Pay Account
 * @subpackage Structs
 */
class PrePayPriceInfo extends AbstractStructBase
{
    /**
     * The TaxInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TaxInfo
     * @var \Travelport\UniversalRecord\StructType\TypeTaxInfo[]
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
     * The TotalFare
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $TotalFare = null;
    /**
     * The TotalTax
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $TotalTax = null;
    /**
     * Constructor method for PrePayPriceInfo
     * @uses PrePayPriceInfo::setTaxInfo()
     * @uses PrePayPriceInfo::setBaseFare()
     * @uses PrePayPriceInfo::setTotalFare()
     * @uses PrePayPriceInfo::setTotalTax()
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo[] $taxInfo
     * @param string $baseFare
     * @param string $totalFare
     * @param string $totalTax
     */
    public function __construct(?array $taxInfo = null, ?string $baseFare = null, ?string $totalFare = null, ?string $totalTax = null)
    {
        $this
            ->setTaxInfo($taxInfo)
            ->setBaseFare($baseFare)
            ->setTotalFare($totalFare)
            ->setTotalTax($totalTax);
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
        foreach ($values as $prePayPriceInfoTaxInfoItem) {
            // validation for constraint: itemType
            if (!$prePayPriceInfoTaxInfoItem instanceof \Travelport\UniversalRecord\StructType\TypeTaxInfo) {
                $invalidValues[] = is_object($prePayPriceInfoTaxInfoItem) ? get_class($prePayPriceInfoTaxInfoItem) : sprintf('%s(%s)', gettype($prePayPriceInfoTaxInfoItem), var_export($prePayPriceInfoTaxInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaxInfo property can only contain items of type \Travelport\UniversalRecord\StructType\TypeTaxInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TaxInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo[] $taxInfo
     * @return \Travelport\UniversalRecord\StructType\PrePayPriceInfo
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
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo $item
     * @return \Travelport\UniversalRecord\StructType\PrePayPriceInfo
     */
    public function addToTaxInfo(\Travelport\UniversalRecord\StructType\TypeTaxInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeTaxInfo) {
            throw new InvalidArgumentException(sprintf('The TaxInfo property can only contain items of type \Travelport\UniversalRecord\StructType\TypeTaxInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \Travelport\UniversalRecord\StructType\PrePayPriceInfo
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
     * Get TotalFare value
     * @return string|null
     */
    public function getTotalFare(): ?string
    {
        return $this->TotalFare;
    }
    /**
     * Set TotalFare value
     * @param string $totalFare
     * @return \Travelport\UniversalRecord\StructType\PrePayPriceInfo
     */
    public function setTotalFare(?string $totalFare = null): self
    {
        // validation for constraint: string
        if (!is_null($totalFare) && !is_string($totalFare)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalFare, true), gettype($totalFare)), __LINE__);
        }
        $this->TotalFare = $totalFare;
        
        return $this;
    }
    /**
     * Get TotalTax value
     * @return string|null
     */
    public function getTotalTax(): ?string
    {
        return $this->TotalTax;
    }
    /**
     * Set TotalTax value
     * @param string $totalTax
     * @return \Travelport\UniversalRecord\StructType\PrePayPriceInfo
     */
    public function setTotalTax(?string $totalTax = null): self
    {
        // validation for constraint: string
        if (!is_null($totalTax) && !is_string($totalTax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalTax, true), gettype($totalTax)), __LINE__);
        }
        $this->TotalTax = $totalTax;
        
        return $this;
    }
}
